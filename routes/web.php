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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')
    ->namespace('Home')
    ->group(function () {
        Route::resource('/', 'DashboardController');
        Route::resource('/kritik' , 'KritikController');
        // Route::resource('/program', 'ProgramController');
        // Route::resource('/tv', 'TvController');
        // Route::resource('/berita', 'BeritaController');
    });

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::resource('/', 'DashboardController');
        Route::resource('/artikel', 'ArtikelController');
        Route::resource('/penawaran', 'PenawaranController');
        Route::resource('/harga', 'HargaController');
        Route::resource('/fitur', 'FiturController');
        Route::resource('/kritik', 'KritikController');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
