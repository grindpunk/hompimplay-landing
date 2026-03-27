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


        .coming-soon-page-area {
            background: none;
        }

        #buy-ticket{
            display: none;
        }

        .header-photography .header-mainmenu .mainmenu-nav .mainmenu > li > a{
            color: white;
        }

        .header-photography .header-right .header-action .mobile-menu-bar .hamberger-button{
            color: white;
        }

    </style>
@endsection

@section('content')
    <!--=====================================-->
    <!--=     Comming Soon Area Start       =-->
    <!--=====================================-->
    <section class="event-details-area edu-section-gap" style="padding-top: 50px;">
        <div class="container">
            <div class="event-details">
                <div class="main-thumbnail" style="text-align: center;">
                    <img src="{{url('assets')}}/home/coming_soon.webp" alt="coming soon" style="width: 50%;">
                </div>
            </div>
            <div class="coming-soon-content" style="margin-top: -50px;">
                <p style="color: white;">Maaf, sepertinya halaman yang Anda cari sedang dalam tahap pengembangan atau pembaruan oleh tim developer kami. Tunggu kejutan selanjutnya!</p>
                <div class="row">
                    <div class="col-md-6" style="padding: 10px;">
                        <a href="{{url('/')}}" class="edu-btn btn-medium" type="button">Kembali ke Beranda</a>
                    </div>
                    <div class="col-md-6" style="padding: 10px;">
                        <a href="{{ url()->previous() }}" class="edu-btn btn-medium" type="button">Halaman Sebelumnya</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 scene">
                <img data-depth="2" src="{{url('edublink')}}/assets/images/others/shape-22.png" alt="Shape">
            </li>
            <li class="shape-2 scene">
                <img data-depth="-2" src="{{url('edublink')}}/assets/images/others/shape-23.png" alt="Shape">
            </li>
            <li class="shape-3">
                <img class="rotateit" src="{{url('edublink')}}/assets/images/others/shape-24.png" alt="Shape">
            </li>
            <li class="shape-4"></li>
        </ul>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript"></script>
@endsection