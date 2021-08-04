<?php

namespace App\Services\FuelCharges;

use App\Models\FuelCharges;

class UpdateFuelCharges
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute($fields, $url)
    {
        $fuelCharges = FuelCharges::where('id', $fields['id'])->update([
            'gasoline_liters' => ($fields['particulars'] == 'Gasoline') ? $fields['no_liters'] : 0,
            'diesel_liters' => ($fields['particulars'] == 'Diesel') ? $fields['no_liters'] : 0,
            'unit_price' => $fields['unit_price'],
            'amount' => $fields['amount']
        ]);

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Office_driver', 'lurl' => $url, 'laction' => 'create');
        $fuelCharges ? createLogs($arr) : NULL;

        return $fuelCharges;
    }
}
