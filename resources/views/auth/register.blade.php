@extends('layouts.app')
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

@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-purple-light flex-center">
                <div class="container text-center white-text wow fadeInUp">

                <div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=" padding-top: 30px ; width: 660px ; background:rgba(13,13,13,0.65);
        height: 450px;  color: white; border-radius: 8px;">
                <div class="card-header" style="font-size: 24px;">{{ __('REGISTER') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4"><br>
                                <button type="submit" class="btn btn-primary" style="background-color: #10d3c9!important;
                        border-radius: 9px; margin-right: 130px;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div></div></div></div>
</div></div>
@endsection
