<?php

namespace src\models;
use \core\Model;
use \core\Controller;


class Estudante extends Model {

    static function AddAlunos($id){

        $addaluno = Model::select('*',"WHERE nucleoid = '".$id."'", "nuc_nucleo");

        echo "<pre>";
        print_r($addaluno);
        exit;

         $html='
         <div class="card mb-4">
         <h5 class="card-header">Cadastro de novo paciente</h5>
         <form method="POST" action="add_paciente" class="card-body">
         <h6 class="fw-normal">1. Dados do paciente</h6>
         <div class="row g-3">
            <div class="col-md-6">
               <label class="form-label">Nome completo</label>
               <input type="text" class="form-control" name="nome"  placeholder="" required>
            </div>
            <div class="col-md-6">
               <label class="form-label">Email</label>
               <input type="text" name="email" class="form-control"  placeholder=""  >
            </div>
            <div class="col-md-6">
               <label class="form-label">CPF</label>
               <input type="text" class="form-control" name="cpf_passaporte" placeholder="" required >
               <div class="form-text"> Somente números </div>
            </div>
            <div class="col-md-6">
               <label class="form-label">Celular</label>
               <input type="text" name="celular" class="form-control phone-mask" placeholder="">
               <div class="form-text"> DDD e o numero do telefone </div>
            </div>
            <div class="col-md-6">
               <label class="form-label">Telefone Internacional</label>
               <input type="text" name="telefone" class="form-control phone-mask"   placeholder="">
               <div class="form-text"></div>
            </div>
               <div class="col-md-4">
               <label>Data de Nascimento</label>
               <input type="date" name="data_nasc" class="form-control" placeholder="" value="0001-01-01">
            </div>

            <div class="col-mb-4 col-lg-6  col-8 ">
               <label  class="form-label" for="form-repeater-1-4">Nucleo:</label>      
                  <select name="nucleo"  class="form-select">      
                  ';
                     
                     foreach ($addaluno as $k) {
                        
                           $html.='
                           <select value="'.$k['nucleonome'].'">'.$k['nucleonome'].'</select>
                         
                           ';
                   
                     };
                 $html.=' </select>  


            <div class="col-md-6">
               <label class="form-label">Observação</label>
               <input type ="textarea" name="observacao" class="form-control" placeholder=""   ></input>
            </div>


         <h6 class="fw-normal">2. Endereço</h6>
         <div class="row g-3">
            <div class="col-md-4">
            <label class="form-label">CEP</label>
               <input type="text" class="form-control" name="cep" id="cep" onblur="pesquisacep(this.value);" placeholder=""  >
            </div>
            <div class="col-md-4">
               <label class="form-label">Endereço</label>
               <input type="text" name="rua" id="rua" class="form-control  placeholder=""  >
            </div>
            <div class="col-md-4">
               <label class="form-label">Nº</label>
               <input type="text" name="numero" class="form-control  placeholder=""   >
            </div>
            <div class="col-md-4">
               <label class="form-label">Bairro</label>
               <input type="text" name="bairro" id="bairro" class="form-control" placeholder="" >
            </div>
            <div class="col-md-4">
               <label class="form-label">Complemento</label>
               <input type="text" name="complemento" class="form-control" placeholder=""  >
            </div>
            <div class="col-md-4">
               <label class="form-label">Cidade</label>
               <input type="text" name="cidade" id="cidade" class="form-control" placeholder="" >
            </div>
            <div class="col-md-4">
               <label class="form-label">Estado</label>
               <input type="text"  name="uf" id="uf" class="form-control" placeholder=""  >
            </div>
            <div class="pt-4">
            
               <button type="submit" class="btn btn-primary me-sm-3 me-1" ><i class="bx bxs-save me-2"></i>Salvar</button>

               <a href="pacientes">
                  <button class="btn btn-danger" type="button"><i class="bx bx-arrow-back bx-xs me-2"></i>Voltar</button>
               </a>
            </div>
         </form>
      </div>

            ';

return $html;
    }
}