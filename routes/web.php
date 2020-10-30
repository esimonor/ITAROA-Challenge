<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'establishmentController@index')->name('welcome');

Route::get('create_product', 'establishmentController@form')->name('form');

Route::get('add_product/{id}', 'establishmentController@add_product')->name('add_product');

Route::get('{prueba}/establishment', 'establishmentController@prueba')->name('prueba');
Route::get('snake', function(){
    return view('snake');
});

//Rutas de los controladores Resource
Route::resource('establishment', 'establishmentController')->only('index', 'show', 'add_product');

Route::resource('products', 'productController')->only('show', 'store', 'update', 'destroy');






