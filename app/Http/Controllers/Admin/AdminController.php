<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
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
        if (Auth::check()) {
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    }

    public function postLogin(Request $request) {
        if ($this->authService->login($request)) {
            return redirect()->intended('/admin/dashboard');
        }
        Auth::logout();
        return redirect('/admin/login')->with(['message_error' => Message::MESSAGE_LOGIN_FAILED]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
