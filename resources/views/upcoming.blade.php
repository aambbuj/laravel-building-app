@extends('layouts')
@section('content')
<style>
    .navbar-light {
        background-color: #02245b !important;
    }
</style>
<div class="container mt-5">
        <div class="row justify-content-md-center">
        @foreach($projectDetails as $projectDetail)

            <div class="col-md-4">
                <div class="item">
                    <div class="single-property-wrap">
                        <div class="thumb">
                            <img src="{{url($projectDetail->cover_photo)}}" alt="img">
                        </div>
                        <div class="property-wrap-details">
                            <h4 style="text-align:center;"><a href="">{{$projectDetail->site_name}}</a></h4>
                            <span class="price" style="font-size: 13px;text-align:center;">{{$projectDetail->location}}</span>
                            <div class="meta meta-2">
                                @foreach($projectDetail->details as $detail)
                                <span><i class="fas fa-bed"></i>{{$detail->type_of_bhk}}</span>
                                @endforeach
                                <!-- <span class="mr-0"><i class="fas fa-expand"></i>1194 sqft</span> -->
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-primary" href="{{route('details-view',$projectDetail->id)}}">View Details</a>
                                <a class="btn btn-primary" href="mailto:info.hiveconstruction@gmail.com"><i class="fa fa-envelope"></i></a>
                                <a class="btn btn-primary" href="tel:+917980857714"><i class="fa fa-phone" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection