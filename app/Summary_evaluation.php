<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary_evaluation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'summary_evaluations';

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
    protected $fillable = ['article_id', 'article_evaluation_id', 'summary_average_score', 'summary_total_score', 'nwecomment_name', 'nwecomment_abstract', 'nwecomment_introduction', 'nwecomment_methodology', 'nwecomment_result', 'nwecomment_conclusion', 'nwecomment_reference', 'evaluation_summary'];

    public function article(){
        return $this->hasOne('App\Article', 'article_id');
    }

    public function article_evaluations(){
        return $this->hasMany('App\ArticleEvaluation', 'summary_evaluation_id'); 
    }
}
