<?php

namespace App\Http\Controllers;

use App\Models\PurchaseState;
use Illuminate\Http\Request;

class PurchaseStateController extends Controller
{
    public function index()
    {
        return PurchaseState::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Value' => 'required|string|max:255',
            'Description' => 'nullable|string|max:255',
            'DisplayText' => 'nullable|string|max:255',
        ]);

        $state = PurchaseState::create($request->all());

        return response()->json($state, 201);
    }

    public function show($id)
    {
        return PurchaseState::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $state = PurchaseState::findOrFail($id);
        $state->update($request->all());

        return response()->json($state, 200);
    }

    public function destroy($id)
    {
        $state = PurchaseState::findOrFail($id);
        $state->delete();

        return response()->json(null, 204);
    }
}
