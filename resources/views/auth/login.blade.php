<style>
    .forms input{
        background-color: #424242 !important;
        border-color: #424242!important;;
        border-radius: 5px!important;;
        height: 40px!important;;
        width: 360px!important;;
        margin-left: 20px!important;;
    }
</style>
@extends('layouts.app')
@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-blue-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=" padding-top: 30px ; width: 560px ; background:rgba(13,13,13,0.65);
        height: 350px;  color: white; border-radius: 8px; margin-left: 80px;">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: white;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #10d3c9!important;
                        border-radius: 9px; margin-right: 200px;">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div></div></div></div>
@endsection
