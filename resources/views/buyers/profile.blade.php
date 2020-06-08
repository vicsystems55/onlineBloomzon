@extends('layouts.app2')

@section('content')
<div class="col-md-10">
                <div class="row col-md-12 text-center" style="text-align: center !important; color:white; background-color: #fff;">
                    <div class="col-md-4 offset-4" style="background-color: #02499B !important; padding-top: 40px; padding-bottom: 40px; border-bottom-left-radius: 50%; border-bottom-right-radius: 50%;">
                        <i class="fa fa-user-circle fa-4x"></i>
                        <h1 class="text-center m-auto pt-3 pb-3"><b>Profile</b></h1>
                        <a href="#" class="btn btn-default">My Account Information</a>
                    </div>
                </div>
                <div class="row col-md-12 mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <a href="/profile/viewEdit">
                            <div class="col-md-3">
                                <i style="color: #02499B  !important;" class="fa fa-user-circle fa-4x pl-3"></i>
                            </div>
                            <div class="col-md-6">
                                <span style="color: #02499B  !important; font-size: 19px;">
                                        <b> Edit Profile Details</b>
                                    </span>
                                <p>View and edit your Information</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fa fa-angle-right fa-4x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <a href="/dashboard/upPaymentMethod">
                            <div class="col-md-3">
                                <i style="color: #02499B  !important;" class="fas fa-credit-card  fa-4x pl-3"></i>
                            </div>
                            <div class="col-md-6">
                                <span class="" style="color: #02499B  !important; font-size: 19px;">
                                       <b> Payment Method</b>
                                    </span>
                                <p style="font-size: 15px;">View and edit your payment details</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fa fa-angle-right fa-4x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <a href="contact-admin.html">
                            <div class="col-md-3">
                                <i style="color: #02499B  !important;" class="fas fa-headset fa-4x pl-3"></i>
                            </div>
                            <div class="col-md-6">
                                <span class="" style="color: #02499B  !important; font-size: 19px;">
                                       <b>Help &amp; Support</b>
                                    </span>
                                <p>Contact Admin</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fa fa-angle-right fa-4x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <div class="col-md-3">
                            <i style="color: #02499B  !important;" class="fas fa-sign-out-alt fa-4x pl-3"></i>
                        </div>
                        <div class="col-md-6">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        
                                 

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            <span class="" style="color: #02499B  !important; font-size: 19px;"><b> Sign Out</b></span>

                               </a>
                        </div>
                        <div class="col-md-3 text-right">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                    </div>
                </div>
            </div>
@endsection
