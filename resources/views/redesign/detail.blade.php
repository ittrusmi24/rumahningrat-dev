<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Project</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="{{asset('/vendor')}}/jquery/dist/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        rel="stylesheet" />
    <link href="{{asset('/vendor')}}/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <style>
        html,
        body {
            overflow-y: hidden;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        #wrapper-detail p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        label {
            font-family: var(--fontFamily);
            color: var(--fontColor);
        }

        .container-group {
            overflow-y: scroll;
            height: 100vh;
            position: relative;
            margin-bottom: 20vh;
        }

        .container-group::-webkit-scrollbar {
            display: none;
            /* Hides scrollbar in WebKit browsers */
        }



        .group-container {
            /* background-color: #1685b6; */
        }



        .aside-section {
            padding: 20px 16px;
        }






        /* section blok */
        #blok-container {
            overflow-y: auto;
            max-height: 200px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        #blok-container::-webkit-scrollbar {
            display: none;
            /* Hides scrollbar in WebKit browsers */
        }




        /* form section */

        #form-section {
            margin-bottom: 15vh;
        }

        /* untuk css map */
        #video_tour {
            /* position: absolute; */
            /* top: 0px;
    left: 0px;
    bottom: 0px; */
            width: 100%;
            height: 100vh;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            pointer-events: none;
            /* Mencegah klik pada video */
        }

        #map {
            height: 100vh;
            width: 100%;
        }

        .vt_view {
            height: 100vh;
            width: 100%;
        }

        .legend-box {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 3px;
        }

        .legend.card {
            /* font-family: Arial, sans-serif; */
            font-size: 10px;
            width: 100%;
        }






        /* responsive breakpoints */

        /* desktop */
        @media (min-width: 992px) {
            .owl-carousel .owl-item img {
                height: 100vh;
                width: 100%;
                object-fit: fill;
            }

            /* button chat ai */
            .chat-ai {
                left: 20px;
                bottom: 20px;
            }
        }

        /* mobile */
        @media (min-width: 320px) and (max-width: 767px) {
            .owl-carousel .owl-item img {
                height: 30vh;
            }

            *:not(svg):not(svg *) {
                font-size: var(--fontSize);
            }

            /* form section */
            #form-section {
                margin-bottom: 20vh !important;
            }

            /* bonus section */
            .bonus-container {
                grid-template-columns: minmax(0, 60vw);
                justify-content: center;
                gap: 12px;
            }

            .sticky-container {
                position: fixed;
                /* Ensure it sticks to the bottom on mobile */
                bottom: 0;
                width: 100%;
                /* Take full width on mobile */
                padding: 4px 20px 4px 20px;
                border-radius: 20px 20px 0px 0px;
                /* Remove rounded corners for mobile */
                box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
                /* Slightly stronger shadow */
                font-size: 12px;
            }

            .price {
                font-size: 20px;
                /* Adjust font size for smaller screens */
            }

            .note {
                font-size: 8px;
            }

            .btn-primary {
                padding: 10px 15px;
                /* Further adjust padding */
                font-size: 14px;
                /* Adjust font size for smaller screens */
            }

            .section-form {
                margin-bottom: 300px;
            }

            .select-blok {
                height: 30px;
                width: 100%;
            }

            /* button chat ai */
            .chat-ai {
                left: 10px;
                top: 10px;
                width: 60px;
                height: 50px;
            }

            .chat-ai p {
                font-size: 10px;
            }

            .chat-ai i {
                font-size: 20px;
            }

            #video_tour {
                position: relative;
                width: 100%;
                height: 30vh !important;
            }

            video {
                position: absolute;
                inset: 0;
                object-fit: cover;
                pointer-events: none;
            }

            .vt_view {
                height: 30vh !important;
            }

            #map {
                height: 30vh !important;
            }

            .stikcy-nav-container {
                position: relative;
                top: unset;
                left: unset;
                right: unset;
            }

            .navbar .btn.btn-primary.btn-sm {
                font-size: 10px;
                padding: 4px;
            }

            .legend-box {
                display: inline-block;
                width: 8px;
                height: 8px;
                border-radius: 3px;
            }

            .legend.card {
                /* font-family: Arial, sans-serif; */
                font-size: 6px;
                width: 100%;
            }

            .item_legends {
                font-size: 10px;
            }

            .legend-content small {
                font-size: 10px;
            }

            /* nira ai */

            .dropup:has(.show) {
                bottom: 10vh;
                /* Dropdown naik ke posisi 10vh dari bawah */
            }

            .chatboxes.align-right.bottom-0 {
                top: 55px;
                bottom: 4px !important;
            }

            .dropdown-menu {
                transform: translate3d(0, 0, 0) !important;
                /* Reset transform */
                top: 100% !important;
                /* Tampilkan ke bawah */
                left: 0 !important;
                /* Tampilkan ke kanan bawah */
                z-index: 999999;
                height: 90vh;
            }


        }

        .selected {
            border-width: 2px;
            border-color: #11689B;
            box-shadow: 0 4px 6px -1px rgba(17, 104, 155, 0.3),
                0 2px 4px -1px rgba(17, 104, 155, 0.1);
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <div class="lg:flex h-screen" id="wrapper-detail">
        @include('redesign.layout.top_bar', [
    'page' => 'detail'
])
        <!-- Gallery (Left) -->

        <div class="w-full lg:w-2/3 h-[300px] lg:h-screen">
            <div class="section-detail w-full h-full transition-opacity duration-500 ease-in-out" id="section-detail-1">
                <div class="relative w-full h-full">
                    <img src="/assets/images/section/section_1.png" class="w-full h-full object-cover" />
                    <div class="absolute top-5 right-2 bottom-0 flex flex-col space-y-1 text-white text-xs mt-12 mb-5 gap-2">
                        <div
                            class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                            <i class="mdi mdi-gate text-lg"></i>
                            <span class="text-xs">Gratis Pagar</span>
                        </div>
                        <div
                            class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex flex-col items-center justify-center w-25">
                            <i class="mdi mdi-wall text-lg"></i>
                            <span class="text-xs">Gratis Tembok<br>Belakang</span>
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

                    <div class="absolute px-5 py-5 top-6 bottom-0 flex flex-col space-y-1 text-white text-xs mt-12">
                        <button
                            class="bg-white text-[#11689B] hover:bg-[#11689B] hover:text-white rounded-md p-2 flex items-center gap-2 text-sm transition-colors duration-300 shadow-md">
                            <i class="mdi mdi-open-in-new"></i>
                            <span>Lihat Detail</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="section-detail w-full h-full hidden transition-opacity duration-500 ease-in-out"
                id="section-detail-2">
                <div class="w-full h-full">
                    <img src="/assets/images/project/render-rn-3.png" class="w-full h-full object-cover" />
                </div>
            </div>
            <div class="section-detail w-full h-full hidden transition-opacity duration-500 ease-in-out"
                id="section-detail-3">
                <div class="w-full h-full">
                    <img src="/assets/images/carousel/1.png" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>


        <!-- Content (Right) -->
        <div class="w-full lg:w-1/3 h-auto lg:h-screen overflow-y-auto px-8 py-6 container-group">
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
            <div id="aside-section-2" class="mb-6">
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
                <div>
                    <h2 class="text-xl font-semibold mb-4">Pilih Blok Rumah Impian Anda</h2>
                    <select
                        class="w-full rounded px-4 py-2 bg-white focus:outline-none border-gray-300 hover:border-[#11689B] focus:ring-2 focus:ring-[#11689B] transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30">
                        <option seleced disabled>-- Pilih Blok --</option>
                        <option value="A02">Blok A02</option>
                        <option value="B02">Blok B02</option>
                        <option value="C02">Blok C02</option>
                    </select>
                </div>
            </div>
            <div id="aside-section-3" class="mb-6">
                <div class="text-center mb-4">
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

            </div>
            <div id="aside-section-4" class="mb-6">
                <h2 class="text-lg font-semibold mb-6">Isi Data Diri Pembeli</h2>

                <form class="space-y-4">

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Nama Lengkap <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B] focus:border-2
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Nama lengkap" required>
                    </div>

                    <!-- Nomor HP -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Nomor Handphone <span
                                class="text-red-500">*</span></label>
                        <input type="tel" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Nomor HP" required>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Tanggal Lahir <span
                                class="text-red-500">*</span></label>
                        <input type="date" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30" required>
                    </div>

                    <!-- Tempat Lahir -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Tempat Lahir <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Kota tempat lahir" required>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Jenis Kelamin <span
                                class="text-red-500">*</span></label>

                        <div className="grid grid-cols-5 grid-rows-1 gap-4">
                            <div className="col-span-2">
                                <input type="radio" id="option1" name="jenis kelamin" value="L"
                                    class="form-radio text-[#11689B]">
                                <label for="option1">Laki Laki</label>
                            </div>
                            <div className="col-span-2 col-start-4">
                                <input type="radio" id="option2" name="jenis kelamin" value="P"
                                    class="form-radio text-[#11689B]">
                                <label for="option2">Perempuan</label>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">



                        </div>

                    </div>

                    <!-- Nomor KTP -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Nomor KTP <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Masukkan nomor KTP" required>
                    </div>

                    <!-- Kelurahan -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Kelurahan Tempat Tinggal <span
                                class="text-red-500">*</span></label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Masukkan nama kelurahan saat ini" required>
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Alamat Tempat Tinggal <span
                                class="text-red-500">*</span></label>
                        <textarea class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Masukkan detail alamat tempat tinggal" required></textarea>
                    </div>

                    <!-- Tambahan -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Pekerjaan</label>
                        <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                            placeholder="Contoh: Karyawan Swasta">
                    </div>

                    <div class="flex gap-4">
                        <div class="w-1/2">
                            <label class="block text-sm font-medium mb-1">Pendapatan (Rp)</label>
                            <input type="number" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                                placeholder="Contoh: 5.000.000">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-sm font-medium mb-1">Biaya Hidup (Rp)</label>
                            <input type="number" class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30"
                                placeholder="Contoh: 3.000.000">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Status Pernikahan</label>
                        <select class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30">
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
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30">
                                <option>KPR</option>
                                <option>Tunai</option>
                            </select>
                        </div>
                        <div class="w-1/2">
                            <label class="block text-sm font-medium mb-1">Tenor Pembayaran</label>
                            <select class="w-full rounded-md border border-gray-300 px-3 py-2
              focus:outline-none focus:border-[#11689B]
              hover:border-[#11689B]
              transition duration-200 ease-in-out focus:scale-105 focus:shadow-md focus:shadow-[#11689B]/30">
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
    <div id="modal-fasilitas" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen">
        <div class="relative p-4 w-full max-w-4xl h-screen">
            <div class="relative bg-white rounded-lg shadow-sm  h-full flex flex-col">
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Rumah Ningrat Jayasampurna
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="modal-fasilitas">
                        <span class="mdi mdi-close"></span>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <div class="p-4 md:p-5 space-y-4 overflow-y-auto flex-1">
                    <div class="mb-8">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">
                            Hunian Modern yang Dirancang untuk Kesehatan, Kenyamanan, dan Kehidupan Seimbang
                        </h1>
                    </div>
                    <div class="mb-8">

                        <img src="https://i.ibb.co/1K749z4/jogging-track.jpg"
                            alt="Jogging Track, Rumah Ningrat Jayasampurna" class="w-full rounded-lg shadow-md mb-4">
                        <p class="text-gray-700 text-lg font-semibold">Jogging Track</p>
                        <p class="text-sm text-gray-500 mt-2">
                            Dengan area jogging track yang nyaman dan sejuk, warga dapat berolahraga rutin dan menikmati
                            pengalaman berolahraga yang menyenangkan.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <img src="https://i.ibb.co/68v8L8K/lapangan.jpg" alt="Lapangan Olahraga Multifungsi"
                                class="w-full rounded-lg shadow-md mb-4">
                            <p class="text-gray-700 text-lg font-semibold">Lapangan Olahraga
                                Multifungsi</p>
                            <p class="text-sm text-gray-500 mt-2">
                                Fasilitas ini dirancang agar dapat memfasilitasi berbagai kegiatan olahraga, seperti
                                basket, futsal, atau voli.
                            </p>
                        </div>
                        <div>
                            <img src="https://i.ibb.co/9qQJ9gS/ruang-terbuka.jpg" alt="Ruang Terbuka Hijau"
                                class="w-full rounded-lg shadow-md mb-4">
                            <p class="text-gray-700 text-lg font-semibold">Ruang Terbuka Hijau</p>
                            <p class="text-sm text-gray-500 mt-2">
                                Lingkungan hunian yang asri dan nyaman dengan ruang terbuka hijau yang didesain secara
                                estetis dan fungsional.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modal-fasilitas" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-komunitas" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen">
        <div class="relative p-4 w-full max-w-4xl h-screen">
            <div class="relative bg-white rounded-lg shadow-sm  h-full flex flex-col">
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Rumah Ningrat Jayasampurna
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal-komunitas">
                        <span class="mdi mdi-close"></span>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <div class="p-4 md:p-8 space-y-8 overflow-y-auto flex-1">

                    <div class="text-center">
                        <img src="https://i.ibb.co/b3W9VbN/Frame-1686557976-2.jpg" alt="Aplikasi Komunitas di Handphone"
                            class="w-full max-w-sm mx-auto rounded-lg shadow-md">
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mt-6">
                            Rumah Ningrat Series 2025, Hunian yang Menguatkan Ikatan Sosial dan Membangun Komunitas yang
                            Tumbuh dalam Rasa Kebersamaan
                        </h1>
                    </div>

                    <div>
                        <img src="https://i.ibb.co/yY1kG0H/image.png" alt="Kegiatan edukatif komunitas di dalam ruangan"
                            class="w-full rounded-lg shadow-md mb-4">
                        <h2 class="text-xl font-semibold text-gray-800 dar-200">Komunitas yang Tumbuh Lewat
                            Kegiatan Edukatif dan Inspiratif</h2>
                        <p class="text-gray-600 mt-2">
                            Komunitas yang solid adalah kunci utama dari hunian yang nyaman. Kami menyediakan berbagai
                            kegiatan edukatif yang melibatkan seluruh anggota keluarga, seperti seminar, workshop
                            pengembangan diri, dll. Hunian bukan hanya tempat tinggal, tapi ruang tumbuh yang aktif dan
                            suportif.
                        </p>
                    </div>

                    <div>
                        <img src="https://i.ibb.co/yVwL3zV/image.png"
                            alt="Komunitas sedang melakukan kegiatan tanam pohon"
                            class="w-full rounded-lg shadow-md mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">Komunitas Hijau dan Peduli
                            Lingkungan</h2>
                        <p class="text-gray-600 mt-2">
                            Melalui kegiatan tanam pohon bersama, workshop daur ulang, dan program kebersihan
                            lingkungan, warga diajak untuk secara aktif menjaga kelestarian lingkungan. Rumah Ningrat
                            berkomitmen dalam semangat pelestarian alam.
                        </p>
                    </div>

                    <div>
                        <img src="https://i.ibb.co/mH2Sg27/image.png" alt="Ibu-ibu komunitas sedang berkumpul bersama"
                            class="w-full rounded-lg shadow-md mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">Kehangatan dalam Kebersamaan
                        </h2>
                        <p class="text-gray-600 mt-2">
                            Interaksi sosial antar tetangga dan warga menjadi bagian penting dari kehidupan di Rumah
                            Ningrat. Ruang komunal yang nyaman dan fasilitas pendukung lainnya dirancang untuk
                            menumbuhkan keakraban.
                        </p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Komunitas yang Aktif,
                            Ruang Sosial yang Positif</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-gray-600">
                            <ul class="space-y-2">
                                <li>- Kegiatan Seni dan Budaya</li>
                                <li>- Kegiatan Keagamaan Rutin Tiap Minggu</li>
                                <li>- Komunitas Olahraga dan Anak</li>
                            </ul>
                            <ul class="space-y-2">
                                <li>- Klub UMKM dan Usaha Bersama</li>
                                <li>- Acara Ramah Tamah Antar Warga</li>
                                <li>- Kegiatan Sosial dan Support antar Warga</li>
                            </ul>
                        </div>
                        <p class="text-xs text-gray-500 mt-6">
                            Rumah Ningrat dirancang tidak hanya sebagai tempat tinggal, namun juga sebagai sebuah
                            komunitas yang hidup, dimana setiap individu dapat berkembang, berinteraksi, dan merasa
                            menjadi bagian dari lingkungan yang peduli.
                        </p>
                    </div>

                </div>

                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modal-komunitas" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-keamanan" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen bg-gray-900 bg-opacity-50">
        <div class="relative p-4 w-full max-w-4xl h-screen">
            <div class="relative bg-white rounded-lg shadow h-full flex flex-col">

                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Sistem Keamanan Terpadu
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="modal-keamanan">
                        <span class="mdi mdi-close"></span>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <div class="p-4 md:p-8 space-y-8 overflow-y-auto flex-1">

                    <div class="text-center">
                        <div class="flex justify-center my-6">

                            <img src="{{asset('assets/images/modal/keamanan_1.png')}}" alt="Logo Rumah Ningrat"
                                class="w-full rounded-lg shadow-md">
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-6">
                            Rumah Ningrat Jayasampurna Series 2025, Hunian Modern yang Mengutamakan Rasa Aman dan Nyaman
                            Bagi Setiap Penghuni
                        </h2>
                    </div>

                    <div>


                        <img src="{{asset('assets/images/modal/keamanan_2.png')}}" alt="Kolase gambar CCTV dan rumah"
                            class="w-full rounded-lg shadow-md mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Security 24 Jam yang Siap Menjaga Ketenangan
                            Anda</h3>
                        <p class="text-gray-600 mt-2">
                            Tim keamanan kami berpatroli secara rutin dan didukung oleh sistem pemantauan CCTV canggih
                            yang tersebar di seluruh area hunian. Setiap sudut penting terpantau untuk memastikan
                            lingkungan yang aman dan bebas dari gangguan.
                        </p>
                    </div>

                    <div>

                        <img src="{{asset('assets/images/modal/keamanan_3.png')}}"
                            alt="Portal otomatis sistem satu gerbang" class="w-full rounded-lg shadow-md mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Sistem One Gate yang Membatasi Akses Hanya untuk
                            Penghuni</h3>
                        <p class="text-gray-600 mt-2">
                            Akses keluar masuk perumahan diatur dalam satu gerbang utama dengan penjagaan keamanan 24
                            jam. Sistem ini menjamin bahwa hanya penghuni dan tamu terverifikasi yang dapat memasuki
                            area, menjaga privasi dan keamanan hunian secara maksimal.
                        </p>
                    </div>

                    <div>

                        <img src="{{asset('assets/images/modal/keamanan_4.png')}}"
                            alt="Gerbang utama perumahan yang megah" class="w-full rounded-lg shadow-md mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Gerbang Utama yang Mewakili Keamanan dan
                            Kebanggaan Hunian</h3>
                        <p class="text-gray-600 mt-2">
                            Desain gerbang yang megah dan dilengkapi pos keamanan merupakan representasi dari komitmen
                            kami untuk memberikan standar keamanan terbaik sekaligus menjadi ikon kebanggaan bagi setiap
                            penghuni.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Keamanan Berlapis untuk Ketenangan Maksimal
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-gray-600">
                            <ul class="space-y-2">
                                <li>- CCTV Terpasang 24 Jam</li>
                                <li>- Pos Keamanan di Gerbang Utama</li>
                                <li>- Petugas Keamanan Profesional</li>
                            </ul>
                            <ul class="space-y-2">
                                <li>- One Gate System (Sistem Satu Gerbang)</li>
                                <li>- Akses Terbatas untuk Tamu</li>
                                <li>- Desain Pencahayaan Lingkungan yang Baik</li>
                            </ul>
                        </div>
                        <p class="text-xs text-gray-500 mt-6">
                            Rumah Ningrat Series 2025 memberikan prioritas tertinggi pada keamanan Anda. Dengan sistem
                            keamanan berlapis, kami menciptakan lingkungan yang aman dan nyaman, sehingga Anda dapat
                            menjalani hidup dengan tenang tanpa rasa khawatir.
                        </p>
                    </div>

                </div>

                <div class="flex items-center justify-end p-4 border-t border-gray-200">
                    <button data-modal-hide="modal-keamanan" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-ekonomi" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen bg-gray-900 bg-opacity-50">
        <div class="relative p-4 w-full max-w-4xl h-screen">
            <div class="relative bg-white rounded-lg shadow h-full flex flex-col">

                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Keluarga Ningrat: Solusi Digital untuk Mendukung UMKM Warga
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="modal-ekonomi">
                        <span class="mdi mdi-close"></span>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <div class="p-4 md:p-8 space-y-8 overflow-y-auto flex-1">

                    <div class="text-center">
                        <img src="{{asset('assets/images/modal/ekonomi_1.png')}}"
                            alt="Aplikasi Keluarga Ningrat di Handphone" class="w-full rounded-lg shadow-md">
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mt-6">
                            Rumah Ningrat Series 2025, Hunian Modern yang Mendorong Pertumbuhan Ekonomi Warga Lewat
                            Aplikasi Digital Keluarga Ningrat dan Fitur Marketplace Eksklusif
                        </h1>
                    </div>

                    <div>
                        <img src="{{asset('assets/images/modal/ekonomi_4.png')}}"
                            alt="Mengakses bisnis dari mana saja lewat aplikasi"
                            class="w-full rounded-lg shadow-md mb-4 object-cover h-64">
                        <h2 class="text-xl font-semibold text-gray-800">Akses Bisnis Dimanapun: Jangkau Pelanggan Warga
                            Rumah Ningrat Lewat Genggaman</h2>
                        <p class="text-gray-600 mt-2">
                            Dengan aplikasi Keluarga Ningrat, para pelaku UMKM dapat mengelola toko mereka dari mana
                            saja dan kapan saja. Tidak ada lagi batasan ruang dan waktu untuk melayani tetangga atau
                            menerima pesanan. Platform ini memungkinkan pesanan tetap berjalan lancar baik saat Anda
                            sedang di rumah ataupun dalam perjalanan.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Detail Pesanan: Mudah digunakan, dan
                                dipahami</h2>
                            <p class="text-gray-600 mt-2">
                                Dengan dukungan fitur portal pembayaran aplikasi Keluarga Ningrat, warga dapat melakukan
                                transaksi jual beli dengan mudah dan aman. Antarmuka yang intuitif memudahkan pembeli
                                untuk melihat detail pesanan mereka hingga berkomunikasi dengan penjual. Proses
                                transaksi jadi lebih nyaman dan terpercaya.
                            </p>
                        </div>
                        <div>
                            <img src="{{asset('assets/images/modal/ekonomi_3.png')}}"
                                alt="Tampilan detail pesanan di aplikasi" class="w-full rounded-lg shadow-md">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <img src="{{asset('assets/images/modal/ekonomi_2.png')}}"
                                alt="Proses pembayaran di aplikasi" class="w-full rounded-lg shadow-md">
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Transaksi Cepat dan Aman Lewat Fitur
                                Checkout di Aplikasi Keluarga Ningrat</h2>
                            <p class="text-gray-600 mt-2">
                                Sistem pembayaran yang terintegrasi memungkinkan proses checkout yang cepat dan aman.
                                Warga bisa menyelesaikan pembayaran tanpa hambatan dengan berbagai metode pembayaran
                                yang tersedia, langsung dari aplikasi tanpa perlu berpindah platform.
                            </p>
                        </div>

                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Komunitas yang Aktif, Ruang Sosial yang
                            Positif</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-gray-600">
                            <ul class="space-y-2">
                                <li>- Manajemen Toko yang Mudah</li>
                                <li>- Notifikasi Pesanan Real-time</li>
                                <li>- Fitur Chat Langsung dengan Pelanggan</li>
                            </ul>
                            <ul class="space-y-2">
                                <li>- Integrasi Peta dan Informasi Lokasi</li>
                                <li>- Rekapitulasi Transaksi Otomatis</li>
                                <li>- Jadwal Bazar dan Acara UMKM di Lingkungan</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="flex items-center justify-end p-4 border-t border-gray-200">
                    <button data-modal-hide="modal-ekonomi" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tutup</button>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>

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
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                items: 1,
                navText: [
                    "<span class='text-2xl'>&larr;</span>",
                    "<span class='text-2xl'>&rarr;</span>"
                ]
            });

            let currentActiveCarousel = null;
            const scrollContainer = $('.container-group') || window;

            $('.container-group').on('scroll', function () {
                const carousels = [
                    { section: '#aside-section-1', carousel: '#section-detail-1' },
                    { section: '#aside-section-2', carousel: '#section-detail-2' },
                    { section: '#aside-section-3', carousel: '#section-detail-3' }
                ];

                for (const { section, carousel } of carousels) {
                    if (activateCarousel(section, carousel)) {
                        if (currentActiveCarousel !== carousel) {
                            currentActiveCarousel = carousel;
                        }
                        break;
                    }
                }
            });

        });
        function activateCarousel(sectionId, carouselId) {
            const section = $(sectionId);
            const carousel = $(carouselId);

            const position = section.position();
            const top = position.top;
            const offset = section.outerHeight() * 0.7;
            const outerHeight = section.outerHeight();

            // jika bagian atas section sudah terlihat dalam viewport container kanan
            if (top <= 80 && top > -outerHeight) {
                // $('.section-detail').css('display', 'none');
                // carousel.css('display', 'block');
                // return true;
                $('.section-detail').not(carousel).fadeOut(300); // 300ms agar cepat

                // Tampilkan carousel yang aktif dengan efek fade in
                // Cek dulu apakah sudah terlihat, agar tidak menjalankan animasi berulang kali
                if (!carousel.is(':visible')) {
                    carousel.fadeIn(500); // 500ms sesuai durasi di class Tailwind
                }

                return true;
            }
            return false;
        }

        function validasiBook() {
            alert('Booking diklik!');
        }
        function isMobile() {
            return window.innerWidth < 768;
        }
    </script>
</body>

</html>