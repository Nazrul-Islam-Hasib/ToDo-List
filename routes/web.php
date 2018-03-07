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
    return view('welcome');
});
Route::get('/new', [
    'uses' => 'PagesController@new'
]);

//here when user request to view /todos page the router will send a request to the controller with method name
Route::get('/todos', [
    'uses' => 'ToDosController@index',

    'as' => 'todosHome'
]);

//here we use post method to save data in db
Route::post('/create/todo', [
    'uses' => 'ToDosController@store'
]);

//here we use this to delete data in db
Route::get('/todo/delete/{id}', [
	'uses' => 'ToDosController@delete',

//here we use as a name to give our route in frontend
	'as' => 'todo.delete'
]);

//for update purpose
Route::get('/todo/update/{id}', [
	'uses' => 'ToDosController@update',
	'as' => 'todo.update'
]);

Route::post('/todo/save/{id}', [
	'uses' => 'ToDosController@save',
	'as' => 'todos.save'
]);

//for completed purpose

Route::get('/todos/completed/{id}',[
	'uses' => 'ToDosController@completed',
	'as' => 'todos.completed'

]);