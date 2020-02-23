<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleEvaluation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article_evaluations';

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
    protected $fillable = ['article_id', 'evaluation_name', 'evaluation_abstract', 'evaluation_introduction', 'evaluation_methodology', 'evaluation_result', 'evaluation_conclusion', 'evaluation_reference', 'evaluation_total_score', 'assessment', 'evaluation_summary', 'comment_name', 'comment_abstract', 'comment_introduction', 'comment_methodology', 'comment_result', 'comment_conclusion', 'comment_reference', 'user_id' , 'accept_id' , 'reviewer_id'];


    public function article(){
        return $this->belongsTo('App\Article', 'article_id'); 
    }

    public function reviewer(){
        return $this->belongsTo('App\Reviewer', 'reviewer_id'); 
    }

     
    
}
