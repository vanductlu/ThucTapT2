<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PublishingCompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\AdminController;

/*
|---------------------------------------------------------------------------|
| Web Routes                                                                |
|---------------------------------------------------------------------------|
*/

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::prefix('auth')->group(function () {
    // Route đăng nhập
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login']);
    
    // Route đăng ký
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [UserController::class, 'register']);
    
    // Các route reset mật khẩu (nếu cần thiết)
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});

// Route để hiển thị trang đăng nhập admin
Route::get('admin', [UserController::class, 'showLoginForm'])->name('admin.login');

// Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    
    // Quản lý tài khoản
    Route::get('admin/account', [AdminController::class, 'account'])->name('admin.account');
    Route::get('admin/account/create', [AdminController::class, 'createAccount'])->name('admin.account.create');
    
    // Quản lý NXB
    Route::get('admin/publisher', [AdminController::class, 'publisher'])->name('admin.publisher');
    Route::get('admin/publisher/create', [AdminController::class, 'createPublisher'])->name('admin.publisher.create');
    
    // Quản lý thể loại
    Route::get('admin/category', [AdminController::class, 'category'])->name('admin.category');
    Route::get('admin/category/create', [AdminController::class, 'createCategory'])->name('admin.category.create');
    
    // Quản lý sản phẩm
    Route::get('admin/product', [AdminController::class, 'product'])->name('admin.product');
    Route::get('admin/product/create', [AdminController::class, 'createProduct'])->name('admin.product.create');
    
    // Quản lý đơn hàng
    Route::get('admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('admin/orders/create', [AdminController::class, 'createOrder'])->name('admin.orders.create');
});

// Quản lý người dùng và vai trò (Admin chỉ có quyền truy cập)
Route::prefix('admin')->middleware(['auth', 'role:1'])->group(function () {
    // Quản lý người dùng
    Route::resource('users', UserController::class); // Route resource cho users

    // Quản lý vai trò
    Route::resource('roles', UserRoleController::class); 

    // Quản lý thể loại
    Route::resource('categories', CategoryController::class); 

    // Quản lý nhà xuất bản
    Route::resource('publishers', PublishingCompanyController::class);
});

// Quản lý sản phẩm và hiển thị (Không yêu cầu đăng nhập)
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/filter', [ProductController::class, 'filter'])->name('products.filter');
    Route::get('/search', [ProductController::class, 'search'])->name('products.search');
    Route::get('/{Product_Id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/category/{id}', [ProductController::class, 'filterByCategory'])->name('products.category');
    Route::get('/publisher/{id}', [ProductController::class, 'filterByPublisher'])->name('products.publisher');
});

// Quản lý đơn hàng (Chỉ người dùng đã đăng nhập mới có thể truy cập)
Route::prefix('purchases')->middleware('auth')->group(function () {
    Route::get('/', [PurchaseController::class, 'index'])->name('purchases.index');
    Route::get('/{id}', [PurchaseController::class, 'show'])->name('purchases.show');
});
