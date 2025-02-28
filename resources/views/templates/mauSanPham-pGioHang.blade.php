<tr class="chiTietSP">
    <td>
        <a href="{{ route('product.detail', ['id' => $key]) }}">
            <img src="{{ asset($value['avatar']) }}" class="img-thumbnail">
        </a>
    </td>

    <td>
        <p style="color: #999;">{{ $value['category_name'] }}</p>
        <p style="display: none" class="product_id">{{ $key }}</p>
        <a href="#" style="font-size: large;">{{ $value['name'] }}</a>
        <p style="color: #999;">{{ $value['author'] }}</p>
    </td>

    <td>        
        <div class="input-number">
            <input type="number" id="slSanPham" value="{{ $value['quantity'] }}">
            <span class="qty-up">+</span>
            <span class="qty-down">-</span>
        </div>
    </td>

    <td class="text-center">
        <div class="price-wrap">
            <var class="price">{{ number_format($value['price'], 0, '.', '.') }}₫</var>
        </div>
    </td>

    <td class="text-center">
        <strong class="tongTien1SP">{{ number_format($value['price'] * $value['quantity'], 0, '.', '.') }}₫</strong>
    </td>

    <td class="text-right">
        <a href="#" onclick="cartAction('remove', '{{ $key }}')">
            <span>
                <svg fill="red" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke="red" stroke-width="1.06" d="M16,16 L4,4"></path>
                    <path fill="none" stroke="red" stroke-width="1.06" d="M16,4 L4,16"></path>
                </svg>
            </span>
        </a>
    </td>
</tr>
