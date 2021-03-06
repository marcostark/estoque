<?php

namespace App\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{
    public function form() {
        return view('form_login');
    }

    public function login() {
        
        //
        $credenciais = Request::only('email','password');

        if(Auth::attempt($credenciais)) {
            return ' Usuário logao com sucesso';
        }

        return 'Usuário não existe';


    }
}
