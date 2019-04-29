<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChildController extends Controller
{
    public function index()
    {
        return view('add_child');
    }
    public function store(Request $request)
    {
         
         DB::table('childs')->insert(
            [
                'name' =>$request->name,
                'fathers_name' =>$request->fathers_name,
                'dob' =>$request->dob,
                ]);
         return redirect('/')->with('msg','Insert Data Successfully');
    }
}
