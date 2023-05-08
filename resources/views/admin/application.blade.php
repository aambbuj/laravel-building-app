@extends('admin.adminLayouts')
@section('content')
<style>
    nav.navbar.navbar-default.navbar-fixed {
        position: fixed;
        top: 0px;
        display: block;
        z-index: 9999;
        width: 100%;
    }
    .container-fluid.mt-5 {
        margin-top: 60px;
    }
</style>
<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" >Application Details</a>
        </div> 
    </div>
</nav>
    <div class="content mt-5">
        <div class="container-fluid mt-5">

        <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card"> 
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Phone</th>
                                    	<th>Pan</th>
                                    	<th>Aadher</th>
                                    	<th>Flat number</th>
                                    	<th>Flat area</th>
                                    	<th>Sq Ft Rate Sb</th>
                                    	<th>Flat Price</th>
                                    	<th>Cover car parking price</th>
                                    	<th>Open car parking price</th>
                                    	<th>Additional cost</th>
                                    	<th>Total Price</th>
                                    </thead>
                                    <tbody>
                                        @foreach($applications as $key => $application )
                                        <tr>
                                        	<td>{{$key+1}}</td>
                                        	<td>{{$application->application_name}}</td>
                                        	<td>{{$application->phone_number}}</td>
                                        	<td>
                                                <img src="{{url($application->upload_pan)}}" height="60" width="60">
                                                
                                            </td>
                                        	<td>
                                            <img src="{{url($application->upload_aadher)}}" height="60" width="60">
                                            
                                            </td>
                                        	<td>{{$application->flat_number}}</td>
                                        	<td>{{$application->flat_area}}</td>
                                        	<td>{{$application->sq_ft_rate_sb}}</td>
                                        	<td>{{$application->flate_price}}</td>
                                        	<td>{{$application->cover_car_parking_price}}</td>
                                        	<td>{{$application->open_car_parking_price}}</td>
                                        	<td>{{$application->additional_cost}}</td>
                                        	<td>{{$application->total_price}}</td>
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
        
@endsection