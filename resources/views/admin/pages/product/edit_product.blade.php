
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
                                <li class="breadcrumb-item"><a href="#">Quản lý sản phẩm</a></li>
                                <li class="breadcrumb-item active">Sửa thông tin sản phẩm</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sửa thông tin sản phẩm</h4>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form style="margin: 0 auto; width:500px; font-size: 14px" enctype="multipart/form-data" action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                <fieldset>
                    <legend>Thông tin sản phẩm</legend>
                    <label>Tên sản phẩm</label>
                    <input class="form-control" type="text" required name="txtProduct_Name" value="{{ $product->name }}" />
                </fieldset>

                <fieldset>
                    <label>ID Thể loại</label>
                    <select class="form-control" name="txtCat_Id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->id }}
                            </option>
                        @endforeach
                    </select>
                </fieldset>

                <fieldset>
                    <label>SKU</label>
                    <input class="form-control" type="text" required name="txtSKU" value="{{ $product->sku }}" />
                </fieldset>

                <fieldset>
                    <label>Nhà xuất bản</label>
                    <select class="form-control" name="txtPublishingCo_Id" required>
                        @foreach($publishingCompanies as $publishingCompany)
                            <option value="{{ $publishingCompany->id }}" {{ $product->publishing_company_id == $publishingCompany->id ? 'selected' : '' }}>
                                {{ $publishingCompany->name }}
                            </option>
                        @endforeach
                    </select>
                </fieldset>

                <fieldset>
                    <label>Tác giả</label>
                    <input class="form-control" type="text" required name="txtAuthor" value="{{ $product->author }}" />
                </fieldset>

                <fieldset>
                    <label>Giá tiền</label>
                    <input class="form-control" type="number" required name="txtPrice" value="{{ $product->price }}" />
                </fieldset>

                <fieldset>
                    <label>Số lượng</label>
                    <input class="form-control" type="number" required name="txtQuantity" value="{{ $product->quantity }}" />
                </fieldset>

                <fieldset>
                    <label>Ngày thêm</label>
                    <input class="form-control" type="date" required name="txtDate" value="{{ $product->added_date }}" />
                </fieldset>

                <fieldset>
                    <label>Mô tả</label>
                    <textarea class="form-control" required name="txtDescription">{{ $product->description }}</textarea>
                </fieldset>

                <fieldset>
                    <label>Hình ảnh</label>
                    @if($product->image)
                        <br>
                        <img src="{{ asset('storage/' . $product->image) }}" style="width:100px; height:100px; margin-bottom:10px" />
                        <br>
                    @endif
                    <input type="file" name="myfile" />
                </fieldset>

                <fieldset class="text-center" style="padding-top: 20px;">
                    <button class="btn btn-danger" type="submit">Lưu</button>
                    <a class="btn btn-secondary" href="{{ url()->previous() }}">Hủy</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
