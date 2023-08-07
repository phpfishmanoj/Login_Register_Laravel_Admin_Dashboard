<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function __construct()
    {
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Login Successful');
        }
        return back()->with('error', 'Email or Password is wrong');
    }

    public function register()
    {
        return view('register');
    }

    public function registerProcess(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with("success", "Register successfully");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
