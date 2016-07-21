<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class AdminController extends Controller
{

	 /**
     * Show the list of registry users.
     *
     * @return view
     */
    public function users_list()
    {
    	$users = User::all();

    	return view('admin.user.list')->with('users', $users);
    }

     /**
     * Show a user's profile.
     *
     * @return void
     */
    public function user_show()
    {

    }

     /**
     * Delete the current users selected.
     *
     * @return void
     */
    public function user_delete()
    {

    }

     /**
     * Update information of the user selected.
     *
     * @return void
     */
    public function user_update()
    {

    }
}
