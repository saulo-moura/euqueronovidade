<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/favicon.ico">

        <title>EQN - Eu Quero Novidade</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/eqn.css">
		<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">
        
		<script src="js/jquery-3.2.1.min.js"></script>
		
		@if(old('error'))
			<script>
				$(document).ready(function(){
					$('#modalLogin').modal('show');
				});
			</script>
		@endif
		
    </head>
    <body>
        @yield('menu')
		@yield('faca-parte-mobile')
		@yield('faca-parte')
		@yield('slider')
		@yield('o-aplicativo')
		@yield('com-a-gente')
		@yield('mundo-novidades')
		@yield('novidades')
		@yield('newsletter')
		@yield('depoimentos')
		@yield('saiu-na-midia')
		@yield('apoio')
		@yield('contato')
		@yield('footer')
		@yield('modal')
		
		@yield('script')
		
    </body>
</html>
