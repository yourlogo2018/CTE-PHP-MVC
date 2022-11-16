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
            "columns" => array("ID", "NOME CURSO",  "QTD DISC", "CARGA HOR", "BTN"),
            "rows" => $arrayCursos
        );

        return $arrayTable;
    }
  













}
