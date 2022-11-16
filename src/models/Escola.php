<?php

namespace src\models;
use core\Model;
use \core\Forms;

class Escola extends Model
{
    static function formAddEscola(){

        //Formulário 
        $arrayForm = array(

            "escola" => array(

                "label"     => "Cadastro Escola Teste",
                "action"    => "add_escola",
                "method"    => "POST",
                "colums"    =>  "6",
                "inputs"    => array(

                    "0" => array("logo", "Logo", "text", "", "", ""),
                    "1" => array("razao_social", "Razão Social *", "text", "", "", "required"),
                    "2" => array("nome_fantasia", "Nome Fantasia *", "text", "", "", "required"),
                    "3" => array("cnpj", "CNPJ*", "text", "", "", "required"),
                    "4" => array("fundacao", "Fundação", "date", "", "", ""),

                )
                
            ),

            "diretoria" =>  array(

                "label"     => "Diretoria",
                "action"    => "add_diretoria",
                "method"    => "POST",
                "colums"    =>  "6",
                "inputs"    => array(

                    "0" => array("dir_executivo", "Diretor Executivo", "text", "", "", ""),
                    "1" => array("dir_academico", "Diretor Acadêmico", "text", "", "", ""),
                    "2" => array("dir_administrativo", "Diretor Administrativo", "text", "", "", ""),
                    "3" => array("dir_financeiro", "Diretor Financeiro", "text", "", "", ""),
                    "4" => array("dir_publicacoes", "Diretor Publicações", "text", "", "", ""),
                    "5" => array("dir_nucleos", "Diretor Nucleos", "text", "", "", ""),

                )
   
            ),

            "contatos" => array(

                "label"     => "Contatos",
                "action"    => "add_contatos",
                "method"    => "POST",
                "colums"    =>  "6",
                "inputs"    => array(

                    "0" => array("email_admin", "Email Administrativo", "email", "", "", ""),
                    "1" => array("email_comerc", "Email Comercial", "email", "", "", ""),
                    "2" => array("email_finac", "Email Financeiro", "email", "", "", ""),
                    "3" => array("email_nucleo", "Email Atendimento Núcleos", "email", "", "", ""),
                    "4" => array("telefone", "Telefone", "text", "", "", ""),
                    "5" => array("celular", "Celular", "text", "", "", ""),

                )

            ),

            "endereco" => array(

                "label"     => "Endereço",
                "action"    => "add_endereco",
                "method"    => "POST",
                "colums"    =>  "6",
                "inputs"    => array(

                    "0" => array("cep", "CEP", "text", "", "", ""),
                    "1" => array("endereco", "Endereço", "text", "", "", ""),
                    "2" => array("numero", "Número", "number", "", "", ""),
                    "3" => array("bairro", "Bairro", "text", "", "", ""),
                    "4" => array("complemento", "Complemento", "text", "", "", ""),
                    "5" => array("municipio", "Município", "text", "", "", ""),
                    "6" => array("estado", "Estado", "text", "", "", ""),

                )

                

            )
              
     
        );

        return $arrayForm;

    }


    static function liSteps(){

        //<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
        $arrayLi = array(
            "0" => array("active", "escola", "Dados da Escola"),
            "1" => array("", "diretoria", "Diretoria"),
            "2" => array("", "contatos", "Contatos"),
            "3" => array("", "endereco", "Endereço"),
        );

        return $arrayLi;

    }
















}

