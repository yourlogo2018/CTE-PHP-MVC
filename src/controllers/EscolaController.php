<?php

namespace src\controllers;
use \core\Controller;
use core\Forms;
use src\models\Escola;

class EscolaController extends Controller
{
    public function escola(){

        //Formuario de add escola
        $this->render('escola', [
            //'escola' => Forms::createForm("Cadastro Escola", "add_escola", "POST", "4", Escola::formAddEscola()),
            //'steps' => Forms::steps(Escola::liSteps(), Escola::formAddEscola()),
            //'array' => Escola::formAddEscola(),
            'formulario' => Forms::createCardMultipleForms(Escola::formAddEscola(), ""),
        ]);

    }
}