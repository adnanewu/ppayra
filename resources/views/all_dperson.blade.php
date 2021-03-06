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
	                      <h3 class="panel-title">All Designated  Person</h3>
	                  </div>
	                  <div class="panel-body">
	                      <div class="row">
	                          <div class="col-md-12 col-sm-12 col-xs-12">
	                              <table id="datatable" class="table table-striped table-bordered">
	                                  <thead>
	                                      <tr>
	                                        <th>No</th>
      										                <th>Trainee_name</th>
      										                <th>Relation_WHH</th>
      										                <th>Fathers_name</th>
      										                <th>Mothers_name</th>
                                          <th>dob</th>
                                          <!--<th>Gender</th> 
                                          <th>Occupation</th>
                                          <th>Religion</th>
                                          <th>Education</th>
                                          <th>Marital</th>-->
      										                <th>Mobile_no</th>
                                          <!--<th>Present_address</th> -->
      										                <th>nid</th>
                                        </tr>
	                                  </thead>
                                    <tbody>
	                                  	
	                                      
	                       @foreach($data as $key=>$val)
    										<tr>
      											<td>{{++$key}}</td>
      											<td>{{$val->trainee_name}}</td>
      											<td>{{$val->relation_with_house_hold}}</td>
      											<td>{{$val->fathers_name}}</td>
      											<td>{{$val->mothers_name}}</td>
                            <td>{{$val->dob}}</td>
                            <!--<td>{{$val->gender_id}}</td>
      											<td>{{$val->occupation_id}}</td>
                            <td>{{$val->religion_id}}</td>
                            <td>{{$val->education_id}}</td>
                            <td>{{$val->marital_id}}</td>-->
                            <td>{{$val->mobile_no}}</td>
                            <!--<td>{{$val->present_address}}</td> -->
                            <td>{{$val->nid}}</td>
                            <td>
      										  
	                         <a href="{{ URL::to('edit-dperson/'.$val->id) }}" class="btn btn-sm btn-info">Edit</a>
	                         <a href="{{ URL::to('delete-dperson/'.$val->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                         <a href="{{ URL::to('view-dperson/'.$val->id) }}" class="btn btn-sm btn-primary">View</a>
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