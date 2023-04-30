<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<title>Hive construction - Admin</title> 
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" /> 
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" /> 
    <link href="{{asset('backend/assets/css/animate.min.css')}}" rel="stylesheet"/> 
    <link href="{{asset('backend/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/> 
    <link href="{{asset('backend/assets/css/demo.css')}}" rel="stylesheet" /> 
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('backend/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
 
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple">
 
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://hiveconstruction.in" target="__blank" class="simple-text">
                 {{Auth::user() ? Auth::user()->name : 'Unknown user pliz login once'}}
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="{{route('admin.dashboard')}}">
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
                    <a href="{{route('admin.application')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Application Details</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.booking')}}">
                        <i class="pe-7s-ribbon"></i>
                        <p>Booking Details</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.contact')}}">
                        <i class="pe-7s-mail"></i>
                        <p>Contact Details</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.projects')}}">
                        <i class="pe-7s-culture"></i>
                        <p>Add Projects</p>
                    </a>
                </li> 
                <li class="menuTab">
                    <input class="menuTabStyle" type="checkbox" id="chck1">
                    <label class="menuTab-label" for="chck1">
                        <i class="pe-7s-culture"></i>
                        <p>View Projects</p>
                    </label>
                    <div class="menuTab-content">
                        <ul class="subMenu_sttle">
                            <li><a style="color: black;" href="{{route('admin.view-project','ongoing')}}">Ongoing Project</a></li>
                            <li><a style="color: black;" href="{{route('admin.view-project','complete')}}">Complete Project</a></li>
                            <li><a style="color: black;" href="{{route('admin.view-project','upcoming')}}">Upcoming Project</a></li>
                        </ul>
                    </div>
                </li> 
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        
        @yield('content')
 
    </div>
</div>


</body>
 
    <script src="{{asset('backend/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('backend/assets/js/bootstrap.min.js')}}" type="text/javascript"></script> 
	<script src="{{asset('backend/assets/js/chartist.min.js')}}"></script> 
    <script src="{{asset('backend/assets/js/bootstrap-notify.js')}}"></script>  
	<script src="{{asset('backend/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script> 
	<script src="{{asset('backend/assets/js/demo.js')}}"></script>

  
</html>
