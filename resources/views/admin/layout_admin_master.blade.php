<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title>DTHDoor - Admin</title>
    <meta property="og:locale" content="en_US">
    <meta name="description" content="DTHDoor - Trang quản trị hệ thống">
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="/admin/assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="/admin/assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="css.css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="/admin/assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/admin/assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="/admin/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="/admin/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="/admin/assets/stylesheets/custom.css">
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
</head>
<body>
<!-- .app -->
<div class="app">
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .app-header -->
    @include('admin.include.header')
    <!-- /.app-header -->

    <!-- .app-aside -->
    @include('admin.include.sidebar')
    <!-- /.app-aside -->

    <!-- .app-main -->
    <main class="app-main">
        @yield('main-content')

        @include('admin.include.footer')
        <!-- /.wrapper -->
    </main>
    <!-- /.app-main -->
</div><!-- /.app -->
<!-- BEGIN BASE JS -->
<script src="/admin/assets/vendor/jquery/jquery.min.js"></script>
<script src="/admin/assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="/admin/assets/vendor/pace-progress/pace.min.js"></script>
<script src="/admin/assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
<script src="/admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/admin/assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="/admin/assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/admin/assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src="/admin/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="/admin/assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="gtag/js.js?id=UA-116692175-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-116692175-1');
</script>
</body>
</html>