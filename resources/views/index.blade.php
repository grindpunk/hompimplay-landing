@extends('layouts.default')

@section('title')
    HomPim Play | Edutainment Destination
@endsection

@section('styles')
    <style type="text/css">
        .header-photography .header-mainmenu.edu-sticky .mainmenu-nav .mainmenu > li > a{
            color: white!important;
        }

        .header-photography .header-mainmenu.edu-sticky .mainmenu-nav .mainmenu > li > a:hover 
        {
            color: var(--color-primary) !important;
        }

        .header-photography .header-mainmenu.edu-sticky .mainmenu-nav .mainmenu > li > a.active{
            color: var(--color-primary) !important;
        }

        .thumbnail-img {
            position: relative;
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .bg-image {
            width: 100%;
            display: block;
            border-radius: 10px;
        }

        .overlay {
            position: absolute;
            height: 98.5%;
            inset: 0;
            background: rgba(0,0,0,0.6);
            transition: background 0.4s ease;
            border-radius: 10px;
        }

        /* LOGO */
        .sub-logo {
            position: relative;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            transition: transform 0.4s ease;
        }

        /* MASCOT */
        .mascot {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        /* HOVER EFFECT */
        .thumbnail-img:hover .overlay {
            background: rgba(0,0,0,0);
        }

        .thumbnail-img:hover .sub-logo {
            transform: translate(-50%, -30px) scale(0.6);
        }

        .thumbnail-img:hover .mascot {
            transform: translate(-50%, 120%);
            opacity: 0;
        }

        .ticket:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }

        .button-google:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }

        .button-akun:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }
        
        #home-gokart{
            margin-left: -70px;
        }

        #home-pool{
            margin-left: -70px;
        }

        #home-resto{
            margin-right: -200px;
            z-index: 1;
        }

        #map-hompim:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }

        .open-gmaps{
            color: orange;
        }

        @media only screen and (max-width: 575px) {
            #home-gokart{
                margin-left: -100px;
            }

            #img-gokart{
                width: 80%;
            }

            #home-pool{
                margin-left: -100px;
                margin-top: 20px;
            }

            #img-pool{
                width: 80%;
            }

            #ticket-family{
                width: 70%;
            }

            #ticket-community{
                width: 70%;
            }

            #ticket-school{
                width: 70%;
            }

            .rides{
                max-height: 256px;
                display:flex; 
                flex-direction:column; 
            }

            .text-desc{
                flex: 1;
                overflow-y: auto;
            }
        }

        @media only screen and (max-width: 992px) {
            #home-resto-large{
                display: block!important;
            }

            #home-resto-mini{
                display: none;
            }

            #logo-footer{
                width: 70%;
            }
        }
    </style>
@endsection

