@extends('layouts.app')

@section('content')
<div class="content-page">
<div class="content">
   <div class="container">

       <!-- Page-Title -->
       <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Multiselect !</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">DORP</a></li>
                        <li class="active">IT</li>
                          </ol>
                            </div>
                        </div>
                        <!--<a href="/list_course">List Course</a> -->
    <br/>
    <br/>
<!--<script src="http://bladephp.co/download/multiselect/jquery.min.js"></script>
<link href="http://bladephp.co/download/multiselect/jquery.multiselect.css" rel="stylesheet" />
<script src="http://bladephp.co/download/multiselect/jquery.multiselect.js"></script>-->
    </head>
    <body>
    



    <form role="form" action="{{ url('/update-course/'.$data->id) }}" method="post"
                                        enctype="multipart/form-data"> 
       
        <input type="hidden" name="_token" value="{{csrf_token()}}">

                         <!-- Start Widget -->
                        <div class="row">
                        	<!-- Basic example -->
                        	<div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Update Courses</h3></div>
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="col-md-12">

 
                                                @php
                                                $courses=DB::table('course')->get();
                                                @endphp
                                                Courses:<select multiple="" name="course_id[]" required=""  id="multiselect">
        
                                                @foreach($courses as $course)
                                                <option value="{{ $course->course_id }}" {{ in_array($course->course_id, explode(",", $data->course_id)) ? 'selected': '' }}>{{ $course->course_desc }}</option>
                                                @endforeach
                                               </select>



     
                                               @php
                                               $durations=DB::table('duration')->get();
                                               @endphp
                                               Duration:<select name="duration_id">
        
                                               @foreach($durations as $duration)
                                               <option value="{{ $duration->duration_id }}" {{ $duration->duration_id == $data->duration_id ? 'selected': '' }}>{{ $duration->duration_desc }}</option>
                                               @endforeach
                                               </select>

                                               @php
                                               $times=DB::table('time')->get();
                                               @endphp
                                               Duration:<select name="time_id">
        
                                               @foreach($times as $time)
                                               <option value="{{ $time->time_id }}" {{ $time->time_id == $data->time_id ? 'selected': '' }}>{{ $time->time_desc }}</option>
                                               @endforeach
                                               </select>

                                                
                                            
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div>
                                </div> 
                                <!-- panel -->
                            </div> <!-- col-->
                       </div> <!-- end row -->
					</div> <!-- container -->
                 </div>
             </div>
        

@endsection
