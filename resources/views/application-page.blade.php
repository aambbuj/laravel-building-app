@extends('layouts')
@section('content')
<style>
    .navbar-light {
        background-color: #02245b !important;
    }
</style>
<div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <form action="{{route('application-form')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3" > 
                        <div id="row11">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="applicany_name[]" placeholder="Your Name">
                                        <label for="name">Applicent Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="phone_number[]" placeholder="Your Phone Number">
                                        <label for="email">Phone Number</label>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" name="upload_pan[]" >
                                        <label for="pan" style="color: black">Upload PAN Image</label>
                                    </div>
                                </div>  
                                <div  class="col-md-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" name="upload_aadher[]" >
                                        <label for="aadhar" style="color: black">Upload AADHAR Image</label>
                                    </div>
                                </div>
                            </div>
                            
                             
                        </div>
                        <div id="newinput"></div> 
                        <div class="col-md-12">
                            <span class="btn btn-primary js-add--exam-row" id="rowAdder">Add More</span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="flat_number" placeholder="Flat Number">
                                <label for="name">Flat Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="flat_area" placeholder="Flat Area">
                                <label for="name">Flat Area</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="sq_ft_rate_sb" placeholder="Sq ft rate S.B ">
                                <label for="name">Sq ft rate S.B </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="flate_price" placeholder="flate_price">
                                <label for="name">Flate Price</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="cover_car_parking_price" placeholder="cover car parking price">
                                <label for="name">Cover car parking price</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="open_car_parking_price" placeholder="open car parking price">
                                <label for="name">Open car parking price</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="additional_cost" placeholder="Additional Price">
                                <label for="name">Additional Price</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="total_price" placeholder="Total Flat Price">
                                <label for="name">Total Flat Price</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="message" placeholder="Message">
                                <label for="name">Message</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">&nbsp;</div> 
                        <div class="col-md-12" style="text-align: center;">
                            <input class="btn btn-primary py-3 px-5" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script type="text/javascript">
        var totalPrice = 0;
        $("input[name=sq_ft_rate_sb]").keyup(function(){
            if ($("input[name=flat_area]").val() > 0) {
                let flatePrice = $("input[name=flat_area]").val() * $("input[name=sq_ft_rate_sb]").val();
                $("input[name=flate_price]").val(flatePrice);
            }else{
                alert('pliz enter Flat area');
            }
        });

        $("input[name=cover_car_parking_price]").keyup(function(){
            let additional_cost = parseInt($("input[name=additional_cost]").val()) >0 ? parseInt($("input[name=additional_cost]").val()) : 0;
            let open_car_parking_price = parseInt($("input[name=open_car_parking_price]").val()) >0 ? parseInt($("input[name=open_car_parking_price]").val()) : 0;
            let cover_car_parking_price = parseInt($("input[name=cover_car_parking_price]").val()) >0 ? parseInt($("input[name=cover_car_parking_price]").val()) : 0;
            $("input[name=total_price]").val( additional_cost + open_car_parking_price + cover_car_parking_price);
        });

        $("input[name=open_car_parking_price]").keyup(function(){
            
            let additional_cost = parseInt($("input[name=additional_cost]").val()) >0 ? parseInt($("input[name=additional_cost]").val()) : 0;
            let open_car_parking_price = parseInt($("input[name=open_car_parking_price]").val()) >0 ? parseInt($("input[name=open_car_parking_price]").val()) : 0;
            let cover_car_parking_price = parseInt($("input[name=cover_car_parking_price]").val()) >0 ? parseInt($("input[name=cover_car_parking_price]").val()) : 0;
            $("input[name=total_price]").val( additional_cost + open_car_parking_price + cover_car_parking_price);
        });

        $("input[name=additional_cost]").keyup(function(){
            
            let additional_cost = parseInt($("input[name=additional_cost]").val()) >0 ? parseInt($("input[name=additional_cost]").val()) : 0;
            let open_car_parking_price = parseInt($("input[name=open_car_parking_price]").val()) >0 ? parseInt($("input[name=open_car_parking_price]").val()) : 0;
            let cover_car_parking_price = parseInt($("input[name=cover_car_parking_price]").val()) >0 ? parseInt($("input[name=cover_car_parking_price]").val()) : 0;
            $("input[name=total_price]").val( additional_cost + open_car_parking_price + cover_car_parking_price);

        });
        
        $("#rowAdder").click(function () {
            console.log()
            newRowAdd =
                    `<div id="row11">
                        <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="applicany_name[]" placeholder="Your Name">
                                <label for="name">Applicent Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="phone_number[]" placeholder="Your Phone Number">
                                <label for="email">Phone Number</label>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" name="upload_pan[]" >
                                <label for="pan" style="color: black">Upload PAN Image</label>
                            </div>
                        </div>  
                        <div  class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" name="upload_aadher[]" >
                                <label for="aadhar" style="color: black">Upload AADHAR Image</label>
                            </div>
                        </div> 
                        </div>
                    </div>` ;

            $('#newinput').append(newRowAdd);
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>
@endsection