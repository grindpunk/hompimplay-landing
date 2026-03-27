@extends('layouts.default')

@section('title')
    HomPim Play | Edutainment Destination
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
                                <li class="breadcrumb-item"><a href="{{url('/farm')}}">Hompim Farm</a></li>
                                <li class="separator"><i class="icon-angle-right"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $data->animal_name }}</li>
                            </ul>
                            <div class="row">
                                <div class="col-lg-2 col-sm-12" id="pagination-mob" style="display: none;">
                                    <ul class="edu-pagination justify-content-center pt-0 pb-3">
                                        <li><a href="{{ $prev->animal_code }}" aria-label="Previous"><i class="icon-west"></i></a></li>
                                        <li><a href="{{ $next->animal_code }}" aria-label="Next"><i class="icon-east"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-10 col-sm-12">
                                    <h3 class="title"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="margin-top: -10px; margin-right: 5px;"> {{ $data->article_title }}</h3>
                                </div>
                                <div class="col-lg-2 col-sm-12" id="pagination-web">
                                    <ul class="edu-pagination justify-content-start pt-0" style="float: right;">
                                        <li><a href="{{ $prev->animal_code }}" aria-label="Previous"><i class="icon-west"></i></a></li>
                                        <li><a href="{{ $next->animal_code }}" aria-label="Next"><i class="icon-east"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="thumbnail">
                                <img src="{{url('assets')}}/animal/{{ $data->animal_img }}" alt="Blog Image">
                            </div>
                        </div>

                        {!! nl2br($data->article_desc) !!}
                        
                        <div class="blog-share-area" style="padding: 30px; background-color: rgba(51, 51, 51, 0.05); border-radius: 20px;">
                            <div class="container" style="padding: 30px;">
                                <div class="event-details">
                                    <div class="row row--30">
                                        <div class="col-lg-12">
                                            <div class="separator">
                                                HompimPedia
                                            </div>
                                            <div class="details-content" style="padding-top: 20px;">
                                                <h4><i class="fa-regular fa-file-lines" style="color: rgba(160, 208, 51, 1);"></i> Sekilas Informasi</h4>
                                                <p style="color: rgba(51, 51, 51, 1);">{{ $data->info_brief }}</p>
                                                <h4><i class="fa-regular fa-lightbulb" style="color: rgba(160, 208, 51, 1);"></i> Fakta Unik</h4>
                                                {!! nl2br($data->info_fact) !!}
                                                <h4><i class="fa-solid fa-align-left" style="color: rgba(160, 208, 51, 1);"></i> Nama Hewan</h4>
                                                <div class="row" style="margin: 20px 0px 30px 0px;">
                                                    <div class="col-lg-4 col-sm-4" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 5%; margin-top: -3px; margin-right: 5px;"> Indonesia</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_name_ina }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style h-100" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 5%; margin-top: -3px; margin-right: 5px;"> Inggris</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_name_eng }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style h-100" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 5%; margin-top: -3px; margin-right: 5px;"> Latin</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_name_lat }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4><i class="fa-solid fa-location-dot" style="color: rgba(160, 208, 51, 1);"></i> Asal / Habitat</h4>
                                                <div class="row" style="margin: 20px 0px 30px 0px;">
                                                    <div class="col-lg-6 col-sm-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style h-100" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 4%; margin-top: -3px; margin-right: 5px;"> Asal (Benua/ Negara)</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_origin }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-sm-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style h-100" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 4%; margin-top: -3px; margin-right: 5px;"> Tipe Habitat</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_habitat }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4><i class="fa-brands fa-searchengin" style="color: rgba(160, 208, 51, 1);"></i> Klasifikasi Singkat</h4>
                                                <div class="row" style="margin: 20px 0px 30px 0px;">
                                                    <div class="col-lg-4 col-md-4 col-sm-4" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style h-100" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 5%; margin-top: -3px; margin-right: 5px;"> Ordo</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_ordo }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" style="padding-bottom: 5px;">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style h-100" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 5%; margin-top: -3px; margin-right: 5px;"> Famili</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_fam }}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="categorie-grid categorie-style-2 color-extra06-style h-100" style="border-radius: 20px; background-color: rgba(51, 51, 51, 0.1)">
                                                            <div class="content" style="padding: 10px;">
                                                                <h2 class="title" style="color: black;"><img srcset="{{url('assets')}}/home/icon-polygon-2.png" style="width: 5%; margin-top: -3px; margin-right: 5px;"> Makanan</h2>
                                                                <span style="color: rgba(51, 51, 51, 1);">{{ $data->info_food }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                    <a href="{{url('/farm')}}/{{ $val_random->animal_code }}">
                                                        <img src="{{url('assets')}}/animal/{{ $val_random->animal_img }}" alt="blog images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="{{url('/farm')}}/{{ $val_random->animal_code }}">{{ $val_random->animal_name }}</a></h5>
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