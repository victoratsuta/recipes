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

Route::get('/', 'RecipeController@index')->name('index');

Route::get('/create', 'RecipeController@create')->name('create.form');
Route::post('/create', 'RecipeController@store')->name('create.store');

Route::get('/update/{recipeId}', 'RecipeController@update')->name('update.form');
Route::put('/update', 'RecipeController@edit')->name('update.edit');

Route::get('/delete/{recipeId}', 'RecipeController@remove')->name('delete');

Route::get('/show/{recipeId}', 'RecipeController@show')->name('show.index');
Route::post('/ingredients', 'RecipeController@ingredients')->name('show.ingredients');