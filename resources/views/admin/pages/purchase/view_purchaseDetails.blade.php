<div class="content-page">
    <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ebook</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý đơn hàng</a></li>
                            <li class="breadcrumb-item active">Thông tin đơn hàng</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Thông tin đơn hàng</h4>
                </div>
            </div>
        </div>    
    
        <table>
            <tr style="text-align: center; font-size: 14px;">
                <th width="300">ID đơn hàng</th>
                <th width="300">ID sản phẩm</th>
                <th width="300">Tên sản phẩm</th>
                <th width="300">Hình ảnh</th>
                <th width="300">Số lượng</th>
                <th width="300">Tổng tiền</th>
            </tr>
    
            @foreach($purchaseDetails as $detail)
                <tr style="text-align: center;"> 
                    <td>{{ $detail->purchase_id }}</td>
                    <td>{{ $detail->product_id }}</td>
                    <td>{{ $detail->product->name }}</td>
                    <td><img src="{{ asset($detail->product->avatar) }}" style="width:70px; height: 70px; margin-top: 15px" /></td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ number_format($detail->total_amount, 0, '.', '.') }} ₫</td>
                </tr>
            @endforeach
        </table>
        
        <input class="btn btn-danger" style="width: 60px; height: 35px; text-align: center; margin-top: 20px; float: right" type="button" value="Back" onClick="location.href='{{ route('orders.index') }}';" />
    </div>