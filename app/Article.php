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
    protected $fillable = ['prapet', 'group','group_name','status','code','name_th', 'name_en', 'purubpitshop', 'email', 'name_present', 'name_aj', 'tel_aj' , 'user_id' , 'payment_id','paid_at' , 'price', 'total_debt','received_at' , 'checkformat_at' , 'waitmodifyformat_at' , 'consider_at' , 'pass_modify_at' , 'waitmodify_at' , 'pass_at' , 'notpass_at' , 'reviewer' , 'reviewer_id','fix_abstract','fix_keyword','fix_page' , 'cancel_at' , 'another' , 'modify_success_at'];

    


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

    public function latest_word_documents(){
        return $this->hasMany('App\Document', 'article_id')->where("title","Word")->latest(); 
    }
    
    public function latest_pdf_documents(){
        return $this->hasMany('App\Document', 'article_id')->where("title","PDF")->latest(); 
    }
    

    public function latest_word_blind_documents(){
        return $this->hasMany('App\Document', 'article_id')->where("title","Word-blind")->latest(); 
    }
    
    public function latest_pdf_blind_documents(){
        return $this->hasMany('App\Document', 'article_id')->where("title","PDF-blind")->latest(); 
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
        return $this->hasMany('App\ArticleEvaluation', 'article_id'); 
    }

    public function accepts(){
        return $this->hasMany('App\Accept', 'article_id'); 
    }

     public function summary_evaluations(){
        return $this->hasMany('App\Summary_evaluation', 'article_id');
    }


}
