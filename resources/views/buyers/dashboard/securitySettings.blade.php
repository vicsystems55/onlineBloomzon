@extends('layouts.app2')

@section('content')
<div class="co">
                <div class="row col-md-12 text-center" style="background-color: #02499B !important; padding-top: 70px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b><i class="fas fa-user-lock pb-4" style="color: #fff; font-size: 120px;"></i><br>LOGIN &amp; SECURITY</b></h1>
                </div>
                <div class="row " style="background-color: #02499B !important; padding-left: 20px; padding-right: 20px; padding-top: 20px; padding-bottom: 20px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form>
                            
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">CHANGE PASSWORD: </label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;" placeholder="type here...">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">CONFIRM PASSWORD: </label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;" placeholder="type here...">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-lg">Save</button>
                            </div>
                        </form>
                    </div>




                </div>

                <div class="row mb-3" style="background-color: #02499B !important; padding-left: 20px; padding-right: 20px; padding-top: 20px; padding-bottom: 160px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form>
                            
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">CHANGE PIN: </label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;" placeholder="type here...">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">CONFIRM PIN: </label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" style="height: 40px; border-radius: 0;" placeholder="type here...">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-lg">Save</button>
                            </div>
                        </form>
                    </div>

                    


                </div>



            </div>
@endsection
