<?php

namespace src\controllers;
use \core\Controller;
use src\models\Estudante;

class EstudanteController extends Controller{

//Função para renderizar a página de cadastro de estudantes
    public function estudante($params){

        $estudante = Estudante::addAlunos($params);
        $this -> render('estudante',[
            'estudante' => $estudante
        ]);
    }

//Função para renderizar a página de consultar alunos
    public function consul_alunos(){
        $this -> render('consul_alunos');
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