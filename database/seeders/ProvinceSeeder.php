<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{

    private $provinces = [
        [
          'id'=> '71',
          'region_id'=> '16',
          'psgc_province'=> '160200000',
          'province_name'=> 'AGUSAN DEL NORTE', 
        ],
        [
          'id'=> '72',
          'region_id'=> '16',
          'psgc_province'=> '160300000',
          'province_name'=> 'AGUSAN DEL SUR', 
        ],
        [
          'id'=> '73',
          'region_id'=> '16',
          'psgc_province'=> '166800000',
          'province_name'=> 'SURIGAO DEL SUR',    
        ],
        [
          'id'=> '74',
          'region_id'=> '16',
          'psgc_province'=> '166700000',
          'province_name'=> 'SURIGAO DEL NORTE',   
        ],
        [
          'id'=> '75',
          'region_id'=> '16',
          'psgc_province'=> '168500000',
          'province_name'=> 'DINAGAT ISLANDS',   
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $provinces = $this->provinces;
        foreach ($provinces as $key => $data) {
            Province::create($data);
        }
    }
}
