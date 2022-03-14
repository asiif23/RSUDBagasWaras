<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('loginAndRegister.login', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }
}
