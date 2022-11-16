<?php

namespace src\controllers;
use \core\Controller;
use core\Forms;
use core\Table;

//Model
use src\models\Test;

class TestController extends Controller
{

    /**
     * Criar tela de formulario simples
     *
     * @return void
     */
    public function cadastrar(){

        //Renderiza a tela com o formulario simples
        $this->render('nome da aplicação php viwes/pages', [
            "nome variavel" => Forms::createForm("Titulo", "action", "method(POST, GET)", "colunas (4 - 6 - 8 - 12)", Test::form(), "rota btn voltar")
        ]);

        //Renderiza a tela com o formulario multiplos
        $this->render('nome da aplicação php viwes/pages', [
            'nome varialvel' => Forms::createCardMultipleForms(Test::formMultiple(), "rota btn voltar"),
        ]);

        //Renderiza a tela com o formulario steps
        $this->render('nome da aplicação php viwes/pages', [
            'nome varialvel' => Forms::steps(Test::liSteps(), Test::formMultiple()),
        ]);
    }


    public function editar(){

        //Recebe os dados do formulário
        $data = filter_input_array(INPUT_POST, $_POST);

        //Faz a validação

        $this->redirect("/aplicação .php");
    }

    public function delete(){

        //Recebe os dados do formulário
        $data = $_GET;

        //Faz Delete

        $this->redirect("/aplicação .php");
    }


    /**
     * Cria a tela com a tabela listando so dados do banco
     *
     * @return void
     */
    public function listar(){

        $this->render("nome da aplicação php viwes/pages", [
            "nome varialvel" => Table::createTable(Test::table(), "numero de colunar (4 - 6 - 8 - 12)"),
        ]);
    }



}
