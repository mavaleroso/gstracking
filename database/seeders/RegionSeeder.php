<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    private $regions = [
        [
          'id' => '16',
          'psgc_region' => '160000000',
          'region_name' => 'REGION XIII [Caraga]',
          'region_nick' => 'CARAGA',
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
