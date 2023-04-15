@extends('layouts')
@section('content')

<div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <form action="{{route('application-form')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3" > 
                    <div id="row11">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="applicany_name[]" placeholder="Your Name">
                                <label for="name">Applicent Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                                <input type="text" class="form-control" name="flat_area" placeholder="Flat Area">
                                <label for="name">Flat Area</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="cover_car_parking_price" placeholder="cover car parking price">
                                <label for="name">Cover car parking price</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="open_car_parking_price" placeholder="open car parking price">
                                <label for="name">Open car parking price</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="additional_cost" placeholder="Additional cost">
                                <label for="name">Additional cost</label>
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
        
        $("#rowAdder").click(function () {
            console.log()
            newRowAdd =
                    `<div id="row11">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="applicany_name[]" placeholder="Your Name">
                                <label for="name">Applicent Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                    </div>` ;

            $('#newinput').append(newRowAdd);
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>
@endsection