<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return response()->json([
                'status' => true,
                'message' => "Success"
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => "Fail"

        ]);
    }
}
