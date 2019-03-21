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
                                   <div class="panel-heading"><h3 class="panel-title">Update Designated Person</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('/update-dperson/'.$data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Enter Trainee Name</label>
                                                <input type="text" class="form-control" name="trainee_name" value="{{$data->trainee_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Full Name</label>
                                                <input type="text" class="form-control" name="relation_with_house_hold" value="{{$data->relation_with_house_hold}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Fathers_name</label>
                                                <input type="text" class="form-control" name="fathers_name" value="{{$data->fathers_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mothers_name</label>
                                                <input type="text" class="form-control" name="mothers_name" value="{{$data->mothers_name}}"
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
                                                	<select name="gender_id">
                                                <option value="">Select Gender</option>
                                                @foreach($genders as $gender)
                                                <option value="{{ $gender->gender_id }}">{{ $gender->gender_desc }}</option>
                                                @endforeach>
                                               </select>  
                                                
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

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile_no" value="{{$data->mobile_no}}">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Present Address</label>
                                                <input type="text" class="form-control" name="present_address" value="{{$data->present_address}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">NID</label>
                                                <input type="text" class="form-control" name="nid" value="{{$data->nid}}">
                                            </div>
                                            
                                            
                       	                     
                                            
                                            
                                            
                                           
                                            
                                            
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