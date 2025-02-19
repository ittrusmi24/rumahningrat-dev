<!--==================================================-->
<!-- Start Header Area -->
<!--==================================================-->
<header class="header-area" id="sticky-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('/assets/images/fav-icon') }}/icon-ningrat.png" alt="logo" style="height: 50px">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 text-end d-flex align-items-center justify-content-end">
                @include('menu')

            </div>
        </div>
    </div>
</header>
<style>
    .menu-container {
        position: relative;
        display: inline-block;
    }

    .menu-icon {
        width: 100%;
        font-size: 24px;
        cursor: pointer;
        /* padding: 10px; */
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
        display: none; /* Default: hidden */
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

<!-- Hamilton Mobile Menu Area -->
<div class="mobile-menu-area sticky-menu" id="navbar">
    <div class="mobile-menu">
        <div class="mobile-logo">
            <a href="{{ url('/') }}"><img src="{{ url('/assets/images/fav-icon') }}/icon-ningrat.png" alt="logo" style="height: 50px"></a>
        </div>
        <div class="side-menu-info">
            <div class="sidebar-menu">
                <a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Header Area -->
<!--==================================================-->
