<?php
namespace App\Services\Api;

use App\Models\Barangay;

class GetBrgy 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute(string $id)
    {
        return Barangay::where('id', $id)->first();
    }
}