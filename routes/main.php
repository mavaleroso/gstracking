<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;

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
Route::get('/local_requests', 'base\DashboardController@index');
Route::get('/rito_requests', 'base\DashboardController@index');
Route::get('/pending_travels', 'base\DashboardController@index');
Route::get('/approved_travels', 'base\DashboardController@index');
Route::get('/list_transportation', 'base\DashboardController@index');
Route::get('/transaction_logs', 'base\DashboardController@index');
Route::get('/list_transportation', 'base\DashboardController@index');
Route::get('/list_vehicle', 'base\DashboardController@index');
Route::get('/list_drivers', 'base\DashboardController@index');
Route::get('/list_po', 'base\DashboardController@index');
Route::get('/list_users', 'base\DashboardController@index');
Route::get('/travel_calendar', 'base\DashboardController@index');
Route::get('/print_request', 'base\PrintController@index')->name('main.print_request');
Route::get('/print_trip_ticket', 'base\PrintController@index')->name('main.print_ticket');

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

    Route::resource('localrequest', 'LocalRequestController', [
        'names' => [
            'index' => 'main.localrequest.index',
            'create' => 'main.localrequest.create',
            'store' => 'main.localrequest.store',
            'show' => 'main.localrequest.show',
            'edit' => 'main.localrequest.edit',
            'update' => 'main.localrequest.update',
            'destroy' => 'main.localrequest.destroy',
        ]
    ]);

    Route::resource('ritorequest', 'RitoRequestController', [
        'names' => [
            'index' => 'main.ritorequest.index',
            'create' => 'main.ritorequest.create',
            'store' => 'main.ritorequest.store',
            'show' => 'main.ritorequest.show',
            'edit' => 'main.ritorequest.edit',
            'update' => 'main.ritorequest.update',
            'destroy' => 'main.ritorequest.destroy',
        ]
    ]);

    Route::resource('listrequeststaff', 'ListRequestStaffController', [
        'names' => [
            'index' => 'main.listrequeststaff.index',
            'create' => 'main.listrequeststaff.create',
            'store' => 'main.listrequeststaff.store',
            'show' => 'main.listrequeststaff.show',
            'edit' => 'main.listrequeststaff.edit',
            'update' => 'main.listrequeststaff.update',
            'destroy' => 'main.listrequeststaff.destroy',
        ]
    ]);

    Route::resource('printrequest', 'PrintRequestController', [
        'names' => [
            'index' => 'main.printrequest.index',
            'create' => 'main.printrequest.create',
            'store' => 'main.printrequest.store',
            'show' => 'main.printrequest.show',
            'edit' => 'main.printrequest.edit',
            'update' => 'main.printrequest.update',
            'destroy' => 'main.printrequest.destroy',
        ]
    ]);

    Route::resource('printtripticket', 'PrintTripTicketController', [
        'names' => [
            'index' => 'main.printtripticket.index',
            'create' => 'main.printtripticket.create',
            'store' => 'main.printtripticket.store',
            'show' => 'main.printtripticket.show',
            'edit' => 'main.printtripticket.edit',
            'update' => 'main.printtripticket.update',
            'destroy' => 'main.printtripticket.destroy',
        ]
    ]);
    Route::post('listrequeststaff/declined/', 'ListRequestStaffController@declined');
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

    Route::resource('pendingtravels', 'PendingTravelsController', [
        'names' => [
            'index' => 'main.pendingtravels.index',
            'create' => 'main.pendingtravels.create',
            'store' => 'main.pendingtravels.store',
            'show' => 'main.pendingtravels.show',
            'edit' => 'main.pendingtravels.edit',
            'update' => 'main.pendingtravels.update',
            'destroy' => 'main.pendingtravels.destroy',
        ]
    ]);

    Route::resource('travelcalendar', 'TravelCalendarController', [
        'names' => [
            'index' => 'main.travelcalendar.index',
            'create' => 'main.travelcalendar.create',
            'store' => 'main.travelcalendar.store',
            'show' => 'main.travelcalendar.show',
            'edit' => 'main.travelcalendar.edit',
            'update' => 'main.travelcalendar.update',
            'destroy' => 'main.travelcalendar.destroy',
        ]
    ]);
    Route::put('listtravel/undo/{id}', 'ListTravelController@undo');
});

Route::group(['prefix' => 'users', 'namespace' => 'Main'], function () {
    Route::resource('listUsers', 'ListUserController', [
        'names' => [
            'index' => 'main.listUsers.index',
            'create' => 'main.listUsers.create',
            'store' => 'main.listUsers.store',
            'show' => 'main.listUsers.show',
            'edit' => 'main.listUsers.edit',
            'update' => 'main.listUsers.update',
            'destroy' => 'main.listUsers.destroy',
        ]
    ]);
});
