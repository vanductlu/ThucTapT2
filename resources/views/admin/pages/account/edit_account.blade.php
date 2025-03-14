
@section('content')
<div class="content-page">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="#">Quản lý tài khoản</a></li>
                        <li class="breadcrumb-item active">Sửa tài khoản</li>
                    </ol>
                </div>
                <h4 class="page-title">Sửa tài khoản</h4>
            </div>
        </div>
    </div>

    <form style="margin: 0 auto; width:300px; font-size: 14px" action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
            <legend>Thông tin tài khoản</legend>
            Họ
            <input class="form-control mb-2" type="text" name="first_name" value="{{ $user->first_name }}" required />
        </fieldset>
        <fieldset>
            Tên
            <input class="form-control mb-2" type="text" name="last_name" value="{{ $user->last_name }}" required />
        </fieldset>
        <fieldset>
            Email
            <input class="form-control mb-2" type="email" name="email" value="{{ $user->email }}" readonly />
        </fieldset>
        <fieldset>
            Mật khẩu
            <input class="form-control mb-2" type="password" name="password" placeholder="Nhập mật khẩu mới nếu muốn đổi" />
        </fieldset>
        <fieldset>
            Số điện thoại
            <input class="form-control mb-2" type="text" name="phone_number" value="{{ $user->phone_number }}" />
        </fieldset>
        <fieldset>
            Địa chỉ
            <input class="form-control mb-2" type="text" name="address" value="{{ $user->address }}" />
        </fieldset>
        <fieldset>
            Chức vụ
            <select class="form-control mb-2" name="role">
                <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>User</option>
                <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
            </select>
        </fieldset>
        <fieldset class="text-center pt-3">
            <button class="btn btn-danger" type="submit">Edit</button>
            <button class="btn btn-secondary" type="button" onclick="window.location='{{ route('users.index') }}'">Cancel</button>
        </fieldset>
    </form>
</div>
@endsection
