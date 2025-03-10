
@section('content')
<div class="content-page">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="#">Quản lý NXB</a></li>
                        <li class="breadcrumb-item active">Thêm NXB</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm nhà xuất bản</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <form style="margin: 0 auto; width:300px; font-size: 14px" action="{{ route('publishers.store') }}" method="POST">
        @csrf <!-- Bảo vệ form -->
        
        <div class="form-group">
            <label for="txtCompany_Name">Tên nhà xuất bản</label>
            <input style="margin-bottom: 7px" class="form-control" type="text" required name="txtCompany_Name">
        </div>
        
        <div style="padding-top: 20px; text-align: center">
            <button type="submit" class="btn btn-danger" style="margin-right:10px; width: 70px">Add</button>
            <button type="button" class="btn btn-danger" style="width: 70px" onclick="location.href='{{ route('publishers.index') }}';">Cancel</button>
        </div>
    </form>
</div>
@endsection
