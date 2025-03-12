<?php

namespace App\Http\Controllers;

use App\Models\PublishingCompany;
use Illuminate\Http\Request;

class PublishingCompanyController extends Controller
{
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