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
	                      <h3 class="panel-title">All Affected Person</h3>
	                  </div>
	                  <div class="panel-body">
	                      <div class="row">
	                          <div class="col-md-12 col-sm-12 col-xs-12">
	                              <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                        <th>No</th>
      										                <th>HHID</th>
      										                <th>Name</th>
      										                <th>F_name</th>
      										                <th>M_name</th>
      										               
      										                <th>Mobile_no</th>
      										                <th>NID</th>
      										                <th>Education</th>
      										                <!--<th>Dob</th>-->
     										                  <th>Gender</th>
      										                
      										            </tr>
	                                  </thead>
                                    <tbody>
	                                  	
	                                      
	                       @foreach($data as $key=>$val)

    										<tr>
      											<td>{{++$key}}</td>
      											<td>{{$val->household_id}}</td>
      											<td>{{$val->name}}</td>
      											<td>{{$val->fathers_name}}</td>
      											<td>{{$val->mothers_name}}</td>
      											
      											<td>{{$val->mobile_no}}</td>
      											<td>{{$val->nid}}</td>
      											<td>{{$val->education_desc}}</td>
      											<!--<td>{{$val->dob}}</td>-->
      											<td>{{$val->gender_desc}}</td>
      											
      											<td>
	                                         	<a href="{{ URL::to('edit-census/'.$val->id) }}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{ URL::to('delete-census/'.$val->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                                         	<a href="{{ URL::to('view-census/'.$val->id) }}" class="btn btn-sm btn-primary">View</a>
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