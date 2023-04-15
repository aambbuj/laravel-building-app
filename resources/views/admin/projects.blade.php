@extends('admin.adminLayouts')
@section('content')

    <div class="content">
        <div class="container-fluid">

        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add  Projects</h4>
                            </div>
                            <div class="content">
                            <form action="{{route('admin.project-form')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Project Type</label>
                                        <select class="form-control" placeholder="Select Project Type" name="project_type">
                                            <option> Select</option>
                                            <option value="ongoing">Ongoing Project</option>
                                            <option value="complete">Complete Project</option>
                                            <option value="upcomming">Upcomming Project</option>
                                        </select>                                            
                                    </div>
                                </div>

                                    <div class="row">
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
                                 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Site Name</label>
                                                <input type="text" class="form-control" placeholder="Site Name" name="site_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Site Details</label>
                                                <textarea class="form-control" placeholder="Site Details" name="site_details"></textarea>
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
                                                <label>Location</label>
                                                <input type="text" class="form-control" placeholder="Location" name="location">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        
@endsection