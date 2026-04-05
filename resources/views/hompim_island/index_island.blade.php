@extends('layouts.default')

@section('title')
    HomPim Island | Edutainment Destination
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
            background-image: url('/assets/island/bg-island.png');
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
    </style>
@endsection

@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->
    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--19" style="margin-top: -90px;">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{url('assets')}}/home/hompimplanet-logo.png" alt="planet images">
                    </a>
                </div>
                <div class="page-title">
                    <h1 class="title">Zona HomPim Island</h1>
                    <span style="color: white;">Stimulasi Motorik, Logika, dan Keberanian dalam Setiap Permainan!</span>
                </div>
            </div>
        </div>
    </div>

    <!--=====================================-->
    <!--=        Gallery Area Start        	=-->
    <!--=====================================-->
    <div class="edu-gallery-area edu-section-gap">
        <div class="container">
            <div class="section-title section-center sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title" style="color: white;">8 Permainan Edukasi</h2>
                <small class="pre-title" style="color: #E2DFD2;">HomPim Island adalah petualangan dunia air dengan 8 wahana, 
                    mulai dari Kapal Bajak Laut hingga Kolam Tangkap Ikan. 
                    Area ini menstimulasi sensorik melalui Kolam Busa dan melatih ketangkasan di Kolam Tarik Rakit, 
                    menghadirkan pengalaman bermain air hangat yang edukatif, seru, dan aman bagi Si Kecil.</small>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>

            <div class="isotope-wrapper">
                {{-- <div class="isotop-button button-transparent isotop-filter">
                    <button data-filter="*" class="is-checked">
                        <span class="filter-text" style="color: white;">Semua</span>
                    </button>
                    <button data-filter=".motorik">
                        <span class="filter-text" style="color: white;">Motorik</span>
                    </button>
                    <button data-filter=".sensorik">
                        <span class="filter-text" style="color: white;">Sensorik</span>
                    </button>
                    <button data-filter=".kognitif">
                        <span class="filter-text" style="color: white;">Koginitf</span>
                    </button>
                </div> --}}
                <div class="isotope-list gallery-grid-wrap">
                    <div id="animated-thumbnials">

                        <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 g-5">
                            @foreach ($data as $key => $value)
                                <!-- Start Instructor Grid  -->
                                <div class="col isotope-item {{ $value->island_category }}">
                                    <div class="edu-team-grid team-style-1">
                                        <div class="inner">
                                            <div class="thumbnail-wrap">
                                                <div class="thumbnail">
                                                    <a href="{{url('/island')}}/{{ $value->island_code }}">
                                                        <img src="{{url('assets')}}/island/{{ $value->island_thumb }}" alt="island images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 style="margin-top: -30px;"><a class="island-name" href="{{url('/island')}}/{{ $value->island_code }}">{{ $value->island_name }}</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Instructor Grid  -->
                            @endforeach
                        </div>

                    </div>
                </div>
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