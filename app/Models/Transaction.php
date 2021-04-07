<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Transaction extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'vehicle_id',
        'procurement_id',
        'trip_ticket',
        'starting_odo',
        'ending_odo',
        'date_submit_proc',
        'travelled',
        'rate_per_km',
        'flat_rate',
        'nights_count',
        'total_cost',
        'created_at',
    ];
}
