 @extends('layouts.app')
@section('content')


<div class="content-page">
<div class="content">
   <div class="container">

       <!-- Page-Title -->
       <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Please Edit Informauions !</h4>
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
                                    <div class="panel-heading"><h3 class="panel-title">Update Affected Person</h3></div>
                                    <div class="panel-body">
                                      @if ($errors->any())
                                      <div class="alert alert-danger">
                                        <ul>
                                         @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                           </div>
                                            @endif
                                        <form role="form" action="{{ url('/update-census/'.$data->id) }}" method="post"enctype="multipart/form-data">
                                          
                                            @csrf
                                            

                                             <div class="row">
                                             <div class="column" style="background-color:#aaa;">
                                              <label for="exampleInputEmail1">Enter Household_id</label>
                                                <input type="text" class="form-control" name="household_id" value="{{$data->household_id}}">
                                              </div>
                                              <div class="column" style="background-color:#bbb;">
                                              <label for="exampleInputPassword1">Full Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                              </div>
                                              <div class="column" style="background-color:#ccc;">
                                               <label for="exampleInputPassword1">Fathers_name</label>
                                                <input type="text" class="form-control" name="fathers_name" value="{{$data->fathers_name}}">
                                               </div>
                                               <div class="column" style="background-color:#ddd;">
                                               <label for="exampleInputPassword1">Mothers_name</label>
                                                <input type="text" class="form-control" name="mothers_name" value="{{$data->mothers_name}}">
                                               </div>
                                               </div>
                                               <div class="row">
                                               <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">Occupation</label>
                                            @php
                                            $occupations=DB::table('occupation')->get();
                                            @endphp
                                                :<select name="occupation_id">
                                                @foreach($occupations as $occupation)
                                                <option value="{{ $occupation->occupation_id }}" {{ $occupation->occupation_id == $data->occupation_id ? 'selected': '' }}>{{ $occupation->occupation_desc }}</option>
                                                @endforeach
                                                </select>
  </div>
  <div class="column" style="background-color:#bbb;">
    <label for="exampleInputPassword1">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile_no" value="{{$data->mobile_no}}">
  </div>
  <div class="column" style="background-color:#ccc;">
    <label for="exampleInputPassword1">NID</label>
                                                <input type="text" class="form-control" name="nid" value="{{$data->nid}}">
  </div>
  <div class="column" style="background-color:#ddd;">
    <label for="exampleInputPassword1">Education</label>
                                                @php
                                                $educations=DB::table('education')->get();
                                                @endphp
                                                :<select name="education_id">
                                                @foreach($educations as $education)
                                                <option value="{{ $education->education_id }}" {{ $education->education_id == $data->education_id ? 'selected': '' }}>{{ $education->education_desc }}</option>
                                                @endforeach
                                                </select>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">Date Of Birth</label>
                                                <input type="date" name="dob" value="{{$data->dob}}">
  </div>
  <div class="column" style="background-color:#bbb;">
    @php
                                                $genders=DB::table('gender')->get();
                                                 @endphp
                                                <label for="exampleInputPassword1">Gender</label>
                                                    :<select name="gender_id">
                                                @foreach($genders as $gender)
                                                <option value="{{ $gender->gender_id }}" {{ $gender->gender_id == $data->gender_id ? 'selected': '' }}>{{ $gender->gender_desc }}</option>
                                                @endforeach
                                                </select>
  </div>
  <div class="column" style="background-color:#ccc;">
    @php
                                                $religions=DB::table('religion')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Religion</label>
                                                <select name="religion_id">
                                                @foreach($religions as $religion)
                                                <option value="{{ $religion->religion_id }}" {{ $religion->religion_id == $data->religion_id ? 'selected': '' }}>{{ $religion->religion_desc }}</option>
                                                @endforeach
                                                </select> 
  </div>
  <div class="column" style="background-color:#ddd;">
    @php
                                                $maritals=DB::table('marital')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Marital Status</label>
                                                <select name="marital_id">
                                                @foreach($maritals as $marital)
                                                <option value="{{ $marital->marital_id }}" {{ $marital->marital_id == $data->marital_id ? 'selected': '' }}>{{ $marital->marital_desc }}</option>
                                                @endforeach
                                                </select>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">Present Address</label>
                                                <input type="text" class="form-control" name="present_address" value="{{$data->present_address}}">
  </div>
  <div class="column" style="background-color:#bbb;">
                                                @php
                                                $wards=DB::table('ward')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Ward</label>
                                                <select name="ward_id">
                                                @foreach($wards as $ward)
                                                <option value="{{ $ward->ward_id }}" {{ $ward->ward_id == $data->ward_id ? 'selected': '' }}>{{ $ward->ward_desc }}</option>
                                                @endforeach
                                                </select>
  </div>
  <div class="column" style="background-color:#ccc;">
                                                @php
                                                $thanas=DB::table('thana')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Thana</label>
                                                <select name="thana_id">
                                                @foreach($thanas as $thana)
                                                <option value="{{ $thana->thana_id }}" {{ $thana->thana_id == $data->thana_id ? 'selected': '' }}>{{ $thana->thana_desc }}</option>
                                                @endforeach
                                                </select>
  </div>
  <div class="column" style="background-color:#ddd;">
    @php
                                                $zillas=DB::table('zilla')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Zilla</label>
                                                <select name="zilla_id">
                                                @foreach($zillas as $zilla)
                                                <option value="{{ $zilla->zilla_id }}" {{ $zilla->zilla_id == $data->zilla_id ? 'selected': '' }}>{{ $zilla->zilla_desc }}</option>
                                                @endforeach
                                                </select>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">Enter Land Number</label>
                                                <input type="text" class="form-control" name="affected_land_no" value="{{$data->affected_land_no}}">
  </div>
  <div class="column" style="background-color:#bbb;">
    <label for="exampleInputPassword1">Enter Early Income</label>
                                                <input type="text" class="form-control" name="yearly_income" value="{{$data->yearly_income}}">
  </div>
  <div class="column" style="background-color:#ccc;">
    <label for="exampleInputPassword1">Have_you_taken_trainnng</label>
                                                <input type="text" class="form-control" name="have_you_taken_trainnng" value="{{$data->have_you_taken_trainnng}}">
  </div>
  <div class="column" style="background-color:#ddd;">
    <label for="exampleInputPassword1">Mention_how_many_days</label>
                                                <input type="text" class="form-control" name="mention_how_many_days" value="{{$data->mention_how_many_days}}">
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">Expert_area</label>
                                                <input type="text" class="form-control" name="expert_area" value="{{$data->expert_area}}">
  </div>
  <div class="column" style="background-color:#bbb;">
    @php
                                                 $courses=DB::table('course')->get();
                                                 @endphp
                                                <label for="exampleInputPassword1">Preffered Trainning Course</label>
                                                <select name="course_id">
                                                @foreach($courses as $course)
                                                <option value="{{ $course->course_id }}" {{ $course->course_id == $data->course_id ? 'selected': '' }}>{{ $course->course_desc }}</option>
                                                @endforeach
                                                </select>

  </div>
  <div class="column" style="background-color:#bbb;">
</div>
  <div class="column" style="background-color:#bbb;">
  </div>
  </div>
  
  
  
</div>

                                           <!-- <div class="form-group">

                                                <label for="exampleInputEmail1">Enter Household_id</label>
                                                <input type="text" class="form-control" name="household_id" value="{{$data->household_id}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Full Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Fathers_name</label>
                                                <input type="text" class="form-control" name="fathers_name" value="{{$data->fathers_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mothers_name</label>
                                                <input type="text" class="form-control" name="mothers_name" value="{{$data->mothers_name}}">
                                            </div>
                                            <div class="form-group">
                                            
                                            <label for="exampleInputPassword1">Occupation</label>
                                            @php
                                            $occupations=DB::table('occupation')->get();
                                            @endphp
                                                :<select name="occupation_id">
                                                @foreach($occupations as $occupation)
                                                <option value="{{ $occupation->occupation_id }}" {{ $occupation->occupation_id == $data->occupation_id ? 'selected': '' }}>{{ $occupation->occupation_desc }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile_no" value="{{$data->mobile_no}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">NID</label>
                                                <input type="text" class="form-control" name="nid" value="{{$data->nid}}">
                                            </div>
                                            <div class="form-group">
                                            	
                                            <label for="exampleInputPassword1">Education</label>
                                                @php
                                                $educations=DB::table('education')->get();
                                                @endphp
                                                :<select name="education_id">
                                                @foreach($educations as $education)
                                                <option value="{{ $education->education_id }}" {{ $education->education_id == $data->education_id ? 'selected': '' }}>{{ $education->education_desc }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date Of Birth</label>
                                                <input type="date" name="dob" value="{{$data->dob}}">
                                            </div>
                       	                     <div class="form-group">
                                                @php
                                                $genders=DB::table('gender')->get();
                                                 @endphp
                                                <label for="exampleInputPassword1">Gender</label>
                                                	:<select name="gender_id">
                                                @foreach($genders as $gender)
                                                <option value="{{ $gender->gender_id }}" {{ $gender->gender_id == $data->gender_id ? 'selected': '' }}>{{ $gender->gender_desc }}</option>
                                                @endforeach
                                                </select>  
                                                
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $religions=DB::table('religion')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Religion</label>
                                                <select name="religion_id">
                                                @foreach($religions as $religion)
                                                <option value="{{ $religion->religion_id }}" {{ $religion->religion_id == $data->religion_id ? 'selected': '' }}>{{ $religion->religion_desc }}</option>
                                                @endforeach
                                                </select> 
                                                </div>
                                            <div class="form-group">
                                                @php
                                                $maritals=DB::table('marital')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Marital Status</label>
                                                <select name="marital_id">
                                                @foreach($maritals as $marital)
                                                <option value="{{ $marital->marital_id }}" {{ $marital->marital_id == $data->marital_id ? 'selected': '' }}>{{ $marital->marital_desc }}</option>
                                                @endforeach
                                                </select> 
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Present Address</label>
                                                <input type="text" class="form-control" name="present_address" value="{{$data->present_address}}">
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $wards=DB::table('ward')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Ward</label>
                                                <select name="ward_id">
                                                @foreach($wards as $ward)
                                                <option value="{{ $ward->ward_id }}" {{ $ward->ward_id == $data->ward_id ? 'selected': '' }}>{{ $ward->ward_desc }}</option>
                                                @endforeach
                                                </select> 
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $thanas=DB::table('thana')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Thana</label>
                                                <select name="thana_id">
                                                @foreach($thanas as $thana)
                                                <option value="{{ $thana->thana_id }}" {{ $thana->thana_id == $data->thana_id ? 'selected': '' }}>{{ $thana->thana_desc }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                @php
                                                $zillas=DB::table('zilla')->get();
                                                @endphp
                                                <label for="exampleInputPassword1">Zilla</label>
                                                <select name="zilla_id">
                                                @foreach($zillas as $zilla)
                                                <option value="{{ $zilla->zilla_id }}" {{ $zilla->zilla_id == $data->zilla_id ? 'selected': '' }}>{{ $zilla->zilla_desc }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Enter Land Number</label>
                                                <input type="text" class="form-control" name="affected_land_no" value="{{$data->affected_land_no}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Enter Early Income</label>
                                                <input type="text" class="form-control" name="yearly_income" value="{{$data->yearly_income}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Have_you_taken_trainnng</label>
                                                <input type="text" class="form-control" name="have_you_taken_trainnng" value="{{$data->have_you_taken_trainnng}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mention_how_many_days</label>
                                                <input type="text" class="form-control" name="mention_how_many_days" value="{{$data->mention_how_many_days}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Expert_area</label>
                                                <input type="text" class="form-control" name="expert_area" value="{{$data->expert_area}}">
                                            </div>
                                            <div class="form-group">
                                                 @php
                                                 $courses=DB::table('course')->get();
                                                 @endphp
                                                <label for="exampleInputPassword1">Preffered Trainning Course</label>
                                                <select name="course_id">
                                                @foreach($courses as $course)
                                                <option value="{{ $course->course_id }}" {{ $course->course_id == $data->course_id ? 'selected': '' }}>{{ $course->course_desc }}</option>
                                                @endforeach
                                                </select>
                                            </div>-->
                                            
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                                        </form>
                                    </div><!-- panel-body -->
                                    
                                </div> <!-- panel -->
                            </div> <!-- col-->
                       </div> <!-- end row -->
					</div> <!-- container -->
                 </div>
             </div>

@endsection