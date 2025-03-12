<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function index()
    {
        return UserRole::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Role_Name' => 'required|string|max:255',
        ]);

        $role = UserRole::create($request->all());

        return response()->json($role, 201);
    }

    public function show($id)
    {
        return UserRole::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $role = UserRole::findOrFail($id);
        $role->update($request->all());

        return response()->json($role, 200);
    }

    public function destroy($id)
    {
        $role = UserRole::findOrFail($id);
        $role->delete();

        return response()->json(null, 204);
    }
}