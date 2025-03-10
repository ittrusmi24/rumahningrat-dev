@extends('detail.app')

@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rumah Ningrat | Booking</title>
    <meta name="description" content="halaman detail beli rumah ningrat harga merakyat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ url('/assets/images/fav-icon') }}/icon-ningrat.png">
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/owl.carousel.min.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/all.min.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/theme-default.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ url('/assets') }}/venobox/venobox.css" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/bootstrap-icons.css" type="text/css" media="all">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/custom') }}/style.css?v={{ time() }}" type="text/css"
        media="all">
    <!-- Dropdown CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/dropdown.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/responsive.css" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="{{ url('/') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    {{-- datetime picker --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    {{-- animatecss --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- css style this page --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.5.1/maptiler-sdk.umd.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.5.1/maptiler-sdk.css" rel="stylesheet" />
    <script src="https://cdn.maptiler.com/leaflet-maptilersdk/v2.0.0/leaflet-maptilersdk.js"></script>
    <style>
        .leaflet-gl-layer {
            pointer-events: none;
        }
    </style>
@endsection

@section('content')
    <div class="stikcy-nav-container" id="sticky-header">
        <nav class="navbar navbar-expand-lg p-0" style="background-color: #005991E5;">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://rumahningrat.com/">
                    <img src="{{ url('/assets/images/fav-icon/icon-ningrat.png') }}" alt="Logo" height="40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end text-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-headset"></i> Konsumen
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://trusmicorp.com/customer/login">After Sales</a>
                                </li>
                                <li><a class="dropdown-item" href="https://trusmicorp.com/rspstatus/">Cek Status KPR</a>
                                </li>
                                <li><a class="dropdown-item" href="https://trusmiverse.com/complaint/">Pengajuan
                                        Komplain</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ asset('assets/Booking_Mandiri.pdf') }}"
                                download="Booking_Mandiri" type="button">Panduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/about') }}">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <style>
        .menu-container {
            position: relative;
            display: inline-block;
        }

        .menu-icon {
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            /* background-color: #007bff; */
            color: white;
            border-radius: 5px;
        }

        .menu-dropdown {
            width: 200px;
            z-index: 200;
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            list-style: none;
            padding: 0;
            margin: 0;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            display: none;
            /* Default: hidden */
        }

        .menu-dropdown li {
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .menu-dropdown li:last-child {
            border-bottom: none;
        }

        .menu-dropdown li a {
            text-decoration: none;
            color: black;
            display: block;
        }

        .menu-dropdown li:hover {
            background: #f0f0f0;
        }
    </style>
    <section class="container-fluid" id="wrapper-detail">
        <div class="row">
            <div class="col-12 col-lg-8 p-0">
                <div class="owl-carousel" id="gallery-carousel-1">
                    <div><img src="{{ url('/assets/images/carousel') }}/1.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/1_2.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/1_3.jpg" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-2">
                    <div><img src="{{ url('/assets/images/carousel') }}/2.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/2_2.png" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-3">
                    <div><img src="{{ url('/assets/images/carousel') }}/3.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/3_2.png" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-4">
                    <div id="video_tour">
                    </div>
                    <!-- <iframe src="{{ url('/vt_view') }}" frameborder="0" width="100" height="100"
                                                                class="vt_view"></iframe> -->
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-5">
                    <embed src="{{ url('/poi_view/') . '/' . $project_add->id_project }}" class="vt_view">
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-6">
                    <div id="map">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-7">
                    <div><img src="{{ url('/assets/images/carousel') }}/7.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/7_2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 container-group p-0">
                <div class="aside-section" id="aside-section-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <h4>{{ $project['title_satu'] }}</h4>
                                    <h4 id="nama_project">{{ $project['title_dua'] }}</h4>
                                </div>
                                <div class="body-detail">
                                    {{-- <p><strong
                                            id="harga_project">{{ str_replace(',00', '', Number::currency($project['harga_jual'] ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                </p> --}}
                                    {{-- <p id="project_tipe">{{ $project['project_tipe'] }}</p> --}}
                                    <p>Rumah Tipe <span id="tipe_rumah">{{ $project['tipe_rumah'] }}</span> m²</p>
                                    <p id="alamat">{{ $project['alamat'] }}</p>
                                    <a id="getDetailLokasi" role="button" href="#">Lokasi
                                        selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#kprSubsidi"
                                            type="button" role="tab" aria-controls="kprSubsidi"
                                            aria-selected="true">KPR Subsidi</button>
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kprKormersil"
                                            type="button" role="tab" aria-controls="kprKormersil"
                                            aria-selected="false">KPR Kormersil</button>
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#onlyCash"
                                            type="button" role="tab" aria-controls="onlyCash"
                                            aria-selected="false">Cash</button>
                                    </div>
                                </nav>
                                @if ($id_project == 70)
                                    <div class="tab-content  mt-4" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="kprSubsidi" role="tabpanel"
                                            aria-labelledby="kprSubsidi-tab" tabindex="0">
                                            <div id="opsi-bayar-container">
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 10 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp.1.933.400</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 15 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp.1.438.400</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 20 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp.1.198.000</strong>/bln
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kprKormersil" role="tabpanel"
                                            aria-labelledby="kprKormersil-tab" tabindex="0">
                                            <div id="opsi-bayar-container">
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 15 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.536.200</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 20 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.300.600</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 25 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.166.800</strong>/bln
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="onlyCash" role="tabpanel"
                                            aria-labelledby="nav-contact-tab" tabindex="0">
                                            <div id="opsi-bayar-container">
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cash</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong
                                                            class="m-0">{{ str_replace(',00', '', Number::currency(194500000 ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cash Tahap 3 Bulan (5%)</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong
                                                            class="m-0">{{ str_replace(',00', '', Number::currency(204225000 ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cash Tahap 6 Bulan (9%)</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong
                                                            class="m-0">{{ str_replace(',00', '', Number::currency(212005000 ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="tab-content  mt-4" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="kprSubsidi" role="tabpanel"
                                            aria-labelledby="kprSubsidi-tab" tabindex="0">
                                            <div id="opsi-bayar-container">
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 10 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.730.400</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 15 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.287.300</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 20 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.072.200</strong>/bln
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kprKormersil" role="tabpanel"
                                            aria-labelledby="kprKormersil-tab" tabindex="0">
                                            <div id="opsi-bayar-container">
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 10 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.903.264</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 15 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.486.372</strong>/bln
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cicilan 20 Tahun</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="m-0">Rp. 1.291.688</strong>/bln
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="onlyCash" role="tabpanel"
                                            aria-labelledby="nav-contact-tab" tabindex="0">
                                            <div id="opsi-bayar-container">
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cash</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong
                                                            class="m-0">{{ str_replace(',00', '', Number::currency(174000000 ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cash Tahap 3 Bulan (5%)</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong
                                                            class="m-0">{{ str_replace(',00', '', Number::currency(182500000 ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                                    </div>
                                                </div>
                                                <div class="item-opsi px-3 py-2">
                                                    <div>
                                                        <p class="m-0">Cash Tahap 6 Bulan (9%)</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong
                                                            class="m-0">{{ str_replace(',00', '', Number::currency(189500000 ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside-section" id="aside-section-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <h4>Prioritas utama untuk konsumen kami</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="prioritas-container">
                                <div class="card card-item-prioritas">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-heart-fill"></i>
                                            Kesehatan
                                        </h5>
                                        <p class="card-text">Hidup Lebih Baik melalui penyediaan fasilitas Jogging Track,
                                            Lapangan Olahraga Multifungsi serta Ruang Terbuka Hijau.</p>
                                    </div>
                                </div>
                                <div class="card card-item-prioritas">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-people-fill"></i>
                                            Komunitas
                                        </h5>
                                        <p class="card-text">Menyediakan ruang untuk membangun jejaring koneksi/relasi
                                            antar warga melalui Komunitas Ekslusif Rumah Ningrat.</p>
                                    </div>
                                </div>
                                <div class="card card-item-prioritas">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-shield-fill"></i>
                                            Keamanan
                                        </h5>
                                        <p class="card-text">Memberikan rasa nyaman dan aman dengan perlindungan berlapis
                                            mulai dari One Gate System, Security 24 Jam, serta CCTV Area.</p>
                                    </div>
                                </div>
                                <div class="card card-item-prioritas">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-credit-card-fill"></i>
                                            Ekonomi
                                        </h5>
                                        <p class="card-text">Memberikan peluang untuk mendapatkan pemasukan tambahan serta
                                            menjadi Mitra Eksklusif Rumah Ningrat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mt-3">
                            <h5 class="text-center mb-3 col-12">Ulasan</h5>
                            <div class="col-12" id="ulasan-container">
                                @foreach ($ulasan as $item)
                                    <div class="item-ulasan">
                                        <div class="card rounded">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p class="text-primary">
                                                        <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </p>
                                                    <p>{{ $item['ulasan_at'] }}</p>
        </div>
        <p class="card-text">{{ $item['tags'] }}</p>
        <p class="card-text">{{ $item['ulasan'] }}</p>
        <p class="nama-review">{{ $item['nama'] }}</p>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </div> --}}
                    </div>
                </div>
                <div class="aside-section" id="aside-section-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <p>Dalam rangka merayakan Penghargaan Developer Terbaik Nasional, Kami memberikan
                                        <b>Gratis
                                            Pagar</b> pada Rumah Ningrat Edisi 2025 untuk Hidup Lebih Baik
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="bonus-container">
                                    <div class="card card-bonus text-center">
                                        <div class="card-bonus-body">
                                            <img src="{{ url('/assets') }}/images/icon/pagar.png" alt=""
                                                width="45px" height="45px">
                                            <h5>Pagar</h5>
                                            <p><s>Rp. 10.000.000</s></p>
                                            <p class="text-danger">Rp. 0</p>
                                            <p class="text-detail-card-bonus">Spesial hanya berlaku untuk booking di bulan
                                                ini!</p>
                                        </div>
                                    </div>
                                    <div class="card card-bonus text-center">
                                        <div class="card-bonus-body">
                                            <img src="{{ url('/assets') }}/images/icon/wall.png" alt=""
                                                width="45px" height="45px">
                                            <h5>Tembok Dapur</h5>
                                            <p><s>Rp. 2.000.000</s></p>
                                            <p class="text-danger">Rp. 0</p>
                                            <p class="text-detail-card-bonus">Spesial hanya berlaku untuk booking di bulan
                                                ini!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside-section" id="aside-section-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <h4>Fasilitas</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="container-fasilitas">
                                    @foreach ($fasilitas as $item)
                                        <div class="item-fasilitas">
                                            <div>
                                                {!! $item->icon !!}
                                            </div>
                                            {{-- <div>
                                            <img src="{{ url('/assets/images/icon') }}/bed.png" alt=""
                            width="16px" height="16px">
                        </div> --}}
                                            <div class="card-text">
                                                {{ $item->fasilitas }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <a id="getSpesifikasiDetail" role="button" href="#">Detail
                                    Spesifikasi</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ url('/vt_view') }}" target="_blank">Lihat 360 virtual view</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside-section" id="aside-section-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <h4>Dekat dengan</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tempat-container">
                                    @foreach ($fasilitasSekitar as $item)
                                        @php $category_id = $item->category_id @endphp
                                        <div class="item-tempat" onclick="getDekatDengan('{{ $category_id }}')"
                                            style="cursor: pointer">
                                            <div>
                                                @if ($item->category == 'Transportation')
                                                    <i class="fas fa-bus"></i>
                                                @elseif ($item->category == 'Pabrik')
                                                    <i class="fas fa-industry"></i>
                                                @elseif ($item->category == 'Pendidikan')
                                                    <i class="fas fa-school"></i>
                                                @elseif ($item->category == 'Minimarket')
                                                    <i class="fas fa-store"></i>
                                                @elseif ($item->category == 'Instansi')
                                                    <i class="fas fa-building"></i>
                                                @elseif ($item->category == 'Rumah Makan')
                                                    <i class="fas fa-utensils"></i>
                                                @elseif ($item->category == 'Coffe Shop')
                                                    <i class="fas fa-coffee"></i>
                                                @elseif ($item->category == 'Kontrakan')
                                                    <i class="fas fa-home"></i>
                                                @elseif ($item->category == 'Area Publik')
                                                    <i class="fas fa-street-view"></i>
                                                @elseif ($item->category == 'Keuangan')
                                                    <i class="fas fa-hand-holding-usd"></i>
                                                @elseif ($item->category == 'Tempat Ibadah')
                                                    <i class="fas fa-mosque"></i>
                                                @elseif ($item->category == 'Wisata dan Rekreasi')
                                                    <i class="fas fa-umbrella-beach"></i>
                                                @elseif ($item->category == 'Kesehatan')
                                                    <i class="fas fa-heartbeat"></i>
                                                @else
                                                    <i class="fas fa-shopping-bag"></i>
                                                @endif
                                            </div>
                                            {{-- <div>
                                            <img src="{{ url('/assets/images/icon') }}/sekolah.png"
                            alt="" width="16px" height="16px">
                        </div> --}}
                                            <div class="card-text">
                                                {{ $item->jml }} {{ $item->category }}
                                            </div>
                                        </div>
                                    @endforeach
                                    @php $category_id = $category_id ?? 0 @endphp
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <a href="#" role="button" onclick="getDekatDengan('{{ $category_id }}')">Detail
                                    Tempat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside-section" id="aside-section-6">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <h4>Blok Tersedia</h4>
                                </div>
                                <div class="body-detail">
                                    <div id="blok-container">
                                        @foreach ($blokTersedia as $blok)
                                            <div class="item-blok px-3 py-2">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p style="line-height: 10px" class="fw-bold">Blok
                                                        {{ $blok->blok }}
                                                    </p>
                                                    @if ($blok->sisa_unit >= 10)
                                                        <?php $ket_blok = 'Tersedia'; ?>
                                                    @elseif($blok->sisa_unit < 10 && $blok->sisa_unit > 3)
                                                        <?php $ket_blok = 'Kurang Dari ' . $blok->sisa_unit . ' unit'; ?>
                                                    @else
                                                        <?php $ket_blok = 'Sisa ' . $blok->sisa_unit . ' unit'; ?>
                                                    @endif
                                                    <p style="margin-bottom:0px;line-height: 10px">{{ $ket_blok }}</p>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center text-end">
                                                    <p style="line-height: 10px">Biaya Mulai</p>
                                                    @if ($blok->sisa_unit >= 10)
                                                        <p style="margin-bottom:0px;line-height: 10px; color: #000000;">
                                                            {{-- {{ $blok->terima_kunci }} --}} Rp. 1.000.000,-
                                                        </p>
                                                    @else
                                                        <p style="margin-bottom:0px;line-height: 10px; color: #DE0000;">
                                                            {{-- {{ $blok->terima_kunci }} --}} Rp. 1.000.000,-
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mt-4">
                            <div class="col-12">
                                <div class="header-detail text-center">
                                    <h4>Pilih Blok</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <select class="select-blok" name="blok" id="blok">
                                    <option value="">-- Pilih Blok --</option>
                                    @foreach ($bloks as $blok)
                                        <option value="{{ $blok->blok }}" data-harga="{{ $blok->terima_kunci }}"
                                            data-nominal="{{ $blok->nominal_booking }}" data-dp="{{ $blok->dp }}"
                                            data-harga_tanah="{{ $blok->harga_tanah }}"
                                            data-biaya_pagar="{{ $blok->biaya_pagar }}"
                                            data-biaya_tembok="{{ $blok->biaya_tembok }}"
                                            data-biaya_ipl="{{ $blok->biaya_ipl }}"
                                            data-biaya_hook="{{ $blok->biaya_hook }}"
                                            data-biaya_kelebihan_tanah="{{ $blok->biaya_kelebihan_tanah }}"
                                            data-biaya_bphtb="{{ $blok->biaya_bphtb }}" data-total="{{ $blok->total }}"
                                            data-potongan="{{ $blok->potongan }}"
                                            data-total_all="{{ $blok->total_all }}">Blok
                                            {{ $blok->blok }} {{ $blok->hook_klt }} {{ $blok->jml_booking }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col-10 text-center">
                                <p>Sudah dapat terima kunci dengan nominal</p>
                                <p class="text-danger" id="harga_blok">Rp.1.000.000</p>
                            </div>
                            <div class="col"></div>
                        </div> --}}
                    </div>
                </div>
                <div class="aside-section" id="aside-section-7">
                    <div class="container-fluid section-form">
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <h4>Data Diri Pembeli</h4>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <form class="form-booking" id="formBooking">
                                    @csrf
                                    <input type="hidden" class="form-control" name="id_project" id="id_project"
                                        value="{{ $project['id_project'] }}">
                                    <input type="hidden" name="nominal_booking" id="nominal_booking">
                                    <div class="mb-2">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" id="nama"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">No Handphone</label>
                                        <input type="tel" class="form-control" name="no_hp" id="no_hp"
                                            autocomplete="off" oninput="validasiNoHp(this)">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" name="tgl_lahir" id="tgl_lahir" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" name="tempat_lahir" id="tempat_lahir"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" name="jenis_kelamin" id="jenis_kl">
                                            <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                            <option value="L">Laki - laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">No KTP</label>
                                        <input type="number" class="form-control" name="no_ktp" id="no_ktp"
                                            autocomplete="off" oninput="validasiKtp(this)">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Kelurahan</label>
                                        <select class="form-control" name="id_kelurahan" id="id_kelurahan"
                                            style="min-height: 44px;">
                                            <option data-placeholder="true"></option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Alamat Lengkap</label>
                                        <textarea name="alamat" class="form-control" id="alamat_book" cols="30" rows="3" autocomplete="off"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Pendapatan</label>
                                        <input type="text" class="form-control" name="pendapatan" id="pendapatan"
                                            oninput="validasiPendapatan(this)" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" name="status" id="status">
                                            <option value="" selected>-- Pilih Status --</option>
                                            <option value="1">Lajang</option>
                                            <option value="2">Menikah</option>
                                            <option value="3">Cerai</option>
                                        </select>
                                    </div>
                                    <div class="d-none animate__animated animate__fadeIn" id="row_ktp_pg">
                                        <div class="mb-2">
                                            <label class="form-label">No KTP Pasangan</label>
                                            <input type="number" class="form-control" name="no_ktp_p" id="no_ktp_psg"
                                                autocomplete="off" oninput="validasiKtp(this)">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label">Nama Pasangan</label>
                                            <input type="text" class="form-control" name="nama_pasangan"
                                                id="nama_pasangan">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label">Tgl Lahir Pasangan</label>
                                            <input type="text" class="form-control" name="tgl_lahir_p"
                                                id="tgl_lahir_p" autocomplete="off">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label">Tempat Lahir Pasangan</label>
                                            <input type="text" class="form-control" name="tempat_lahir_p"
                                                id="tempat_lahir_p">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label">Jenis Kelamain Pasangan</label>
                                            <select class="form-select" name="jenis_kelamin_p" id="jenis_kelamin_p">
                                                <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                                <option value="L">Laki - laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label">Alamat Pasangan</label>
                                            <textarea name="alamat_p" class="form-control" id="alamat_p" cols="30" rows="3" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Sales</label>
                                        <select class="form-control" name="id_sales" id="id_sales"
                                            style="min-height: 44px;">
                                            <option data-placeholder="true"></option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Referral</label>
                                        <select class="form-control" name="kode_referral" id="kode_referral"
                                            style="min-height: 44px;">
                                            <option data-placeholder="true"></option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Skema Pembayaran</label>
                                        <select class="form-select" name="jenis_pembayaran" id="jenis_pembayaran">
                                            <option value="KPR FLPP" selected>KPR FLPP</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Cash Tahap 3 Bulan">Cash Tahap 3 Bulan</option>
                                            <option value="Cash Tahap 6 Bulan">Cash Tahap 6 Bulan</option>
                                            <option value="Cicilan Komersil">KPR Komersil</option>
                                        </select>
                                    </div>
                                    <div class="mb-4 mt-5">
                                        <h4 class="text-center">Biaya</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Booking</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-end" id="value_booking">Rp.500.000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Uang Muka DP</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div id="dpPotongan" class="d-none">
                                                <p class="text-decoration-line-through d-inline text-danger"
                                                    id="value_dp">
                                                    Rp.5.000.000</p>
                                                <p class=" d-inline">Rp. 0</p>
                                            </div>
                                            <div id="dpNonPotongan">
                                                <p class="d-inline" id="value_dp2">
                                                    Rp.5.000.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Pagar</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div id="pagarPotongan" class="d-none">
                                                <p class="text-decoration-line-through d-inline text-danger"
                                                    id="value_pagar">
                                                    Rp.10.000.000</p>
                                                <p class=" d-inline">Rp. 0</p>
                                            </div>
                                            <div id="pagarNonPotongan">
                                                <p class=" d-inline" id="value_pagar2">Rp.10.000.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Tembok Dapur</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div id="tembokPotongan" class="d-none">
                                                <p class="text-decoration-line-through d-inline text-danger "
                                                    id="value_tembok">Rp.2.000.000</p>
                                                <p class="d-inline">Rp. 0</p>
                                            </div>
                                            <div id="tembokNonPotongan">
                                                <p class="d-inline" id="value_tembok2">Rp.2.000.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Biaya IPL 2 Tahun</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div id="iplPotongan" class="d-none">
                                                <p class="text-decoration-line-through d-inline text-danger"
                                                    id="value_ipl">
                                                    Rp.2.400.000</p>
                                                <p class=" d-inline">Rp. 0</p>
                                            </div>
                                            <div id="iplNonPotongan">
                                                <p class=" d-inline" id="value_ipl2">Rp.2.400.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Hook</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline" id="value_hook">-</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="">Kelebihan Tanah</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline" id="value_kelta">-</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Biaya Lain-lain</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline" id="value_bphtb">Rp.8.750.000</p>
                                        </div>
                                    </div>
                                    <hr style="border: 1.5px solid black;" class="mb-2 mt-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="mb-1">Total</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline mb-1" id="value_subtotal">Rp. 28.650.000</p>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-12" id="potonganAwal">
                                            <button type="button" id="btn-potongan" class="btn btn-danger btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#agreementModal">
                                                Dapatkan Potongan Senilai <span id="value_potonganBtn">Rp.
                                                    19.400.000</span>
                                            </button>
                                        </div>
                                        <div class="col-6 d-none" id="potonganText">
                                            <p>Potongan</p>
                                        </div>
                                        <div class="col-6 text-end d-none" id="potonganTextVal">
                                            <p class="d-inline text-danger" id="value_potongan">Rp. 19.400.000
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Total Biaya</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline fw-bold" id="value_total_awal">Rp. 28.650.000</p>
                                            <p class="d-inline fw-bold d-none" id="value_total">Rp. 9.250.000</p>
                                        </div>
                                    </div>
                                    <div class="bank-section mt-5">
                                        <h4 class="text-center">Bank Tersedia</h4>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <img src="{{ url('/assets/images/icon') }}/bca.png" alt=""
                                                    width="75px" height="24px">
                                            </div>
                                            <div class="col-4">
                                                <img src="{{ url('/assets/images/icon') }}/bjb.png" alt=""
                                                    width="75px" height="24px">
                                            </div>
                                            <div class="col-4">
                                                <img src="{{ url('/assets/images/icon') }}/bri.png" alt=""
                                                    width="75px" height="24px">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <img src="{{ url('/assets/images/icon') }}/mandiri.png" alt=""
                                                    width="75px" height="24px">
                                            </div>
                                            <div class="col-4">
                                                <img src="{{ url('/assets/images/icon') }}/bni.png" alt=""
                                                    width="75px" height="24px">
                                            </div>
                                            <div class="col-4">
                                                <img src="{{ url('/assets/images/icon') }}/btn.png" alt=""
                                                    width="75px" height="24px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 mt-5">
                                        <h4 class="text-center">Pembayaran</h4>
                                    </div>
                                    <div class="mb-3">
                                        <p>Jenis Pembayaran</p>
                                    </div>
                                    <div id="form-section">
                                        <div class="mb-4">
                                            <div class="d-flex flex-wrap gap-3">
                                                <div class="payment-method">
                                                    <input type="radio" id="alfamart" name="payment" class="payment"
                                                        value="1" checked>
                                                    <label for="alfamart">
                                                        <img src="{{ url('/assets/images/icon/') }}/alfamart.png" />
                                                    </label>
                                                </div>
                                                <div class="payment-method">
                                                    <input type="radio" id="indomaret" name="payment" class="payment"
                                                        value="2">
                                                    <label for="indomaret">
                                                        <img src="{{ url('/assets/images/icon/') }}/indomaret.png" />
                                                    </label>
                                                </div>
                                                <div class="payment-method">
                                                    <input type="radio" id="virtual-account" name="payment"
                                                        class="payment" value="3">
                                                    <label for="virtual-account">
                                                        <img src="{{ url('/assets/images/icon/') }}/va.png" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="bank_group" class="d-none animate__animated animate__fadeIn">
                                            <div class="radio-button-group">
                                                <label class="radio-card">
                                                    <input type="radio" name="bank" value="bca" checked>
                                                    <div class="card-body">
                                                        <div class="check-box">
                                                            <div class="check-icon">✔</div>
                                                        </div>
                                                        <img src="{{ url('/assets/images/icon') }}/bca.png"
                                                            alt="BCA">
                                                    </div>
                                                </label>
                                                <label class="radio-card">
                                                    <input type="radio" name="bank" value="mandiri">
                                                    <div class="card-body">
                                                        <div class="check-box">
                                                            <div class="check-icon">✔</div>
                                                        </div>
                                                        <img src="{{ url('/assets/images/icon') }}/mandiri.png"
                                                            alt="Mandiri">
                                                    </div>
                                                </label>
                                                <label class="radio-card">
                                                    <input type="radio" name="bank" value="bri">
                                                    <div class="card-body">
                                                        <div class="check-box">
                                                            <div class="check-icon">✔</div>
                                                        </div>
                                                        <img src="{{ url('/assets/images/icon') }}/bri.png"
                                                            alt="BRI">
                                                    </div>
                                                </label>
                                                <label class="radio-card">
                                                    <input type="radio" name="bank" value="bni">
                                                    <div class="card-body">
                                                        <div class="check-box">
                                                            <div class="check-icon">✔</div>
                                                        </div>
                                                        <img src="{{ url('/assets/images/icon') }}/bni.png"
                                                            alt="BNI">
                                                    </div>
                                                </label>
                                                <label class="radio-card">
                                                    <input type="radio" name="bank" value="cimb">
                                                    <div class="card-body">
                                                        <div class="check-box">
                                                            <div class="check-icon">✔</div>
                                                        </div>
                                                        <img src="{{ url('/assets/images/icon') }}/cimb.png"
                                                            alt="cimb">
                                                    </div>
                                                </label>
                                                <label class="radio-card">
                                                    <input type="radio" name="bank" value="permata">
                                                    <div class="card-body">
                                                        <div class="check-box">
                                                            <div class="check-icon">✔</div>
                                                        </div>
                                                        <img src="{{ url('/assets/images/icon') }}/permata.png"
                                                            alt="permata">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sticky-container">
                    <div class="sticky-content d-flex justify-content-between align-items-center">
                        <div>
                            <div class="price text-dark" id="price">Rp.500.000</div>
                            <div class="note">*biaya booking + BI checking</div>
                        </div>
                        <button class="btn btn-primary" id="btn-booking" onclick="validasiBook()"
                            style="border-radius: 10px">Booking
                            Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('chat.app')
    @include('modal.lokasi_detail')
    @include('modal.spesifikasi_detail')
    @include('modal.sukses')
    @include('modal.dekat_dengan')
    @include('modal.potongan')

    {{-- <div class="chat-ai d-flex flex-column shadow-sm">
    <div><i class="bi bi-chat-dots"></i></div>
    <div>
        <p>Nira AI</p>
    </div>
</div> --}}
@endsection

@section('javascript')
    {{-- cekat AI --}}
    {{-- <script type="text/javascript">
        const urlai = `{{ url('/assets/js/') }}/chatai.js`
window.mychat = window.mychat || {};
// window.mychat.server = 'https://live.cekat.ai/widget.js';
window.mychat.server = urlai;
window.mychat.iframeWidth = '400px';
window.mychat.iframeHeight = '700px';
window.mychat.accessKey = 'Trusmi-lgeisqBy';
(function() {
var mychat = document.createElement('script');
mychat.type = 'text/javascript';
mychat.async = true;
mychat.src = window.mychat.server;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(mychat, s);
})();
</script> --}}

    <!-- jquery js -->
    <script src="{{ url('/assets/js') }}/vendor/jquery-3.6.2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- carousel js -->
    <script src="{{ url('/assets/js') }}/owl.carousel.min.js"></script>

    <!-- venobox js -->
    <script src="{{ url('/assets') }}/venobox/venobox.js"></script>

    <!--  animated-text js -->
    <script src="{{ url('/assets/js') }}/animated-text.js"></script>

    <!-- venobox min js -->
    <script src="{{ url('/assets') }}/venobox/venobox.min.js"></script>

    <!-- jquery scrollup js -->
    <script src="{{ url('/assets/js') }}/jquery.scrollUp.js"></script>

    <!-- slim select -->
    <script src="https://unpkg.com/slim-select@latest/dist/slimselect.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/slim-select@latest/dist/slimselect.css" />

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.9/dist/sweetalert2.all.min.js"
        integrity="sha256-zXU3hnKwOJq62DswpQcW5m0q0zoQY4UpTLYdmlxwJHg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.9/dist/sweetalert2.min.css"
        integrity="sha256-HivoIIkMGPypkWBoBzUEFAY/RZqAWSWLqW/MQFMBRXg=" crossorigin="anonymous">

    <!-- datetime picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r132/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

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
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById('video_tour');

            const video = document.createElement('video');
            video.src = `{{ url('/assets/video') . '/' . $project_add->video }}`;
            video.autoplay = true;
            video.loop = true;
            video.muted = true;
            video.setAttribute('playsinline', ''); // iOS autoplay
            video.setAttribute('disablePictureInPicture', ''); // Mencegah PiP
            video.setAttribute('controls', 'false');

            // Sembunyikan kontrol video sepenuhnya
            video.controls = false;

            // Mencegah video terinteraksi
            video.style.pointerEvents = 'none';

            container.appendChild(video);
        });


        const baseURL = document.querySelector('meta[name="base-url"]').getAttribute('content');

        function activateCarousel(sectionId, carouselId) {
            const section = $(sectionId);
            const carousel = $(carouselId);

            const position = section.position();
            const top = position.top;
            const outerHeight = section.outerHeight();

            if (top <= 80 && top > -outerHeight) {
                // Hide other carousels
                $('.owl-carousel').addClass('d-none');
                carousel.removeClass('d-none');
            }
            map.invalidateSize();
        }

        var bounds = [
            @json(explode(',', $project_add->coord_1)),
            @json(explode(',', $project_add->coord_2)),
            @json(explode(',', $project_add->coord_3)),
            @json(explode(',', $project_add->coord_4))
        ];
        // Titik pusat
        var center_point = @json(explode(',', $project_add->center));

        // Nilai extend dari database
        var extend = @json($project_add->extend);

        // Membuat bounds dengan padding dari extend
        var extendedBounds = L.latLngBounds(bounds).pad(extend);
        // var extendedBounds = L.latLngBounds(bounds).pad(1);
        var map = L.map('map', {
            maxBounds: extendedBounds,
            maxBoundsViscosity: 1.0
        }).setView(center_point, 18);
        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        // }).addTo(map);
        // const key = 'Q0RluLdskTtpcHzsahrp'; //khusus
        // const key = 'hP3RiELhMtFKqQl5dB60';//umum
        const key = 'hP3RiELhMtFKqQl5dB60'; // local
        const mtLayer = L.maptilerLayer({
            apiKey: key,
            style: L.MaptilerStyle.OUTDOOR, // optional
        }).addTo(map);


        function isMobile() {
            return window.innerWidth < 768;
        }

        function validasiKtp(input) {
            let value = input.value;
            if (value.length > 16) {
                value = value.slice(0, 16);
            }
            input.value = value.replace(/[^0-9]/g, '');
        }

        function validasiNoHp(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            input.value = value.replace(/-/g, '').replace(/_/g, '').replace(/\s/g, '');
            if (value.startsWith('0')) {
                input.value = '62' + value.slice(1);
            }
        }

        function validasiPendapatan(input) {
            let value = input.value.replace(/\D/g, '');
            value = new Intl.NumberFormat('id-ID', {
                minimumFractionDigits: 0
            }).format(value);
            input.value = value;
        }

        $(document).ready(function() {
            // potongan harga js
            $('#agreeCheckbox').on('change', function() {
                $('#okButton').prop('disabled', !this.checked);
            });
            $('#okButton').on('click', function() {
                $('#value_potongan').removeClass('d-none');
                $('#potonganAwal').addClass('d-none');
                $('#value_total_awal').addClass('d-none');
                $('#value_total').removeClass('d-none');
                $('#potonganText').removeClass('d-none');
                $('#potonganTextVal').removeClass('d-none');
                $('#agreementModal').modal('hide');
                $('#dpPotongan').removeClass('d-none');
                $('#dpNonPotongan').addClass('d-none');
                $('#pagarPotongan').removeClass('d-none');
                $('#pagarNonPotongan').addClass('d-none');
                $('#tembokPotongan').removeClass('d-none');
                $('#tembokNonPotongan').addClass('d-none');
                $('#iplPotongan').removeClass('d-none');
                $('#iplNonPotongan').addClass('d-none');
            });

            $('#map').find('a').remove();
            addLegend(map);
            const mobile = isMobile();
            var wind = $('.container-group');
            var sticky = $('#sticky-header');

            wind.on('scroll', function() {
                var scroll = wind.scrollTop();

                if (scroll > 0) {
                    mobile ? '' : sticky.addClass('d-none')
                } else {
                    sticky.removeClass('d-none');
                }
            });


            const blok_select = new SlimSelect({
                select: '#blok',
                placeholder: 'Pilih Blok',
                allowDeselect: true
            })

            // const kelurahan_select = new SlimSelect({
            //     select: '#kelurahan',
            //     allowDeselect: true
            // })

            $('input[name="tgl_lahir"]').mask("9999-99-99", {
                placeholder: 'YYYY-MM-DD'
            });

            $('input[name="tgl_lahir"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'), 10),
                autoUpdateInput: false // Membuat input awal kosong
            });

            // Menangani event apply untuk memperbarui nilai input
            $('input[name="tgl_lahir"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD')); // Format menjadi DD/MM/YYYY
            });

            $('input[name="tgl_lahir_p"]').mask("9999-99-99", {
                placeholder: 'YYYY-MM-DD'
            });

            $('input[name="tgl_lahir_p"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'), 10),
                autoUpdateInput: false // Membuat input awal kosong
            });

            // Menangani event apply untuk memperbarui nilai input
            $('input[name="tgl_lahir_p"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD')); // Format menjadi DD/MM/YYYY
            });

            $('.owl-carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                items: 1,
                navText: ["<i class='bi bi-caret-left-fill border-0'></i>",
                    "<i class='bi bi-caret-right-fill border-0'></i>"
                ],
            })

            // scroll carousel active check
            let currentActiveCarousel = null;
            $('.container-group').on('scroll', function() {
                const carousels = [{
                        section: '#aside-section-1',
                        carousel: '#gallery-carousel-1'
                    },
                    {
                        section: '#aside-section-2',
                        carousel: '#gallery-carousel-2'
                    },
                    {
                        section: '#aside-section-3',
                        carousel: '#gallery-carousel-3'
                    },
                    {
                        section: '#aside-section-4',
                        carousel: '#gallery-carousel-4'
                    },
                    {
                        section: '#aside-section-5',
                        carousel: '#gallery-carousel-5'
                    },
                    {
                        section: '#aside-section-6',
                        carousel: '#gallery-carousel-6'
                    },
                    {
                        section: '#aside-section-7',
                        carousel: '#gallery-carousel-7'
                    },
                    // { section: '#aside-section-8', carousel: '#gallery-carousel-8' },
                ];

                for (const {
                        section,
                        carousel
                    }
                    of carousels) {
                    if (activateCarousel(section, carousel)) {
                        if (currentActiveCarousel !== carousel) {
                            currentActiveCarousel = carousel;
                        }
                        break;
                    }
                }
            });

            //cek status user
            $('#status').change(function(e) {
                e.preventDefault();
                const status = $(this).val()
                if (status == 2) {
                    $('#row_ktp_pg').removeClass('d-none');
                    $('#row_ktp_pg').removeClass('animate__fadeOut');
                    $('#row_ktp_pg').addClass('animate__fadeIn');
                } else {
                    $('#row_ktp_pg').addClass('d-none');
                    $('#row_ktp_pg').removeClass('animate__fadeIn');
                    $('#row_ktp_pg').addClass('animate__fadeOut');
                }
            });

            // cek pembayaran
            $('[name="payment"]').change(function(e) {
                e.preventDefault();
                const payment = $("input[name='payment']:checked").val()
                payment == 3 ? $('#bank_group').removeClass('d-none') : $('#bank_group')
                    .addClass('d-none');
            });

            load_data_blok();
            load_svg(bounds);
            map.invalidateSize();
            var mapInitialized = false;
            var owl = $('.owl-carousel');

            $('svg').css('pointer-events', 'all');
            // $('path').css('pointer-events', 'all');
            // $('g').css('pointer-events', 'visiblePainted');

            // Tangkap klik pada elemen SVG
            $('svg').on('click', function(event) {
                // Hapus overlay dari elemen yang sebelumnya dipilih (jika ada)
                if (currentOverlay) {
                    currentOverlay.css({
                        fill: '',
                        'fill-opacity': ''
                    });
                    currentOverlay = null;
                }

                // Reset styling pada semua elemen <g>
                $('g').css({
                    stroke: '',
                    'stroke-width': ''
                });

                const target = event.target;
                console.log(target);

                let selectedBlok;
                let blokId;

                if (target.tagName === 'path') {
                    // Jika klik pada elemen path, ambil parent <g>
                    const parentG = $(target).closest('g');
                    blokId = parentG.attr('id');
                    selectedBlok = $(`#${blokId}`);
                } else if (target.tagName === 'text' || target.tagName === 'tspan') {
                    // Jika klik pada elemen text atau tspan, gunakan teks sebagai id
                    const textContent = $(target).text().trim();
                    blokId = textContent;
                    selectedBlok = $(`g[id="${blokId}"]`);
                }

                if (selectedBlok && selectedBlok.length) {
                    const blok_s = selectedBlok[0].id;
                    console.log("Blok yang dipilih:", blok_s);

                    // Terapkan overlay hitam di atas elemen yang dipilih
                    selectedBlok.css({
                        fill: 'black',
                        'fill-opacity': 0.5,
                        stroke: 'blue',
                        'stroke-width': '2'
                    });

                    // Simpan elemen yang sedang memiliki overlay agar bisa direset saat klik berikutnya
                    currentOverlay = selectedBlok;

                    // Jika objek blok_select tersedia (misalnya dari Slim Select), set nilai yang sesuai
                    if (typeof blok_select !== 'undefined' && blok_select) {
                        blok_select.setSelected(blok_s.toUpperCase());
                    } else {
                        Swal.fire({
                            icon: "warning",
                            title: "Opps!",
                            text: "Blok tersebut sudah terjual!",
                            showConfirmButton: true,
                            timer: 3000
                        });
                        // console.warn("Slim Select tidak ditemukan.");
                    }
                }
            });


        });

        let currentOverlay = null;


        function load_data_blok() {
            var id_project = $('#id_project').val();
            $.ajax({
                url: `{{ url('/status_blok/') }}/` + id_project,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('svg text').each(function() {
                        const textContent = $(this).text()
                            .trim(); // Ambil teks dan hilangkan spasi di awal/akhir
                        const cleanText = textContent.replace(/\s+/g, ''); // Hilangkan semua spasi

                        if (cleanText.length <= 4 && !textContent.startsWith('ROW') && !textContent
                            .startsWith('NS')) {
                            // Sembunyikan elemen jika panjang teks <= 4 dan tidak diawali dengan "ROW"
                            $(this).css('display', 'none');
                        }
                    });
                    $('svg [id$="-I"]').css('display', 'none');
                    $('svg g').css('pointer-events', 'none');
                    $('svg g').css('cursor', 'pointer');
                    $('svg text').css('cursor', 'pointer');
                    $('svg text').css('pointer-events', 'none');

                    response.forEach(value => {
                        $('svg g').each(function() {
                            const gId = $(this).attr('id');
                            if (gId == value.blok && value.status != 'Not Sale') {
                                $(this).css('pointer-events', 'visiblePainted');
                                $(this).find('path').css('pointer-events', 'all');
                                $(this).find('path').addClass('clickable');
                            }
                        });

                        // Tangani elemen <text> dengan nilai teks
                        $('svg text').each(function() {
                            const textContent = $(this).text().trim();
                            if (textContent == value.blok && value.status != 'Not Sale') {
                                $(this).css('pointer-events', 'all');
                                $(this).addClass('clickable');
                                // $(`svg text`).text(`${value.blok}`).addClass('clickable');
                            }
                        });
                        const blokText = value.blok; // Ambil nama blok dari response
                        const status = value.status; // Ambil status dari response
                        const textElement = $(`svg text:contains(${blokText})`);
                        const indicatorElement = $(`svg #${blokText}-I`);
                        textElement.css('display', 'none');
                        if (textElement.length > 0) {
                            if (status !== 'Not Sale') {
                                textElement.css('display', 'block');
                            } else {
                                textElement.css('display', 'none');
                            }
                        } else {
                            textElement.css('display', 'none');
                        }
                        indicatorElement.css('display', 'none');
                        if (indicatorElement.length > 0) {
                            if (status !== 'Not Sale') {
                                indicatorElement.css('display', 'block');
                            } else {
                                indicatorElement.css('display', 'none');
                            }
                        } else {
                            indicatorElement.css('display', 'none');
                        }

                        var defs = document.createElementNS("http://www.w3.org/2000/svg", "defs");
                        var gradient = document.createElementNS("http://www.w3.org/2000/svg",
                            "linearGradient");
                        gradient.setAttribute("id", `myGradient-${value.blok}`);



                        // $(`#path`).css("fill", `#B8B8B8`);

                        // Warna pertama (STATUS)
                        var stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
                        stop1.setAttribute("offset", "50%");

                        if (value.status == 'Not Sale') {
                            stop1.setAttribute("stop-color", "#458BC9");

                        } else if (value.status == 'Terjual') {
                            stop1.setAttribute("stop-color", "#FD8A8A");
                        } else if (value.status == 'Waiting List') {
                            stop1.setAttribute("stop-color", "yellow");
                            // } else if (value.status == 'Booking' || value.status == 'Akad' || value
                            //     .status == 'Booking Cash' || value.status == 'SP3K' || value.status ==
                            //     'Pindah Blok' || value.status == 'Bank') {
                            //     stop1.setAttribute("stop-color", "#FD8A8A");
                        } else if (value.status == 'Kosong') {
                            stop1.setAttribute("stop-color", "white");
                        } else {
                            stop1.setAttribute("stop-color", "#458BC9");
                        }


                        gradient.append(stop1);
                        // gradient.append(stop2);
                        defs.append(gradient);
                        // Menambahkan elemen gradient ke dalam SVG
                        $(`svg`).append(defs);
                        // Mengatur atribut fill elemen path dengan URL gradient yang diinginkan
                        $(`#${value.blok} path`).css("fill", `url(#myGradient-${value.blok})`);
                        $(`svg g[data-name="${value.blok}"] path`).css("fill",
                            `url(#myGradient-${value.blok})`);

                        // INDIKATOR
                        if (value.status_ontime == 'Ontime') {
                            $(`#${value.blok}-i`).css('fill', '#ADFF2F');
                            // total_ontime++;

                        } else if (value.status_ontime == 'Late') {
                            $(`#${value.blok}-i`).css('fill', 'red');
                            // total_late++;

                        } else { // -

                            $(`#${value.blok}-i`).css('fill', 'grey');
                            // total_no_spk++;

                        }

                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error loading JSON:', textStatus, errorThrown);
                }
            });

        }

        var svgOverlay;

        function load_svg(bounds) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', `{{ url('/assets/siteplan/') . '/' . $project_add->siteplan }}`,
                false); // false makes it synchronous
            xhr.send(null);

            if (xhr.status === 200) {
                var svgElement = document.createElement('div');
                svgElement.innerHTML = xhr.responseText;

                // Pastikan menggunakan bounds yang dikirim sebagai parameter
                svgOverlay = L.svgOverlay(svgElement.firstElementChild, bounds).addTo(map);

                var svgDocument = $(svgElement.firstElementChild);
            } else {
                console.error('Error loading SVG:', xhr.statusText);
            }

            $('svg #JU').css('fill', '#FFFF5A');
            // $('svg #JK').css('fill', '#B8B8B8');
        }

        // format rupiah
        function formatRupiah(angka) {
            let currency = new Intl.NumberFormat('id', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(angka);

            return currency
        }
        var blinkInterval;

        $('#blok').change(function(e) {
            e.preventDefault();
            var blok = $(this).val().trim();
            if (!blok) {

                // console.warn("Blok value is empty. No block selected.");
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Blok tersebut sudah terjual!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else {
                var selectedBlok = $(`#${$.escapeSelector(blok)}`);
                // console.log("Selected blok element:", selectedBlok);
                let harga = $(this).find(':selected').data('harga'),
                    nominal = $(this).find(':selected').data('nominal'),
                    dp = $(this).find(':selected').data('dp'),
                    hook = $(this).find(':selected').data('biaya_hook'),
                    ipl = $(this).find(':selected').data('biaya_ipl'),
                    pagar = $(this).find(':selected').data('biaya_pagar'),
                    kelebihan_tanah = $(this).find(':selected').data('biaya_kelebihan_tanah'),
                    bphtb = $(this).find(':selected').data('biaya_bphtb'),
                    total = $(this).find(':selected').data('total'),
                    potongan = $(this).find(':selected').data('potongan'),
                    total_all = $(this).find(':selected').data('total_all')
                $('#harga_blok').text(formatRupiah(harga));
                $('#price').text(formatRupiah(nominal));
                $('#nominal_booking').val(nominal);
                $('#value_booking').text(formatRupiah(nominal));
                $('#value_dp').text(formatRupiah(dp));
                $('#value_dp2').text(formatRupiah(dp));
                $('#value_hook').text(formatRupiah(hook));
                $('#value_ipl').text(formatRupiah(ipl));
                $('#value_ipl2').text(formatRupiah(ipl));
                $('#value_pagar').text(formatRupiah(pagar));
                $('#value_pagar2').text(formatRupiah(pagar));
                $('#value_kelta').text(formatRupiah(kelebihan_tanah));
                $('#value_bphtb').text(formatRupiah(bphtb));
                $('#value_subtotal').text(formatRupiah(total));
                $('#value_potongan').text(formatRupiah(potongan));
                $('#value_potonganBtn').text(formatRupiah(potongan));
                $('#value_total').text(formatRupiah(total_all));
                $('#value_total_awal').text(formatRupiah(total));
                clearInterval(blinkInterval);

                // Clear all blue strokes pada semua blok
                $('g').css({
                    'stroke': '',
                    'stroke-width': ''
                });

                var selectedBlok = $(`#${blok}`);

                if (currentOverlay) {
                    currentOverlay.css({
                        fill: '',
                        'fill-opacity': ''
                    });
                    currentOverlay = null;
                }

                // var bbox = selectedBlok.getBoundingClientRect(); // Mendapatkan posisi elemen relatif ke viewport
                // var svgContainer = svgOverlay._image.getBoundingClientRect(); // Mendapatkan posisi SVG di viewport

                // // Hitung posisi relatif terhadap SVG container
                // var relativeX = bbox.left + bbox.width / 2 - svgContainer.left;
                // var relativeY = bbox.top + bbox.height / 2 - svgContainer.top;

                // var bounds = svgOverlay.getBounds();
                // var svgWidth = svgContainer.width;
                // var svgHeight = svgContainer.height;

                // var scaleX = (bounds.getEast() - bounds.getWest()) / svgWidth;
                // var scaleY = (bounds.getSouth() - bounds.getNorth()) / svgHeight; // South - North karena koordinat peta terbalik

                // var lat = bounds.getNorth() - relativeY * scaleY; // Perhatikan arah Y yang terbalik
                // var lng = bounds.getWest() + relativeX * scaleX;

                // console.log(`Terbang ke koordinat: lat ${lat}, lng ${lng}`);

                // // Terbang ke blok yang dipilih
                // const zoomLevel = isMobile() ? 20 : 22;
                // map.flyTo([lat, lng], zoomLevel, {
                //     animate: true,
                //     duration: 1.5
                // });
                let isHighlighted = false;

                // Mulai animasi kedip
                blinkInterval = setInterval(function() {
                    if (isHighlighted) {
                        selectedBlok.css({
                            stroke: 'blue',
                            'stroke-width': '2',
                            'stroke-opacity': 1, // Full opacity
                            fill: 'black',
                            'fill-opacity': 0.5
                        });
                    } else {
                        selectedBlok.css({
                            'stroke': 'blue',
                            'stroke-width': '2',
                            'stroke-opacity': 0.3 // Kedip dengan opacity rendah
                        });
                    }
                    isHighlighted = !isHighlighted;
                }, 500); // Kedip setiap 0.5 detik
                currentOverlay = selectedBlok;
                // if (selectedBlok.length && svgOverlay) {
                // } else {
                //     console.log('di else');

                //     // var bbox = $(`svg g[data-name="${blok}"]`)[0].getBBox();
                //     // var bounds = svgOverlay.getBounds();
                //     // var svgWidth = svgOverlay._image.viewBox.baseVal.width;
                //     // var svgHeight = svgOverlay._image.viewBox.baseVal.height;
                //     // var scaleX = (bounds.getEast() - bounds.getWest()) / svgWidth;
                //     // var scaleY = (bounds.getNorth() - bounds.getSouth()) / svgHeight;
                //     // var centerX = bbox.x + bbox.width / 2;
                //     // var centerY = bbox.y + bbox.height / 2;
                //     // var adjustmentFactor = 0; // Sesuaikan jika perlu
                //     // var adjustedCenterY = centerY + bbox.height * adjustmentFactor;

                //     // var lat = bounds.getSouth() + (svgHeight - adjustedCenterY) * scaleY;
                //     // var lng = bounds.getWest() + centerX * scaleX;

                //     // // Terbang ke blok yang dipilih
                //     // const zoomLevel = isMobile() ? 20 : 22;
                //     // map.flyTo([lat, lng], zoomLevel, {
                //     //     animate: true,
                //     //     duration: 1.5
                //     // });
                //     // $(`svg g[data-name="${blok}"]`).css({
                //     //     'stroke': 'blue',
                //     //     'stroke-width': '2',
                //     //     'stroke-opacity': 1 // Full opacity
                //     // });

                //     // let isHighlighted = false;
                // }
            }
        });

        // ulasan js
        // const ulasan = document.getElementById('ulasan-container');

        // let isDragging = false;
        // let startX;
        // let scrollLeft;

        // ulasan.addEventListener('mousedown', (e) => {
        //     isDragging = true;
        //     ulasan.classList.add('dragging');
        //     startX = e.pageX - ulasan.offsetLeft;
        //     scrollLeft = ulasan.scrollLeft;
        // });

        // ulasan.addEventListener('mouseleave', () => {
        //     isDragging = false;
        //     ulasan.classList.remove('dragging');
        // });

        // ulasan.addEventListener('mouseup', () => {
        //     isDragging = false;
        //     ulasan.classList.remove('dragging');
        // });

        // ulasan.addEventListener('mousemove', (e) => {
        //     if (!isDragging) return;
        //     e.preventDefault();
        //     const x = e.pageX - ulasan.offsetLeft;
        //     const walk = (x - startX) * 2;
        //     ulasan.scrollLeft = scrollLeft - walk;
        // });

        $('#jenis_kl').on('change', function() {
            var selectedValue = $(this).val();
            console.log(selectedValue);
            if (selectedValue == 'l') {
                $('#jenis_kelamin_p').val('p');
            } else {
                $('#jenis_kelamin_p').val('l');
            }
        });

        // validasi booking
        function validasiBook() {
            let nama = $('#nama').val(),
                no_hp = $('#no_hp').val(),
                tgl_lahir = $('#tgl_lahir').val(),
                tempat_lahir = $('#tempat_lahir').val(),
                tempat_lahir_p = $('#tempat_lahir_p').val(),
                jenis_kl = $('#jenis_kl').find(":selected").val(),
                jenis_kelamin_p = $('#jenis_kelamin_p').find(":selected").val(),
                no_ktp = $('#no_ktp').val(),
                alamat = $('#alamat_book').val(),
                alamat_p = $('#alamat_p').val(),
                pendapatan = $('#pendapatan').val(),
                status = $('#status').find(":selected").val(),
                no_ktp_psg = $('#no_ktp_psg').val(),
                nama_pasangan = $('#nama_pasangan').val(),
                payment = $("input[name='payment']:checked").val(),
                bank = $("input[name='bank']:checked").val(),
                blok = $('#blok').val()
            kelurahan_val = kelurahanSelect.getSelected();
            kelurahan = kelurahan_val.toString();
            sales_val = salesSelect.getSelected();
            sales = sales_val.toString();
            referral_val = referralSelect.getSelected();
            referral = referral_val.toString();

            if (blok == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Blok belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (nama == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Nama belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (no_hp == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "No HP belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (tgl_lahir == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Tanggal lahir belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (tempat_lahir == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Tempat lahir belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (jenis_kl == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Jenis kelamin belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (no_ktp == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "No KTP belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (alamat == '' || alamat == null) {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Alamat belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (kelurahan == null || kelurahan == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Kelurahan belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (pendapatan == '' || pendapatan == null || pendapatan == 0) {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Pendapatan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (status == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Status belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (status == 2 && no_ktp_psg == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "No KTP Pasangan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (status == 2 && nama_pasangan == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Nama Pasangan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (status == 2 && tgl_lahir_p == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Tanggal lahir Pasangan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (status == 2 && tempat_lahir_p == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Tempat lahir Pasangan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (status == 2 && jenis_kelamin_p == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Jenis kelamin Pasangan belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (status == 2 && alamat_p == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Alamat Pasangan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (payment == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Payment belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else if (payment == 3 && bank == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Bank belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
            } else {
                Swal.fire({
                    title: 'Submit!',
                    text: 'Data pada form sudah benar?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var form = $('#formBooking')[0]; // Ambil elemen DOM dari jQuery
                        var formData = new FormData(form); // Buat objek FormData

                        formData.append('blok', blok);

                        // set pendapatan to form
                        var pendapatanValue = $('#pendapatan').val().replace(/\./g, '');
                        formData.set('pendapatan', pendapatanValue);
                        $.ajax({
                            url: `${baseURL}/simpan_booking`, // Sesuaikan endpoint API
                            type: 'POST',
                            dataType: 'json',
                            data: formData,
                            processData: false, // Jangan proses data
                            contentType: false, // Jangan tetapkan content-type secara otomatis
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content') // Jika diperlukan CSRF
                            },
                            beforeSend: function() {
                                $('#btn-booking').attr('disabled', true);
                            },
                            success: function(response) {
                                if (response.status) {
                                    $('#bayarGci').attr('href',
                                        `https://trusmicorp.com/rspproject/paygate/q/${response.id_gci}`
                                    );
                                    $('#expired_time').text(response.expired_time);
                                    $("#modalSukses").modal('show');

                                    $('#formBooking')[0].reset();
                                } else {
                                    Swal.fire({
                                        icon: "warning",
                                        title: "Reject!",
                                        text: response.message,
                                        showConfirmButton: false,
                                        timer: 3000
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                // console.error(`Error: ${error}`);
                                Swal.fire({
                                    icon: "error",
                                    title: status,
                                    text: error,
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                            },
                            complete: function() {
                                $('#btn-booking').attr('disabled', false);
                            }
                        });
                    }
                });
            }

        }

        function addLegend(map) {
            var legend = L.control({
                position: 'bottomright'
            });

            legend.onAdd = function() {
                var div = L.DomUtil.create('div', 'legend card shadow-sm text-center leaflet-bottom-center');
                var legendContent = $('<div>').addClass('legend-content d-flex flex-column p-1');

                // Ubah dari flex-wrap ke flex-column agar per item ke bawah
                var statusRow = $('<div>').addClass('d-flex flex-column align-items-start');

                var statusItems = [{
                        color: 'white',
                        border: '1px solid #ccc',
                        text: 'Kosong'
                    },
                    {
                        color: 'yellow',
                        text: 'Waiting List'
                    },
                    {
                        color: '#FD8A8A',
                        text: 'Terjual'
                    },
                    {
                        color: '#458BC9',
                        text: 'Not Sale'
                    }
                ];

                function appendItems(items, container) {
                    items.forEach(function(item) {
                        var legendItem = $('<div>').addClass('d-flex align-items-center mb-1 item_legends');
                        var box = $('<span>').addClass('legend-box me-2').css({
                            display: 'inline-block',
                            background: item.color,
                            border: item.border || 'none'
                        });
                        legendItem.append(box).append(`<span class="small">${item.text}</span>`);
                        container.append(legendItem);
                    });
                }

                appendItems(statusItems, statusRow);

                legendContent.append(
                    `<small class="text-secondary mb-2"><i class="fa fa-info-circle small"></i>Tap untuk<br>memilih blok</small>`
                );
                legendContent.append(statusRow);

                $(div).append(legendContent);

                return div;
            };

            legend.addTo(map);
        }
    </script>
    @include('modal.lokasi_detail_js')
    @include('modal.spesifikasi_detail_js')
    @include('modal.dekat_dengan_js')
    @include('chat.jsChat')

    <script>
        let kelurahanSelect = new SlimSelect({
            select: '#id_kelurahan',
            settings: {
                placeholderText: 'Pencarian minimal harus 4 huruf',
            },
            events: {
                search: (search, currentData) => {
                    return new Promise((resolve, reject) => {
                        if (search.length <= 4) {
                            return reject('Pencarian minimal harus 4 karakter')
                        }

                        // Fetch random first and last name data
                        fetch(`{{ url('/search-kelurahan') }}?q=${search}`, {
                                method: 'GET',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                            })
                            .then((response) => response.json())
                            .then((data) => {
                                // Take the data and create an array of options
                                // excluding any that are already selected in currentData
                                const options = data
                                    .filter((kelurahan) => {
                                        return !currentData.some((optionData) => {
                                            return optionData.value ===
                                                `${kelurahan.kelurahan} ${kelurahan.kecamatan} ${kelurahan.kota}`
                                        })
                                    })
                                    .map((kelurahan) => {
                                        return {
                                            text: `Kel. ${kelurahan.kelurahan} Kec. ${kelurahan.kecamatan} ${kelurahan.kota}`,
                                            value: `${kelurahan.id_kelurahan}`,
                                        }
                                    })

                                resolve(options)
                            })
                    })
                }
            }
        })


        function debouncePromise(func, wait) {
            let timeout;
            return function(...args) {
                clearTimeout(timeout);
                return new Promise((resolve, reject) => {
                    timeout = setTimeout(() => {
                        func(...args)
                            .then(resolve)
                            .catch(reject);
                    }, wait);
                });
            };
        }

        let salesSelect = new SlimSelect({
            select: "#id_sales",
            settings: {
                placeholderText: 'Pencarian minimal harus 2 huruf',
            },
            events: {
                search: debouncePromise((search, currentData) => {
                    return new Promise((resolve, reject) => {
                        if (search.length < 2) {
                            reject("Pencarian minimal harus 2 karakter");
                            return;
                        }

                        fetch(`{{ url('/search-sales') }}?q=${search}`, {
                                method: "GET",
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                            })
                            .then((response) => response.json())
                            .then((data) => {
                                // Take the data and create an array of options
                                // excluding any that are already selected in currentData
                                const options = data
                                    .filter((sales) => {
                                        return !currentData.some((optionData) => {
                                            return optionData.value ===
                                                `${sales.username}`
                                        })
                                    })
                                    .map((sales) => {
                                        return {
                                            text: `${sales.username}`,
                                            value: `${sales.id_user}`,
                                        }
                                    })

                                resolve(options)
                            })
                    });
                }, 500) // Delay of 300 ms
            }
        });


        let referralSelect = new SlimSelect({
            select: "#kode_referral",
            settings: {
                placeholderText: 'Pencarian minimal harus 2 huruf',
            },
            events: {
                search: debouncePromise((search, currentData) => {
                    return new Promise((resolve, reject) => {
                        if (search.length < 2) {
                            reject("Pencarian minimal harus 2 karakter");
                            return;
                        }

                        fetch(`{{ url('/search-referral') }}?q=${search}`, {
                                method: "GET",
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                            })
                            .then((response) => response.json())
                            .then((data) => {
                                // Take the data and create an array of options
                                // excluding any that are already selected in currentData
                                const options = data
                                    .filter((referral) => {
                                        return !currentData.some((optionData) => {
                                            return optionData.value ===
                                                `${referral.referral_name}`
                                        })
                                    })
                                    .map((referral) => {
                                        return {
                                            text: `${referral.kode_referral} - ${referral.referral_name}`,
                                            value: `${referral.kode_referral}`,
                                        }
                                    })

                                resolve(options)
                            })
                    });
                }, 500) // Delay of 300 ms
            }
        });
    </script>
@endsection
