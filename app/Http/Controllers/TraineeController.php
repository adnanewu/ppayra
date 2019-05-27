<?php

namespace App\Http\Controllers;

use App\dperson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class TraineeController extends Controller
{
    public function index()
    {
        return view('add_dperson');
    }

    
     

     	
    public function store(Request $request)
    {
         

                 $this->validate($request, [
                'trainee_name'=>'required|unique:dpersons|max:15',
                'relation_with_house_hold'=>'required|max:15',
                'fathers_name'=>'required|max:15',
                 'mothers_name' => 'required|max:15',
                 'dob' => 'nullable|date',
                 'gender_id' => 'required',
                 'occupation_id' => 'required',
                 'religion_id' => 'required',
                 'education_id' => 'required',
                 'marital_id' => 'required',
                 'mobile_no' => 'required|max:11|numeric',
                 'present_address' => 'required|min:5',
                 'nid' => 'required|nullable'
             ]);


         $input=$request->all();
         dperson::create($input);
         return redirect('/')->with('msg','Insert Data Successfully');

         
                  
                    
         
         
    }
     
    
public function Allperson()
    {
        //$data=dperson::get();
              $data=DB::table('dpersons')
             ->join('gender', 'dpersons.gender_id', '=', 'gender.gender_id')
             ->join('religion', 'dpersons.religion_id', '=', 'religion.religion_id')
             ->join('marital', 'dpersons.marital_id', '=', 'marital.marital_id')
             ->join('occupation', 'dpersons.occupation_id', '=', 'occupation.occupation_id')
             ->join('education', 'dpersons.education_id', '=', 'education.education_id')

             
             ->select('dpersons.*','gender.*','religion.*','marital.*','occupation.*','education.*')
             ->get();
        
        return view('all_dperson',compact('data'));
        //dd($data);
	}
    public function Viewdperson($id)
    {
     $single=DB::table('dpersons')
    ->where('id',$id)
    ->join('gender', 'dpersons.gender_id', '=', 'gender.gender_id')
    ->join('religion', 'dpersons.religion_id', '=', 'religion.religion_id')
    ->join('marital', 'dpersons.marital_id', '=', 'marital.marital_id')
    ->join('occupation', 'dpersons.occupation_id', '=', 'occupation.occupation_id')
    ->join('education', 'dpersons.education_id', '=', 'education.education_id')
    ->select('dpersons.*','gender.*','religion.*','marital.*','occupation.*','education.*')
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
        
        
                 $this->validate($req,[
                'trainee_name'=>'required|unique:dpersons|max:15',
                'relation_with_house_hold'=>'required|max:15',
                'fathers_name'=>'required|max:15',
                 'mothers_name' => 'required|max:15',
                 'dob' => 'nullable|date',
                 'gender_id' => 'required',
                 'occupation_id' => 'required',
                 'religion_id' => 'required',
                 'education_id' => 'required',
                 'marital_id' => 'required',
                 'mobile_no' => 'required|max:13|numeric',
                 'present_address' => 'required|min:5',
                 'nid' => 'required|nullable']);


                  $input=$req->all();
                  $data=dperson::where('id',$id)->first();
                  $data->update($input);
                  return redirect('all_dperson');


        
    }
    
     



}





