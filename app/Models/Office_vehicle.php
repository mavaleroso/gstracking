<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office_vehicle extends Model
{
    use HasFactory;

    protected $table = 'office_vehicles';

    protected $fillable = [
        'vehicle_id',
        'driver_id',
    ];  
}
