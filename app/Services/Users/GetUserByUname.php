<?php

namespace App\Services\Users;

use App\Models\User;

class GetUserByUname
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute(string $uname)
    {
        return User::where('username', $uname)->first();
    }
}
