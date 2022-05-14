<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        
        Auth::login()
    }

    public function logout()
    {
        Auth::logout();
    }
}
