@extends('layouts.default')

@section('title')
    HomPim Planet | Edutainment Destination
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
    <!--=       Blog Details Area Start     =-->
    <!--=====================================-->
    <div class="blog-details-area section-gap-equal">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-12">
                    <div class="blog-details-content">
                        <div class="entry-content">
                            <ul class="blog-meta">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
                                <li class="separator"><i class="icon-angle-right"></i></li>
                                <li class="breadcrumb-item"><a href="{{url('/planet')}}">Hompim Planet</a></li>
                                <li class="separator"><i class="icon-angle-right"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $data->planet_name }}</li>
                            </ul>
                            <div class="row">
                                <div class="col-lg-2 col-sm-12" id="pagination-mob" style="display: none;">
                                    <ul class="edu-pagination justify-content-center pt-0 pb-3">
                                        <li><a href="{{ $prev->planet_code }}" aria-label="Previous"><i class="icon-west"></i></a></li>
                                        <li><a href="{{ $next->planet_code }}" aria-label="Next"><i class="icon-east"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-10 col-sm-12">
                                    <h3 class="title"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="margin-top: -10px; margin-right: 5px;"> {{ $data->article_title }}</h3>
                                </div>
                                <div class="col-lg-2 col-sm-12" id="pagination-web">
                                    <ul class="edu-pagination justify-content-start pt-0" style="float: right;">
                                        <li><a href="{{ $prev->planet_code }}" aria-label="Previous"><i class="icon-west"></i></a></li>
                                        <li><a href="{{ $next->planet_code }}" aria-label="Next"><i class="icon-east"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="thumbnail">
                                <img src="{{url('assets')}}/planet/{{ $data->planet_img }}" alt="Blog Image">
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
                                                    <a href="{{url('/planet')}}/{{ $val_random->planet_code }}">
                                                        <img src="{{url('assets')}}/planet/{{ $val_random->planet_img }}" alt="blog images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="{{url('/planet')}}/{{ $val_random->planet_code }}">{{ $val_random->planet_name }}</a></h5>
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
@endsection

@section('scripts')
    <script type="text/javascript"></script>
@endsection