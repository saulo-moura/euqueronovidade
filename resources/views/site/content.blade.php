@extends('site.main')

@section('menu')
<nav class="navbar navbar-default" role="navigation"> <!--MENU BOOTSTRAP-->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
        </div>

    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{URL::asset('images/logo.jpg')}}" class="img-responsive"></a>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#" data-target=".navbar">HOME</a></li>
            <li><a href="#" data-target=".box-o-aplicativo">O APLICATIVO</a></li>
            <li><a href="#" data-target=".box-com-a-gente">QUEM ESTÁ COM A GENTE</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-target=".box-mundo-de-novidades">NOVIDADES</a></li>
            <li><a href="#" data-target=".box-contato">CONTATO</a></li>
            <li><a href="#" class="area-do-lojista" data-toggle="modal" data-target="#modalLogin">ÁREA DO LOJISTA</a></li>
            <li><a href="#" data-target=".box-contato" style="visibility:hidden">CONTATO</a></li>
          </ul>
        </div>
    </div>    
</nav> <!-- FIM MENU BOOTSTRAP -->
@stop

@section('faca-parte-mobile')
<div class="container hidden-lg hidden-md">
    <div class="col-md-12">
		<div class="faca-parte-mobile">
			<div class="box-faca-parte-mobile">
				<div class="texto-lojista">
					<strong>Lojista</strong>, faça parte do <strong>EQN</strong><br> e aumente as suas vendas <br><strong>agora mesmo!</strong>
					<div class="clique-aqui"><a href="#">CLIQUE AQUI E EXPERIMENTE GRÁTIS</a></div>
				</div>
			</div>
		</div>
    </div>
</div>
@stop

@section('faca-parte')
<div class="container">
    <div class="col-md-6"></div>
    <div class="col-md-6 visible-lg visible-md">
        <div class="faca-parte">
            <div class="box-faca-parte">
                <div class="texto-lojista">
                    <strong>Lojista</strong>, faça parte do <strong>EQN</strong><br> e aumente as suas vendas <br><strong>agora mesmo!</strong>
                    <button class="btn clique-aqui" data-toggle="modal" data-target="#modalCadastroLojista"><a href="#">CLIQUE AQUI E EXPERIMENTE GRÁTIS</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('slider')
<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image:url(images/slider/bg-slide-1.jpg);"> <!--Item slider -->
    		<div class="container">
                <div class="col-md-6 chamada-slider">
                    <div class="texto-chamada">
                        Esteja aonde o seu cliente está!<br />
                        <p>Com o Eu Quero Novidade aproximamos os consumidores da sua loja física!
                    </div>
                </div>
            </div>
        </div>  <!--FIM do Item slider -->
        <div class="item" style="background-image:url(images/slider/bg-slide-2.png);"> <!--Item slider -->
            <div class="container">
                <div class="col-md-6 chamada-slider">
                    <div class="texto-chamada" style="margin:100px 0px 0px -100px;">Torne-se visível<p>na sua região.</div>
                </div>
            </div>
        </div>  <!--FIM do Item slider -->
        <div class="item" style="background-image:url(images/slider/bg-slide-3.jpg);"> <!--Item slider -->
            <div class="container">
                <div class="col-md-6 chamada-slider">
                    <div class="texto-chamada">Ao fazer parte do EQN você já inicia a sua venda!</div>
                </div>
            </div>
        </div>  <!--FIM do Item slider -->
    </div>
</div>
@stop

