@foreach($cart as $key => $value)
<div class="product-widget">
    <div class="product-img">
        <a href="{{ route('product.detail', ['id' => $key]) }}">
            <img src="{{ asset($value['avatar']) }}" alt="">
        </a>
    </div>
    <div class="product-body">
        <h3 class="product-name">
            <a href="{{ route('product.detail', ['id' => $key]) }}">
                {{ $value['name'] }}
            </a>
        </h3>
        <h4 class="product-price">
            <span class="qty">{{ $value['quantity'] }} x</span>
            {{ number_format($value['price'], 0, '.', '.') }}₫
        </h4>
    </div>
    <button class="delete" onclick="cartAction('remove', '{{ $key }}')">
        <i class="fa fa-close"></i>
    </button>
</div>
@endforeach
