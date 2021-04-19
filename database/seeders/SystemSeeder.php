<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\System;

class SystemSeeder extends Seeder
{

    private $system = [
        [
            'id' => '1',
            'handler' => 'NAME',
            'value' => 'GSTracking'           
        ],
        [
            'id' => '2',
            'handler' => 'DESCRIPTION',
            'value' => 'General Services Tracking System'
        ],
        [
            'id' => '3',
            'handler' => 'VERSION',
            'value' => '01'
        ],
        [
            'id' => '4',
            'handler' => 'MONTH',
            'value' => '04'
        ],
        [
            'id' => '5',
            'handler' => 'YEAR',
            'value' => '2021'
        ],
        [  
            'id' => '6',
            'handler' => 'RQT_CODE',
            'value' => 'RQT-21-04-0001'
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
