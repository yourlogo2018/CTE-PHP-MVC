<?php

namespace src\models;
use \core\Model;
use \core\Controller;


class Estudante extends Model {


// Função para a Tela de Cadastrro de alunos    

   static function addAlunos(){

      //Select dos nucleos
      $arrayNucleos = Model::select('
      nuc.nucleoid,
      nuc.nucleonome,
      usrnuc.login,
      usrnuc.nucleoid', 
      "WHERE (usrnuc.login = '".$_SESSION['user'][0]["login"]."') ORDER BY nuc.nucleoid",
      'nuc_nucleo nuc INNER JOIN sec_users_nucleos usrnuc ON nuc.nucleoid = usrnuc.nucleoid');


      //Select do estado civil
      $estadoCivil = array(
         "1" => "Solteiro",
         "2" => "Casado",
         "3" => "Viuvo",
         "4" => "Sep.Judicial",
         "5" => "Desquitado",
         "6" => "Divorciado"
      );

      // $k = array_values($estadoCivil);
      // return $k;
      


      //Select das Profissões

      $profissao = array(
         "1" => "Administrador",
         "2" => "Advogado",
         "3" => "Analista de Sistemas",
         "4" => "Aposentado",
         "5" => "Barbeiro",
         "6" => "Estágiario",
         "7" => "Cabeleleiro (a)",


      );

      //Select do UF Emissor

      $unidade = array(
         "1"   => "SSP",
         "2"   => "DETRAN",
         "3"   => "PF",
         "4"   => "PM",
         "5"   => "PC"

      );

      // Select Escolaridade
      $escol = array(
         "1"      => "Analfabeto",
         "2"      => "Primario Incompleto",
         "3"      => "Primario completo",
         "4"      => "Primeiro grau incompleto",
         "5"      => "Primeiro grau completo",
         "6"      => "Segundo grau incompleto",
         "7"      => "Segundo grau completo",
         "8"      => "Superior incompleto",
         "9"      => "Superior completo",
         "10"     => "Pos-Graduação",
         "11"     => "Mestrado",
         "12"     => "Doutorado"
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


      

      //Select Denominação Religiosa
      $arrayReligiao = Model::select('igrejaid, igrejanome', "ORDER BY igrejanome",'nuc_igrejas');

      
      //Select UF do emissor

      $arrayUf = Model::select('Uf, Nome',"ORDER BY Nome",'estado');
    



    
      return array(
         "nucleos"         => $arrayNucleos,
         "estado_civil"    => $estadoCivil,
         "profissao"       => $profissao,
         "igrejas"         => $arrayReligiao,
         "unife"           => $unidade,
         "escolaridade"    => $escol,
         "unfed"           => $arrayUf
      );

   }


   static function cadastroAlunos($data){

      $arrayInserir  = array(
         'alunonome'  		      =>  	$data["alunonome"],
         'alunoemail'  		      =>  	$data["alunoemail"],
         'alunocpf'  		      =>  	$data["alunocpf"],
         'alunocelular'  	      =>  	$data["alunocelular"],
         'alunonomemae'          =>  	$data["alunonomemae"],
         'alunonomepai'  	      =>  	$data["alunonomepai"],
         'alunonacionalidade'    =>  	$data["alunonacionalidade"],
         'alunorg'  		         =>  	$data["alunorg"],
         'alunomembrodesde'  	   =>  	$data["alunomembrodesde"],
         'alunodatanasc'  	      =>  	$data["alunodatanasc"],
         'nucleoid'  		      =>  	$data["nucleoid"],
         'alunoescolaridade'  	=>  	$data["alunoescolaridade"],
         'alunoestadocivel'  	   =>  	$data["alunoestadocivel"],
         'alunoprofissao'  	   =>  	$data["alunoprofissao"],
         'alunoufnasc'  		   =>  	$data["alunoufnasc"],
         'alunomunicnasc'  	   =>  	$data["alunomunicnasc"],
         'alunorgtipo'  		   =>  	$data["alunorgtipo"],
         'alunorguf'  		      =>  	$data["alunorguf"],
         'igrejaid'  		      =>  	$data["igrejaid"],
         'alunoendcep'  			=>  	$data["alunoendcep"],
         'alunoendlogr'  			=>  	$data["alunoendlogr"],
         'alunoendnum'  		   =>  	$data["alunoendnum"],
         'alunoendbairro'  		=>  	$data["alunoendbairro"],
         'alunoendmun'  		   =>  	$data["alunoendmun"],
         'alunoenduf'  			   =>  	$data["alunoenduf"],
         
      );
      
      echo '<pre>';
      print_r($arrayInserir );
      exit;
      
      Model::insert($arrayInserir,'ctec_alunos');
        

   }





// Função para exibir a tela de consultar alunos 
   static function consultAlunos(){

      $arrayNucleos = Model::select('
      nuc.nucleoid,
      nuc.nucleonome,
      usrnuc.login,
      usrnuc.nucleoid', 
      "WHERE (usrnuc.login = '".$_SESSION['user'][0]["login"]."') ORDER BY nuc.nucleoid",
      'nuc_nucleo nuc INNER JOIN sec_users_nucleos usrnuc ON nuc.nucleoid = usrnuc.nucleoid');



      $arraySearch = Model::select('nucleoid, alunonome',"ORDER BY alunonome",'ctec_alunos');
      // echo '<pre>';
      // print_r($arraySearch);
      // exit;





      return array(
         "nucleos"    => $arrayNucleos,
         "search"     => $arraySearch  

      );



      
      
   }
   
   
  static function action_pesq_alunos($id){

      $pesq = Model::select('alunoid, nucleoid,alunonome, alunocpf','WHERE alunoid ="'.$id.'"','ctec_alunos');

      
   }
   


}