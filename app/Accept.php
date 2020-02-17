<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accept extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accepts';

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
    protected $fillable = ['email', 'article_id', 'reviwer_id', 'feedback', 'remark'];

    
}
