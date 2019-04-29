<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parent extends Model
{
    
    protected $fillable=['household_id','name','fathers_name','mothers_name','nid','dob','gender_id'];
}
