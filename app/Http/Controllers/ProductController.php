<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
<<<<<<< HEAD

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
=======
use App\Models\Category;
use App\Models\PublishingCompany;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(12);
        $categories = Category::all();
        $publishers = PublishingCompany::all();

        return view('pages.products', compact('categories', 'publishers', 'products'));
    }

    public function filter(Request $request)
    {
        $categories = $request->input('categories', []);
        $publishers = $request->input('publishers', []);

        $products = Product::with('category')
            ->when($categories, fn($query) => $query->whereIn('Category_ID', $categories))
            ->when($publishers, fn($query) => $query->whereIn('Publishing_Company_ID', $publishers))
            ->paginate(12);

        return response()->json([
            'products' => $products->map(fn($product) => [
                'Product_Id'    => $product->Product_Id,
                'Name'          => $product->Name,
                'Avatar'        => asset('public/frontend/' . $product->Avatar),
                'Category_Name' => $product->category->Category_Name ?? 'Chưa xác định',
                'Price'         => $product->Price,
            ]),
            'pagination' => $products->links()->toHtml(),
        ]);
    }

    public function filterByCategory($id)
    {
        $categories = Category::all();
        $publishers = PublishingCompany::all();
        $products = Product::where('Category_Id', $id)->with('category')->paginate(12);

        return view('pages.products', compact('categories', 'publishers', 'products'));
    }

    public function search(Request $request)
    {
        $query = trim($request->input('q'));
        $categories = Category::all();
        $publishers = PublishingCompany::all();
        
        if (empty($query)) {
            return redirect()->route('products.index');
        }
        
        $products = Product::where('Name', 'like', "%{$query}%")->paginate(12);
    
        return view('pages.products', compact('products', 'categories', 'publishers', 'query'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Category_Id' => 'required|string',
            'SKU' => 'required|string|max:255',
            'Name' => 'required|string|max:255',
            'Publishing_Company_Id' => 'required|integer',
            'Author' => 'nullable|string|max:255',
            'Price' => 'required|numeric',
            'Quantity' => 'required|integer',
            'Description' => 'nullable|string|max:255',
            'Date' => 'nullable|date',
            'Avatar' => 'nullable|string|max:255',
        ]);

        $product = Product::create($validated);

        return response()->json($product, 201);
    }

    public function show($Product_Id)
    {
        $product = Product::with(['category', 'publishingCompany'])->findOrFail($Product_Id);
        $categories = Category::all();
        $publishers = PublishingCompany::all();

        return view('pages.product-detail', compact('product', 'categories', 'publishers'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validate([
            'Category_Id' => 'string',
            'SKU' => 'string|max:255',
            'Name' => 'string|max:255',
            'Publishing_Company_Id' => 'integer',
            'Author' => 'nullable|string|max:255',
            'Price' => 'numeric',
            'Quantity' => 'integer',
            'Description' => 'nullable|string|max:255',
            'Date' => 'nullable|date',
            'Avatar' => 'nullable|string|max:255',
        ]));

        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(null, 204);
>>>>>>> main
    }
}
