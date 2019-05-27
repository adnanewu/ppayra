@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title"> </h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">DORP</a></li>
                        <li class="active">IT</li>
                    </ol>
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
	          <div class="col-md-12">
	              <div class="panel panel-default">
	                  <div class="panel-heading">
	                      <h3 class="panel-title">View Course</h3>
	                  </div>
	                  <div class="panel-body">
                      
	                      <div class="row">
	                          <div class="col-md-12 col-sm-12 col-xs-12">
	                              <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
                                         
                                          <th>Courses</th>
                                          <th>Duration</th>
                                          <th>Time</th>
                                         </tr>
	                                  </thead>
                                    <tbody>
                       
	                                  	
	                                      
	                     
    										<tr>
      											<tr>
                             
                              <td>{{$single->course_id}}</td>
                              <td>{{$single->duration_desc}}</td>
                              <td>{{$single->time_desc}}</td>
      											
      											  
	                                         </tr>
	                                 
	                                  </tbody>
	                              </table>

	                          </div>
	                      </div>
	                  </div>
	              </div>
	          </div>
            </div>
        </div> <!-- container -->            
    </div> <!-- content -->
</div>


@endsection