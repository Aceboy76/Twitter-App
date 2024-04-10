<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validated = request()->validate([
            'firstname' => 'required|min:1|max:30',
            'middlename' => 'required|min:1|max:30',
            'lastname'  => 'required|min:1|max:30',
            'email'  => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'

        ]);

        User::create([
            'firstname' => $validated['firstname'],
            'middlename' => $validated['middlename'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);


        return redirect()->route('dashboard.index')->with('success', 'Account created successfully');
    }
}
