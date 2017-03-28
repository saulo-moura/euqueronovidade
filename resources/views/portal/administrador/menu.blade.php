<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ action('AdministradorController@main') }}"><img style="max-width:100px; margin-top: -15px;" src="/images/logo.jpg" /></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ action('ClienteController@listar') }}"><span class="ADM-HEADER-CLIENTES">CLIENTES</span></a></li>
				<li><a href="{{ action('ClienteController@pendentes') }}"><span class="ADM-HEADER-LIBCLIENTE">LIBERAR CLIENTE</span>&nbsp;&nbsp;<span class="badge">{{ $pendentes }}</span></a></li>
				<li><a href="{{ action('OfertaController@listar') }}"><span class="ADM-HEADER-OFERTAS">OFERTAS</span>&nbsp;&nbsp;<span class="badge">{{ $ofertas }}</span></a></li>
				<li><a href="{{ action('ShoppingController@listar') }}">SHOPPING</a></li>
				<li><a href="{{ action('AdministradorController@listar') }}"><span class="ADM-HEADER-ADMINISTRADORES">ADMINISTRADORES</span></a></li>
				<li><a href="{{ action('CampanhaController@listar') }}"><span class="ADM-HEADER-CAMPANHAS">CAMPANHAS</span></a></li>
				<li><a href="{{ action('AdministradorController@sair') }}"><span class="ADM-HEADER-SAIR">SAIR</span></a></li>
			</ul>
		</div>
	</nav>
</div>