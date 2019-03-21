@extends('layouts.app')
@section('content')


<div class="content-page">
<div class="content">
   <div class="container">

       <!-- Page-Title -->
       <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Welcome !</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">DORP</a></li>
                        <li class="active">IT</li>
                          </ol>
                            </div>
                        </div>
                         <!-- Start Widget -->
                        <div class="row">
                        	<!-- Basic example -->
                        	<div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add Affected Person</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{url('/insert-census')}}" method="post"
                                        enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Enter Household_id</label>
                                                <input type="text" class="form-control" name="household_id" placeholder="Enter Household_id">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Full Name</label>
                                                <input type="text" class="form-control" name="name" placeholder=" Full Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Fathers_name</label>
                                                <input type="text" class="form-control" name="fathers_name" placeholder="Fathers_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mothers_name</label>
                                                <input type="text" class="form-control" name="mothers_name" placeholder="Mothers_name">
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $occupations=DB::table('occupation')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Occupation</label>
                                                <select name="occupation_id">
                                                <option value="">Select Occupation</option>
                                                @foreach($occupations as $occupation)
                                                <option value="{{ $occupation->occupation_id }}">{{ $occupation->occupation_desc }}</option>
                                                @endforeach>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">NID</label>
                                                <input type="text" class="form-control" name="nid" placeholder="Enter NID Number">
                                            </div>
                                            <div class="form-group">
                                            	@php
                                                $educations=DB::table('education')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Education</label>
                                                <select name="education_id">
                                                <option value="">Select Education</option>
                                                @foreach($educations as $education)
                                                <option value="{{ $education->education_id }}">{{ $education->education_desc }}</option>
                                                @endforeach>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date Of Birth</label>
                                                <input type="date" name="dob" placeholder="Enter Date of Birth">
                                            </div>
                       	                     <div class="form-group">
                                                @php
                                                $genders=DB::table('gender')->get();
                                                 @endphp
                                                <label for="exampleInputPassword1">Gender</label>
                                                	<select name="gender_id">
                                                <option value="">Select Gender</option>
                                                @foreach($genders as $gender)
                                                <option value="{{ $gender->gender_id }}">{{ $gender->gender_desc }}</option>
                                                @endforeach>
                                               </select>  
                                                
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $religions=DB::table('religion')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Religion</label>
                                                <select name="religion_id">
                                                <option value="">Select Religion</option>
                                                @foreach($religions as $religion)
                                                <option value="{{ $religion->religion_id }}">{{ $religion->religion_desc }}</option>
                                                @endforeach>
                                                </select>
                                                </div>
                                            <div class="form-group">
                                                @php
                                                $maritals=DB::table('marital')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Marital Status</label>
                                                <select name="marital_id">
                                                <option value="">Select Marital Status</option>
                                                @foreach($maritals as $marital)
                                                <option value="{{ $marital->marital_id }}">{{ $marital->marital_desc }}</option>
                                                @endforeach>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Present Address</label>
                                                <input type="text" class="form-control" name="present_address" placeholder="Enter Address">
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $wards=DB::table('ward')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Ward</label>
                                                <select name="ward_id">
                                                <option value="">Select Ward</option>
                                                @foreach($wards as $ward)
                                                <option value="{{ $ward->ward_id }}">{{ $ward->ward_desc }}</option>
                                                @endforeach>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $thanas=DB::table('thana')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Thana</label>
                                                <select name="thana_id">
                                                <option value="">Select Thana</option>
                                                @foreach($thanas as $thana)
                                                <option value="{{ $thana->thana_id }}">{{ $thana->thana_desc }}</option>
                                                @endforeach>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $zillas=DB::table('zilla')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Zilla</label>
                                                <select name="zilla_id">
                                                <option value="">Select zilla</option>
                                                @foreach($zillas as $zilla)
                                                <option value="{{ $zilla->zilla_id }}">{{ $zilla->zilla_desc }}</option>
                                                @endforeach>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Enter Land Number</label>
                                                <input type="text" class="form-control" name="affected_land_no" placeholder="Enter Land Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Enter Early Income</label>
                                                <input type="text" class="form-control" name="yearly_income" placeholder="Enter Early Income">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Have_you_taken_trainnng</label>
                                                <input type="text" class="form-control" name="have_you_taken_trainnng" placeholder="Enter trainnng Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mention_how_many_days</label>
                                                <input type="text" class="form-control" name="mention_how_many_days" placeholder="Mention Time">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Expert_area</label>
                                                <input type="text" class="form-control" name="expert_area" placeholder="Enter Expert Area">
                                            </div>
                                            <div class="form-group">
                                                @php
                                                 $courses=DB::table('course')->get();
                                                 @endphp
                                                <label for="exampleInputPassword1">Preffered Trainning Course</label>
                                                <select name="which_type_of_trainning_you_want">
                                                <option value="">Select Option</option>
                                                @foreach($courses as $course)
                                                <option value="{{ $course->course_id }}">{{ $course->course_desc }}</option>
                                                @endforeach>
                                                </select>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div><!-- panel-body -->
                                    
                                </div> <!-- panel -->
                            </div> <!-- col-->
                       </div> <!-- end row -->
					</div> <!-- container -->
                 </div>
             </div>

@endsection