<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Census;
//use Illuminate\Support\Facades\Validator;

use Validator;

use App\Http\Controllers\Controller;
use DB;

//use App\Http\Controllers\JoinController;
//use App\Http\;
//namespace App\Traits;
//use App\Traits\FormatDates;
//use FormatDates;




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

        $this->validate($request,[

            'household_id'=>'required|unique:censuses|min:5|numeric',
            'name'=>'required|max:15',
            'fathers_name'=>'required|max:20',
            'mothers_name' => 'required|max:20',
            'occupation_id' => 'required',
            'mobile_no' => 'required|numeric|min:11',
            'nid' => 'required|min:11|numeric',
            'education_id' => 'required',
            'dob' => 'nullable|date',
            'gender_id' => 'required',
            'religion_id' => 'required',
            'marital_id' => 'required',
            'present_address' => 'required|min:5',
            'ward_id' => 'required',
            'thana_id' => 'required',
            'zilla_id' => 'required',
            'affected_land_no' => 'required|min:5|numeric',
            'yearly_income' => 'required|min:5|numeric',
            'have_you_taken_trainning' => 'nullable',
            'mention_how_many_days' => 'required',
            'expert_area' => 'required',
            'course_id' => 'required',
        ]);


        $input=$request->all();
        census::create($input);
        return redirect('/')->with('msg','Insert Data Successfully');
    }
    public function AllCensus()
    {
        //$data=census::get();
        $data = DB::table('censuses')
        ->join('education', 'censuses.education_id', '=', 'education.education_id')
        ->join('gender', 'censuses.gender_id', '=', 'gender.gender_id')
        ->join('occupation', 'censuses.occupation_id', '=', 'occupation.occupation_id')
        ->join('religion', 'censuses.religion_id', '=', 'religion.religion_id')
        ->join('marital', 'censuses.marital_id', '=', 'marital.marital_id')
        ->join('ward', 'censuses.ward_id', '=', 'ward.ward_id')
        ->join('thana', 'censuses.thana_id', '=', 'thana.thana_id')
        ->join('zilla', 'censuses.zilla_id', '=', 'zilla.zilla_id')
        ->join('course', 'censuses.course_id', '=', 'course.course_id')
        ->select('censuses.*','gender.*','education.*','occupation.*','religion.*','marital.*','ward.*','thana.*','zilla.*','course.*')
             //->select('censuses.*','education.education_desc','gender.gender_desc')
        ->get();

                 //dd($data);
        return view('all_census',compact('data'));
    }
    //View a single Census
    //use JoinController;
    public function ViewCensus($id)
    {

       //$a = $this->JoinController->Join_Query();
       //return view('view_census',compact('a'));


        $single=DB::table('censuses')
        ->where('id',$id)
        ->join('education', 'censuses.education_id', '=', 'education.education_id')
        ->join('gender', 'censuses.gender_id', '=', 'gender.gender_id')
         //>join('time', 'courses.id', '=', 'time.time_id')
              //->select('censuses.*','education.education_desc','gender.gender_desc')
        ->join('occupation', 'censuses.occupation_id', '=', 'occupation.occupation_id')
        ->join('religion', 'censuses.religion_id', '=', 'religion.religion_id')
        ->join('marital', 'censuses.marital_id', '=', 'marital.marital_id')
        ->join('ward', 'censuses.ward_id', '=', 'ward.ward_id')
        ->join('thana', 'censuses.thana_id', '=', 'thana.thana_id')
        ->join('zilla', 'censuses.zilla_id', '=', 'zilla.zilla_id')
        ->join('course', 'censuses.course_id', '=', 'course.course_id')
        ->select('censuses.*','gender.*','education.*','occupation.*','religion.*','marital.*','ward.*','thana.*','zilla.*','course.*')
        ->first();
             //->join('education', 'censuses.education_id', '=', 'education.education_id')
             //->select('censuses.*','education .*')
             //->get();
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


        $this->validate($req,[

            'household_id'=>'required|min:5|numeric',
            'name'=>'required|max:15',
            'fathers_name'=>'required|max:15',
            'mothers_name' => 'required|max:15',
            'occupation_id' => 'required',
            'mobile_no' => 'required|numeric|min:11',
            'nid' => 'required|min:11|numeric',
            'education_id' => 'required',
            'dob' => 'nullable|date',
            'gender_id' => 'required',
            'religion_id' => 'required',
            'marital_id' => 'required',
            'present_address' => 'required|min:5',
            'ward_id' => 'required',
            'thana_id' => 'required',
            'zilla_id' => 'required',
            'affected_land_no' => 'required|min:5|numeric',
            'yearly_income' => 'required|min:5|numeric',
            'have_you_taken_trainning' => 'nullable',
            'mention_how_many_days' => 'required',
            'expert_area' => 'required',
            'course_id' => 'required',]);

        

        $input=$req->all();
        $data=census::where('id',$id)->first();
        $data->update($input);
        return redirect('all_census');



        
    }

    public function Join_Query()

    {

        $data = DB::table('censuses')
        ->join('education', 'censuses.education_id', '=', 'education.education_id')
        ->join('gender', 'censuses.gender_id', '=', 'gender.gender_id')

        ->get();

        return view('search_census',compact('data'));


    }

    public function search(Request $request)
    {
        if(!($request->filled('name') ||  $request->filled('household_id')) ){
            return view('search_census');
        }
        $census = census::with('gender');
        if($request->filled('name')){
            $census = $census->where ( 'name', 'LIKE', '%' . $request->name  . '%' );
        }
        if($request->filled('household_id')){
            $census = $census->orWhere ( 'household_id', 'LIKE', '%' . $request->household_id  . '%' );
        }
        if($request->filled('nid')){
            $census = $census->orWhere ( 'nid', 'LIKE', '%' . $request->nid  . '%' );
        }
        if($request->filled('occupation_id')){
            $census = $census->orWhere ( 'occupation_id', '=', $request->occupation_id );
        }
        $census = $census->paginate (5)->setPath ( '' );


        //dd($census);
        if (count ( $census ) > 0) {
            return view ( 'search_census' )->withDetails ( $census );
        }
        return view ( 'search_census' )->withMessage ( 'No Details found. Try to search again !' );

    }

}


