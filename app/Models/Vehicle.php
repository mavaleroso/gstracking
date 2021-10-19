<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Vehicle extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;
    /**
     * Database table name
     */
    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'name',
        'description',
        'plate_no',
        'capacity',
        'status',
        'remarks',
        'type'
    ];
}
