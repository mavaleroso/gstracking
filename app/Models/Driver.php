<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Driver extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;


    protected $table = 'drivers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id',
        'fullname',
        'age',
        'sex',
        'contact',
        'updated_at'
    ];
}
