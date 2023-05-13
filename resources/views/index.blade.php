@extends('layouts')
@section('content')
    <!-- Carousel Start --> 
    <div class="container-fluid px-0" style="margin-top: -75px;">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/images/slider2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start"> 
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Find Best Your Properties in One Place</h1> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/images/slider1.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start"> 
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Find Best Your Properties in One Place</h1> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->




    <div class="container mb-5">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
            <form action="{{route('add-information')}}" method="post">
                @csrf
                <div class="row slide_up_slider_form">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="name" class="form-control" required name="name" placeholder="Your Name">
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" required name="email" placeholder="Your Email">
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="number" class="form-control" required name="phone" placeholder="Your Phone">
                            <label for="name">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input class="btn btn-primary py-3 px-5" type="submit" name="Send Message">
                    </div>
                </div>
                </form>
            </div>
        </div> 
    </div>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    <!-- About Start -->
    <div class="container-xxl mt-5 py-5">
        <div class="container mt-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="assets/images/about-1.jpg" alt="">
                        <img class="img-fluid" src="assets/images/about-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">HIVE CONSTRUCTION PROFESSIONALISM, TRUST, AND RESPECT FOR THE CUSTOMER</h1>
                    <p>Hive Construction - See Your Dreams Taking Their Shape.</p>
                    <p class="mb-4">Our mission is to create properties as per your needs and wants. We strive to exceed the expectations of our clients and provide a large range of real estate properties including residential, and commercial. Our commitment towards excellence can be reflected by the properties we develop. Founded in 2019, Give Constructions has completed 5 projects and 3 projects are under construction.</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" >5+</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Complete Project Start -->
    <div class="container bg-light"> 
        <div class="row gx-0  align-items-center">
            <div class="text-center mx-auto">
                <h3 class="display-5 text-uppercase" style="padding-top: 20px;">Complete Project</h3>
            </div>
            <div class="owl-slider">
                <div id="carousel" class="owl-carousel complited_slider">
                @foreach($projectDetails as $key => $projectDetail)
                @if($projectDetail->project_type == 'complete')
                    <div class="item">
                        <div class="single-property-wrap">
                            <div class="thumb">
                                <img src="{{$projectDetail->cover_photo}}" alt="img">
                            </div>
                            <div class="property-wrap-details">
                                <h4 style="text-align:center;"><a href="eco-stay.html"> {{$projectDetail->site_name}}</a></h4>
                                <span class="price" style="font-size: 13px;text-align:center;"> {{$projectDetail->location}}</span>
                                <div class="meta meta-2">
                                    @foreach($projectDetail->details as $details)
                                    <span><i class="fas fa-bed"></i>{{$details->type_of_bhk}}</span>
                                    @endforeach 
                                </div>
                                <div class="btn-area">
                                    
                                    <a class="btn btn-primary" href="{{route('details-view',$projectDetail->id)}}">View Details</a>
                                    <a class="btn btn-primary" href="mailto:info.hiveconstruction@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-primary" href="tel:+917980857714"><i class="fa fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Complete Project End -->

    <!-- Testimonial Start -->
    <div class="container-fluid mt-5 py-6 px-5">
        <div class="text-center mx-auto mt-5" style="max-width: 600px;">
            <h3 class="display-5 text-uppercase">Client Review</h3>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                <img class="img-fluid w-100 h-100" src="assets/images/testimonial.jpg">
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="testimonial">
                    <div class="owl-carousel testimonial-carousel" style="background-color: white !important;">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" style="background-color: white !important;" src="assets/images/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Whole every miles as tiled at seven or. Wished he entire esteem mr oh by. Possible bed you pleasure civility boy elegance ham. He prevent request by if in pleased.</p>
                            </div>
                        </div>
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" style="background-color: white !important;" src="assets/images/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Whole every miles as tiled at seven or. Wished he entire esteem mr oh by. Possible bed you pleasure civility boy elegance ham. He prevent request by if in pleased.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection