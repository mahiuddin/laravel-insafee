<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function Registration(Request $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return "Token Generated";
    }
    public function Login(Request $request)
    {
        return "";
    }
}
