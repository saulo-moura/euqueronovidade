<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Loja;
use App\Oferta;

class MainController extends Controller{
    
	public function show(){
		$lojas = Loja::where('imagem', '<>', null)
						->orderBy(DB::raw('RAND()'))
						->take(6)
						->get();
		
		$ofertas = Oferta::where('liberada',1)
						->where('excluida', '<>', 1)
						->where('descricao', '<>', null)
						->where('descricao', '<>', '')
						->where('detalhes', '<>', null)
						->where('detalhes', '<>', '')
						->orderBy(DB::raw('RAND()'))
						->take(8)
						->get();
									
		return view('site.content')->withLojas($lojas)->withOfertas($ofertas);
	}
}
