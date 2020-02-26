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
    return view('auth.login');
});



Route::get('/lentele', 'TaskController@showTable')->name('lentele');
Route::get('/prideti','TaskController@addTask');
Route::POST('/store-task','TaskController@storeTask'); //uzklausa

Route::Post('/edit-task/{task}', 'TaskController@edit_task'); //uzklausa

Route::get('/redaguoti/{task}', 'TaskController@editTask');

Route::get('/delete-task/{task}','TaskController@deleteTask'); //uzklausa
Route::get('/logout','HomeController@atsijungti');

Auth::routes();
