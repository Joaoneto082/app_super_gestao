<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/registrar', 'RegistrarController@registrar')->name('registrar');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});

Auth::routes();    

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formulario', 'FormularioController@index')->name('formulario');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/list', 'ListController@index')->name('list');
Route::get('/mensagem', 'MensagemController@index')->name('mensagem');
Route::get('/menu', 'MenuController@index')->name('menu');

Route::prefix('/usuarios')->group(function(){
    Route::get('/', 'UsuariosController@index');
    Route::get('/new', 'UsuariosController@new');
    Route::post('/add', 'UsuariosController@add');
    Route::get('/{id}/edit', 'UsuariosController@edit');
    Route::post('/update/{id}', 'UsuariosController@update');
    Route::delete('/delete/{id}', 'UsuariosController@delete');
});

Route::get('/cursos', 'CursosController@create');
Route::post('/cursos', 'CursosController@store')->name('registrar_curso');
Route::get('/cursos/ver/{id}', 'CursosController@show');
Route::get('/cursos/editar/{id}', 'CursosController@edit');
Route::post('/cursos/editar/{id}', 'CursosController@update')->name('alterar_curso');
Route::get('/cursos/excluir/{id}', 'CursosController@delete');
Route::post('/cursos/excluir/{id}', 'CursosController@destroy')->name('excluir_curso');
