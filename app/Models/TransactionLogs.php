<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionLogs extends Model
{
    protected $table = 'transaction_logs';
    // use HasFactory;
    protected $fillable = [
        'page',
        'url',
        'action',
        
    ];  
}
