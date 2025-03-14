@extends('layouts.admin.dashboard')

@section('content')
<div class="content-page">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="#">Quản lý tài khoản</a></li>
                        <li class="breadcrumb-item active">Thêm tài khoản</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm tài khoản</h4>
            </div>
        </div>
    </div>

    <form action="{{ route('users.store') }}" method="POST" style="margin: 0 auto; width: 300px; font-size: 14px;">
        @csrf
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <fieldset>
            Họ
            <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}">
            @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
        </fieldset>

        <fieldset>
            Tên
            <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
            @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
        </fieldset>

        <fieldset>
            Email
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </fieldset>

        <fieldset>
            Mật khẩu
            <input class="form-control" type="password" name="password">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </fieldset>

        <fieldset>
            Số điện thoại
            <input class="form-control" type="text" name="phone_number" value="{{ old('phone_number') }}">
        </fieldset>

        <fieldset>
            Địa chỉ
            <input class="form-control" type="text" name="address" value="{{ old('address') }}">
        </fieldset>

        <fieldset>
            Chức vụ
            <select class="form-control" name="role">
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
        </fieldset>

        <fieldset style="padding-top: 20px; text-align: center">
            <button class="btn btn-success" type="submit">Thêm</button>
            <a href="{{ route('admin.account') }}" class="btn btn-danger">Hủy</a>
        </fieldset>

    </form>
</div>
@endsection