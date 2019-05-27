<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\duration;
use App\time;
use DB;


class CourseController extends Controller
{
    public function index()
    {
        return view('add_course');
    }
    public function store( Request $request)
    {


           //dd(implode(',', $request->Course));

      DB::table('courses')->insert(['course_id' => implode(',', $request->course_id),  'duration_id'=>$request->duration_id,'time_id'=>$request->time_id]);

      return redirect('/add_course')->with('msg','Insert Data Successfully');


  } 

  public function Allcourse()

  {
    $courses = DB::table('course')->pluck('course_desc', 'course_id');
        //$data=course::get();
    $data=DB::table('courses')
    ->join('duration', 'courses.duration_id', '=', 'duration.duration_id')
    ->join('time', 'courses.time_id', '=', 'time.time_id')
    ->select('courses.*', 'duration.duration_desc','time.time_desc')
    ->get();

    $data = $data->map(function($d) use ($courses) {
        $cids = explode(',', $d->course_id);
        $cnames = [];
        foreach($cids as $cid){
            $cnames[] = $courses[$cid];
        }
        $d->course_id = implode($cnames, ', ');
        return $d;
    });
    return view('list_course',compact('data', 'courses'));
             //echo "<pre>";
             //print_r($data);
}  
public function DeleteCourse($id)
{
    $data=course::where('id',$id)->first();
    $data->delete();
    return redirect('list_course');
} 
public function editCourse($id)
{
       //DB::table('tbl_courses')->insert(['course_id' => expload(',', $request->course_id),  'duration_id'=>$request->duration_id]);
    $data=course::where('id',$id)->first();
    return view('courseedit',compact('data'));
}
public function updateDataCourse(Request $request,$id)
{
    	//dd($request->all());


    	//dd(implode(',', $request->course_id));
   $input=$request->all();
   $data=course::where('id',$id)->first();
        //DB::table('tbl_courses')->insert(['course_id' => implode(',', $request->course_id),  'duration_id'=>$request->duration_id]);

   $data->fill($input);
   $data->course_id = implode(",",$request->course_id);
   $data->save();



        //dd(implode(',', $request->course_id));
   return redirect('list_course');
}
public function ViewCourse($id)
{
   $courses = DB::table('course')->pluck('course_desc', 'course_id');
   $single=DB::table('courses')
   ->where('id',$id)
   ->join('duration', 'courses.duration_id', '=', 'duration.duration_id')
   ->join('time', 'courses.time_id', '=', 'time.time_id')
   ->select('courses.*','duration.duration_desc','time.time_desc')
   ->first();

   $cids = explode(',', $single->course_id);
   $cnames = [];
   foreach($cids as $cid){
       $cnames[] = $courses[$cid];
   }
   $single->course_id = implode($cnames, ', ');

   return view('view_course',compact("single","courses"));
             //return view('admin.home', compact("users"));

}
}
