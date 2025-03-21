<?php

namespace App\Http\Controllers;

use App\Models\PurchaseState;
use Illuminate\Http\Request;

class PurchaseStateController extends Controller
{
<<<<<<< HEAD
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
     * @param  \App\Models\PurchaseState  $purchaseState
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseState $purchaseState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseState  $purchaseState
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseState $purchaseState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseState  $purchaseState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseState $purchaseState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseState  $purchaseState
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseState $purchaseState)
    {
        //
    }
}
=======
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
>>>>>>> main
