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

Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

//Route::get('/relatorio', 'ReportController@index')->name('relatorio')->middleware('auth')->middleware(['role:gerente']);

Route::get('/', 'StockController@index')->name('/')->middleware('auth');
Route::post('/estoqueSalvar', 'StockController@salvar')->name('estoque_salvar')->middleware('auth');
//Route::post('/estoqueVenda', 'StockController@venda')->name('EstoqueController@venda')->middleware('auth');
Route::post('/estoqueRetira', 'StockController@retira')->name('EstoqueController@retira')->middleware('auth');

Route::get('/cadastrarProduto', 'ProductController@index')->name('cadastroProduto')->middleware('auth');
Route::post('/cadastrarProdutos', 'ProductController@salvar')->name('produto_salvar')->middleware('auth');
Route::post('/cadastrarProdutoa', 'ProductController@alterar')->name('produto_alterar')->middleware('auth');

Route::get('/cadastroFornecedor', 'ProviderController@index')->name('cadastroFornecedor')->middleware('auth');
Route::post('/cadastroFornecedors', 'ProviderController@salvar')->name('fornecedor_salvar')->middleware('auth');
Route::post('/cadastroFornecedora', 'ProviderController@alterar')->name('fornecedor_alterar')->middleware('auth');

Route::get('/cadastroFuncionario', 'EmployeeController@index')->name('cadastroFuncionario')->middleware('auth');
Route::post('/cadastroFuncionarios', 'EmployeeController@salvar')->name('funcionario_salvar')->middleware('auth');
Route::post('/cadastroFuncionarioa', 'EmployeeController@atualizar')->name('funcionario_atualizar')->middleware('auth');

Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token')->middleware('auth');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('resetar.senha')->middleware('auth');

Auth::routes();
