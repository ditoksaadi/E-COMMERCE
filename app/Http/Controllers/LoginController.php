<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.login.login');
    }

    public function process_login(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password'  => $request->password])) {
            $Admin = Admin::where('email', $request->email)->first();

            $request->session()->put('email', $Admin->email);

            return redirect('admin/dashboard')->with('success', 'Login berhasil!');;
        } else {
            return view('backend.login.login');
        };
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('login');
    }
}
