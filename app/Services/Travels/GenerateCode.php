<?php
namespace App\Services\Travels;

use App\Models\System;

class GenerateCode 
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

    public function request_code()
    {
        $sysYear = substr(System::where('handler', 'YEAR')->first()->value,2,2);
        $sysMonth = System::where('handler', 'MONTH')->first()->value;
        $sysCode = explode('-',System::where('handler', 'RQT_CODE')->first()->value);
        $lastCode = 1;

        if ($sysYear == $sysCode[1]) {
            $lastCode = intval($sysCode[3]);
            if ($lastCode <= 9999) {
                $lastCode++;
            }
        }

        for ($i=strlen((string)$lastCode); $i < 4; $i++) { 
            $lastCode = '0'.$lastCode;
        }

        $nextCode = 'RQT-'.$sysYear.'-'.$sysMonth.'-'.$lastCode;
        return $nextCode;
    }
}