<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Traits\WithPaginate;

class Procurement extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'procurements';

    protected $fillable = [
        'id',
        'po_no',
        'po_amount',
        'balance',
        'status',
        'created_at',
        'updated_at',
    ];
}
