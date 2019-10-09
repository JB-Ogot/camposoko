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
         <!-- <li><a href="listings.html">Ads</a></li> -->
         <li><a href="{{url('/about')}}">About</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>

          <!-- <li class="ml-xl-3 login"><a href="login.html"><span class="border-left pl-xl-4"></span>Log In</a></li>
          <li><a href="register.html">Register</a></li> -->

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



        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8 text-center">
                                <h1>Advertise Product</h1>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5" data-aos="fade">



                        <form action="/posts/store" method="post" class="p-5 bg-white" id="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="category">Category</label>

                                    <div>
                                        <select name="category" id="category" required>
                                            <option value="" disabled selected>Choose Category</option>
                                            <option value="Phones & Laptops">Phones & Laptops</option>
                                            <option value="TVs & Woofers">TVs & Woofers</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Household Items">Household Items</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Apartments & Hostels">Apartments & Hostels</option>
                                            <option value="Beauty & Fashion">Beauty & Fashion</option>
                                            <option value="Events & Posters">Events & Posters</option>
                                            <option value="Professional Services">Professional Services</option>
                                            <option value="Waiting">Waiting</option>
                                            <option value="Food & Restaurants">Food & Restaurants</option>
                                            <option value="Bars & Clubs">Bars & Clubs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="make">Product Name</label>
                                    <input type="text" onfocus="this.value=''" value="e.g Samsung j7,Total gas, 4X6 bed, Spacious Bedsitter, Photographer" name="pname" class="form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="condition" name="condition">Condition</label>

                                    <div class="col-md-12 checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="condition" value="new">
                                        <label class="custom-control-label" for="defaultUnchecked">New</label>
                                    </div>
                                    <div class="col-md-12 checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" name="condition" value="used">
                                        <label class="custom-control-label" for="defaultUnchecked2">Used</label>
                                    </div>


                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="shortDesc">Short Description</label>
                                    <input type="text" name="shortDesc" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="price">Set Price</label>
                                    <input type="number" name="price" onfocus="this.value=''" data-type="currency" class="form-control" placeholder="e.g 5000">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    {{-- <label class="text-black" for="condition" name="condition">Condition</label> --}}
                                    <div class="col-md-12 checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked3" name="negotiable" value="negotiable">
                                        <label class="custom-control-label" for="defaultUnchecked3">Negotiable</label>
                                    </div>

                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="details"><b>Advertiser Name</b></label>
                                    <!--Add name and phone number to advertisers details-->
                                    <input type="text" name="details" onfocus="this.value=''" value="e.g Brayo" class="form-control" style="height: 50px;"
                                        maxlength="60" value="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="details"><b>Phone Number</b></label>
                                    <!--Add name and phone number to advertisers details-->
                                    <input type="text" name="number" onfocus="this.value=''" value = "07XXXXXXXX" class="form-control" style="height: 50px;"
                                        maxlength="60" value="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="location">Confirm Location</label>
                                    <input type="text" name="location" onfocus="this.value=''" class="form-control" value="e.g CBD, Njokerio, Tatton, Gate, Booster, Jacaranda, Right, Njoro,Kings">
                                </div>
                            </div>
                            <!--Image upload section-->
                            <div class="row form-group">
                                <div class="wrapper">
                                    <div class="box">
                                      <div class="js--image-preview"></div>
                                      <div class="upload-options">
                                          <div class="col-md-12">
                                                <label for="">Choose Image</label>

                                                <label>
                                                <input id="file" type="file" name="img[]" class="image-upload" multiple />
                                                </label>
                                          </div>
                                      </div>
                                    </div>


                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input name="sign-in" type="submit" value="Post Ad"
                                        class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>



                        </form>
                    </div>

                </div>
            </div>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <footer class="card-footer" id="footer">

            <p style="text-align:center">
                &copy;<script>document.write(new Date().getFullYear());</script> Product of Mervonn Kenya Limited  | Made with Colorlib

            </p>
              </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
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
