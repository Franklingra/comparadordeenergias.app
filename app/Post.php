<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
    	'title',
    	'image',
    	'status',
        'user_id',
    	'tags',
    	'content',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function scopeTitle($query, $name)
    {
        if (trim($name) != "")
        {
            $query->where(\DB::raw("CONCAT(title)"), "LIKE", "%$name%");   
        }
    }
}
