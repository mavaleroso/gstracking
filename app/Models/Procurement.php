<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procurement extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;
    use SoftDeletes;

    protected $table = 'procurements';

    protected $fillable = [
        'id',
        'po_no',
        'po_amount',
        'status',
        'created_at',
        'updated_at',
        'type',
    ];
}
