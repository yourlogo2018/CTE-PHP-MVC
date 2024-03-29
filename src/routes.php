<?php
use core\Router;

$router = new Router();

//Home
$router->get('/', 'HomeController@index');
// $router->get('/sobre/{nome}', 'HomeController@sobreP');
// $router->get('/sobre', 'HomeController@sobre');

//Login
$router->get('/login', 'UsuarioController@login');
$router->post('/action_login', 'UsuarioController@action_login');

//Esqueceu a senha
$router->get('/forgot_password', 'UsuarioController@forgot_password');
$router->post('/action_forgot_password', 'UsuarioController@action_forgot_password');

//Novo cadastro de usuarios
$router->get('/register', 'UsuarioController@register');
$router->post('/action_register', 'UsuarioController@action_register');


// //User
// $router->get('/users', 'UsuarioController@user');
// $router->post('/register_users', 'HomeController@register');


//Administrativo
$router->get('/escola', 'EscolaController@escola');

//Cursos
$router->get('/cursos', 'CursosController@cursos');
$router->get('/listar_cursos', 'CursosController@listar_cursos');
$router->get('/editar_curso/{id}', 'CursosController@editar_curso');
$router->post('/deletar_curso/{id}', 'CursosController@deletar_curso');
$router->post('/cadastrar_curso', 'CursosController@cadastrar_curso');

//Escola
$router->get('/nova_escola', 'EscolaController@nova_escola');
$router->post('/add_escola', 'EscolaController@add_escola');

//Acadêmico 
$router->get('/estudante', 'EstudanteController@estudante');
$router->post('/add_alunos', 'EstudanteController@add_alunos');
$router->get('/consultar_alunos', 'EstudanteController@consultar_alunos');
$router->get('/action_pesq_alunos/{id}', 'EstudanteController@action_pesq_alunos');
$router->get('/report_alunos', 'EstudanteController@report_alunos');
$router->get('/record_alunos', 'EstudanteController@record_alunos');




//TESTE
// $router->get('/', 'NomeController@função');//Rota home
// $router->get('/rota', 'NomeController@função');
// $router->post('/rota', 'NomeController@função');
// $router->put('/rota', 'NomeController@função');
// $router->get('/rota/{parametro}', 'NomeController@função');
// $router->delete('/rota', 'NomeController@função');