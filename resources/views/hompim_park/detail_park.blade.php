@extends('layouts.default')

@section('title')
    HomPim Park | Edutainment Destination
@endsection

@section('styles')
    <style type="text/css">
        @media only screen and (max-width: 992px) {
            #logo-footer{
                width: 70%;
            }
        }

        #main-wrapper{
            background-image: none!important;
            background-color: white;
        }

        #buy-ticket{
            display: none;
        }

        @media only screen and (max-width: 992px) {
            #pagination-web{
                display: none!important;
            }

            #pagination-mob{
                display: block!important;
            }
        }

        .header-photography .header-mainmenu .mainmenu-nav .mainmenu > li > a{
            color: black;
        }

        .header-photography .header-right .header-action .mobile-menu-bar .hamberger-button{
            color: black;
        }

        .bg-image--19{
            position: relative;
            background-image: url('/assets/park/bg-park.png');
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

        .blog-meta li:after{
            display: none;
        }

        .edu-team-grid .thumbnail a:after{
            background: none;
        }

        .edu-team-grid .thumbnail a:hover{
            transition: transform 0.3s ease;
            transform: scale(1.1);
        }

        .separator {
            display: flex;       /* Use flexbox for layout */
            align-items: center; /* Vertically center the text and lines */
            text-align: center;  /* Horizontally center the text within the element */
            margin: 20px 0;      /* Add some vertical spacing */
            color: rgba(160, 208, 51, 1);
            font-size: 22px;
            font-weight: 700;
        }

        .separator::before, .separator::after {
            content: '';         /* Required for pseudo-elements */
            flex: 1;             /* Allow lines to grow and fill available space */
            border-bottom: 1px solid rgba(160, 208, 51, 1); /* Create the line (adjust color/thickness as needed) */
        }

        /* Add spacing between the text and the lines */
        .separator:not(:empty)::before {
            margin-right: 0.5em;
        }

        .separator:not(:empty)::after {
            margin-left: 0.5em;
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
                        <img src="{{url('assets')}}/home/hompimkart-logo.png" alt="park images">
                    </a>
                </div>
                <div class="page-title">
                    <h1 class="title">Zona HomPim Kart</h1>
                    <span style="color: white;">Kecepatan Tanpa Batas Usia: Keseruan Balap Keluarga dan Adu Adrenalin di Hompim Park</span>
                </div>
            </div>
        </div>
    </div>

    <!--=====================================-->
    <!--=        Article Area Start        	=-->
    <!--=====================================-->
    <div class="edu-gallery-area edu-section-gap">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-12">
                    <div class="blog-details-content">
                        <div class="entry-content">
                            <ul class="blog-meta">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                                <li class="separator"><i class="icon-angle-right"></i></li>
                                <li class="breadcrumb-item"><a href="{{url('/park')}}">Hompim Park</a></li>
                                <li class="separator"><i class="icon-angle-right"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $data->park_name }}</li>
                            </ul>
                            <div class="row">
                                <div class="col-lg-2 col-sm-12" id="pagination-mob" style="display: none;">
                                    <ul class="edu-pagination justify-content-center pt-0 pb-3">
                                        <li><a href="#" aria-label="Previous"><i class="icon-west"></i></a></li>
                                        <li><a href="#" aria-label="Next"><i class="icon-east"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-10 col-sm-12">
                                    <h3 class="title"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="margin-top: -10px; margin-right: 5px;"> {{ $data->article_title }}</h3>
                                </div>
                                <div class="col-lg-2 col-sm-12" id="pagination-web">
                                    <ul class="edu-pagination justify-content-start pt-0" style="float: right;">
                                        <li><a href="#" aria-label="Previous"><i class="icon-west"></i></a></li>
                                        <li><a href="#" aria-label="Next"><i class="icon-east"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="thumbnail">
                                <img src="{{url('assets')}}/park/{{ $data->park_img }}" alt="Blog Image">
                            </div>
                        </div>

                        {!! nl2br($data->article_desc) !!}
                        
                    </div>

                    <div class="event-speaker" style="padding-top: 30px;">
                        <h3 class="heading-title"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="margin-top: -10px; margin-right: 5px;"> Lihat Lainnya</h3>
                        <div class="row g-5">
                            @foreach ($random as $key=>$val_random)
                                <!-- Start Instructor Grid  -->
                                <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="edu-team-grid team-style-1">
                                        <div class="inner">
                                            <div class="thumbnail-wrap">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img src="{{url('assets')}}/park/{{ $val_random->park_img }}" alt="blog images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">{{ $val_random->park_name }}</a></h5>
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
    <!-- End Article Area  -->
@endsection

@section('scripts')
    <script type="text/javascript"></script>
@endsection