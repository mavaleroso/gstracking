<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental_vehicle extends Model
{
    use HasFactory;

    protected $table = 'rental_vehicles';

    protected $fillable = [
        'vehicle_name',
        'vehicle_template',
        'driver_name',
        'driver_contact',
    ];  
}
