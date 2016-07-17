<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use Auth;

use Invite;

use Mail;

class UserController extends Controller
{
    /**
     * Show the user is profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
    	return view('user.profile', array('user' => Auth::user()));
    }

    /**
     * Save the user's avatar.
     *
     * @return \Illuminate\Http\Response
     */
    public function avatar_upload(Request $request)
    {
    	//Handle the user upload of avatars
    	if ($request->hasFile('avatar'))
    	{
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatar/' . $filename) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();

    		return view('user.profile', array('user' => Auth::user()));
    	}
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_invite_send()
    {
        return view('user.send_invitation');
    }

    /**
     * Send invitation ref code and url.
     *
     */
    public function user_invite_sent(Request $request)
    {   
        $user = Auth::user();
        
        // Generate the reference code
        $refCode = Invite::invite($request->input('email'), $user->id);
        
        /**
        * Send the url to the invite user 
        * in order to provide the register form
        */
        Mail::send('emails.invite', ['refCode' => $refCode ], function($message) use ($request){

            $message->from('franklingabrielrodriguez@gmail.com', 'franklin');

            $message->to($request->input('email'), $request->input('name'));

            $message->subject('invitacion');

        });

        /**
        * Show a message if the emails wasn't sending
        * if not, show a succesfully message
        */
        if (count(Mail::failures()) > 0)
        {
            return view('emails.messages.error');

        } 
        else
        {
            return view('emails.messages.sent');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_invite_refcode()
    {
        return view('auth.register');
    }
}
