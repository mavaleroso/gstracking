<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $table = 'lib_brgys';

    protected $fillable = [
        'psgc_brgy',
        'brgy_name'
    ];  
}
