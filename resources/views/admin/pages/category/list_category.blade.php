
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                                <li class="breadcrumb-item"><a href="#">Quản lý thể loại</a></li>
                                <li class="breadcrumb-item active">Hiển thị thể loại</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Hiển thị thể loại</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th width="300">ID Thể loại</th>
                        <th width="200">Tên thể loại</th>
                        <th width="200">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr class="text-center">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                    <i class="far fa-edit"></i> Sửa
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                        <i class="la la-times-circle-o"></i> Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div> <!-- container -->
    </div> <!-- content -->
</div>
@endsection
