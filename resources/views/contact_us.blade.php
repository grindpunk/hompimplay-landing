@extends('layouts.default')

@section('title')
    Kontak Kami | Hompim Play
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
            background-color: #f0f4f5;
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

        .contact-form.form-style-2 .form-group select{
            background-color: transparent;
            border-bottom: 1px solid var(--color-border);
            border-radius: 0;
            padding: 20px 0 10px;
            height: 60px;
        }

    </style>
@endsection

@section('content')
    <!--=====================================-->
    <!--=       Contact Me Area Start       =-->
    <!--=====================================-->
    <section class="contact-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9" style="text-align: center;">
                    <div class="contact-us-info">
                        <h3 class="heading-title">Sapa Kami di Hompim Play!</h3>
                        <small>Punya pertanyaan tentang wahana kami? Ingin merayakan ulang tahun yang tak terlupakan, atau sekadar ingin memastikan apakah si Capybara sudah bangun dari tidurnya? 
                            Tim kami siap membantu Anda merencanakan hari bermain yang paling berkesan di HomPimPlay!</small>
                        {{-- <ul class="address-list">
                            <li>
                                <h5 class="title">Address</h5>
                                <p>Studio 76d, Riley Ford, North Michael chester, CF99 6QQ</p>
                            </li>
                            <li>
                                <h5 class="title">Email</h5>
                                <p><a href="mailto:edublink@example.com">edublink@example.com</a></p>
                            </li>
                            <li>
                                <h5 class="title">Phone</h5>
                                <p><a href="tel:+0914135548598">(+091) 413 554 8598</a></p>
                            </li>
                        </ul>
                        <ul class="social-share">
                            <li><a href="#"><i class="icon-share-alt"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <div class="row g-5" style="margin-top: 30px;">
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-us-info">
                        <ul class="address-list">
                            <li>
                                <h4 class="heading-title" style="margin-bottom: 0px;">Main Kesini Yuk!</h4>
                                <small>Kami berlokasi di jantung udara sejuk Dago Pakar. Enam lantai keseruan menunggu Anda dan keluarga.</small>
                            </li>
                            <li>
                                <h4 class="heading-title" style="margin-bottom: 0px;">Alamat</h4>
                                <small>Jl. Rancakendal Luhur No. 9, Dago, Kec. Coblong, Kota Bandung, Jawa Barat 40191.</small>
                            </li>
                            <li>
                                <h4 class="heading-title" style="margin-bottom: 0px;">Jam Operasional</h4>
                                <small>- Weekdays (Senin-Jumat): Pukul 09.00 - 18.00 <br> - Weekend (Sabtu, Minggu & Hari Libur): Pukul 09.00 - 21.00</small>
                            </li>
                        </ul>
                        <ul class="social-share">
                            <li><a href="https://www.tiktok.com/@hompimplay.official" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="https://www.instagram.com/hompimplayofficial/" target="_blank"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-lg-6">
                    <div class="contact-form form-style-2">
                        <form class="rnt-contact-form rwt-dynamic-form" id="contact-form" method="POST" action="mail.php">
                            <div class="row row--10">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="contact-name" id="contact-name" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" name="contact-email" id="contact-email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="tel" name="contact-phone" id="contact-phone" placeholder="Nomor Handphone" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <select name="contact-category" id="contact-category" required>
                                        <option value="" disabled selected hidden>Kategori</option>
                                        <option value="tiket">Info Tiket & Jam Operasional</option>
                                        <option value="reservasi">Reservasi Ulang Tahun / Private Event</option>
                                        <option value="visit">Kunjungan Sekolah / Rombongan Korporat</option>
                                        <option value="info">Informasi Wahana & Fasilitas</option>
                                        <option value="kehilangan">Lost & Found (Barang Tertinggal)</option>
                                        <option value="kritik">Kritik, Saran, & Masukan</option>
                                        <option value="kerjasama">Kerjasama Bisnis / Vendor</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="contact-message" id="contact-message" cols="30" rows="6" placeholder="Pesan" required></textarea>
                                </div>
                                <div class="form-group col-12 text-center">
                                    <button class="rn-btn edu-btn submit-btn" name="submit" type="submit">Kirim Pesan <i class="icon-4"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      Google Map Area Start        =-->
    <!--=====================================-->
    <div class="google-map-area">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=-6.8699251,107.6278598&z=17&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript"></script>
@endsection