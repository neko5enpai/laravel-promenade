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

Route::get('/home', function () {
    return view('Home');
});

Route::get('/creer', function () {
/*     return view('Créer'); */
return 'Nous sommes dans la page Créer';
});

Route::get('/editer', function () {
   /*  return view('Modifier'); */
    return 'Nous sommes dans la page Modifier';
});
