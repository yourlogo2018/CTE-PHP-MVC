<?php

namespace src\controllers;
use \core\Controller;
use core\Forms;
use src\models\Escola;

class EscolaController extends Controller
{
    public function nova_escola(){

        //Formuario de add escola
        $this->render('nova_escola');

    }


    public function add_escola(){

        $data = filter_input_array(INPUT_POST, $_POST, FILTER_DEFAULT);   
        $r = Escola::addNovaEscola($data);

    }
}