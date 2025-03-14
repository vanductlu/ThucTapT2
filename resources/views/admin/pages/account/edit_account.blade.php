@extends('layouts.admin')

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

    <form style="margin: 0 auto; width:300px; font-size: 14px" action="{{ route('users.update', $user->User_Id) }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
            <legend>Thông tin tài khoản</legend>
            Họ
            <input class="form-control mb-2" type="text" name="First_Name" value="{{ $user->First_Name }}" required />
        </fieldset>
        <fieldset>
            Tên
            <input class="form-control mb-2" type="text" name="Last_Name" value="{{ $user->Last_Name }}" required />
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
            <input class="form-control mb-2" type="text" name="Phonenumber" value="{{ $user->Phonenumber }}" />
        </fieldset>
        <fieldset>
            Địa chỉ
            <input class="form-control mb-2" type="text" name="Address" value="{{ $user->Address }}" />
        </fieldset>
        <fieldset>
            Chức vụ
            <select class="form-control mb-2" name="User_Role">
                @foreach($roles as $role)
                    <option value="{{ $role->Role_Id }}" {{ $user->User_Role == $role->Role_Id ? 'selected' : '' }}>{{ $role->Role_Name }}</option>
                @endforeach
            </select>
        </fieldset>
        <fieldset class="text-center pt-3">
            <button class="btn btn-danger" type="submit">Edit</button>
            <button class="btn btn-secondary" type="button" onclick="window.location='{{ route('users.index') }}'">Cancel</button>
        </fieldset>
    </form>
</div>
@endsection