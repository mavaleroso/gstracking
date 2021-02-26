<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    private $regions = [
        [
          'id' => '1',
          'psgc_region' => '130000000',
          'region_name' => 'NCR [National Capital Region]',
          'region_nick' => 'NCR',
        ],
        [
          'id' => '2',
          'psgc_region' => '140000000',
          'region_name' => 'CAR [Cordillera Administrative Region]',
          'region_nick' => 'CAR',
        ],
        [
          'id' => '3',
          'psgc_region' => '010000000',
          'region_name' => 'REGION I [Ilocos Region]',
          'region_nick' => 'I',
        ],
        [
          'id' => '4',
          'psgc_region' => '020000000',
          'region_name' => 'REGION II [Cagayan Valley]',
          'region_nick' => 'II',
        ],
        [
          'id' => '5',
          'psgc_region' => '030000000',
          'region_name' => 'REGION III [Central Luzon]',
          'region_nick' => 'III',
        ],
        [
          'id' => '6',
          'psgc_region' => '040000000',
          'region_name' => 'REGION IV-A [CALABARZON]',
          'region_nick' => 'IV-A',
        ],
        [
          'id' => '7',
          'psgc_region' => '170000000',
          'region_name' => 'REGION IV-B [MIMAROPA]',
          'region_nick' => 'IV-B',
        ],
        [
          'id' => '8',
          'psgc_region' => '050000000',
          'region_name' => 'REGION V [Bicol Region]',
          'region_nick' => 'V',
        ],
        [
          'id' => '9',
          'psgc_region' => '060000000',
          'region_name' => 'REGION VI [Western Visayas]',
          'region_nick' => 'VI',
        ],
        [
          'id' => '10',
          'psgc_region' => '070000000',
          'region_name' => 'REGION VII [Central Visayas]',
          'region_nick' => 'VII',
        ],
        [
          'id' => '11',
          'psgc_region' => '080000000',
          'region_name' => 'REGION VIII [Eastern Visayas]',
          'region_nick' => 'VIII',
        ],
        [
          'id' => '12',
          'psgc_region' => '090000000',
          'region_name' => 'REGION IX [Zamboanga Peninsula]',
          'region_nick' => 'IX',
        ],
        [
          'id' => '13',
          'psgc_region' => '100000000',
          'region_name' => 'REGION X [Northern Mindanao]',
          'region_nick' => 'X',
        ],
        [
          'id' => '14',
          'psgc_region' => '110000000',
          'region_name' => 'REGION XI [Davao Region]',
          'region_nick' => 'XI',
        ],
        [
          'id' => '15',
          'psgc_region' => '120000000',
          'region_name' => 'REGION XII [Soccsksargen]',
          'region_nick' => 'XII',
        ],
        [
          'id' => '16',
          'psgc_region' => '160000000',
          'region_name' => 'REGION XIII [Caraga]',
          'region_nick' => 'CARAGA',
        ],
        [
          'id' => '17',
          'psgc_region' => '150000000',
          'region_name' => 'ARMM [Autonomous Region in Muslim Mindanao]',
          'region_nick' => 'ARMM',
        ],
        [
          'id' => '19',
          'psgc_region' => '180000000',
          'region_name' => 'NIR - Negros Island Region',
          'region_nick' => 'NIR',
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = $this->regions;
        foreach ($regions as $key => $data) {
            Region::create($data);
        }
    }
}
