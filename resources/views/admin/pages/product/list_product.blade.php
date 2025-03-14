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
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #f0643b;
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
                                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                                <li class="breadcrumb-item active">Hiển thị tất cả</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Danh sách sản phẩm</h4>
                    </div>
                </div>
            </div>
            
            <table>
                <tr style="text-align: center; font-size: 14px;">
                    <th width="70">ID thể loại</th>
                    <th width="70">SKU</th>
                    <th width="300">Tên sản phẩm</th>
                    <th width="150">Tác giả</th>
                    <th width="100">Ngày thêm</th>
                    <th width="200">Hình ảnh</th>
                    <th width="150">Hành động</th>
                </tr>
                @foreach ($products as $product)
                <tr style="text-align: center;">
                    <td>{{ $product->Category_Id }}</td>
                    <td>{{ $product->SKU }}</td>
                    <td>{{ $product->Name }}</td>
                    <td>{{ $product->Author }}</td>
                    <td>{{ $product->Date }}</td>
                    <td><img src="{{ asset($product->Avatar) }}" style="width:70px; height: 70px; margin-top: 15px" /></td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">
                            <i class="far fa-edit"></i>
                            <span>Sửa</span>
                        </a>
                        <a onclick="return confirm('Delete this item?');" href="{{ route('products.destroy', $product->id) }}">
                            <i style="margin-left: 15px" class="la la-times-circle-o"></i>
                            <span>Xóa</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>

            <div class="paging">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection