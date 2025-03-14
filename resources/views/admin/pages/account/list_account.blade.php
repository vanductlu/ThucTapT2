@extends('layouts.admin')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- Start Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                                <li class="breadcrumb-item active">Quản lý tài khoản</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Hiển thị tài khoản</h4>
                    </div>
                </div>
            </div>     
            <!-- End Page Title -->

            <table id="listAccount" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID Người dùng</th>
                        <th>Chức vụ</th>
                        <th>Email</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="text-center">
                        <td>{{ $user->User_Id }}</td>
                        <td>{{ $user->role->Role_Name ?? 'N/A' }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->First_Name }}</td>
                        <td>{{ $user->Last_Name }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->Phonenumber }}</td>
                        <td>
                            <a href="{{ route('users.edit', ['user' => $user->User_Id]) }}" class="btn btn-warning btn-sm">
                                <i class="far fa-edit"></i> Sửa
                            </a>
                            <form action="{{ route('users.destroy', ['user' => $user->User_Id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');">
                                    <i class="la la-times-circle-o"></i> Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- Container -->
    </div> <!-- Content -->
</div>
@endsection