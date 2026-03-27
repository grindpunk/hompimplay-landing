<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets')}}/home/logo-color.png">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/magnifypopup.min.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/odometer.min.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/lightbox.min.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{url('template')}}/assets/css/vendor/tipped.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{url('template')}}/assets/css/app.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="{{url('assets')}}/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{url('assets')}}/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{url('assets')}}/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="{{url('assets')}}/fontawesome/css/fontawesome.min.css">

    <style type="text/css">
        #buy-ticket {
            position: fixed;
            bottom: 50px;
            right: 0px;
            border: none;
            background: transparent;
            cursor: pointer;
            z-index: 1000;
        }

        #buy-ticket img {
            width: 130px;
            height: 100px;
        }

        #buy-ticket img:hover {
            transform: rotate(-15deg) scale(1.1);
            transition: 0.2s;
        }
    </style>

    @yield('styles')
</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <div id="main-wrapper" class="main-wrapper" style="background-image: url('{{ asset('assets/home/background.png') }}');">
        <!--================Header Menu Area =================-->
        @include('layouts.header')
        <!--================ End Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        @yield('banner')
        <!--================End Home Banner Area =================-->

        <!--================Content Area =================-->
        @yield('content')
        <!--================End Content Area =================-->

        <!--================ start footer Area  =================-->
        @include('layouts.footer')
        <!--================ End footer Area  =================-->

    </div>

    <button id="buy-ticket">
        <img src="{{url('assets')}}/home/float-ticket.png" alt="Buy Ticket">
    </button>

    {{-- <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}

    <!-- JS
	============================================ -->
    <!-- Modernizer JS -->
    <script src="{{url('template')}}/assets/js/vendor/modernizr.min.js"></script>
    <!-- Jquery Js -->
    <script src="{{url('template')}}/assets/js/vendor/jquery.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/sal.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/jquery.waypoints.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/backtotop.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/magnifypopup.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/jQuery.rProgressbar.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/easypie.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/odometer.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/isotop.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/imageloaded.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/lightbox.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/paralax.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/paralax-scroll.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/jquery-ui.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/svg-inject.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/vivus.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/tipped.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/smooth-scroll.min.js"></script>
    <script src="{{url('template')}}/assets/js/vendor/isInViewport.jquery.min.js"></script>

    <!-- Site Scripts -->
    <script src="{{url('template')}}/assets/js/app.js"></script>
</body>

</html>