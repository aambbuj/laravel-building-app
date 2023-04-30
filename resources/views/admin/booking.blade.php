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
            <a class="navbar-brand" >Booking Details</a>
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
                                    	<th>Email</th>
                                    	<th>Phone</th>
                                    	<th>Massage</th>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $key => $booking )
                                        <tr>
                                        	<td>{{$key+1}}</td>
                                        	<td>{{$booking->name}}</td>
                                        	<td>{{$booking->email}}</td>
                                        	<td>{{$booking->phone}}</td>
                                        	<td>{{$booking->message}}</td>
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