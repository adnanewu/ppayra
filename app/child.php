<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    protected $fillable=['Child_name','Child_fathers_name','Child_dob'];
}
