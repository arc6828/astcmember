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
    protected $fillable = ['sex', 'title', 'name', 'lastname', 'email', 'status', 'statusothers', 'food', 'school', 'major', 'address', 'district', 'amphoe', 'province', 'postnumber', 'tel', 'fax', 'fileregister', 'bill_school', 'bill_major', 'bill_address', 'bill_district', 'bill_amphoe', 'bill_province', 'bill_postnumber', 'bill_tel', 'bill_fax','user_id','role','payment_status']; //เราลืม user_id, role 

    

    public function user(){
        return $this->belongsTo('App\User', 'user_id'); 
    }

    public function district_district(){
        return $this->belongsTo('App\District', 'district','district_code'); 
    }

    public function district_amphoe(){
        return $this->belongsTo('App\District', 'amphoe','amphoe_code'); 
    }

    public function district_province(){
        return $this->belongsTo('App\District', 'province','province_code'); 
    }
    public function district_bill_district(){
        return $this->belongsTo('App\District', 'bill_district','district_code'); 
    }

    public function district_bill_amphoe(){
        return $this->belongsTo('App\District', 'bill_amphoe','amphoe_code'); 
    }

    public function district_bill_province(){
        return $this->belongsTo('App\District', 'bill_province','province_code'); 
    }
    public function articles(){
        return $this->hasMany('App\Article','user_id','user_id');
    }
    public function payments(){
        return $this->hasMany('App\Profile','user_id','user_id');
    }
}
