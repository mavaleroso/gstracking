<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', 'base\LoginController@index')->name('main.login');
Route::post('/login', 'base\AuthController@login')->name('main.auth.login');
Route::get('/logout', 'base\AuthController@logout')->name('main.auth.logout');
Route::get('/dashboard', 'base\DashboardController@index')->name('main.dashboard');

// SPA
Route::get('/request_travel', 'base\DashboardController@index');
Route::get('/list_requests', 'base\DashboardController@index');
Route::get('/list_travels', 'base\DashboardController@index');
Route::get('/list_transportation', 'base\DashboardController@index');
Route::get('/transaction_logs', 'base\DashboardController@index');
Route::get('/list_transportation', 'base\DashboardController@index');
Route::get('/list_vehicle', 'base\DashboardController@index');
Route::get('/list_drivers', 'base\DashboardController@index');
Route::get('/list_service_provider', 'base\DashboardController@index');
Route::get('/list_po', 'base\DashboardController@index');
Route::get('/list_users', 'base\DashboardController@index');

Route::group(['prefix' => 'travel', 'namespace' => 'Main'], function () {
    Route::resource('request', 'RequestTravelController', [
        'names' => [
            'index' => 'main.request.index',
            'create' => 'main.request.create',
            'store' => 'main.request.store',
            'show' => 'main.request.show',
            'edit' => 'main.request.edit',
            'update' => 'main.request.update',
            'destroy' => 'main.request.destroy',
        ]
    ]);

    Route::resource('listrequest', 'ListRequestController', [
        'names' => [
            'index' => 'main.listrequest.index',
            'create' => 'main.listrequest.create',
            'store' => 'main.listrequest.store',
            'show' => 'main.listrequest.show',
            'edit' => 'main.listrequest.edit',
            'update' => 'main.listrequest.update',
            'destroy' => 'main.listrequest.destroy',
        ]
    ]);
});

Route::group(['prefix' => 'transportation', 'namespace' => 'Main'], function () {
    Route::resource('vehicle', 'TransportationVehicleController', [
        'names' => [
            'index' => 'main.vehicle.index',
            'create' => 'main.vehicle.create',
            'store' => 'main.vehicle.store',
            'show' => 'main.vehicle.show',
            'edit' => 'main.vehicle.edit',
            'update' => 'main.vehicle.update',
            'destroy' => 'main.vehicle.destroy',
        ]
    ]);

    Route::resource('driver', 'TransportationDriverController', [
        'names' => [
            'index' => 'main.driver.index',
            'create' => 'main.driver.create',
            'store' => 'main.driver.store',
            'show' => 'main.driver.show',
            'edit' => 'main.driver.edit',
            'update' => 'main.driver.update',
            'destroy' => 'main.driver.destroy',
        ]
    ]);

    Route::resource('serviceprovider', 'TransportationServiceProviderController', [
        'names' => [
            'index' => 'main.serviceprovider.index',
            'create' => 'main.serviceprovider.create',
            'store' => 'main.serviceprovider.store',
            'show' => 'main.serviceprovider.show',
            'edit' => 'main.serviceprovider.edit',
            'update' => 'main.serviceprovider.update',
            'destroy' => 'main.serviceprovider.destroy',
        ]
    ]);

    Route::resource('overview', 'TransportationOverviewController', [
        'names' => [
            'index' => 'main.overview.index',
            'create' => 'main.overview.create',
            'store' => 'main.overview.store',
            'show' => 'main.overview.show',
            'edit' => 'main.overview.edit',
            'update' => 'main.overview.update',
            'destroy' => 'main.overview.destroy',
        ]
    ]);
    
});
Route::group(['prefix' => 'history', 'namespace' => 'Main'], function () {
    Route::resource('log', 'LogController', [
        'names' => [
            'index' => 'main.log.index',
            'create' => 'main.log.create',
            'store' => 'main.log.store',
            'show' => 'main.log.show',
            'edit' => 'main.log.edit',
            'update' => 'main.log.update',
            'destroy' => 'main.log.destroy',
        ]
    ]);
});

Route::group(['prefix' => 'tracking', 'namespace' => 'Main'], function () {
    Route::resource('po', 'PoController', [
        'names' => [
            'index' => 'main.po.index',
            'create' => 'main.po.create',
            'store' => 'main.po.store',
            'show' => 'main.po.show',
            'edit' => 'main.po.edit',
            'update' => 'main.po.update',
            'destroy' => 'main.po.destroy',
        ]
    ]);

    Route::resource('listtravel', 'ListTravelController', [
        'names' => [
            'index' => 'main.listtravel.index',
            'create' => 'main.listtravel.create',
            'store' => 'main.listtravel.store',
            'show' => 'main.listtravel.show',
            'edit' => 'main.listtravel.edit',
            'update' => 'main.listtravel.update',
            'destroy' => 'main.listtravel.destroy',
        ]
    ]);
});

Route::group(['prefix' => 'users', 'namespace' => 'Main'], function () {
    Route::resource('listUsers', 'ListUserController', [
        'names' => [
<<<<<<< HEAD
            'index' => 'main.users.index',
            'create' => 'main.users.create',
            'store' => 'main.users.store',
            'show' => 'main.users.show',
            'edit' => 'main.users.edit',
            'update' => 'main.users.update',
            'destroy' => 'main.users.destroy',
=======
            'index' => 'main.listUsers.index',
            'create' => 'main.listUsers.create',
            'store' => 'main.listUsers.store',
            'show' => 'main.listUsers.show',
            'edit' => 'main.listUsers.edit',
            'update' => 'main.listUsers.update',
            'destroy' => 'main.listUsers.destroy',
>>>>>>> develop
        ]
    ]);
});