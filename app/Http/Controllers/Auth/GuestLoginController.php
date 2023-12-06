<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestLoginController extends Controller
{

    public function login()
    {
        // ゲストユーザーとしてログイン
         $guest = \App\Models\Guest::first();
        Auth::login($guest);

        // ログイン後のリダイレクト先を指定
        return redirect('/dashboard');
    }
}
