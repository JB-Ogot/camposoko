<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Camposoko</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">

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
              {{-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0"></a><span class="text-primary">Camposoko</span>  </h1> --}}
              <h1 class="mb-0 site-logo"><a href="/" class="text-black mb-0"><span class="text-primary" style="font-size:28pt">Camposoko</span></a></h1>

              <p id="university">Egerton University</p>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>

                  <li><a href="{{url('/contact')}}">Contact</a></li>


                  <li><a href="{{url('/login')}}" class="cta"><span class="bg-success text-white rounded">+ Post an Ad</span></a></li>
                  <li><a href="{{url('/posts/listrem')}}" class="cta" ><span id="rmadd" class="bg-danger text-white rounded ">+ Remove an Ad</span></a></li>

                </ul>
              </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
              <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>

          </div>
        <!-- </div> -->

        </header>




    <div class="site-section">
            @if(count($posts) > 0))
            @foreach ($posts as $post)

      <div class="container">

        <div class="row">

          <div class="col-lg-8">


            <div class="row">
                <div class="col-lg-6">

                  <div class="d-block d-md-flex listing vertical">
                    <a href="#" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
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
                  </div>

                </div>


            </div>



            </div>

        </div>
        @endforeach
        @endif
    </div>

    <footer class="card-footer" id="footer">
        <p style="text-align:center">
            &copy;<script>document.write(new Date().getFullYear());</script> Product of Mervonn Kenya Limited  | Made with Colorlib

        </p>
          </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
