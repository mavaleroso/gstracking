<?php

namespace App\Models;

use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FuelCharge extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;
    use SoftDeletes;


    protected $table = 'drivers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'fullname',
        'birthdate',
        'sex',
        'contact',
        'status',
        'updated_at'
    ];
}
