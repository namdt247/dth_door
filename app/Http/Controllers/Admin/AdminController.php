<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Service\Admin\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $authService;

    public function __construct() {
        $this->authService = new AuthService();
    }

    public function home()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request) {
        if ($this->authService->login($request)) {
            return redirect()->intended('/admin/dashboard');
        } else {
            // handle error
            Auth::logout();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
