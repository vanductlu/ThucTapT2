<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }

    public function account(Request $request)
    {
        // Lấy danh sách tài khoản
        $users = User::all();

        return view('admin.pages.account.list_account', compact('users'));
    }

    public function createAccount(Request $request)
    {
        return view('admin.pages.account.add_account');
    }

    public function publisher(Request $request)
    {
        // Lấy danh sách NXB
        $publishers = Publisher::all();

        return view('admin.pages.publisher.list_publisher', compact('publishers'));
    }

    public function createPublisher(Request $request)
    {
        return view('admin.pages.publisher.add_publisher');
    }

    public function category(Request $request)
    {
        // Lấy danh sách thể loại
        $categories = Category::all();

        return view('admin.pages.category.list_category', compact('categories'));
    }

    public function createCategory(Request $request)
    {
        return view('admin.pages.category.add_category');
    }

    public function product(Request $request)
    {
        // Lấy danh sách sản phẩm
        $products = Product::all();

        return view('admin.pages.product.list_product', compact('products'));
    }

    public function createProduct(Request $request)
    {
        return view('admin.pages.product.add_product');
    }

    public function orders(Request $request)
    {
        // Lấy danh sách đơn hàng
        $orders = Order::all();

        return view('admin.pages.purchase.list_purchase', compact('orders'));
    }

    public function createOrder(Request $request)
    {
        return view('admin.pages.purchase.add_purchase');
    }
}