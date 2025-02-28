<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{ $product->Avatar }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $product->Avatar }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="{{ $product->Avatar }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $product->Avatar }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{ $product->Name }}</h2>
                    <p class="product-category">{{ $product->Publishing_Company_Name }}</p>
                    <div class="product-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa fa-star"></i>
                        @endfor
                    </div>
                    <h3 class="product-price">{{ number_format($product->Price, 0, '.', '.') }} ₫</h3>
                    <p>{{ $product->Description }}</p>
                    <div class="add-to-cart">
                        <div class="qty-label">
                            Số lượng
                            <div class="input-number">
                                <input type="number" id="slSanPham" value="1">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                        @if ($product->Quantity > 0)
                            <button class="add-to-cart-btn" onclick="cartAction('add', '{{ $product->Product_Id }}')">
                                <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                            </button>
                        @else
                            <button class="add-to-cart-btn-disable" disabled>Hết hàng</button>
                        @endif
                    </div>
                    <ul class="product-links">
                        <li>Category:</li>
                        <li><a href="{{ url('san-pham/search?q=' . $product->Category_Name) }}">{{ $product->Category_Name }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Chi tiết sản phẩm -->

<!-- Sản phẩm xem gần đây -->

<!-- /Sản phẩm xem gần đây -->