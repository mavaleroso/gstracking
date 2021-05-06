<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{

    private $division = [
        [
            'division_code' => 'FMD',
            'division_name' => 'Finance Manangement Division',       
        ],
        [
            'division_code' => 'DRD',
            'division_name' => 'Disaster Response Division', 
        ],
        [
            'division_code' => 'AD',
            'division_name' => 'Administrative Division', 
        ],
        [
            'division_code' => 'PSD',
            'division_name' => 'Promotive Services Division', 
        ],
        [
            'division_code' => 'PPD',
            'division_name' => 'Policy & Plans Division', 
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
            Division::create($data);
        }
        //
    }
}
