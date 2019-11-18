<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documents';

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
    protected $fillable = ['title', 'user_id', 'article_id', 'filename'];

    


    public function user(){
        return $this->belongsTo('App\User', 'user_id'); 
    }


    public function article(){
        return $this->belongsTo('App\Article', 'article_id'); 
    }

}
