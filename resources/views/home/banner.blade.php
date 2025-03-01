<!--==================================================-->
<!-- Start Banner Area -->
<!--==================================================-->
<section class="banner-section">
    <div class="banner-carousel owl-carousel">
        <div class="slide-item one">
            <div class="image-layer" style="background-image: url('assets/images/banner/home1.png');"></div>
            <div class="container-fluid">
                <div class="row">
                    <?php $project_active = 40; ?>
                    @if ($project_active == 40)
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <div class="slider-main-title text-center">
                                        <h1>RUMAH NINGRAT AWN BYPASS </h1>
                                        <h1 class="text-white">SERIES 2025</h1>
                                    </div>
                                    <div class="slider-discripton mt-2">
                                        <h5 class="text-white">Cicilan mulai dari 1 Juta</h5>
                                    </div>
                                    <div class="slider-butto mt-3">
                                        <a type="button" class="btn btn-primary" href="{{ url('/detail/40') }}">Booking
                                            Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <div class="slider-main-title text-center">
                                        <h1>RUMAH NINGRAT JAYASAMPURNA </h1>
                                        <h1 class="text-white">SERIES 2025</h1>
                                    </div>
                                    <div class="slider-discripton mt-2">
                                        <h5 class="text-white">Cicilan mulai dari 1 Juta</h5>
                                    </div>
                                    <div class="slider-butto mt-3">
                                        <a type="button" class="btn btn-primary" href="{{ url('/detail/70') }}">Booking
                                            Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================-->
<!-- End Banner Area -->
<!--==================================================-->
