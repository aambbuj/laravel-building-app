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
            <a class="navbar-brand" >Application Details</a>
        </div> 
    </div>
</nav>
<div class="content mt-5">
    <div class="container-fluid mt-5"> 
        <div class="row mt-5">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
@endsection