@extends('about.app')

@section('title', 'Tentang Kami')

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
@endsection

@section('content')
<section class="text-white py-5" style="background-color: #11689B">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold text-white">Tentang Kami</h2>
                <p>
                    Rumah Ningrat merupakan Brand Perumahan milik <b>PT. Raja Sukses Propertindo</b> yang berdiri sejak <b>24 Maret 2013</b> dan diresmikan oleh Gubernur Jawa Barat <b>Bapak H. Ahmad Heryawan</b>.
                    Rumah Ningrat adalah Pemenang Award Developer Terbaik Nasional.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{url('/assets/images/diamond.webp')}}" alt="Rumah Ningrat" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>
<section class="text-dark py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <p>
                Sejak awal berdiri PT. Raja Sukses Propertindo fokus mengembangkan perumahan subsidi dengan value mewujudkan hunian pertama bagi sebuah keluarga.
                </p>
                <p>
                Rumah Ningrat menjadi mitra terpercaya hunian keluarga modern, dengan menyediakan rumah terjangkau dengan kualitas dan desain memukau.
                </p>
                <p>
                Seiring perjalanannya, kini Rumah Ningrat juga mengembangkan perumahan komersil. Perumahan Rumah Ningrat kini sudah ada di Cirebon, Kuningan, Majalengka, Indramayu, Subang, Kendal, Bekasi dan akan segera hadir di Kota-Kota lainnya.
                </p>
                <p>Selain rumah, Rumah Ningrat juga membangun pusat perniagaan seperti Ruko.</p>
            </div>

        </div>
    </div>
</section>
<section class="text-dark py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
               <h3 class="fw-bold">Visi dan Misi</h3>
               <p>Mewujudkan Impian Semua Kalangan Memiliki Hunian dan Menjadi Pilar Perekonomian Dalam Sektor Papan (Hunian).</p>
               <ul>
                <li>Menyediakan Seluruh Kebutuhan Papan (Hunian) di Setiap Desa Dengan Mengedepankan Teknologi.</li>
                <li>Berinovasi Mewujudkan Hunian Berkualitas Secara Produk dan Lingkungan yang Nyaman.</li>
                <li>Menjadi Pemimpin Pasar Melalui SDM Handal Hingga Berdaya Saing Global.</li>
                <li>Maju Berkembang dan Sejahtera Bersama dengan Semua Stakeholder.</li>
               </ul>
            </div>

        </div>
    </div>
</section>

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
    AOS.init();

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
