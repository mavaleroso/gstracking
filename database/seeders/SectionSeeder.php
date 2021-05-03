<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    private $section = [
        [
            'division_code' => '0011',
            'division_name' => 'Accounting section',       
        ],
        [
            'division_code' => '0012',
            'division_name' => 'Budget section', 
        ],
        [
            'division_code' => '0013',
            'division_name' => 'Cash section', 
        ],
        [
            'division_code' => '0021',
            'division_name' => 'ICTMS section', 
        ],
        [
            'division_code' => '0022',
            'division_name' => 'Personnel section', 
        ]

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = $this->section;
        foreach ($sections as $key => $data) {
            System::create($data);
        }
        //
    }
}
