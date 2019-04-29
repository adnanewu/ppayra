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
                                    <div class="panel-heading"><h3 class="panel-title">Add Child Table</h3></div>
                                    <div class="panel-body">
                                        <form role="form" action="{{url('/insert-child')}}" method="post"
                                        enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Full Name</label>
                                                <input type="text" class="form-control" name="name" placeholder=" Full Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Fathers_name</label>
                                                <input type="text" class="form-control" name="fathers_name" placeholder="Fathers_name">
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date Of Birth</label>
                                                <input type="date" name="dob" placeholder="Enter Date of Birth">
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