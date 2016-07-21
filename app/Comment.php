<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [

     	'email',
        'post_id',
     	'content',

     ]

     public function post()
    {
        return $this->belongsToy('App\Post');
    }
}
