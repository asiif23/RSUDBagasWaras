<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('loginAndRegister.register', [
            'title' => 'Daftar Akun',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|max:30',
            'username' => ['required', 'min:5', 'max:20', 'unique:users'],
            'email' => 'required|email|unique:users'
         ]);
    }
}
