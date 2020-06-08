@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5"></div>
    <div class=" justify-content-center">
        <div class="col-md-5 mx-auto">
            <div class="card">
                

                <div class="card-body">
                    <h3>Reset Password</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="email" class=" text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input placeholder="Enter your email here" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-block btn-primary float-right text-center mx-auto">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
