<?php


Route::get('/', function () {
    return view('welcome');
});

route::get('usuarios', 'UsuariosController@index');