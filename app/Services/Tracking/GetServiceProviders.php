<?php
namespace App\Services\Tracking;

use App\Models\ServiceProvider;

class GetServiceProviders 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute()
    {
        return ServiceProvider::all();
    }
}