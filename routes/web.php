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


Route::get('/', 'ViewController@awal');
Route::get('/edit', 'ViewController@ubah'); 
Route::get('/add', 'ViewController@tambah');
Route::post('/add/action', 'ViewController@add_action');
Route::get('awal/edit/{id}', 'ViewController@ubah');
Route::get('awal/delete/{id}', 'ViewController@hapus');
Route::post('edit/update/{id}', 'ViewController@update');


Auth::routes();

Route::get('/home', 'HomeController@index');
