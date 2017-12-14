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

// Route::get('/projets', function () {
//     return view('projets.projets')->name('projets');
// });

Route::get('/user/sign-out', [
    'uses' => 'ProjetsController@getSignOut',
	'as' => 'user-sign-out',
]);


Route::get('/projets/{id}', 'ProjetsController@show')->name('projets')->where('id', '[0-9]+');

Route::get('/projets/create', [
    'uses' => 'ProjetsController@create',
    'as' => 'projets.create'
]);


Route::post('/projets/store', [
    'uses' => 'ProjetsController@store',
    'as' => 'projets.store'
]);

Route::get('/projets/edit/{id}', [
    'uses' => 'ProjetsController@edit',
    'as' => 'projets.edit'
]);

Route::post('/projets/update/{id}', [
    'uses' => 'ProjetsController@update',
    'as' => 'projets.update'
]);

 Route::get('/projets/delete/{id}',[
        'uses' => 'ProjetsController@destroy',
        'as' => 'projets.delete'
    ]);   
Auth::routes();

Route::get('/index', 'ProjetsController@index')->name('index');

Route::view('/admin', 'admin')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
