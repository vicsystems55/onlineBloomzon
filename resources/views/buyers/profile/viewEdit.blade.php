
@extends('layouts.app2')

@section('content')

<div class="row mb-3 " style="background-color: #808080 !important; padding: 100px; ">
                    <div id="showData" class="col-md-6 p-5 offset-3">
                    	<img src="{{asset('asset')}}/avatar/{{Auth::user()->gender}}.png" class="img img-circle m-auto" width="80" height="80">
                       
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #000; font-weight: 500; ">BuyersId</label><br>

                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">{{$user_data->buyersId}}</label><br>
                                
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #000; font-weight: 500; ">Fullname</label><br>

                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">{{$user_data->name}}</label><br>
                                
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #000; font-weight: 500; ">Phone</label><br>

                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">{{$user_data->phone}}</label><br>
                                
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #000; font-weight: 500; ">Email</label><br>

                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">{{$user_data->email}}</label><br>
                                
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #000; font-weight: 500; ">Address</label><br>

                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">{{$user_data->address}}</label><br>
                                
                            </div>

                           
                            
                            <div class="form-group ">
                                <button onclick="toggleEdit()" class="btn btn-block btn-danger btn-lg  ">Edit Records</button>
                            </div>

                            <script type="text/javascript">
                            		
                            	function toggleEdit(){
                            		$showData = document.getElementById('showData');
                            		$editData = document.getElementById('editData');
                            		$showData.style.display="none";
                            		$editData.style.display="block";
                            	}

                            	function toProfile(){
                            		$showData = document.getElementById('showData');
                            		$editData = document.getElementById('editData');
                            		$showData.style.display="block";
                            		$editData.style.display="none";
                            	}
                            </script>
                        
                    </div>



                    <div id="editData" style="display: none;" class="col-md-6 p-5 offset-3">
                    	<img src="{{asset('asset')}}/avatar/{{Auth::user()->gender}}.png" class="img img-circle m-auto" width="80" height="80">
                        <form action="/profile/update" method="post">
                            @csrf

                            <div class="form-group ">
                                <label for="exampleFormControlInput11 " style="font-size: 16px; color: #fff; font-weight: 500; ">Full Name</label><br>
                                <input type="text " name="name" value="{{$user_data->name}}" class="form-control
                                @error('name') is-invalid @enderror
                                " id="exampleFormControlInput11 " placeholder="Name " style="height: 40px; ">
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput12 " style="font-size: 16px; color: #fff; font-weight: 500; ">Phone number</label><br>
                                <input type="text " class="form-control
                                @error('phone') is-invalid @enderror
                                 " id="exampleFormControlInput12 " placeholder="phone " style="height: 40px; " name="phone" value="{{$user_data->phone}}">
                                 @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Email</label><br>
                                <input type="email " class="form-control
                                @error('email') is-invalid @enderror
                                 " id="exampleFormControlInput1 " placeholder="Email" style="height: 40px; "
                                name="email" value="{{$user_data->email}}">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio1" name="gender" value="male" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio1">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="gender" value="female" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Female</label>
                            </div>
                       </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Address</label><br>
                                <input type="email " class="form-control 
                                @error('address') is-invalid @enderror
                                " id="exampleFormControlInput1 " placeholder="Address " style="height: 40px; "
                                name="address" value="{{$user_data->address}}">
                                 @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Billing Address</label><br>
                                <input type="email " class="form-control " id="exampleFormControlInput1 " 
                                name="billing_address" value="abuja" 
                                placeholder="Abuja " style="height: 40px; " readonly="">
                            </div>
                            
                            <div class="form-group ">
                                <button class="btn btn-block btn-danger btn-lg  ">Save</button>
                            </div>
                        </form>
                        <div class="form-group ">
                                <button onclick="toProfile()" class="btn btn-block btn-secondary btn-lg  ">Back</button>
                            </div>
                    </div>

                </div>
@endsection