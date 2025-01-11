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

public function NHTLogin(Request $request)
{
    $validatedData = $request->validate([
        'NHTUsername' => 'required|email', 
        'NHTPassword' => 'required|min:6',  
    ]);

    if (Auth::attempt($request->only('NHTUsername', 'NHTPassword'))) {
        $user = Auth::user();
        $request->session()->put('user_name', $user->NHTUsername);
        $request->session()->put('user_password', $user->NHTPassword);

        // Ghi log đăng nhập thành công
        \Log::info('Đăng nhập thành công: ' . $user->email);

        return redirect()->intended(route('NHTDashboard'));
    }
    
    \Log::warning('Đăng nhập thất bại: ' . $request->NHTUsername);
    throw ValidationException::withMessages([
        'NHTUsername' => ['Tài khoản hoặc mật khẩu không đúng.'],
    ]);
}


}
