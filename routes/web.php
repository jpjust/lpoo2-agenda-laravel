<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;

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

/**
 * Aqui temos as rotas da nossa aplicação.
 * 
 * A primeira rota apenas redireciona as requisições à / para /contatos.
 * As outras definem rotas específicas para cada parte do CRUD da nossa
 * aplicação.
 * Atenção para o update. A rota usa o método POST, pois vai receber uma
 * requisição POST do formulário.
 */
Route::redirect('/', '/contatos');

Route::get('/contatos',             [ContatosController::class, 'index']);
Route::get('/contatos/show/{id}',   [ContatosController::class, 'show']);
Route::get('/contatos/new',         [ContatosController::class, 'new']);
Route::get('/contatos/edit/{id}',   [ContatosController::class, 'edit']);
Route::post('/contatos/update',     [ContatosController::class, 'update']);
Route::get('/contatos/delete/{id}', [ContatosController::class, 'delete']);
