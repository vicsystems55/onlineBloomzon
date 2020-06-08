@extends('layouts.app')

@section('content')

<div class="container">

    
    <div class="row justify-content-center">

        <div class="col-md-5">
            <div class="p-5"></div>
           
            <div class="card shadow">
                

                <div class="card-body">
                    <h3 class="text-center font-weight-bold text-dark">LOGIN</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group p-2">
                            

                            <div class="">
                                <input placeholder="enter email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group p-2">
                            

                            <div class="">
                                <input placeholder="enter password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                
                            </div>

                            <div class="row">
                                <div class="col-5">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                </div>
                                <div class="col ">
                                    <div class="form-check">
                                    <input class="form-check-input" type="hidden" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       <a class="text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    </label>
                                </div>
                                     
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-block shadow">
                                    {{ __('Login') }}
                                </button>
                               

                                
                                <a class="btn btn-warning btn-block shadow" href="/register">
                                    Create an Account?
                                </a>

                                @if (Route::has('password.request'))
                                   
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
