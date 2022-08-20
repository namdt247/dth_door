<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Message;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\AuthService;
use App\Http\Service\Admin\ContactService;
use App\Http\Service\Admin\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $authService;
    protected $productService;
    protected $contactService;

    public function __construct() {
        $this->authService = new AuthService();
        $this->productService = new ProductService();
        $this->contactService = new ContactService();
    }

    public function home()
    {
        $data = array();
        $data['totalProduct'] = $this->productService->getTotalProduct();
        $data['totalContact'] = $this->contactService->getTotalContact();
        $data['totalContactInMonth'] = $this->contactService->getTotalContactInMonth();
        $data['totalContactPending'] = $this->contactService->getTotalContactPending();
        return view('admin.dashboard', compact('data'));
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
