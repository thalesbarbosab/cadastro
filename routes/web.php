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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\CategoriaController;

Route::get('/', function(){
    return view('index');
})->name('/');

Route::resource('produtos', 'ProdutoController');
Route::get('produtos/create/{$categoria}', 'ProdutoController@create')->name('produtos.create');
Route::get('produtos/{produto}','ProdutoController@destroy')->name('produtos.destroy');
Route::resource('categorias', 'CategoriaController');
Route::get('categorias/apagar/{id}', 'CategoriaController@destroy')->name('categorias.apagar');
