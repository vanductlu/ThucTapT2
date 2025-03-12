<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return Purchase::with('user', 'state', 'details')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'User_Id' => 'required|integer',
            'State' => 'required|integer',
            'Total' => 'required|numeric',
            'CreatedAt' => 'nullable|date',
            'UpdatedAt' => 'nullable|date',
        ]);

        $purchase = Purchase::create($request->all());

        return response()->json($purchase, 201);
    }

    public function show($id)
    {
        return Purchase::with('user', 'state', 'details')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());

        return response()->json($purchase, 200);
    }

    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();

        return response()->json(null, 204);
    }
}
