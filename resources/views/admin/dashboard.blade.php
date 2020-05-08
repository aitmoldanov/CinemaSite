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

                <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style=" padding-top: 30px ; width: 660px ; background:rgba(13,13,13,0.65);
        height: 450px;  color: white; border-radius: 8px;">
                    <div class="card-header"><h3> Settings</h3></div>
                    <a class="nav-link" href="{{url('/create')}}">Add new movie</a>
                    <a class="nav-link" href="{{url('/table')}}">Movie Table</a>

                </div>
            </div>
        </div>
                </div></div></div></div></div>
@endsection
