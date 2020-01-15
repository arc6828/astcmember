<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prapet', 'group','group_name','status','code','name_th', 'name_en', 'purubpitshop', 'email', 'name_present', 'name_aj', 'tel_aj' , 'user_id' , 'payment_id','paid_at' , 'price', 'total_debt','received_at' , 'checkformat_at' , 'waitmodifyformat_at' , 'consider_at' , 'pass_modify_at' , 'waitmodify_at' , 'pass_at' , 'notpass_at'];

    


    public function user(){
        return $this->belongsTo('App\User', 'user_id'); 
    }


     public function evaluations(){
        //จะ return กลับมาเป็น array
        return $this->hasMany('App\Evaluation', 'article_id'); 
    }


     public function documents(){
        return $this->hasMany('App\Document', 'article_id'); 
    }

    public function payment(){
        return $this->hasMany('App\Payment', 'user_id');
    }
    /*
    public function profiles(){
        return $this->hasMany('App\Profile','user_id');
    }
    */
    public function profile(){ 
        //CORRECT
        return $this->belongsTo('App\Profile','user_id','user_id');
    }
    public function article_evaluations(){
        return $this->hasMany('App\article_evaluations', 'article_id'); 
    }
}
