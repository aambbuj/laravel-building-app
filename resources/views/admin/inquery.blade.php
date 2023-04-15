@extends('admin.adminLayouts')
@section('content')

    <div class="content">
        <div class="container-fluid">

        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Inquey Details</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Email</th>
                                    	<th>Phone</th>
                                    </thead>
                                    <tbody>
                                        @foreach($inqueys as $key => $inquey )
                                        <tr>
                                        	<td>{{$key+1}}</td>
                                        	<td>{{$inquey->name}}</td>
                                        	<td>{{$inquey->email}}</td>
                                        	<td>{{$inquey->phone}}</td>
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