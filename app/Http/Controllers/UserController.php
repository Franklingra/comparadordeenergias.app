<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Invite;

use Image;

use App\User;

use Auth;

use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::name($request->get('first_name'))->orderBy('id', 'DESC')->paginate(7);
        
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('user.update')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
         
         $fields = $request->only(
             'first_name',
             'last_name',
             'email',
             'role',
             'gender',
             'biography',
             'birthday'
        );
        
        $user->fill($fields);
        
        if ($request->hasFile('avatar'))
        {
            $user->avatar = User::avatarUpload($request->file('avatar'));     
        }
        
        $user->save();
        
        notify()->flash('¡Información actualizada!', 'success');
        return redirect()->route('home.user.index')->withSuccess( 'El usuario ha sido actualizado' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        $user->delete();
        
        notify()->flash('¡Usuario eliminado exitosamente!', 'success');
        
        return redirect()->route('home.user.index')->withSuccess( 'El usuario ha sido eliminado' );
    }
    
   
    public function sendRefCode()
    {
        return view('user.send_invitation');
    }
    
    public function userRefCode()
    {
        if (Auth::check())
        {
            Auth::logout();
        }
        return view('auth.register');
    }
    
    public function sentRefCode(Request $request)
    {
        $user = Auth::user();
        // Generate the reference code
        $refCode = Invite::invite($request->input('email'), $user->id);
        
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
            notify()->flash('¡Invitación enviada exitosamente!', 'warning');
            return redirect()->route('home.user.index')->withDanger( 'No se ha logrado enviar la invitación' );

        } 
        else
        {
            notify()->flash('¡Invitación enviada exitosamente!', 'success');
            return redirect()->route('home.user.index')->withSuccess( 'La invitación se ha enviádo' );
        }
    }
}
