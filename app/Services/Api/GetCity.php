<?php
namespace App\Services\Api;

use App\Models\Barangay;
use App\Models\City;

class GetCity 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute(string $id)
    {
        $cityId = Barangay::where('id', $id)->first();
        return City::where('id', $cityId->city_id)->first();
    }
}