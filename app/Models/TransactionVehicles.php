<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Request;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionVehicles extends Model
{
    use HasApiTokens, Notifiable, HasRoles, WithPaginate, SoftDeletes, ExtendedEloquentTrait;

    protected $table = 'transaction_vehicles';

    protected $fillable = [
        'type',
        'request_id',
        'trip_ticket',
        'vehicle_id',
        'driver_id',
        'procurement_id',
        'starting_odo',
        'ending_odo',
        'travelled',
        'rate_per_km',
        'fuel_charge',
        'fuel_liters',
        'flat_rate',
        'rate_per_night',
        'nights_count',
        'total_cost',
        'status',
    ];  
}
