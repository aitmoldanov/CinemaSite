@extends('layouts.app')
@section('title','Films')
<style>
    body{
        background:#eee;
    }
    h3 {
        font-size: 16px;
    }
    .text-navy {
        color: #1ab394;
    }
    .cart-product-imitation {
        text-align: center;
        padding-top: 30px;
        height: 142px;
        width: 95px;

    }
    .product-imitation.xl {
        padding: 120px 0;
    }
    .product-desc {
        padding: 20px;
        position: relative;
    }
    .ecommerce .tag-list {
        padding: 0;
    }
    .ecommerce .fa-star {
        color: #d1dade;
    }
    .ecommerce .fa-star.active {
        color: #f8ac59;
    }
    .ecommerce .note-editor {
        border: 1px solid #e7eaec;
    }
    table.shoping-cart-table {
        margin-bottom: 0;
    }
    table.shoping-cart-table tr td {
        border: none;
        text-align: right;
    }
    table.shoping-cart-table tr td.desc,
    table.shoping-cart-table tr td:first-child {
        text-align: left;
    }
    table.shoping-cart-table tr td:last-child {
        width: 80px;
    }
    .ibox {
        clear: both;
        margin-bottom: 25px;
        margin-top: 0;
        padding: 0;
    }
    .ibox.collapsed .ibox-content {
        display: none;
    }
    .ibox:after,
    .ibox:before {
        display: table;
    }
    .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: inherit;
        margin-bottom: 0;
        padding: 14px 15px 7px;
        min-height: 48px;
    }
    .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
    }
    .ibox-footer {
        color: inherit;
        border-top: 1px solid #e7eaec;
        font-size: 90%;
        background: #ffffff;
        padding: 10px 15px;
    }
    .list-group-item:hover{
        background-color: #999999;
        text-color:red;
    }
    .text-muted2:hover{
        background-color: #38c172;
    }
    .text-muted1:hover{
        background-color: #ea384c;

    }
</style>
@section('content')
    <body style="background-color: #1b153b; margin-top: 60px;">
    <div class="container">

        <div class="row">

            <div class="col-lg-2" >
                <div>
                    <h2 class="my-4" style="color:white">Category</h2>
                    <div class="list-group">
                        <a href="{{url('/film')}}" class="list-group-item" selected>Films</a>
                        <a href="{{url('/serial')}}" class="list-group-item">Serials</a>
                        <a href="{{url('/cartoon')}}" class="list-group-item">Cartoons</a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://kino.prim.land/wp-content/uploads/2015/02/avatar_2009-7.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Avatar (2009)</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://www.popzara.com/wp-content/uploads/2017/12/jumanji_2_featured.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Jumanji: The Next Level (2019)</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://p3.no/filmpolitiet/wp-content/uploads/2019/10/Zombieland-Double-Tap-2.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Zombieland: Double Tap (2019)</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <span class="pull-right">(<strong>5</strong>) items</span>
                                        <h5>Films</h5>
                                    </div>

                                    @foreach($movie as $movies)
                                        @if($movies->type=='film')
                                        <div class="ibox-content">
                                            <div class="table-responsive">
                                                <table class="table shoping-cart-table">
                                                    <tbody>
                                                    <tr>
                                                        <td width="90">
                                                            <div class="cart-product-imitation" style="background-image: url({{ $movies->image }});">

                                                            </div>
                                                        </td>
                                                        <td class="desc">
                                                            <h3>
                                                                <a href="#" class="text-navy" style="color: #1ab394;">
                                                                    {{ $movies->name }}
                                                                </a>
                                                            </h3>
                                                            <p class="medium">
                                                                {{ $movies->date }}
                                                            </p>
                                                            <dl class="medium m-b-none">
                                                                <dt>Genre:</dt>
                                                                <dd>{{ $movies->genre }}</dd>

                                                            </dl>

                                                            <div class="m-t-sm">
                                                                <a href="{{ url('add-to-cart/'.$movies->id) }}" class="text-muted2"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add to cart</a>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h4>
                                                                {{ $movies->plan }}
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                        @endif
                                    @endforeach



                                    <div class="ibox-content">
                                        <a href="{{ url('cart') }}"><button class="btn btn-primary pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button></a>
                                        <a href="{{ url('home') }}"><button class="btn btn-white"><i class="fa fa-arrow-left"></i> Home page</button></a>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <div class="ibox-content">
                    <span>
                        Your plan:
                    </span>
                                        <h2 class="font-bold" style="color: #38c172">
                                            Premium
                                        </h2>

                                        <hr>
                                        <span class="text-muted small">
                        You can add all movie to tour card
                    </span>
                                        <div class="m-t-sm">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Choose plan</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h5>Support</h5>
                                    </div>
                                    <div class="ibox-content text-center">
                                        <h3><i class="fa fa-phone"></i> +747 310 63 60</h3>
                                        <span class="small">
                        Please contact with us if you have any questions. We are avalible 24h.
                    </span>
                                    </div>
                                </div>

                                <div class="ibox">
                                    <div class="ibox-content">

                                        <p class="font-bold">
                                            Other categories you may be interested
                                        </p>
                                        <hr>
                                        <div>
                                            <a href="#" class="product-name"> Cartoons</a>
                                            <div class="small m-t-xs">
                                                Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV without paying more.
                                            </div>
                                            <div class="m-t text-righ">

                                                <a href="{{ url('/cartoon') }}" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-info" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <a href="#" class="product-name"> Serial</a>
                                            <div class="small m-t-xs">
                                                Save your favorites easily and always have something to watch.
                                            </div>
                                            <div class="m-t text-righ">

                                                <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-info" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    </div>

    </body>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection

