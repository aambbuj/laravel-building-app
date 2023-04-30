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
            <a class="navbar-brand" >OnGoing project</a>
        </div> 
    </div>
</nav>
<div class="content mt-5">
    <div class="container-fluid mt-5">
        <div class="row mt-5">
            <div class="col-md-12">
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
                                        <a href="{{route('admin.edit-project',$type)}}" type="button" class="btn btn-primary btn-sm">Edit</a>
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