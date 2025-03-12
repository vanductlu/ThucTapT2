@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <!-- Sản phẩm nổi bật -->
    <h2 class="text-center my-4">Sản Phẩm Nổi Bật</h2>
    <div class="row" id="product-list">
        @foreach ($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="{{ url('/products/' . $product->Product_Id) }}">
                        <img src="{{ $product->Avatar }}" class="card-img-top" alt="{{ $product->Name }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->Name }}</h5>
                        <p class="card-text">{{ number_format($product->Price) }}₫</p>
                        <a href="{{ url('/products/' . $product->Product_Id) }}" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Phân trang -->
    <div id="pagination">
        {{ $products->links() }}
    </div>
</div>
@endsection
