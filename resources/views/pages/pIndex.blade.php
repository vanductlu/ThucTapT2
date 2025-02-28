<div class="section">

    <!-- container -->
    <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{('public/frontend/images/banner01.png')}}" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Quà tặng<br>Bất ngờ</h3>
                            <a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{('public/frontend/images/banner02.jpg')}}" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Board Game</h3>
                            <a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{('public/frontend/images/banner03.png')}}" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Tiệc<br>Flash sale</h3>
                            <a href="#" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Sản phẩm mới nhất -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Sản phẩm mới nhất</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Văn học</a></li>
                                <li><a data-toggle="tab" href="#tab2">Kinh Tế</a></li>
                                <li><a data-toggle="tab" href="#tab3">Tâm lý - Kỹ năng sống</a></li>
                                <li><a data-toggle="tab" href="#tab4">Thiếu nhi</a></li>
                                <li><a data-toggle="tab" href="#tab5">Nuôi dạy con</a></li>
                                <li><a data-toggle="tab" href="#tab6">Học ngoại ngữ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->
            
                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">

                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->										
                                    @foreach($result1 as $row)
                                        @include('templates.mauSanPhamMoiNhat', ['row' => $row])
                                    @endforeach									
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>

                            <div id="tab2" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    <!-- product -->										
                                    @foreach($result2 as $row)
                                        @include('templates.mauSanPhamMoiNhat', ['row' => $row])
                                    @endforeach											
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>

                            <div id="tab3" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-3">
                                    <!-- product -->										
                                    @foreach($result3 as $row)
                                        @include('templates.mauSanPhamMoiNhat', ['row' => $row])
                                    @endforeach											
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-3" class="products-slick-nav"></div>
                            </div>

                            <div id="tab4" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-4">
                                    <!-- product -->										
                                    @foreach($result4 as $row)
                                        @include('templates.mauSanPhamMoiNhat', ['row' => $row])
                                    @endforeach											
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>

                            <div id="tab5" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-5">
                                    <!-- product -->										
                                    @foreach($result5 as $row)
                                        @include('templates.mauSanPhamMoiNhat', ['row' => $row])
                                    @endforeach											
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-5" class="products-slick-nav"></div>
                            </div>

                            <div id="tab6" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-6">
                                    <!-- product -->										
                                    @foreach($result6 as $row)
                                        @include('templates.mauSanPhamMoiNhat', ['row' => $row])
                                    @endforeach											
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-6" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Sản phẩm mới nhất -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- Sản phẩm bán chạy -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Sản phẩm bán chạy</h3>							
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav">

                                @foreach($result as $row)
                                    @include('templates.mauSanPhamBanChay', ['row' => $row])
                                @endforeach
                                                                        
                                </div>
                                <div id="slick-nav" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Sản phẩm bán chạy -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <!-- /NEWSLETTER -->
    
</div>