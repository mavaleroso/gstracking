<?php
namespace App\Services\Core;

use App\Models\System;

class GenerateTripTicket 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute()
    {
        
    }

    public function trip_ticket()
    {
        $sysYear = substr(System::where('handler', 'YEAR')->first()->value,2,2);
        $sysMonth = System::where('handler', 'MONTH')->first()->value;
        $sysCode = explode('-',System::where('handler', 'TRIP_TICKET')->first()->value);
        $lastCode = 1;

        if ($sysYear == $sysCode[0]) {
            $lastCode = intval($sysCode[2]);
            if ($lastCode <= 9999) {
                $lastCode++;
            }
        }

        for ($i=strlen((string)$lastCode); $i < 4; $i++) { 
            $lastCode = '0'.$lastCode;
        }

        $nextCode = $sysYear.'-'.$sysMonth.'-'.$lastCode;
        return $nextCode;
    }
}