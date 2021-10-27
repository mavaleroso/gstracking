<?php

namespace App\Services\Users;

use App\Services\Users\GetUserByUname;
use App\Models\User;


class LoginUser
{
    /**
     * @var GetUserByEmail $getUserByEmail
     */
    protected $getUserByEmail;

    /**
     * Initialization
     */
    public function __construct(GetUserByUname $getUserByUname)
    {
        $this->getUserByUname = $getUserByUname;
    }

    /**
     * Login user
     *
     * @param array $data
     * @return int
     */
    public function execute(array $data)
    {
        $user = $this->getUserByUname->execute($data['username']);
        if (!isset($user))
            return User::LOGIN_BAD_CREDENTIALS;
        // Check if active
        // if ($user->details->is_active) {
            // Attempt
            if (!auth('users')->attempt($data)) {
                // Event here
                return User::LOGIN_BAD_CREDENTIALS;
            }
            // Success
            return User::LOGIN_SUCCESS;
        // } else
        //     return User::LOGIN_INACTIVE;
    }
}
