@extends('detail.app')

@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rumah Ningrat</title>
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

.leaflet-overlay-pane svg {
  pointer-events: auto; /* Pastikan SVG dapat menangkap klik */
}
.leaflet-overlay-pane svg .clickable {
  pointer-events: auto; /* Pastikan SVG dapat menangkap klik */
}
.leaflet-overlay-pane svg g {
  pointer-events: auto; /* Pastikan SVG dapat menangkap klik */
}



    </style>
@endsection

@section('content')
    <div class="stikcy-nav-container" id="sticky-header">
        <nav class="navbar p-0" style="background-color: #005991E5">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('/assets/images/fav-icon/icon-ningrat.png') }}" alt="Logo" height="40px">
                </a>
                <button type="button" class="btn btn-primary btn-sm">Masuk <i class="bi bi-person"></i></button>
            </div>
        </nav>
    </div>
    <section class="container-fluid" id="wrapper-detail">
        <div class="row">
            <div class="col-12 col-lg-8 pl-0 pr-0">
                <div class="owl-carousel bg-info" id="gallery-carousel-1">
                    <div><img src="{{ url('/assets/images/carousel') }}/1.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/1.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/1.png" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-2">
                    <div><img src="{{ url('/assets/images/carousel') }}/2.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/2.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/2.png" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-3">
                    <div><img src="{{ url('/assets/images/carousel') }}/3.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/3.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/3.png" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-4">
                    <div id="video_tour">
                    </div>
                    <div class="vt_view">
                        <iframe src="{{ url('/vt_view') }}" frameborder="0" width="100%" height="100%"></iframe>
                    </div>

                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-5">
                    <div class="vt_view">
                        <iframe src="{{ url('/poi_view') }}" frameborder="0" width="100%" height="100%"></iframe>
                    </div>
                </div>
                <div class="d-none owl-hidden" id="gallery-carousel-6">
                    <div id="map">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-7">
                    <div><img src="{{ url('/assets/images/carousel') }}/7.png" alt="">
                    </div>
                    <div><img src="{{ url('/assets/images/carousel') }}/8.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 container-group pl-0 pr-0 mb-5">
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
                                <div class="tab-content  mt-4" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="kprSubsidi" role="tabpanel"
                                        aria-labelledby="kprSubsidi-tab" tabindex="0">
                                        <div id="opsi-bayar-container">
                                            <div class="item-opsi px-3 py-2">
                                                <div>
                                                    <p class="m-0">Cicilan 10 Tahun</p>
                                                </div>
                                                <div class="text-end">
                                                    <strong class="m-0">Rp.1.730.400</strong>/bln
                                                </div>
                                            </div>
                                            <div class="item-opsi px-3 py-2">
                                                <div>
                                                    <p class="m-0">Cicilan 15 Tahun</p>
                                                </div>
                                                <div class="text-end">
                                                    <strong class="m-0">Rp.1.287.300</strong>/bln
                                                </div>
                                            </div>
                                            <div class="item-opsi px-3 py-2">
                                                <div>
                                                    <p class="m-0">Cicilan 20 Tahun</p>
                                                </div>
                                                <div class="text-end">
                                                    <strong class="m-0">Rp.1.072.200</strong>/bln
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
                                                    <strong class="m-0">Rp.1.933.400</strong>/bln
                                                </div>
                                            </div>
                                            <div class="item-opsi px-3 py-2">
                                                <div>
                                                    <p class="m-0">Cicilan 15 Tahun</p>
                                                </div>
                                                <div class="text-end">
                                                    <strong class="m-0">Rp. 1.198.000</strong>/bln
                                                </div>
                                            </div>
                                            <div class="item-opsi px-3 py-2">
                                                <div>
                                                    <p class="m-0">Cicilan 20 Tahun</p>
                                                </div>
                                                <div class="text-end">
                                                    <strong class="m-0">Rp.1.072.200</strong>/bln
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="onlyCash" role="tabpanel"
                                        aria-labelledby="nav-contact-tab" tabindex="0">
                                        <div id="opsi-bayar-container">
                                            <div class="item-opsi px-3 py-2">
                                                <div>
                                                    <p class="m-0">Tanpa Cicilan</p>
                                                </div>
                                                <div class="text-end">
                                                    <strong
                                                        class="m-0">{{ str_replace(',00', '', Number::currency($project['harga_jual'] ?? 0, in: 'IDR', locale: 'id_ID')) }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                        <p class="card-text">Mendukung kesehatan dengan fasilitas
                                            jogging
                                            tack,
                                            lapangan olahraga dan lainnya</p>
                                    </div>
                                </div>
                                <div class="card card-item-prioritas">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-people-fill"></i>
                                            Komunitas
                                        </h5>
                                        <p class="card-text">Layanan marketplace, serviceplace
                                            hingga
                                            hobi
                                            warga rumah ningrat</p>
                                    </div>
                                </div>
                                <div class="card card-item-prioritas">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-shield-fill"></i>
                                            Keamanan
                                        </h5>
                                        <p class="card-text">Prioritas keamanan warga dengan CCTV
                                            area,
                                            tembok
                                            keliling dan one gate system</p>
                                    </div>
                                </div>
                                <div class="card card-item-prioritas">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-credit-card-fill"></i>
                                            Ekonomi
                                        </h5>
                                        <p class="card-text">Jual beli dan service dalam satu
                                            aplikasi
                                            khusus
                                            warga rumah ningrat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5 class="text-center mb-3 col-12">Ulasan</h5>
                            <div class="col-12" id="ulasan-container">
                                <div class="item-ulasan">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <p class="text-primary"><i class="bi bi-star-fill"></i> <i
                                                        class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                                </p>
                                                <p>Des 2024</p>
                                            </div>
                                            <p class="card-text">Rumahnya keren, clean</p>
                                            <p class="card-text">Memilih Rumah Ningrat adalah keputusan
                                                yang tepat! Desain rumah elegan dan lingkungan asri
                                                benar-benar membuat nyaman.</p>
                                            <p class="nama-review">Fujiyanto Hasan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-ulasan">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <p class="text-primary"><i class="bi bi-star-fill"></i> <i
                                                        class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                                </p>
                                                <p>Des 2024</p>
                                            </div>
                                            <p class="card-text">Rumahnya keren, clean</p>
                                            <p class="card-text">Memilih Rumah Ningrat adalah keputusan
                                                yang tepat! Desain rumah elegan dan lingkungan asri
                                                benar-benar membuat nyaman.</p>
                                            <p class="nama-review">Fujiyanto Hasan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside-section" id="aside-section-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <p>Dalam Rangka menjadi devloper terbaik Kami berikan <strong>Free pagar</strong> dan
                                        <strong>Tembok keliling</strong> untuk rumah Edisi tahun 2025
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
                                            <h5>Pagar Besi</h5>
                                            <p><s>Rp. 10.000.000</s></p>
                                            <p class="text-danger">Rp. 0</p>
                                            <p class="text-detail-card-bonus">Dibangun dengan tembok
                                                keliling
                                                untuk privasi anda</p>
                                        </div>
                                    </div>
                                    <div class="card card-bonus text-center">
                                        <div class="card-bonus-body">
                                            <img src="{{ url('/assets') }}/images/icon/wall.png" alt=""
                                                width="45px" height="45px">
                                            <h5>Tembok Dapur</h5>
                                            <p><s>Rp. 2.000.000</s></p>
                                            <p class="text-danger">Rp. 0</p>
                                            <p class="text-detail-card-bonus">Dilengkapi tembok dapur
                                                belakang
                                                setinggi 1,5 meter</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col text-center">
                                <p>Program ini kami dedikasikan untuk konsumen dengan kualitas matrial besi terbaik sehingga
                                    bisa menghemat sampai dengan 10 juta dengan free pagar</p>
                                <p>Dilengkapi dengan tembok dapur dengan kualitas bata habel terbaik</p>
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
                            <div class="col-12">
                                <a role="button" id="getSpesifikasiDetail" data-bs-toggle="modal"
                                    data-bs-target="#modalSpesifikasi">Detail
                                    Spesifikasi</a>
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
                                        <div class="item-tempat">
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
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <a href="#" role="button" id="getDekatDengan">Detail Tempat</a>
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
                                                <div class="d-flex flex-column">
                                                    <p style="line-height: 10px" class="fw-bold">Blok
                                                        {{ $blok->blok }}</p>
                                                    <p style="line-height: 10px">Sisa {{ $blok->sisa_unit }} unit</p>
                                                </div>
                                                <div class="d-flex flex-column text-end">
                                                    <p style="line-height: 10px">Biaya Mulai</p>
                                                    <p style="line-height: 10px; color: #DE0000;">
                                                        {{ $blok->terima_kunci }}
                                                    </p>
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
                                            {{ $blok->blok }}</option>
                                        Blok {{ $blok->blok }}</option>
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
                                    <input type="hidden" class="form-control" name="id_project"
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
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" name="jenis_kelamin" id="jenis_kl">
                                            <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                            <option value="l">Laki - laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">No KTP</label>
                                        <input type="number" class="form-control" name="no_ktp" id="no_ktp"
                                            autocomplete="off" oninput="validasiKtp(this)">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat_book"
                                            autocomplete="off">
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
                                            <p class="text-decoration-line-through d-inline text-danger" id="value_dp">Rp.5.000.000</p>
                                            <p class=" d-inline">Rp. 0</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Biaya BPHTP</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline" id="value_bphtb">Rp.8.750.000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Pagar</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-decoration-line-through d-inline text-danger" id="value_pagar">
                                                Rp.10.000.000</p>
                                            <p class=" d-inline">Rp. 0</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Tembok Keliling</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-decoration-line-through d-inline text-danger "
                                                id="value_tembok">Rp.2.000.000</p>
                                            <p class="d-inline">Rp. 0</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Biaya IPL 2 Tahun</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-decoration-line-through d-inline text-danger" id="value_ipl">
                                                Rp.2.400.000</p>
                                            <p class=" d-inline">Rp. 0</p>
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
                                    <hr style="border: 1.5px solid black;" class="mb-2 mt-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="mb-1">Total</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline mb-1" id="value_subtotal">Rp. 28.650.000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Potongan</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline text-danger" id="value_potongan">Rp. 19.400.000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Total Biaya</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="d-inline fw-bold" id="value_total">Rp. 9.250.000</p>
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

    {{-- <div class="chat-ai d-flex flex-column shadow-sm">
    <div><i class="bi bi-chat-dots"></i></div>
    <div>
        <p>Nira AI</p>
    </div>
</div> --}}
@endsection

@section('javascript')
    <script type="text/javascript">
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
    </script>

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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById('video_tour');

            const video = document.createElement('video');
            video.src = `{{ url('/assets/video') }}/bekasi.mp4`;
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
            [-6.397245, 107.068464],
            [-6.397245, 107.073051],
            [-6.400081, 107.073051],
            [-6.400081, 107.068464]
        ];
        var center_point = [-6.398496, 107.071440];
        var extendedBounds = L.latLngBounds(bounds).pad(1500 / 111320);
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
            console.log(value)
            if (value.length > 16) {
                value = value.slice(0, 16);
            }
            input.value = value.replace(/[^0-9]/g, '');
        }

        function validasiNoHp(input) {
            let value = input.value;
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

            $('input[name="tgl_lahir"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'), 10),
                autoUpdateInput: false // Membuat input awal kosong
            });

            // Menangani event apply untuk memperbarui nilai input
            $('input[name="tgl_lahir"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY')); // Format menjadi DD/MM/YYYY
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

            owl.on('translate.owl.carousel', function() {
                if (!mapInitialized) {
                    // console.log("Inisialisasi Map Pertama Kali");
                    // map = L.map('map').setView([51.505, -0.09], 13);  // Inisialisasi pertama kali
                    // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    //     maxZoom: 19,
                    // }).addTo(map);
                    map.invalidateSize(); // Paksa resize setelah inisialisasi
                    mapInitialized = true; // Update flag agar tidak inisialisasi berulang
                }
            });
            owl.on('changed.owl.carousel', function(e) {
                map.invalidateSize();
                // console.log("current: ", e.relatedTarget.current())
                // console.log("current: ",e.item.index) //same
                // console.log("total: ",e.item.count)   //total
            })

            owl.on('initialized.owl.carousel', function() {
                setTimeout(function() {
                    map.invalidateSize();
                    // console.log("Map size invalidated on init");
                }, 300); // Delay untuk memastikan semua rendering selesai
            });

        });


        function load_data_blok() {
            $.ajax({
                url: `{{ url('/') }}/dummy.json`,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // console.log(value);
                    // KASIH WARNA

                    // resume status
                    total_akad = 0;
                    total_booking_cash = 0;
                    total_booking = 0;
                    total_bank = 0;
                    total_sp3k = 0;
                    total_kosong = 0;
                    total_not_sale = 0;
                    total_pindah_blok = 0;

                    // resume progres
                    total_persen_0 = 0;
                    total_persen_10 = 0;
                    total_persen_30 = 0;
                    total_persen_60 = 0;
                    total_persen_85 = 0;
                    total_persen_100 = 0;

                    // resume indicator
                    total_ontime = 0;
                    total_late = 0;
                    total_no_spk = 0;


                    total_unit = 0;

                    response.forEach(value => {
                        $('#select_blok').append(
                            `<option value="${value.blok}">${value.blok}</option>`);

                        var defs = document.createElementNS("http://www.w3.org/2000/svg", "defs");
                        var gradient = document.createElementNS("http://www.w3.org/2000/svg",
                            "linearGradient");
                        gradient.setAttribute("id", `myGradient-${value.blok}`);

                        var descText = $(`#${value.blok}`).find('desc').text().replace(/\s+/g, '');
                        var descArray = descText.split(',');

                        $(`#path`).css("fill", `#D3D3D3`);

                        if (descArray[1] == 'U') {
                            // UTARA
                            gradient.setAttribute("x1", "0%");
                            gradient.setAttribute("y1", "0%");
                            gradient.setAttribute("x2", "0%");
                            gradient.setAttribute("y2", "100%");

                        } else if (descArray[1] == 'S') {
                            // SELATAN
                            gradient.setAttribute("x1", "0%");
                            gradient.setAttribute("y1", "100%");
                            gradient.setAttribute("x2", "0%");
                            gradient.setAttribute("y2", "0%");

                        } else if (descArray[1] == 'B') {
                            // BARAT
                            gradient.setAttribute("x1", "0%");
                            gradient.setAttribute("y1", "0%");
                            gradient.setAttribute("x2", "100%");
                            gradient.setAttribute("y2", "0%");

                        } else if (descArray[1] == 'T') {
                            // TIMUR
                            gradient.setAttribute("x1", "100%");
                            gradient.setAttribute("y1", "0%");
                            gradient.setAttribute("x2", "0%");
                            gradient.setAttribute("y2", "0%");

                        }


                        // Warna pertama (STATUS)
                        var stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
                        stop1.setAttribute("offset", "50%");

                        if (value.status == 'Not Sale') {
                            stop1.setAttribute("stop-color", "#C3C28E");
                            total_not_sale++;

                        } else if (value.status == 'Akad') {
                            stop1.setAttribute("stop-color", "#B3E5BE");
                            total_akad++;

                        } else if (value.status == 'Booking Cash') {
                            stop1.setAttribute("stop-color", "#45b6fe");
                            total_booking_cash++;

                        } else if (value.status == 'Booking') {
                            stop1.setAttribute("stop-color", "#FD8A8A");
                            total_booking++;

                        } else if (value.status == 'SP3K') {
                            stop1.setAttribute("stop-color", "#FDFFAE");
                            total_sp3k++;

                        } else if (value.status == 'Kosong') {
                            stop1.setAttribute("stop-color", "white");
                            total_kosong++;

                        } else if (value.status == 'Pindah Blok') {
                            stop1.setAttribute("stop-color", "#990066");
                            total_pindah_blok++;

                        } else { // Bank
                            stop1.setAttribute("stop-color", "#B983FF");
                            total_bank++;

                        }

                        // // Resume Status
                        // $('#total_akad').html(total_akad);
                        // $('#total_booking_cash').html(total_booking_cash);
                        // $('#total_booking').html(total_booking);
                        // $('#total_bank').html(total_bank);
                        // $('#total_sp3k').html(total_sp3k);
                        // $('#total_kosong').html(total_kosong);
                        // $('#total_not_sale').html(total_not_sale);
                        // $('#total_pindah_blok').html(total_pindah_blok);



                        // Warna kedua (PROGRES)
                        var stop2 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
                        stop2.setAttribute("offset", "50%");

                        // console.info(parseInt(value.progres));

                        if (parseInt(value.progres) < 10) {
                            stop2.setAttribute("stop-color", "#B9F3FC");
                            total_persen_0++;

                        } else if (parseInt(value.progres) >= 10 && parseInt(value.progres) < 30) {
                            stop2.setAttribute("stop-color", "#9F8772");
                            total_persen_10++;

                        } else if (parseInt(value.progres) >= 30 && parseInt(value.progres) < 60) {
                            stop2.setAttribute("stop-color", "#B7B7B7");
                            total_persen_30++;

                        } else if (parseInt(value.progres) >= 60 && parseInt(value.progres) < 85) {
                            stop2.setAttribute("stop-color", "#1572A1");
                            total_persen_60++;

                        } else if (parseInt(value.progres) >= 85 && parseInt(value.progres) < 100) {
                            stop2.setAttribute("stop-color", "#FAAB78");
                            total_persen_85++;

                        } else if (parseInt(value.progres) > 99) {
                            stop2.setAttribute("stop-color", "#FF8DC7");
                            total_persen_100++;

                        } else {
                            stop2.setAttribute("stop-color", "black");

                            // console.info(`${value.blok} - ${parseInt(value.progres)}`)
                        }

                        gradient.append(stop1);
                        gradient.append(stop2);
                        defs.append(gradient);
                        // Menambahkan elemen gradient ke dalam SVG
                        $(`svg`).append(defs);
                        // a08.css('fill', 'red');
                        // Mengatur atribut fill elemen path dengan URL gradient yang diinginkan
                        $(`#${value.blok} path`).css("fill", `url(#myGradient-${value.blok})`);

                        // Resume Progres
                        // $('#total_persen_0').html(total_persen_0);
                        // $('#total_persen_10').html(total_persen_10);
                        // $('#total_persen_30').html(total_persen_30);
                        // $('#total_persen_60').html(total_persen_60);
                        // $('#total_persen_85').html(total_persen_85);
                        // $('#total_persen_100').html(total_persen_100);



                        // INDIKATOR
                        if (value.status_ontime == 'Ontime') {
                            $(`#${value.blok}-i`).css('fill', '#ADFF2F');
                            total_ontime++;

                        } else if (value.status_ontime == 'Late') {
                            $(`#${value.blok}-i`).css('fill', 'red');
                            total_late++;

                        } else { // -

                            $(`#${value.blok}-i`).css('fill', 'grey');
                            total_no_spk++;

                        }

                        // Resume Progres
                        // $('#total_ontime').html(total_ontime);
                        // $('#total_late').html(total_late);
                        // $('#total_no_spk').html(total_no_spk);


                        // total_unit++;
                        // $('#total_unit').html(total_unit);
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
            xhr.open('GET', `{{ url('/assets/siteplan') }}/bekasi_new.svg`, false); // false makes it synchronous
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
            $('svg g').each(function() {
            if ($(this).find('desc').length > 0 && $(this).find('desc').text().includes(',')) {
                $(this).addClass('clickable');
                $(this).css('cursor', 'pointer');
            }
        });
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
            var blok = $(this).val();
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
            $('#value_booking').val(nominal);
            $('#value_dp').val(dp);
            $('#value_hook').text(formatRupiah(hook));
            $('#value_ipl').text(formatRupiah(ipl));
            $('#value_pagar').text(formatRupiah(pagar));
            $('#value_kelta').text(formatRupiah(kelebihan_tanah));
            $('#value_bphtb').text(formatRupiah(bphtb));
            $('#value_subtotal').text(formatRupiah(total));
            $('#value_potongan').text(formatRupiah(potongan));
            $('#value_total').text(formatRupiah(total_all));
            clearInterval(blinkInterval);

            // Clear all blue strokes pada semua blok
            $('g').css({
                'stroke': '',
                'stroke-width': ''
            });

            var selectedBlok = $(`#${blok}`);
            if (selectedBlok.length && svgOverlay) {
                // console.log(svgOverlay);

                var bbox = selectedBlok[0].getBBox();
                var bounds = svgOverlay.getBounds();
                var svgWidth = svgOverlay._image.viewBox.baseVal.width;
                var svgHeight = svgOverlay._image.viewBox.baseVal.height;
                var scaleX = (bounds.getEast() - bounds.getWest()) / svgWidth;
                var scaleY = (bounds.getNorth() - bounds.getSouth()) / svgHeight;
                var centerX = bbox.x + bbox.width / 2;
                var centerY = bbox.y + bbox.height / 2;
                var adjustmentFactor = 0; // Sesuaikan jika perlu
                var adjustedCenterY = centerY + bbox.height * adjustmentFactor;

                var lat = bounds.getSouth() + (svgHeight - adjustedCenterY) * scaleY;
                var lng = bounds.getWest() + centerX * scaleX;

                // Terbang ke blok yang dipilih
                const zoomLevel = isMobile() ? 20 : 22;
                map.flyTo([lat, lng], zoomLevel, {
                    animate: true,
                    duration: 1.5
                });

                let isHighlighted = false;

                // Mulai animasi kedip
                blinkInterval = setInterval(function() {
                    if (isHighlighted) {
                        selectedBlok.css({
                            'stroke': 'blue',
                            'stroke-width': '2',
                            'stroke-opacity': 1 // Full opacity
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
            }
        });

        const ulasan = document.getElementById('ulasan-container');

        let isDragging = false;
        let startX;
        let scrollLeft;

        ulasan.addEventListener('mousedown', (e) => {
            isDragging = true;
            ulasan.classList.add('dragging');
            startX = e.pageX - ulasan.offsetLeft;
            scrollLeft = ulasan.scrollLeft;
        });

        ulasan.addEventListener('mouseleave', () => {
            isDragging = false;
            ulasan.classList.remove('dragging');
        });

        ulasan.addEventListener('mouseup', () => {
            isDragging = false;
            ulasan.classList.remove('dragging');
        });

        ulasan.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            e.preventDefault();
            const x = e.pageX - ulasan.offsetLeft;
            const walk = (x - startX) * 2;
            ulasan.scrollLeft = scrollLeft - walk;
        });

        // validasi booking
        function validasiBook() {
            let nama = $('#nama').val(),
                no_hp = $('#no_hp').val(),
                tgl_lahir = $('#tgl_lahir').val(),
                jenis_kl = $('#jenis_kl').find(":selected").val(),
                no_ktp = $('#no_ktp').val(),
                alamat = $('#alamat_book').val(),
                pendapatan = $('#pendapatan').val(),
                status = $('#status').find(":selected").val(),
                no_ktp_psg = $('#no_ktp_psg').val(),
                nama_pasangan = $('#nama_pasangan').val(),
                payment = $("input[name='payment']:checked").val(),
                bank = $("input[name='bank']:checked").val()

            if (nama == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Nama belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#nama').focus()
            } else if (no_hp == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "No HP belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#no_hp').focus()
            } else if (tgl_lahir == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Tanggal lahir belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#tgl_lahir').focus()
            } else if (jenis_kl == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Tanggal lahir belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#jenis_kl').focus()
            } else if (no_ktp == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "No KTP belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#no_ktp').focus()
            } else if (alamat == '' || alamat == null) {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Alamat belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#alamat_book').focus()
            } else if (pendapatan == '' || pendapatan == null) {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Pendapatan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#pendapatan').focus()
            } else if (status == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Status belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#status').focus()
            } else if (status == 2 && no_ktp_psg == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "No KTP Pasangan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#no_ktp_psg').focus()
            } else if (status == 2 && nama_pasangan == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Nama Pasangan belum diisi!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $('#nama_pasangan').focus()
            } else if (payment == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Payment belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $("input[name='payment']").focus()
            } else if (payment == 3 && bank == '') {
                Swal.fire({
                    icon: "warning",
                    title: "Opps!",
                    text: "Bank belum dipilih!",
                    showConfirmButton: false,
                    timer: 3000
                });
                $("input[name='bank']").focus()
            } else {
                var form = $('#formBooking')[0]; // Ambil elemen DOM dari jQuery
                var formData = new FormData(form); // Buat objek FormData

                // set blok to form
                var blokValue = $('#blok').val();
                formData.append('blok', blokValue);

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
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika diperlukan CSRF
                    },
                    beforeSend: function() {
                        $('#btn-booking').html(`Loading...
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>`);
                    },
                    success: function(response) {
                        if (response.status) {
                            $('#bayarGci').attr('href',
                                `https://trusmicorp.com/rspproject/paygate/q/${response.id_gci}`);
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
                        $('#btn-booking').html('Booking Sekarang');
                    }
                });
            }

        }

        function addLegend(map) {
            var legend = L.control({ position: 'bottomright' }); // Gunakan bottomleft untuk dasar

legend.onAdd = function () {
    var div = L.DomUtil.create('div', 'legend card shadow-sm text-center leaflet-bottom-center');

    var legendContent = $('<div>').addClass('legend-content d-flex flex-column p-2');

    var statusRow = $('<div>').addClass('d-flex flex-wrap justify-content-center align-items-center');
    var progresRow = $('<div>').addClass('d-flex flex-wrap justify-content-center align-items-center');

    var statusItems = [
        { color: '#C3C28E', text: 'Not Sale' },
        { color: '#B3E5BE', text: 'Akad' },
        { color: '#45b6fe', text: 'Booking Cash' },
        { color: '#FD8A8A', text: 'Booking' },
        { color: '#FDFFAE', text: 'SP3K' },
        { color: 'white', border: '1px solid #ccc', text: 'Kosong' },
        { color: '#990066', text: 'Pindah Blok' },
        { color: '#B983FF', text: 'Bank' }
    ];

    var progresItems = [
        { color: '#B9F3FC', text: '0% - 9%' },
        { color: '#9F8772', text: '10% - 29%' },
        { color: '#B7B7B7', text: '30% - 59%' },
        { color: '#1572A1', text: '60% - 84%' },
        { color: '#FAAB78', text: '85% - 99%' },
        { color: '#FF8DC7', text: '100%' }
    ];

    function appendItems(items, container) {
        items.forEach(function(item) {
            var legendItem = $('<div>').addClass('d-flex align-items-center me-3');
            var box = $('<span>').addClass('legend-box me-1').css({ background: item.color, border: item.border || 'none' });
            legendItem.append(box).append(item.text);
            container.append(legendItem);
        });
    }

    appendItems(statusItems, statusRow);
    appendItems(progresItems, progresRow);

    legendContent.append(statusRow);
    legendContent.append($('<hr style="border: 0,6px solid black">').addClass('my-1'));
    legendContent.append(progresRow);

                $(div).append(legendContent);

    return div;
};

legend.addTo(map);

}


$(document).on('click', '.leaflet-overlay-pane svg', function (e) {

  console.log($(this));
  alert('Klik pada elemen SVG <g>');
});
$(document).on('click', '.leaflet-overlay-pane .clickable', function (e) {

  console.log($(this));
  alert('Klik pada elemen SVG <g>');
});



    </script>
    @include('modal.lokasi_detail_js')
    @include('modal.spesifikasi_detail_js')
    @include('modal.dekat_dengan_js')
@endsection
