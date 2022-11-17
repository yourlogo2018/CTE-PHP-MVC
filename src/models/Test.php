<?php
namespace src\models;
use \core\Model;
use \core\Controller;
use \core\Forms;
use \core\Table;

class Test extends Controller {

    /**
     * Formulario Simples
     *
     * @return void
     */
    static function form(){

        //Formulário 
        $arrayForm = array(
           "0" => array("logo", "Logo", "text", "", "", ""),
           "1" => array("razao_social", "Razão Social *", "text", "", "", "required"),
           "2" => array("nome_fantasia", "Nome Fantasia *", "text", "", "", "required"),
           "3" => array("cnpj", "CNPJ*", "text", "", "", "required"),
           "4" => array("fundacao", "Fundação", "date", "", "", ""),
           "5" => array("dir_executivo", "Diretor Executivo", "text", "", "", ""),
           "6" => array("dir_academico", "Diretor Acadêmico", "text", "", "", ""),
           "7" => array("dir_administrativo", "Diretor Administrativo", "text", "", "", ""),
           "8" => array("dir_financeiro", "Diretor Financeiro", "text", "", "", ""),
           "9" => array("dir_publicacoes", "Diretor Publicações", "text", "", "", ""),
           "10" => array("dir_nucleos", "Diretor Nucleos", "text", "", "", ""),
           
   
           "11" => array("categorias", "Categorias", "select", "Placeholder", "value", "required", array(
               "1" => array("1", "Roupas"),
               "2" => array("2", "Tenis"),
               "3" => array("3", "Bermudas"),
               "4" => array("4", "Calçados"),
           )),
           "12" => array("", "", "checkbox", "", "", "", array(
               "1" => array("cat[]", "Opção 1"),
               "2" => array("cat[]", "Opção 2"),
               "3" => array("cat[]", "Opção 3")
           )),
           "13" => array("", "", "radio", "", "", "", array(
               "1" => array("radio1", "Opção 1"),
               "2" => array("radio2", "Opção 2"),
               "3" => array("radio3", "Opção 3")
           )),
    
       );

        return $arrayForm;

   }


   /**
    * Criar formulario multiplos
    *
    * @return void
    */
   static function formMultiple(){

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


   /**
    * Cria os formularios dentro do card steps
    *
    * @return void
    */
   static function formSteps(){

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



   /**
    * Cria as <li> do card de steps
    *
    * @return void
    */
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




   /**
    * Criar tabela
    *
    * @return void
    */
   static function table(){

         //Busca todos os dados no bd
         $array = Model::select("colunas", "ORDER BY coluna ASC", "tabela");

         $arrayTable = array(
            "header" => "Label do card",
            "buttons" => array(
                "0" => array("rota", "Label do Botão", "icone"),
            ),
            "table_columns" => array("COLUNAS", "COLUNAS",  "COLUNAS", "COLUNAS", "BTN"),
            "table_rows" => $array,
            "btn_router" => array(
                "1" => "edit",
                "2" => "print",
                "3" => "delete"
            )
        );

        return $arrayTable;

   }
















}

