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

Route::get('/', 'ProjetsController@index');

Route::get('/home', 'ProjetsController@index')->name('home');

Route::get('/projets', function () {
    return view('projets.projets');
});


Route::get('/projets/create', [
    'uses' => 'ProjetsController@create',
    'as' => 'projets.create'
]);

Route::post('/projets/store', [
    'uses' => 'ProjetsController@store',
    'as' => 'projets.store'
]);

Route::post('/projets/edit/{id}', [
    'uses' => 'ProjetsController@edit',
    'as' => 'projets.edit'
]);