@extends('layouts.app')

@section('content')
<div class="content-page">
<div class="content">
   <div class="container">

       <!-- Page-Title -->
       <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Search !</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">DORP</a></li>
                        <li class="active">IT</li>
                          </ol>
                            </div>
                        </div>
                        
    <br/>
    <br/>

    </head>
    <body>


      <form role="form" action="{{url('/search')}}" method="get"
                                        enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
                         <!-- Start Widget -->
                        <div class="row">
                        	<!-- Basic example -->
                        	<div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Search</h3></div>
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="col-md-12">
                  
      Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="{{ Request::input('name') }}" >
      <br>
      <br>
      
      HHID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="household_id" value="{{ Request::input('household_id') }}">
      <br>
      <br>

  <button type="submit" class="btn btn-purple waves-effect waves-light">Search</button>
       </form>
       </div>
       <div class="container">
    @if(isset($censeses))
    <h2>Sample censes details</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>name</th>
                    <th>fathers_name</th>
                    <th>household_id</th>
                    <th>gender_id</th>
                    <th>occupation_id</th>
                    <th>present_address</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($censeses as $dummy)
                <tr>
                    <td>{{$dummy->name}}</td>
                    <td>{{$dummy->fathers_name}}</td>
					<td>{{$dummy->household_id}}</td>
                    <td>{{$dummy->gender_id}}</td>
                    <td>{{$dummy->occupation_id}}</td>
                    <td>{{$dummy->present_address}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $censeses->render() !!}@endif
    </div>
        <div class="container">
            @if(isset($details))
            <p> The Search results for your query </b> are :</p>
            <h2>Sample censes details</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Fathers_name</th>
                    <th>household_id</th>
                    <th>Gender</th>
                    <th>Occupation</th>
                    <th>Present_address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $censes)
                    <tr>
                    <td><a href="{{ route('detail.census', $censes->id) }}">{{$censes->name}}</a></td>
                    <td>{{$censes->fathers_name}}</td>
					<td>{{$censes->household_id}}</td>
                    <td>{{$censes->gender->gender_desc}}</td>
                    <td>{{$censes->occupation->occupation_desc}}</td>
                    <td>{{$censes->present_address}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            @if($details){!! $details->render() !!}@endif
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>

       </div> 
                                <!-- panel -->
       </div> <!-- col-->
      </div> <!-- end row -->
	</div> <!-- container -->
    </div>
   </div>



   @endsection