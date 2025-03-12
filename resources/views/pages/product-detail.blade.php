@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Ảnh sản phẩm chính -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{ asset('public/frontend/' . $product->Avatar) }}" alt="{{ $product->Name }}">
                    </div>
                    <div class="product-preview">
                        <img src="{{ asset('public/frontend/' . $product->Avatar) }}" alt="{{ $product->Name }}">
                    </div>
                </div>
            </div>

            <!-- Ảnh sản phẩm phụ -->
            <div class="col-md-2 col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="{{ asset('public/frontend/' . $product->Avatar) }}" alt="{{ $product->Name }}">
                    </div>
                    <div class="product-preview">
                        <img src="{{ asset('public/frontend/' . $product->Avatar) }}" alt="{{ $product->Name }}">
                    </div>
                </div>
            </div>

            <!-- Thông tin sản phẩm -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{ $product->Name }}</h2>
                    <p class="product-category">
                        {{ $product->publishingCompany->Name ?? 'Không xác định' }}
                    </p>

                    <div class="product-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa fa-star"></i>
                        @endfor
                    </div>

                    <h3 class="product-price">
                        {{ number_format($product->Price, 0, '.', '.') }} ₫
                    </h3>

                    <p>{{ $product->Description }}</p>

                    <div class="add-to-cart">
                        <div class="qty-label">
                            Số lượng
                            <div class="input-number">
                                <input type="number" id="slSanPham" value="1" min="1" max="{{ $product->Quantity }}">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>

                        @if ($product->Quantity > 0)
                            <button class="add-to-cart-btn" onclick="cartAction('add', '{{ $product->Product_Id }}')">
                                <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                            </button>
                        @else
                            <button class="add-to-cart-btn-disable" disabled>Hết hàng</button>
                        @endif
                    </div>

                    <ul class="product-links">
                        <li>Danh mục:</li>
                        <li>
                            <a href="{{ url('products/category/' . $product->category->Category_Id) }}">
                                {{ $product->category->Name ?? 'Không xác định' }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection