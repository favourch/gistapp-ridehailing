<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ Setting::get('site_title','GistApp') }}</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="{{ Setting::get('site_icon') }}"/>

    
    <link href="{{secure_asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('asset/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('asset/css/style.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <div class="overlay" id="overlayer" data-toggle="offcanvas"></div>

        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                </li>
                <li class="full-white">
                    <a href="{{ url('/register') }}">SIGN UP To RIDE</a>
                </li>
                <li class="white-border">
                    <a href="{{ url('/provider/register') }}">BECOME A DRIVER</a>
                </li>
                <li>
                    <a href="{{ url('/ride') }}">Ride</a>
                </li>
                <li>
                    <a href="{{ url('/drive') }}">Drive</a>
                </li>
                <li>
                    <a href="terms/contact.php">Contact</a>
                </li>
                <li>
                    <a href="terms/index.php">Terms and Conditions</a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/us/app"><img src="{{ secure_asset('/asset/img/appstore-white.png') }}"></a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/"><img src="{{ secure_asset('/asset/img/playstore-white.png') }}"></a>
                </li>
            </ul>
        </nav>

        <div id="page-content-wrapper">
            <header>
                <nav class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button>

                            <a class="navbar-brand" href="{{url('/')}}"><img src="{{ Setting::get('site_logo', secure_asset('logo-black.png')) }}"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li @if(Request::url() == url('/ride')) class="active" @endif>
                                    <a href="{{url('/ride')}}">Ride</a>
                                </li>
                                <li @if(Request::url() == url('/drive')) class="active" @endif>
                                    <a href="{{url('/drive')}}">Drive</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="terms/contact.php">Help</a></li>
                                <li><a href="{{url('/login')}}">Signin</a></li>
                                <li><a class="menu-btn" href="{{url('/drive')}}">Become a Driver</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            @yield('content')
            <div id = "city">
               
            </div>
            <div class="page-content">
                <div class="footer row no-margin">
                    <div class="container">
                        <div class="footer-logo row no-margin">
                            <div class="logo-img">
                                <img src="{{Setting::get('site_logo',secure_asset('asset/img/logo-white.png'))}}">
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="{{ url('/ride') }}">Ride</a></li>
                                    <li><a href="{{ url('/drive') }}">Drive</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="{{ url('/register') }}">SIGN UP To RIDE</a></li>
                                    <li> <a href="{{ url('/provider/register') }}">BECOME A DRIVER</a></li>                          
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <h5>Get App on</h5>
                                <ul class="app">
                                    <li>
                                        <a href="https://itunes.apple.com/us/app">
                                            <img src="{{secure_asset('asset/img/appstore.png')}}">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://play.google.com/store/apps/">
                                            <img src="{{secure_asset('asset/img/playstore.png')}}">
                                        </a>
                                    </li>                                                        
                                </ul>                        
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">                        
                                <h5>Connect us</h5>
                                <ul class="social">
                                    <li><a href="https://facebook.com/Gistapp"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/Gistapp"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row no-margin">
                            <div class="col-md-12 copy">
                                <p>{{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{secure_asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{secure_asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{secure_asset('asset/js/scripts.js')}}"></script>

    @if(Setting::get('demo_mode', 0) == 1)
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 8256261;
            (function() {
                var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
            })();
        </script>
        <!-- End of LiveChat code -->
    @endif

    <script>
        var map;

        function initMap() {
            var uluru = { lat: 40.730610, lng: -73.935242 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: { lat: 40.730610, lng: -73.935242 }
            });
            var contentString = '<div id="content">' +
                '<div id="siteNotice">' +
                '</div>' +
                '<h4 id="firstHeading" class="firstHeading">Contact Us</h4>' +
                '<div id="bodyContent">' +
                '<p>Tamarai Tech Park, 12,16,' +
                'Jawaharlal Nehru Road,' +
                'Guindy,' +
                'Chennai,' +
                'Tamil Nadu 600032</p>' +
                '</div>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: 'YOUR_TITLE'
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
        </script>

        <script type="text/javascript" src="{{ secure_asset('asset/js/map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7ysJAljkupBFv313yr-zktMOTu4KPtGs&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
    var current_latitude = 40.730610;
    var current_longitude = -73.935242;
</script>

<script type="text/javascript">
    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success, fail );
    } else {
        console.log('Sorry, your browser does not support geolocation services');
        initMap();
    }

    function success(position)
    {
        document.getElementById('long').value = position.coords.longitude;
        document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
        }
        initMap();
    }

    function fail()
    {
        // Could not obtain location
        console.log('unable to get your location');
        initMap();
    }
</script> 
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(".hamburger.is-closed").click(function(){
        jQuery("#sidebar-wrapper").toggleClass('active');
    });
</script>

 @yield('scripts')
</body>
</html>
