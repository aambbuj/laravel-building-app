<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hive Construction - Real Estate Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>

</head>

<body> 


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" target="_blank" href="https://www.facebook.com/people/Hive-Construction/100090480018370/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" target="_blank" href="https://www.instagram.com/hiveconstruction7/?next=%2F"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span class="fs-5 fw-bold">+91 7980857714</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="index.html" class="navbar-brand ps-5 me-0">
            <img src="{{ url('assets/images/hiveconstructionWhite.png')}}" class="logo_site">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('index')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about-page')}}" class="nav-item nav-link">About</a> 
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Project</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('ongoing-page')}}" class="dropdown-item">Ongoing Project</a>
                        <a href="{{route('complete-page')}}" class="dropdown-item">Complete project</a>
                        <a href="{{route('upcoming-page')}}" class="dropdown-item">Upcomming project</a> 
                    </div>
                </div>
                <a href="{{route('application-page')}}" class="nav-item nav-link ">Application Form</a>
                <a href="{{route('contact-page')}}" class="nav-item nav-link">Contact Us</a>
                <a href="{{route('emi-alculator-page')}}" class="nav-item nav-link">EMI Calculator</a>
            </div>  
        </div>
    </nav>
    <!-- Navbar End -->
    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                     <img src="{{ url ('assets/images/hiveconstructionWhite.png')}}" style="width: 100%;">
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="application_form.html">Application Form</a>
                    <a class="btn btn-link" href="emi_calculator.html">EMI Calculator</a>
                    <a class="btn btn-link" href="">Terms & Condition</a> 
                </div>
                <div class="col-lg-3 col-md-5">
                    <h5 class="text-white mb-4">Project</h5>
                    <a class="btn btn-link" href="{{route('ongoing-page')}}">Ongoing Project</a>
                    <a class="btn btn-link" href="{{route('complete-page')}}">Complete Project</a>
                    <a class="btn btn-link" href="{{route('upcoming-page')}}">Upcomming Project</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a> 
                </div>
                <div class="col-lg-3 col-md-6 nopadding">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Lalkuthi (Purbayan), Gopalpur, Kolkata-700136</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7980857714</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info.hiveconstruction@gmail.com</p>
                    <div class="d-flex pt-3"> 
                        <a class="btn btn-square btn-primary rounded-circle me-2" target="_blank" href="https://www.facebook.com/people/Hive-Construction/100090480018370/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" target="_blank" href="https://www.instagram.com/hiveconstruction7/?next=%2F"><i class="fab fa-instagram"></i></a> 
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Hive Construction</a>, All Right Reserved. Develop By Adosy Digital Soluation</p> 
        </div>
    </div>
    <!-- Copyright End -->

    <a href="https://api.whatsapp.com/send?phone=+916292302844&text=Hi" class="float" target="_blank">
        <svg class="whatsapp" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M414.73 97.1A222.14 222.14 0 00256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0029.78 111L32 480l118.25-30.87a223.63 223.63 0 00106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 00414.73 97.1zM256.94 438.66h-.08a185.75 185.75 0 01-94.36-25.72l-6.77-4-70.17 18.32 18.73-68.09-4.41-7A183.46 183.46 0 0171.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 01185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52zm101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78-14.4 18-17.65 21.75-6.5 4.16-12.07 1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 00-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38 39.3 59.73 95.21 83.76a323.11 323.11 0 0031.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2 10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37-5.11-3.71-10.69-6.48z" fill-rule="evenodd"/></svg>
    </a>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script> 
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>