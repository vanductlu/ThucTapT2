
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
                                <li class="breadcrumb-item active">Thêm sản phẩm</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm sản phẩm</h4>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form style="margin: 0 auto; width:500px; font-size: 14px" enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
                @csrf
                <fieldset>
                    <legend>Thông tin sản phẩm</legend>
                    <label>Tên sản phẩm</label>
                    <input class="form-control" type="text" required name="txtProduct_Name" />
                </fieldset>

                <fieldset>
                    <label>ID Thể loại</label>
                    <select class="form-control" name="txtCat_Id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->id }}</option>
                        @endforeach
                    </select>
                </fieldset>

                <fieldset>
                    <label>SKU</label>
                    <input class="form-control" type="text" required name="txtSKU" />
                </fieldset>

                <fieldset>
                    <label>ID Nhà xuất bản</label>
                    <select class="form-control" name="txtPublishingCo_Id" required>
                        @foreach($publishingCompanies as $publishingCompany)
                            <option value="{{ $publishingCompany->id }}">{{ $publishingCompany->name }}</option>
                        @endforeach
                    </select>
                </fieldset>

                <fieldset>
                    <label>Tác giả</label>
                    <input class="form-control" type="text" required name="txtAuthor" />
                </fieldset>

                <fieldset>
                    <label>Giá tiền</label>
                    <input class="form-control" type="number" required name="txtPrice" />
                </fieldset>

                <fieldset>
                    <label>Số lượng</label>
                    <input class="form-control" type="number" required name="txtQuantity" />
                </fieldset>

                <fieldset>
                    <label>Ngày thêm</label>
                    <input class="form-control" type="date" required name="txtDate" />
                </fieldset>

                <fieldset>
                    <label>Mô tả</label>
                    <textarea class="form-control" required name="txtDescription"></textarea>
                </fieldset>

                <fieldset>
                    <label>Hình ảnh</label>
                    <input type="file" name="myfile" />
                </fieldset>

                <fieldset class="text-center" style="padding-top: 20px;">
                    <button class="btn btn-danger" type="submit">Thêm</button>
                    <a class="btn btn-secondary" href="{{ url()->previous() }}">Hủy</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
