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
            <a class="navbar-brand" >Add  Projects</a>
        </div> 
    </div>
</nav>

    <div class="content mt-5">
        <div class="container-fluid mt-5"> 
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card"> 
                        <div class="content">
                        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
                <strong>{{ $message }}</strong>
        </div>
        @endif


        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
        </div>
        @endif
        
                        <form action="{{route('admin.project-form')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Project Type</label>
                                        <select class="form-control" placeholder="Select Project Type" name="project_type">
                                            <option> Select</option>
                                            <option value="ongoing">Ongoing Project</option>
                                            <option value="complete">Complete Project</option>
                                            <option value="upcoming">Upcomming Project</option>
                                        </select>                                            
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Name</label>
                                        <input type="text" class="form-control" placeholder="Site Name" name="site_name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Cover Photo</label>
                                        <input type="file" class="form-control" name="cover_photo">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Baground Photo One</label>
                                        <input type="file" class="form-control" name="bakgroung_image[]" placeholder="Select backgroung image" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Baground Photo Two</label>
                                        <input type="file" class="form-control" name="bakgroung_image[]" placeholder="Select backgroung image" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Baground Photo Three</label>
                                        <input type="file" class="form-control" name="bakgroung_image[]" placeholder="Select backgroung image" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Site Details</label>
                                        <textarea class="form-control" placeholder="Enter Site Details" name="site_details"></textarea>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>1 BHK</label>
                                        <select class="form-control" placeholder="Home Address" name="one_bhk">
                                            <option> Select</option>
                                            <option value="yes">Yes</option>
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

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Location" name="location">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Location Url</label>
                                        <input type="text" class="form-control" placeholder="Location Url" name="location_url">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Master Plan Immages (Select one or multiple file)</label>
                                        <input type="file" multiple class="form-control" placeholder="Location Url" name="master_plan_image[]">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Features / Amenities</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Road" name="features_menities[]">
                                            <label class="form-check-label">
                                                Road
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="School" name="features_menities[]">
                                            <label class="form-check-label">
                                                School
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="College" name="features_menities[]">
                                            <label class="form-check-label">
                                                College
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Shopping" name="features_menities[]">
                                            <label class="form-check-label">
                                                Shopping
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="University" name="features_menities[]">
                                            <label class="form-check-label">
                                                University
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Hospital" name="features_menities[]">
                                            <label class="form-check-label">
                                                
                                                Hospital
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="CCTV" name="features_menities[]">
                                            <label class="form-check-label">
                                                CCTV
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Swimming Pool" name="features_menities[]">
                                            <label class="form-check-label">
                                                Swimming Pool
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Gymnasium" name="features_menities[]">
                                            <label class="form-check-label">
                                                Gymnasium
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Indoor Games" name="features_menities[]">
                                            <label class="form-check-label">
                                                Indoor Games
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="24x7 Security" name="features_menities[]">
                                            <label class="form-check-label">
                                                24x7 Security
                                            </label>
                                        </div>
 
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Automatic Lift" name="features_menities[]">
                                            <label class="form-check-label">
                                                Automatic Lift
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="24 Hrs Water Supply" name="features_menities[]">
                                            <label class="form-check-label">
                                            24 Hrs Water Supply
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Two Wheeler Parking" name="features_menities[]">
                                            <label class="form-check-label">
                                            Two Wheeler Parking
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Four Wheeler Parking" name="features_menities[]">
                                            <label class="form-check-label">
                                            Four Wheeler Parking
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Power Backup" name="features_menities[]">
                                            <label class="form-check-label">
                                            Power Backup
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Iron Filter" name="features_menities[]">
                                            <label class="form-check-label">
                                            Iron Filter
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="loan" name="features_menities[]">
                                            <label class="form-check-label"> 
                                                Easy Loan facility
                                            </label>
                                        </div>

                                        <!-- <input type="text" class="form-control" placeholder="Features / Amenities" value="" name="features_menities[]"> -->
                                    </div>
                                </div>

                            </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right">Add Project</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection