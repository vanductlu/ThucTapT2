
@section('content')
<div class="content-page">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="#">Quản lý thể loại</a></li>
                        <li class="breadcrumb-item active">Sửa thể loại</li>
                    </ol>
                </div>
                <h4 class="page-title">Sửa thể loại</h4>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form style="margin: 0 auto; width:300px; font-size: 14px" action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <fieldset>
            <legend>Thông tin thể loại</legend>
            <label for="category_name">Tên thể loại</label>
            <input style="margin-bottom:7px;" class="form-control" type="text" required name="category_name" value="{{ $category->name }}" />
            @error('category_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </fieldset>

        <fieldset style="padding-top: 15px; text-align: center">
            <button class="btn btn-danger" style="margin-right: 10px; width: 70px; height: 35px" type="submit">Edit</button>
            <button class="btn btn-danger" style="width: 70px; height: 35px" type="button" onclick="location.href='{{ route('categories.edit', $category->id) }}';">Cancel</button>
        </fieldset>
    </form>
</div>
@endsection
