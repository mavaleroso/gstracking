<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class ServiceProvider extends Model
{

    use ExtendedEloquentTrait;
    use WithPaginate;
    protected $table = 'service_providers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'company_name',
        'vehicle_count'
    ];
}


