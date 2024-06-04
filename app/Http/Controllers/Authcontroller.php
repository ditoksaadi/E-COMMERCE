<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('frontend.login.login');
    }

    public function register()
    {
        return view('frontend.login.register');
    }

    public function forgot_password()
    {
        return view('frontend.login.forgotpas');
    }

    public function proces_auth(request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password'  => $request->password])) {
            $user = User::where('email', $request->email)->first();

            $request->session()->put('id_user', $user->id);
            $request->session()->put('name', $user->name); 
            $request->session()->put('email', $user->email);
            $request->session()->put('nohp', $user->nohp);
            $request->session()->put('negara', $user->negara);
            $request->session()->put('alamat_provinsi', $user->alamat_provinsi);
            $request->session()->put('alamat_kota', $user->alamat_kota);
            $request->session()->put('alamat_detail', $user->alamat_detail);

        } else {
            return view('frontend.login.login');
        };

        return redirect('/');
    }

    public function log_out()
    {
        Auth::logout();
        return redirect('/');
    }
}
