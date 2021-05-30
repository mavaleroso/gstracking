<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionVehicles extends Model
{
    use HasFactory;

    protected $table = 'transaction_vehicles';

    protected $fillable = [
        'type',
        'transaction_id',
        'vehicle_id',
        'driver_id',
        'starting_odo',
        'ending_odo',
        'travelled',
        'rate_per_km',
        'flat_rate',
        'rate_per_night',
        'nights_count',
        'total_cost',
    ];  
}
