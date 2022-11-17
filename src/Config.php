<?php
namespace src;

class Config {
    const BASE_DIR = '/CTE-PHP-MVC/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = '209.145.49.19';
    const DB_DATABASE = 'kafecomc_cte';
    CONST DB_USER = 'kafecomc_cte';
    const DB_PASS = 'casa102030';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';

    //Mensagens do sistema
    const SUCCESS = "Cadastro efetuado com sucesso!";
    const ERROR_LOGIN = "Usuário ou senha inválidos";
    const INPUT_EMPTY = "Preencha todos os campos";
    const REGISTRATION_EXISTS = "Cadastro ja existe em nossa base de dados!";
    const ERROR_USER = "Usuario não existe";


    //Estilização do sistema
    const COLOR = "primary";
}