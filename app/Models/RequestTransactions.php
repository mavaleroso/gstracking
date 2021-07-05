<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestTransactions extends Model
{
    protected $table = 'request_transactions';

    protected $fillable = [
        'type',
        'serial_code',
        'mot',
        'group',
        'request_id',
        'remarks',
        'transaction_vehicles_id'
    ];  
}
