@extends('layouts.app2')

@section('content')

              
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Give New Feedback</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #AF2E1D !important; padding-top: 20px; padding-right: 20px; padding-left: 20px; padding-bottom: 170px;">
                    <div class="col-md-8 card p-5 offset-2">
                        <h4 class="text-right">Rating: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h4>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">User ID: </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Service: </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group mt-4">
                                <textarea name="" id="" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message: "></textarea>
                            </div>

                            <div class="form-group text-right">
                                <button class="btn btn-danger">Send</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
        
           
@endsection
