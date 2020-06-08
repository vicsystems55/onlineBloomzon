@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pt-5 pt-2 pb-5 pt-2">
                
                    <style>
                       
                    </style>
                <div class="card-body h-50">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    
                    <h2>Hurray!!, You are almost there.<br><br>
                        {{ __('Please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    </h2>
                    <div class="p-5"></div>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-lg btn-secondary  ">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
