<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rumah Ningrat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ url('/assets/images/fav-icon') }}/icon-ningrat.png">
    <!-- bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ url('/assets/css') }}/bootstrap.min.css" type="text/css" media="all"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/animate.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ url('/assets') }}/venobox/venobox.css" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/bootstrap-icons.css" type="text/css" media="all">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/slick/slick-theme.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/style.css?v=3" type="text/css" media="all">
    <!-- Dropdown CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/dropdown.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/responsive.css" type="text/css" media="all">
    <!-- rangeslider CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css') }}/rangeslider.css" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="{{ url('/') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    {{-- datetime picker --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    {{-- bootstrap-select css --}}
    <link rel="stylesheet" href="{{ url('/assets/select2/css') }}/select2.min.css" type="text/css" media="all">
    {{-- css style this page --}}
    <style>
        .sticky-column {
            position: sticky;
            top: 0;
        }

        html,
        body {
            overflow-y: hidden;
        }
    </style>
</head>

<body>
    <section class="container-fluid" id="wrapper-detail">
        <div class="row">
            <div class="col-12 col-lg-8 pl-0 pr-0">
                <div class="owl-carousel bg-info" id="gallery-carousel-1">
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=1" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=2" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=3" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-2">
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=1+ke+2" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=2+ke+2" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=3+ke+2" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-3">
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=1+ke+3" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=2+ke+3" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=3+ke+3" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-4">
                    <div id="video_tour">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=2+ke+4" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=3+ke+4" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-5">
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=1+ke+5" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=2+ke+5" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=3+ke+5" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-6">
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=1+ke+6" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=2+ke+6" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=3+ke+6" alt="">
                    </div>
                </div>
                <div class="owl-carousel d-none owl-hidden" id="gallery-carousel-7">
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=1+ke+7" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=2+ke+7" alt="">
                    </div>
                    <div><img src="https://dummyimage.com/1920x1080/bfbfbf/ffffff&text=3+ke+7" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 container-group pl-0 pr-0">
                <div class="aside-section" id="aside-section-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5 mt-5">
                                    <h4>Rumah Ningrat</h4>
                                    <h4 id="nama_project">{{ $project['project'] }}</h4>
                                </div>
                                <div class="body-detail">
                                    <p><strong id="harga_project">{{ $project['harga_jual'] }}</strong></p>
                                    <p id="project_tipe">{{ $project['project_tipe'] }}</p>
                                    <p>Tipe <span id="tipe_rumah">{{ $project['tipe_rumah'] }}</span> m</p>
                                    <p id="alamat">{{ $project['alamat'] }}</p>
                                    <a href="#">Lokasi selengkapnya</a>
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
                                    <h4>Gratis Pagar & Tembok Keliling</h4>
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
                                <a href="">Detail Spesifikasi</a>
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
                                <a href="">Detail Tempat</a>
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
                                                    <p style="line-height: 10px">Terima kunci mulai</p>
                                                    <p style="line-height: 10px; color: #DE0000;">
                                                        {{ $blok->terima_kunci }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
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
                                                <img src="{{ url('/assets/images/icon') }}/mandiri.png"
                                                    alt="" width="75px" height="24px">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside-section" id="aside-section-7">
                    <div class="container-fluid section-form">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="header-detail text-center mb-5">
                                    <h4>Pilih Blok</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <select class="select-blok" name="blok" id="blok">
                                    @foreach ($bloks as $blok)
                                        <option value="{{ $blok->blok }}" data-harga="{{ $blok->terima_kunci }}">
                                            Blok {{ $blok->blok }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col-10 text-center">
                                <p>Sudah dapat terima kunci dengan nominal</p>
                                <p class="text-danger" id="harga_blok">Rp.1.000.000</p>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <h4>Data Diri Pembeli</h4>
                            </div>
                        </div>
                        <div class="row mt-5 mb-5">
                            <div class="col-12">
                                <form class="form-booking" id="formBooking">
                                    @csrf
                                    <input type="hidden" class="form-control" name="id_project"
                                        value="{{ $project['id_project'] }}">
                                    <div class="mb-2">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" id="nama">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">No Handphone</label>
                                        <input type="text" class="form-control" name="no_hp" id="no_hp">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" name="tgl_lahir" id="tgl_lahir">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" name="jenis_kelamin" id="jenis_kl">
                                            <option value="l">Laki - laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">No KTP</label>
                                        <input type="text" class="form-control" name="no_ktp" id="no_ktp">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat_book">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Pendapatan</label>
                                        <input type="number" class="form-control" name="pendapatan"
                                            id="pendapatan">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" name="status" id="status">
                                            <option value="meried">Menikah</option>
                                            <option value="single">Belum Menikah</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">No KTP Pasangan</label>
                                        <input type="text" class="form-control" name="no_ktp_p"
                                            id="no_ktp_psg">
                                    </div>
                                    <div class="mb-4 mt-5">
                                        <h4 class="text-center">Pembayaran</h4>
                                    </div>
                                    <div class="mb-3">
                                        <p>Jenis Pembayaran</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex flex-wrap gap-3">
                                            <div class="payment-method">
                                                <input type="radio" id="alfamart" name="payment" class="payment"
                                                    value="alfamart">
                                                <label for="alfamart">
                                                    <img src="{{ url('/assets/images/icon/') }}/alfamart.png" />
                                                </label>
                                            </div>
                                            <div class="payment-method">
                                                <input type="radio" id="indomaret" name="payment" class="payment"
                                                    value="indomaret">
                                                <label for="indomaret">
                                                    <img src="{{ url('/assets/images/icon/') }}/indomaret.png" />
                                                </label>
                                            </div>
                                            <div class="payment-method">
                                                <input type="radio" id="virtual-account" name="payment"
                                                    class="payment" value="virtual-account">
                                                <label for="virtual-account">
                                                    <img src="{{ url('/assets/images/icon/') }}/va.png" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sticky-container">
                    <div class="sticky-content d-flex justify-content-between align-items-center">
                        <div>
                            <div class="price">Rp.500.000</div>
                            <div class="note">*biaya booking + BI checking</div>
                        </div>
                        <button class="btn btn-primary" onclick="validasiBook()" style="border-radius: 10px">Booking
                            Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="chat-ai d-flex flex-column shadow-sm">
        <div><i class="bi bi-chat-dots"></i></div>
        <div>
            <p>Nira AI</p>
        </div>
    </div> --}}
    <script type="text/javascript">
        const urlai = `{{ url('/assets/js/') }}/chatai.js`
        console.log(urlai);
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
    {{-- <script src="{{ url('/assets/js') }}/bootstrap.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- carousel js -->
    <script src="{{ url('/assets/js') }}/owl.carousel.min.js"></script>

    <!-- counterup js -->
    <script src="{{ url('/assets/js') }}/jquery.counterup.min.js"></script>

    <!-- waypoints js -->
    <script src="{{ url('/assets/js') }}/waypoints.min.js"></script>

    <!-- wow js -->
    <script src="{{ url('/assets/js') }}/wow.min.js"></script>

    <!-- imagesloaded js -->
    <script src="{{ url('/assets/js') }}/imagesloaded.pkgd.min.js"></script>

    <!-- venobox js -->
    <script src="{{ url('/assets') }}/venobox/venobox.js"></script>

    <!--  animated-text js -->
    <script src="{{ url('/assets/js') }}/animated-text.js"></script>

    <!-- venobox min js -->
    <script src="{{ url('/assets') }}/venobox/venobox.min.js"></script>

    <!-- isotope js -->
    <script src="{{ url('/assets/js') }}/isotope.pkgd.min.js"></script>

    <!-- jquery meanmenu js -->
    <script src="{{ url('/assets/js') }}/jquery.meanmenu.js"></script>

    <!-- jquery scrollup js -->
    <script src="{{ url('/assets/js') }}/jquery.scrollUp.js"></script>

    <!-- Slick Slider -->
    <script src="{{ url('/') }}/assets/slick/slick.min.js"></script>

    <script src="{{ url('/assets/js') }}/jquery.barfiller.js"></script>
    <!-- jquery js -->

    <!-- ragrslider js -->
    <script src="{{ url('/assets/js') }}/rangeslider.js"></script>

    <!-- ragrslider js -->
    <script src="{{ url('/assets/js') }}/mixitup.min.js"></script>

    <!-- theme js -->
    <script src="{{ url('/assets/js') }}/theme.js"></script>

    <!-- scroll js -->
    <script src="{{ url('/assets/js') }}/script.js"></script>

    <!-- slim select -->
    <script src="https://unpkg.com/slim-select@latest/dist/slimselect.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/slim-select@latest/dist/slimselect.css" />
    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.9/dist/sweetalert2.all.min.js"
        integrity="sha256-zXU3hnKwOJq62DswpQcW5m0q0zoQY4UpTLYdmlxwJHg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.9/dist/sweetalert2.min.css"
        integrity="sha256-HivoIIkMGPypkWBoBzUEFAY/RZqAWSWLqW/MQFMBRXg=" crossorigin="anonymous">

    {{-- datetime picker --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    {{-- detail js --}}
    <script src="{{ url('/assets') }}/detail.js"></script>

    {{-- chat-ai --}}
    <script src="{{ url('/assets/js/') }}/chatai.js"></script>
    <script>
        var baseurl = `{{ url('/') }}`
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById('video_tour');

            const video = document.createElement('video');
            video.src = `{{ url('/assets/video') }}/virtual_tour.mp4`;
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
    </script>
</body>

</html>
