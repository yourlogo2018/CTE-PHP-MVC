<?php

namespace src\controllers;

use core\Controller;
use src\models\User;
use src\Config;

class UsuarioController extends Controller
{

    /**
     * Metodo qeu renderiza a tela de login
     *
     * @return void
     */
    public function login(){
        $this->render("login");
    }


    /**
     * Metodo para validação de login do usuario
     *
     * @return void
     */
    public function action_login(){

        //Dados que vem do formulário
        $data = filter_input_array(INPUT_POST, $_POST);

        if( $data["login"] && $data["password"] ){

            //Validação se existe 
            $array = User::findByUser("*", "WHERE login = '".$data["login"]."' ", "cte_usuarios");

            if( $array ){

                $pass = md5($data["password"]);

                //Validação da senha
                if( $array[0]["pswd"] == $pass ){

                    $_SESSION['user'] = $array;
                    $this->redirect('/');
                    exit;

                }else{

                    $_SESSION["erro"] = "true";
                    $_SESSION["mensagem"] = Config::ERROR_LOGIN;
                    $this->redirect('/login');
                    exit;
                }

            }

            $_SESSION["erro"] = "true";
            $_SESSION["mensagem"] = Config::ERROR_LOGIN;
            $this->redirect('/login');
            exit;

        }

        //Erro de campos vazios
        $_SESSION["erro"] = "true";
        $_SESSION["mensagem"] = Config::INPUT_EMPTY;
        $this->redirect('/login');

        

    }

    /**
     * Metodo de renderizar a tela de esqueci a senha
     *
     * @return void
     */
    public function forgot_password(){
        $this->render("forgot_password");
    }


    /**
     * Metodo responsavel na validação e recuperar senha
     *
     * @return void
     */
    public function action_forgot_password(){

        //Dados que vem do formulário
        $data = filter_input_array(INPUT_POST, $_POST);

        if( $data["email"] ){

            //Validação se existe 
            $array = User::findByUser("*", "WHERE email = '".$data["email"]."'", "tb_login");

            if( $array ){

                $_SESSION["error"] = "true";
                $_SESSION["message"] = "Email enviado com sucesso";
                $this->redirect('/forgot_password');
                exit;

            }

            $_SESSION["error"] = "true";
            $_SESSION["message"] = Config::ERROR_USER;
            $this->redirect('/forgot_password');
            exit;

        }

        //Erro de campos vazios
        $_SESSION["error"] = "true";
        $_SESSION["message"] = Config::INPUT_EMPTY;
        $this->redirect('/forgot_password'); 

    }


    /**
     * Metodo para renderizar a tela de cadastre-se
     *
     * @return void
     */
    public function register(){
        $this->render("register");
    }



    /**
     * Metodo para cadastro de novos usuarios
     *
     * @return $_SESSION["user"] = $array
     */
    public function action_register(){

         //Dados que vem do formulário
         $data = filter_input_array(INPUT_POST, $_POST);

         //Validação dos inputs
         if( $data["username"] && $data["email"] && $data["password"] ){

            //Validação se ja existe no banco de dados
            $user = User::select("*", "WHERE email = '".$data["email"]."' AND login = '".$data["email"]."' ", "tb_login");

            if( !$user ){

                //Insere os dados do usuario
                $array = array(
                    "login"         => $data["email"],
                    "password"      => md5($data["password"]),
                    "password_bk"   => $data["password"],
                    "name"          => $data["username"],
                    "email"         => $data["email"],
                    "session"       => md5($data["password"]).md5($data["email"]),
                    "admin"         => "N",
                    "status"        => 1,
                );

                $arrayUser = User::insert($array, "tb_login");

                if( $arrayUser ){

                    $_SESSION['user'] = $arrayUser;
                    $this->redirect('/');
                    exit;
                }

                //Se der erro no insert do usuario (Vai precisar debugar)
                $_SESSION["error"] = "true";
                $_SESSION["message"] = "Erro ao cadastrar";
                $this->redirect('/register');
                exit;

            }

            //Se ja existir retorna para tela de registro
            $_SESSION["error"] = "true";
            $_SESSION["message"] = Config::REGISTRATION_EXISTS;
            $this->redirect('/register');
            exit;

         }

         //Erro, campos vazios
         $_SESSION["error"] = "true";
         $_SESSION["message"] = Config::INPUT_EMPTY;
         $this->redirect('/register');
         

    }

    /**
     * Metodo responsavel por renderizar a tela de usuarios
     *
     * @return void
     */
    public function user(){

        $this->render("users", [
            "users" => User::getAllUser(),
        ]);

        //$this->redirect('/');
    }


    /**
     * Metodo para validação da sessão do usuario
     * se estiver vazia sempre redireciona para o /login
     *
     * @param [array] $sessaoUsuario
     * @return void
     */
    public function usuarioLogado($sessaoUsuario){

        if(  empty($sessaoUsuario) ){
            $this->redirect('/login');
            exit;
        }

    }

    











    
}