<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Junaidnasir\Larainvite\InviteTrait;

use Image;

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
		'twitter',
		'facebook',
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

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    public static function avatarUpload($avatar)
    {
		$filename = time() . '.' . $avatar
        ->getClientOriginalExtension();
        
		Image::make($avatar)
            ->resize(300, 300)
            ->save( public_path('/uploads/avatar/' . $filename) );

		return $filename;
    }
}
