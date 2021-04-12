<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Destination;
use App\Models\Passenger;

class Request extends Model
{
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'serial_code',
        'type_vehicle',
        'department',
        'purpose',
        'travel_date',
        'depart_time',
        'is_status'    
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
