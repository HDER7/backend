<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55|string',
            'email' => 'required|email|unique:users|string',
            'password' => '<PASSWORD>|required|string|'
        ]);
    }
}
