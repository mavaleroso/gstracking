<?php

namespace App\Services\Api\v1;

use App\Models\Driver;

class GetAvailableDrivers
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute()
    {
        $drivers = Driver::select(['drivers.id AS driver_id', 'drivers.fullname', 'drivers.sex', 'drivers.contact', 'request_transactions.type', 'request_transactions.request_id'])
            ->leftJoin('transaction_vehicles AS tv', 'tv.driver_id', '=', 'drivers.id')
            ->leftJoin('request_transactions AS rt', 'rt.transaction_vehicles_id', '=', 'tv.id')
            ->where('drivers.type', 1)
            ->get();

        for ($i = 0; $i < count($drivers); $i++) {
            $results[] = [
                'id' => $drivers[$i]->driver_id,
                'fullname' => $drivers[$i]->fullname,
                'sex' => $drivers[$i]->sex,
                'contact' => $drivers[$i]->contact,
                'status' => $drivers[$i]->type ? $this->process_status($drivers[$i]->request_id, $drivers[$i]->type) : NULL
            ];
        }

        return $results;
    }

    public function process_status($id, $type)
    {
        # code...
    }
}
