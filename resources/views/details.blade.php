@extends('layouts')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div>
                    <div id="sync1" class="owl-carousel owl-theme">
                        @foreach($projectDetails->image as $projectDetail)
                        <div class="item">
                            <img src="{{ url($projectDetail->bakgroung_image) }}">
                        </div>
                        @endforeach
                    </div>
                    
                    <div id="sync2" class="owl-carousel owl-theme">
                        @foreach($projectDetails->image as $projectDetail)
                            <div class="item">
                                <img src="{{ url($projectDetail->bakgroung_image) }}">
                            </div>
                        @endforeach
                    </div>

                    <div class="site_info mt-4">
                        <h3>{{$projectDetails->location}}</h3>
                        <p>{{$projectDetails->site_details}}</p>
                    </div>

                    <div class="site_meta">
                        <div class="meta meta-2 mt-4">
                        @foreach($projectDetails->details as $detail)
                            <span><i class="fas fa-bed"></i>{{$detail->type_of_bhk}}</span>
                            <!-- <span><i class="fas fa-bed"></i>3 BHK</span> -->
                        @endforeach

                            <!-- <span class="mr-0"><i class="fas fa-expand"></i>1194 sqft</span> -->
                        </div>
                    </div>

                    <div class="location-area mt-5">
                        <h5 class="sm-title">Overview</h5>
                        <table class="table table-striped"> 
                            <tbody>
                            @foreach($projectDetails->details as $detail)
                              <tr>
                                <th scope="row">Type:</th>
                                <td>{{$detail->bhk_type}}</td> 
                              </tr>
                              <tr>
                                <th scope="row">{{$detail->type_of_bhk}}:</th>
                                <td>{{$detail->bhk_sqft}} sqft</td> 
                              </tr> 
                              <tr>
                                <th scope="row">Bedroom:</th>
                                <td>{{$detail->bhk_bedroom}} </td> 
                              </tr>
                              <tr>
                                <th scope="row">Bath:</th>
                                <td>{{$detail->bhk_bathroom}} </td> 
                              </tr>
                              @endforeach

                              <tr>
                                <th scope="row">Location:</th>
                                <td>{{$projectDetails->location}}</td> 
                              </tr>
                            </tbody>
                          </table>                             
                    </div>

                    <div class="location-area mt-5">
                        <h5 class="sm-title">Location</h5>
                        <div class="location-map"> 
                            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58933.3822595844!2d88.4367406238838!3d22.603910152480992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sLalkuthi%20(Purbayan)%2C%20Gopalpur%2C%20Kolkata-700136.%20eco%20stay%20near%20D%2Czio%20college%20rajarhat!5e0!3m2!1sen!2sin!4v1677475058347!5m2!1sen!2sin" style="border:0;" allowfullscreen=""></iframe>
                        </div>                            
                    </div>

                    <div class="location-area mt-5">
                        <h5 class="sm-title">Features / Amenities </h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-6 mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/road.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Road</h6>
                                        <p>80 Feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/school.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>School</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/college.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>College</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/bag.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Shopping</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/university.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>University</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/medicine.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Hospital</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/cctv.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>CCTV</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/swimming.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Swimming Pool</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/gymnasium.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Gymnasium</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/indoor.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Indoor Games</h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6  mb-4">
                                <div class="media">
                                    <div class="icon">
                                        <img src="{{url ('assets/images/guard.png')}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>24x7 Security </h6>
                                        <p>Yes</p>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div> 

                    <div class="location-area mt-5">
                        <h5 class="sm-title">Master Plan </h5>
                        <div class="row">
                        @foreach($projectDetails->image as $projectDetail)
                        <div class="col-md-6 mb-4">
                                <img class="w-100 class_gallery" src="{{url ($projectDetail->bakgroung_image)}}">
                                <!-- <p>Site One</p> -->
                            </div>
                        @endforeach
                            <!-- <div class="col-md-6 mb-4">
                                <img class="w-100 class_gallery" src="{{url ('assets/images/slider1.jpeg')}}">
                                <p>Site One</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <img class="w-100 class_gallery" src="{{url ('assets/images/eco-map.jpg')}}">
                                <p>Site One</p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <img class="w-100 class_gallery" src="{{url ('assets/images/slider1.jpeg')}}">
                                <p>Site One</p>
                            </div> -->
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="stykey_top">
                    <h4>Contact Us for More Info</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Name*">
                                    <label for="name">Name*</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="phone" placeholder="Mobile Number*">
                                    <label for="phone">Number*</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email*">
                                    <label for="email">Email*</label>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>


@endsection