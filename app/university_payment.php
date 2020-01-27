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

    
}
