<?php 
$render('header'); 

// echo "<pre>";
// print_r($formulario);

?>
 <div class="card">

   <form method="POST" action="<?php $base?>/add_alunos" class="card-body">
      <h6 class="fw-normal">1. Dados do Aluno</h6>
      <div class="row ">
         <div class="col-md-6">
            <label class="form-label">Nome completo</label>
            <input type="text" class="form-control" name="alunonome"  placeholder="" required>
         </div>
         <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="text" name="alunoemail" class="form-control"  placeholder=""  >
         </div>
         <div class="col-md-6">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" name="alunocpf" placeholder="" required >
            <div class="form-text"> Somente números </div>
         </div>
         <div class="col-md-6">
            <label class="form-label">Celular</label>
            <input type="text" name="alunocelular" class="form-control phone-mask" placeholder="">
            <div class="form-text"> DDD e o numero do telefone </div>
         </div>
         <div class="col-md-6">
            <label class="form-label">Nome da Mãe</label>
            <input type="text" name="alunonomemae" class="form-control phone-mask"   placeholder="">
            <div class="form-text"></div>
         </div>
         <div class="col-md-6">
            <label class="form-label">Nome do Pai</label>
            <input type="text" name="alunonomepai" class="form-control phone-mask"   placeholder="">
            <div class="form-text"></div>
         </div>
         <div class="col-md-6">
            <label class="form-label">Nacionalidade</label>
            <input type="text" name="alunonacionalidade" class="form-control phone-mask"   placeholder="">
            <div class="form-text"></div>
         </div>
         <div class="col-md-6">
            <label class="form-label">RG/CNH</label>
            <input type="text" name="alunorg" class="form-control phone-mask"   placeholder="">
            <div class="form-text"></div>
         </div>
         <div class="col-md-4">
            <label>Membro Desde</label>
            <input type="date" name="alunomembrodesde" class="form-control" placeholder="" value="0000-00-00">
         </div>
         <div class="col-md-4">
            <label>Data de Nascimento</label>
            <input type="date" name="alunodatanasc" class="form-control" placeholder="" value="0000-00-00">
         </div>

         <!-- Foreach de Nucleos -->
         <div class="col-md-4" >
            <label>Nucleo</label>
            <select class="form-control select2 select2-hidden-accessible" name="nucleoid" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario["nucleos"] ){

                foreach ($formulario["nucleos"] as $k => $n) {
                    echo '<option value="'.$n["nucleoid"].'">'.$n["nucleoid"].'|'.$n["nucleonome"].'</option>';
                }

            }

            ?>
            </select>
         </div>

               <!-- Foreach de Estado civil -->
         <div class="col-md-4" >
            <label>Estado Civil</label>
            <select class="form-control select2 select2-hidden-accessible" name="alunoestadocivel" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario["estado_civil"] ){

                foreach ($formulario["estado_civil"] as $k => $c) {
                  echo '<option value="'.$c["estado_civil"].'">'.$c["estado_civil"].'</option>';
                }

            }

            ?>
            </select>   
         </div>

               <!-- Foreach de Escolaridade -->
         <div class="col-md-4" >
            <label>Escolaridade</label>
            <select class="form-control select2 select2-hidden-accessible" name="alunoescolaridade" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario["escolaridade"] ){

                foreach ($formulario["escolaridade"] as $k => $e) {
                  echo '<option value="'.$e['escolaridade'].'">'.$e['escolaridade'].'</option>';
                }

            }

            ?>
            </select>   
         </div>

            <!-- Foreach de Profissão -->
         <div class="col-md-4" >
            <label>Profissão</label>
            <select class="form-control select2 select2-hidden-accessible" name="alunoprofissao" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario["profissao"] ){

                foreach ($formulario["profissao"] as $k => $p) {
                  echo '<option value="'.$p["profissao"].'">'.$p["profissao"].'</option>';
                }

            }

            ?>
            </select>   
         </div>

            <!-- Foreach da UF -->
         <div class="col-md-4" >
            <label>UF de Nascimento</label>
            <select class="form-control select2 select2-hidden-accessible" name="alunoufnasc" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario[""] ){

                foreach ($formulario[""] as $k => $c) {
                  echo '<option value="'.$c[""].'">'.$c[""].'</option>';
                }

            }

            ?>
            </select>   
         </div>

            <!-- Foreach de Município -->
         <div class="col-md-4" >
            <label>Municipio de Nascimento</label>
            <select class="form-control select2 select2-hidden-accessible" name="alunomunicnasc" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario[""] ){

                foreach ($formulario[""] as $k => $c) {
                  echo '<option value="'.$c[""].'">'.$c[""].'</option>';
                }

            }

            ?>
            </select>   
         </div>

         <!-- Emissor -->
         <div class="col-md-4" >
            <label>Orgão Emissor</label>
            <select class="form-control select2 select2-hidden-accessible" name="alunorgtipo" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario["unife"] ){

                foreach ($formulario["unife"] as $k => $u) {
                  echo '<option value="'.$u["unife"].'">'.$u["unife"].'</option>';
                }

            }

            ?>
            </select>   
         </div>
         <!-- Estado Emissor  -->
         <div class="col-md-4" >
            <label>UF do Emissor</label>
            <select class="form-control select2 select2-hidden-accessible" name="alunorguf" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario["unfed"] ){

                foreach ($formulario["unfed"] as $k => $c) {
                  echo '<option value="'.$c["Uf"].'">'.$c["Nome"].'</option>';
                }

            }

            ?>
            </select>   
         </div>

         <!-- Denominação religiosa -->
         <div class="col-md-4" >
            <label>Denominação religiosa</label>
            <select class="form-control select2 select2-hidden-accessible" name="igrejaid" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option value="">Selecione</option>
            <?php

            if( $formulario["igrejas"] ){

                foreach ($formulario["igrejas"] as $k => $i) {
                  echo '<option value="'.$i["igrejanome"].'">'.$i["igrejanome"].'</option>';
                }

            }

            ?>
            </select>   
         </div>

         <!-- FIM DA DIV CARD -->
      </div>

      </div>


