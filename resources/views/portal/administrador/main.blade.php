<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
		@include('portal.administrador.head')	
    </head>
    <body>
		@include('portal.administrador.menu')
		<div class="container">
			@include('portal.administrador.painel')	
			@yield('content')
			@include('portal.administrador.footer')	
		</div>
	</body>
</html>