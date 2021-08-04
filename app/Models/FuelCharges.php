<?php

namespace App\Models;

use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FuelCharges extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;
    use SoftDeletes;


    protected $table = 'fuel_charges';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'drivers_id',
        'vehicles_id',
        'procurements_id',
        'purpose',
        'gasoline_liters',
        'diesel_liters',
        'unit_price',
        'amount',
        'status',
    ];
}
