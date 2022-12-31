<?php

namespace src\controllers;
use \core\Controller;
use core\Forms;
use src\models\Estudante;

class EstudanteController extends Controller{

    public function estudante($params){

        $estudante = Estudante::AddAlunos($params);
        $this -> render('estudante',[
            'estudante' => $estudante
        ]);
    }
    
}