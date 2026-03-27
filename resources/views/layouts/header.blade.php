<style type="text/css">
    @media only screen and (max-width: 1200px) {
        #logo-wide{
            padding-top: 10px;
        }
    }

    .icon-54{
        color: white;
    }
</style>

<header class="edu-header header-style-2 header-photography">
    <div id="edu-sticky-placeholder"></div>
    <div class="header-mainmenu">
        <div class="container-fluid">
            <div class="header-navbar">
                <div class="header-brand">
                    <div class="logo" style="width: 50%;" id="logo-wide">
                        <a href="{{ url('/') }}">
                            <img class="logo-light" src="{{url('assets')}}/home/logo-color.png" alt="Hompimplay Logo">
                            <img class="logo-dark" src="{{url('assets')}}/home/logo-color.png" alt="Hompimplay Logo">
                        </a>
                    </div>
                </div>
                <div class="header-mainnav">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li><a class="@if(Request::is('/')) active @endif" href="{{url('/')}}">Beranda</a></li>
                            <li><a class="@if(Request::is('ticket')) active @endif" href="{{url('/ticket')}}">Tiket</a></li>
                            <li class="has-droupdown">
                                <a class="@if(
                                        Request::is('farm') || Request::is('farm/*') || 
                                        Request::is('park') || Request::is('park/*') || 
                                        Request::is('island') || Request::is('island/*') || 
                                        Request::is('bukit-strawberry') || Request::is('bukit-strawberry/*')
                                    ) active @endif" href="#">Wahana
                                </a>
                                <ul class="mega-menu" style="padding: 30px 0px; border-radius: 20px;">
                                    <li>
                                        <h6 class="menu-title">Outdoor Area</h6>
                                        <ul class="submenu mega-sub-menu-01">
                                            <li><a class="@if(Request::is('farm') || Request::is('farm/*')) active @endif" href="{{url('/farm')}}">Hompim Farm</a></li>
                                            <li><a class="@if(Request::is('park') || Request::is('park/*')) active @endif" href="{{url('/park')}}">Hompim Park</a></li>
                                            <li><a class="@if(Request::is('island') || Request::is('island/*')) active @endif" href="{{url('/island')}}">Hompim Island</a></li>
                                            <li><a class="@if(Request::is('bukit-strawberry') || Request::is('bukit-strawberry/*')) active @endif" href="{{url('/bukit-strawberry')}}">Kisah Bukit Strawberry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h6 class="menu-title">Indoor Area</h6>
                                        <ul class="submenu mega-sub-menu-01">
                                            <li><a class="@if(Request::is('jungle') || Request::is('jungle/*')) active @endif" href="{{url('/jungle')}}">Hompim Jungle</a></li>
                                            <li><a class="@if(Request::is('city') || Request::is('city/*')) active @endif" href="{{url('/city')}}">Hompim City</a></li>
                                            <li><a class="@if(Request::is('planet') || Request::is('planet/*')) active @endif" href="{{url('/planet')}}">Hompim Planet</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h6 class="menu-title">Merchandise</h6>
                                        <ul class="submenu mega-sub-menu-01">
                                            <li><a class="@if(Request::is('store') || Request::is('store/*')) active @endif" href="{{url('/store')}}">Hompim Store</a></li>
                                            <li><a class="@if(Request::is('mart') || Request::is('mart/*')) active @endif" href="{{url('/mart')}}">Hompim Mart</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="@if(Request::is('contact')) active @endif" href="{{url('/contact')}}">Kontak</a></li>
                            <li><a class="@if(Request::is('blog')) active @endif" href="{{url('/blog')}}">Blog</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="header-action">
                        <li class="header-btn">
                            <a href="{{url('/login')}}" target="_blank" class="edu-btn btn-medium">Login</a>
                        </li>
                        <li class="mobile-menu-bar d-block d-xl-none">
                            <button class="hamberger-button">
                                <i class="icon-54"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img class="logo-light" src="{{url('assets')}}/home/logo-color.png" alt="Hompimplay Logo">
                        <img class="logo-dark" src="{{url('assets')}}/home/logo-color.png" alt="Hompimplay Logo">
                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="icon-73"></i>
                    </button>
                </div>
            </div>
            <ul class="mainmenu">
                <li><a class="@if(Request::is('/')) active @endif" href="{{url('/')}}">Beranda</a></li>
                <li><a class="@if(Request::is('ticket')) active @endif" href="{{url('/ticket')}}">Tiket</a></li>
                <li class="has-droupdown"><a class="@if(
                                        Request::is('farm') || Request::is('farm/*') || 
                                        Request::is('park') || Request::is('park/*') || 
                                        Request::is('island') || Request::is('island/*') || 
                                        Request::is('bukit-strawberry') || Request::is('bukit-strawberry/*')
                                    ) active @endif" href="#">Wahana</a>
                    <ul class="submenu">
                        <li><a class="@if(Request::is('farm') || Request::is('farm/*')) active @endif" href="{{url('/farm')}}">Hompim Farm</a></li>
                        <li><a class="@if(Request::is('park') || Request::is('park/*')) active @endif" href="{{url('/park')}}">Hompim Park</a></li>
                        <li><a class="@if(Request::is('island') || Request::is('island/*')) active @endif" href="{{url('/island')}}">Hompim Island</a></li>
                        <li><a class="@if(Request::is('bukit-strawberry') || Request::is('bukit-strawberry/*')) active @endif" href="{{url('/bukit-strawberry')}}">Kisah Bukit Strawberry</a></li>
                        <li><a class="@if(Request::is('jungle') || Request::is('jungle/*')) active @endif" href="{{url('/jungle')}}">Hompim Jungle</a></li>
                        <li><a class="@if(Request::is('city') || Request::is('city/*')) active @endif" href="{{url('/city')}}">Hompim City</a></li>
                        <li><a class="@if(Request::is('planet') || Request::is('planet/*')) active @endif" href="{{url('/planet')}}">Hompim Planet</a></li>
                        <li><a class="@if(Request::is('store') || Request::is('store/*')) active @endif" href="{{url('/store')}}">Hompim Store</a></li>
                        <li><a class="@if(Request::is('mart') || Request::is('mart/*')) active @endif" href="{{url('/mart')}}">Hompim Mart</a></li>
                    </ul>
                </li>
                <li><a class="@if(Request::is('contact')) active @endif" href="{{url('/contact')}}">Kontak</a></li>
                <li><a class="@if(Request::is('blog')) active @endif" href="{{url('/blog')}}">Blog</a></li>
                <li class="header-btn">
                    <a href="{{url('/login')}}" target="_blank" class="edu-btn btn-medium">Login</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Start Search Popup  -->
    <div class="edu-search-popup">
        <div class="content-wrap">
            <div class="site-logo">
                <img class="logo-light" src="{{url('assets')}}/home/logo-color.png" alt="Hompimplay Logo">
                <img class="logo-dark" src="{{url('assets')}}/home/logo-color.png" alt="Hompimplay Logo">
            </div>
            <div class="close-button">
                <button class="close-trigger"><i class="icon-73"></i></button>
            </div>
        </div>
    </div>
    <!-- End Search Popup  -->
</header>