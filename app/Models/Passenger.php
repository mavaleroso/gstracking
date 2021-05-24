<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    /**
     * Database table name
     */
    protected $table = 'passengers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'designation',
        'gender',
    ];
}
