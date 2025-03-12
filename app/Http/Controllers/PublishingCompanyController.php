<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Publishing_Company;
=======
use App\Models\PublishingCompany;
>>>>>>> main
use Illuminate\Http\Request;

class PublishingCompanyController extends Controller
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
     * @param  \App\Models\Publishing_Company  $publishing_Company
     * @return \Illuminate\Http\Response
     */
    public function show(Publishing_Company $publishing_Company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publishing_Company  $publishing_Company
     * @return \Illuminate\Http\Response
     */
    public function edit(Publishing_Company $publishing_Company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publishing_Company  $publishing_Company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publishing_Company $publishing_Company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publishing_Company  $publishing_Company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publishing_Company $publishing_Company)
    {
        //
    }
}
=======
    public function index()
    {
        return PublishingCompany::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Publishing_Company_Name' => 'required|string|max:255',
        ]);

        $company = PublishingCompany::create($request->all());

        return response()->json($company, 201);
    }

    public function show($id)
    {
        return PublishingCompany::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $company = PublishingCompany::findOrFail($id);
        $company->update($request->all());

        return response()->json($company, 200);
    }

    public function destroy($id)
    {
        $company = PublishingCompany::findOrFail($id);
        $company->delete();

        return response()->json(null, 204);
    }
}
>>>>>>> main
