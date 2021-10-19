<?php
namespace App\Services\Users;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;

class UpdateRoles 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($id, $fields)
    {
        $driver = User::where('id', $id)->update([
            'roles_id' => $fields['roles_id'],
        ]);
        $driver = UserDetail::where('user_id', $id)->update([
            'is_active' => $fields['status'],
        ]);
        return $driver;
    }
}   