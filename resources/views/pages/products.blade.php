@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div id="aside" class="col-md-3">
                <div class="aside">
                    <h3 class="aside-title">Loại sách</h3>
                    <div class="checkbox-filter">
                        @foreach($categories as $category)
                            <div class="input-checkbox">
                                <input type="checkbox" class="category-filter" id="category-{{ $category->Category_Id }}" value="{{ $category->Category_Id }}">
                                <label for="category-{{ $category->Category_Id }}">
                                    <span></span>
                                    {{ $category->Category_Name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="aside">
                    <h3 class="aside-title">Nhà xuất bản</h3>
                    <div class="checkbox-filter">
                        @foreach($publishers as $publisher)
                            <div class="input-checkbox">
                                <input type="checkbox" class="publisher-filter" id="publisher-{{ $publisher->Publishing_Company_Id }}" value="{{ $publisher->Publishing_Company_Id }}">
                                <label for="publisher-{{ $publisher->Publishing_Company_Id }}">
                                    <span></span>
                                    {{ $publisher->Publishing_Company_Name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="store" class="col-md-9">
                @if($products->count())
                    <div class="row" id="product-list">
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{ route('product.show', $product->Product_Id) }}">
                                            <img src="{{ asset('public/frontend/images/' . basename($product->Avatar)) }}" alt="{{ $product->Name }}">
                                        </a>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">{{ $product->category->Category_Name ?? 'Không có danh mục' }}</p>
                                        <h3 class="product-name">
                                            <a href="{{ route('product.show', $product->Product_Id) }}">{{ $product->Name }}</a>
                                        </h3>
                                        <h4 class="product-price">{{ $product->Price ? number_format($product->Price, 0, ',', '.') . '₫' : 'Chưa có giá' }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="pagination">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                @else
                    <p>Không tìm thấy sản phẩm nào phù hợp.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection