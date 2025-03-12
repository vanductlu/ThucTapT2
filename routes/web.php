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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Giỏ hàng và thanh toán
Route::middleware('auth')->group(function () {
    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('cart.index');
        Route::post('/add', [CartController::class, 'add'])->name('cart.add');
        Route::post('/update', [CartController::class, 'update'])->name('cart.update');
        Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    });
    Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});

// Quản lý sản phẩm và hiển thị
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/filter', [ProductController::class, 'filter'])->name('products.filter');
    Route::get('/search', [ProductController::class, 'search'])->name('products.search');
    Route::get('/{Product_Id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/category/{id}', [ProductController::class, 'filterByCategory'])->name('products.category');
    Route::get('/publisher/{id}', [ProductController::class, 'filterByPublisher'])->name('products.publisher');
});

// Quản lý người dùng và vai trò (admin)
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', UserRoleController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('publishers', PublishingCompanyController::class);
});

// Quản lý đơn hàng
Route::prefix('purchases')->middleware('auth')->group(function () {
    Route::get('/', [PurchaseController::class, 'index'])->name('purchases.index');
    Route::get('/{id}', [PurchaseController::class, 'show'])->name('purchases.show');
});