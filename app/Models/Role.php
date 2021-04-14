<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as Roles;

class Role extends Roles
{
    use ExtendedEloquentTrait;    
    use WithPaginate;                

    /**
     * Mass assignment column
     */
    protected $table = 'roles';
    protected $fillable = [
        'name',               
    ];    
}
