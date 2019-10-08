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
                                <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0"></a><span
                                        class="text-primary">Camposoko</span> </h1>
                                <p id="university">Egerton University</p>
                            </div>
                            <div class="col-12 col-md-10 d-none d-xl-block">
                                <nav class="site-navigation position-relative text-right" role="navigation">

                                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About</a></li>

                                        <li><a href="{{url('/contact')}}">Contact</a></li>


                                        <li><a href="{{url('/login')}}" class="cta"><span class="bg-success text-white rounded">+
                                                    Post an Ad</span></a></li>
                                        <li><a href="{{url('/login')}}" class="cta"><span id="rmadd"
                                                    class="bg-danger text-white rounded ">+ Remove an Ad</span></a></li>

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


    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg); "
    data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                    <h1></h1>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
        {{-- <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                </div>
                    </div> --}}
    </div>

        <div class="site-section">
                <div class="container">

                    @foreach ($post as $post)
                    @if($post)




                        <div class="row">
                            <div class="col-sm-6 col-lg-4 mb-3">
                                <div class="card mb-3 h-100">
                                    {{-- <img class="card-img-top" src="{{ asset('storage/ads/'.$post->imgUrl1) }}"  alt="Not found" style="width:100%"> --}}
                                    <div class="card-body">
                                        <h5 class="card-title">{{$post->pname}}</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>

                        </div>


                        @endif
                        @endforeach
                    </div>
        </div>
        {{-- <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
              {{-- </div> --}}
{{--
              <div class="container">
                    <div class="card-deck">
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">1 Card title</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">2 Card title</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">3 Card title</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">4 Card title</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                         <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">5 Card title</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x300" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">6 Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x270" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">7 Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x300" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">8 Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                        <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x270" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
                        <div class="card mb-4">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x270" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">10 Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div> --}}



                    {{-- @endif --}}

    <footer class="card-footer fixed-bottom" id="footer">

            <p>
                &copy;<script>document.write(new Date().getFullYear());</script> Product of Mervonn Kenya Limited

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
