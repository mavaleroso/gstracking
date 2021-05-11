<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    private $section = [
        [
            'division_id' => '1',
            'section_code' => 'ACCTG',
            'section_name' => 'Accounting',       
        ],
        [   
            'division_id' => '1',
            'section_code' => 'BDGT',
            'section_name' => 'Budget', 
        ],
        [
            'division_id' => '1',
            'section_code' => 'CASH',
            'section_name' => 'Cash', 
        ],
        [
            'division_id' => '2',
            'section_code' => 'DRR',
            'section_name' => 'Disaster Response & Rehabilitation', 
        ],
        [
            'division_id' => '2',
            'section_code' => 'DRIM',
            'section_name' => 'Disaster Response Information Mgt.', 
        ],
        [
            'division_id' => '2',
            'section_code' => 'RRO',
            'section_name' => 'Regional Resource Operation',       
        ],
        [
            'division_id' => '3',
            'section_code' => 'GR',
            'section_name' => 'General Services', 
        ],
        [
            'division_id' => '4',
            'section_code' => 'SLP',
            'section_name' => 'Sustainable Livelihood Program PMO', 
        ],
        [
            'division_id' => '4',
            'section_code' => 'KALAHI',
            'section_name' => 'Kalahi-Cidss Pmo', 
        ],
        [
            'division_id' => '5',
            'section_code' => 'ICT',
            'section_name' => 'Information Communication & Technology', 
        ],

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
            Section::create($data);
        }
        //
    }
}
