<?php

namespace src\models;
use \core\Model;
use \core\Controller;


class Estudante extends Model {


// Função para a Tela de Cadastrro de alunos    

   static function addAlunos(){

      //Select dos nucleos
      $arrayNucloes = Model::select('
      nuc.nucleoid,
      nuc.nucleonome,
      usrnuc.login,
      usrnuc.nucleoid', 
      "WHERE (usrnuc.login = '".$_SESSION['user'][0]["login"]."') ORDER BY nuc.nucleoid",
      'nuc_nucleo nuc INNER JOIN sec_users_nucleos usrnuc ON nuc.nucleoid = usrnuc.nucleoid');

      //Select do estado civil
      $estadoCivil = array(
         "1" => "Solteiro",
         "2" => "Casado"
      );

      //Select do UF de Nascimento
      // SELECT Uf, Nome 
      // FROM estado 
      // ORDER BY Nome

      //Select Município de Nascimento
      // SELECT Codigo, Nome, uf
      // FROM municipio
      // WHERE uf = '{alunoufnasc}'
      // ORDER BY Nome

      //Select UF do emissor
      // SELECT Uf, Nome 
      // FROM estado 
      // ORDER BY Nome

      //Select Denominação Religiosa
      // SELECT igrejaid, igrejanome 
      // FROM nuc_igrejas 
      // ORDER BY igrejanome

      return array(
         "nucleos"      => $arrayNucloes,
         "estado_civil" => $estadoCivil
      );

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