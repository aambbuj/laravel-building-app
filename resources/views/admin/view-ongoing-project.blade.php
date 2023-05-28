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
            <a class="navbar-brand" >Project List</a>
        </div> 
    </div>
</nav>
<div class="content mt-5">
    <div class="container-fluid mt-5">
        <div class="row mt-5">
            <div class="col-md-12">
            @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
                <strong>{{ $message }}</strong>
        </div>
        @endif


        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
                <strong>{{ $message }}</strong>
        </div>
        @endif

                <div class="card"> 
                    <div class="content table-responsive table-full-width" style="padding-bottom: 0px;">
                        <table class="table">
                            <thead>
                                <th>Site Image</th>
                                <th>Site Name</th>
                                <th>Action</th> 
                            </thead>
                            <tbody>
                            @foreach($projectDetails as $projectDetail)
                                <tr>
                                    <td style="width: 150px;">
                                        <img class="see_project" src="{{url($projectDetail->cover_photo)}}">
                                    </td>
                                    <td>{{$projectDetail->site_name}}</td>
                                    <td>
                                        <a href="{{route('admin.edit-project',$projectDetail->id)}}" type="button" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('admin.delete-project',$projectDetail->id)}}" type="button" class="btn btn-danger btn-sm">Delete</a>

                                    </td> 
                                </tr>
                                @endforeach
                                <!-- <tr>
                                    <td style="width: 150px;">
                                        <img class="see_project" src="https://hiveconstruction.in/assets/images/eco-stay2.jpg">
                                    </td>
                                    <td>Eco stay</td>
                                    <td>
                                        <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                    </td> 
                                </tr>  -->
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection