<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(Request $request) {
        $login = [
            'user_name' => $request->user_name,
            'password' => $request->password,
        ];
        $login2 = [
            'email' => $request->user_name,
            'password' => $request->password,
        ];

        return Auth::attempt($login) || Auth::attempt($login2);
    }
}
