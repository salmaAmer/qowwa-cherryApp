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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/patients','PatientsController@index');
Route::get('/patients/{id}', 'PatientsController@show');
Route::post('/patients','PatientsController@store');
Route::get('/patientsD/{id}','PatientsController@delete');
Route::post('/patients/{id}/edit','PatientsController@update');
Route::post('/visits','VisitsController@store');
Route::get('/visits/{id}','VisitsController@delete');
Route::post('/visits/{id}/edit','VisitsController@update');