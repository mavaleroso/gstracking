<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
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
        'age',
        'sex',
        'contact',
        'status',
        'updated_at'
    ];
}
