<?php

namespace src\models;
use \core\Model;
use \core\Controller;


class Estudante extends Model {


// Função para a Tela de Cadastrro de alunos    

   static function addAlunos($id){

      // $arrayAlunos = Model::select('*', "WHERE nucleoid ='".$id."'", 'nuc_nucleo');

      //   echo "<pre>";
      //   print_r($arrayAlunos);
      //   exit;

         $html='
         <div class="card mb-4">Cadastro De Alunos</h5>
         <form method="POST" action="" class="card-body">
         <h6 class="fw-normal">1. Dados do Aluno</h6>
         <div class="row g-3">
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
               <input type="date" name="alunomembrodesde" class="form-control" placeholder="" value="0001-01-01">
            </div>

            <div class="col-md-4">
               <label>Data de Nascimento</label>
               <input type="date" name="alunodatanasc" class="form-control" placeholder="" value="0001-01-01">
            </div>
            <div class="col-md-4" >
               <label>Nucleo</label>
               <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
               ';
               //   foreach ($arrayAlunos as $key) {

               //    $html.='
               //      <option value = "'.$key['nucleonome'].'">'.$key['nucleonome'].'</option>
               //    ';

               //   } ;
               
               
                  $html.='
               </select>
            </div>
            </div>
  
         <h6 class="fw-normal">2. Endereço</h6>
         <div class="row g-3">
            <div class="col-md-4">
            <label class="form-label">CEP</label>
               <input type="text" class="form-control" name="alunoendcep" id="cep" onblur="pesquisacep(this.value);" placeholder=""  >
            </div>
            <div class="col-md-4">
               <label class="form-label">Endereço</label>
               <input type="text" name="alunoendlogr" id="rua" class="form-control  placeholder=""  >
            </div>
            <div class="col-md-4">
               <label class="form-label">Nº</label>
               <input type="text" name="alunoendnum" class="form-control  placeholder=""   >
            </div>
            <div class="col-md-4">
               <label class="form-label">Bairro</label>
               <input type="text" name="alunoendbairro" id="bairro" class="form-control" placeholder="" >
            </div>
            <div class="col-md-4">
               <label class="form-label">Complemento</label>
               <input type="text" name="alunoendcompl" class="form-control" placeholder=""  >
            </div>
            <div class="col-md-4">
               <label class="form-label">Cidade</label>
               <input type="text" name="alunoendmun" id="cidade" class="form-control" placeholder="" >
            </div>
            <div class="col-md-4">
               <label class="form-label">Estado</label>
               <input type="text"  name="alunoenduf" id="uf" class="form-control" placeholder=""  >
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

            ';

return $html;
  
   }





// Função para exibir a tela de consultar alunos 
   static function consultAlunos($id){

         // $consul = Model::select('alunoid', 'WHERE alunoid = "'.$id.'" ','ctec_alunos');
         //   echo "<pre>";
         //   print_r($consul);
         //   exit;

      $html='
   
            

      <div class="card mb-4">
         <h5 class="card-header">Filtro de cadastro</h5>
            <form method="POST" action="" class="card-body">
                  <h6 class="fw-normal">1. Dados dos Alunos</h6>
                     <div class="row g-3">
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
                           <label class="form-label">Cidade</label>
                           <input type="text" name="celular" class="form-control phone-mask" placeholder="">
                           <div class="form-text"></div>
                        </div>
                        <div class="col-md-6" >
                              <label>Nucleo</label>
                              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                           ';
                                 //   foreach ($arrayAlunos as $key) {
                  
                                 //    $html.='
                                 //      <option value = "'.$key['nucleonome'].'">'.$key['nucleonome'].'</option>
                                 //    ';
                  
                                 //   } ;
                                 
                           
                              $html.='
                           </select>
                        </div>
                        <div class="col-md-6" >
                           <label>Estado</label>
                           <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                           ';
                           //   foreach ($arrayAlunos as $key) {
            
                           //    $html.='
                           //      <option value = "'.$key['nucleonome'].'">'.$key['nucleonome'].'</option>
                           //    ';
            
                           //   } ;
                           
                           
                              $html.='
                        </select>
                     </div>
                     <div class="pt-4">
            
                     <button  type="submit" class="btn btn-primary me-sm-3 me-1" ><i class="bx bxs-save me-2"><i class="icon_fa fas fa-search"></i>&nbsp;&nbsp;</i>Pesquisar</button>
                     
      
                     <button type="reset" class="btn btn-info me-sm-3 me-1" ><i class="icon_fa fas fa-broom"></i>&nbsp;&nbsp;</i>Limpar</button>
      
                     <a href="pacientes">
                        <button class="btn btn-danger" type="button"><i class="bx bx-arrow-back bx-xs me-2"></i>Voltar</button>
                     </a>
                  </div>         

             
      ';
      return $html;
   }





}