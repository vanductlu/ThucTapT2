<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::with('role')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'User_Role' => 'required|integer',
            'Email' => 'required|string|email|max:255|unique:users',
            'Password' => 'nullable|string|min:8',
            'Last_Name' => 'nullable|string|max:255',
            'First_Name' => 'nullable|string|max:255',
            'Address' => 'nullable|string|max:255',
            'Phonenumber' => 'nullable|string|max:15',
        ]);

        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function show($id)
    {
        return User::with('role')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }
}