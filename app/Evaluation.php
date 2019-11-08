<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'evaluations';

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
    protected $fillable = ['around', 'date', 'results_evaluation', 'comment'];

    
     public function usre(){
        return $this->belongsTo('App\Usre', 'usre_id'); 
    }


     public function article(){
        return $this->belongsTo('App\Article', 'article_id'); 
    }


}
