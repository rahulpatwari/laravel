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

Route::get('/', function () {
    return view('welcome');
});
Route::Resource('movies','MoviesController');



// Admin Area

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/','AdminController@index')->name('admin');
    Route::Resource('product','ProductsController');
    Route::Resource('brand','BrandsController');
    Route::Resource('category','CategoriesController');
  });





Route::resource('tech','MyDataController');