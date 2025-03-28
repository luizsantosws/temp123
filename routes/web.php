<?php
require_once 'Router.php';

Router::get('/', 'AuthController@loginForm');
Router::get('/temperatura', 'AuthController@loginForm');
Router::get('/dashboard', 'SensorController@index');
Router::get('/logout', 'AuthController@logout');
Router::post('/login', 'AuthController@login');
Router::get('/usuario/cadastro', 'AuthController@cadastroForm');
Router::post('/usuario/cadastrar', 'AuthController@cadastrar');
Router::get('/api/graficos', 'SensorController@jsonGrafico');
Router::get('/usuarios', 'UsuarioController@listar');
Router::get('/usuarios/editar/{id}', 'UsuarioController@editarForm');
Router::post('/usuarios/editar/{id}', 'UsuarioController@atualizar');
Router::get('/usuarios/excluir/{id}', 'UsuarioController@excluir');
