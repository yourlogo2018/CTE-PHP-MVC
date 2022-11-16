<?php


namespace src\controllers;
use \core\Controller;
use core\Forms;
use core\Table;
use src\Config;


//Model
use src\models\Cursos;

class CursosController extends Controller
{
    
    /**
     * Tela de cadastro de curso
     *
     * @return void
     */
    public function cursos(){

        //Renderiza a tela HOME
        $this->render('cursos', [
            "formulario_cursos" => Forms::createForm("Cadastrar Cursos", "cadastrar_curso", "POST", "12", Cursos::formularioCadastroDeCursos(), "listar_cursos")
        ]);

    }

    /**
     * Rotina para cadastrar um novo curso
     *
     * @return void
     */
    public function cadastrar_curso(){

        $data = filter_input_array(INPUT_POST, $_POST);


        /**Validação dos campos do formulario */
        if( $data["nome_curso"] && $data["nome_certificado"] && $data["qtd_disciplina"] ){

            //Retorna se o curso existe na bd ou se foi inserido
            $arrayCurso = Cursos::cadastraNovoCurso($data);

            //verificação se o array esta valido
            if( $arrayCurso ){

                $_SESSION["erro"] = "false";
                $_SESSION["mensagem"] = Config::SUCCESS;
                $this->redirect("/listar_cursos");
                
            }

            $_SESSION["erro"] = "true";
            $_SESSION["mensagem"] = Config::REGISTRATION_EXISTS;
            $this->redirect("/listar_cursos");
            
        }

        $_SESSION["erro"] = "true";
        $_SESSION["mensagem"] = Config::INPUT_EMPTY;
        $this->redirect("/listar_cursos");
        
    }


    /**
     * Tela listando todos os cursos
     *
     * @return void
     */
    public function listar_cursos(){

        $this->render("listar_cursos", [
            "cursos" => Table::createTable(Cursos::listarTodosCursos(), "12"),
        ]);

    }

















}