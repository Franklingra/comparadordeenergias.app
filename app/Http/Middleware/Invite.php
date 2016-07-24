<?php

namespace App\Http\Middleware;

use Invite;

use Closure;

class Invite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        $code = $request->route('refCode');
        if( Invite::isValid($code))
        {
            $invitation = Invite::get($code); //retrieve invitation modal
            $invited_email = $invitation->email;
            $referral_user = $invitation->user;

            return $next($request);

        } else {
            $status = Invite::status($code);
            // show error or show simple signup form
        }
    }
}
