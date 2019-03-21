<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Census;
use DB;

class CensusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view ('add_census');
    }
    public function store(Request $request)
    {
    	 


    	 $input=$request->all();
        census::create($input);
        return redirect('/')->with('msg','Insert Data Successfully');
    }
    public function AllCensus()
    {

        $data=census::get();

        
        return view('all_census',compact('data'));
    }
    //View a single Census
    public function ViewCensus($id)
    {
     $single=DB::table('censuses')
             ->where('id',$id)
             ->first();
             return view('view_census',compact('single'));
    }
    public function DeleteCensus($id)
    {
    	$data=Census::where('id',$id)->first();
        $data->delete();
        

        return redirect('all_census');
             
    }
     public function EditCensus($id)
    {
        $data=census::where('id',$id)->first();
        return view('edit_census',compact('data'));
    }
    public function UpdateCensus(Request $req,$id)
    {
    	$input=$req->all();
        $data=census::where('id',$id)->first();
        $data->update($input);
        return redirect('all_census');
    }

}


