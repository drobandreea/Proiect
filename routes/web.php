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

/*
Route::get('/', 'AlimentController@index'); //afisare lista sarcini pe pagina de start
Route::resource('aliments', 'AlimentController');// Ruta de resurse va genera CRUD URI
Route::get('/', 'ProductsController@index'); //afisare pagina de start
Route::get('cart', 'ProductsController@cart'); //cos
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');//adaug in cos
Route::patch('update-cart', 'ProductsController@update'); //modific cos
Route::delete('remove-from-cart', 'ProductsController@remove');//sterg din cos

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function(){
    //Route::get('/', 'ProductsController@index');
    Route::resource('/', 'ProductsController');
    });*/

    Route::get('aliments','AlimentController@index');
    Route::resource('AlimentController','AlimentController');
    Route::get('/', 'ProductsController@index'); //afisare pagina de start
    Route::get('cart', 'ProductsController@cart'); //cos
    Route::get('add-to-cart/{id}', 'ProductsController@addToCart');//adaug in cos
    Route::patch('update-cart', 'ProductsController@update'); //modific cos
    Route::delete('remove-from-cart', 'ProductsController@remove');//sterg din cos
    
    Auth::routes();
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware' => 'auth'], function(){
        Route::get('aliments', 'AlimentController@index');
        Route::resource('aliments', 'AlimentController');
        });
