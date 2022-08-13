<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.dashboard');
    }

    public function postLogin(Request $request) {
        $login = [
            'user_name' => $request->user_name,
            'password' => $request->password,
        ];
        $login2 = [
            'email' => $request->user_name,
            'password' => $request->password,
        ];

        if (Auth::attempt($login) || Auth::attempt($login2)) {
            return redirect()->intended('/admin/dashboard');
        } else {
            Auth::logout();
            echo 'Loi';
        }
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
