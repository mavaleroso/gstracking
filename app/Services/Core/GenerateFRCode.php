<?php

namespace App\Services\Core;

use App\Models\System;

class GenerateFRCode
{
    public function fuel_request()
    {
        $sysYear = substr(System::where('handler', 'YEAR')->first()->value, 2, 2);
        $sysMonth = System::where('handler', 'MONTH')->first()->value;
        $sysCode = explode('-', System::where('handler', 'FR_CODE')->first()->value);
        $lastCode = 1;

        if ($sysYear == $sysCode[1]) {
            $lastCode = intval($sysCode[3]);
            if ($lastCode <= 9999) {
                $lastCode++;
            }
        }

        for ($i = strlen((string)$lastCode); $i < 4; $i++) {
            $lastCode = '0' . $lastCode;
        }

        $nextCode = 'FR-' . $sysYear . '-' . $sysMonth . '-' . $lastCode;
        return $nextCode;
    }
}
