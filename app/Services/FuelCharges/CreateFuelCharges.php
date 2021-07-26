<?php

namespace App\Services\FuelCharges;

use App\Models\FuelCharges;
use App\Models\System;
use App\Services\Core\GenerateFRCode;

class CreateFuelCharges
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function __construct(GenerateFRCode $generateFRCode)
    {
        $this->generateFRCode = $generateFRCode;
    }

    public function execute($fields, $url)
    {
        $fr_code = $this->generateFRCode->fuel_request();
        $fuelCharges = FuelCharges::create([
            'code' => $fr_code,
            'vehicles_id' => $fields['vehicle_id'],
            'drivers_id' => $fields['driver_id'],
            'procurements_id' => $fields['po_id'],
            'purpose' => $fields['purpose']
        ]);

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Office_driver', 'lurl' => $url, 'laction' => 'create');
        if ($fuelCharges) {
            createLogs($arr);
            System::where('handler', 'FR_CODE')->update(['value' => $fr_code]);
        };

        return $fuelCharges;
    }
}
