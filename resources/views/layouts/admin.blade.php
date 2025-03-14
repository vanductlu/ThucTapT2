<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/ebook-logo.ico') }}">

    <!-- Plugin CSS -->
    <link href="{{ asset('public/admin/assets/libs/jquery-vectormap/jquery-vectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">

    <!-- App CSS -->
    <link href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin/assets/css/css.css') }}" rel="stylesheet" type="text/css">

    <!-- CSS Riêng Cho Trang Con -->
    @stack('styles')
</head>

<body class="admin-body">
    <div id="wrapper">
        {{-- Include Menu --}}
        @include('admin.inc.menu')

        {{-- Nội dung trang --}}
        <div id="content">
            @yield('content')
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="{{ asset('public/admin/assets/js/vendor.min.js') }}"></script>

    <!-- Third-Party JS -->
    <script src="{{ asset('public/admin/assets/libs/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/jquery-vectormap/jquery-vectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/jquery-vectormap/jquery-vectormap-us-merc-en.js') }}"></script>

    <!-- Dashboard Init -->
    <script src="{{ asset('public/admin/assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('public/admin/assets/js/app.min.js') }}"></script>

    <!-- Custom Scripts -->
    @stack('scripts')
</body>
</html>
