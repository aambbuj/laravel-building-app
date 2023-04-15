@extends('admin.adminLayouts')
@section('content')

    <div class="content">
        <div class="container-fluid">

        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Contact Details</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Email</th>
                                    	<th>Phone</th>
                                    	<th>Subject</th>
                                    	<th>Massage</th>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $key => $contact )
                                        <tr>
                                        	<td>{{$key+1}}</td>
                                        	<td>{{$contact->name}}</td>
                                        	<td>{{$contact->email}}</td>
                                        	<td>{{$contact->phone}}</td>
                                        	<td>{{$contact->subject}}</td>
                                        	<td>{{$contact->message}}</td>
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