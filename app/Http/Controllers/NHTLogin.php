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
            'NHTUsername' => 'required|email', 
            'NHTPassword' => 'required|min:6',  
        ]);

        // Attempt to log in the user
        if (Auth::attempt($request->only('NHTUsername', 'NHTPassword'))) {
            return redirect()->intended(route('NHTDashboard'));
        }
        
        throw ValidationException::withMessages([
            'NHTUsername' => ['Tài khoản hoặc mật khẩu không đúng.'],
        ]);
    }
}
