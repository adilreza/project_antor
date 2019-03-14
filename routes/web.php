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

Route::get('/','project_maincontroller@index');
Route::get('/user_registration','project_maincontroller@registration_page');
Route::post('/user_registration','project_maincontroller@user_registration');
Route::get('/login','project_maincontroller@index');
Route::post('/login','project_maincontroller@login_req');
Route::get('/os_page','project_maincontroller@os_page');
Route::get('/game/snake','project_maincontroller@snake_game');