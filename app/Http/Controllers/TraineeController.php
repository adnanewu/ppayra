<?php

namespace App\Http\Controllers;

use App\dperson;
use Illuminate\Http\Request;
use DB;

class TraineeController extends Controller
{
    public function index()
    {
        return view('add_dperson');
    }

    
     

     	
    public function store(Request $request)
    {
         
         $input=$request->all();
         dperson::create($input);
         return redirect('/')->with('msg','Insert Data Successfully');
    }
     
    
public function Allperson()
    {
        $data=dperson::get();
        return view('all_dperson',compact('data'));
        //dd($data);
	}
    public function Viewdperson($id)
    {
     $single=DB::table('dpersons')
             ->where('id',$id)
             ->first();
             return view('view_dperson',compact('single'));
    }
     

public function Deletedperson($id)
{
	$data=dperson::where('id',$id)->first();
	$data->delete();
	return redirect('all_dperson');
}
 public function Editdperson($id)
    {
       
        $data=dperson::where('id',$id)->first();
        return view('edit_dperson',compact('data'));
    }

    public function Updatedperson(Request $req,$id)
    {
        
        $input=$req->all();
        $data=dperson::where('id',$id)->first();
        $data->update($input);
        return redirect('all_dperson');
    }
    
     



}





