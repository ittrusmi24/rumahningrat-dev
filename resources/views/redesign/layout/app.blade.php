<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumah Ningrat Jayasampurna Series 2025</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}"> -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{asset('/vendor')}}/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('/vendor')}}/leaflet/dist/leaflet.css" />
    <link href="{{asset('/vendor')}}/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <style>
        .leaflet-container {
            border-radius: 0.5rem;
        }
    </style>
</head>

<body class="m-0 p-0 font-sans">

    <!-- Hero Section -->
    <section class="relative h-screen w-full bg-cover bg-center "
        style="background-image: url('/assets/images/bg-header.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        @include('redesign.layout.top_bar', [
    'page' => 'home'
])
        <!-- Navbar -->
        <!--  -->

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-2 text-shadow-lg text-shadow-black">Rumah Ningrat
                Jayasampurna<br />Series 2025</h1>
            <p class="text-base md:text-lg mb-6 text-shadow-lg text-shadow-black">Properti eksklusif dengan proses
                pengajuan mudah dan cicilan mulai Rp1
                juta per bulan</p>
            <a href="/detail-new"
                class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-2 px-6 rounded-full transition-all duration-300">
                <span>Booking Sekarang</span>
            </a>
        </div>
    </section>
    <section class="container mx-auto px-10 pt-12 pb-6">
        <div class="mt-5">
            <div class="text-center ">
                <h2 class="text-3xl font-bold text-[#11689B]">Penghargaan Kami</h2>
                <p class="text-md text-gray-500 dark:text-gray-400 mt-2">Diakui atas Komitmen dan Kualitas Terbaik</p>
            </div>

            <div class="relative">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper items-center">
                        <div class="swiper-slide flex flex-col justify-center text-center ">
                            <h2 class="text-lg font-semibold mb-2">Best Selling Non Subsidiez 2028 by Bank BTN</h2>
                            <img src="{{asset('assets/images/awr_1.png')}}" class="w-full h-13 object-contain" />
                            <p class="text-sm text-gray-600 mt-2">Penghargaan untuk penjualan unit non-subsidi
                                tertinggi.</p>
                        </div>

                        <div class="swiper-slide flex flex-col justify-center text-center ">
                            <h2 class="text-lg font-semibold mb-2">Best Selling Non Subsidiez 2028 by Bank BTN</h2>
                            <img src="{{asset('assets/images/awr_2.png')}}" class="w-full h-13 object-contain" />
                            <p class="text-sm text-gray-600 mt-2">Kategori Developer dengan Performa Terbaik.</p>
                        </div>

                        <div class="swiper-slide flex flex-col justify-center text-center ">
                            <h2 class="text-lg font-semibold mb-2">Best Selling Non Subsidiez 2028 by Bank BTN</h2>
                            <img src="{{asset('assets/images/awr_3.png')}}" class="w-full h-13 object-contain" />
                            <p class="text-sm text-gray-600 mt-2">Pencapaian Target Penjualan Tercepat.</p>
                        </div>

                        <div class="swiper-slide flex flex-col justify-center text-center ">
                            <h2 class="text-lg font-semibold mb-2">Best Selling Non Subsidiez 2028 by Bank BTN</h2>
                            <img src="{{asset('assets/images/awr_4.png')}}" class="w-full h-13 object-contain" />
                            <p class="text-sm text-gray-600 mt-2">Mitra Perbankan Paling Produktif.</p>
                        </div>

                        <div class="swiper-slide flex flex-col justify-center text-center ">
                            <h2 class="text-lg font-semibold mb-2">Best Selling Non Subsidiez 2028 by Bank BTN</h2>
                            <img src="{{asset('assets/images/awr_5.png')}}" class="w-full h-13 object-contain" />
                            <p class="text-sm text-gray-600 mt-2">Inovasi Desain Perumahan Favorit.</p>
                        </div>

                        <div class="swiper-slide flex flex-col justify-center text-center ">
                            <h2 class="text-lg font-semibold mb-2">Best Selling Non Subsidiez 2028 by Bank BTN</h2>
                            <img src="{{asset('assets/images/awr_6.png')}}" class="w-full h-13 object-contain" />
                            <p class="text-sm text-gray-600 mt-2">Tingkat Kepuasan Pelanggan Tertinggi.</p>
                        </div>

                    </div>
                    <div class="swiper-button-prev text-white md:text-black"></div>
                    <div class="swiper-button-next text-white md:text-black"></div>
                </div>


            </div>
        </div>
        <!-- <div class="grid md:grid-cols-2 gap-10 items-center">
            <div class="space-y-8">
                <div>
                    <h2 class="text-xl">
                        <span class="text-[#11689B]">"Built</span> with <span
                            class="text-[#11689B]">purpose</span>,<br />
                        awarded with <span class="text-[#11689B]">pride"</span>
                    </h2>
                </div>

            </div>
            <div class="space-y-6 text-sm text-gray-700">
                <p>
                    Rumah Ningrat telah membuktikan kualitasnya melalui berbagai penghargaan nasional dalam kategori
                    hunian subsidi terbaik.
                </p>

            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-10 items-center mt-12">
            <div class="space-y-8">
                <div>
                    <h2 class="text-xl font-semibold text-[#11689B]">"Rumah Ningrat, Untuk Hidup Lebih Baik"</h2>
                </div>
            </div>
            <div class="space-y-6 text-sm text-gray-700">
                <p>
                    Hadir dengan beragam fasilitas kesehatan, keamanan, kebersihan, dan komunitas aktif demi menciptakan
                    lingkungan hunian yang sehat, aman, dan penuh kehidupan bagi setiap keluarga.
                </p>
            </div>
        </div> -->

    </section>
    <section class="relative w-full h-screen bg-gray-800 flex items-center justify-center">
        <img src="assets/images/project/render-rn-6.png" alt="Pengembangan lahan properti"
            class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-shadow-black text-shadow-md">
                200 Ha Pengembangan Lahan
            </h1>
            <p class="mt-2 text-md md:text-md text-gray-200 text-shadow-black text-shadow-md">
                Luas area pengembangan properti Rumah Ningrat
            </p>
        </div>
    </section>
    <section class="relative w-full h-screen bg-gray-800 flex items-center justify-center">
        <img src="assets/images/project/render-rn-1.png" alt="Pengembangan lahan properti"
            class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-shadow-black text-shadow-md">
                15.000 Total Pengembangan
            </h1>
            <p class="mt-2 text-md md:text-md text-gray-200 text-shadow-black text-shadow-md">
                Capaian total dalam pengembangan hunian
            </p>
        </div>
    </section>
    <section class="relative w-full h-screen bg-gray-800 flex items-center justify-center">
        <img src="assets/images/project/render-rn-4.png" alt="Pengembangan lahan properti"
            class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-shadow-black text-shadow-md">
                15.000 total pengembangan
            </h1>
            <p class="mt-2 text-md md:text-md text-gray-200 text-shadow-black text-shadow-md">
                Jumlah Project perumahan yang berhasil kami wujudkan
            </p>
        </div>
    </section>
    <section class="relative w-full h-screen bg-gray-800 flex items-center justify-center">
        <img src="assets/images/project/render-rn-5.png" alt="Pengembangan lahan properti"
            class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-shadow-black text-shadow-md">
                10.000 Unit Terjual
            </h1>
            <p class="mt-2 text-md md:text-md text-gray-200 text-shadow-black text-shadow-md">
                Jumlah Unit yang berhasil terjual kepada konsumen
            </p>
        </div>
    </section>



    <section class="py-12 md:py-20">
        <div class="container mx-auto px-4">

            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                    “<span class="text-[#11689B]">Rumah Ningrat</span>, Untuk Hidup Lebih Baik”
                </h2>
                <p class="mt-2 text-gray-600 mb-2">
                    Benefit eksklusif untuk kenyamanan keluarga dan keamanan rumah Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="rounded-sm overflow-hidden">
                    <div class="relative">
                        <img class="w-full h-64 object-cover" src="{{asset('assets/images/card_benefit_1.jpg')}}"
                            alt="Rumah dengan pagar gratis">

                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                            <h3 class="text-white font-semibold text-lg">
                                Benefit Gratis Pagar
                            </h3>
                        </div>
                    </div>
                    <div class="py-2">
                        <p class="text-gray-700">
                            Nikmati hunian yang langsung siap huni, pagar depan sudah termasuk tanpa biaya tambahan.
                        </p>
                    </div>
                </div>

                <div class="rounded-sm overflow-hidden">
                    <div class="relative">
                        <img class="w-full h-64 object-cover" src="{{asset('assets/images/card_benefit_2.jpg')}}"
                            alt="Aplikasi CCTV di smartphone">

                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                            <h3 class="text-white font-semibold text-lg">
                                Fitur Live CCTV, Aplikasi Keluarga Ningrat
                            </h3>
                        </div>
                    </div>
                    <div class="py-2">
                        <p class="text-gray-700">
                            Keamanan terjaga melalui aplikasi Keluarga Ningrat, anda dapat memonitoring Live CCTV.
                        </p>
                    </div>
                </div>

                <div class="rounded-sm overflow-hidden">
                    <div class="relative">
                        <img class="w-full h-64 object-cover" src="{{asset('assets/images/card_benefit_3.jpg')}}"
                            alt="Denah rumah dengan tembok belakang">

                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-black/50 backdrop-blur-sm">
                            <h3 class="text-white font-semibold text-lg">
                                Benefit Bonus Tembok Belakang Rumah
                            </h3>
                        </div>
                    </div>
                    <div class="py-2">
                        <p class="text-gray-700">
                            Hunian privasi dengan bonus tembok belakang yang sudah termasuk di setiap pembelian.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <section class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-100 rounded-sm overflow-hidden">
                <div class="swiper swiper_nav">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-6">
                            <img src="{{asset('assets/images/project/render-rn-2.png')}}"
                                class="w-full rounded-sm h-56 object-cover">
                            <div class="py-4">
                                <h3 class="font-semibold text-sm">200 Hektar Lahan Sudah Dikelola oleh Rumah Ningrat
                                </h3>
                            </div>
                        </div>
                        <div class="swiper-slide p-6">
                            <img src="{{asset('assets/images/project/render-rn-3.png')}}"
                                class="w-full rounded-sm h-56 object-cover">
                            <div class="py-4">
                                <h3 class="font-semibold text-sm">10.000 Unit Terjual, Tentu Menjadi Kebanggan
                                    Tersendiri Bagi Kami</h3>
                            </div>
                        </div>
                        <div class="swiper-slide p-6">
                            <img src="{{asset('assets/images/project/render-rn-4.png')}}"
                                class="w-full rounded-sm h-56 object-cover">
                            <div class="py-4">
                                <h3 class="font-semibold text-sm">32 Total Perumahaan yang sudah kami Bangun</h3>
                            </div>
                        </div>
                        <div class="swiper-slide p-6">
                            <img src="{{asset('assets/images/project/render-rn-1.png')}}"
                                class="w-full rounded-sm h-56 object-cover">
                            <div class="py-4">
                                <h3 class="font-semibold text-sm">15.000 Total Pengembangan Untuk Berbagai Perumahaan
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="bg-gray-100 rounded-sm overflow-hidden p-6 relative">
                <div class="my-6">

                    <div id="stackCards" class="relative h-auto min-h-[110px]">
                        <div class="card absolute inset-0 bg-white rounded-md shadow-md transition-all duration-500 ease-in-out"
                            id="card-1">
                            <div class="flex flex-row-reverse items-stretch gap-4 h-full rounded-md overflow-hidden">
                                <img src="{{asset('assets/images/card_benefit_1.jpg')}}"
                                    class="w-20 md:w-40 object-cover h-full rounded-l-none rounded-r-md">
                                <div class="flex flex-col justify-center p-4 flex-1">
                                    <p class="text-xs font-semibold text-gray-500">GRATIS PAGAR</p>
                                    <p class="text-sm text-gray-700">Dapatkan pagar rumah gratis, tanpa biaya tambahan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card absolute inset-0 bg-white rounded-md shadow-md transition-all duration-500 ease-in-out"
                            id="card-2">
                            <div class="flex flex-row-reverse items-stretch gap-4 h-full rounded-md overflow-hidden">
                                <img src="{{asset('assets/images/card_benefit_2.jpg')}}"
                                    class="w-20 md:w-40 object-cover h-full rounded-l-none rounded-r-md">
                                <div class="flex flex-col justify-center p-4 flex-1">
                                    <p class="text-xs font-semibold text-gray-500">GARANSI RUMAH AMAN</p>
                                    <p class="text-sm text-gray-700">Fitur Live CCTV, hingga Security On Duty dapat
                                        diakses melalui Aplikasi Keluarga Ningrat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card absolute inset-0 bg-white rounded-md shadow-md transition-all duration-500 ease-in-out"
                            id="card-3">
                            <div class="flex flex-row-reverse items-stretch gap-4 h-full rounded-md overflow-hidden">
                                <img src="{{asset('assets/images/card_benefit_3.jpg')}}"
                                    class="w-20 md:w-40 object-cover h-full rounded-l-none rounded-r-md">
                                <div class="flex flex-col justify-center p-4 flex-1">
                                    <p class="text-xs font-semibold text-gray-500">GRATIS TEMBOK BELAKANG</p>
                                    <p class="text-sm text-gray-700">Setiap pembelian sudah termasuk bonus tembok
                                        keliling secara gratis.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button id="switchCardBtn" class="text-sm text-[#11689B] hover:underline">
                        Lihat Benefit Lainnya
                    </button>
                </div>
                <div class="mt-6">
                    <h3 class="font-semibold text-sm">Benefit Utama yang Bisa Anda Dapatkan Di Rumah Ningrat</h3>
                </div>
            </div>
        </div>
    </section> -->
    <section class="relative bg-cover bg-center min-h-[400px] md:min-h-[500px]"
        style="background-image: url('/assets/images/mockup/rn-app.jpg')">
        <div class="container mx-auto px-4 py-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">

                <!-- Teks di Kiri -->
                <div class="text-white max-w-md space-y-3">
                    <h2 class="text-xl md:text-2xl font-semibold">Keluarga Ningrat</h2>
                    <p class="text-sm md:text-base leading-relaxed">
                        Sebagai bentuk keseriusan dan kepedulian kami, kami berkomitmen untuk menghadirkan kenyamanan,
                        keamanan, dan ketenangan bagi seluruh keluarga di Rumah Ningrat.
                    </p>
                </div>

                <!-- Gambar HP -->
                <!-- <div class="relative z-10">
                    <img src="{{asset('/assets/images/mockup/rn-app.png')}}" alt="Aplikasi" class="max-h-[360px] w-auto mx-auto">
                </div> -->
            </div>
        </div>

        <!-- Card Blur Kanan Bawah -->
        <div
            class="absolute bottom-6 right-6 md:right-10 max-w-xs bg-white/10 backdrop-blur-md text-white p-4 rounded-lg border-slate-400 border">
            <div class="flex items-start gap-3">
                <img src="/assets/images/icon-app-rn.png" alt="App" class="h-10 w-10 rounded">
                <div class="text-sm">
                    <p class="font-bold mb-1">Keluarga Ningrat</p>
                    <p class="text-xs leading-snug">
                        Aplikasi ini memudahkan kehidupan Anda di Perumahan Rumah Ningrat dengan fitur pemantauan CCTV,
                        tombol SOS, dan berbagai layanan.
                    </p>
                    <div class="flex gap-2 mt-2">
                        <a href="#"><img src="/assets/images/google-play.png" alt="Play Store" class="h-6"></a>
                        <a href="#"><img src="/assets/images/app-store.png" alt="App Store" class="h-6"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-12 px-0">
        <div class="swiper swiper-fasilitas">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide w-[90%] md:w-[80%]">
                    <div class="relative rounded-sm overflow-hidden shadow-md">
                        <img src="assets/images/carousel/fasilitas-1.jpg" class="w-full h-64 md:h-80 object-cover" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-sm text-white p-4 text-sm space-y-1">
                            <h4 class="font-semibold">Kemajuan Ekonomi</h4>
                            <p>Dukung peluang usaha dari rumah melalui aplikasi dan fitur Marketplace dari aplikasi
                                Keluarga Ningrat.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide w-[90%] md:w-[80%]">
                    <div class="relative rounded-sm overflow-hidden shadow-md">
                        <img src="assets/images/carousel/fasilitas-4.jpg" class="w-full h-64 md:h-80 object-cover" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-sm text-white p-4 text-sm space-y-1">
                            <h4 class="font-semibold">Jalin Hubungan yang Erat Melalui Komunitas Warga Ningrat</h4>
                            <p>Temukan ruang untuk berbagi, berdiskusi, dan membangun kebersamaan antarwarga dalam satu
                                komunitas yang saling terhubung.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide w-[90%] md:w-[80%]">
                    <div class="relative rounded-sm overflow-hidden shadow-md">
                        <img src="assets/images/carousel/fasilitas-3.jpg" class="w-full h-64 md:h-80 object-cover" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-sm text-white p-4 text-sm space-y-1">
                            <h4 class="font-semibold">Fasilitas Kesehatan</h4>
                            <p>Jogging track, lapangan olahraga, dan banyak lainnya tersedia untuk warga.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 dan seterusnya... -->
                <div class="swiper-slide w-[90%] md:w-[80%]">
                    <div class="relative rounded-sm overflow-hidden shadow-md">
                        <img src="assets/images/carousel/fasilitas-2.jpg" class="w-full h-64 md:h-80 object-cover" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-sm text-white p-4 text-sm space-y-1">
                            <h4 class="font-semibold">Fasilitas Keamanan</h4>
                            <p>One gate system, serta Live CCTV setiap blok dan pengawasan 24 jam yang terintegrasi
                                dalam satu aplikasi Keluarga Ningrat.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigasi -->
            <div class="swiper-button-prev text-white md:text-black"></div>
            <div class="swiper-button-next text-white md:text-black"></div>
        </div>
    </section>
    <section class="w-full py-12 px-10 bg-gray-100">
        <div id="lokasi-buttons" class="flex justify-center items-center gap-6 py-4 text-sm">
            <button class="lokasi-btn font-semibold text-black border-r pr-4 active" data-id="bekasi">BEKASI</button>
            <!-- <span class="text-gray-300">|</span> -->
            <button class="lokasi-btn text-gray-400 hover:text-black hover:font-semibold border-r pr-4"
                data-id="cirebon">CIREBON</button>
            <!-- <span class="text-gray-300">|</span> -->
            <button class="lokasi-btn text-gray-400 hover:text-black hover:font-semibold border-r pr-4"
                data-id="kendal">KENDAL</button>
            <!-- <span class="text-gray-300">|</span> -->
            <button class="lokasi-btn text-gray-400 hover:text-black hover:font-semibold"
                data-id="indramayu">INDRAMAYU</button>
        </div>
        <div class="overflow-x-auto sm:overflow-visible">

            <div class="flex sm:grid sm:grid-cols-2 md:grid-cols-3 gap-6 min-w-[360px]">
                <div class="bg-white rounded-lg overflow-hidden flex-shrink-0 sm:w-auto">
                    <div class="relative">
                        <img src="{{asset('assets/images/project/rn-1.jpg')}}" alt="RN Jayasampurna"
                            class="w-full h-52 object-cover rounded-lg">

                        <!-- Overlay icon detail (semua dalam 1 container) -->
                        <div class="absolute top-2 right-2 flex flex-col space-y-1 text-white text-xs">
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-home"></i>
                                <span class="text-xs">60 x 30</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-shower"></i>
                                <span>1 KM</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-bed"></i>
                                <span>2 Kamar</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-car"></i>
                                <span>1 Carport</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 space-y-2">
                        <!-- Baris judul dan harga -->
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm text-gray-700 font-semibold">RN Jayasampurna</h3>
                                <p class="text-xs text-gray-500">Bekasi</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-sm font-bold text-gray-700 text-right">Rp 194.500.000,-</p>
                            </div>
                        </div>


                        <div class="grid grid-cols-5 grid-rows-1 gap-4">
                            <div class="col-span-3 flex items-center">
                                <hr class="w-full border-t border-gray-300">
                            </div>
                            <div class="col-span-2 col-start-4 pl-1">
                                <button
                                    class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-1 px-5 rounded-full transition-all duration-300 text-sm float-end">
                                    <span>Booking</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bg-white rounded-lg overflow-hidden flex-shrink-0 sm:w-auto">
                    <div class="relative">
                        <img src="{{asset('assets/images/project/rn-2.jpg')}}" alt="RN Jayasampurna"
                            class="w-full h-52 object-cover rounded-lg">

                        <!-- Overlay icon detail (semua dalam 1 container) -->
                        <div class="absolute top-2 right-2 flex flex-col space-y-1 text-white text-xs">
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-home"></i>
                                <span class="text-xs">60 x 30</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-shower"></i>
                                <span>1 KM</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-bed"></i>
                                <span>2 Kamar</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-car"></i>
                                <span>1 Carport</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 space-y-2">
                        <!-- Baris judul dan harga -->
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm text-gray-700 font-semibold">RN Jayasampurna</h3>
                                <p class="text-xs text-gray-500">Bekasi</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-sm font-bold text-gray-700 text-right">Rp 194.500.000,-</p>
                            </div>
                        </div>


                        <div class="grid grid-cols-5 grid-rows-1 gap-4">
                            <div class="col-span-3 flex items-center">
                                <hr class="w-full border-t border-gray-300">
                            </div>
                            <div class="col-span-2 col-start-4 pl-1">
                                <button
                                    class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-1 px-5 rounded-full transition-all duration-300 text-sm float-end">
                                    <span>Booking</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bg-white rounded-lg overflow-hidden flex-shrink-0 sm:w-auto">
                    <div class="relative">
                        <img src="{{asset('assets/images/project/rn-3.jpg')}}" alt="RN Jayasampurna"
                            class="w-full h-52 object-cover rounded-lg">

                        <!-- Overlay icon detail (semua dalam 1 container) -->
                        <div class="absolute top-2 right-2 flex flex-col space-y-1 text-white text-xs">
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-home"></i>
                                <span class="text-xs">60 x 30</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-shower"></i>
                                <span>1 KM</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-bed"></i>
                                <span>2 Kamar</span>
                            </div>
                            <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                <i class="mdi mdi-car"></i>
                                <span>1 Carport</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 space-y-2">
                        <!-- Baris judul dan harga -->
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm text-gray-700 font-semibold">RN Jayasampurna</h3>
                                <p class="text-xs text-gray-500">Bekasi</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-sm font-bold text-gray-700 text-right">Rp 194.500.000,-</p>
                            </div>
                        </div>


                        <div class="grid grid-cols-5 grid-rows-1 gap-4">
                            <div class="col-span-3 flex items-center">
                                <hr class="w-full border-t border-gray-300">
                            </div>
                            <div class="col-span-2 col-start-4 pl-1">
                                <button
                                    class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-1 px-5 rounded-full transition-all duration-300 text-sm float-end">
                                    <span>Booking</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="px-4 md:px-8 py-12 bg-white">
        <div class="max-w-3xl mx-auto text-center mb-10">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">
                Mau Tahu Lebih Lanjut Mengenai Kelebihan dari
                <span class="text-[#11689B] font-bold">Rumah Ningrat</span>?
                Anda Dapat Lihat Dibawah Ini!
            </h2>
            <p class="text-sm text-gray-600 mt-2">
                Temukan berbagai kelebihan Rumah Ningrat yang dirancang untuk memberikan kenyamanan, keamanan, dan nilai
                investasi terbaik bagi keluarga Anda. Lengkap dengan fitur unggulan dan didukung oleh tim profesional
                terpercaya.
            </p>
        </div>

        <div class="max-w-2xl mx-auto space-y-4">
            <!-- Accordion Item -->
            <div class="border rounded-md">
                <button
                    class="w-full flex items-center justify-between px-4 py-3 text-left text-sm font-medium text-gray-800 hover:bg-gray-100 accordion-btn">
                    Terbukti Kredibel dengan Penghargaan Developer Nasional Terbaik
                    <span class="text-xl transition-transform duration-300 transform">+</span>
                </button>
                <div class="accordion-content px-4 py-2 text-sm text-gray-600 hidden">
                    Rumah Ningrat telah menerima berbagai penghargaan nasional sebagai pengembang terbaik dalam kategori
                    hunian subsidi.
                </div>
            </div>

            <div class="border rounded-md">
                <button
                    class="w-full flex items-center justify-between px-4 py-3 text-left text-sm font-medium text-gray-800 hover:bg-gray-100 accordion-btn">
                    Proses Pembelian Cepat, Mudah, dan Didampingi Tim Profesional
                    <span class="text-xl transition-transform duration-300 transform">+</span>
                </button>
                <div class="accordion-content px-4 py-2 text-sm text-gray-600 hidden">
                    Tim profesional kami siap mendampingi Anda dari awal hingga akhir proses pembelian.
                </div>
            </div>

            <!-- Tambahkan item lainnya -->
            <div class="border rounded-md">
                <button
                    class="w-full flex items-center justify-between px-4 py-3 text-left text-sm font-medium text-gray-800 hover:bg-gray-100 accordion-btn">
                    Berpengalaman Lebih dari 10 Tahun dalam Industri Perumahan
                    <span class="text-xl transition-transform duration-300 transform">+</span>
                </button>
                <div class="accordion-content px-4 py-2 text-sm text-gray-600 hidden">
                    Kami memiliki pengalaman panjang dalam membangun dan mengelola hunian berkualitas.
                </div>
            </div>

            <div class="border rounded-md">
                <button
                    class="w-full flex items-center justify-between px-4 py-3 text-left text-sm font-medium text-gray-800 hover:bg-gray-100 accordion-btn">
                    Desain Hunian Minimalis Modern dengan Sentuhan Elegan
                    <span class="text-xl transition-transform duration-300 transform">+</span>
                </button>
                <div class="accordion-content px-4 py-2 text-sm text-gray-600 hidden">
                    Tiap unit dirancang secara estetis untuk memenuhi gaya hidup modern.
                </div>
            </div>

            <!-- Lanjutkan item lainnya jika perlu -->
        </div>
    </section>
    <section class="w-full mx-auto py-12 px-0 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div id="lokasi-buttons" class="flex justify-center items-center gap-6 py-4 text-sm">
                <button class="lokasi-btn font-semibold text-black border-r pr-4 active"
                    data-id="bekasi">BEKASI</button>
                <button class="lokasi-btn text-gray-400 hover:text-black hover:font-semibold border-r pr-4"
                    data-id="cirebon">CIREBON</button>
                <button class="lokasi-btn text-gray-400 hover:text-black hover:font-semibold border-r pr-4"
                    data-id="kendal">KENDAL</button>
                <button class="lokasi-btn text-gray-400 hover:text-black hover:font-semibold"
                    data-id="indramayu">INDRAMAYU</button>
            </div>
            <div id="map" style="height: 500px;"></div>
        </div>
    </section>

    <section class="relative h-screen w-full bg-cover bg-center bg-top"
        style="background-image: url('/assets/images/banner/banner-1.png');vertical-align: top;">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <!-- Navbar -->
        <!--  -->

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
            <h2 class="text-4xl md:text-4xl font-bold mb-2 text-shadow-lg text-shadow-black">Rumah Masa Depan, Untuk Hidup Lebih Baik</h2>
            <a href="/detail-new"
                class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-2 px-6 rounded-full transition-all duration-300">
                <span>Booking Sekarang</span>
            </a>
        </div>
    </section>

    @include('redesign.layout.footer')
    <div id="hoverModal" class="fixed inset-0 z-50 hidden">
        <!-- Background overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40" onclick="hideModal()"></div>

        <!-- Modal content -->
        <div id="hoverModalContent"
            class="absolute left-0 top-0 w-full bg-gray-50 shadow-md transform -translate-y-full transition-transform duration-500 ease-out">

            <div class="max-w-4xl mx-auto p-6 flex justify-end items-center">
                <!-- <h2 class="text-xl font-semibold text-gray-800">Modal Muncul Saat Hover</h2> -->
                <button onclick="hideModal()"
                    class="text-gray-500 hover:text-red-500 text-lg font-bold">&times;</button>
            </div>
            <div class="max-w-4xl mx-auto px-6 pb-6 text-gray-600">
                <h2 class="text-xl font-semibold text-[#11689B] mb-2">Produk Kami</h2>
                <p class="mb-6">Desain elegan, siap huni, dan dirancang untuk ketahanan jangka panjang.</p>
                <div class="overflow-x-auto sm:overflow-visible">

                    <div class="flex sm:grid sm:grid-cols-2 md:grid-cols-3 gap-6 min-w-[360px]">
                        <div class="bg-white rounded-lg overflow-hidden flex-shrink-0 sm:w-auto">
                            <div class="relative">
                                <img src="{{asset('assets/images/project/rn-1.jpg')}}" alt="RN Jayasampurna"
                                    class="w-full h-52 object-cover rounded-lg">

                                <!-- Overlay icon detail (semua dalam 1 container) -->
                                <div class="absolute top-2 right-2 flex flex-col space-y-1 text-white text-xs">
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-home"></i>
                                        <span class="text-xs">60 x 30</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-shower"></i>
                                        <span>1 KM</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-bed"></i>
                                        <span>2 Kamar</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-car"></i>
                                        <span>1 Carport</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 space-y-2">
                                <!-- Baris judul dan harga -->
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-sm text-gray-700 font-semibold">RN Jayasampurna</h3>
                                        <p class="text-xs text-gray-500">Bekasi</p>
                                    </div>
                                    <div class="flex items-center">
                                        <p class="text-sm font-bold text-gray-700 text-right">Rp 194.500.000,-</p>
                                    </div>
                                </div>


                                <div class="grid grid-cols-5 grid-rows-1 gap-4">
                                    <div class="col-span-3 flex items-center">
                                        <hr class="w-full border-t border-gray-300">
                                    </div>
                                    <div class="col-span-2 col-start-4 pl-1">
                                        <button
                                            class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-1 px-5 rounded-full transition-all duration-300 text-sm float-end">
                                            <span>Booking</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg overflow-hidden flex-shrink-0 sm:w-auto">
                            <div class="relative">
                                <img src="{{asset('assets/images/project/rn-2.jpg')}}" alt="RN Jayasampurna"
                                    class="w-full h-52 object-cover rounded-lg">

                                <!-- Overlay icon detail (semua dalam 1 container) -->
                                <div class="absolute top-2 right-2 flex flex-col space-y-1 text-white text-xs">
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-home"></i>
                                        <span class="text-xs">60 x 30</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-shower"></i>
                                        <span>1 KM</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-bed"></i>
                                        <span>2 Kamar</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-car"></i>
                                        <span>1 Carport</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 space-y-2">
                                <!-- Baris judul dan harga -->
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-sm text-gray-700 font-semibold">RN Jayasampurna</h3>
                                        <p class="text-xs text-gray-500">Bekasi</p>
                                    </div>
                                    <div class="flex items-center">
                                        <p class="text-sm font-bold text-gray-700 text-right">Rp 194.500.000,-</p>
                                    </div>
                                </div>


                                <div class="grid grid-cols-5 grid-rows-1 gap-4">
                                    <div class="col-span-3 flex items-center">
                                        <hr class="w-full border-t border-gray-300">
                                    </div>
                                    <div class="col-span-2 col-start-4 pl-1">
                                        <button
                                            class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-1 px-5 rounded-full transition-all duration-300 text-sm float-end">
                                            <span>Booking</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white rounded-lg overflow-hidden flex-shrink-0 sm:w-auto">
                            <div class="relative">
                                <img src="{{asset('assets/images/project/rn-3.jpg')}}" alt="RN Jayasampurna"
                                    class="w-full h-52 object-cover rounded-lg">

                                <!-- Overlay icon detail (semua dalam 1 container) -->
                                <div class="absolute top-2 right-2 flex flex-col space-y-1 text-white text-xs">
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-home"></i>
                                        <span class="text-xs">60 x 30</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-shower"></i>
                                        <span>1 KM</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-bed"></i>
                                        <span>2 Kamar</span>
                                    </div>
                                    <div class="backdrop-blur-sm bg-black/30 rounded-md p-2 flex items-center gap-1">
                                        <i class="mdi mdi-car"></i>
                                        <span>1 Carport</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 space-y-2">
                                <!-- Baris judul dan harga -->
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-sm text-gray-700 font-semibold">RN Jayasampurna</h3>
                                        <p class="text-xs text-gray-500">Bekasi</p>
                                    </div>
                                    <div class="flex items-center">
                                        <p class="text-sm font-bold text-gray-700 text-right">Rp 194.500.000,-</p>
                                    </div>
                                </div>


                                <div class="grid grid-cols-5 grid-rows-1 gap-4">
                                    <div class="col-span-3 flex items-center">
                                        <hr class="w-full border-t border-gray-300">
                                    </div>
                                    <div class="col-span-2 col-start-4 pl-1">
                                        <button
                                            class="btn-animate bg-[#11689B] hover:bg-transparent text-white hover:text-[#11689B] border-2 border-[#11689B] font-semibold py-1 px-5 rounded-full transition-all duration-300 text-sm float-end">
                                            <span>Booking</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/vendor')}}/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('/vendor')}}/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('/vendor')}}/leaflet/dist/leaflet.js"></script>
    

    <script>
        $('#menuToggle').on('click', function () {
            $('#mobileMenu').toggleClass('hidden');
        });
        const swiper = new Swiper('.mySwiper', {
            // Menambahkan modul navigasi
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            breakpoints: {
                // Mobile (lebar < 640px): 2 slide
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                }
            }
        });
        $('#hoverBtn').on('mouseenter', function () {
            $('#hoverModal').removeClass('hidden');
            setTimeout(() => {
                $('#hoverModalContent').removeClass('-translate-y-full').addClass('translate-y-0');
            }, 10);
        });
        function hoverMobile() {
            $('#hoverModal').removeClass('hidden');
            setTimeout(() => {
                $('#hoverModalContent').removeClass('-translate-y-full').addClass('translate-y-0');
            }, 10);
        }

        // Tidak perlu lagi pakai mouseleave atau timeout
        // function hideModal hanya dipanggil saat user klik overlay atau tombol close
        function hideModal() {
            $('#hoverModalContent').removeClass('translate-y-0').addClass('-translate-y-full');
            setTimeout(() => {
                $('#hoverModal').addClass('hidden');
            }, 500);
        }

        // const swiper_nav = new Swiper(".swiper_nav", {
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        //     loop: true,
        //     autoplay: {
        //         delay: 3000,
        //     },
        // });

        // Toggle Card Stack
        const cards = ['#card-1', '#card-2', '#card-3'];
        let currentFrontIndex = 0;

        function updateCardClasses() {
            const order = [
                currentFrontIndex,
                (currentFrontIndex + 1) % 3,
                (currentFrontIndex + 2) % 3,
            ];

            // Reset all
            for (let i = 0; i < 3; i++) {
                $(cards[i])
                    .removeClass()
                    .addClass('card absolute inset-0 bg-white rounded-md shadow-md transition-all duration-500 ease-in-out');
            }

            // Apply front (paling depan)
            $(cards[order[0]]).addClass('z-30 opacity-100 translate-y-0 rotate-0');

            // Apply middle
            $(cards[order[1]]).addClass('z-20 opacity-50 translate-y-4 rotate-1');

            // Apply back
            $(cards[order[2]]).addClass('z-10 opacity-30 translate-y-8 rotate-2');
        }

        $('#switchCardBtn').on('click', function () {
            currentFrontIndex = (currentFrontIndex + 1) % 3;
            updateCardClasses();
        });

        // Initial render
        updateCardClasses();

        const swiper_fasilitas = new Swiper(".swiper-fasilitas", {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 16,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Mobile (lebar < 640px): 2 slide
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
        const accordionButtons = document.querySelectorAll('.accordion-btn');

        accordionButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('span');

                const isOpen = !content.classList.contains('hidden');

                // Close all
                document.querySelectorAll('.accordion-content').forEach(c => c.classList.add('hidden'));
                document.querySelectorAll('.accordion-btn span').forEach(i => {
                    i.textContent = '+';
                    i.classList.remove('rotate-45');
                });

                if (!isOpen) {
                    content.classList.remove('hidden');
                    icon.textContent = '−';
                }
            });
        });
        const cirebon = [-6.732022, 108.552316];

        // Inisialisasi peta
        const map = L.map('map').setView(cirebon, 13);

        // Tambahkan tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: ''
        }).addTo(map);

        // Custom icon logo (ubah sesuai path gambarmu)
        const logoIcon = L.icon({
            iconUrl: 'assets/images/icon-app-rn.png', // ganti path dengan logomu
            iconSize: [40, 40], // ukuran icon
            iconAnchor: [20, 40], // titik di mana icon akan berada di peta
            popupAnchor: [0, -40]
        });

        // Tambahkan marker dengan popup
        L.marker(cirebon, { icon: logoIcon }).addTo(map)
            .bindPopup("<b>Rumah Ningrat</b><br>Cirebon, Jawa Barat<br><a href=''>Link Maps</a>");

        $('.lokasi-btn').click(function () {
            // Hapus class active dari semua button
            $('.lokasi-btn').removeClass('text-black font-semibold').addClass('text-gray-400');

            // Tambahkan class active ke tombol yang diklik
            $(this).removeClass('text-gray-400').addClass('text-black font-semibold');

            // Ambil ID project dari tombol
            const lokasiId = $(this).data('id');
            console.log("Lokasi dipilih:", lokasiId);

            // Kirim AJAX request
            $.ajax({
                url: '/lokasi/project',
                method: 'GET',
                data: { id: lokasiId },
                success: function (res) {
                    console.log("Data berhasil diambil:", res);
                    // Lakukan sesuatu dengan hasilnya...
                },
                error: function (err) {
                    console.error("Gagal ambil data:", err);
                }
            });
        });
    </script>

</body>

</html>