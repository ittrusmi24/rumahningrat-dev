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
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
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
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <!-- Dropdown CSS -->
    <link rel="stylesheet" href="assets/css/dropdown.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
    <!-- rangeslider CSS -->
    <link rel="stylesheet" href="assets/css/rangeslider.css" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
@endsection

@section('content')
    <!--==================================================-->
    <!-- Start Feature Area -->
    <!--==================================================-->
    <div class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-sub-titile">
                            <h4>View All 329 New Listings</h4>
                        </div>
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-main-title">
                            <h2>See How Realton Can Help</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-single-box">
                        <div class="feauture-icon">
                            <img src="assets/images/resource/feature-icon1.png" alt="">
                        </div>
                        <div class="feauture-content">
                            <h4><a href="#">Buy a Property</a></h4>
                            <p>over 1 million+ homes for sale available on the
                                website, we can match you with a house
                                you will want to call home.</p>
                        </div>
                        <div class="feature-btn">
                            <a href="#">Find A Home <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                    <div class="feature-single-box">
                        <div class="feauture-icon">
                            <img src="assets/images/resource/feature-icon2.png" alt="">
                        </div>
                        <div class="feauture-content">
                            <h4><a href="#">Sell a property</a></h4>
                            <p>over 1 million+ homes for sale available on the
                                website, we can match you with a house
                                you will want to call home.</p>
                        </div>
                        <div class="feature-btn">
                            <a href="#">Find A Home <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                    <div class="feature-single-box">
                        <div class="feauture-icon">
                            <img src="assets/images/resource/feature-icon3.png" alt="">
                        </div>
                        <div class="feauture-content">
                            <h4><a href="#">Rent a Property</a></h4>
                            <p>over 1 million+ homes for sale available on the
                                website, we can match you with a house
                                you will want to call home.</p>
                        </div>
                        <div class="feature-btn">
                            <a href="#">Find A Home <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Feature Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Service Area -->
    <!--==================================================-->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-sub-titile">
                            <h4>View All 329 New Listings</h4>
                        </div>
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-main-title">
                            <h2>Discover Popular Properties</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service1.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">New Apartment Nice View</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service2.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">Single Family Home View</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service3.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">Apartment Luxury Family Home</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service1.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">New Apartment Nice View</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service2.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">Single Family Home View</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service3.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">Apartment Luxury Family Home</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service1.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">New Apartment Nice View</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service2.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">Single Family Home View</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service3.png" alt="">
                                <div class="service-rate">
                                    <h4>$987<span>/Month</span></h4>
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-titile">
                                    <h4><a href="#">Apartment Luxury Family Home</a></h4>
                                </div>
                                <div class="service-discription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                                <div class="service-faciliti">
                                    <ul>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon1.png" alt="">
                                            </div>
                                            <span>4 Room</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon2.png" alt="">
                                            </div>
                                            <span>Bathroom</span>
                                        </li>
                                        <li>
                                            <div class="service-icon-thumb">
                                                <img src="assets/images/service/service-icon3.png" alt="">
                                            </div>
                                            <span>Carage</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-adress">
                                    <div class="service-location">
                                        <span><i class="bi bi-geo-alt"></i> 778 Panama City, FL</span>
                                    </div>
                                    <div class="service-icon">
                                        <span><i class="bi bi-heart"></i></span>
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Service Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start About Area -->
    <!--==================================================-->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-sub-titile about">
                            <h4>View All 329 New Listings</h4>
                        </div>
                        <div class="section-main-title about">
                            <h2>Unique Business Strategy
                                Consulting Fhjfasffsfs</h2>
                        </div>
                    </div>
                    <div class="about-discription">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                    </div>
                    <div class="about-single-box">
                        <div class="about-icon">
                            <img src="assets/images/about/about-icon1.png" alt="">
                        </div>
                        <div class="about-text">
                            <h4>Built-in Storage Cupboards</h4>
                            <p>Spacious light-filled condominium residences, with panoramic
                                views. An architectural wonder designed by</p>
                        </div>
                    </div>
                    <div class="about-single-box">
                        <div class="about-icon">
                            <img src="assets/images/about/about-icon2.png" alt="">
                        </div>
                        <div class="about-text">
                            <h4>Quality Materials</h4>
                            <p>Spacious light-filled condominium residences, with panoramic
                                views. An architectural wonder designed by</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-images">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="about-shape">
                                    <img src="assets/images/about/about-shape1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="about-shape">
                                    <img src="assets/images/about/about-shape2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="about-thumb">
                                    <img src="assets/images/about/about-thumb.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End About Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Choose Us Area -->
    <!--==================================================-->
    <div class="choose-us-area">
        <div class="container-fluid pl-0 pr-50">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12"></div>
                <div class="col-lg-6 col-md-12">
                    <div class="choose-us-left">
                        <div class="section-title">
                            <div class="section-sub-thumb">
                                <img src="assets/images/resource/s-title-shape.png" alt="">
                            </div>
                            <div class="section-sub-titile">
                                <h4>View All 329 New Listings</h4>
                            </div>
                            <div class="section-main-title choose">
                                <h2>More Available In The Same</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box active">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon1.png" alt="">
                                    </div>
                                    <div class="choose-content active">
                                        <p>The Perfect Residency </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon2.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>List Your Own Property </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon3.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Trusted by Thousands </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon4.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Meeting with Agent </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon5.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Built-in Storage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon6.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Select the Best Place</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon7.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Global Architect</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon8.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Go Out & Explore</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon9.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Find Your Dream</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="choose-us-box">
                                    <div class="choose-icon-thumb">
                                        <img src="assets/images/resource/choose-icon10.png" alt="">
                                    </div>
                                    <div class="choose-content">
                                        <p>Strategy Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Choose Us Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Apartment Area -->
    <!--==================================================-->
    <div class="apartment-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-sub-titile">
                            <h4>View All 329 New Listings</h4>
                        </div>
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-main-title">
                            <h2>Explore Apartment Types</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="apartment-single-box inner">
                        <div class="apartmnet-thumb">
                            <img src="assets/images/resource/apartment1.png" alt="">
                            <div class="apartment-text">
                                <h4>Paris</h4>
                                <h6>04 Properties</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="apartment-single-box">
                        <div class="apartmnet-thumb">
                            <img src="assets/images/resource/apartment2.png" alt="">
                            <div class="apartment-text">
                                <h4>Paris</h4>
                                <h6>04 Properties</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="apartment-single-box inner">
                        <div class="apartmnet-thumb">
                            <img src="assets/images/resource/apartment3.png" alt="">
                            <div class="apartment-text">
                                <h4>Paris</h4>
                                <h6>04 Properties</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="apartment-single-box">
                        <div class="apartmnet-thumb">
                            <img src="assets/images/resource/apartment4.png" alt="">
                            <div class="apartment-text">
                                <h4>Paris</h4>
                                <h6>04 Properties</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Apartment Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Portfolio Area -->
    <!--==================================================-->
    <div class="portfolio-area">
        <div class="container-fluid p-80">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-sub-titile">
                            <h4>View All Project</h4>
                        </div>
                        <div class="section-main-title">
                            <h2>Recently Completed Works</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="project-menu d-flex justify-content-center wow fadeInUp" data-wow-delay="0.3s"
                        data-wow-duration="1s">
                        <li class="active"><a href="#!" data-mixitup-control data-filter="all">All Project</a>
                        </li>
                        <li><a href="#!" data-mixitup-control data-filter=".ios">Industrial</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".and">Massproject</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".mar">Interior</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".des">Factory</a></li>
                        <li><a href="#!" data-mixitup-control data-filter=".app"> New project </a></li>
                    </ul>
                </div>
            </div>
            <div class="row filters">
                <div class="col-lg-4 col-md-6 mix ios des">
                    <div class="portfolio-single-box" data-wow-delay="0.2s" data-wow-duration="1s">
                        <div class="portfolio-thumb">
                            <img src="assets/images/project/project1.png" alt="">
                            <div class="portfolio-icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
                                    href="assets/images/project/project1.png"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h4><a href="#">Duplex Foue</a></h4>
                                <h6>Noe Valley Zones</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mix and app">
                    <div class="portfolio-single-box" data-wow-delay="0.4s" data-wow-duration="1s">
                        <div class="portfolio-thumb">
                            <img src="assets/images/project/project2.png" alt="">
                            <div class="portfolio-icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
                                    href="assets/images/project/project2.png"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h4><a href="#">Duplex Foue</a></h4>
                                <h6>Noe Valley Zones</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mix and mar">
                    <div class="portfolio-single-box" data-wow-delay="0.6s" data-wow-duration="1s">
                        <div class="portfolio-thumb">
                            <img src="assets/images/project/project3.png" alt="">
                            <div class="portfolio-icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
                                    href="assets/images/project/project3.png"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <div class="portfolio-content">
                                <h4><a href="#">Duplex Foue</a></h4>
                                <h6>Noe Valley Zones</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Portfolio Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Apartment Area -->
    <!--==================================================-->
    <div class="apartment-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-sub-titile">
                            <h4>View All 329 New Listings</h4>
                        </div>
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-main-title">
                            <h2>Discover Popular Properties</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="apartment-box">
                        <div class="apartment-content">
                            <h2>Contact us today</h2>
                            <p>We are happy to help. Anytime.</p>
                        </div>
                        <form action="https://formspree.io/f/myyleorq" method="POST" id="tech-time">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box inner">
                                        <input type="text" name="name" placeholder="Name">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box inner">
                                        <input type="text" name="email" placeholder="Email Address">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box inner">
                                        <input type="text" name="number" placeholder="Phone">
                                        <i class="fas fa-tty"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box inner">
                                        <input type="text" name="name" placeholder="Address">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box inner">
                                        <textarea name="massage" id="massage" cols="30" rows="10"
                                            placeholder="How can we help you? Feel free to get in touch!"></textarea>
                                        <i class="bi bi-pencil"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box-button">
                                        <button type="Submit">Get In Touch</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="checkbox-box">
                                        <input type="checkbox" id="reviewcheck" name="reviewcheck">
                                        <label for="reviewcheck"> I agree that my data is <a
                                                href="#">collected</a>.</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="apartmnet-thumb">
                        <img src="assets/images/resource/apartment-thumb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Apartment Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Video Area -->
    <!--==================================================-->
    <div class="video-area d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single-video">
                        <div class="video-icon">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                href="https://youtu.be/BS4TUd7FJSg">Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Video Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Blog Area -->
    <!--==================================================-->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-sub-titile">
                            <h4>Blog & News View All</h4>
                        </div>
                        <div class="section-sub-thumb">
                            <img src="assets/images/resource/s-title-shape.png" alt="">
                        </div>
                        <div class="section-main-title">
                            <h2>Latest News & Articals</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-items-box">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog1.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="bi bi-person-fill"></i> By Admin</span>
                                <span><i class="bi bi-wechat"></i> {6}Comments</span>
                            </div>
                            <div class="blog-title">
                                <h4><a href="blog-details.html">Roofing Surveys Paints Award
                                        Wind Optimistic Outlook</a></h4>
                            </div>
                            <div class="blog-bottom-shape">
                                <img src="assets/images/blog/blog-shape1.png" alt="">
                            </div>
                            <div class="blog-bottom-title">
                                <h5>Bradley</h5>
                            </div>
                            <div class="blog-btn">
                                <a href="#">More Details <i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-items-box">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog2.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="bi bi-person-fill"></i> By Admin</span>
                                <span><i class="bi bi-wechat"></i> {6}Comments</span>
                            </div>
                            <div class="blog-title">
                                <h4><a href="blog-details.html">Ex-Homeless Shelter Head Agrees
                                        To Settlement Roofing</a></h4>
                            </div>
                            <div class="blog-bottom-shape">
                                <img src="assets/images/blog/blog-shape2.png" alt="">
                            </div>
                            <div class="blog-bottom-title">
                                <h5>Bradley</h5>
                            </div>
                            <div class="blog-btn">
                                <a href="#">More Details <i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-items-box">
                        <div class="blog-thumb">
                            <img src="assets/images/blog/blog3.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="bi bi-person-fill"></i> By Admin</span>
                                <span><i class="bi bi-wechat"></i> {6}Comments</span>
                            </div>
                            <div class="blog-title">
                                <h4><a href="blog-details.html">Building Worker Help Each Other
                                        With at Construction Site</a></h4>
                            </div>
                            <div class="blog-bottom-shape">
                                <img src="assets/images/blog/blog-shape3.png" alt="">
                            </div>
                            <div class="blog-bottom-title">
                                <h5>Bradley</h5>
                            </div>
                            <div class="blog-btn">
                                <a href="#">More Details <i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Blog Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Brand Area -->
    <!--==================================================-->
    <div class="brand-area">
        <div class="container">
            <div class="row mb-80">
                <div class="brand-title">
                    <h4>Our Partners & Suppoters</h4>
                </div>
            </div>
            <div class="row">
                <div class="brand_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="brand-thumb">
                            <img src="assets/images/brand/barand.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-thumb">
                            <img src="assets/images/brand/barand.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Brand Area -->
    <!--==================================================-->
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

    <!-- theme js -->
    <script src="assets/js/theme.js"></script>

    <!-- scroll js -->
    <script src="assets/js/script.js"></script>

    <script>
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
    </script>
@endsection
