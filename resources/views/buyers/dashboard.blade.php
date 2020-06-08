@extends('layouts.app2')

@section('content')
<div class="row">
                    <div class="col-md-4 mb-3">
                        <a href="/purchaseHistory">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                                <h3><b><i class="fas fa-paste"></i> TOTAL ORDERS</b></h3>
                                    <h2 style="font-size: 70px;">40</h2>
                                        <p style="color: crimson; font-size: 16px">Track, Return or Buy product again</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="/points">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                                <h3><b><i class="far fa-dot-circle"></i> YOUR POINTS</b></h3>
                                <h2 style="font-size: 70px;">400</h2>
                                <p style="color: crimson; font-size: 16px">Buy with your points and get discounts</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="/dashboard/securitySettings">
                            <div class="card text-center pt-3" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-user-lock"></i></h2>
                                <h4>Login &amp; Security Settings</h4><br><br>
                                <p style="color: crimson; font-size: 16px">Edit Login Details</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                            <h2 style="font-size: 70px;"><i class="fas fa-play"></i></h2>
                            <h4>Stream Bloomzon TV</h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="live-track.html">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-route"></i></h2>
                                <h4>Track Your Purchase</h4><br>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="dashboard/deliveryStatus">
                            <div class="card text-center pt-3" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-truck"></i></h2>
                                <h4>Delivery Alert</h4><br><br>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="/dashboard/upPaymentMethod">
                            <div class="card text-center pt-3" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-credit-card"></i></h2>
                                <h4>Update &amp; Save Payment Method</h4>
                            </div>
                        </a>
                    </div>
                </div>
@endsection
