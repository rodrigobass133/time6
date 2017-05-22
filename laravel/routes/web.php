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

Route::get('/', function () {
    return view('inicioCriarQuest');
});

/*
|Route::get('/questoes', function(){
|	return view('inicioCriarQuest');
|});
*/

Route::group(['prefix'=>'questoes'], function(){
	Route::get('discursiva', 'QuestoesController@discursiva');
	Route::get('objetiva', 'QuestoesController@objetiva');
	Route::get('editObjetiva', 'QuestoesController@editObjetiva');
	Route::get('editDiscursiva', 'QuestoesController@editDiscursiva');
	Route::get('listQuest', 'QuestoesController@listaQuest');
	Route::get('telaAddQuest', 'QuestoesController@telaAddQuest');
});

Route::get('/provas', function(){
	return view('criarProva');
});

Route::group(['prefix'=>'provas'], function(){
	Route::get('editProva', 'ProvasController@editProva');
	Route::get('correcaoProva', 'ProvasController@correcaoProva');
	Route::get('listProva', 'ProvasController@listProva');
});
Auth::routes();

//Route::get('/home', 'HomeController@index');
