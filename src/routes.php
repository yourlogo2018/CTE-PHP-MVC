<?php
use core\Router;

$router = new Router();

//Login
$router->get('/login', 'UsuarioController@login');
$router->post('/action_login', 'UsuarioController@action_login');

//Esqueceu a senha
$router->get('/forgot_password', 'UsuarioController@forgot_password');
$router->post('/action_forgot_password', 'UsuarioController@action_forgot_password');

//Novo cadastro de usuarios
$router->get('/register', 'UsuarioController@register');
$router->post('/action_register', 'UsuarioController@action_register');

//Home
$router->get('/', 'HomeController@index');
// $router->get('/sobre/{nome}', 'HomeController@sobreP');
// $router->get('/sobre', 'HomeController@sobre');

// //User
// $router->get('/users', 'UsuarioController@user');
// $router->post('/register_users', 'HomeController@register');


// //Produtos
// $router->get('/produtos', 'HomeController@prod');
// $router->post('/register_product', 'HomeController@register_product');

//Administrativo
$router->get('/escola', 'EscolaController@escola');

//Cursos
$router->get('/listar_cursos', 'CursosController@listar_cursos');
$router->get('/cursos', 'CursosController@cursos');
$router->post('/cadastrar_curso', 'CursosController@cadastrar_curso');


//TESTE
// $router->get('/', 'NomeController@função');//Rota home
// $router->get('/rota', 'NomeController@função');
// $router->post('/rota', 'NomeController@função');
// $router->put('/rota', 'NomeController@função');
// $router->get('/rota/{parametro}', 'NomeController@função');
// $router->delete('/rota', 'NomeController@função');