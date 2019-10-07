<!DOCTYPE html>
<html lang="en">
  <head>
    <title>iCamposoko</title>
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
    <script data-ad-client="ca-pub-7173197345625982" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

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

          <!-- <li class="ml-xl-3 login"><a href="login.html"><span class="border-left pl-xl-4"></span>Log In</a></li>
          <li><a href="register.html">Register</a></li> -->

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



    <div class="site-blocks-cover overlay aos-init aos-animate" style="background-image: url(&quot;images/webe.jpg&quot;); background-position: 50% -25px;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">


            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="aos-init aos-animate" data-aos="fade-up">The Largest Market In The Campus World</h1>
                {{-- <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">You can buy, sell anything you want.</p> --}}
              </div>
            </div>

             <div class="col-md-12 d-flex justify-content-center align-content-center">
              <div class="form-search-wrap d-flex justify-content-center col-md-10 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <form action="/search" class="col-md-11 d-flex justify-content-center " method="post">
                    @csrf
                  <div class="col-md-12 d-flex justify-content-center align-content-center">
                    <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4 col-md-9">
                      <input type="text" name ='search' class="form-control rounded" onfocus="this.value=''" value="What are you looking for?">
                    </div>
                     <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                      <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                    </div>

                  </div>
                </form>
               </div>
              </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">

        <div class="overlap-category mb-5">
          <div class="row align-items-stretch no-gutters">
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="/single/phones" class="popular-category h-100" name="pl" value="Phones and Laptops">
                {{-- <span class="icon"><span class="flaticon-car"></span></span> --}}
                <i class="fa fa-phone fa-4x"></i>
                <span class="caption mb-2 d-block">Phones &amp; Laptops</span>
                <span class="number">3,921</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="/single/tvs" class="popular-category h-100">
                    <i class="fa fa-television fa-4x"></i>
                {{-- <span class="icon"><span class="flaticon-house"></span></span> --}}
                <span class="caption mb-2 d-block">Tvs &amp; Woofers</span>
                <span class="number">398</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="/single/elec" class="popular-category h-100">
                <span class="icon"><span class="flaticon-innovation"></span></span>
                <span class="caption mb-2 d-block">Electronics</span>
                <span class="number">1,229</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="/single/house" class="popular-category h-100">
                    <i class="fa fa-home fa-4x"></i>
                {{-- <span class="icon"><span class="flaticon-house"></span></span> --}}
                <span class="caption mb-2 d-block">Household Items</span>
                <span class="number">32,891</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="/single/furn" class="popular-category h-100">
                <span class="icon"><span class="flaticon-bunk-bed"></span></span>
                <span class="caption mb-2 d-block">Furniture</span>
                <span class="number">29,221</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="/single/apart" class="popular-category h-100">
                {{-- <span class="icon"><span class="flaticon-house"></span></span> --}}
                <i class="fa fa-home fa-4x"></i>
                <span class="caption mb-2 d-block">Apartments &amp; Hostels</span>
                <span class="number">219</span>
              </a>
            </div>
          </div>
        </div>
        <div class="site-section bg-light">
          <div class="container">

            <div class="overlap-category mb-5">
              <div class="row align-items-stretch no-gutters">
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="/single/beauty" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-clothes"></span></span>
                    <span class="caption mb-2 d-block">Beauty &amp; Fashion</span>
                    <span class="number">3,921</span>
                  </a>
                </div>
                <!-- Add html links-->
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="/single/events" class="popular-category h-100">
                    {{-- <span class="icon"><span class="flaticon-books"></span></span> --}}
                    <i class="fa fa-camera-retro fa-4x"></i>

                    <span class="caption mb-2 d-block">Events &amp; Posters</span>
                    <span class="number">398</span>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="/single/prof" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-bunk-bed"></span></span>
                    <span class="caption mb-2 d-block">Professional Services</span>
                    <span class="number">1,229</span>
                  </a>
                </div>
                {{-- <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="#" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-innovation"></span></span>
                    <span class="caption mb-2 d-block">Waiting</span>
                    <span class="number">32,891</span>
                  </a>
                </div> --}}
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="/single/food" class="popular-category h-100">
                        <i class="fa fa-cutlery fa-4x"></i>
                    {{-- <span class="icon"><span class="flaticon-pizza"></span></span> --}}
                    <span class="caption mb-2 d-block">Food &asmp; Restaurants</span>
                    <span class="number">29,221</span>
                  </a>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                  <a href="/single/bars" class="popular-category h-100">
                    <span class="icon"><span class="flaticon-pizza"></span></span>
                    <span class="caption mb-2 d-block">Bars &amp; Clubs</span>
                    <span class="number">219</span>
                  </a>
                </div>
              </div>
            </div>
        <div class="row">
          <div class="col-12">
            <h2 class="h5 mb-4 text-black">Featured Ads</h2>
          </div>
        </div>

        <div class="row">
                <div class="col-12  block-13">
                        <div class="owl-carousel nonloop-block-13">

                         @foreach ($posts as $post)
                         @if(@isset($post->imgUrl1))

                         <div class="d-block d-md-flex listing vertical">
                         <a href="/single/{{$post->id}}" method = "post" class="img d-block"><img src="{{ asset('storage/ads/'.$post->imgUrl1) }}" alt="not found"></a>

                                <div class="lh-content">
                                <span class="category">{{$post->category}}</span>
                                <a href="#" class="bookmark">{{$post->condition}}</span></a>
                                  <h3><strong><b>{{$post->pname}}</b></strong></h3>
                                  <h2>Ksh.{{$post->price}}</h2>
                                <address><b>{{$post->location}}</b></address>


                                </div>
                              </div>
                              @endif

                         @endforeach
                        </div>

                    </div>



      </div>
    </div>
</div>
</div>

<div class="container">

    <footer class="card-footer" id="footer">

        <p>
            &copy;<script>document.write(new Date().getFullYear());</script> Product of Mervonn Kenya Limited

        </p>
      </footer>
</div>

  <script src="https://kit.fontawesome.com/01f884af7a.js" crossorigin="anonymous"></script>

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


</div>

  </body>
</html>
