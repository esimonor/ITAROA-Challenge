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

Route::get('/', 'App\Http\Controllers\establishmentController@index')->name('welcome');


// Route::resource('establishment', 'App\Http\Controllers\establishmentController')->only('index', 'show');

Route::get('/establishment', function(){
    return view("establishment");
})->name('establishment');

Route::get('/create', function(){
    return view("create_product");
})->name('create');

Route::get('/tienda', function(){
    return view("tienda");
})->name('tienda');