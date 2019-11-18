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
    protected $fillable = ['prapet', 'group', 'name_th', 'name_en', 'purubpitshop', 'email', 'name_present', 'name_aj', 'tel_aj' , 'user_id'];

    


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




}
