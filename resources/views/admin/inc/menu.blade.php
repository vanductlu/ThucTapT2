<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#">
                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="rounded-circle" alt="user">
                        <span class="pro-user-name ml-1">Admin <i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                        <a href="{{ route('admin.logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="logo-box">
                <a href="{{ route('admin.dashboard') }}" class="logo text-center">
                    <img src="{{ asset('assets/images/ebook.png') }}" height="24" alt="Logo">
                </a>
            </div>
        </div>
        <!-- end Topbar -->
        
        <!-- Sidebar -->
        <div class="left-side-menu">
            <div class="slimscroll-menu">
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Dashboards</li>
                        <li><a href="{{ route('admin.accounts') }}"><i class="la la-user"></i> Quản lý tài khoản</a></li>
                        <li><a href="{{ route('admin.publishers') }}"><i class="la la-university"></i> Quản lý NXB</a></li>
                        <li><a href="{{ route('admin.categories') }}"><i class="la la-th-large"></i> Quản lý thể loại</a></li>
                        <li><a href="{{ route('admin.products') }}"><i class="la la-book"></i> Quản lý sản phẩm</a></li>
                        <li><a href="{{ route('admin.orders') }}"><i class="la la-shopping-cart"></i> Quản lý đơn hàng</a></li>
                        <li style="position: absolute; bottom: 0px">
                            <a href="{{ route('home') }}">Trở về website</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        
        <!-- Content -->
        {{-- <div class="content-page">
            @yield('content')
        </div> --}}
    </div>
</body>
</html>
