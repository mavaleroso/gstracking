<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Request;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Traits\WithPaginate;

class Transaction extends Model
{
    use HasApiTokens, Notifiable, HasRoles, WithPaginate;
    use ExtendedEloquentTrait;

    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'procurement_id',
        'trip_ticket',
        'date_submit_proc',
        'created_at',
        'remarks',
    ];
}
