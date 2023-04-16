@extends('layouts')
@section('content')
<style>
    .navbar-light {
        background-color: #02245b !important;
    }
</style>
<div class="container mt-5">
        <div class="row">
            <div class="col">
                <!-- EMI Calculator Widget START --><script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script><div id="ecww-widgetwrapper" style="min-width:250px;width:100%;"><div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;"></div><div id="ecww-more" style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;"><a style="background:#333;color:#FFF;text-decoration:none;border-bottom:1px dotted #ccc;" href="https://emicalculator.net/" title="Loan EMI Calculator" rel="nofollow" target="_blank">emicalculator.net</a></div></div><!-- EMI Calculator Widget END -->
            </div>
        </div>
    </div>
    <!-- Navbar End -->
@endsection