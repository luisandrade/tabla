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
Route::get('luis',function(){
    return "hola roly como estas";
});
Route::get('/home/{nombre}',function($nombre){
    return view('home', ['nombre' => $nombre]);
  
});
Route::get('/panel/{cliente}',function($cliente){
    return view('/panel',['cliente'=> $cliente]);
})->where('cliente', '[A-Za-z]+');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/','AdminController@index');

    Route::group(['prefix' => 'heroes'], function(){

        Route::get('/','HeroeController@index')->name('admin.heroes');
        Route::get('create','HeroeController@create')->name('admin.heroes.create');
        Route::post('store','HeroeController@store')->name('admin.heroes.store');
        Route::get('edit/{id}','HeroeController@edit')->name('admin.heroes.edit');
        Route::post('update/{id}','HeroeController@update')->name('admin.heroes.update');
    });

    Route::get('enemigos','EnemigoController@index')->name('admin.enemigos');
    Route::get('items','ItemsController@index')->name('admin.items');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
