<?php

namespace src\controllers;
use \core\Controller;
use src\models\Estudante;

class EstudanteController extends Controller{

//Função para renderizar a página de cadastro de estudantes
    public function estudante(){

        $this -> render('estudante',[
            'formulario' => Estudante::addAlunos()
        ]);
    }

    //Função para adicionar alunos
    public function add_alunos(){
        
        $data = filter_input_array(INPUT_POST, $_POST, FILTER_DEFAULT);
        $retorno = Estudante::cadastroAlunos($data);
      
      echo '<pre>';
      print_r($retorno);
      exit;

     $this->redirect('/estudante');

    }


    //Função para renderizar a página de consultar alunos
    public function consultar_alunos(){

        $this -> render('consultar_alunos',[
           'consul_alunos' => Estudante::consultAlunos()
         ]);
    }


    public function searchAluno($id){

       Estudante::action_pesq_alunos($id);

         $this ->render('edit_consul_alunos',[
            ''
         ]);
    }


/**
 * REPORT = RELATÓRIO
 * Função para renderizar a tela de relatórios dos alunos
 * @return void
 */    
    public function report_alunos(){
        $this ->render('report_alunos');
    }
    



  /**
   * RECORD = FICHA
   *Funcção para renderizar a tela de fichas dos alunos
   * @return void
   */  
    public function record_alunos(){
        $this ->render('record_alunos');
    }
    
}