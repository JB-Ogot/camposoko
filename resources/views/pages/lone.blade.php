<!DOCTYPE html>
<html lang="en">

<head>
    <title>Camposoko</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar container py-0 bg-white" role="banner">
            <div class="row align-items-center">
                <!-- Align Egerton University Centre-->
                <div class="col-6 col-xl-2">
                    {{-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0"></a><span
                            class="text-primary">Camposoko</span> </h1> --}}
                            <h1 class="mb-0 site-logo"><a href="/" class="text-black mb-0"><span class="text-primary" style="font-size:28pt">Camposoko</span></a></h1>

                            <p id="university">Egerton University</p>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>

                            <li><a href="{{url('/contact')}}">Contact</a></li>


                            <li><a href="{{url('/login')}}" class="cta"><span class="bg-success text-white rounded">+
                                        Post an Ad</span></a></li>
                            <li><a href="{{url('/posts/listrem')}}" class="cta"><span id="rmadd"
                                        class="bg-danger text-white rounded ">+ Remove an Ad</span></a></li>

                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right"
                    style="position: relative; top: 3px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>

        </header>

    </div>

    </div>

    {{-- <div class="d-block d-md-flex listing vertical">
                <a  method = "post" class="img d-block" onclick="openLone({{$post->id}})">
    <img src="{{ asset('storage/ads/'.$post->imgUrl1) }}" alt="not found" class="responsive">
    </a>

    <div class="lh-content">
        <span class="category">{{$post->category}}</span>
        <a href="#" class="bookmark">{{$post->condition}}</span></a>
        <h3><strong><b>{{$post->pname}}</b></strong></h3>
        <h2>Ksh.{{$post->price}}</h2>
        <address><b>{{$post->location}}</b></address>


    </div>
    </div> --}}

    </div>

    <div class="site-section">
        <div class="container">
            <div class="row-sm">
                @if(@isset($post->imgUrl1))

{{--
                <div class="card" style="max-width: 540px;"> --}}

                    <div class="card">
                        <div class="row no-gutters">
                          <div class="col-md-6">
                            <img src="{{ asset('storage/ads/'.$post->imgUrl1) }}" alt="not found" class="responsive" --}}
                            width="100%">
                          </div>
                          <div class="col-md-6">
                            <div class="card-body">
                            <span class="category">{{$post->category}}</span>
                            <h5 class="card-title"><b>{{$post->pname}}</b></h5>
                            <p class="card-text">{{$post->shortDesc}}</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>



            </div>
            @endif
        </div>

    </div>
    {{-- <div class="container"> --}}

            <footer class="card-footer" id="footer">
                <p style="text-align:center">
                    &copy;<script>document.write(new Date().getFullYear());</script> Product of Mervonn Kenya Limited  | Made with Colorlib

                </p>
              </footer>
        {{-- </div> --}}







    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
