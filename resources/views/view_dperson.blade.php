@extends('layouts.app')
@section('content')


<div class="content-page">
<div class="content">
   <div class="container">

       <!-- Page-Title -->
       <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title"></h4>
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
                                    <div class="panel-heading"><h3 class="panel-title">View Designated Person</h3></div>
                                    <div class="panel-body">
                                        
                                            @csrf

                                            <div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputEmail1">Enter Trainee Name</label>
                                                <p>{{$single->trainee_name}}</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <label for="exampleInputPassword1">Relation_with_house_hold</label>
                                                <p>{{$single->relation_with_house_hold}}</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <label for="exampleInputPassword1">Fathers_name</label>
                                                <p>{{$single->fathers_name}}</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <label for="exampleInputPassword1">Mothers_name</label>
                                                <p>{{$single->mothers_name}}</p>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">Date Of Birth</label>
                                                <p>{{$single->dob}}</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <label for="exampleInputPassword1">Gender</label>
                                                    <p>{{$single->gender_desc}}</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <label for="exampleInputPassword1">
                                              Occupation</label>
                                               <p>{{$single->occupation_desc}}</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <label for="exampleInputPassword1">Religion</label>
                                                <p>{{$single->religion_desc}}</p>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">Education</label>
                                                <p>{{$single->education_desc}}</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <label for="exampleInputPassword1">Marital Status</label>
                                                <p>{{$single->marital_desc}}</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <label for="exampleInputPassword1">Mobile Number</label>
                                                <p>{{$single->mobile_no}}</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <label for="exampleInputPassword1">Present Address</label>
                                                <p>{{$single->present_address}}</p>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <label for="exampleInputPassword1">NID</label>
                                                <p>{{$single->nid}}</p>
  </div>
  
</div>
                                            <!--<div class="form-group">
                                                <label for="exampleInputEmail1">Enter Trainee Name</label>
                                                <p>{{$single->trainee_name}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Relation_with_house_hold</label>
                                                <p>{{$single->relation_with_house_hold}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Fathers_name</label>
                                                <p>{{$single->fathers_name}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mothers_name</label>
                                                <p>{{$single->mothers_name}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date Of Birth</label>
                                                <p>{{$single->dob}}</p>
                                            </div>
                                                
                                                <div class="form-group">
                                                
                                                <label for="exampleInputPassword1">Gender</label>
                                                    <p>{{$single->gender_id}}</p>
                                              </div>  
                                                <div class="form-group">
                                                
                                            </div>
                                             
                                            <div class="form-group">
                                                
                                              <label for="exampleInputPassword1">
                                              Occupation</label>
                                               <p>{{$single->occupation_id}}</p>
                                              </div>
                                            
                                            <div class="form-group">
                                                
                                                <label for="exampleInputPassword1">Religion</label>
                                                <p>{{$single->religion_id}}</p>
                                              </div>
                                                <div class="form-group">
                                                
                                                
                                                <label for="exampleInputPassword1">Education</label>
                                                <p>{{$single->education_id}}</p>
                                                </div>

                                            
                                                <div class="form-group">
                                            
                                                
                                                <label for="exampleInputPassword1">Marital Status</label>
                                                <p>{{$single->marital_id}}</p>
                                              </div>
                                                <div class="form-group">


                                                <label for="exampleInputPassword1">Mobile Number</label>
                                                <p>{{$single->mobile_no}}</p>
                                            </div>
                                               <div class="form-group">
                                                <label for="exampleInputPassword1">Present Address</label>
                                                <p>{{$single->present_address}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">NID</label>
                                                <p>{{$single->nid}}</p>
                                            </div> -->
                                            
                                            
                                                
                                            
                                                
                                            
                                            </div>
                                            
                                            
                                        
                                    </div><!-- panel-body -->
                                    
                                </div> <!-- panel -->
                            </div> <!-- col-->
                       </div> <!-- end row -->
					</div> <!-- container -->
                 </div>
             </div>

@endsection