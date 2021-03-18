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
        'service_provider_id',
        'vehicle_type',
        'image',
        'name',
        'description',
        'template',
        'capacity'
    ];
}
