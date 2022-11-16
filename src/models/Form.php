<?php
namespace src\models;
use \core\Model;
use \core\Forms;

class Form extends Model {

    public static function formRegisterUser(){

        //Forms::createFormAdminLte3();
    }

    public static function inputs(){

        $banco = array(
            "0" => array(
                "id" => "22",
                "nome" => "Giovani Junior",
                "data" => "15/11/2022",
                "status" => "Ativado",
                "config" => "botoes"
            ),
            "1" => array(
                "id" => "22",
                "nome" => "Giovani Junior",
                "data" => "15/11/2022",
                "status" => "Ativado",
                "config" => "botoes"
            ),
            "2" => array(
                "id" => "22",
                "nome" => "Giovani Junior",
                "data" => "15/11/2022",
                "status" => "Ativado",
                "config" => "botoes"
            ),
        );

        $arrayTable = array(
            "colunas" => array("ID", "NOME", "DATA CADASTRO", "STATUS", " "),
            "linhas" => $banco

        );

        return $arrayTable;

    }

}