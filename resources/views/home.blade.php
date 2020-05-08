@extends('layouts.app')
@section('title','Home')
@section('content')
    <div class="view intro-2" >
        <div class="full-bg-img">
            <div class="mask rgba-purple-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                    <h2>Your guide to the world of cinema</h2>
                    <br>
                    <h5>A large database of movies for every taste</h5>
                    <p>Find your own</p>
                    <p>The copyright of each film is protected </p>
                    <br>
                    <b><a href="{{url('/register')}}" class="regisbtn" style="color: white;}">Registration</a></b>
                </div>
            </div>
        </div>
    </div>

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://avatars.mds.yandex.net/get-kinopoisk-blog-post-thumb/34129/ff3863d15806d87711593d41bc6d61d3/orig"
                         alt="First slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">The Gentlemen</h3>
                    <p>Guy Ritchie‎</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://s2.best-wallpaper.net/wallpaper/1920x1080/1908/Aladdin-2019-movie_1920x1080.jpg"
                         alt="Second slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Aladdin</h3>
                    <p>Guy Ritchie‎</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://www.8days.sg/image/11447544/16x9/1920/1080/1a27112b890b1efea861b492d7d0541d/Vb/aeg-mainphoto.jpg
"
                         alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Avengers: Endgame</h3>
                    <p>Anthony Russo, Joe Russo</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <!-------------------------------------------------Carousel Wrapper---------------------------------------------->
    <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
            <li data-target="#video-carousel-example2" data-slide-to="1"></li>
            <li data-target="#video-carousel-example2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="carousel-item active">
                <!--Mask color-->
                <div class="view">
                    <!--Video source-->
                    <video class="video-fluid" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                    </video>
                    <div class="mask rgba-indigo-light"></div>
                </div>

                <!--Caption-->
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h3 class="h3-responsive">Discovery</h3>
                        <p>On the edge of the world</p>
                    </div>
                </div>
                <!--Caption-->
            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <!--Video source-->
                    <video class="video-fluid" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                    </video>
                    <div class="mask rgba-purple-slight"></div>
                </div>

                <!--Caption-->
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h3 class="h3-responsive">Home</h3>
                        <p>Yann Arthus-Bertrand</p>
                    </div>
                </div>
                <!--Caption-->
            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <!--Video source-->
                    <video class="video-fluid" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
                    </video>
                    <div class="mask rgba-black-strong"></div>
                </div>

                <!--Caption-->
                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h3 class="h3-responsive">National Geographic</h3>
                        <p>African animals</p>
                    </div>
                </div>
                <!--Caption-->
            </div>
            <!-- /.Third slide -->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <br>
    <br>
    <!---------------------------------------Carousel Wrapper------------------------------------------------>
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="https://icon.azureedge.net/icon//prod-admin-film/f7ba50b8-a8c0-4588-9092-0c3d18241ba8/8369cf67-6afe-41e4-b14f-a0aacd606d7a/big-bang-theory-the---s12---key-art-(1).jpg?width=1800&height=600&mode=stretch" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">The Big Bang Theory</h5>
                <p class="card-text">The Big Bang Theory had been a hit since it first came onto the airwaves in 2007, earning blockbuster ratings, seven Emmy awards, and its own spin-off, Young Sheldon.</p>
            </div>
        </div>
        <div class="card p-3">
            <blockquote class="blockquote mb-0 card-body">
                <p>The Big Bang Theory promises exciting ends and new beginnings in hour-long two-part series finale</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        <cite title="Source Title">Daily Mail</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://2datyvyhoda.ru/wp-content/uploads/2020/03/The-Good-Doctor-TV-on-ABC.jpg" alt="Card image cap">

            <div class="card-body">
                <h5 class="card-title">Good Doctor</h5>
                <p class="card-text">The Good Doctor is an American medical drama television series based on the 2013 award-winning South Korean series of the same name.</p>
                <p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
            </div>
        </div>
        <div class="card bg-primary text-white text-center p-3" style="background-color: #424242 !important;">
            <blockquote class="blockquote mb-0">
                <p>The new drama, which stars Freddie Highmore as a surgeon with autism and savant syndrome, has engaged millions of viewers but critics remain skeptical.</p>
                <footer class="blockquote-footer text-white">
                    <small>
                        <cite title="Source Title">The Guardian</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Chernobyl</h5>
                <p class="card-text">Ahead of the series finale, a science writer who has toured the site of the 1986 nuclear disaster weighs in.</p>
                <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://static1.iod.media/storage/articles/covers/xl/1559654021_1524_10ee76dbb341b982.jpg" alt="Card image cap">

        </div>
        <div class="card p-3 text-right">
            <blockquote class="blockquote mb-0">
                <p>Plenty of Fantasy in HBO’s ‘Chernobyl,’ but the Truth Is Real</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        <cite title="Source Title">The New York Times</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
    </div>


    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                    class="fas fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>

        </ol>
        <!--/.Indicators-->

        <!------------------------------------------------------Slides------------------------------------------------------->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2" >
                        <div class="view overlay">
                            <img class="card-img-top" src="https://3rd-strike.com/wp-content/uploads/2020/01/Joker.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Joker</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>

                            </ul>
                            <p class="chili-pepper-text mb-0">11,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2" >
                        <div class="view overlay">
                            <img class="card-img-top" src="https://honknews.com/wp-content/uploads/2020/04/Spider-Man-3-delayed.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">
                                Spider-Man: Far From Home</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>

                            </ul>
                            <p class="chili-pepper-text mb-0">10,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://img.cinemablend.com/quill/f/8/0/b/b/2/f80bb276c023e511c5678e70bc806638211872e7.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">The Lord of the Rings</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>

                            </ul>
                            <p class="chili-pepper-text mb-0">8,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://img.over-blog-kiwi.com/4/59/85/51/20200331/ob_d1369d_faoacb8ae4qqapjije33rhpzxk6.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">The Platform</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>


                            </ul>
                            <p class="chili-pepper-text mb-0">15,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>

            </div>
            <!----------------------------------------------------slide------------------------------------------------------>
            <div class="carousel-item" style="">

                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://i.ytimg.com/vi/isOGD_7hNIY/maxresdefault.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Parasite</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>

                            </ul>
                            <p class="chili-pepper-text mb-0">12,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://rafenew.world/wp-content/uploads/2020/03/1917.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">1917</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>


                            </ul>
                            <p class="chili-pepper-text mb-0">16,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://www.slashgear.com/wp-content/uploads/2019/06/avengers-endgame-1280x720.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">The Avengers: Endgame</h5>

                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                            </ul>
                            <p class="chili-pepper-text mb-0">19,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float: left;">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://allmyloveisfortaenggu.files.wordpress.com/2019/05/aquaman-everything-i-need-soundtrack-cover-pic.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Aquaman</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>

                            </ul>
                            <p class="chili-pepper-text mb-0">19,99 $</p>
                            <a class="btn aqua-gradient">Watchlist</a>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->
        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
    <br>
@endsection
