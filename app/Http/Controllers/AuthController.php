<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }
    public function calCreate()
    {
        return view('cal.calculate');
    }

    public function calculate(Request $request)
    {
        $request->flash();

        $project = $request->Project * 4;

        $total = $request->HCI + $request->Mobile + $request->EWSD + $request->RM + $project;

        $divide = $total / 8;


        if ($divide >= 70) {
            $result = "First class with " . $divide . " % ";
        } else {
            $result = "Soo sad " . $divide . " % ";
        }

        return redirect('/marks')->with('result', $result);
    }
    public function store(Request $request)
    {
        $cleanData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6', 'max:12', 'confirmed'],
        ]);

        $user = User::create($cleanData);

        auth()->login($user);

        return redirect('/')->with('success', 'User ' . $user->name . ' create successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {

        $cleanData = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => 'required'
        ], [
            'email.exists' => 'This email is not registered yet'
        ]);

        if (auth()->attempt($cleanData)) {
            return redirect('/')->with('success', 'User login ' . auth()->user()->name . ' successfully');
        } else {
            return back()->withErrors(['email'=> 'Your email or password is wrong']);
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'User logout successfully');
    }
}
