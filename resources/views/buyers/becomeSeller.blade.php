@extends('layouts.app2')

@section('content')

                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Want to Become a Seller?</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-8 p-5 offset-2">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Select Package: </label>
                                <select name="" id="" class="form-control" style="height: 40px; border-radius: 0;">
                                    <option value="Basic">Basic</option>
                                    <option value="Premium">Premium</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Make Payment: </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Card No.: 0000 0000 0000 0000 0000" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" style="font-size: 16px;;">Expires: </label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="MM/YY" style="height: 40px; border-radius: 0;">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" style="font-size: 16px;;">CVV: </label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="123" style="height: 40px; border-radius: 0;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Amount: </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" style="height: 40px; border-radius: 0;">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-danger btn-lg">Pay</button><br>
                                <small>(This is a one time payment)</small>
                            </div>
                        </form>
                    </div>

                </div>
            
@endsection
