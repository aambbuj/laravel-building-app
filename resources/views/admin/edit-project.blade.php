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
    .class_gallery {
        height: 50vh;
        width: 100%;
        object-fit: cover;
        border: 1px solid gray;
    }
</style>
<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" >Edit Project</a>
        </div> 
    </div>
</nav>
<div class="content mt-5">
    <div class="container-fluid mt-5"> 
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card"> 
                    <form action="{{route('admin.project-edit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Project Type</label>
                                        <select class="form-control" placeholder="Select Project Type" name="project_type">
                                            <option> Select</option>
                                            <option value="ongoing" {{ 'ongoing' == $projectDetails->project_type ? 'selected="selected"' : '' }}>Ongoing Project</option>
                                            <option value="complete" {{ 'complete' == $projectDetails->project_type ? 'selected="selected"' : '' }}>Complete Project</option>
                                            <option value="upcoming" {{ 'upcoming' == $projectDetails->project_type ? 'selected="selected"' : '' }}>Upcomming Project</option>
                                        </select>                                            
                                    </div>
                                </div>
                                <input type="hidden" name="project_id" value="{{$projectDetails->id}}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Name</label>
                                        <input type="text" disabled class="form-control" placeholder="Site Name" value="{{$projectDetails->site_name}}" name="site_name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Cover Photo</label>
                                        <img style="width: 100%" src="{{url($projectDetails->cover_photo)}}">
                                        <!-- <input type="file" class="form-control" name="cover_photo"> -->
                                    </div>
                                </div>
                                @foreach($projectDetails->image as $key =>  $projectDetail)
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <!-- <label>Baground Photo One</label> -->
                                        <img style="width: 100%" src="{{url($projectDetail->bakgroung_image)}}">
                                        <!-- <input type="file" class="form-control" name=" " placeholder="Select backgroung image" > -->
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Site Details</label>
                                        <textarea class="form-control" placeholder="Enter Site Details" name="site_details">{{$projectDetails->site_details}}</textarea>
                                    </div>
                                </div> 
                            </div> 
                            <div class="row">
                                @if($projectDetails->one_bhk == 'yes')
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>1 BHK</label>
                                            <select class="form-control" placeholder="Home Address" name="one_bhk">
                                                <option> Select</option>
                                                <option value="yes" {{ 'yes' == $projectDetails->one_bhk ? 'selected="selected"' : '' }}>Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" class="form-control" placeholder="Type" value="{{$projectDetails->details[0]->bhk_type}}" name="one_bhk_type">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedroom</label>
                                            <input type="text" class="form-control" placeholder="Enter Bedroom" value="{{$projectDetails->details[0]->bhk_bedroom}}" name="one_bhk_bedroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[0]->bhk_bathroom}}" placeholder="Site Name" name="one_bhk_bathroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SQFT</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[0]->bhk_sqft}}" placeholder="sqft" name="one_bhk_sqft">

                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" value="{{$projectDetails->details[0]->id}}" name="details_id">

                                @else

                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label>1 BHK</label>
                                            <select class="form-control" placeholder="Home Address" name="one_bhk">
                                                <option> Select</option>
                                                <option value="yes" {{ 'yes' == $projectDetails->one_bhk ? 'selected="selected"' : '' }}>Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" class="form-control" placeholder="Type" name="one_bhk_type">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedroom</label>
                                            <input type="text" class="form-control" placeholder="Enter Bedroom" name="one_bhk_bedroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <input type="text" class="form-control" placeholder="Site Name" name="one_bhk_bathroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SQFT</label>
                                            <input type="text" class="form-control" placeholder="sqft" name="one_bhk_sqft">

                                        </div>
                                    </div>

                                @endif

                                @if($projectDetails->two_bhk == 'yes')
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>2 BHK</label>
                                            <select class="form-control" placeholder="Home Address" name="two_bhk">
                                                <option> Select</option>
                                                <option value="yes" {{ 'yes' == $projectDetails->two_bhk ? 'selected="selected"' : '' }}>Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[1]->bhk_type}}" placeholder="Type" name="two_bhk_type">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedroom</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[1]->bhk_bedroom}}" placeholder="Enter Bedroom" name="two_bhk_bedroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[1]->bhk_bathroom}}" placeholder="Site Name" name="two_bhk_bathroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SQFT</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[1]->bhk_sqft}}" placeholder="sqft" name="two_bhk_sqft">

                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" value="{{$projectDetails->details[1]->id}}" name="details_id_two">

                                @else

                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label>2 BHK</label>
                                            <select class="form-control" placeholder="Home Address" name="two_bhk">
                                                <option> Select</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" class="form-control" placeholder="Type" name="two_bhk_type">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedroom</label>
                                            <input type="text" class="form-control" placeholder="Enter Bedroom" name="two_bhk_bedroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <input type="text" class="form-control" placeholder="Site Name" name="two_bhk_bathroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SQFT</label>
                                            <input type="text" class="form-control" placeholder="sqft" name="two_bhk_sqft">

                                        </div>
                                    </div>

                                @endif

                                @if($projectDetails->three_bhk == 'yes')
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>3 BHK</label>
                                            <select class="form-control" placeholder="Home Address" name="three_bhk">
                                                <option> Select</option>
                                                <option value="yes" {{ 'yes' == $projectDetails->three_bhk ? 'selected="selected"' : '' }}>Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[2]->bhk_type}}" placeholder="Type" name="three_bhk_type">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedroom</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[2]->bhk_bedroom}}" placeholder="Enter Bedroom" name="three_bhk_bedroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[2]->bhk_bathroom}}" placeholder="Site Name" name="three_bhk_bathroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SQFT</label>
                                            <input type="text" class="form-control" value="{{$projectDetails->details[2]->bhk_sqft}}" placeholder="sqft" name="three_bhk_sqft">

                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" value="{{$projectDetails->details[2]->id}}" placeholder="sqft" name="details_id_three">

                                @else

                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label>3 BHK</label>
                                            <select class="form-control" placeholder="Home Address" name="three_bhk">
                                                <option> Select</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" class="form-control" placeholder="Type" name="three_bhk_type">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bedroom</label>
                                            <input type="text" class="form-control" placeholder="Enter Bedroom" name="three_bhk_bedroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <input type="text" class="form-control" placeholder="Site Name" name="three_bhk_bathroom">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SQFT</label>
                                            <input type="text" class="form-control" placeholder="sqft" name="three_bhk_sqft">

                                        </div>
                                    </div>

                                @endif

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" value="{{$projectDetails->location}}" class="form-control" placeholder="Location" name="location">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Location Url</label>
                                            <input type="text" value="{{$projectDetails->location_url}}"  class="form-control" placeholder="Location Url" name="location_url">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Master Plan Immages (Select one or multiple file)</label>
                                            <div class="row">
                                            @foreach($projectDetails->master as $projectDetail)
                                                <div class="col-md-4 mb-4">
                                                    <img class="w-100 class_gallery" src="{{url($projectDetail->master_plan_image)}}"> 
                                                </div>
                                            @endforeach 
                                            </div>
                                            <input type="file" multiple class="form-control" placeholder="Location Url" name="master_plan_image[]">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Features / Amenities</label>
                                            <div class="form-check">
                                                <input class="form-check-input"  type="checkbox" value="Road" name="features_menities[]" {{ in_array("Road", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    Road
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="School" name="features_menities[]" {{ in_array("School", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    School
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="College" name="features_menities[]" {{ in_array("College", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    College
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Shopping" name="features_menities[]" {{ in_array("Shopping", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    Shopping
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="University" name="features_menities[]" {{ in_array("University", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    University
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Hospital" name="features_menities[]" {{ in_array("Hospital", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    
                                                    Hospital
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="CCTV" name="features_menities[]" {{ in_array("CCTV", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    CCTV
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Swimming Pool" name="features_menities[]" {{ in_array("Swimming Pool", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    Swimming Pool
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Gymnasium" name="features_menities[]" {{ in_array("Gymnasium", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    Gymnasium
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Indoor Games" name="features_menities[]" {{ in_array("Indoor Games", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    Indoor Games
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="24x7 Security" name="features_menities[]" {{ in_array("24x7 Security", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                    24x7 Security
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Automatic Lift" name="features_menities[]" {{ in_array("Automatic Lift", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                Automatic Lift
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="24 Hrs Water Supply" name="features_menities[]" {{ in_array("24 Hrs Water Supply", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                24 Hrs Water Supply
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Two Wheeler Parking" name="features_menities[]" {{ in_array("Two Wheeler Parking", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                Two Wheeler Parking
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Four Wheeler Parking" name="features_menities[]" {{ in_array("Four Wheeler Parking", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                Four Wheeler Parking
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Power Backup" name="features_menities[]" {{ in_array("Power Backup", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                Power Backup
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Iron Filter" name="features_menities[]" {{ in_array("Iron Filter", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                Iron Filter
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="loan" name="features_menities[]" {{ in_array("loan", $features_menities) ? "checked" : "" }}>
                                                <label class="form-check-label">
                                                Easy Loan facility
                                                </label>
                                            </div>


                                        </div>
                                    </div> 
                                </div>
                                

                        
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Project</button>
                            <div class="clearfix"></div>
                    
                        </div>
                    <form>
            </div>
        </div>
    </div>
</div>
@endsection