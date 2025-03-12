@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Banner -->
    <div id="home-banner" class="mb-4">
        <img src="{{ asset('public/images/banner.jpg') }}" class="img-fluid" alt="Banner">
    </div>

    <!-- Danh mục sản phẩm -->
    <h2 class="text-center mb-4">Danh Mục Sản Phẩm</h2>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <a href="{{ route('products.filter', ['categories' => [$category->Category_Id]]) }}">
                        <img src="{{ $category->Avatar }}" class="card-img-top" alt="{{ $category->Name }}">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $category->Name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

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
