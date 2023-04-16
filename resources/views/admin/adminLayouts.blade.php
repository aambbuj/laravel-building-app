<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Hive construction - Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('backend/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('backend/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('backend/assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('backend/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://hiveconstruction.in" target="__blank" class="simple-text">
                 HIVE Construction 
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="{{route('admin.index')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.inquery')}}">
                        <i class="pe-7s-user"></i>
                        <p>Inquery</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.contact')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.projects')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Add Projects</p>
                    </a>
                </li>
               <!--    <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        
        @yield('content')
 
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('backend/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('backend/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('backend/assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('backend/assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('backend/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('backend/assets/js/demo.js')}}"></script>

  
</html>
