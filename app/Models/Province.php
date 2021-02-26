<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'lib_provinces';

    protected $fillable = [
        'psgc_province',
        'province_name'
    ];  
}
