<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dperson extends Model
{
    protected $table = 'dpersons' ;
    protected $fillable=['trainee_name','relation_with_house_hold','fathers_name','mothers_name','dob','gender_id','occupation_id','religion_id','education_id','marital_id','mobile_no','present_address','nid'];
}
