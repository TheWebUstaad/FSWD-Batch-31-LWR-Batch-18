<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function ShowloginForm(){
        return view("admin.login");
    }

    public function login(Request $request){
        // dd($request->all());
        // return "login";
        $credebtials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if(Auth::attempt($credebtials)){
            $request->session()->regenerate();
            return redirect()->route("admin.dashboard");
        }

        return back()->withErrors([
            'loginEmail' => 'The provided credentials do not match our records.',
        ])->onlyInput('loginEmail');

    }
}
