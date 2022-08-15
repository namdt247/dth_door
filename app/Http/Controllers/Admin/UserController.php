<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Service\Admin\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct() {
        $this->userService = new UserService();
    }
    public function getListUser() {
        $lstUser = $this->userService->listUserPagination();
        return view('/admin/user/list', compact('lstUser'));
    }
}
