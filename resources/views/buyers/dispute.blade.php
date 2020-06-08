@extends('layouts.app2')

@section('content')

                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Platform Dispute File</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Select Subject: </label>
                                <select name="" id="" class="form-control" style="height: 40px; border-radius: 0;">
                                    <option value="Delivery">Delivery</option>
                                    <option value="Service">Service Failure</option>
                                    <option value="Fund">Fund</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Report ID: </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-inline">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Amount: </label>
                                <select name="" id="" class="form-control ml-5" style="height: 40px; border-radius: 0;">
                                    <option value="Delivery">N</option>
                                    <option value="Service">$</option>
                                </select>
                                <input type="email" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group mt-4">
                                <textarea name="" id="" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message: "></textarea>
                            </div>

                            <div class="form-group text-right">
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>

                </div>
        
@endsection
