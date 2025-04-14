@extends('home.app')

@section('title', 'Home')

@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="80x80" href="{{ url('/assets/images/fav-icon') }}/icon-ningrat.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css?v={{ time() }}" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="assets/venobox/venobox.css" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v={{ time() }}" type="text/css" media="all">
    <!-- Dropdown CSS -->
    <link rel="stylesheet" href="assets/css/dropdown.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css?v={{ time() }}" type="text/css" media="all">
    <!-- rangeslider CSS -->
    <link rel="stylesheet" href="assets/css/rangeslider.css" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="facebook-domain-verification" content="aq48a74aqsz3jzch1v4rsce1r5trkx" />
@endsection

@section('content')
    <div class="gallery-area mt-2" data-aos="fade-down">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 p-0 gallery-content">
                    <img src="{{ url('/assets/images/gallery/1.png') }}" class="img-fluid" alt="" />
                </div>
                <div class="col-12 col-md-6 p-0 gallery-content">
                    <img src="{{ url('/assets/images/gallery/2.png') }}" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-0 gallery-content">
                    <img src="{{ url('/assets/images/gallery/3.png') }}" class="img-fluid" alt="" />
                </div>
                <div class="col-12 col-md-6 p-0 gallery-content">
                    <img src="{{ url('/assets/images/gallery/4.png') }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="prioritas mt-3 py-5" style="background-color: #11689B" data-aos="fade-down">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h4 class="text-white text-center">Rumah Ningrat Untuk Hidup Lebih Baik</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="container-fluid">
                        <div class="row justify-content-center align-items-center g-4 text-white">
                            <div
                                class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center gap-3">
                                <h5 class="text-white">Kesehatan</h5>
                                <i class="bi bi-heart-fill" style="font-size: 5em"></i>
                                <p class="text-center">Mendorong warga untuk memiliki hidup lebih baik dari segi Kesehatan
                                    dengan penyediaan
                                    fasilitas olahraga seperti Jogging Track dan Lapangan Olahraga Multifungsi serta Ruang
                                    Terbuka Hijau untuk menjaga kualitas Udara tetap sehat</p>
                            </div>
                            <div
                                class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center gap-3">
                                <h5 class="text-white">Keamanan</h5>
                                <i class="bi bi-shield-fill" style="font-size: 5em"></i>
                                <p class="text-center">Memastikan warga merasa nyaman dan aman karena terlindungi dengan
                                    fasilitas keamanan berlapis mulai dari One Gate System, Penjagaan Security 24 Jam, serta
                                    Pemantauan CCTV per Area Blok yang dapat diakses melalui satu Aplikasi Terintegrasi</p>
                            </div>
                            <div
                                class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center gap-3">
                                <h5 class="text-white">Komunitas</h5>
                                <i class="bi bi-people-fill" style="font-size: 5em"></i>
                                <p class="text-center">Memberikan peluang bagi warga yang memiliki usaha untuk mendapatkan
                                    pemasukan lebih dengan bantuan pemasaran melalui aplikasi Rumah Ningrat serta
                                    berkesempatan untuk menjadi Mitra Eksklusif Rumah Ningrat yang dibayar meski hanya di
                                    rumah</p>
                            </div>
                            <div
                                class="col-12 col-lg-3 d-flex flex-column justify-content-center align-items-center gap-3">
                                <h5 class="text-white">Ekonomi</h5>
                                <i class="bi bi-credit-card-fill" style="font-size: 5em"></i>
                                <p class="text-center">Mendorong warga untuk memiliki hidup lebih baik dari segi Kesehatan
                                    dengan penyediaan
                                    fasilitas olahraga seperti Jogging Track dan Lapangan Olahraga Multifungsi serta Ruang
                                    Terbuka Hijau untuk menjaga kualitas Udara tetap sehat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="slider-gallery-container mt-3" data-aos="fade-down">
        <div class="container-fluid">
            <div class="row">
                <div class="slider-gallery owl-carousel">
                    <div class="col-12">
                        <div>
                            <img src="{{ url('/assets/images/slider/1.png') }}" class="img-fluid" alt=""
                                style="height: 320px !important;" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <img src="{{ url('/assets/images/slider/2.png') }}" class="img-fluid" alt=""
                                style="height: 320px !important;" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <img src="{{ url('/assets/images/slider/3.png') }}" class="img-fluid" alt=""
                                style="height: 320px !important;" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <img src="{{ url('/assets/images/slider/1.png') }}" class="img-fluid" alt=""
                                style="height: 320px !important;" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <img src="{{ url('/assets/images/slider/2.png') }}" class="img-fluid" alt=""
                                style="height: 320px !important;" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <img src="{{ url('/assets/images/slider/3.png') }}" class="img-fluid" alt=""
                                style="height: 320px !important;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project mt-5 mb-5" data-aos="fade-down">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12">
                    <h3 style="color:#0259A8;">RUMAH NINGRAT</h3>
                </div>
                <div class="col-12 p-5">
                    <p class="text-center" style="font-size: 24px;">Berdiri sejak tahun 2013 Rumah Ningrat sudah hadir di
                        7 Kota yaitu
                        Cirebon,
                        Kuningan,
                        Majalengka, Indramayu, Subang, Kendal dan Bekasi. Dengan penjualan lebih dari 1000++
                        Rumah</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 project-container">
                    <a href="{{ url('/detail/70') }}">
                        <div class="position-relative" style="min-height: 300px">
                            <div class="position-absolute project-content bg-primary"
                                style="background: url('assets/images/project/1.png');">
                            </div>
                            <div class="project-detail">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="text-white">RN Jayasampurna</h3>
                                            <p style="margin: 0px !important;">Bekasi, Jawa Barat</p>
                                            <p style="margin: 0px !important;">Rp.194.500.000 -,</p>
                                            <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                                <div class="d-flex" style="height: 20px; gap: 12px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>2</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>1</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>Carport</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>60m</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>30m</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ url('/detail/40') }}">
                        <div class="position-relative" style="min-height: 300px">
                            <div class="position-absolute project-content bg-primary"
                                style="background: url('assets/images/project/1.png');">
                            </div>
                            <div class="project-detail">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="text-white">RN AWN Bypass</h3>
                                            <p style="margin: 0px !important;">Cirebon, Jawa Barat</p>
                                            <p style="margin: 0px !important;">Rp. 174.000.000 -,</p>
                                            <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                                <div class="d-flex" style="height: 20px; gap: 12px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>2</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>1</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>Carport</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>60m</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>30m</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ url('/detail/68') }}">
                        <div class="position-relative" style="min-height: 300px">
                            <div class="position-absolute project-content bg-primary"
                                style="background: url('assets/images/project/1.png');">
                            </div>
                            <div class="project-detail">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="text-white">RN Kendal 2</h3>
                                            <p style="margin: 0px !important;">Kendal, Jawa Tengah</p>
                                            <p style="margin: 0px !important;">Rp. 174.000.000 -,</p>
                                            <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                                <div class="d-flex" style="height: 20px; gap: 12px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>2</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>1</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>Carport</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>60m</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex" style="height: 20px; gap: 8px">
                                                    <div>
                                                        <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                            alt="" width="15px" height="15px" />
                                                    </div>
                                                    <div>
                                                        <p>30m</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- <div class="position-relative" style="min-height: 300px">
                        <div class="position-absolute project-content bg-primary"
                            style="background: url('assets/images/project/1.png');">
                        </div>
                        <div class="project-detail">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-white">RN Subang 2</h3>
                                        <p style="margin: 0px !important;">Subang, Jawa Barat</p>
                                        <p style="margin: 0px !important;">Rp.166.000.000 -,</p>
                                        <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                            <div class="d-flex" style="height: 20px; gap: 12px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>1</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>Carport</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>60m</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>30m</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative" style="min-height: 300px">
                        <div class="position-absolute project-content"
                            style="background: url('assets/images/project/2.png');">
                        </div>
                        <div class="project-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-white">RN MAJALENGKA 2</h3>
                                        <p style="margin: 0px !important;">Majalengka, Jawa Barat</p>
                                        <p style="margin: 0px !important;">Rp.166.000.000 -,</p>
                                        <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                            <div class="d-flex" style="height: 20px; gap: 12px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>1</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>Carport</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>60m</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>30m</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative" style="min-height: 300px">
                        <div class="position-absolute project-content"
                            style="background: url('assets/images/project/3.png');">
                        </div>
                        <div class="project-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-white">RN KENDAL 2</h3>
                                        <p style="margin: 0px !important;">Kendal, Jawa Tengah</p>
                                        <p style="margin: 0px !important;">Rp.166.000.000 -,</p>
                                        <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                            <div class="d-flex" style="height: 20px; gap: 12px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>1</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>Carport</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>60m</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>30m</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative" style="min-height: 300px">
                        <div class="position-absolute project-content"
                            style="background: url('assets/images/project/4.png');">
                        </div>
                        <div class="project-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-white">RN INDRAMAYU 2 (MARGADADI)</h3>
                                        <p style="margin: 0px !important;">Indramayu, Jawa Barat</p>
                                        <p style="margin: 0px !important;">Rp.166.000.000 -,</p>
                                        <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                            <div class="d-flex" style="height: 20px; gap: 12px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>1</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>Carport</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>60m</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>30m</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative" style="min-height: 300px">
                        <div class="position-absolute project-content"
                            style="background: url('assets/images/project/5.png');">
                        </div>
                        <div class="project-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-white">RN SAMPORA</h3>
                                        <p style="margin: 0px !important;">Kuningan, Jawa Barat</p>
                                        <p style="margin: 0px !important;">Rp.166.000.000 -,</p>
                                        <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                            <div class="d-flex" style="height: 20px; gap: 12px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>1</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>Carport</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>60m</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>30m</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative" style="min-height: 300px">
                        <div class="position-absolute project-content"
                            style="background: url('assets/images/project/6.png');">
                        </div>
                        <div class="project-detail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-white">RN KAYANGAN</h3>
                                        <p style="margin: 0px !important;">Cirebon, Jawa Barat</p>
                                        <p style="margin: 0px !important;">Rp.166.000.000 -,</p>
                                        <div class="mt-1 mb-4 d-flex" style="gap: 8px">
                                            <div class="d-flex" style="height: 20px; gap: 12px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_tidur.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/kamar_mandi.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>1</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/carport.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>Carport</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_tanah.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>60m</p>
                                                </div>
                                            </div>
                                            <div class="d-flex" style="height: 20px; gap: 8px">
                                                <div>
                                                    <img src="{{ url('/assets/images/icon/luas_bangunan.png') }}"
                                                        alt="" width="15px" height="15px" />
                                                </div>
                                                <div>
                                                    <p>30m</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


    <!-- jquery js -->
    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- counterup js -->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- waypoints js -->
    <script src="assets/js/waypoints.min.js"></script>

    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>

    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- venobox js -->
    <script src="assets/venobox/venobox.js"></script>

    <!--  animated-text js -->
    <script src="assets/js/animated-text.js"></script>

    <!-- venobox min js -->
    <script src="assets/venobox/venobox.min.js"></script>

    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- jquery meanmenu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>

    <!-- jquery scrollup js -->
    <script src="assets/js/jquery.scrollUp.js"></script>

    <!-- Slick Slider -->
    <script src="assets/slick/slick.min.js"></script>

    <script src="assets/js/jquery.barfiller.js"></script>
    <!-- jquery js -->

    <!-- ragrslider js -->
    <script src="assets/js/rangeslider.js"></script>

    <!-- ragrslider js -->
    <script src="assets/js/mixitup.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- theme js -->
    <script src="assets/js/theme.js"></script>

    <!-- scroll js -->
    <script src="assets/js/script.js"></script>



    <script>
        function toggleMenu() {
            var menu = document.getElementById("menuDropdown");
            menu.style.display = (menu.style.display === "block") ? "none" : "block";
        }

        // Menutup dropdown jika klik di luar area menu
        document.addEventListener("click", function(event) {
            var menu = document.getElementById("menuDropdown");
            var icon = document.querySelector(".menu-icon");
            if (!menu.contains(event.target) && !icon.contains(event.target)) {
                menu.style.display = "none";
            }
        });
        AOS.init({
            disable: false,
            once: true
        });

        function changeToggle() {
            let toggle = document.getElementById("toggle");
            let h3 = document.getElementsByClassName("h3");
            if (toggle.style.float != "right") {
                toggle.style.float = "right";
                h3[0].innerHTML = "<span>$</span>350";
                h3[1].innerHTML = "<span>$</span>240";
                h3[2].innerHTML = "<span>$</span>480";
            } else {
                toggle.style.float = "none";
                h3[0].innerHTML = "<span>$</span>217";
                h3[1].innerHTML = "<span>$</span>144";
                h3[2].innerHTML = "<span>$</span>359";
            }
        }

        $(document).ready(function() {
            $('.slider-gallery').owlCarousel({
                autoplay: true,
                autoplayTimeout: 10000,
                dots: true,
                nav: false,
                margin: 10,
                navText: ["<i class='bi bi-chevron-left''></i>", "<i class='bi bi-chevron-right''></i>"],
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    },
                    1920: {
                        items: 3
                    }
                }
            })
        });
    </script>
@endsection
