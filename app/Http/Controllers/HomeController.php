<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('Date', 'desc')->paginate(8);
    
        return view('pages.home', compact('categories', 'products'));
    }
}
