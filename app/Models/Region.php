<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'lib_regions';

    protected $fillable = [
        'psgc_region',
        'region_name',
        'region_nick'               
    ];  
}
