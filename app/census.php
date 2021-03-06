<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class census extends Model
{
    protected $fillable=['household_id','name','fathers_name','mothers_name','occupation_id','mobile_no','nid','education_id','dob','gender_id','religion_id','marital_id','present_address','ward_id','thana_id','zilla_id','affected_land_no','yearly_income','have_you_taken_trainnng','mention_how_many_days','expert_area','course_id'];
    public function gender(){
    	return $this->belongsTo('App\Gender', 'gender_id', 'gender_id');
    }
        public function occupation(){
    	return $this->belongsTo('App\Occupation', 'occupation_id', 'occupation_id');
    }
}


