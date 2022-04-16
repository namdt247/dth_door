<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>DTHDoor - Nhôm kính cao cấp</title>
    <title>
        @yield('title')
    </title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="DTHDoor - Nhôm kính cao cấp, tận tâm đến từng chi tiết">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
    ================================================== -->
    <link rel="icon" type="image/png" href="/frontend/images/logo_dth.jpg">

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/frontend/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/frontend/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/frontend/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="/frontend/plugins/slick/slick.css">
    <link rel="stylesheet" href="/frontend/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="/frontend/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/custom.css">
    @yield('header-css')
</head>
<body>
<div class="body-inner">
    <!--/ Topbar -->
    @include('frontend.include.top_bar')

    <!-- Header -->
    @include('frontend.include.header')

    <!-- Main content -->
    @yield('content')

    <!-- Footer -->
    @include('frontend.include.footer')

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="/frontend/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="/frontend/plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="/frontend/plugins/slick/slick.min.js"></script>
    <script src="/frontend/plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="/frontend/plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="/frontend/plugins/shuffle/shuffle.min.js" defer></script>

    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="/frontend/plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="/frontend/js/script.js"></script>

    <!-- Script custom -->
    @yield('main-script')
</div><!-- Body inner end -->
</body>

</html>
