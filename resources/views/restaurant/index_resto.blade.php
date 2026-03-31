@extends('layouts.default')

@section('title')
    HomPim Restaurant | Edutainment Destination
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

        .bg-image--19{
            position: relative;
            background-image: url('/assets/resto/bg-resto.png');
            background-size: cover;
            background-position: center;
        }

        .bg-image--19::before{
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.5); /* darkness level */
            backdrop-filter: blur(3px);   /* blur level */
        }

        .edu-course.course-style-15 .inner .thumbnail a::after{
            background-color: transparent;
        }

        .edu-team-grid .thumbnail a:after{
            background: none;
        }

        .edu-team-grid .thumbnail a:hover{
            transition: transform 0.3s ease;
            transform: scale(1.1);
        }

        .button-google:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }

        .button-akun:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }

        #buy-ticket{
            display: none;
        }

        .planet-name{
            color: white;
        }

        .title{
            color: white;
        }

        .pre-textsecondary{
            color: #E9DCC9;
        }
    </style>
@endsection

@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->
    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--19" style="margin-top: -90px;">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Area Restaurant</h1>
                    <h6 style="color: white;">Satu area, empat tema, dan ribuan kelezatan yang siap mengisi kembali energi petualangmu</h6>
                </div>
            </div>
        </div>
    </div>

    <!--=====================================-->
    <!--=        Gallery Area Start        	=-->
    <!--=====================================-->
    <div class="home-photography-course edu-course-area">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-xl-6 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" style="margin-bottom: 50px;">
                    <div class="edu-course course-style-15" style="background: none;">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{url('/restaurant')}}/hola-aloha">
                                    <img src="{{url('assets')}}/resto/hola-aloha.png" alt="Resto Image">
                                </a>
                            </div>
                            <div class="content" style="padding-top: 30px;">
                                <h2 class="title">
                                    <a href="{{url('/restaurant')}}/hola-aloha">Hola Aloha</a>
                                </h2>
                                <p class="text pre-textsecondary">Hola Aloha adalah perpaduan ceria antara kemeriahan Meksiko dan kehangatan Hawaii —tempat di mana ritme tropis bertemu dengan jiwa penuh warna dari semangat Aztec. 
                                    Ini adalah dunia kecil di mana keluarga tertawa lebih keras, warna-warna bersinar lebih terang, dan setiap gigitan terasa seperti sinar matahari.
                                </p>
                                <div class="read-more-btn" style="margin-top: 20px;">
                                    <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/restaurant')}}/hola-aloha">Lihat lebih detail <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-xl-6 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" style="margin-bottom: 50px;">
                    <div class="edu-course course-style-15" style="background: none;">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{url('/restaurant')}}/papos-chicken">
                                    <img src="{{url('assets')}}/resto/papos-chicken.png" alt="Resto Image">
                                </a>
                            </div>
                            <div class="content" style="padding-top: 30px;">
                                <h2 class="title">
                                    <a href="{{url('/restaurant')}}/papos-chicken">Papo`s Chicken</a>
                                </h2>
                                <p class="text pre-textsecondary">Papo, sang penjaga hutan, meramu rempah unik dari petualangannya menjadi Papo’s Chicken. 
                                    Ayam goreng renyah ini lahir dari kehangatan untuk berbagi cerita dan kebahagiaan bersama keluarga. Nikmati kelezatan hadiah perjalanan Papo yang membawa kebersamaan di setiap gigitan renyahnya!
                                </p>
                                <div class="read-more-btn" style="margin-top: 20px;">
                                    <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/restaurant')}}/papos-chicken">Lihat lebih detail <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-xl-6 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800" style="margin-bottom: 50px;">
                    <div class="edu-course course-style-15" style="background: none;">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="https://www.instagram.com/sanguhaneutsunda/">
                                    <img src="{{url('assets')}}/resto/sangu-haneut.png" alt="Resto Image">
                                </a>
                            </div>
                            <div class="content" style="padding-top: 30px;">
                                <h2 class="title">
                                    <a href="https://www.instagram.com/sanguhaneutsunda/">Sangu Haneut</a>
                                </h2>
                                <p class="text pre-textsecondary">Lebih dari sekadar menyajikan cita rasa sunda yang otentik, Sangu haneut menawarkan perjalanan sensorik yang menghormati proses di balik beras—dari ladang hingga meja. 
                                    Mengundang para tamu untuk menikmati tidak hanya rasa, tetapi juga warisan, cerita, dan tradisi abadi yang memberikan makna pada setiap butir beras dan alam yang menyertainya.
                                </p>
                                <div class="read-more-btn" style="margin-top: 20px;">
                                    <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/restaurant')}}/sangu-haneut">Lihat lebih detail <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-xl-6 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800" style="margin-bottom: 50px;">
                    <div class="edu-course course-style-15" style="background: none;">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="https://www.instagram.com/merambah.rasa/">
                                    <img src="{{url('assets')}}/resto/merambah-rasa.png" alt="Resto Image">
                                </a>
                            </div>
                            <div class="content" style="padding-top: 30px;">
                                <h2 class="title">
                                    <a href="https://www.instagram.com/merambah.rasa/">Merambah Rasa</a>
                                </h2>
                                <p class="text pre-textsecondary">Jelajahi kekayaan rempah nusantara di Merambah Rasa! Layaknya petualang menyusuri pulau, kami meramu resep autentik dari Sabang hingga Merauke menjadi hidangan yang menghangatkan jiwa. 
                                    Nikmati harmoni tradisi dan kebersamaan keluarga dalam setiap sajian khas Indonesia yang kaya akan cerita dan rasa
                                </p>
                                <div class="read-more-btn" style="margin-top: 20px;">
                                    <a class="edu-btn btn-small btn-secondary" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.2);" href="{{url('/restaurant')}}/merambah-rasa">Lihat lebih detail <i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            </div>
        </div>
    </div>
    <!-- End Gallery Area  -->
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