@section('o-aplicativo')
<div class="container box-o-aplicativo">
	<div class="col-md-4">
		<h2>O APLICATIVO</h2>
		<div class="sub-o-aplicativo"></div>
		<div class="texto-o-aplicativo">
			Com a missão de aproximar as duas principais vertentes do varejo, o aplicativo Eu Quero Novidade proporciona ao lojista divulgar, em tempo real, sua localização, produtos, novidades, promoções e fortalecer sua marca no ambiente virtual. Já o consumidor saberá quais lojas existem na sua região sem ao menos sair de onde estiver, desta forma terá maior comodidade e praticidade para encontrar o produto que deseja nas lojas mais próxima à ele.         
		</div>
		<div class="row loja-icones">
			<div class="col-md-6">
				<a href="https://play.google.com/store/apps/details?id=br.com.eqn"><img src="images/google-play-icone.png" class="img-responsive"></a>
			</div>
			<!--
			<div class="col-md-6">
				<a href="#"><img src="imagens/app-store-icone.png" class="img-responsive"></a>
			</div>
			-->
		</div>
	</div>
	<div class="col-md-2"></div>
	<div class="col-md-6 box-youtube">
		<iframe width="100%" height="315" src="https://www.youtube.com/embed/tb9zwzKs-q4" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
@stop

@section('com-a-gente')
<div class="box-com-a-gente">
	<div class="container">
    	<div class="col-md-4 visible-md visible-lg">
        	<img src="images/img-personagem.png" class="img-responsive">
        </div>
    	<div class="col-md-4">
        	<div class="titulo">QUEM ESTÁ<br>COM A GENTE</div>
            <div class="sub-titulo">Essas são algumas marcas reconhecidas no cenário baiano que já fazem parte do nosso aplicativo.</div>
        </div>
    	<div class="col-md-4">
            <div class="col-md-12">
                <div class="carousel slide" id="carousel-2">
                    <div class="carousel-inner">
						@foreach($lojas as $loja)
							<div class="item item-2 {{ $loop->first ? 'active' : '' }}">
								<div class="col-xs-4">
									<img src="images/lojas/{{ $loja->IMAGEM }}" class="img-responsive img-circle foto-conosco" />
								</div>
							</div>
						@endforeach
                    </div>
                    <a class="right carousel-control right-carousel-2" href="#carousel-2" data-slide="next"><img src="images/arrow-right-2.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('mundo-novidades')
<div class="container box-mundo-de-novidades">
	<div class="col-md-6"> <!--Box texto mundo-->
    	<span class="mundo">MUNDO DE</span>
        <span class="novidades">NOVIDADES</span>
        <p class="confira">Confira aqui alguns destaques que você encontra em nosso aplicativo!</p>
    </div>
    <div class="col-md-6"> <!--Box mapa eqn-->
    	<img src="images/mapa-eqn.png" class="img-responsive mapa-eqn">
    </div>
</div>
@stop

@section('novidades')
<div class="container"> 
	<div class="col-md-11 slider-novidades"> <!--Inicio Slider Novidades-->
		<div id="carousel-3" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner box-group-novidades" role="listbox">
				@foreach($ofertas as $oferta)
					@if($loop->first || $loop->index == 4)
						<div class="item item-3 {{ $loop->first ? 'active' : '' }}">
					@endif
						<div class="col-xs-6">
							<div class="col-md-10 box-novidades">
								<a class="fancybox" href="images/lojas/{{ $oferta->IMAGEM }}" title="Baixe agora o aplicativo e fique por dentro das novidades!">
									<img src="images/lojas/{{ $oferta->IMAGEM }}" class="img-circle" style="width:100px; height:100px;">
								</a>
								<span class="titulo-novidade">{{ strtoupper($oferta->DESCRICAO) }}</span>
								<span class="detalhe-novidade">{{ strtoupper($oferta->DETALHES) }}</span>
								<div class="btn-ver">
									<a class="fancybox" href="images/lojas/{{ $oferta->IMAGEM }}" title="Baixe agora o aplicativo e fique por dentro das novidades!">
										<img src="images/btn-ver.png">
									</a>
								</div>
							</div>
						</div>
					@if($loop->index == 3 || $loop->last)
						</div>
					@endif
				@endforeach
			</div>
			<!-- <div class="col-md-3 float-right"><a href="#"> <img src="imagens/btn-ver-todas.png" class="img-responsive"></a></div> <!--Botão VER TODAS-->
		</div>
	</div>
	<!--Botão Slider pc -->
	<div class="col-md-1 float-right-carousel visible-lg visible-md"><a class="right" href="#carousel-3" data-slide="next"><img src="images/arrow-right.png"></a></div> 
	<!--Botão Slider celular -->
	<div class="col-md-1 float-right-carousel-sm hidden-lg hidden-md"><a class="right" href="#carousel-3" data-slide="next"><img src="images/arrow-right.png"></a></div>
