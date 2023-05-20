@extends('admin.adminLayouts')
@section('content')
<style>
div#clockdate {
    position: absolute;
    bottom: 0;
    right: 0;
}
.clockdate-wrapper { 
    padding:25px; 
    width:100%;
    text-align:right;
    border-radius:5px;  
  
}
#clock{ 
    font-family: sans-serif;
    font-size:60px;
    text-shadow:0px 0px 1px #000;
    color:#000;
}
#clock span {
    color: gray; 
}
#date {
    letter-spacing:3px;
    font-size:14px;
    font-family:arial,sans-serif;
    color:#000;
}
</style>
<div class="content">
    <div class="container-fluid">
        <h1>Hi.. {{Auth::user() ? Auth::user()->name : 'Unknown user please login once'}}</h1>
        <h2>Welcome our "Hive Construction" Admin portal</h2> 
        <h4>On this portal you can edit update delete your ongoing, complete, upcoming project. You can view your application form data, Contact us data, project lead form data and more..</h4>
        <body onload="startTime()">
            <div id="clockdate">
                <div class="clockdate-wrapper">
                    <div id="clock"></div>
                    <div id="date"></div>
                </div>
            </div>
        </body>
    </div>
</div>
        
@endsection

<script>
function startTime() {
  var today = new Date();
  var hr = today.getHours();
  var min = today.getMinutes();
  var sec = today.getSeconds();
  ap = hr < 12 ? "<span>AM</span>" : "<span>PM</span>";
  hr = hr == 0 ? 12 : hr;
  hr = hr > 12 ? hr - 12 : hr;
  //Add a zero in front of numbers<10
  hr = checkTime(hr);
  min = checkTime(min);
  sec = checkTime(sec);
  document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

  var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
  var curWeekDay = days[today.getDay()];
  var curDay = today.getDate();
  var curMonth = months[today.getMonth()];
  var curYear = today.getFullYear();
  var date = curWeekDay + ", " + curDay + " " + curMonth + " " + curYear;
  document.getElementById("date").innerHTML = date;

  var time = setTimeout(function () {startTime();}, 500);
}
function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
} 
    </script>