@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            

            <div class="card">
                <div class="card-body">
                    

<style type="text/css">
     
</style>

<ul class="nav nav-pills nav-tabs mb-3 nav-justified" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><h4>Buyer</h4></a>
  </li>
  <li class="nav-item " role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><h4>Seller</h4></a>
  </li>
  
</ul>


<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


        <h3 class="text-center p-2 bg-warning">Create a Buyer Account</h3>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                        <input type="hidden" name="role" value="buyer">
                        <div class="row">
                            <div class="col-md-6">
                            
                            <div class="form-group ">
                        

                            <div class="">
                                <input placeholder="Enter fullname" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                           

                            <div class="">
                                <input placeholder="Phone" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" maxlength="11">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                        
                        <textarea name="address" placeholder="Address.." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                        <div class="form-group ">
                           <style type="text/css">
                               
                               
                               
                               .ficon{
                                position: absolute;
                                margin-top: -27px;
                                right: 1.6em;
                                cursor: pointer;
                               }



                           </style>

                            <div class="form-group">
                                <input placeholder="Enter password" id="password-field" type="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    
                                    <i onclick="toggleVisible(this.id)" id="password" class="ficon fa fa-eye" aria-hidden="true"></i>
                                @error('password')
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                           

                            <div class="">
                                <input placeholder="Confirm password" id="password-confirm-field" type="password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <i onclick="toggleVisible(this.id)" id="password-confirm" class="ficon fa fa-eye" aria-hidden="true"></i>
                            </div>

                            <script type="text/javascript">
                                function toggleVisible(id){
                                    $inputType = document.getElementById(id+'-field');

                                    if ($inputType.type=='password') {
                                        $inputType.setAttribute("type", "text");
                                        
                                        document.getElementById(id).className = "ficon fa fa-eye-slash";
                                    }
                                    else{
                                        $inputType.setAttribute("type", "password");
                                        document.getElementById(id).className = "ficon fa fa-eye";
                                    }
                                    

                                }
                            </script>
                        </div>
                        </div>


                        <div class="col-md-6">
                            

                                

                        <div class="form-group ">
                           

                            <div class="">
                                <input placeholder="Enter address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                           
                                <style type="text/css">
                                    #pin-field{
                                        letter-spacing: 65px;
                                        text-align: center;
                                        caret-color: transparent;
                                        


                                    }

                                    #pin-confirm-field{
                                        letter-spacing: 65px;
                                        text-align: center;
                                        caret-color: transparent;

                                        

                                    }

                                    #pinDigit{
                                        text-align: center;
                                    }
                                </style>
                               

                                <script type="text/javascript">
                                    function moveNext(){

                                    }
                                </script>
                            <div class="">
                                <label>Create PIN</label>
                                <input placeholder="" id="pin-field" type="password" class="form-control @error('pin') is-invalid @enderror" name="pin" required autocomplete="new-pin" maxlength="4">
                                <i onclick="toggleVisible(this.id)" id="pin" class="ficon fa fa-eye" aria-hidden="true"></i>

                                @error('pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                           

                            <div class="">
                                <label>Confirm PIN</label>
                                <input placeholder="" id="pin-confirm-field" type="password" class="form-control" name="pin_confirmation" required autocomplete="new-pin" maxlength="4">
                                <i onclick="toggleVisible(this.id)" id="pin-confirm" class="ficon fa fa-eye" aria-hidden="true"></i>
                                @error('confirmation_pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </div>
                        </div>  

                        <div class="form-group ">
                            <div class="">
                                <button style="background-color: orange; color: white;" type="submit" class="btn btn-block btn-lg shadow col-md-8 mx-auto">
                                    {{ __('Create Account') }}
                                </button>
                            </div>
                        </div>
                    </form>


  
</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      


        <h3 class="text-center bg-danger p-2">Create a Seller Account</h3>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                         <input type="hidden" name="role" value="seller">
                        <div class="row">
                            <div class="col-md-6">
                            
                            <div class="form-group ">
                        

                            <div class="">
                                <input placeholder="Enter fullname" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                           

                            <div class="">
                                <input placeholder="Phone" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" maxlength="11">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                        
                        <textarea name="address" placeholder="Address.." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                        <div class="form-group ">
                           <style type="text/css">
                               
                               
                               
                               .ficon{
                                position: absolute;
                                margin-top: -27px;
                                right: 1.6em;
                                cursor: pointer;
                               }



                           </style>

                            <div class="form-group">
                                <input placeholder="Enter password" id="password2-field" type="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    
                                    <i onclick="toggleVisible(this.id)" id="password2" class="ficon fa fa-eye" aria-hidden="true"></i>
                                @error('password')
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                           

                            <div class="">
                                <input placeholder="Confirm password" id="password-confirm2-field" type="password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <i onclick="toggleVisible(this.id)" id="password-confirm2" class="ficon fa fa-eye" aria-hidden="true"></i>
                            </div>

                            <script type="text/javascript">
                                function toggleVisible(id){
                                    $inputType = document.getElementById(id+'-field');

                                    if ($inputType.type=='password') {
                                        $inputType.setAttribute("type", "text");
                                        
                                        document.getElementById(id).className = "ficon fa fa-eye-slash";
                                    }
                                    else{
                                        $inputType.setAttribute("type", "password");
                                        document.getElementById(id).className = "ficon fa fa-eye";
                                    }
                                    

                                }
                            </script>
                        </div>
                        </div>


                        <div class="col-md-6">
                            

                                

                        <div class="form-group ">
                           

                            <div class="">
                                <input placeholder="Enter address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div class="form-group">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio3" name="gender" value="male" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio3">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio4" name="gender" value="female" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio4">Female</label>
                            </div>
                       </div>

                        <div class="form-group ">
                           
                                <style type="text/css">
                                    #pin-field{
                                        letter-spacing: 65px;
                                        text-align: center;
                                        caret-color: transparent;
                                        


                                    }

                                    #pin-confirm-field{
                                        letter-spacing: 65px;
                                        text-align: center;
                                        caret-color: transparent;

                                        

                                    }

                                    #pinDigit{
                                        text-align: center;
                                    }
                                </style>
                               

                                <script type="text/javascript">
                                    function moveNext(){

                                    }
                                </script>
                            <div class="">
                                <label>Create PIN</label>
                                <input placeholder="" id="pin-field" type="password" class="form-control @error('pin') is-invalid @enderror" name="pin" required autocomplete="new-pin" maxlength="4">
                                <i onclick="toggleVisible(this.id)" id="pin" class="ficon fa fa-eye" aria-hidden="true"></i>

                                @error('pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                           

                            <div class="">
                                <label>Confirm PIN</label>
                                <input placeholder="" id="pin-confirm-field" type="password" class="form-control" name="pin_confirmation" required autocomplete="new-pin" maxlength="4">
                                <i onclick="toggleVisible(this.id)" id="pin-confirm" class="ficon fa fa-eye" aria-hidden="true"></i>
                                @error('confirmation_pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </div>
                        </div>  

                        <div class="form-group ">
                            <div class="">
                                <button style="background-color: red; color: white;" type="submit" class="btn btn-block btn-lg col-md-9 mx-auto">
                                    {{ __('Create Account') }}
                                </button>
                            </div>
                        </div>
                    </form>



  </div>
  
</div>






                </div>

            </div>
        </div>
    </div>
</div>
@endsection
