@extends('portal.administrador.main')

@section('content')
<div id="page-wrapper">
    <div class="row">
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="glyphicon glyphicon-usd" style="font-size: 5em;"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ $totallojas }}</div>
							<div><span class="ADM-PAINEL-LJCADASTRADAS">Lojas Cadastradas</span></div>
						</div>
					</div>
				</div>
				<a href="restrito.php?controller=clientes&view=index">
					<div class="panel-footer">
						<span class="pull-left"><span class="ADM-PAINEL-VIEW">Visualizar</span></span>
						<span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="glyphicon glyphicon-shopping-cart" style="font-size: 5em;"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ $totalshoppings }}</div>
							<div>Shoppings</div>
						</div>
					</div>
				</div>
				<a href="restrito.php?controller=shoppings&view=index">
					<div class="panel-footer">
						<span class="pull-left"><span class="ADM-PAINEL-VIEW">Visualizar</span></span>
						<span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<span class="glyphicon glyphicon-tags" style="font-size: 5em;"></span>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">{{ $totalofertas }}</div>
							<div><span class="ADMI-PAINEL-OFERTAS">Ofertas Cadastradas</span></div>
						</div>
					</div>
				</div>
				<a href="restrito.php?controller=ofertasclientes&view=listar">
					<div class="panel-footer">
						<span class="pull-left"><span class="ADM-PAINEL-VIEW">Visualizar</span></span>
						<span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection	