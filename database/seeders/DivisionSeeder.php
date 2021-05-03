<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{

    private $division = [
        [
            'division_code' => '0001',
            'division_name' => 'Finance Manangement Division',       
        ],
        [
            'division_code' => '0002',
            'division_name' => 'Personnel Division', 
        ],
        [
            'division_code' => '0003',
            'division_name' => 'Planning Division', 
        ],
        [
            'division_code' => '0004',
            'division_name' => 'ICTMS Division', 
        ],
        [
            'division_code' => '0005',
            'division_name' => 'Hr Division', 
        ]

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = $this->division;
        foreach ($divisions as $key => $data) {
            System::create($data);
        }
        //
    }
}
