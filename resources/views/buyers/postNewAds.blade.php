@extends('layouts.app2')

@section('content')

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="" style="color: #02499B; background-color: white; padding: 30px;">
                            <div class="col-md-12 pb-4 mb-4" style="border-bottom: #ddd solid 1px;">
                                <h2>Create New Advert</h2>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1 " style="font-size: 16px; color: #666; font-weight: 500;">Select Page Section</label><br>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Choose--</option>
                                        <option value="">Header</option>
                                        <option value="">Body</option>
                                        <option value="">Footer</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1 " style="font-size: 16px; color: #666; font-weight: 500;">Duration</label><br>
                                    <select name="" id="" class="form-control">
                                        <option value="">--Choose--</option>
                                        <option value="">14 days</option>
                                        <option value="">30 days</option>
                                        <option value="">3 months</option>
                                        <option value="">6 months</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1 " style="font-size: 16px; color: #666; font-weight: 500;">Image 1</label><br>
                                    <input type="file" class="form-control">
                                </div>
                                <br>
                                <div class=" form-group">
                                    <label for="exampleFormControlInput1 " style="font-size: 16px; color: #666; font-weight: 500; ">Image 2</label><br>
                                    <input type="file" class=" form-control ">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1 " style="font-size: 16px; color: #666; font-weight: 500; ">Image 3</label><br>
                                    <input type="file" class="form-control ">
                                </div>
                                <br>
                                <div class=" form-group text-center ">
                                    <button type="button " class="btn btn-danger btn-lg btn-block " style="vertical-align: middle; ">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <br>
                <!-- <div class="row ">
                    <div class="col-md-12 ">
                        <div class="card text-center " style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="font-size: 100px; ">40</h1>
                            <h1><b>Total Orders</b></h1>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row " style="padding: 15px; ">
                    <div class="col-md-12 card " style="padding: 15px; text-align: right; ">
                        <p>Copyright 2020 - Bloomzon </p>
                    </div>
                </div> -->
            
@endsection
