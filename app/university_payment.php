<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class university_payment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'university_payments';

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
    protected $fillable = ['total', 'remark', 'receipt', 'user_id'];
    public function user(){
        return $this->belongto('App\User', 'user_id'); 
    }
    public function articles(){
        return $this->hasMany('App\Article','user_id');
      
    } 
    public function profiles(){
        return $this->hasMany('App\Profile','user_id','user_id');
    }
    public function university(){
        return $this->belongsTo('App\University', 'university_id','id'); 
    }

}
