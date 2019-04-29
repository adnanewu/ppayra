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
      										                <th>household_id</th>
      										                <th>name</th>
      										                <th>fathers_name</th>
      										                <th>mothers_name</th>
      										                <th>occupation_id</th>
      										                <th>mobile_no</th>
      										                <th>nid</th>
      										                <th>education_id</th>
      										                <th>dob</th>
     										                  <th>gender_id</th>
      										                <th>religion_id</th>
      										                <th>marital_id</th>
      										                <th>present_address</th>
      										                <th>ward_id</th>
      										                <th>thana_id</th>
      										                <th>zilla_id</th>
      										                <th>affected_land_no</th>
      										                <th>yearly_income</th>
      										                <th>have_you_taken_any_trainning_before</th>
      										                <th>expert_area</th>
      										                <th>which_type_of_trainning_you_want</th>
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
      											<td>{{$val->occupation_id}}</td>
      											<td>{{$val->mobile_no}}</td>
      											<td>{{$val->nid}}</td>
      											<td>{{$val->education_id}}</td>
      											<td>{{$val->dob}}</td>
      											<td>{{$val->gender_id}}</td>
      											<td>{{$val->religion_id}}</td>
      											<td>{{$val->marital_id}}</td>
      											<td>{{$val->present_address}}</td>
      											<td>{{$val->ward_id}}</td>
      											<td>{{$val->thana_id}}</td>
      											<td>{{$val->zilla_id}}</td>
      											<td>{{$val->affected_land_no}}</td>
      											<td>{{$val->yearly_income}}</td>
      											<td>{{$val->have_you_taken_any_trainning_before}}</td>
      											<td>{{$val->expert_area}}</td>
      											<td>{{$val->which_type_of_trainning_you_want}}</td>
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