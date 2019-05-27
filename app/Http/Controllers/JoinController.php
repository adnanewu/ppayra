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
        public function Join_tree_q()
        {
          $data = DB::table('parents')
            ->join('childs', 'parents.id', '=', 'childs.id')
            ->join('gender', 'parents.gender_id', '=', 'gender.gender_id')
            ->join('trees','parents.id','=', 'trees.id')
            ->select('parents.*','childs.*','gender.gender_desc','trees.*')
            ->get();

               return view('Join_tree',compact('data')); 
        }
                    /*class SomeClass {
                    private $some = 'hello';

                    public function f1()
                    {
                    return $this->some;
                    }
                   public function f2() 
                   {
                     $this->some = 'something else';
                    }
                                       }
            echo "<pre>";
            print_r($some)*/
            public function editJoin($id){
                $data=parents::where('id',$id)->first();
        return view('joinedit',compact('data'));

            }
}

