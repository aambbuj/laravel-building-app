@extends('layouts')
@section('content')
<style>
    .navbar-light {
        background-color: #02245b !important;
    }
</style>
     <!-- Contact Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Phone Number</h4>
                        <p class="mb-2">+91 7980857714</p>  
                        <p class="mb-2">+91 7439893022 </p> 
                        <a class="btn btn-primary px-4" href="tel:+917980857714">Call Now <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Email Address</h4>
                        <p class="mb-2">info.hiveconstruction@gmail.com</p> 
                        <a class="btn btn-primary px-4" href="mailto:info.hiveconstruction@gmail.com">Email Now <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Office Address</h4>
                        <p class="mb-2">Premises no 04-0686, plot no - AA IID/2901, Newtown,Tali park
                            Street no.751, Near 11 no Tank, kol - 700136</p> 
                        <a class="btn btn-primary px-4" href="https://goo.gl/maps/Aksf7Rfn5NASTb2HA" target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">  
                    <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117866.76464976544!2d88.436741!3d22.60391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89fd8edcaedc3%3A0x2f20e3ce5439e6a4!2sLalkuthi%20Purbayan!5e0!3m2!1sen!2sin!4v1679754040498!5m2!1sen!2sin"
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{route('contact-add')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" required name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" required name="phone" placeholder="Your Mobile Number">
                                    <label for="phone">Your Mobile Number</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" required name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" required name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" required placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="btn btn-primary py-3 px-5" type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
    <!-- Contact End -->
@endsection