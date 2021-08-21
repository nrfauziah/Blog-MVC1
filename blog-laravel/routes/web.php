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
    return view('welcome', ['title' => 'BLOG']);
});

Route::get('/login', 'AuthController@login');

Route::get('home', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');

//siswa
Route::get('datasiswa','SiswaController@index')->name('datasiswa')->middleware(['checkRole:admin,guru']);
Route::get('datasiswa/create','SiswaController@create')->name('tambahdatasiswa')->middleware(['checkRole:admin,guru']);
Route::post('datasiswa/create','SiswaController@store')->name('simpandatasiswa')->middleware(['checkRole:admin,guru']);

Route::get('datasiswa/{id}/edit','SiswaController@edit')->middleware(['checkRole:admin,guru']);
Route::post('datasiswa/{id}/update','SiswaController@update')->middleware(['checkRole:admin,guru']);
Route::get('datasiswa/{id}/delete','SiswaController@delete')->middleware(['checkRole:admin,guru']);
Route::get('datasiswa/{id}/detail','SiswaController@detail')->middleware(['checkRole:admin,guru']);

Route::get('siswa', function () { return view('/siswa.siswa'); });

Route::resource('blog', BlogController::class);

//blog
Route::get('datablog','BlogController@index')->name('datablog');
Route::get('datablog/create','BlogController@create')->name('tambahdatablog');
Route::post('datablog/create','BlogController@store')->name('simpandatablog');

Route::get('datablog/{id}/edit','BlogController@edit');
Route::post('datablog/{id}/update','BlogController@update');
Route::get('datablog/{id}/delete','BlogController@delete');

Route::get('blog', function () { return view('/blog'); });