@section('content')
    <!--=====================================-->
    <!--=       Banner Area Start      		=-->
    <!--=====================================-->
    <div class="hero-banner hero-style-12 bg-image photography-banner">
        <div class="swiper photography-activator">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img data-transform-origin='center center' data-src="{{url('assets')}}/home/home-banner.png" class="swiper-lazy" alt="image">
                    {{-- <div class="thumbnail-bg-content">
                        <div class="container edublink-animated-shape">
                            <div class="row">
                                <div class="col-7">
                                    <div class="banner-content">
                                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Best Photography <br> Coaching</h1>
                                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Excepteur sint occaecat cupidatat non proident sunt <br> in culpa qui officia deserunt mollit.</p>
                                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                            <a href="#" class="edu-btn">Find courses <i class="icon-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="swiper-slide">
                    <img data-transform-origin='center center' data-src="{{url('assets')}}/home/home-banner.png" class="swiper-lazy" alt="image">
                    {{-- <div class="thumbnail-bg-content">
                        <div class="container edublink-animated-shape">
                            <div class="row">
                                <div class="col-7">
                                    <div class="banner-content">
                                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Develop Your Photography <br> Skills in Online</h1>
                                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Excepteur sint occaecat cupidatat non proident sunt <br> in culpa qui officia deserunt mollit.</p>
                                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                            <a href="#" class="edu-btn">Find courses <i class="icon-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="swiper-slide">
                    <img data-transform-origin='center center' data-src="{{url('assets')}}/home/home-banner.png" class="swiper-lazy" alt="image">
                    {{-- <div class="thumbnail-bg-content">
                        <div class="container edublink-animated-shape">
                            <div class="row">
                                <div class="col-7">
                                    <div class="banner-content">
                                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Online Photography School <br> For Creative People</h1>
                                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Excepteur sint occaecat cupidatat non proident sunt <br> in culpa qui officia deserunt mollit.</p>
                                        <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                            <a href="#" class="edu-btn">Find courses <i class="icon-4"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="swiper-slide-controls slide-prev">
                <i class="icon-west"></i>
            </div>
            <div class="swiper-slide-controls slide-next">
                <i class="icon-east"></i>
            </div>

            <div class="pagination-box-wrapper">
                <div class="pagination-box-wrap">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </div>
    <!--=====================================-->
    <!--=       About Area Start      		=-->
    <!--=====================================-->
    <div class="container edublink-animated-shape" style="padding-top: 100px;">
        <div class="container">
            <div class="about-heading-area">
                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title" style="color: white;"><img srcset="{{url('assets')}}/home/icon-polygon.png" style="margin-top: -5px; margin-right: 10px;"> Jelajahi Petualangan</h2>
                    <span class="pre-title color-secondary" style="color: white;">Uji ketangkasanmu di zona tantangan atau bersantai menikmati wisata edukasi. Satu destinasi, ribuan keseruan</span>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
        </div>
        <div class="row g-5 row--45">
            <!-- Start Blog Grid  -->
            <div class="col-lg-6 col-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1 first-large-blog">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="{{url('/park')}}">
                                <img src="{{url('assets')}}/home/home-flying-fox.png" alt="Flying Fox Images">
                            </a>
                        </div>
                        <div class="content rides" style="background-color: rgba(28, 166, 219, 1);">
                            <h2 style="color: white;">Flying Fox</h2>
                            <p class="text-desc" style="color: white;">Rasakan sensasi meluncur dari ketinggian dengan kecepatan penuh di Flying Fox Dewasa! 
                                Wahana ini dirancang khusus untuk remaja hingga orang dewasa yang menyukai tantangan dan adrenalin. 
                                Dengan lintasan panjang dan panorama indah, pengalaman ini akan memberi Anda keberanian sekaligus keseruan tak terlupakan.
                            </p>
                            <div class="read-more-btn" style="margin-top: 20px;">
                                <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/park')}}
                                ">Lihat lebih detail <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Grid  -->
            <div class="col-lg-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1" style="margin-bottom: 20px;">
                    <div class="inner" style="display: flex; align-items: stretch;">
                        <div class="thumbnail">
                            <a href="{{url('/park/hompim-dash')}}">
                                <img src="{{url('assets')}}/home/home-gokart.png" alt="GoKart Images" id="img-gokart">
                            </a>
                        </div>
                        <div class="content rides" id="home-gokart" style="background-color: rgba(228, 62, 137, 1); display:flex; flex-direction:column; overflow-y: auto;">
                            <h3 style="color: white;">Gokart Anak</h3>
                            <small class="text-desc" style="color: white;">
                                Biarkan si kecil merasakan sensasi balapan seru di Gokart Anak! Dengan kendaraan berukuran mini yang aman dan ramah anak, 
                                wahana ini memberikan pengalaman menyenangkan sekaligus melatih koordinasi, konsentrasi, dan sportivitas sejak dini.
                            </small>
                            <div class="read-more-btn" style="margin-top: 20px;">
                                <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/park/hompim-dash')}}">Lihat lebih detail <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="edu-blog blog-style-1" style="margin-bottom: 20px;">
                    <div class="inner" style="display: flex; align-items: stretch;">
                        <div class="thumbnail">
                            <a href="{{url('/island')}}">
                                <img src="{{url('assets')}}/home/home-pool.png" alt="Pool Images" id="img-pool">
                            </a>
                        </div>
                        <div class="content rides" id="home-pool" style="background-color: rgba(136, 188, 18, 1); display:flex; flex-direction:column; overflow-y: auto;">
                            <h3 style="color: white;">Taman Bermain Air</h3>
                            <small class="text-desc" style="color: white;">
                                Nikmati keseruan bermain air bersama keluarga di Taman Bermain Air! 
                                Dilengkapi dengan kolam, seluncuran, dan permainan seru lainnya, 
                                wahana ini cocok untuk anak-anak maupun orang dewasa yang ingin melepas penat dengan cara yang menyegarkan.
                            </small>
                            <div class="read-more-btn" style="margin-top: 20px;">
                                <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/island')}}">Lihat lebih detail <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" id="home-resto-mini" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1" style="margin-bottom: 20px;">
                    <div class="inner">
                        <div class="content-rtl rides" id="home-resto" style="background-color: rgba(226, 142, 8, 1);">
                            <h3 style="color: white;">Area Restaurant</h3>
                            <p class="text-desc" style="color: white;">
                                Lengkapi petualanganmu dengan pengalaman kuliner tak terlupakan di Area Restaurant! 
                                Kami menghadirkan 4 pilihan restoran dengan tema unik yang siap memanjakan lidah Anda dan keluarga. 
                                Ini adalah pilihan tepat untuk bersantai sejenak dan mengisi kembali energi sebelum Anda kembali melanjutkan penjelajahan di berbagai wahana seru lainnya.
                            </p>
                            <div class="read-more-btn" style="margin-top: 20px;">
                                <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/restaurant')}}">Lihat lebih detail <i class="icon-4"></i></a>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <a href="{{url('/restaurant')}}">
                                <img src="{{url('assets')}}/home/home-resto.png" alt="Resto Images" id="img-resto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" id="home-resto-large" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800" style="display: none;">
                <div class="edu-blog blog-style-1 first-large-blog">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="{{url('/restaurant')}}">
                                <img src="{{url('assets')}}/home/home-resto.png" alt="Flying Fox Images">
                            </a>
                        </div>
                        <div class="content rides" style="background-color: rgba(226, 142, 8, 1);">
                            <h2 style="color: white;">Area Restaurant</h2>
                            <p class="text-desc" style="color: white;">
                                Lengkapi petualanganmu dengan pengalaman kuliner tak terlupakan di Area Restaurant! 
                                Kami menghadirkan 4 pilihan restoran dengan tema unik yang siap memanjakan lidah Anda dan keluarga. 
                                Ini adalah pilihan tepat untuk bersantai sejenak dan mengisi kembali energi sebelum Anda kembali melanjutkan penjelajahan di berbagai wahana seru lainnya.
                            </p>
                            <div class="read-more-btn" style="margin-top: 20px;">
                                <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/restaurant')}}">Lihat lebih detail <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Course Area Start      	=-->
    <!--=====================================-->
    <div class="home-photography-course edu-course-area" style="padding-top: 100px;">
        <div class="container">
            <div class="about-heading-area">
                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title" style="color: white;"><img srcset="{{url('assets')}}/home/icon-polygon.png" style="margin-top: -5px; margin-right: 10px;"> Ragam Aktivitas</h2>
                    <span class="pre-title color-secondary" style="color: white;">Temukan beragam aktivitas seru di luar lintasan, mulai dari tantangan ketinggian, taman bermain air, hingga edukasi satwa</span>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
        </div>
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <!-- Start Farm Grid  -->
                <div class="col-lg-4 col-sm-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail-img">
                                    <a href="{{url('/farm')}}">
                                        <img src="{{url('assets')}}/home/home-hompimfarm.png" alt="team images" class="bg-image">

                                        <div class="overlay">
                                            <img src="{{url('assets')}}/home/hompimfarm-logo.png" alt="Logo" class="sub-logo" style="width: 50%;">
                                            <img src="{{url('assets')}}/home/hompimfarm-mascot.png" alt="Mascot" class="mascot" style="width: 40%;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Farm Grid  -->
                <!-- Start Kart Grid  -->
                <div class="col-lg-4 col-sm-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail-img">
                                    <a href="{{url('/park/hompim-dash')}}">
                                        <img src="{{url('assets')}}/home/home-hompimkart.png" alt="team images" class="bg-image">

                                        <div class="overlay">
                                            <img src="{{url('assets')}}/home/hompimkart-logo.png" alt="Logo" class="sub-logo" style="width: 50%;">
                                            <img src="{{url('assets')}}/home/hompimkart-mascot.png" alt="Mascot" class="mascot" style="width: 45%;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Kart Grid  -->
                <!-- Start Jungle Grid  -->
                <div class="col-lg-4 col-sm-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail-img">
                                    <a href="{{url('/jungle')}}">
                                        <img src="{{url('assets')}}/home/home-hompimjungle.png" alt="team images" class="bg-image">

                                        <div class="overlay">
                                            <img src="{{url('assets')}}/home/hompimjungle-logo.png" alt="Logo" class="sub-logo" style="width: 50%;">
                                            <img src="{{url('assets')}}/home/hompimjungle-mascot.png" alt="Mascot" class="mascot" style="width: 40%;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Jungle Grid  -->
                <!-- Start Planet Grid  -->
                <div class="col-lg-4 col-sm-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail-img">
                                    <a href="{{url('/planet')}}">
                                        <img src="{{url('assets')}}/home/home-hompimplanet.png" alt="team images" class="bg-image">

                                        <div class="overlay">
                                            <img src="{{url('assets')}}/home/hompimplanet-logo.png" alt="Logo" class="sub-logo" style="width: 50%;">
                                            <img src="{{url('assets')}}/home/hompimplanet-mascot.png" alt="Mascot" class="mascot" style="width: 60%;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Planet Grid  -->
                <!-- Start Island Grid  -->
                <div class="col-lg-4 col-sm-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail-img">
                                    <a href="{{url('/island')}}">
                                        <img src="{{url('assets')}}/home/home-hompimisland.png" alt="team images" class="bg-image">

                                        <div class="overlay">
                                            <img src="{{url('assets')}}/home/hompimisland-logo.png" alt="Logo" class="sub-logo" style="width: 50%;">
                                            <img src="{{url('assets')}}/home/hompimisland-mascot.png" alt="Mascot" class="mascot" style="width: 40%;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Island Grid  -->
                <!-- Start City Grid  -->
                <div class="col-lg-4 col-sm-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-1">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail-img">
                                    <a href="{{url('/city')}}">
                                        <img src="{{url('assets')}}/home/home-hompimcity.png" alt="team images" class="bg-image">

                                        <div class="overlay">
                                            <img src="{{url('assets')}}/home/hompimcity-logo.png" alt="Logo" class="sub-logo" style="width: 50%;">
                                            <img src="{{url('assets')}}/home/hompimcity-mascot.png" alt="Mascot" class="mascot" style="width: 70%;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End City Grid  -->
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=          Brand Area Start         =-->
    <!--=====================================-->
    <!-- Start Brand Area  -->
    <div class="edu-brand-area brand-area-1 gap-top-equal" style="padding-top: 0px;">
        <div class="container">
            <div class="about-heading-area">
                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title" style="color: white;"><img srcset="{{url('assets')}}/home/icon-polygon.png" style="margin-top: -5px; margin-right: 10px;"> Area, lokasi dan Jam Operasional Kami</h2>
                    <span class="pre-title color-secondary" style="color: white;">Kami tidak hanya punya satu dunia, tapi kami punya banyak!</span>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="thumbnail">
                            <img src="{{url('assets')}}/home/hompim-map.png" alt="Thumb" id="map-hompim">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                    <div class="categorie-grid categorie-style-2 color-extra06-style">
                        <div class="content">
                            <h2 class="title" style="color: white;">Lokasi</h2>
                            <br>
                            <span style="color: white;">Jl. Rancakendal Luhur No.9, Ciburial, Kecamatan Cimenyan, Kabupaten Bandung, Jawa Barat 40191</span>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=HomPim+Play" target="_blank" class="open-gmaps">Buka Google Maps</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                    <div class="categorie-grid categorie-style-2 color-extra06-style">
                        <div class="content">
                            <h2 class="title" style="color: white;">Jam Operasional Weekdays</h2>
                            <br>
                            <span style="color: white;">Senin-Jumat</span>
                            <p style="color: white;">Pukul 09:00 hingga 17:00</p>
                            <span style="color: transparent;">-</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 color-extra06-style">
                        <div class="content">
                            <h2 class="title" style="color: white;">Jam Operasional Weekend</h2>
                            <br>
                            <span style="color: white;">Sabtu & Minggu</span>
                            <p style="color: white;">Pukul 09:00 hingga 21:00</p>
                            <span style="color: transparent;">-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area  -->
    <!--=====================================-->
    <!--=          Ticket Area Start         =-->
    <!--=====================================-->
    <!-- Start Ticket Area  -->
    <div class="edu-team-area team-area-7 section-gap-equal" style="padding-top: 100px;">
        <div class="container">
            <div class="about-heading-area">
                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title" style="color: white;"><img srcset="{{url('assets')}}/home/icon-polygon.png" style="margin-top: -5px; margin-right: 10px;"> Harga Tiket</h2>
                    <span class="pre-title color-secondary" style="color: white;">Beli tiketnya sekarang dan mainkan Wahananya</span>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
            <div class="row g-custom-5">
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-7">
                        <div class="inner" style="text-align: center;">
                            <a href="#">
                                <img class="ticket" srcset="{{url('assets')}}/home/tiket-family.png" alt="tiket family" id="ticket-family">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-7">
                        <div class="inner" style="text-align: center;">
                            <a href="#">
                                <img class="ticket" src="{{url('assets')}}/home/tiket-community.png" alt="tiket komunitas" id="ticket-community">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-7">
                        <div class="inner" style="text-align: center;">
                            <a href="#">
                                <img class="ticket" src="{{url('assets')}}/home/tiket-school.png" alt="tiket sekolah" id="ticket-school">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
            </div>
        </div>
    </div>
    <!-- End Ticket Area  -->
    <!--=====================================-->
    <!--=      Call TO Action Area Start    =-->
    <!--=====================================-->
    <!-- Start CTA Area  -->
    <div class="edu-about-area gap-bottom-equal about-style-4 online-art-about" style="padding-top: 0px;">
        <div class="container">
            <div class="about-heading-area">
                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title" style="color: white;"><img srcset="{{url('assets')}}/home/icon-polygon.png" style="margin-top: -5px; margin-right: 10px;"> Sudah Siap Berpetualang?</h2>
                    <span class="pre-title color-secondary" style="color: white;">Buat akun dan jelajahi berbagai macam wahana dengan keunikannya masing-masing</span>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-gallery-1 edublink-animated-shape">
                        <div class="main-img-3" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <img srcset="{{url('assets')}}/home/home-cta.png" alt="CTA Image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{url('template')}}/assets/images/about/shape-13.png" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{url('template')}}/assets/images/counterup/shape-02.png" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-image-gallery-2 edublink-animated-shape">
                        <div class="about-content">
                            <p style="color: white">Tidak hanya bermain, namun juga mengedukasi. Scan QR-Code di setiap wahana dan temukan keajaibannya!</p>
                            <a href="{{url('/login')}}" style="margin-top: 10px;"><img srcset="{{url('assets')}}/home/login-google.png" class="button-google" style="width: 50%;"></a>
                            <a href="{{url('/login')}}" style="margin-top: 10px;"><img srcset="{{url('assets')}}/home/login-akun.png" class="button-akun" style="width: 50%;"></a>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{url('template')}}/assets/images/about/shape-25.png" alt="Shape">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span data-depth="-2"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-group">
            <li class="shape-5 shape-light" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                <img src="{{url('template')}}/assets/images/about/shape-47.png" alt="Shape">
            </li>
            <li class="shape-5 shape-dark" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                <img src="{{url('template')}}/assets/images/about/dark-shape-47.png" alt="Shape">
            </li>
            <li class="shape-6 shape-light" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                <img src="{{url('template')}}/assets/images/about/shape-48.png" alt="Shape">
            </li>
            <li class="shape-6 shape-dark" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
                <img src="{{url('template')}}/assets/images/about/dark-shape-48.png" alt="Shape">
            </li>
        </div>
    </div>
    <!-- End CTA Area  -->
@endsection

@section('scripts')
    <script type="text/javascript"></script>
@endsection