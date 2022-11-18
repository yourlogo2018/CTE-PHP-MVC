<?php
namespace src\models;
use \core\Model;
use \core\Controller;



class Cursos extends Controller {


    /**
     * Form Cadastro de Curso
     *
     * @return void
     */
    static function formularioCadastroDeCursos(){

        //Formulário cadastrar cursos
        $arrayForm = array(
            "0" => array("nome_curso", "Nome do Curso *", "text", "", "", "required"),
            "1" => array("nome_certificado", "Nome p/ Certificado *", "text", "", "", "required"),
            "2" => array("qtd_disciplina", "Qtd. Disciplina *", "number", "", "", "required"),
            "3" => array("qtd_horas", "Carga Horária Total", "text", "", "", ""),
            "4" => array("ementa", "Nome do Curso *", "textarea", "", "", "required"),
        );

        return $arrayForm;
    }


    /**
     * Metodo de cadastar novo curso
     *
     * @param [array] $array
     * @return void
     */
    static function cadastraNovoCurso($array){

        //Validação se exite o curso
       $validaCurso = Model::select("*", "WHERE curso_nome = '".$array["nome_curso"]."' ", "ctec_cursos");

       //Sendo false faz o insert
       if( !$validaCurso ){

            $arrayInsert = array(

                "curso_nome"                => $array["nome_curso"],
                "curso_nome_certificado"    => $array["nome_certificado"],
                "curso_quant_disc"          => $array["qtd_disciplina"],
                "curso_carga_horaria"       => $array["qtd_horas"],
                "curso_ementa"              => $array["ementa"]
            );


            $arrayCurso = Model::insert($arrayInsert, "ctec_cursos");
            //retorna os dados do curso
            return $arrayCurso;
  
       }

       //Retorna false pq ja existe esse curso
       return false;  

    }


    static function listarTodosCursos(){

        //Busca todos os cursos no bd
        $arrayCursos = Model::select("id, curso_nome, curso_quant_disc, curso_carga_horaria", "ORDER BY curso_nome ASC", "ctec_cursos");


        $arrayTable = array(
            "header" => "TODOS OS CURSOS",
            "buttons" => array(
                "0" => array("cursos", "Novo Curso", "fa-solid fa-plus"),
            ),
            "table_columns" => array("ID", "NOME CURSO",  "QTD DISC", "CARGA HOR", "BTN"),
            "table_rows" => $arrayCursos,
            "btn_router" => array(
                "1" => "editar_curso",
                "3" => "deletar_curso"
            )
        );

        return $arrayTable;
    }

    static function editarCurso($id){

        $array = Model::select("*", "WHERE id = '".$id."' ", "ctec_cursos");

         //Formulário cadastrar cursos
         $arrayForm = array(
            "0" => array("nome_curso", "Nome do Curso *", "text", "", $array[0]["curso_nome"], "required"),
            "1" => array("nome_certificado", "Nome p/ Certificado *", "text", "", $array[0]["curso_nome_certificado"], "required"),
            "2" => array("qtd_disciplina", "Qtd. Disciplina *", "number", "", $array[0]["curso_quant_disc"], "required"),
            "3" => array("qtd_horas", "Carga Horária Total", "text", "", $array[0]["curso_carga_horaria"], ""),
            "4" => array("ementa", "Ementa", "textarea", "", $array[0]["curso_ementa"], ""),
        );

        return $arrayForm;

    }
  













}
