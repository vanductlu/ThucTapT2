<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến trang index của admin
            return redirect()->route('admin.index');
        }

        // Đăng nhập thất bại, quay lại trang đăng nhập với thông báo lỗi
        return redirect()->route('login')->with('error', 'Invalid email or password.');
    }

    // Xử lý đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Hiển thị form đăng ký
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user', // Đảm bảo bảng là user
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Tạo người dùng mới
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Mã hóa mật khẩu
            'user_role' => 1, // Giá trị mặc định cho User_Role
        ]);

        // Đăng nhập người dùng sau khi đăng ký thành công
        Auth::login($user);

        // Đăng ký thành công, chuyển hướng đến trang index của admin
        return redirect()->route('admin.index');
    }
}