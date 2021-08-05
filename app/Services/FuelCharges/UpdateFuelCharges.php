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
    public function execute($fields, $url, $id)
    {
        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'Fuel Charges', 'lurl' => $url, 'laction' => 'Update Fuel Charges');

        if (isset($fields['type'])) {
            $fuelCharges = FuelCharges::where('id', $id)->update([
                'gasoline_liters' => ($fields['particulars'] == 'Gasoline') ? $fields['no_liters'] : 0,
                'diesel_liters' => ($fields['particulars'] == 'Diesel') ? $fields['no_liters'] : 0,
                'unit_price' => $fields['unit_price'],
                'amount' => $fields['amount']
            ]);

            $fuelCharges ? createLogs($arr) : NULL;
        } else {
            $fuelCharges = FuelCharges::where('id', $id)->update([
                'status' => 1
            ]);
        }
        return $fuelCharges;
    }
}
