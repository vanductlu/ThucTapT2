@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ebook</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý NXB</a></li>
                                <li class="breadcrumb-item active">Hiển thị NXB</li>

                            </ol>
                        </div>
                        <h4 class="page-title">Hiển thị nhà xuất bản</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr style="text-align: center;">
                        <th width="400">ID Nhà xuất bản</th>
                        <th width="300">Tên Nhà Xuất Bản</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publishers as $publisher)
                        <tr style="text-align: center;">
                            <td>{{ $publisher->Publishing_Company_Id }}</td>
                            <td>{{ $publisher->Publishing_Company_Name }}</td>
                            <td>
                                <a href="{{ route('publishers.edit', $publisher->Publishing_Company_Id) }}" class="btn btn-warning btn-sm">
                                    <i class="far fa-edit"></i> Sửa
                                </a>
                                <form action="{{ route('publishers.destroy', $publisher->Publishing_Company_Id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">
                                        <i class="la la-times-circle-o"></i> Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection