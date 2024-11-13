<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            //rules
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:8|max:20'
            ],
            //error messages
            [
                'text_username.required' => 'Obrigatoriamente preencher o campo email',
                'text_username.email' => 'Email inválido',
                'text_password.required' => 'Senha obrigatória',
                'text_password.min' => 'Senha deve ter no mínimo 8 caracteres',
                'text_password.max' => 'Senha deve ter no máximo 20 caracteres'
            ]
        );

        // get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        echo 'OK!';

    }

    public function logout() 
    {
        echo 'logout';
    }
}
