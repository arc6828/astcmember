<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reviewers';

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
    protected $fillable = ['email', 'title', 'name', 'lastname', 'group', 'expert', 'school', 'major', 'address', 'district', 'amphoe', 'province', 'postnumber', 'tel', 'fax', 'type', 'remark' , 'status' , 'article_id' , 'accept_id' , 'article_evaluation_id'];

    public function accepts(){ 
        
        return $this->hasMany('App\Accept','reviewer_id');
    }

    public function article_evaluations(){ 
        
        return $this->hasMany('App\ArticleEvaluation','article_evaluation_id');
    }


}
