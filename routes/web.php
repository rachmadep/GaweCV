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



Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

route::group(['middleware' => 'auth'], function(){
  Route::get('/biodata', 'BiodataController@index');
  Route::get('/biodata/create', 'BiodataController@create');
  Route::post('/biodata/store', 'BiodataController@store');
  Route::get('/biodata/edit/{id}', 'BiodataController@edit');
  Route::post('/biodata/update/{id}', 'BiodataController@update');
  Route::get('/biodata/show/{id}', 'BiodataController@show');
  Route::get('/biodata/delete{id}', 'BiodataController@destroy');

});
