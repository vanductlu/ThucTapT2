<?php

namespace App\Http\Controllers;

use App\Models\PurchaseDetail;
use Illuminate\Http\Request;

class PurchaseDetailController extends Controller
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
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseDetail $purchaseDetail)
    {
        //
    }
}
=======
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
>>>>>>> main
