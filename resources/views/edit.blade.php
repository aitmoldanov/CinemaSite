<style>
    .forms input{
        background-color: #424242;
        border-color: #424242;
        border-radius: 5px;
        height: 35px;
        width: 360px;
        margin-left: 20px;
    }


</style>
@extends('layouts.app')
@section('title','Edit')
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif
    <div class="view intro-2">
        <div class="full-bg-img">
            <div class="mask rgba-purple-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                    <div class="regis">


                        <br>
                        <form action="{{route('update', $movie->id)}}" method="POST" class="forms">
                            {{ csrf_field() }}
                            <div class="row">
                            <div class="form-group">
                                <label for="exampleInputText">Film Name</label>
                                <input class="form-control" type="text" value="{{$movie->name}}" placeholder="Film name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">Genre</label>
                                <input class="form-control" type="text"  value="{{$movie->genre}}" placeholder="genre" name="genre">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">Date of preimera</label>
                                <input class="form-control" type="text" value="{{$movie->date}}" placeholder="imdb" name="date">
                            </div>



                            <div class="form-group">
                                <label for="exampleInputText">Link for image</label>
                                <input class="form-control" type="text" value="{{$movie->image}}" placeholder="imdb" name="image">
                            </div>

                            <div class="form-group" style="margin-left: 50px">
                                <label for="exampleInputText">Quantity</label>
                                <select id="inputState" class="form-control" name="plan">
                                    <option value="4K" selected> 4K</option>
                                    <option value="Full HD"> Full HD</option>
                                    <option value="HD"> HD</option>
                                    <option value="SD"> SD</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-left: 70px">
                                <label for="exampleInputText">Type</label>
                                <select id="inputState" class="form-control" name="type">
                                    <option value="film" selected> Film</option>
                                    <option value="serial"> Serial</option>
                                    <option value="cartoon"> Cartoon</option>
                                </select>

                                </div>
                                </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #10d3c9!important;
                        border-radius: 9px;" >Update</button>
                        </form>
                    </div>

                </div>
            </div></div>
    </div>
@endsection
