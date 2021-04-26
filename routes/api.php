<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

Route::group(['prefix' => 'v1', 'namespace' => 'Api\V1', 'middleware' => 'locale.api'], function () {    
    
});

// AXIOS

Route::group(['namespace' => 'Ajax'], function () {
    Route::resource('region', 'RegionController', [
        'names' => [
            'index' => 'ajax.region.index',
            'show' => 'ajax.region.show',
        ]
    ]);

    Route::resource('province', 'ProvinceController', [
        'names' => [
            'index' => 'ajax.province.index',
            'show' => 'ajax.province.show',
        ]
    ]);

    Route::resource('city', 'CityController', [
        'names' => [
            'index' => 'ajax.city.index',
            'show' => 'ajax.city.show',
        ]
    ]);

    Route::resource('brgy', 'BarangayController', [
        'names' => [
            'index' => 'ajax.brgy.index',
            'show' => 'ajax.brgy.show',
        ]
    ]);

    Route::resource('destination', 'DestinationController', [
        'names' => [
            'index' => 'ajax.destination.index',
            'show' => 'ajax.destination.show',
        ]
    ]);

    Route::resource('passenger', 'PassengerController', [
        'names' => [
            'index' => 'ajax.passenger.index',
            'show' => 'ajax.passenger.show',
        ]
    ]);

    Route::resource('driver', 'DriverController', [
        'names' => [
            'index' => 'ajax.driver.index',
            'show' => 'ajax.driver.show',
        ]
    ]);

    Route::resource('vehicle', 'VehicleController', [
        'names' => [
            'index' => 'ajax.vehicle.index',
            'show' => 'ajax.vehicle.show',
        ]
    ]);

    Route::resource('serviceprovider', 'ServiceProviderController', [
        'names' => [
            'index' => 'ajax.serviceprovider.index',
            'show' => 'ajax.serviceprovider.show',
        ]
    ]);

    Route::resource('role', 'RoleController', [
        'names' => [
            'index' => 'ajax.role.index',
            'show' => 'ajax.role.show',
        ]
    ]);

    Route::resource('po', 'PoController', [
        'names' => [
            'index' => 'ajax.po.index',
            'show' => 'ajax.po.show',
        ]
    ]);
    Route::resource('tripticket', 'TripTicketController', [
        'names' => [
            'index' => 'ajax.tripticket.index',
            'show' => 'ajax.tripticket.show',
        ]
    ]);
    Route::resource('ponumber', 'PoController', [
        'names' => [
            'index' => 'ajax.ponumber.index',
            'show' => 'ajax.ponumber.show',
        ]
    ]);
});



