<!-- SECTION -->
<div class="section">
    <div class="container">        
        <div class="row">
            @if(empty(session('cart')))
                <h2 class="notification-error"> BẠN CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG </h2>
            @else
                <div class="col-md-9">
                    <div class="section-title">
                        <h3 class="title">Giỏ hàng</h3>
                    </div>

                    <div class="card">
                        <table class="table table-hover">
                            <thead class="text-muted">
                                <tr>
                                    <th colspan="2" class="text-center">Sản phẩm</th>
                                    <th width="100" class="text-center">Số lượng</th>
                                    <th width="120" class="text-center">Đơn giá</th>
                                    <th width="120" class="text-center">Tổng</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>

                            <tbody id="gioHang">
                                @foreach(session('cart', []) as $key => $item)
                                    @include('templates.mauSanPham-pGioHang', ['item' => $item])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Chi tiết đơn hàng -->
                <div class="col-md-3 order-details" style="margin-top: 80px">
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>Tạm tính</strong></div>
                            <div id="tamTinh-GioHang">
                                {{ number_format(session('subTotal', 0), 0, '.', '.') }} ₫
                            </div>
                        </div>

                        <div class="order-col">
                            <div><strong>Phí vận chuyển</strong></div>
                            <div>Miễn phí</div>
                        </div>

                        <hr>

                        <div class="order-col">
                            <div><strong>Tổng tiền</strong></div>
                            <div><strong class="order-total" id="tongTien-GioHang">
                                {{ number_format(session('subTotal', 0), 0, '.', '.') }} ₫
                            </strong></div>
                        </div>
                    </div>

                    <a href="{{ route(session('email') ? 'checkout' : 'login') }}">
                        <span class="check-out">Thanh toán</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- /SECTION -->