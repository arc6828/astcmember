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
    protected $fillable = ['sex', 'title', 'name', 'lastname', 'email', 'status', 'statusothers', 'food', 'school', 'major', 'address', 'district', 'subdistrict', 'postnumber', 'tel', 'fax', 'fileregister', 'bill_school', 'bill_major', 'bill_address', 'bill_district', 'bill_subdistrict', 'bill_postnumber', 'bill_tel', 'bill_fax','user_id','role']; //เราลืม user_id, role 

    

     public function usre(){
        return $this->belongsTo('App\Usre', 'usre_id'); 
    }
}
