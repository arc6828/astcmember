<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profile(){
        return $this->hasOne('App\Profile', 'user_id');
    }


     public function documents(){
        return $this->hasMany('App\Document', 'user_id');
    }


    public function articles(){
        return $this->hasMany('App\Article', 'user_id');
    }


     public function evaluations(){
        return $this->hasMany('App\Evaluation', 'user_id');
    }

 
}
