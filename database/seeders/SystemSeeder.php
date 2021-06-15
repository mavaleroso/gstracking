<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\System;
use Carbon\Carbon;

class SystemSeeder extends Seeder
{

    private $system = [
        [
            'handler' => 'NAME',
            'value' => 'GSTracking'           
        ],
        [
            'handler' => 'DESCRIPTION',
            'value' => 'General Services Tracking System'
        ],
        [
            'handler' => 'VERSION',
            'value' => '01'
        ],
        [
            'handler' => 'MONTH',
            'value' => '01'
        ],
        [
            'handler' => 'YEAR',
            'value' => '2021'
        ],
        [
            'handler' => 'RQT_CODE',
            'value' => 'RQT-21-04-0000'
        ],
        [
            'handler' => 'TRIP_TICKET',
            'value' => '21-04-0000'
        ],
        [
            'handler' => 'REQUEST_GROUP',
            'value' => '1'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systems = $this->system;
        foreach ($systems as $key => $data) {
            System::create($data);
        }
    }
}
