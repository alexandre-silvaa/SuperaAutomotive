<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => ['web','auth'],
    'prefix' => 'sys', // Prefixo utilizado antes do caminho de rota sys/user, UserController@index
    'namespace' => 'Sys', // Permite remover o namespace utilizando antes da chamada do método Sys\UserController@index
    'as' => 'sys.', //susbtitui name
    ], 
    function (){

        //Dashboard
        Route::get('/', 'DashboardController@index')->name('dashboard');

        //carro
        Route::resource('carros', 'CarroController');
        //manutencao
        Route::resource('manutencoes', 'ManutencaoController');
        //user
        Route::resource('users', 'UserController');
        
    }
);

Auth::routes();

Route::get('/', 'Auth\AuthController@login')->middleware('auth');
Route::post('/login', 'Auth\AuthController@authenticated')->name('login');