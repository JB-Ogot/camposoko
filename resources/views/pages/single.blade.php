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
              <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0"></a><span class="text-primary">Camposoko</span>  </h1>
              <p id="university">Egerton University</p>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li class="active"><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>

                  <li><a href="{{url('/contact')}}">Contact</a></li>


                  <li><a href="{{url('/login')}}" class="cta"><span class="bg-success text-white rounded">+ Post an Ad</span></a></li>
                  <li><a href="{{url('/login')}}" class="cta" ><span id="rmadd" class="bg-danger text-white rounded ">+ Remove an Ad</span></a></li>

                </ul>
              </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
              <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>

          </div>
        <!-- </div> -->

        </header>



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>{{$post->category}}</h1>
                <p class="mb-0">Choose product you want</p>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">


            <div class="row">

                <div class="col-lg-6">
                        @foreach ($post as $post)
                  <div class="d-block d-md-flex listing vertical">
                  <a href="/single/{{$post->category}}" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
                    <div class="lh-content">
                    <span class="category">{{$post->category}}</span>
                      <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                      <h3><a href="#">Red Luxury Car</a></h3>
                      <address>Don St, Brooklyn, New York</address>
                      <p class="mb-0">
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-secondary"></span>
                        <span class="review">(3 Reviews)</span>
                      </p>
                    </div>
                    @endforeach
                  </div>

                </div>


            </div>



            </div>

        </div>

    </div>

  </div>

  <script  src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script  src="{{ asset('js/jquery-migrate.3.0.1.min.js') }}"></script>
  <script  src="{{ asset('js/jquery-ui.js') }}"></script>
  <script  src="{{ asset('js/popper.min.js') }}"></script>
  <script  src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script  src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script  src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script  src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script  src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script  src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script  src="{{ asset('js/aos.js') }}"></script>
  <script  src="{{ asset('js/rangeslider.min.js') }}"></script>
  <script  src="{{ asset('js/main.js') }}"></script>



  </body>
</html>
