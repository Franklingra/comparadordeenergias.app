<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Junaidnasir\Larainvite\InviteTrait;

class User extends Authenticatable
{
    /**
    * Trait for invitation
    */
    use InviteTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
		'last_name',
		'birthday',
		'gender',
		'avatar',
		'biography',
		'role',
		'email',
		'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
