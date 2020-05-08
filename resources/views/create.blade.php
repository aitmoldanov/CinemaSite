@extends('layouts.app')
@section('title','Add new movie')
<style>
    body{
        background: url("https://dkr0pu7ej5xex.cloudfront.net/wp-content/uploads/2017/04/24135159/Netflix-Background.jpg")no-repeat center center;
        background-size: cover;
    }
    .note
    {
        text-align: center;
        height: 80px;
        background: -webkit-linear-gradient(left, #0072ff, #8811c5);
        color: #fff;
        font-weight: bold;
        line-height: 80px;
    }
    .form-content
    {
        padding: 5%;
        border: 1px solid #ced4da;
        margin-bottom: 2%;
        background-color: #AAADB0;
    }
    .form-control{
        border-radius:1.5rem;
    }
    .btnSubmit
    {
        border:none;
        border-radius:1.5rem;
        padding: 1%;
        width: 20%;
        cursor: pointer;
        background: #0062cc;
        color: #fff;
    }

</style>

@section('content')
    <body>
    <div class="container register-form" style="margin-top: 100px">
        <div class="form">
            <div class="note">
                <p>Add new movie.</p>
            </div>

            <div class="form-content">
                <form action="{{route('store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Film Name " name="name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Film Genre " name="genre">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Date of premiere " name="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Image Link" name="image">
                            </div>
                            <div class="form-group">
                                <select id="inputState" class="form-control" name="plan">
                                    <option selected>Choose quantity</option>

                                    <option value="4K"> 4K</option>
                                    <option value="Full HD"> Full HD</option>
                                    <option value="HD"> HD</option>
                                    <option value="SD"> SD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="inputState" class="form-control" name="type">
                                    <option selected>Type movie</option>
                                    <option value="film"> Film</option>
                                    <option value="serial"> Serial</option>
                                    <option value="cartoon"> Cartoon</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </body>

@endsection
