@extends('layouts.default')

@section('title')
    HomPim Farm | Edutainment Destination
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
            background-image: url('/assets/animal/bg-farm.png');
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

        .animal-name{
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
                        <img src="{{url('assets')}}/home/hompimfarm-logo.png" alt="farm images">
                    </a>
                </div>
                <div class="page-title">
                    <h1 class="title">Zona HomPim Farm</h1>
                    <span style="color: white;">Mari kita belajar dan tumbuh bersama!</span>
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
                <h2 class="title" style="color: white;">Ragam Satwa Edukasi</h2>
                <small class="pre-title" style="color: #E2DFD2;">HomPim Farm ini dirancang sebagai area wisata edukasi keluarga yang mengusung tema kehidupan pedesaan yang damai dan kegiatan agrikultur yang interaktif. Konsep ini memadukan suasana Peternakan tradisional dengan elemen Edukasi, Panen, dan Hewan Ternak yang Ramah, didukung oleh latar bangunan lumbung dan kincir angin yang ikonik.</small>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>

            <div class="isotope-wrapper">
                <div class="isotop-button button-transparent isotop-filter">
                    <button data-filter="*" class="is-checked">
                        <span class="filter-text" style="color: white;">Semua</span>
                    </button>
                    <button data-filter=".pengerat">
                        <span class="filter-text" style="color: white;">Hewan Pengerat</span>
                    </button>
                    <button data-filter=".mamalia">
                        <span class="filter-text" style="color: white;">Mamalia</span>
                    </button>
                    <button data-filter=".burung">
                        <span class="filter-text" style="color: white;">Burung & Unggas</span>
                    </button>
                    <button data-filter=".reptil">
                        <span class="filter-text" style="color: white;">Reptil</span>
                    </button>
                    <button data-filter=".ikan">
                        <span class="filter-text" style="color: white;">Ikan</span>
                    </button>
                </div>
                <div class="isotope-list gallery-grid-wrap">
                    <div id="animated-thumbnials">

                        <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 g-5">
                            @foreach ($data as $key => $value)
                                <!-- Start Instructor Grid  -->
                                <div class="col isotope-item {{ $value->animal_category }}">
                                    <div class="edu-team-grid team-style-1">
                                        <div class="inner">
                                            <div class="thumbnail-wrap">
                                                <div class="thumbnail" style="max-height: 140px;">
                                                    <a href="{{url('/farm')}}/{{ $value->animal_code }}">
                                                        <img src="{{url('assets')}}/animal/{{ $value->animal_thumb }}" alt="farm images" style="max-height: 140px;">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 style="margin-top: -10px;"><a class="animal-name" href="{{url('/farm')}}/{{ $value->animal_code }}">{{ $value->animal_name }}</a></h6>
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
    <!--=      Farm Show Area Start    =-->
    <!--=====================================-->
    <!-- Start Farm Show Area  -->
    <div class="edu-about-area gap-bottom-equal about-style-4 online-art-about" style="padding-top: 0px;">
        <div class="container">
            <div class="about-heading-area">
                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title" style="color: white;"><img srcset="{{url('assets')}}/home/icon-polygon.png" style="margin-top: -5px; margin-right: 10px;"> Farm Show</h2>
                    <span class="pre-title color-secondary" style="color: white;">Ajak Si Kecil lebih mengenal dunia satwa dengan berinteraksi langsung!</span>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-3">
                    <div class="about-image-gallery-2 edublink-animated-shape">
                        <div class="main-img-3" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                            <img srcset="{{url('assets')}}/animal/farm-show.png" alt="farm show Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-image-gallery-2 edublink-animated-shape">
                        <div class="about-content" style="width: 100%;  max-width: 100%;">
                            <div class="categorie-grid categorie-style-2 color-extra06-style" style="margin: 10px; border: 1px solid white; border-radius: 20px;">
                                <div class="content">
                                    <h3 style="color: white;"><b>Informasi</b></h3>
                                    <span style="color: white;">Farm Show adalah pertunjukan edukasi satwa yang memadukan atraksi perilaku alami hewan dengan penjelasan informatif. Pengunjung akan diajak melihat keunikan satwa secara langsung, dan memahami perilaku mereka</span>
                                </div>
                            </div>
                            <div class="categorie-grid categorie-style-2 color-extra06-style" style="margin: 10px; border: 1px solid white; border-radius: 20px;">
                                <div class="content">
                                    <h3 style="color: white;"><b>Tempat dan Waktu</b></h3>
                                    <span style="color: white;">Zona HomPim Farm</span>
                                    <br>
                                    <span style="color: white;">Setiap Hari, Pukul <b>11:00, 14:00</b> dan <b>16:00</b></span>
                                    <br>
                                    <span style="visibility: hidden;">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Farm Show Area  -->
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