</div>
@stop

@section('newsletter')
<div class="box-newsletter"> <!--Início Box Newsletter-->
	<div class="container">
        <div class="col-md-12 box-input">
        	<form action="#" enctype="multipart/form-data" method="post">
                <div class="col-md-5 texto-newsletter">RECEBA NOVIDADES, CUPONS E MUITO MAIS!</div>
                <div class="col-md-3"><input type="text" name="nome" value="NOME" class="input-newsletter"></div>
                <div class="col-md-3"><input type="text" name="nome" value="E-MAIL" class="input-newsletter"></div>       
                <div class="col-md-1"><input type="image" src="images/btn-ok.jpg"></div>
            </form>
        </div>
    </div>
</div>
@stop

@section('depoimentos')
<div class="box-depoimentos"> <!--Início Box Depoimentos-->
	<div class="container">
        <div class="col-md-3">
        	<div class="titulo-depoimentos">DEPOIMENTOS</div>
        </div>
        <div class="col-md-8">
            <div id="carousel-4" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item item-3 active"> <!--Primeiros itens do slider Novidades -->
                        <img src="images/depoimentos/comment1.jpg" class="img-circle img-responsive foto-depoimento">
                        <div class="texto-depoimento">
                            <span class="par"><img src="images/par-1.png"> </span> Adorei a ideia de procurar produto em lojas próximas de mim. Adoro descontos e promoções e vou ficar colado no aplicativo. </span> <span class="par"> <img src="images/par-2.png"></span> <!-- Texto Depoimento -->
                            <div class="nome-depoimento">Marcelo Melo Dultra <!-- Nome Depoimento -->
                            <div class="depoimento-arrow-right"><a class="right" href="#carousel-4" data-slide="next"><img src="images/arrow-right-3.png"></a></div>
                            </div>
                        </div>
                    </div> <!--Fim do primeiro slider-->

                    <div class="item item-3"> <!--Primeiros itens do slider Novidades -->
                        <img src="images/depoimentos/comment2.jpg" class="img-circle img-responsive foto-depoimento">
                        <div class="texto-depoimento">
                            <span class="par"><img src="images/par-1.png"> </span>Excelente! Prático, fácil, intuitivo e sobretudo, muito útil!! Parabéns!!! </span> <span class="par"> <img src="images/par-2.png"></span> <!--Texto Depoimento-->
                            <div class="nome-depoimento">Edgar Junior <!-- Nome Depoimento -->
                                <div class="depoimento-arrow-right"><a class="right" href="#carousel-4" data-slide="next"><img src="images/arrow-right-3.png"></a></div>
                            </div>
                        </div> <!--Fim do segundo slider-->
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@stop

@section('saiu-na-midia')
<div class="saiu-na-midia">
	<div class="container">
    	<div class="col-md-4">
        	<div class="titulo-saiu-na-midia">SAIU NA MÍDIA</div>
        </div>
        <div class="col-md-8">
        	<div class="texto-saiu-na-midia"></div>
        </div>
        <div class="col-md-12 linha">
            <div class="row">
                <div class="col-md-2 col-md-offset-2"><img src="images/na-midia/ti-nordeste.jpg" class="img-responsive"></div>
                <div class="col-md-2"><img src="images/na-midia/a-tarde.jpg" width="100" class="img-responsive"></div>
                <div class="col-md-2"><img src="images/na-midia/r7.jpg" width="100" class="img-responsive"></div>
                <div class="col-md-2"><img src="images/na-midia/tribuna.png" width="100" style="margin-top:30px;" class="img-responsive"></div>
            </div>        
        </div>
    </div>
