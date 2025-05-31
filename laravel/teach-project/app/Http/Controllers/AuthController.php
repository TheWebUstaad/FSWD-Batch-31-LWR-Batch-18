<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function ShowloginForm(){
        return view("login");
    }

    public function login(Request $request){
        // dd($request->all());
        // return "login";
        $credebtials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if(Auth::attempt($credebtials)){
            $user = Auth::user();
            // dd($user);
             if ($user->role_id === 1) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role_id === 2) {
                return redirect()->route('user.dashboard');
            }


        }

        return back()->withErrors([
            'loginEmail' => 'The provided credentials do not match our records.',
        ])->onlyInput('loginEmail');

    }
}
