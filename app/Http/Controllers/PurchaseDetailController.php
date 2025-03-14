<?php

namespace App\Http\Controllers;

use App\Models\PurchaseDetail;
use Illuminate\Http\Request;

class PurchaseDetailController extends Controller
{
    public function index()
    {
        return PurchaseDetail::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Purchase_Id' => 'required|integer',
            'Product_Id' => 'required|integer',
            'Quantity' => 'required|integer',
            'TotalAmount' => 'required|numeric',
        ]);

        $detail = PurchaseDetail::create($request->all());

        return response()->json($detail, 201);
    }

    public function show($id)
    {
        return PurchaseDetail::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detail = PurchaseDetail::findOrFail($id);
        $detail->update($request->all());

        return response()->json($detail, 200);
    }

    public function destroy($id)
    {
        $detail = PurchaseDetail::findOrFail($id);
        $detail->delete();

        return response()->json(null, 204);
    }
}
