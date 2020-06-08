@extends('layouts.app2')

@section('content')

                <div class="row">
                    <div class="col-md-9">
                        <div class="form-inline ">
                            <select class="form-control col-md-4" style="height: 40px; border-radius: 0px !important;">
                                <option>New</option>
                                <option>Old</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 text-right">

                        @include('buyers.createNew')
                       
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                             @include('buyers.createNew') <br>
                            <button onclick="showInbox()" class="btn btn-primary btn-block">Inbox</button><br>
                            <button onclick="showSent()" class="btn btn-primary btn-block">Sent</button>
                        </div>

                        <div class="col-lg-8">

                            <div style="display: block;" id="inbox" class="con">
                                    @foreach($msgs_received as $msg_received)

                                    <h1>All Inbox</h1>

                                <div class="card m-0 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                                    <div class="row p-5 ml-5 mr-5" style="border-bottom: 1px solid #ddd;">
                                        <a href="/messages/messageChat">
                                            <div class="col-md-2 text-left"><span class="badge badge-danger">{{$msg_received->sender_id}}</span></div>
                                            <div class="col-md-4 text-left" style="color: #999; font-size: 18px;">8:46 AM</div>
                                            <div class="col-md-6 text-right" style="color: #999; font-size: 18px;">{{$msg_received->created_at}}</div>
                                            <div class="text col-md-12 text-justify" style="color: #333; font-size: 18px;">{{$msg_received->body}}</div>
                                        </a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>

                            <div style="display: none;" id="sent" class="con">
                                 <h1>All Sent Messages</h1>
                            @foreach($msgs_sent as $msg_sent)

                           

                            <div class="card m-0 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                                    <div class="row p-5 ml-5 mr-5" style="border-bottom: 1px solid #ddd;">
                                        <a href="/messages/messageChat">
                                            <div class="col-md-2 text-left"><span class="badge badge-danger">{{$msg_sent->sender_id}}</span></div>
                                            <div class="col-md-4 text-left" style="color: #999; font-size: 18px;">8:46 AM</div>
                                            <div class="col-md-6 text-right" style="color: #999; font-size: 18px;">{{$msg_sent->created_at}}</div>
                                            <div class="text col-md-12 text-justify" style="color: #333; font-size: 18px;">{{$msg_sent->body}}</div>
                                        </a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            
                        </div>
                    </div>

                    <script type="text/javascript">
                        function showInbox(){

                            $inboxView = document.getElementById('inbox');
                            $sentView = document.getElementById('sent');

                            $inboxView.style.display="block";
                            $sentView.style.display="none";


                        }

                        function showSent(){

                            $inboxView = document.getElementById('inbox');
                            $sentView = document.getElementById('sent');

                            $inboxView.style.display="none";
                            $sentView.style.display="block";

                        }
                    </script>
                </div>



              


                
               
               
               
                
                 
            
@endsection
