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

Route::middleware(['auth'])->group(function () {

    Route::get('getDiligencia', 'TbldiligenciaController@getDiligencia');
    Route::get('getMotivo', 'TblmotivoController@getMotivo');

    //Roles
    Route::resource('roles', 'RoleController');

    // resumido para el metodo resource => ver RoleController __construct()


    //Users
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');


    //Products
    Route::post('products/store', 'ProductController@store')->name('products.store')
        ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
        ->middleware('permission:products.index');

    Route::get('products/create', 'ProductController@create')->name('products.create')
        ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
        ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
        ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
        ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
        ->middleware('permission:products.edit');

    // Tblinstancia
    Route::post('tblinstancia/store', 'TblinstanciaController@store')->name('tblinstancia.store')
        ->middleware('permission:tblinstancia.create');

    Route::get('tblinstancia', 'TblinstanciaController@index')->name('tblinstancia.index')
        ->middleware('permission:tblinstancia.index');

    Route::get('tblinstancia/create', 'TblinstanciaController@create')->name('tblinstancia.create')
        ->middleware('permission:tblinstancia.create');

    Route::put('tblinstancia/{tblinstancia}', 'TblinstanciaController@update')->name('tblinstancia.update')
        ->middleware('permission:tblinstancia.edit');

    Route::get('tblinstancia/{tblinstancia}', 'TblinstanciaController@show')->name('tblinstancia.show')
        ->middleware('permission:tblinstancia.show');

    Route::delete('tblinstancia/{tblinstancia}', 'TblinstanciaController@destroy')->name('tblinstancia.destroy')
        ->middleware('permission:tblinstancia.destroy');

    Route::get('tblinstancia/{tblinstancia}/edit', 'TblinstanciaController@edit')->name('tblinstancia.edit')
        ->middleware('permission:tblinstancia.edit');

    // Tbldiligencia
    Route::post('tbldiligencia/store', 'TbldiligenciaController@store')->name('tbldiligencia.store')
        ->middleware('permission:tbldiligencia.create');

    Route::get('tbldiligencia', 'TbldiligenciaController@index')->name('tbldiligencia.index')
        ->middleware('permission:tbldiligencia.index');

    Route::get('tbldiligencia/create', 'TbldiligenciaController@create')->name('tbldiligencia.create')
        ->middleware('permission:tbldiligencia.create');

    Route::put('tbldiligencia/{tbldiligencia}', 'TbldiligenciaController@update')->name('tbldiligencia.update')
        ->middleware('permission:tbldiligencia.edit');

    Route::get('tbldiligencia/{tbldiligencia}', 'TbldiligenciaController@show')->name('tbldiligencia.show')
        ->middleware('permission:tbldiligencia.show');

    Route::delete('tbldiligencia/{tbldiligencia}', 'TbldiligenciaController@destroy')->name('tbldiligencia.destroy')
        ->middleware('permission:tbldiligencia.destroy');

    Route::get('tbldiligencia/{tbldiligencia}/edit', 'TbldiligenciaController@edit')->name('tbldiligencia.edit')
        ->middleware('permission:tbldiligencia.edit');

    // Tblmotivo
    Route::post('tblmotivo/store', 'TblmotivoController@store')->name('tblmotivo.store')
        ->middleware('permission:tblmotivo.create');

    Route::get('tblmotivo', 'TblmotivoController@index')->name('tblmotivo.index')
        ->middleware('permission:tblmotivo.index');

    Route::get('tblmotivo/create', 'TblmotivoController@create')->name('tblmotivo.create')
        ->middleware('permission:tblmotivo.create');

    Route::put('tblmotivo/{tblmotivo}', 'TblmotivoController@update')->name('tblmotivo.update')
        ->middleware('permission:tblmotivo.edit');

    Route::get('tblmotivo/{tblmotivo}', 'TblmotivoController@show')->name('tblmotivo.show')
        ->middleware('permission:tblmotivo.show');

    Route::delete('tblmotivo/{tblmotivo}', 'TblmotivoController@destroy')->name('tblmotivo.destroy')
        ->middleware('permission:tblmotivo.destroy');

    Route::get('tblmotivo/{tblmotivo}/edit', 'TblmotivoController@edit')->name('tblmotivo.edit')
        ->middleware('permission:tblmotivo.edit');


});