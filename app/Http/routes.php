<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'IndexController@shownumbers');

    Route::get('/dashboard', function(){
        return view('Admin/dashboard');
    });

    Route::get('/alunos', 'UsersController@showalunos');

    Route::get('/professores', 'UsersController@showprofs');

    Route::get('/admins', 'UsersController@showadmins');


    Route::get('/disciplinas', 'DisciplinasController@show');

    Route::get('/turmas', 'TurmasController@show');

    Route::get('/examesfeitos', 'ExamesController@showfeitos');

    Route::get('/examesnaofeitos', 'ExamesController@shownaofeitos');

    Route::get('/perfil', 'PerfilController@buscardados');

    Route::get('/resetpassword', function(){
        return view('Admin/resetpassword');
    });

});



Route::get('/login', function(){
    return view('login');
});

Route::get('/logout', function(){
    Auth::logout();
});

Route::auth();
