<?php

namespace App\Http\Controllers;

use Request;
use Auth;

use App\Administrador;
use App\Loja;

class LoginController extends Controller{
    
	public function login(){
		$email = Request::only('email');
		$senha = Request::only('senha');
		$administrador = Administrador::where('email', $email)
									->where('senha', $senha)
									->first();
		if(empty($administrador)){
			$lojista = Loja::where('email', $email)
								->where('senha', $senha)
								->first();
			if(empty($lojista))
				return redirect()->action('MainController@show')->withInput(['error' => 'E-mail ou senha inválidos!']);
			else{
				session(['lojista' => $lojista]);
				return redirect()->action('LojistaController@main');
			}
		}else{
			session(['administrador' => $administrador]);
			return redirect()->action('AdministradorController@main');
		}
	}
}
