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
                                        <form role="form">
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
                                                <label for="exampleInputPassword1">Gender>
                                                	<select name="gender_id">
      <option value="">Select Gender</option>
      @foreach($genders as $gender)
      <option value="{{ $gender->gender_id }}">{{ $gender->gender_desc }}</option>
      @endforeach>
    </select>  
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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