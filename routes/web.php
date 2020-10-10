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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('index.product');
Route::get('/create', 'ProductController@create')->name('crate.product');
Route::post('/store', 'ProductController@store')->name('store.product');
Route::get('/edit/product/{id}', 'ProductController@edit');
Route::post('/update/product/{id}', 'ProductController@update');
