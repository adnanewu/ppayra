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
	                      <h3 class="panel-title">Showing All Course</h3>
	                  </div>
	                  <div class="panel-body">
                      <!--<center><a href="/add_course">ADD Course</a></center> -->
	                      <div class="row">
	                          <div class="col-md-12 col-sm-12 col-xs-12">
	                              <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
                                          <th>No</th>
                                          <th>Courses</th>
                                          <th>Duration</th>
                                          <th>Time</th>
                                          <th>Action</th>
    
      										                
      										              </tr>
	                                  </thead>
                                    <tbody>
	                                  	
	                                      
	                       @foreach($data as $key=>$vale)
    										<tr>
      											<tr>
                              <td>{{++$key}}</td>
                              <td>{{$vale->course_id }}</td>
                              <td>{{$vale->duration_desc}}</td>
                              <td>{{$vale->time_desc}}</td>
      											
      											  <td>
	                                         	<a href="{{ URL::to('edit-course/'.$vale->id) }}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{ URL::to('Del-course/'.$vale->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                                         	<a href="{{ URL::to('view-course/'.$vale->id) }}" class="btn btn-sm btn-primary">View</a>
	                                         </td>
	                                         </tr>
	                                    @endforeach
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