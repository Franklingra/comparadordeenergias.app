<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Invite;

use Image;

use Auth;

use Mail;


class UserController extends Controller
{
    /**
     * Index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the user is profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    	return view('user.profile', array('user' => Auth::user()));
    }

    /**
     * Edit form for user.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update user information.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

    }

    /**
     * Save the user's avatar.
     *
     * @return \Illuminate\Http\Response
     */
    public function avatarUpload(Request $request)
    {
    	//Handle the user upload of avatars
    	if ($request->hasFile('avatar'))
    	{
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar
            ->getClientOriginalExtension();
            
    		Image::make($avatar)
                ->resize(300, 300)
                ->save( public_path('/uploads/avatar/' . $filename) );

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
    public function sendRefCode()
    {
        return view('user.send_invitation');
    }

    /**
     * Send invitation ref code and url.
     *
     */
    public function sentRefCode(Request $request)
    {   
        $user = Auth::user();
        
        // Generate the reference code
        $refCode = Invite::invite($request
            ->input('email'), $user->id);
        
        /**
        * Send the url to the invite user 
        * in order to provide the register form
        */
        Mail::send('emails.invite', 
            ['refCode' => $refCode ], function($message) use ($request){

            $message->from(
                'franklingabrielrodriguez@gmail.com', 
                'Comparador de energias'
                );

            $message->to($request
                ->input('email'), $request
                ->input('name'));

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
     * Show the register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function userRefcode()
    {
        return view('auth.register');
    }
}