</div>
@stop

@section('apoio')
<div class="apoio">
	<div class="container">
        <div class="row seven-cols">
            <div class="col-md-1 titulo-apoio">APOIO: </div>
            <div class="col-md-1"><a href="#" target="_blank"><img src="images/apoio/unifacs.PNG" class="img-responsive"></a></div>
            <div class="col-md-1"><a href="#" target="_blank"><img src="images/apoio/help.PNG" class="img-responsive"></a></div>
        </div>
	</div>            
</div>
@stop

@section('contato')
<div class="contato box-contato">
    <div class="container">
        <div class="col-md-4">
            <div class="titulo-contato">ENTRE EM CONTATO</div>
            <div class="redes"><a href="#" target="_blank"><img src="images/redes.jpg"></a></div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.376812285609!2d-38.49233268562419!3d-13.011659590829609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7160353d94b4ff7%3A0x10dffb5ee9bede48!2sUniversidade+Salvador%2C+Campus+Rio+Vermelho+PA7!5e0!3m2!1spt-BR!2sbr!4v1476112076812" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>            
        </div>
        <div class="col-md-8">
        	<form method="post" id="form_contato_site" enctype="multipart/form-data">
                <input type="text" class="form-control input-contato" id="nome_contato" placeholder="Nome">
                <input type="email" class="form-control input-contato" id="email_contato" placeholder="E-mail">
                <input type="text" class="form-control input-contato" id="telefone_contato" placeholder="Telefone">
                <input type="text" class="form-control input-contato" id="assunto_contato" placeholder="Assunto">
                <textarea id="mensagem_contato" class="form-control input-contato" placeholder="Mensagem"></textarea>
                <button class="btn-image btn btn-success" onclick="enviarEmailContato(); return false;">Enviar</button>
            </form>
        </div>
    </div>
</div>
@stop

@section('footer')
<div class="footer">
	<div class="container">
    	<div class="logo-rodape"><img src="images/eqn-logo-rodape.png"></div>
            <div id="menu">
                <ul>
                    <li><a href="#" data-target=".navbar" class="menu-rodape">Home</a></li>
                    <li><a href="#" data-target=".box-o-aplicativo" class="menu-rodape">O Aplicativo</a></li>
                    <li><a href="#" data-target=".box-faca-parte" class="menu-rodape">Faça Parte!</a></li>
                    <li><a href="#" data-target=".box-com-a-gente" class="menu-rodape">Quem está com a gente</a></li>
                    <li><a href="#" data-target=".box-mundo-de-novidades" class="menu-rodape">Novidades</a></li>
                    <li><a href="#" data-target=".box-depoimentos" class="menu-rodape">Depoimentos</a></li>
                    <li><a href="#" data-target=".saiu-na-midia" class="menu-rodape">Saiu na Mídia</a></li>
                    <li><a href="#" data-target=".box-contato" class="menu-rodape">Contato</a></li>
                    <li><a href="#" data-target=".area-do-lojista" class="menu-rodape">Área do Lojista</a></li>
                </ul>
            </div>
    </div>
</div>
@stop

