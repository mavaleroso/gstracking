<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'lib_cities';

    protected $fillable = [
        'psgc_city',
        'city_name'
    ];  
}
