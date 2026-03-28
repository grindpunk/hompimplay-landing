@extends('layouts.default')

@section('title')
    Tentang Kami | Hompim Play
@endsection

@section('styles')
    <style type="text/css">
        @media only screen and (max-width: 992px) {
            #logo-footer{
                width: 70%;
            }
        }

        #main-wrapper{
            background-image: none !important;
            background-color: white;
        }

        .coming-soon-page-area {
            background: none;
        }

        #buy-ticket{
            display: none;
        }

        .header-photography .header-mainmenu .mainmenu-nav .mainmenu > li > a{
            color: black;
        }

        .header-photography .header-right .header-action .mobile-menu-bar .hamberger-button{
            color: black;
        }

        .icon-54{
            color: black!important;
        }

        .contact-form.form-style-2 .form-group select{
            background-color: transparent;
            border-bottom: 1px solid var(--color-border);
            border-radius: 0;
            padding: 20px 0 10px;
            height: 60px;
        }

        .button-google:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }

        .button-akun:hover{
            transform: scale(1.1);
            transition: 0.2s;
        }

    </style>
@endsection

@section('content')
    <!--=====================================-->
    <!--=       About Us Area Start       =-->
    <!--=====================================-->
    <div class="blog-details-area section-gap-equal" style="padding-bottom: 0px;">
        <div class="container">
            <div class="row row--30" style="justify-content: center;">
                <div class="thumbnail" style="text-align: center; margin-bottom: 30px;">
                    <img src="{{url('assets')}}/home/hompimplay-logo.png" alt="About Us Image">
                </div>
                <div class="col-md-8">
                    <h3 class="title" style="text-align: center; margin-bottom: 50px;">Destinasi Wisata Bermain Edukatif Anak dan Rekreasi Liburan Keluarga di Bandung</h3>
                    <div class="blog-details-content" style="text-align: justify; border-bottom: none;">
                        <p>Masih ingat dengan seruan "Hompimpa alaihum gambreng" yang sering kita ucapkan saat kecil? 
                            Kalimat legendaris itu bukan sekadar kata-kata, melainkan simbol kebersamaan dan gerbang awal menuju dunia petualangan yang seru. 
                            Semangat inilah yang melahirkan HomPim Play, sebuah pengembang destinasi wisata permainan anak di Kota Bandung yang menggabungkan konsep outdoor dan indoor dalam satu harmoni.
                        </p>
                        <div class="features-image" style="margin-bottom: 0px;">
                            <div class="row g-md-5">
                                <div class="col-6">
                                    <div class="thumb" style="text-align: center; margin-bottom: 50px;">
                                        <img src="{{url('assets')}}/home/about-us-1.png" alt="Features Images" style="width: 90%;">
                                    </div>
                                    <p> Kami sangat serius dalam mendukung tumbuh kembang si kecil. 
                                        Melalui pendekatan berbasis kebutuhan sesuai tahap usia, aktivitas di HomPim Play difokuskan untuk mengasah aspek sensorik, motorik, kognitif, hingga kecerdasan emosional anak. 
                                        Komitmen kami adalah memberikan pengalaman bermain yang edukatif dan positif guna membangun karakter anak sejak dini.
                                    </p>
                                    <p> HomPim Play ada sebagai tujuan rekreasi dengan wahana terlengkap di Bandung yang ramah untuk segala usia, termasuk bagi para lansia. 
                                        Menjadi salah satu destinasi di Jawa Barat yang menawarkan paparan alam sejuk dataran tinggi, 
                                        kami mengusung nilai "Sweet Escape" sebuah pelarian manis bagi keluarga untuk menikmati udara segar dan makanan lezat di tengah ruang yang luas dan nyaman.
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p> Di HomPim Play, kami percaya bahwa setiap detik waktu bermain harus memiliki makna. 
                                        Itulah mengapa setiap wahana yang kami hadirkan dirancang agar anak-anak dapat bereksplorasi, berinteraksi, 
                                        dan belajar dalam suasana yang tidak hanya menyenangkan, tetapi juga sangat aman.
                                    </p>
                                    <div class="thumb" style="text-align: center;">
                                        <img src="{{url('assets')}}/home/about-us-2.png" alt="Features Images" style="width: 90%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Dengan tiga  (Core Values) yang selalu kami bawa dalam setiap pelayanan :</p>
                        <ul>
                            <li>Deliver Happiness : Menghadirkan keceriaan yang ramah dan kreatif bagi setiap pengunjung.</li>
                            <li>Sweet Escape : Menawarkan waktu berkualitas untuk diri sendiri dan keluarga dekat dengan alam.</li>
                            <li>Educative Experience : Menyajikan pengalaman yang praktis, interaktif, dan penuh informasi bermanfaat.</li>
                        </ul>
                        <p>
                            Pengunjung tidak perlu lagi berpindah tempat untuk mencari variasi aktivitas. 
                            Di HomPim Play, Buddies bisa menikmati lebih dari tujuh aktivitas permainan berbeda hanya dalam satu lokasi. 
                            Fasilitas kami terbuka luas bagi siapa saja, mulai dari keluarga hingga rombongan besar seperti sekolah, instansi perusahaan, maupun agen travel.
                        </p>
                        <div class="features-image">
                            <div class="row g-md-5">
                                <div class="col-6">
                                    <div class="thumb">
                                        <img src="{{url('assets')}}/home/about-us-3.png" alt="Features Images" style="width: 90%;">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p>
                                        Petualangan di HomPim Play terasa semakin hidup dengan kehadiran para maskot kami yang ikonik. 
                                        Ada sepuluh karakter unik—seperti Miki, Guido, Rumi, hingga Ozo—yang dirancang untuk membangun kedekatan emosional dengan anak-anak. 
                                        Mereka bukan sekadar simbol, melainkan wajah brand yang siap menyapa, menghibur, dan menemani proses belajar anak dengan nilai-nilai positif yang menyenangkan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p>HomPim Play hadir untuk memastikan bahwa setiap tawa anak-anak hari ini adalah investasi bagi tumbuh kembang mereka di masa depan.
                            <br>
                            Selamat datang di dunia penuh warna, kreativitas, dan petualangan tanpa batas!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=      Call TO Action Area Start    =-->
    <!--=====================================-->
    <!-- Start CTA Area  -->
    <div class="edu-about-area gap-bottom-equal about-style-4 online-art-about" style="padding-top: 0px;">
        <div class="container">
            <div class="about-heading-area">
                <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title"><img srcset="{{url('assets')}}/home/icon-polygon.png" style="margin-top: -5px; margin-right: 10px;"> Sudah Siap Berpetualang?</h2>
                    <p class="pre-title color-secondary" style="color: grey;">Buat akun dan jelajahi berbagai macam wahana dengan keunikannya masing-masing</p>
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
                            <p>Tidak hanya bermain, namun juga mengedukasi. Scan QR-Code di setiap wahana dan temukan keajaibannya!</p>
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