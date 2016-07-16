<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use Auth;

class UserController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
    	return view('user.profile', array('user' => Auth::user()));
    }

        /**
     * Show the application dashboard.
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
}
