<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    
    public function login()
    {
        $data['title'] = 'login';
        return view('/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
     
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            request()->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('LoginError', 'Username atau Password salah');
        
    }
}
