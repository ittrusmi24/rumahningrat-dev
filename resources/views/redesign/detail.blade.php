<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Project</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{asset('/vendor')}}/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('/css/detail.css')}}" />
    <link href="{{asset('/vendor')}}/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/vendor')}}/leaflet/dist/leaflet.css" />
    <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.5.1/maptiler-sdk.css" rel="stylesheet" />


</head>

<body class="bg-white text-gray-800">

    <div class="lg:flex h-screen" id="wrapper-detail">
        @include('redesign.layout.top_bar', [
    'page' => 'detail'
])
        <!-- Gallery (Left) -->

        <div class="w-full lg:w-2/3 h-[300px] lg:h-screen">
            <div class="section-detail w-full h-full transition-opacity duration-500 ease-in-out" id="section-detail-1">
                <div class="swiper sw-section-1">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="relative w-full h-full">
                                <img src="/assets/images/section/section_1.png" class="w-full h-full object-cover" />
                                <div
                                    class="absolute top-5 right-2 bottom-0 flex flex-col space-y-1 text-white text-xs mt-12 mb-5 gap-2">
                                    <div
                                        class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                                        <i class="mdi mdi-gate text-lg"></i>
                                        <span class="text-xs text-center">Gratis Pagar</span>
                                    </div>
                                    <div
                                        class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                                        <i class="mdi mdi-wall text-lg"></i>
                                        <span class="text-xs text-center">Gratis Tembok<br>Belakang</span>
                                    </div>
                                    <div
                                        class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                                        <i class="mdi mdi-home text-lg"></i>
                                        <span class="text-xs">60 x 30</span>
                                    </div>
                                    <div
                                        class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                                        <i class="mdi mdi-shower text-lg"></i>
                                        <span>1 KM</span>
                                    </div>
                                    <div
                                        class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                                        <i class="mdi mdi-bed text-lg"></i>
                                        <span>2 Kamar</span>
                                    </div>
                                    <div
                                        class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                                        <i class="mdi mdi-car text-lg"></i>
                                        <span>1 Carport</span>
                                    </div>
                                </div>
                                <div
                                    class="absolute px-5 py-5 top-6 bottom-0 flex flex-col space-y-1 text-white text-xs mt-12">
                                    <button
                                        class="bg-white text-[#11689B] hover:bg-[#11689B] hover:text-white rounded-md p-2 flex items-center gap-2 text-sm transition-colors duration-300 shadow-md">
                                        <i class="mdi mdi-open-in-new"></i>
                                        <span>Lihat Detail</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide bg-gray-100 p-4 md:p-8 flex items-center justify-center">

                            <div class="grid grid-cols-2 grid-rows-2 gap-4">
                                <div class="col-span-2">
                                    <div class="rounded-sm overflow-hidden h-full">
                                        <div class="relative h-full">
                                            <img class="w-full h-full object-cover"
                                                src="{{asset('assets/images/card_benefit_1.jpg')}}"
                                                alt="Rumah dengan pagar gratis">
                                            <div
                                                class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                                                <h3 class="text-white font-semibold text-lg">Benefit Gratis Pagar</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-start-2">
                                    <div class="rounded-sm overflow-hidden h-full">
                                        <div class="relative h-full">
                                            <img class="w-full h-full object-cover"
                                                src="{{asset('assets/images/card_benefit_1.jpg')}}"
                                                alt="Rumah dengan pagar gratis">
                                            <div
                                                class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                                                <h3 class="text-white font-semibold text-lg">Desain Modern</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-start-2">
                                    <div class="rounded-sm overflow-hidden h-full">
                                        <div class="relative h-full">
                                            <img class="w-full h-full object-cover"
                                                src="{{asset('assets/images/card_benefit_1.jpg')}}"
                                                alt="Rumah dengan pagar gratis">
                                            <div
                                                class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                                                <h3 class="text-white font-semibold text-lg">Akses Mudah</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>


            </div>

            <div class="section-detail w-full h-full hidden transition-opacity duration-500 ease-in-out"
                id="section-detail-2">
                <div class="relative w-full h-screen">

                    <div id="loader-vt"
                        class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-gray-100 z-10">
                        <div class="w-11/12 h-5/6 md:w-3/4 md:h-3/4 bg-gray-300 animate-pulse rounded-lg"></div>
                        <p class="mt-4 text-gray-500">Loading Content...</p>
                    </div>

                    <iframe src="{{ url('/vt_view') }}" class="w-full h-full" loading="lazy"
                        onload="document.getElementById('loader-vt').style.display='none'; this.style.visibility='visible';"
                        style="visibility: hidden;">
                    </iframe>

                </div>
            </div>
            <div class="section-detail w-full h-full hidden transition-opacity duration-500 ease-in-out"
                id="section-detail-3">
                <div class="w-full h-full">
                    <div class="grid grid-cols-2 grid-rows-2 gap-4">
                        <div class="col-span-2">
                            <div class="rounded-sm overflow-hidden h-full">
                                <div class="relative h-full">
                                    <img class="w-full h-full object-cover"
                                        src="{{asset('assets/images/card_benefit_1.jpg')}}"
                                        alt="Rumah dengan pagar gratis">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                                        <h3 class="text-white font-semibold text-lg">Tampilan Depan Rumah Ningrat</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-start-2">
                            <div class="rounded-sm overflow-hidden h-full">
                                <div class="relative h-full">
                                    <img class="w-full h-full object-cover"
                                        src="{{asset('assets/images/card_benefit_1.jpg')}}"
                                        alt="Rumah dengan pagar gratis">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                                        <h3 class="text-white font-semibold text-lg">Fasilitas Olahraga di Area Rumah
                                            Ningrat</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-start-2">
                            <div class="rounded-sm overflow-hidden h-full">
                                <div class="relative h-full">
                                    <img class="w-full h-full object-cover"
                                        src="{{asset('assets/images/card_benefit_1.jpg')}}"
                                        alt="Rumah dengan pagar gratis">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                                        <h3 class="text-white font-semibold text-lg">Benefit Gratis Pagar</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-detail w-full h-full hidden transition-opacity duration-500 ease-in-out"
                id="section-detail-4">
                <div class="relative w-full h-screen">

                    <div id="loader-poi"
                        class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-gray-100 z-10">
                        <div class="w-11/12 h-5/6 md:w-3/4 md:h-3/4 bg-gray-300 animate-pulse rounded-lg"></div>
                        <p class="mt-4 text-gray-500">Loading Content...</p>
                    </div>

                    <iframe src="{{ url('/poi_view/70') }}" class="w-full h-full" loading="lazy"
                        onload="document.getElementById('loader-poi').style.display='none'; this.style.visibility='visible';"
                        style="visibility: hidden;">
                    </iframe>

                </div>
            </div>
            <div class="section-detail w-full h-full hidden transition-opacity duration-500 ease-in-out"
                id="section-detail-5">
                <div class="relative w-full h-screen z-0">
                    <div id="map" class="w-full h-screen">
                    </div>
                </div>
            </div>
            <div class="section-detail w-full h-full hidden transition-opacity duration-500 ease-in-out"
                id="section-detail-6">
                <div id="slideshow-container"
                    class="relative w-full min-h-screen flex items-center justify-center overflow-hidden p-8 bg-slate-300">

                    <div class="slide absolute inset-0 flex items-center justify-center opacity-100 p-6">
                        <div class="flex flex-col md:flex-row items-center justify-center gap-16 w-full max-w-6xl">
                            <div class="image-container w-full md:w-1/2">
                                <img src="/assets/images/mockup/mobile-1.png" alt="Live CCTV Interface"
                                    class="w-full h-auto object-contain max-w-lg mx-auto">
                            </div>
                            <div class="text-container w-full md:w-1/2 max-w-md">
                                <h2 class="text-4xl lg:text-5xl font-bold text-[#11689B]" style="position: relative;">
                                    Live CCTV</h2>
                                <p class="mt-4 text-lg text-slate-500" style="position: relative;">
                                    Kelola komunitas dengan mudah, akses semua layanan di satu aplikasi.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="slide absolute inset-0 flex items-center justify-center opacity-0 p-6">
                        <div class="flex flex-col md:flex-row items-center justify-center gap-16 w-full max-w-6xl">
                            <div class="image-container w-full md:w-1/2">
                                <img src="/assets/images/mockup/mobile-2.png"
                                    alt="Security Patrol Interface"
                                    class="w-full h-auto object-contain max-w-lg mx-auto">
                            </div>
                            <div class="text-container w-full md:w-1/2 max-w-md">
                                <h2 class="text-4xl lg:text-5xl font-bold text-[#11689B]" style="position: relative;">
                                    Pantau Petugas</h2>
                                <p class="mt-4 text-lg text-slate-500" style="position: relative;">
                                    Lacak aktivitas dan laporan keamanan secara real-time.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Content (Right) -->
        <div class="w-full lg:w-1/3 h-auto lg:h-screen overflow-y-auto px-8 py-6 container-group z-10">
            <!-- Section 1 -->
            <div id="aside-section-1" class="mb-6 mt-14">

                <!-- Header -->
                <div>
                    <h1 class="text-xl font-semibold">
                        <span class="text-[#11689B]">Rumah Ningrat</span> Indramayu
                    </h1>
                    <h2 class="text-lg font-semibold">Margadadi Series 2025</h2>
                    <p class="text-sm text-gray-600 mt-1">
                        Tipe 30/60m² · Gratis Pagar / Gratis IPL 2 Tahun
                    </p>
                    <p class="text-sm text-gray-500">Jayasampurna, Kec. Serang Baru, Kabupaten Bekasi, Jawa Barat
                        17330</p>
                </div>

                <!-- Tabs -->
                <div class="border rounded-md p-4 bg-white my-4">
                    <div class="flex gap-2 mb-4">
                        <button class="tab-btn bg-[#11689B] text-white px-3 py-1 rounded text-sm active"
                            data-tab="subsidi">KPR Subsidi</button>
                        <button class="tab-btn bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm"
                            data-tab="komersil">KPR Komersil</button>
                        <button class="tab-btn bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm"
                            data-tab="cash">Cash</button>
                    </div>

                    <!-- Cicilan Subsidi -->
                    <div class="tab-content" id="subsidi">
                        <ul class="space-y-2 text-sm">
                            <li class="flex justify-between border-b pb-1">
                                <span>Cicilan selama 10 Tahun</span>
                                <span class="font-semibold text-right">Rp.1.730.400<span
                                        class="text-xs">/bulan</span></span>
                            </li>
                            <li class="flex justify-between border-b pb-1">
                                <span>Cicilan selama 15 Tahun</span>
                                <span class="font-semibold text-right">Rp.1.287.300<span
                                        class="text-xs">/bulan</span></span>
                            </li>
                            <li class="flex justify-between">
                                <span>Cicilan selama 20 Tahun</span>
                                <span class="font-semibold text-right">Rp.1.027.200<span
                                        class="text-xs">/bulan</span></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Cicilan Komersil -->
                    <div class="tab-content hidden" id="komersil">
                        <ul class="space-y-2 text-sm">
                            <li class="flex justify-between border-b pb-1">
                                <span>Cicilan Komersil 10 Tahun</span>
                                <span class="font-semibold text-right">Rp.2.100.000<span
                                        class="text-xs">/bulan</span></span>
                            </li>
                            <li class="flex justify-between">
                                <span>Cicilan Komersil 15 Tahun</span>
                                <span class="font-semibold text-right">Rp.1.780.000<span
                                        class="text-xs">/bulan</span></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Cicilan Cash -->
                    <div class="tab-content hidden" id="cash">
                        <p class="text-sm text-gray-700">Total harga: <span class="font-semibold">Rp.120.000.000</span>
                        </p>
                        <p class="text-sm text-gray-500">Pembayaran lunas tanpa cicilan.</p>
                    </div>
                </div>

                <!-- Fasilitas -->


            </div>
            <div id="aside-section-2">
                <div class="border rounded-md p-4 bg-white">
                    <h3 class="font-semibold mb-2">Fasilitas</h3>
                    <hr class="mb-2">
                    <div class="grid grid-cols-2 gap-3 text-sm text-gray-700">
                        <div><i class="mdi mdi-bed text-[#11689B]"></i> Kamar Tidur : 2</div>
                        <div><i class="mdi mdi-shower text-[#11689B]"></i> Kamar Mandi : 1</div>
                        <div><i class="mdi mdi-car text-[#11689B]"></i> Tersedia Carport</div>
                        <div><i class="mdi mdi-run-fast text-[#11689B]"></i> Tersedia Jogging Track</div>
                        <div><i class="mdi mdi-shield-half-full text-[#11689B]"></i> Security 24 Jam</div>
                        <div><i class="mdi mdi-slide text-[#11689B]"></i> Tersedia Playground</div>
                    </div>
                </div>

                <!-- Link -->
                <div class="text-right">
                    <a href="#" class="text-[#11689B] text-sm underline">Lihat Detail Spesifikasi</a>
                </div>

            </div>

            <!-- Section 2 -->
            <div id="aside-section-3" class="mt-6">

                <div>
                    <h2 class="text-xl font-semibold mb-4">Benefit Rumah Ningrat</h2>
                    <ul class="space-y-1">
                        <li class="flex justify-between items-center border-b hover:bg-[#11689B] hover:text-white p-2 cursor-pointer"
                            data-modal-target="modal-fasilitas" data-modal-toggle="modal-fasilitas">
                            <span>Fasilitas kesehatan</span>
                            <i class="mdi mdi-chevron-right"></i>
                        </li>
                        <li class="flex justify-between items-center border-b hover:bg-[#11689B] hover:text-white p-2 cursor-pointer"
                            data-modal-target="modal-komunitas" data-modal-toggle="modal-komunitas">
                            <span>Komunitas warga Rumah Ningrat</span>
                            <i class="mdi mdi-chevron-right"></i>
                        </li>
                        <li class="flex justify-between items-center border-b hover:bg-[#11689B] hover:text-white p-2 cursor-pointer"
                            data-modal-target="modal-keamanan" data-modal-toggle="modal-keamanan">
                            <span>Sistem keamanan 24jam penuh</span>
                            <i class="mdi mdi-chevron-right"></i>
                        </li>
                        <li class="flex justify-between items-center border-b hover:bg-[#11689B] hover:text-white p-2 cursor-pointer"
                            data-modal-target="modal-ekonomi" data-modal-toggle="modal-ekonomi">
                            <span>Peluang kemajuan ekonomi</span>
                            <i class="mdi mdi-chevron-right"></i>
                        </li>
                    </ul>
                </div>


            </div>
            <div id="aside-section-4" class="mt-6">
                <div class="border rounded-md p-4 bg-white my-4">
                    <h3 class="font-semibold mb-2">Akses Mudah</h3>
                    <hr class="mb-2" />
                    <div class="grid grid-cols-2 gap-3 text-sm text-gray-700">
                        <div>
                            <i class="mdi mdi-school text-[#11689B]"></i> 12 Pusat Pendidikan
                        </div>
                        <div>
                            <i class="mdi mdi-store text-[#11689B]"></i> 3 Minimarket
                        </div>
                        <div>
                            <i class="mdi mdi-bus-side text-[#11689B]"></i> 6 Modal Transfortasi
                        </div>
                        <div>
                            <i class="mdi mdi-food-fork-drink text-[#11689B]"></i> 4 Rumah Makan
                        </div>
                        <div>
                            <i class="mdi mdi-hospital-building text-[#11689B]"></i> 2 Pusat Kesehatan
                        </div>
                        <div>
                            <i class="mdi mdi-cash-multiple text-[#11689B]"></i> 2 ATM terdekat
                        </div>
                    </div>
                    <a href="#" class="text-sm text-blue-600 mt-4 inline-block">Lihat Detail Akses</a>
                </div>


            </div>
            <div id="aside-section-5" class="mt-6">
                <div>
                    <h2 class="text-xl font-semibold mb-4">Pilih Blok Rumah Impian Anda</h2>
                    <select
                        class="w-full rounded px-4 py-2 bg-white focus:outline-none border-gray-300 hover:border-[#11689B] focus:ring-2 focus:ring-[#11689B] transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30">
                        <option value="">-- Pilih Blok --</option>
                        <option value="C101" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="9000000" data-total="34500000" data-potongan="25000000"
                            data-total_all="9500000">Blok
                            C101
                        </option>
                        <option value="C102" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="9000000" data-total="34500000" data-potongan="25000000"
                            data-total_all="9500000">Blok
                            C102
                        </option>
                        <option value="C103" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="9000000" data-total="34500000" data-potongan="25000000"
                            data-total_all="9500000">Blok
                            C103
                        </option>
                        <option value="C104" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="9000000" data-total="34500000" data-potongan="25000000"
                            data-total_all="9500000">Blok
                            C104
                        </option>
                        <option value="C105" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="9000000" data-total="34500000" data-potongan="25000000"
                            data-total_all="9500000">Blok
                            C105 (JB : 1)
                        </option>
                        <option value="C107" data-harga="0" data-nominal="1000000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="6000000" data-biaya_kelebihan_tanah="60000000"
                            data-biaya_bphtb="8500000" data-total="91000000" data-potongan="25000000"
                            data-total_all="66000000">Blok
                            C107 (Ada Hook/KLT)
                        </option>
                        <option value="C115" data-harga="0" data-nominal="1000000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="6000000" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="8500000" data-total="40500000" data-potongan="25000000"
                            data-total_all="15500000">Blok
                            C115 (Ada Hook/KLT)
                        </option>
                        <option value="C46" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="10000000" data-total="35500000" data-potongan="25000000"
                            data-total_all="10500000">Blok
                            C46 (JB : 1)
                        </option>
                        <option value="C47" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="10000000" data-total="35500000" data-potongan="25000000"
                            data-total_all="10500000">Blok
                            C47 (JB : 1)
                        </option>
                        <option value="C48" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="10000000" data-total="35500000" data-potongan="25000000"
                            data-total_all="10500000">Blok
                            C48 (JB : 1)
                        </option>
                        <option value="C49" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="10000000" data-total="35500000" data-potongan="25000000"
                            data-total_all="10500000">Blok
                            C49 (JB : 1)
                        </option>
                        <option value="C51" data-harga="0" data-nominal="1000000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="6000000" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="9500000" data-total="31000000" data-potongan="25000000"
                            data-total_all="6000000">Blok
                            C51 (Ada Hook/KLT) (JB : 1)
                        </option>
                        <option value="C55" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="10000000" data-total="35500000" data-potongan="25000000"
                            data-total_all="10500000">Blok
                            C55 (JB : 1)
                        </option>
                        <option value="C57" data-harga="0" data-nominal="500000" data-dp="5000000"
                            data-harga_tanah="1500000" data-biaya_pagar="10000000" data-biaya_tembok="0"
                            data-biaya_ipl="10000000" data-biaya_hook="0" data-biaya_kelebihan_tanah="0"
                            data-biaya_bphtb="10000000" data-total="35500000" data-potongan="25000000"
                            data-total_all="10500000">Blok
                            C57 (JB : 1)
                        </option>


                    </select>
                    <span class="text-xs text-gray-500 block"><i class="mdi mdi-information-variant-circle-outline"></i>
                        Tap di peta untuk memilih blok</span>
                </div>

            </div>
            <div id="aside-section-6" class="mt-6">
                <div class="text-center">
                    <h1 class="text-xl font-semibold">
                        <span class="text-[#11689B] font-bold">Rumah Ningrat</span> Margadadi
                    </h1>
                    <div class="text-sm text-gray-500 mt-1">
                        <span class="font-medium text-gray-700">Indramayu | Blok A02</span><br />
                        Jayasampurna, Kec. Serang Baru, Kabupaten Bekasi, Jawa Barat 17330
                    </div>
                </div>

                <!-- Rincian Total Biaya -->
                <div class="space-y-2 mt-6">
                    <p class="font-semibold">Rincian Total Biaya:</p>

                    <div class="flex justify-between">
                        <span>Booking</span>
                        <span>Rp.500.000</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Uang Muka (DP)</span>
                        <span>
                            <span class="line-through text-red-500 mr-1">Rp.5.000.000</span>
                            <span class="text-red-600 font-semibold">Rp.0</span>
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span>Biaya BPHTP</span>
                        <span>Rp.8.750.000</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Pagar</span>
                        <span>
                            <span class="line-through text-red-500 mr-1">Rp.10.000.000</span>
                            <span class="text-red-600 font-semibold">Rp.0</span>
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span>Tembok Keliling</span>
                        <span>
                            <span class="line-through text-red-500 mr-1">Rp.2.000.000</span>
                            <span class="text-red-600 font-semibold">Rp.0</span>
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span>Biaya IPL 2 Tahun</span>
                        <span>
                            <span class="line-through text-red-500 mr-1">Rp.2.400.000</span>
                            <span class="text-red-600 font-semibold">Rp.0</span>
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span>Hook</span>
                        <span>-</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Kelebihan Tanah</span>
                        <span>-</span>
                    </div>

                    <hr class="my-4" />

                    <!-- Total -->
                    <div class="flex justify-between text-lg font-bold">
                        <span>Bayar Sekarang</span>
                        <span class="text-black">Rp.9.250.000</span>
                    </div>

                    <div class="text-right text-sm text-red-500 line-through">
                        Rp.28.650.000
                    </div>
                    <div class="text-right text-xs text-gray-500">
                        Sebelum dapat potongan
                    </div>
                </div>
                <h2 class="text-lg font-semibold mb-6">Isi Data Diri Pembeli</h2>

                <form id="form_booking" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Nama Lengkap <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B] focus:border-2
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Nama lengkap" required name="nama">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Nomor Handphone <span
                                class="text-red-500">*</span></label>
                        <input type="tel" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Nomor HP" required name="no_hp">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Tanggal Lahir <span
                                class="text-red-500">*</span></label>
                        <input type="date" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30" required
                            name="tgl_lahir">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Tempat Lahir <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Kota tempat lahir" required name="tempat_lahir">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Jenis Kelamin <span
                                class="text-red-500">*</span></label>

                        <div class="grid grid-cols-5 grid-rows-1 gap-4">
                            <div class="col-span-2">
                                <input type="radio" id="option1" name="jenis_kl" value="L"
                                    class="form-radio text-[#11689B]">
                                <label for="option1">Laki Laki</label>
                            </div>
                            <div class="col-span-2 col-start-4">
                                <input type="radio" id="option2" name="jenis_kl" value="P"
                                    class="form-radio text-[#11689B]">
                                <label for="option2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Nomor KTP <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Masukkan nomor KTP" required name="no_ktp">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Kelurahan Tempat Tinggal <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Masukkan nama kelurahan saat ini" required name="kelurahan">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Alamat Tempat Tinggal <span
                                class="text-red-500">*</span></label>
                        <textarea class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Masukkan detail alamat tempat tinggal" required></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Pekerjaan</label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Contoh: Karyawan Swasta" name="pekerjaan">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Pendapatan (Rp)</label>
                        <input type="number" class="w-full rounded-md border border-gray-300 px-3 py-2
          focus:outline-none focus:border-[#11689B]
          hover:border-[#11689B]
          transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Contoh: 5.000.000" name="pendapatan">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Biaya Hidup (Rp)</label>
                        <input type="number" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Contoh: 3.000.000" name="biaya_hidup">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Sales</label>
                        <input type="number" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Cari & Masukan minimal 3 huruf" name="sales">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Kode Referal</label>
                        <input type="number" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="" name="kode_referal">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Status Pernikahan</label>
                        <select class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            name="status">
                            <option disabled selected>Pilih status</option>
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                            <option>Cerai</option>
                        </select>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-1/2">
                            <label class="block text-sm font-medium mb-1">Skema Pembayaran</label>
                            <select class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                                name="jenis_pembayaran">
                                <option>KPR</option>
                                <option>Tunai</option>
                            </select>
                        </div>
                        <div class="w-1/2">
                            <label class="block text-sm font-medium mb-1">Tenor Pembayaran</label>
                            <select class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                                name="tenor">
                                <option>5 Tahun</option>
                                <option>10 Tahun</option>
                                <option>15 Tahun</option>
                                <option>20 Tahun</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium mb-2">Pilih Metode Pembayaran</label>
                        <div class="grid grid-cols-3 gap-3 metode">
                            <button type="button"
                                class="border rounded p-2 hover:bg-gray-100 transition-all duration-200 ease-in-out">
                                <img src="/assets/images/icon/alfamart.png" alt="Alfamart" class="h-6 mx-auto">
                            </button>
                            <button type="button"
                                class="border rounded p-2 hover:bg-gray-100 transition-all duration-200 ease-in-out">
                                <img src="/assets/images/icon/indomaret.png" alt="Indomaret" class="h-6 mx-auto">
                            </button>
                            <button type="button"
                                class="border rounded p-2 hover:bg-gray-100 transition-all duration-200 ease-in-out">
                                <img src="/assets/images/icon/qris.png" alt="QRIS" class="h-6 mx-auto">
                            </button>
                            <button id="va-button" type="button"
                                class="border rounded p-2 hover:bg-gray-100 transition-all duration-200 ease-in-out">
                                <img src="/assets/images/icon/va.png" alt="Virtual Account" class="h-6 mx-auto">
                            </button>
                        </div>
                    </div>
                    <!-- Metode Pembayaran -->
                    <div id="bank_group" class="hidden animate__animated animate__fadeIn">
                        <div class="flex flex-col space-y-4">
                            <label
                                class="relative block cursor-pointer transition-all duration-300 ease-in-out hover:scale-[1.02]">
                                <input type="radio" name="bank" value="bca" class="peer hidden" checked />
                                <div
                                    class="card-body relative rounded-md border border-gray-300 p-4 transition-all duration-300 ease-in-out peer-checked:border-[#11689B] peer-checked:bg-[#11689B]/10">
                                    <div
                                        class="absolute right-4 top-4 hidden h-6 w-6 items-center justify-center rounded-full bg-[#11689B] text-white peer-checked:flex">
                                        <div class="check-icon text-sm">✔</div>
                                    </div>
                                    <img src="{{ url('/assets/images/icon') }}/bca.png" alt="BCA" class="w-12" />
                                </div>
                            </label>

                            <label
                                class="relative block cursor-pointer transition-all duration-300 ease-in-out hover:scale-[1.02]">
                                <input type="radio" name="bank" value="mandiri" class="peer hidden" />
                                <div
                                    class="card-body relative rounded-md border border-gray-300 p-4 transition-all duration-300 ease-in-out peer-checked:border-[#11689B] peer-checked:bg-[#11689B]/10">
                                    <div
                                        class="absolute right-4 top-4 hidden h-6 w-6 items-center justify-center rounded-full bg-[#11689B] text-white peer-checked:flex">
                                        <div class="check-icon text-sm">✔</div>
                                    </div>
                                    <img src="{{ url('/assets/images/icon') }}/mandiri.png" alt="Mandiri"
                                        class="w-12" />
                                </div>
                            </label>

                            <label
                                class="relative block cursor-pointer transition-all duration-300 ease-in-out hover:scale-[1.02]">
                                <input type="radio" name="bank" value="bri" class="peer hidden" />
                                <div
                                    class="card-body relative rounded-md border border-gray-300 p-4 transition-all duration-300 ease-in-out peer-checked:border-[#11689B] peer-checked:bg-[#11689B]/10">
                                    <div
                                        class="absolute right-4 top-4 hidden h-6 w-6 items-center justify-center rounded-full bg-[#11689B] text-white peer-checked:flex">
                                        <div class="check-icon text-sm">✔</div>
                                    </div>
                                    <img src="{{ url('/assets/images/icon') }}/bri.png" alt="BRI" class="w-12" />
                                </div>
                            </label>

                            <label
                                class="relative block cursor-pointer transition-all duration-300 ease-in-out hover:scale-[1.02]">
                                <input type="radio" name="bank" value="bni" class="peer hidden" />
                                <div
                                    class="card-body relative rounded-md border border-gray-300 p-4 transition-all duration-300 ease-in-out peer-checked:border-[#11689B] peer-checked:bg-[#11689B]/10">
                                    <div
                                        class="absolute right-4 top-4 hidden h-6 w-6 items-center justify-center rounded-full bg-[#11689B] text-white peer-checked:flex">
                                        <div class="check-icon text-sm">✔</div>
                                    </div>
                                    <img src="{{ url('/assets/images/icon') }}/bni.png" alt="BNI" class="w-12" />
                                </div>
                            </label>

                            <label
                                class="relative block cursor-pointer transition-all duration-300 ease-in-out hover:scale-[1.02]">
                                <input type="radio" name="bank" value="cimb" class="peer hidden" />
                                <div
                                    class="card-body relative rounded-md border border-gray-300 p-4 transition-all duration-300 ease-in-out peer-checked:border-[#11689B] peer-checked:bg-[#11689B]/10">
                                    <div
                                        class="absolute right-4 top-4 hidden h-6 w-6 items-center justify-center rounded-full bg-[#11689B] text-white peer-checked:flex">
                                        <div class="check-icon text-sm">✔</div>
                                    </div>
                                    <img src="{{ url('/assets/images/icon') }}/cimb.png" alt="CIMB" class="w-12" />
                                </div>
                            </label>

                            <label
                                class="relative block cursor-pointer transition-all duration-300 ease-in-out hover:scale-[1.02]">
                                <input type="radio" name="bank" value="permata" class="peer hidden" />
                                <div
                                    class="card-body relative rounded-md border border-gray-300 p-4 transition-all duration-300 ease-in-out peer-checked:border-[#11689B] peer-checked:bg-[#11689B]/10">
                                    <div
                                        class="absolute right-4 top-4 hidden h-6 w-6 items-center justify-center rounded-full bg-[#11689B] text-white peer-checked:flex">
                                        <div class="check-icon text-sm">✔</div>
                                    </div>
                                    <img src="{{ url('/assets/images/icon') }}/permata.png" alt="Permata"
                                        class="w-12" />
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mt-6">
                        <button type="submit" class="bg-[#11689B] text-white px-4 py-2 rounded w-full">Booking
                            Sekarang</button>
                    </div>

                </form>
            </div>

            <!-- Sticky Booking -->
            <!-- <div class="sticky bottom-0 bg-white shadow-lg p-4 mt-4 flex justify-between items-center z-10">
                <div>
                    <div class="text-lg font-bold text-black" id="price">Rp.500.000</div>
                    <div class="text-sm text-gray-600">*Booking + BI checking</div>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded" onclick="validasiBook()">Booking
                    Sekarang</button>
            </div> -->
        </div>
    </div>





    <script src="{{asset('/vendor')}}/leaflet/dist/leaflet.js"></script>
    <script src="{{asset('/vendor')}}/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('/vendor')}}/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.5.1/maptiler-sdk.umd.js"></script>
    <script src="https://cdn.maptiler.com/leaflet-maptilersdk/v2.0.0/leaflet-maptilersdk.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js@3.2/dist/svg.min.js"></script> -->
    @include('redesign.modal.benefit')
    <script>

        const carousels = [
            { section: '#aside-section-1', carousel: '#section-detail-1' },
            { section: '#aside-section-2', carousel: '#section-detail-2' },
            { section: '#aside-section-3', carousel: '#section-detail-3' },
            { section: '#aside-section-4', carousel: '#section-detail-4' },
            { section: '#aside-section-5', carousel: '#section-detail-5' },
            { section: '#aside-section-6', carousel: '#section-detail-6' },
        ];
        let currentActiveCarousel = null;
        const scrollContainer = $('.container-group') || window;

        $(document).ready(function () {


        });

        var sw1 = new Swiper(".sw-section-1", {
            // Mengaktifkan paginasi (titik di bawah)
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // Mengaktifkan tombol navigasi (panah kiri-kanan)
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: true,
        });

        $('.metode button').on('click', function () {
            $('.grid-cols-3 button').removeClass('selected');
            $(this).addClass('selected');
            if ($(this).attr('id') === 'va-button') {
                $('#bank_group').removeClass('hidden');
            } else {
                $('#bank_group').addClass('hidden');
            }
        });
        const mobile = isMobile();
        var wind = $('.container-group');
        var sticky = $('#sticky-header');
        wind.on('scroll', function () {
            var scroll = wind.scrollTop();

            if (scroll > 0) {
                mobile ? '' : sticky.addClass('hidden')
            } else {
                sticky.removeClass('hidden');
            }
        });
        $('.tab-btn').click(function () {
            const tab = $(this).data('tab');

            $('.tab-btn').removeClass('bg-[#11689B] text-white').addClass('bg-gray-200 text-gray-700');
            $(this).addClass('bg-[#11689B] text-white').removeClass('bg-gray-200 text-gray-700');

            $('.tab-content').addClass('hidden');
            $('#' + tab).removeClass('hidden');
        });


        $('.container-group').on('scroll', function () {


            for (const { section, carousel } of carousels) {
                if (activateCarousel(section, carousel)) {
                    if (currentActiveCarousel !== carousel) {
                        currentActiveCarousel = carousel;
                    }
                    break;
                }
            }
        });
        function activateCarousel(sectionId, carouselId) {
            const section = $(sectionId);
            if (section.length === 0) return false;
            const carousel = $(carouselId);

            const position = section.position();
            const top = position.top;
            const offset = section.outerHeight() * 0.7;
            const outerHeight = section.outerHeight();

            // jika bagian atas section sudah terlihat dalam viewport container kanan
            if (top <= 80 && top > -outerHeight) {
                // if (carouselId == '#section-detail-5') {
                //     setTimeout(function () {
                //         map.invalidateSize();
                //     }, 100);
                // }
                if (carouselId === '#section-detail-5' && !isMapInitialized) {
                    // initializeMap();
                    isMapInitialized = true; // Set penanda agar tidak diinisialisasi ulang
                } else if (carouselId === '#section-detail-5' && isMapInitialized) {
                    map.invalidateSize();
                    // setTimeout(function () {
                    // }, 10); // Diberi jeda singkat agar transisi CSS selesai
                }
                $('.section-detail').not(carousel).fadeOut(300); // 300ms agar cepat

                if (!carousel.is(':visible')) {
                    carousel.fadeIn(500); // 500ms sesuai durasi di class Tailwind
                }

                return true;
            }
            return false;
        }


        $(document).ready(function () {
            let currentSlide = 0;
            const slides = $('.slide');
            const totalSlides = slides.length;
            const duration = 5000; // 5 detik per slide

            function runSlideshow() {
                const $currentSlide = slides.eq(currentSlide);
                const nextSlide = (currentSlide + 1) % totalSlides;
                const $nextSlide = slides.eq(nextSlide);

                // --- ANIMASI KELUAR (OUT) UNTUK SLIDE SAAT INI ---

                // Teks: Slide ke atas dan fade out
                $currentSlide.find('.text-container h2, .text-container p').animate({
                    top: '-=30px', // Bergerak ke atas
                    opacity: 0
                }, 800);

                // Gambar: Fade out
                $currentSlide.find('.image-container').animate({
                    opacity: 0
                }, 800);

                // --- ANIMASI MASUK (IN) UNTUK SLIDE BERIKUTNYA ---
                setTimeout(function () {
                    // Sembunyikan slide saat ini sepenuhnya
                    $currentSlide.css('opacity', 0);

                    // Siapkan posisi awal teks slide berikutnya (sedikit di bawah dan transparan)
                    $nextSlide.find('.text-container h2, .text-container p').css({
                        top: '30px',
                        opacity: 0
                    });
                    // Siapkan gambar slide berikutnya (transparan)
                    $nextSlide.find('.image-container').css({
                        opacity: 0
                    });

                    // Tampilkan kontainer slide berikutnya
                    $nextSlide.css('opacity', 1);

                    // Animasikan teks slide berikutnya ke posisi normal
                    $nextSlide.find('.text-container h2, .text-container p').animate({
                        top: '0px',
                        opacity: 1
                    }, 800);

                    // Animasikan gambar slide berikutnya (fade in)
                    $nextSlide.find('.image-container').animate({
                        opacity: 1
                    }, 800);

                    // Update slide saat ini untuk siklus berikutnya
                    currentSlide = nextSlide;
                }, 1000); // Tunggu 1 detik sebelum slide berikutnya masuk
            }

            // Jalankan slideshow secara otomatis
            setInterval(runSlideshow, duration);
        });

        // $('#form_booking').submit(function (e) { 
        //     e.preventDefault();

        // });
        function isMobile() {
            return window.innerWidth < 768;
        }
    </script>
    @include('redesign.part.js_validate_book')
    @include('redesign.part.js_siteplan')
</body>

</html>