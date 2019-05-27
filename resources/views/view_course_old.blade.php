@extends('layouts.app')
@section('content')


<div class="content-page">
<div class="content">
   <div class="container">

       <!-- Page-Title -->
       <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">!!!</h4>
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
                                    <div class="panel-heading"><h3 class="panel-title">View Course</h3></div>
                                    <div class="panel-body">
                                        
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Course</label>
                                                <p>{{$single->course_id}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Duration</label>
                                                <p>{{$single->duration_desc}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Time</label>
                                                <p>{{$single->time_desc}}</p>
                                            </div>
                                            
                                            
                                            
                                                
                                            
                                                
                                            
                                            </div>
                                            
                                            
                                        
                                    </div><!-- panel-body -->
                                    
                                </div> <!-- panel -->
                            </div> <!-- col-->
                       </div> <!-- end row -->
					</div> <!-- container -->
                 </div>
             </div>

@endsection