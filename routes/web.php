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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','TodosController@index');
Route::get('/todo/{id}','TodosController@show');

Route::get('/new_todo','TodosController@create');
Route::post('/store','TodosController@store');

Route::get('todo/edit/{id}','TodosController@edit');
Route::post('todo/edit/update','TodosController@update');



Route::get('todo/delete/{id}', 'TodosController@delete');

Route::get('todo/{id}/complete', 'TodosController@complete');


