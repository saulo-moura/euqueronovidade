<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdministradorController;

use App\Loja;

class ClienteController extends Controller{
    
	public function listar(){
		$pendentes = AdministradorController::getPendentes();
		$ofertas = AdministradorController::getOfertas();
		$clientes = Loja::leftJoin('shopping', 'loja.id_shopping', '=', 'shopping.id')
					->select('loja.*', 'shopping.nome')
					->paginate(10);
		return view('portal.administrador.clientes.listar')->withPendentes($pendentes)
														->withOfertas($ofertas)
														->withClientes($clientes);				
	}
	
	public function editar($id){
		$pendentes = AdministradorController::getPendentes();
		$ofertas = AdministradorController::getOfertas();
		$cliente = Loja::find($id);
		return view('portal.administrador.clientes.editar')->withPendentes($pendentes)
														->withOfertas($ofertas)
														->withCliente($cliente);
	}
}
