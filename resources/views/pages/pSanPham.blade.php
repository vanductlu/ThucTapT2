<div class="section">
    <div class="container">
        <div class="row">
            <div id="aside" class="col-md-3">
                <div class="aside">
                    <h3 class="aside-title">Loại sách</h3>
                    <div class="checkbox-filter">
                        @foreach($categories as $category)
                            <div class="input-checkbox">
                                <input type="checkbox" id="category-{{ $category->id }}">
                                <label for="category-{{ $category->id }}">
                                    <span></span>
                                    {{ $category->name }}
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
                                <input type="checkbox" id="brand-{{ $publisher->id }}">
                                <label for="brand-{{ $publisher->id }}">
                                    <span></span>
                                    {{ $publisher->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="store" class="col-md-9">
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sắp xếp:
                            <select class="input-select">
                                <option value="asc">Giá tăng dần</option>
                                <option value="desc">Giá giảm dần</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{ $product->category->name }}</p>
                                    <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                    <h4 class="product-price">${{ $product->price }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="store-filter clearfix">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>