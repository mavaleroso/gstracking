<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Models\Destination;
use App\Models\Passenger;
use App\Traits\WithPaginate;


class Request extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;
    
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'division_id',
        'section_id',
        'type_vehicle',
        'department',
        'purpose',
        'travel_date',
        'return_date',
        'depart_time',
        'is_status',
        'remarks'   
    ];

    public function destinations(): HasMany
    {
        return $this->hasMany(Destination::class);
    }

    public function passengers(): HasMany
    {
        return $this->hasMany(Passenger::class);
    }
}
