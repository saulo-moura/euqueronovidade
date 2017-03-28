@extends('portal.administrador.main')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-xs-12 col-md-8"><h2><img src="midias/timthumb.php?src=midias/<?php echo $cliente->IMAGEM?>&w=60&h=60&zc=2" class="img-responsive img-thumbnail"/>Meu Perfil</div>
    <div class="col-md-2"></div>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div id="colunistaCad" title="Editar perfil" class="col-xs-12 col-md-8">
    	<form class="form-inline" id="clienteForm" action="app/controllers/clientes.controller.php" method="post" enctype="multipart/form-data">
        	    <input type="hidden" name="clienteId" value="{{ $cliente->id }}"/>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Nome Fantasia:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteNome" style="width:90%;" value="{{ $cliente->NOME }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Razão Social:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteRazaosocial" style="width:90%;" value="{{ $cliente->RAZAOSOCIAL }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>CNPJ:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteCnpj" id="clienteCnpj" style="width:90%;" value="{{ $cliente->CNPJ }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Nome do Administrador:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteAdministrador" style="width:90%;" value="{{ $cliente->RESPONSAVEL }}" /></div>
            </div>
             <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Telefone:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteTelefone1" style="width:90%;" value="{{ $cliente->TELEFONE1 }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Celular:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteTelefone2" style="width:90%;" value="{{ $cliente->TELEFONE2 }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
                <div class="row"><label>Rede Social:</label></div>
                <div class="row">
                    <select name="redeSocial" class="form-control" style="width:90%;">
                        <option value="0"><span class="LOJ-PERFIL-NENHUMA"></span></option>
                        <option value="" selected></option>
                        </select>                    
                </div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
                <div class="row"><label>URL / Número Rede Social:</label></div>
                <div class="row"><input type="text" class="form-control" name="descRedeSocial" style="width:90%;" value="" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
                <div class="row"><label>Horário de Funcionamento:</label></div>
                <div class="row">
                    Das <input type="text" class="form-control" id="horarioIni" name="horarioIni" style="width:38%;" value="" />
                    às <input type="text" class="form-control" id="horarioFim" name="horarioFim" style="width:38%;" value="" />
                </div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>E-mail:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteEmail" style="width:90%;" value="{{ $cliente->EMAIL }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Estado:</label></div>
                <div class="row">
                	<select id="clienteEstado" name="clienteEstado" class="form-control" style="width:90%;">
                        <option value="" selected></option>
                    </select>
                	
                </div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Cidade:</label></div>
                <div class="row">
                	<select id="clienteCidade" name="clienteCidade" class="form-control" style="width:90%;">
                    	<option value=""></option>
                    	<option value="" selected></option>
                    </select>
                </div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
                <div class="row"><label>Endereço:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteEndereco" style="width:90%;" value="{{ $cliente->ENDERECO }}" /></div>
            </div>
            <div class="form-group col-xs-6 col-md-3">
            	<div class="row"><label>Bairro:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteBairro" style="width:90%;" value="{{ $cliente->BAIRRO }}" /></div>
            </div>
            <div class="form-group col-xs-6 col-md-3">
            	<div class="row"><label>Número:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteNumero" style="width:80%;" value="{{ $cliente->NUMERO }}" /></div>
            </div>
            <div class="form-group col-xs-6 col-md-3">
            	<div class="row"><label>CEP:</label></div>
                <div class="row"><input type="text" class="form-control" id="clienteCep" name="clienteCep" style="width:90%;" value="{{ $cliente->CEP }}" onblur="getEndereco();" /></div>
            </div>
            <div class="form-group col-xs-6 col-md-3">
            	<div class="row"><label>Senha:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteSenha" style="width:80%;" value="{{ $cliente->SENHA }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Complemento:</label></div>
                <div class="row"><input type="text" class="form-control" name="clienteComplemento" style="width:90%;" value="{{ $cliente->COMPLEMENTO }}" /></div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
            	<div class="row"><label>Shopping:</label></div>
                <div class="row">
                	<select name="clienteShopping" class="form-control" style="width:90%;">
                        <option value="">Nenhum</option>
                    	<option value="" selected></option>
                    </select>
                </div>
            </div>
			<div class="form-group col-xs-12 col-md-6">
				<div class="row"><label>Plano:</label></div>
				<div class="row">
					<select name="clientePlano" class="form-control" style="width:90%;">
						<option value="">Nenhum</option>
						<option value="" selected></option>
					</select>
				</div>
			</div>
			 <div class="form-group col-xs-12 col-md-6"><br />
            	<!-- <div class="row"><label>Imagem:</label></div> -->
                <div class="fileupload fileupload-new" data-provides="fileupload" style="margin-left:-15px;">
                    <span class="btn btn-primary btn-file"><span class="fileupload-new">Enviar Imagem</span>
                    <span class="fileupload-exists">Change</span>         <input type="file" name="clienteImagem" /></span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-xs-12 col-md-6 pull-right">
            	<!-- <a href="#" class="btn btn-warning pull-right" onclick="javascript:history.back(-1);" >Cancelar</a> -->
				<input type="hidden" name="clienteSubmit" value="Atualizar" />
                <button class="btn btn-success pull-right">Atualizar</button>
            </div>
        </form>
    <div class="col-md-2"></div>
    </div>
</div>
@endsection