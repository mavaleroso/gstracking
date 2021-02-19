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

// Route::get('/', 'AppController@index')->name('index');
// Route::get('login', 'AppController@login')->name('login');
// Route::get('dashboard', 'DashboardController@index')->name('dashboard');

// Route::prefix('auth')->group(function() {
// 	Route::get('init', 'AppController@init');
// 	Route::post('login_request', 'AppController@login_request');
// 	Route::get('logout_request', 'AppController@logout_request');
// });
Route::get('/', 'main\LoginController@index')->name('main.login');
Route::post('/login', 'main\AuthController@login')->name('main.auth.login');
Route::get('/logout', 'main\AuthController@logout')->name('main.auth.logout');
Route::get('/dashboard', 'main\DashboardController@index')->name('main.dashboard');

