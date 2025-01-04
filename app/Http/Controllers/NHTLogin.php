<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class NHTLogin extends Controller
{
    // Show the login form
    public function NHTLoginForm()
    {
        return view('NHTauth.NHTlogin');
    }

    // Handle the login request
    public function NHTLogin(Request $request)
    {

        $validatedData = $request->validate([
            'NHTEmail' => 'required|email', 
            'NHTPassword' => 'required|min:6',  
        ]);

        // Attempt to log in the user
        if (Auth::attempt($request->only('NHTEmail', 'NHTPassword'))) {
            return redirect()->intended(route('NHTDashboard'));
        }
        
        throw ValidationException::withMessages([
            'NHTEmail' => ['Tài khoản hoặc mật khẩu không đúng.'],
        ]);
    }
}