@section('modal')
<!-- Modal do formulário de vadastro do lojista-->
<div id="modalCadastroLojista" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><center>Faça o cadastro da sua empresa e experimente gr&aacute;tis por 15 dias!</center></h4>
			</div>
			<div class="modal-body">
				<form id="form-pre-cadastro" class="form-horizontal" role="form" method="post" onSubmit="preCadastro(); return false;">
				    <div id="row">
			            <input type="hidden" name="query" value="2" />
			            <div class="col-lg-12 col-xs-12">
			                <div class="form-group">
			                    <div class="col-lg-6 col-xs-6">
			                        <input type="text" class="form-control" id="LOJA" name="LOJA" placeholder="Nome da Loja" required>
			                    </div>
			                    <div class="col-md-6 col-xs-6">
			                        <input type="text" class="form-control" id="RESPONSAVEL" name="RESPONSAVEL" placeholder="Nome do Responsável" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="col-md-6 col-xs-6">
			                        <input type="text" class="form-control" id="TELEFONE" name="TELEFONE" placeholder="Telefone">
			                    </div>
			                    <div class="col-md-6 col-xs-6">
			                        <input type="text" class="form-control" id="CELULAR" name="CELULAR" placeholder="Celular" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="col-md-12 col-xs-12">
			                        <input type="text" class="form-control" id="ENDERECO" name="ENDERECO" placeholder="Logradouro" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="col-md-12 col-xs-12">
			                        <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="E-mail" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="col-md-6 col-xs-6">
			                        <input type="password" class="form-control" id="SENHA" name="SENHA" placeholder="Senha" required>
			                    </div>
			                    <div class="col-md-6 col-xs-6">
			                        <input type="password" class="form-control" id="REPETIRSENHA" name="REPETIRSENHA" placeholder="Confirme a senha" required>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="col-md-12 col-xs-12">
				                    <div class="checkbox">
				                        <label><input type="checkbox" value="" required>Declaro que li e aceito os <a href="docs/termo.pdf" target="_blank" >Termos de Uso</a> do Eu Quero Novidade! </label>
				                    </div>
			                	</div>
			                </div>
			            </div>
					</div>
					<div class="modal-footer">
		                <div class="col-lg-12 col-xs-12">
		                    <button type="submit" class="btn btn-success" >Cadastrar</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
		                </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal de login do lojista -->
<div id="modalLogin" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="col-md-12">
		            <img src="images/logo.jpg" class="img-responsive"/><br />
		        </div>
			</div>
			<div class="modal-body">
				<div id="row">
					<form  action="{{ action('LoginController@login') }}" method="post">						
						@if(old('error'))
							<div class="alert alert-danger">
								<center>{{ old('error') }}</center>
							</div>
						@endif
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<div class="form-group">
							<div class="col-md-12">
					        	<input type="text" id="loginUsuario" name="email" class="form-control" placeholder="E-mail" required autofocus>
				        	</div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-12">
						        <label for="inputPassword"><span class="LOGIN-SENHA"></span></label>&nbsp;
					        	<input type="password" id="loginSenha" name="senha" class="form-control" placeholder="Senha" required>
				        	</div>
				        </div>
						<div class="clearfix"></div><br />
				        <input class="btn btn-md btn-block btn-rosa btn-success" name="loginSubmit" type="submit" value="Entrar">
				        <center><a href="" data-toggle="modal" data-target="#modalEsqueci" class="abre"><i><span class="LOGIN-ESQUECI"></span></i></a></center>
				    </form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Confirmação Pre Cadastro -->
<div class="modal fade" id="modalPreCadastro" role="dialog">
	<div class="modal-dialog modal-sm">
	    <!-- Modal content-->
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">Loja Cadastrada com Sucesso</h4>
	      	</div>
	      	<div class="modal-body">
	        	<p>O perfil da sua loja será analisado e liberaremos caso seja aprovado.
	      	</div>
	      	<div class="modal-footer">
	        	<button class="btn btn-md btn-success" data-dismiss="modal">OK</button>
	      	</div>
	    </div>
  	</div>
</div>

<!-- Modal Confirmação de envio de e-mail -->
<div class="modal fade" id="modalContato" role="dialog">
	<div class="modal-dialog modal-sm">
	    <!-- Modal content-->
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">E-mail enviado com sucesso!</h4>
	      	</div>
	      	<div class="modal-body">
	        	<p>Obrigado poe entrar em contato com o EQN.<br /> Assim que pudermos retornaremos o contato.
	      	</div>
	      	<div class="modal-footer">
	        	<button class="btn btn-md btn-success" data-dismiss="modal">OK</button>
	      	</div>
	    </div>
  	</div>
</div>
@stop

@section('script')	
	<script src="js/app.js"></script>
	<script src="js/funcoes.js"></script>
	<script src="js/fancybox/jquery.fancybox.js"></script>
@stop