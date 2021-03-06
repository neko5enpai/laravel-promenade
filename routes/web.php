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

/*
Route::get('/home', function () {
    return view ('pages.promenade');
});

Route::get('/creer', function () {
    return view ('pages.creer');
});

Route::get('/editer', function () {
    return view ('pages.editer');
}); */

Route::get('/promenades', 'PromenadesController@index');
Route::get('/promenades/creer', 'PromenadesController@create');
/* Route::get('promenades/editer', 'PromenadesController@edit'); */

Route::resource('promenades', 'PromenadesController');