<div class="card card-secundary">
      <h6 class="fw-normal">2. Endereço</h6>
      <div class="row g-3">
         <div class="col-md-4">
            <label class="form-label">CEP</label>
            <input type="text" class="form-control" name="" id="cep" onblur="pesquisacep(this.value);" placeholder=""  >
         </div>
         <div class="col-md-4">
            <label class="form-label">Endereço</label>
            <input type="text" name="" id="rua" class="form-control"  placeholder=""  >
         </div>
         <div class="col-md-4">
            <label class="form-label">Nº</label>
            <input type="text" name="alunoendnum" class="form-control" placeholder="" >
         </div>
         <div class="col-md-4">
            <label class="form-label">Bairro</label>
            <input type="text" name=""  id="bairro" class="form-control" placeholder="" >
         </div>
         <div class="col-md-4">
            <label class="form-label">Complemento</label>
            <input type="text" name="alunoendcompl" class="form-control" placeholder=""  >
         </div>
         <div class="col-md-4">
            <label class="form-label">Cidade</label>
            <input type="text" name=""  id="cidade" class="form-control" placeholder="" >
         </div>
         <div class="col-md-4">
            <label class="form-label">Estado</label>
            <input type="text" name=""  id="uf" class="form-control" placeholder=""  >
         </div>
      </div>
      <div class="pt-4">
         <button type="submit" class="btn btn-primary me-sm-3 me-1" ><i class="bx bxs-save me-2"></i>Salvar</button>
         <a href="pacientes">
         <button class="btn btn-danger" type="button"><i class="bx bx-arrow-back bx-xs me-2"></i>Voltar</button>
         </a>
      </div>
   </form>
</div>
</div>

<?php

$render('footer'); 
