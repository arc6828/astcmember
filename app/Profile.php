<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

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
    protected $fillable = ['sex', 'title', 'name', 'lastname', 'email', 'status', 'statusothers', 'food', 'school', 'major', 'address', 'amphoes', 'district', 'provinces', 'postnumber', 'tel', 'fax', 'fileregister', 'bill_school', 'bill_major', 'bill_address', 'bill_district', 'bill_amphoes', 'bill_provinces', 'bill_postnumber', 'bill_tel', 'bill_fax','user_id','role']; //เราลืม user_id, role 

    

     public function user(){
        return $this->belongsTo('App\User', 'user_id'); 
    }
}
