<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Loja;
use App\Oferta;
use App\Shopping;

class AdministradorController extends Controller{
	
	public $pendentes = 0;
	public $ofertas = 0;
    
	public function __construct(){
        $this->middleware('autoriza.administrador');
	}
	
	public function main(){
		$totalLojas = Loja::all()->count();
		$totalOfertas = Oferta::all()->count();
		$totalShoppings = Shopping::all()->count();
		$pendentes = $this->getPendentes();
		$ofertas = $this->getOfertas();
		return view('portal.administrador.dashboard')->withPendentes($pendentes)
													->withOfertas($ofertas)
													->withTotallojas($totalLojas)
													->withTotalofertas($totalOfertas)
													->withTotalshoppings($totalShoppings);
	}
	
	public function sair(){
		session()->forget('administrador');
		return redirect()->action('MainController@show');
	}
	
	public static function getPendentes(){
		$pendentes = Loja::where('ativo',0)
						->where('excluida',0)
						->count();
		return $pendentes;
	}
	
	public static function getOfertas(){
		$ofertas = Oferta::where('liberada',0)
						->where('excluida',0)
						->count();
		return $ofertas;
	}
}
