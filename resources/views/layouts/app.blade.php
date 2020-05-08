<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Poppins:200,300,400,500,500i,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .intro-2 {
            background: url("https://dkr0pu7ej5xex.cloudfront.net/wp-content/uploads/2017/04/24135159/Netflix-Background.jpg")no-repeat center center;
            background-size: cover;
        }
        .navbar {
            background-color: transparent;
        }
        .top-nav-collapse {
            background-color: #10d3c9 !important;
        }
        .regis{
            padding: 30px !important;
            width: 460px !important;
            background:rgba(13,13,13,0.65);
            height: 550px;
            color: white !important;
            border-radius: 8px;
            margin-left: 340px;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #10d3c9 !important;
            }
        }
        html, body, header,
        .view {
            height: 100%;
        }
        .card-columns{
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 20px;
        }
        .card{
            border-radius: 5px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card:hover {
            box-shadow: 0 0 11px rgba(33,33,33,.2);
        }
        @import "http://nyplintranet-training.appspot.com/css/themes/nypl/main.css";
        /* equal card height */
        .row-equal > div[class*='col-'] {
            display: flex;
            flex: 1 0 auto;
        }

        .row-equal .card {
            width: 100%;
        }

        /* ensure equal card height inside carousel */
        .carousel-inner>.row-equal.active,
        .carousel-inner>.row-equal.next,
        .carousel-inner>.row-equal.prev {
            display: flex;
        }

        /* prevent flicker during transition */
        .carousel-inner>.row-equal.active.left,
        .carousel-inner>.row-equal.active.right {
            opacity: 0.5;
            display: flex;
        }

        /* control image height */
        .card-img-top-250 {
            max-height: 250px;
            overflow:hidden;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
            @yield('content')

        @include('layouts.footer')
    </div>
    <script type="text/javascript">

        (function($) {
            "use strict";

            // manual carousel controls
            $('.next').click(function(){ $('.carousel1').carousel('next');return false; });
            $('.prev').click(function(){ $('.carousel1').carousel('prev');return false; });

        })(jQuery);
    </script>
</body>
</html>
