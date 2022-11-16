<?php
namespace src\controllers;

use \core\Controller;
use \core\Forms;
use \core\Table;

class HomeController extends Controller {

    public function index() {

        //Renderiza a tela HOME
        $this->render('home');
        
    }

    // public function register(){
    //     $data = filter_input_array(INPUT_POST, $_POST);
    //     print_r($data);
    // }

    // public function sobre() {
    //     $this->render('sobre');
    // }

    // public function sobreP($args) {
    //     print_r($args);
    // }

    // public function prod(){

    //     $array = array(
    //         "0" => array("nome", "Nome do Produto", "text", "Digite o nome do produto", "Maçã", ""),
    //         "1" => array("valor", "Valor do Produto", "number", "", "", "required"),
    //     );

    //     $array2 = array(
    //         "0" => array("nome", "Nome do Produto", "text", "", "Maçã", ""),
    //         "1" => array("valor", "Valor do Produto", "text", "", "10", "required"),
    //     );

    //     $this->render('produtos', [
    //         'formulario_produtos' => Forms::createForm("Cadastro de produtos", "register_product", "POST", "12", $array),
    //         'editar_produtos' => Forms::createForm("Editar Produtos", "register_product", "POST", "12", $array2)
    //     ]);
    // }

}