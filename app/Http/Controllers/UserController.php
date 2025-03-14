<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('login')->with('error', 'Invalid email or password.');
    }

    // Xử lý đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Bạn đã đăng xuất thành công.');
    }

    // Hiển thị form đăng ký
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    // Xử lý đăng ký
// Xử lý đăng ký
public function register(Request $request)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:user',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'User_Role' => 1,
    ]);

    Auth::login($user);

    return redirect()->route('login')->with('success', 'Đăng ký và đăng nhập thành công!');
}

    // Hiển thị danh sách người dùng
    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.pages.account.list_account', compact('users'));
    }

    // Hiển thị form thêm người dùng
    public function create()
    {
        $roles = UserRole::all();
        return view('admin.pages.account.add_account', compact('roles'));
    }

    // Xử lý lưu người dùng mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'email' => 'required|email|unique:user,email', // Sửa thành `user`
            'password' => 'required|min:6',
            'Phonenumber' => 'nullable',
            'Address' => 'nullable',
            'Role_Id' => 'required|exists:user_role,Role_Id', // Sửa thành `user_role` và `Role_Id`
        ]);
    
        $user = User::create([
            'First_Name' => $validated['First_Name'],
            'Last_Name' => $validated['Last_Name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'Phonenumber' => $validated['Phonenumber'],
            'Address' => $validated['Address'],
            'Role_Id' => $validated['Role_Id'], // Sửa thành `Role_Id`
        ]);
    
        return redirect()->route('users.index')->with('success', 'Tài khoản đã được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa người dùng
    public function edit(User $user)
    {
        $roles = UserRole::all();
        return view('admin.pages.account.edit_account', compact('user', 'roles'));
    }

    // Cập nhật thông tin người dùng
    public function update(Request $request, $User_Id)
    {
        $user = User::findOrFail($User_Id);

        $validated = $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'email' => 'required|email|unique:user,email,' . $user->User_Id . ',User_Id',
            'Phonenumber' => 'nullable',
            'Address' => 'nullable',
            'User_Role' => 'required|exists:User_Role,Role_Id',
        ]);

        // Cập nhật thông tin người dùng
        $user->update([
            'First_Name' => $validated['First_Name'],
            'Last_Name' => $validated['Last_Name'],
            'email' => $validated['email'],
            'Phonenumber' => $validated['Phonenumber'],
            'Address' => $validated['Address'],
            'User_Role' => $validated['User_Role'],
        ]);

        // Cập nhật mật khẩu nếu có
        if ($request->filled('password')) {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return redirect()->route('users.index')->with('success', 'Tài khoản đã được cập nhật thành công!');
    }

    // Xóa người dùng
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Tài khoản đã được xóa thành công!');
    }
}