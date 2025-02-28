<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +123456789</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> egear@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> DHTL</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li>
                    <div class="dropdown">
                        @if(session()->has('display_name') && session()->has('email') && session()->has('role'))
                            @if(session('role') == 1)
                                <a href="{{ url('/admin') }}">
                                    <i class="fa fa-user-o"></i> {{ session('display_name') }}
                                </a>
                                <div class="dropdown-content">
                                    <a href="{{ url('/admin') }}">Trang quản lý Administrator</a>
                                    <a href="{{ url('/logout') }}">Đăng xuất</a>
                                </div>
                            @else
                                <a href="{{ url('/QuanLy') }}">
                                    <i class="fa fa-user-o"></i> {{ session('display_name') }}
                                </a>
                                <div class="dropdown-content">
                                    <a href="{{ url('/QuanLy') }}">Quản lý tài khoản</a>
                                    <a href="{{ url('/Donhang') }}">Đơn mua</a>
                                    <a href="{{ url('/logout') }}">Đăng xuất</a>
                                </div>
                            @endif
                        @else
                            <a href="{{ url('/login') }}">
                                <i class="fa fa-user-o"></i> Tài khoản
                            </a>
                            <div class="dropdown-content">
                                <a href="{{ url('/login') }}">Đăng nhập</a>
                                <a href="{{ url('/register') }}">Đăng ký</a>
                            </div>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{('public/frontend/images/logoE.png')}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form id="frmSearch" method="POST" action="{{ url('/search') }}">
                            @csrf
                            <input class="input" name="contentSearch" id="contentSearch" placeholder="Tìm tác phẩm, tác giả, loại sách, nhà xuất bản ...">
                            <button class="search-btn" id="submitFrmSearch">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Cart -->
                        <div class="dropdown" id="sectionGioHang-Dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Giỏ Hàng</span>
                                <div class="qty" id="slSanPham1">
                                    {{ session('cart') ? count(session('cart')) : 0 }}
                                </div>
                            </a>
                            <div class="cart-dropdown">
                                <div id="dsSanPham-DropDown" class="cart-list">
                                    @if(session('cart'))
                                        @foreach(session('cart') as $product)
                                            @include('components.product-dropdown', ['product' => $product])
                                        @endforeach
                                    @endif
                                </div>
                                <div class="cart-summary">
                                    <small>
                                        Có <span id="slSanPham2">{{ session('cart') ? count(session('cart')) : 0 }}</span> sản phẩm
                                    </small>
                                    <h5 style="font-size: 14px; color: #D10024;">
                                        Tạm tính:
                                        <span id="tamTinh-GioHang-DropDown"> 
                                            {{ session('subTotal') ? number_format(session('subTotal'), 0, '.', '.') : 0 }}
                                        </span>
                                    </h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="{{ url('/cart') }}">Xem giỏ hàng</a>
                                    <a href="{{ session('email') ? url('/checkout') : url('/login') }}">
                                        Thanh toán <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toggle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toggle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
        </div>
    </div>
    <!-- /MAIN HEADER -->

    <!-- NAVIGATION -->
    <nav id="bottom-header">
        <div class="container">
            <div id="responsive-nav">
                <ul id="mainNav" class="main-nav nav navbar-nav">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="{{ request()->is('products') ? 'active' : '' }}"><a href="{{ url('/products') }}">Sản phẩm</a></li>
                    <li><a href="{{ url('/products?category=Văn Học') }}">Văn học</a></li>
                    <li><a href="{{ url('/products?category=Kinh Tế') }}">Kinh tế</a></li>
                    <li><a href="{{ url('/products?category=Tâm Lý') }}">Tâm lý - Kỹ năng sống</a></li>
                    <li><a href="{{ url('/products?category=Thiếu Nhi') }}">Thiếu nhi</a></li>
                    <li><a href="{{ url('/products?category=Nuôi Dạy Con') }}">Nuôi dạy con</a></li>
                    <li><a href="{{ url('/products?category=Học Ngoại Ngữ') }}">Học ngoại ngữ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NAVIGATION -->
</header>