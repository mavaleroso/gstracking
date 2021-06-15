<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestTransactions extends Model
{
    protected $table = 'request_transactions';

    protected $fillable = [
        'type',
        'group',
        'request_id',
        'transaction_vehicles_id'
    ];  
}
