<script>
    import 'bootstrap/dist/css/bootstrap.min.css';
    import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/dropdown';
</script>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand" href="{{url('/')}}"><strong>NKA</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/film')}}">Category</a>
            </li>


            <ul class="navbar-nav ml-auto" style="margin-left: 800px !important;">
                <li class="nav-item">

                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: dodgerblue">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-light">{{ count((array) session('cart')) }}</span>
                        </button>
                        <div class="dropdown-menu">

                            @if(session('cart'))
                                @foreach(session('cart') as $id => $movie)
                                    <div style="margin-left:30px">

                                    <div class="row cart-detail">
                                        <div class="" style="margin-left: 30px ">
                                            <img src="{{ $movie['image'] }}" width="70" height="100" />
                                        </div>
                                        <div class="">
                                            <a href="#" class="text-navy" style="color: #1ab394; size: 5px">{{ $movie['name'] }}</a>
                                        </div>
                                    </div>
                                    </div>
                                    <hr>
                                @endforeach
                            @endif
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    @yield('scripts')
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item" >
                        <a class="nav-link" href="{{ route('login') }}" style="margin-left: 50px">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.create') }}">Create Post</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div style="margin-top: 7px; color: white; margin-left: 25px">
                        <a style="margin-right: 23px;" >{{ Auth::user()->name }} <span class="caret" ></span></a>
                            <a  style="color:white;" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </ul>
    </div>
</nav>
