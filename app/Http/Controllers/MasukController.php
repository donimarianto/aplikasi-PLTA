<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DaftarAdmin;

class MasukController extends Controller
{
    public function MariLogin(){
        return view ('index');
    }
    public function login(request $REQUEST)
    {
        $credentials = $REQUEST->only('email','password');

        if (Auth::guard('web')->attempt($credentials)){
            return redirect()->intended('dashboard');
        }

        return redirect()->route('masuk')->with('error', 'Password Salah!');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('masuk');
    }
}
