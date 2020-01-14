<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['total', 'remark', 'receipt', 'user_id'];

    public function user(){
        return $this->belongto('App\User', 'user_id'); 
    }
    public function articles(){
        return $this->hasMany('App\Article','payment_id');
      
    } 
    public function profiles(){
        return $this->hasMany('App\Profile','user_id','user_id');
    }
}
