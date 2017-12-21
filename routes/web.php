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

Route::get('/', 'ProjetsController@index')->name('site_url');

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

Route::get('/index', 'ProjetsController@index')->name('index');
Route::middleware(['auth'])->group(function () {

Route::view('/admin', 'admin_panel.admin')->name('admin');

Route::view('/admin/dashboard', 'admin_panel.admin')->name('admin_dashboard');

Route::get('/admin/projets', 'ProjetsController@admin_index' )->name('admin_projets');

Route::get('/admin/projets/create', 'ProjetsController@admin_projets_create' )->name('admin_projets_create');

Route::get('/admin/projets/edit/{id}', 'ProjetsController@edit' )->name('admin_projets_edit');

Route::view('/home', 'admin_panel.admin')->name('home');

Route::get('/admin/password-change', 'UserController@admin_password_change_page' )->name('admin_password_change_page');

Route::post('/admin/password-changes', 'UserController@admin_password_change' )->name('admin_password_change');

});

Auth::routes();


