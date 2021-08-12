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

Route::get('/', function () {
    return view('home');
});

Route::resource('blog', BlogController::class);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

//blog
Route::get('datablog','BlogController@index')->name('datablog');
Route::get('datablog/create','BlogController@create')->name('tambahdatablog');
Route::post('datablog/create','BlogController@store')->name('simpandatablog');

Route::get('datablog/{id}/edit','BlogController@edit');
Route::post('datablog/{id}/update','BlogController@update');
Route::get('datablog/{id}/delete','BlogController@delete');

Route::get('blog', function () { return view('/blog'); });