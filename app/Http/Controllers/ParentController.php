<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;



class ParentController extends Controller
{
    public function index()
    {
        return view('add_parent');
    }
    public function store(Request $request)
    {
         
         DB::table('parents')->insert(
            [
                'household_id' =>$request->household_id,
                'name' =>$request->name,
                'fathers_name' =>$request->fathers_name,
                'mothers_name' =>$request->mothers_name,
                'nid' =>$request->nid,
                'dob' =>$request->dob,
                'gender_id' =>$request->gender_id,
                 ]);
         return redirect('/')->with('msg','Insert Data Successfully');
    }
    
}
