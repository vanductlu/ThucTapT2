<div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#">
                    <img src="{{ asset('public/admin/assets/images/users/user-1.jpg') }}" class="rounded-circle" alt="user">
                    <span class="pro-user-name ml-1">Admin <i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </li>
        </ul>

        <div class="logo-box">
            <a href="{{ route('admin.dashboard') }}" class="logo text-center">
                <img src="{{ asset('public/admin/assets/images/ebook-logo.ico') }}" height="24" alt="Logo">
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

                    <!-- Quản lý tài khoản -->
                    <li>
                        <a href="javascript: void(0);">
                            <i class="la la-user"></i>
                            <span> Quản lý tài khoản </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.account') }}">Hiển thị tài khoản</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.account.create') }}">Thêm tài khoản</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý NXB -->
                    <li>
                        <a href="javascript: void(0);">
                            <i class="la la-university"></i>
                            <span> Quản lý NXB </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.publisher') }}">Hiển thị NXB</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.publisher.create') }}">Thêm NXB</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý thể loại -->
                    <li>
                        <a href="javascript: void(0);">
                            <i class="la la-th-large"></i>
                            <span> Quản lý thể loại </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.category') }}">Hiển thị thể loại</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.category.create') }}">Thêm thể loại</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý sản phẩm -->
                    <li>
                        <a href="javascript: void(0);">
                            <i class="la la-book"></i>
                            <span> Quản lý sản phẩm </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.product') }}">Hiển thị sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.product.create') }}">Thêm sản phẩm</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Quản lý đơn hàng -->
                    <li>
                        <a href="javascript: void(0);">
                            <i class="la la-shopping-cart"></i>
                            <span> Quản lý đơn hàng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.orders') }}">Hiển thị đơn hàng</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.orders.create') }}">Thêm đơn hàng</a>
                            </li>
                        </ul>
                    </li>

                    <li style="position: absolute; bottom: 0px">
                        <a href="{{ route('home') }}">Trở về website</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
</div>