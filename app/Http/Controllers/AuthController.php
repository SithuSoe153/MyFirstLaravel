<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request){
        $cleanData = $request->validate([
            'name' =>'required',
            'username' =>'required',
            'email' =>'required|email',
            'password' => 'required|min:6',
        ]);

        User::create($cleanData);
        return redirect('/')->with('success', 'User created successfully');

    }
}
