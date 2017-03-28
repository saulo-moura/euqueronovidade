@extends('portal.administrador.main')

@section('content')
<div id="tab">
	<h2 class="sub-header">Clientes</h2>
    <div class="table-responsive">
    	<table class="table table-striped">
        	<tr class="row">
            	<th class="col-xs-2 col-md-2">Id</th>
            	<th class="col-xs-4 col-md-4">Loja</span></th>
            	<th class="col-xs-4 col-md-4">Shopping</th>
            	<th class="col-xs-2 col-md-2">Ações</th>
            </tr>
          	@foreach($clientes as $cliente)  
				<tr class="row">
					<td class="col-xs-2 col-md-2">{{ $cliente->ID }}</td>
					<td class="col-xs-4 col-md-4">{{ $cliente->NOME }}</td>
					<td class="col-xs-4 col-md-4">{{ $cliente->nome }}</td>
					<td class="col-xs-2 col-md-2"> 
					   <a class="btn btn-success" href="/administrador/clientes/editar/{{ $cliente->ID }}" class="editar"><i class="glyphicon glyphicon-pencil"></i></a>
					   <a class="btn btn-danger" href="<?php echo $_SERVER['PHP_SELF'] ; ?>?controller=clientes&view=excluir&id=<?php echo $cliente->ID?>" class="excluir"><i class="glyphicon glyphicon-remove"></i></a>
					</td>
				</tr>
            @endforeach
        </table>
		<center>{{ $clientes->links() }}</center>
    </div>
</div>
@endsection