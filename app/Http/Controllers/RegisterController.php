<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('landingpage.register');

    }

    public function store(Request $request): RedirectResponse
    {
        $validateData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // encript password in 
        $validateData['password'] = Hash::make($validateData['password']);

        $user = User::create($validateData);

        return redirect()->route('home')->with('success', 'Registration successful You can now log in!');
    }
}
