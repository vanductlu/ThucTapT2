<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ebook - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/ebook-logo.ico') }}">

    <!-- Plugin CSS -->
    <link href="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css.css') }}" rel="stylesheet">
</head>

<body class="authentication-bg authentication-bg-pattern">

    <!-- Begin page -->
    <div id="wrapper">
        <div>
            @include('inc.menu')
        </div>

        <div id="content">
            @switch(request()->query('act', 1))
                @case(1)
                    @include('pages.account.pIndex')
                    @break
                @case(2)
                    @include('pages.publisher.pIndex')
                    @break
                @case(3)
                    @include('pages.category.pIndex')
                    @break
                @case(4)
                    @include('pages.product.pIndex')
                    @break
                @case(5)
                    @include('pages.purchase.pIndex')
                    @break
                @default
                    <p>Không tìm thấy trang</p>
            @endswitch
        </div>
    </div>
    <!-- END wrapper -->

    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- Third Party JS -->
    <script src="{{ asset('assets/libs/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js') }}"></script>

    <!-- Dashboard Init -->
    <script src="{{ asset('assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>
</html>
