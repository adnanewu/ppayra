<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class JoinController extends Controller
{
    public function Join_Query()
    
        {

        $data = DB::table('parents')
            ->join('childs', 'parents.id', '=', 'childs.id')
            ->join('gender', 'parents.gender_id', '=', 'gender.gender_id')
            ->select('parents.*','childs.*','gender.gender_desc')
            ->get();

               return view('join',compact('data'));
               //Child_dob AS child_dob','childs.Child_name AS child_name','childs.Child_fathers_name AS child_fathers_name'


            //echo "<pre>";
            //print_r($data);
               //$sub = DB::table('parents')
                      
        }
}
