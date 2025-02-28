<div class="col-md-4 col-xs-6">
    <div class="product">
        <div class="product-img">
            <a href="{{ route('product.detail', ['id' => $row->Product_Id]) }}">
                <img src="{{ asset($row->Avatar) }}" alt="">
            </a>            
        </div>

        <div class="product-body">
            <p class="product-category">
                {{ $row->Category_Name }}
            </p>
            <h3 class="product-name">
                <a href="{{ route('product.detail', ['id' => $row->Product_Id]) }}">
                    {{ $row->Name }}
                </a>
            </h3>
            <p class="product-category">
                {{ $row->Author }}
            </p>
            <h4 class="product-price">
                {{ number_format($row->Price, 0, '.', '.') }} ₫
            </h4>
            <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>

            <div class="product-btns">
                <button class="add-to-wishlist">
                    <i class="fa fa-heart-o"></i>
                    <span class="tooltipp">add to wishlist</span>
                </button>
                <button class="add-to-compare">
                    <i class="fa fa-exchange"></i>
                    <span class="tooltipp">add to compare</span>
                </button>
                <button class="quick-view">
                    <i class="fa fa-eye"></i>
                    <span class="tooltipp">quick view</span>
                </button>
            </div>
        </div>

        <div class="add-to-cart">
            @if ($row->Quantity > 0)
                <button class="add-to-cart-btn" onclick="cartAction('add', '{{ $row->Product_Id }}')">
                    <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                </button>
            @else
                <button class="add-to-cart-btn-disable" disabled>Hết hàng</button>
            @endif
        </div>
    </div>
</div>
