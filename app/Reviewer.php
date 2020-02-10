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
    protected $fillable = ['email', 'title', 'name', 'lastname', 'group', 'expert', 'school', 'major', 'address', 'district', 'amphoe', 'province', 'postnumber', 'tel', 'fax', 'type', 'remark'];

    
}
