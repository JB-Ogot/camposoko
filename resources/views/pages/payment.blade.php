<!DOCTYPE html>

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
        <link rel="stylesheet" href="css/payment.css">

      </head>
<body>
        <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
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
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">


        <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Payment Details
                            </h3>

                        </div>
                        <div class="panel-body">
                            <img src="images/mpesa small.jpg" alt="Not found">


                        </div>
                        <br>
                        <div class="panel-body">
                            <form role="form" id = "mainform" action="/posts/authenticated">
                            <div class="form-group">
                                    <div class="col-md-12">
                                            <h5><b>ADVERTISEMENT PACKAGES</b></h5>
                                    </div>

                                    <div class="col-md-12 radio">
                                            <input type="radio" class="custom-control-input" id="radio" name="package" value="50">
                                            <label class="custom-control-label" for="defaultUnchecked">Package Gold -3months@Kshs50</label>
                                    </div>
                                    <div class="col-md-12 radio">
                                            <input type="radio" class="custom-control-input" id="radio" name="package" value="100">
                                            <label class="custom-control-label" for="defaultUnchecked2">Package Standard -1 year@Kshs150</label>
                                    </div>

                            </div>
                            <div class="form-group">
                                <label for="cardNumber">
                                    Phone Number</label>
                                <div class="input-group">
                                <input type="text" onfocus="this.value=''" class="form-control" id="cardNumber" value="07XX-XXX-XXX"
                                        required autofocus />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="package" id="proceed" type="submit" class="btn btn-primary py-2 px-4 text-white"/>
                            </div>
                            </form>
                        </div>
                    </div>
                    {{-- <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#" class="btn btn-primary rounded" value="{{}}"></a>
                        </li>
                    </ul>
                    <br/> --}}
                    {{-- <a href="" class="btn btn-primary rounded" role="button">Pay</a> --}}
                </div>
            </div>
        </div>
</div>

<footer class="card-footer fixed-bottom" id="footer">

        <p>
            &copy;<script>document.write(new Date().getFullYear());</script> Product of Mervonn Kenya Limited

        </p>
      </footer>

<script type="text/javascript">
    document.mainform.onclick = function() {
    var x = document.querySelector('input[name=package]:checked').value;
    document.getElementById("proceed").innerHTML = x;
    }
</script>
</body>
</html>
