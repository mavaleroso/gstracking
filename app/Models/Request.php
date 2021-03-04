<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        'code',
        'type_vehicle',
        'department',
        'purpose',
        'travel_date',
        'depart_time'    
    ];

    public function destinations(): HasOne
    {
        return $this->hasOne(Destination::class);
    }

    public function passengers(): HasOne
    {
        return $this->hasOne(Passenger::class);
    }
}
