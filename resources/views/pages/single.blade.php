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
            <div class="site-wrap">

                    <div class="site-mobile-menu">
                        <div class="site-mobile-menu-header">
                            <div class="site-mobile-menu-close mt-3">
                                <span class="icon-close2 js-menu-toggle"></span>
                            </div>
                        </div>
                        <div class="site-mobile-menu-body"></div>
                    </div>

                    <header class="site-navbar container py-0 bg-white" role="banner">

                            <!-- <div class="container"> -->
                            <div class="row align-items-center">
                                <!-- Align Egerton University Centre-->
                                <div class="col-6 col-xl-2">
                                    {{-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0"></a><span class="text-primary">Camposoko</span>  </h1> --}}
                                    <h1 class="mb-0 site-logo"><a href="/" class="text-black mb-0"><span class="text-primary"
                                                style="font-size:28pt">Camposoko</span></a></h1>

                                    <p id="university">Egerton University</p>
                                </div>
                                <div class="col-12 col-md-10 d-none d-xl-block">
                                    <nav class="site-navigation position-relative text-right" role="navigation">

                                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                            @if(Auth::guest())
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('/about')}}">About</a></li>
                                            <li><a href="{{url('/contact')}}">Contact</a></li>

                                            <li><a href="{{url('/info')}}" class="cta"><span class="bg-success text-white rounded">+
                                                        Post an Ad</span></a></li>
                                            <li><a href="{{url('/posts/listrem')}}" class="cta"><span id="rmadd"
                                                        class="bg-danger text-white rounded ">+ Remove an Ad</span></a></li>


                                            @else
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('/about')}}">About</a></li>
                                            <li><a href="{{url('/contact')}}">Contact</a></li>

                                            <li><a href="{{url('/info')}}" class="cta"><span class="bg-success text-white rounded">+
                                                        Post an Ad</span></a></li>
                                            <li><a href="{{url('/posts/listrem')}}" class="cta"><span id="rmadd"
                                                        class="bg-danger text-white rounded ">+ Remove an Ad</span></a></li>

                                            <li>
                                                <a href="">
                                                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QDw0TEw4NFRMXDRUQEhAPEA8NDxUPFREWFhUXHxUY
                                                        HiggGCAlGx8VITEhJSktLi4uFx8zODMtNygtLisBCgoKDg0OFRAQFy0lICU4MC0vNS0tKy0tLS0tLS4tLSsrLS0tLi0tOC0tLy0t
                                                        LS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQUGBwQCA//EAEIQAAECBA
                                                        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
                                                        BQUoCAggQAgIKgIMHrFYZFRLf0eXNNKes7NQtenxD8ZC4zRnexLpGre78KmFW1rZVLliAEECAgICAgIKghQVBEH/9k=" width="40"alt="">

                                                </a>
                                            </li>
                                            @endif

                                            </ul>
                                    </nav>
                                </div>


                                <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right"
                                    style="position: relative; top: 3px;">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span
                                            class="icon-menu h3"></span></a>
                                </div>

                            </div>
                            <!-- </div> -->

                        </header>
                            </div>
    </div>
    {{-- @if(@isset($post)) --}}


    @if(@isset($img) && @isset($name))
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{$img}}); "
    data-aos="fade" data-stellar-background-ratio="0.8">

    @endif
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                      <h1>{{$name}}</h1>
                      {{-- <p class="mb-0">Discovering new ideas</p> --}}
                    </div>
                  </div>



            </div>
        </div>
    </div>
</div>
</div>

    </div>

        <div class="site-section">
                <div class="container">






                        <div class="row">
                                @foreach ($post as $post)
                                @if($post)
                            <div class="col-sm-6 col-lg-4 mb-3">
                                <div class="card mb-3 h-100">
                                <a href="/posts/single/{{$post->id}}">
                                        <img class="card-img" src="{{ asset('storage/ads/'.$image = json_decode($post->imgUrl1)[0]) }}"  alt="Not found" style="width:100%; ">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">{{$post->pname}}</h4>
                                        <p class="card-text">{{$post->shortDesc}}</p>
                                    <div class="price text-success"><h5 class="mt-4">Ksh.{{$post->price}}</h5></div>



                                    </div>
                                </div>
                            </div>
                                 @endif
                                @endforeach
                        </div>



                    </div>
        </div>

    <footer class="card-footer" id="footer">
        <p style="text-align:center">
            &copy;<script>document.write(new Date().getFullYear());</script> Product of Mervonn Kenya Limited  | Made with Colorlib

        </p>
          </footer>

    </div>

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
