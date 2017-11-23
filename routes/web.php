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



Route::get('/', 'MainController@index')->name('home');

Route::get('/projets', function () {
    return view('projets.projets');
});


Route::get('/projets/create', [
    'uses' => 'MainController@create',
    'as' => 'projets.create'
]);

Route::get('/projets/store', [
    'uses' => 'MainController@store',
    'as' => 'projets.store'
]);