<?php 
$_SESSION["header"] = "Nova Escola";

$render('header', [
    "rota" => "nova_escola"
]); 
?>

<div class="row">
   <div class="col-md-12">
      <div class="card card-secondary">
         <div class="card-header">
            <h3 class="card-title">Dados da Escola</h3>
         </div>
         <form method="POST" action="<?php echo $base ?>/add_escola">
            <div class="card-body">
                <!-- Dados da Escola -->
               <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Razão Social *</label>
                            <input type="text" class="form-control" name="razao_social" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome Fantasia *</label>
                            <input type="text" class="form-control" name="nome_fantasia" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">CNPJ *</label>
                            <input type="text" class="form-control" name="cnpj" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Fundação</label>
                            <input type="date" class="form-control" name="fundacao" >
                        </div>
                    </div>
               </div>
               <!-- Diretoria -->
               <hr>
               <h5 class="mt-4">DIRETORIA</h5>
               <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Diretor Executivo</label>
                            <input type="text" class="form-control" name="executivo" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Diretor Acâdemico</label>
                            <input type="text" class="form-control" name="academico" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Diretor Administrativo</label>
                            <input type="text" class="form-control" name="administrativo" >
                        </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Diretor Financeiro</label>
                            <input type="text" class="form-control" name="financeiro" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Diretor de Publicações</label>
                            <input type="text" class="form-control" name="publicacoes" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Diretor de Núcleos</label>
                            <input type="text" class="form-control" name="dir_nucleos" >
                        </div>
                    </div>
               </div>
               <!-- Contatos -->
               <hr>
               <h5 class="mt-4">CONTATOS</h5>
               <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail Administração</label>
                            <input type="text" class="form-control" name="mail_admin" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail Comercial</label>
                            <input type="text" class="form-control" name="mail_comercial" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail Financeiro</label>
                            <input type="text" class="form-control" name="mail_ficanceiro" >
                        </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail Atendimento Núcleos</label>
                            <input type="text" class="form-control" name="mail_atend_nucleos" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telefone</label>
                            <input type="text" class="form-control" name="telefone" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Celular</label>
                            <input type="text" class="form-control" name="celular" >
                        </div>
                    </div>
               </div>
               <!-- Endereço -->
               <hr>
               <h5 class="mt-4">ENDEREÇO</h5>
               <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">CEP</label>
                            <input type="text" class="form-control" name="cep" id="cep"  onblur="pesquisacep(this.value);">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="rua">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Número</label>
                            <input type="text" class="form-control" name="numero" >
                        </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bairro</label>
                            <input type="text" class="form-control" name="bairro" id="bairro">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Complemento</label>
                            <input type="text" class="form-control" name="complemento" >
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Municipio</label>
                            <input type="text" class="form-control" name="municipio" id="cidade">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Estado</label>
                            <input type="text" class="form-control" name="estado" id="uf">
                        </div>
                    </div>
               </div>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php
$render('footer'); 
