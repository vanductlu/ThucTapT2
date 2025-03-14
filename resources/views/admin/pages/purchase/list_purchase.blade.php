@section('styles')
<style>

    .paging{
        font-size: 14px;
        text-align: right; 
        margin-top: 30px;
    }

    .paging a{
        color: #FFF;    
    }

    .page-item{
        /* border: 1px solid #ccc;
        padding: 5px 9px; */
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #f0643b;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
        border-radius: 2px;
    }

    .paging a:hover{
        background-color: #3B434E;
        color: #D10024;
    }

    .paging a:active{
        background-color: #D10024;
        border-color: #D10024;
        color: #FFF;
        font-weight: 500;
        cursor: default;
    } 
</style>
@endsection

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                                <li class="breadcrumb-item"><a href="#">Quản lý đơn hàng</a></li>
                                <li class="breadcrumb-item active">Hiển thị đơn hàng</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Hiển thị đơn hàng</h4>
                    </div>
                </div>
            </div>
            <table>
                <tr style="text-align: center; font-size: 14px;">
                    <th width="40">Id</th>
                    <th width="90">Tên khách hàng</th>
                    <th width="240">Địa chỉ giao hàng</th>
                    <th width="100">Số điện thoại</th>
                    <th width="100">Email</th>
                    <th width="100">Ngày tạo</th>
                    <th width="80">Tổng hóa đơn</th>
                    <th width="70">Tình trạng</th>
                </tr>
                @foreach ($purchases as $purchase)
                <tr style="text-align: center;">
                    <td>{{ $purchase->id }}</td>
                    <td>{{ $purchase->name }}</td>
                    <td>{{ $purchase->delivery_address }}</td>
                    <td>{{ $purchase->phone_number }}</td>
                    <td>{{ $purchase->email }}</td>
                    <td>{{ $purchase->created_at }}</td>
                    <td>{{ number_format($purchase->total, 0, '.', '.') }} ₫</td>
                    <td>{{ $purchase->purchaseState->value }}</td>
                    <td>
                        <a href="{{ route('purchase.edit', $purchase->id) }}">
                            <i class="far fa-edit"></i>
                            <span>Sửa</span>
                        </a>
                        <form action="{{ route('purchase.destroy', $purchase->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Bạn muốn xóa đơn hàng này?');" style="border:none; background:none; cursor:pointer;">
                                <i class="la la-times-circle-o"></i>
                                <span>Xóa</span>
                            </button>
                        </form>
                        <a href="{{ route('purchase.show', $purchase->id) }}">
                            <i class="far fa-eye"></i>
                            <span>Xem</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div>
                <br>
                <p> Tổng doanh thu: {{ number_format($totalRevenue, 0, '.', '.') }} ₫</p>
            </div>
            <div>
                <p> Số đơn hàng đã xác nhận: {{ $totalConfirm }}</p>
                <p> Số đơn hàng đang giao: {{ $totalShipping }}</p>
            </div>
            <div class="paging">
                {{ $purchases->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
