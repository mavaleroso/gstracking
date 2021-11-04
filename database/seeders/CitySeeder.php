<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    private $cities = [
      [
          'id'=> '7',
          'province_id'=> '71',
          'psgc_city'=> '160202000',
          'city_name'=> 'BUTUAN CITY (Capital)'
      ],
      [
          'id'=> '21',
          'province_id'=> '72',
          'psgc_city'=> '160301000',
          'city_name'=> 'CITY OF BAYUGAN'
      ],
      [
          'id'=> '22',
          'province_id'=> '73',
          'psgc_city'=> '166803000',
          'city_name'=> 'CITY OF BISLIG'
      ],
      [
          'id'=> '25',
          'province_id'=> '71',
          'psgc_city'=> '160203000',
          'city_name'=> 'CITY OF CABADBARAN'
      ],
      [
          'id'=> '78',
          'province_id'=> '73',
          'psgc_city'=> '166819000',
          'city_name'=> 'CITY OF TANDAG (Capital)'
      ],
      [
          'id'=> '127',
          'province_id'=> '74',
          'psgc_city'=> '166724000',
          'city_name'=> 'SURIGAO CITY (Capital)'
      ],
      [
          'id'=> '167',
          'province_id'=> '74',
          'psgc_city'=> '166701000',
          'city_name'=> 'ALEGRIA'
      ],
      [
          'id'=> '234',
          'province_id'=> '74',
          'psgc_city'=> '166702000',
          'city_name'=> 'BACUAG'
      ],
      [
          'id'=> '299',
          'province_id'=> '73',
          'psgc_city'=> '166801000',
          'city_name'=> 'BAROBO'
      ],
      [
          'id'=> '307',
          'province_id'=> '75',
          'psgc_city'=> '168501000',
          'city_name'=> 'BASILISA (RIZAL)'
      ],
      [
          'id'=> '324',
          'province_id'=> '73',
          'psgc_city'=> '166802000',
          'city_name'=> 'BAYABAS'
      ],
      [
          'id'=> '370',
          'province_id'=> '71',
          'psgc_city'=> '160201000',
          'city_name'=> 'BUENAVISTA'
      ],
      [
          'id'=> '386',
          'province_id'=> '72',
          'psgc_city'=> '160302000',
          'city_name'=> 'BUNAWAN'
      ],
      [
          'id'=> '393',
          'province_id'=> '74',
          'psgc_city'=> '166704000',
          'city_name'=> 'BURGOS'
      ],
      [
          'id'=> '413',
          'province_id'=> '75',
          'psgc_city'=> '168502000',
          'city_name'=> 'CAGDIANAO'
      ],
      [
          'id'=> '414',
          'province_id'=> '73',
          'psgc_city'=> '166804000',
          'city_name'=> 'CAGWAIT'
      ],
      [
          'id'=> '448',
          'province_id'=> '73',
          'psgc_city'=> '166805000',
          'city_name'=> 'CANTILAN'
      ],
      [
          'id'=> '465',
          'province_id'=> '71',
          'psgc_city'=> '160204000',
          'city_name'=> 'CARMEN'
      ],
      [
          'id'=> '466',
          'province_id'=> '73',
          'psgc_city'=> '166806000',
          'city_name'=> 'CARMEN'
      ],
      [
          'id'=> '469',
          'province_id'=> '73',
          'psgc_city'=> '166807000',
          'city_name'=> 'CARRASCAL'
      ],
      [
          'id'=> '488',
          'province_id'=> '74',
          'psgc_city'=> '166706000',
          'city_name'=> 'CLAVER'
      ],
      [
          'id'=> '507',
          'province_id'=> '73',
          'psgc_city'=> '166808000',
          'city_name'=> 'CORTES'
      ],
      [
          'id'=> '527',
          'province_id'=> '74',
          'psgc_city'=> '166707000',
          'city_name'=> 'DAPA'
      ],
      [
          'id'=> '542',
          'province_id'=> '74',
          'psgc_city'=> '166708000',
          'city_name'=> 'DEL CARMEN'
      ],
      [
          'id'=> '551',
          'province_id'=> '75',
          'psgc_city'=> '168503000',
          'city_name'=> 'DINAGAT'
      ],
      [
          'id'=> '589',
          'province_id'=> '72',
          'psgc_city'=> '160303000',
          'city_name'=> 'ESPERANZA'
      ],
      [
          'id'=> '612',
          'province_id'=> '74',
          'psgc_city'=> '166710000',
          'city_name'=> 'GENERAL LUNA'
      ],
      [
          'id'=> '619',
          'province_id'=> '74',
          'psgc_city'=> '166711000',
          'city_name'=> 'GIGAQUIT'
      ],
      [
          'id'=> '655',
          'province_id'=> '73',
          'psgc_city'=> '166809000',
          'city_name'=> 'HINATUAN'
      ],
      [
          'id'=> '689',
          'province_id'=> '71',
          'psgc_city'=> '160205000',
          'city_name'=> 'JABONGA'
      ],
      [
          'id'=> '746',
          'province_id'=> '71',
          'psgc_city'=> '160206000',
          'city_name'=> 'KITCHARAO'
      ],
      [
          'id'=> '754',
          'province_id'=> '72',
          'psgc_city'=> '160304000',
          'city_name'=> 'LA PAZ'
      ],
      [
          'id'=> '780',
          'province_id'=> '73',
          'psgc_city'=> '166810000',
          'city_name'=> 'LANUZA'
      ],
      [
          'id'=> '787',
          'province_id'=> '71',
          'psgc_city'=> '160207000',
          'city_name'=> 'LAS NIEVES'
      ],
      [
          'id'=> '803',
          'province_id'=> '73',
          'psgc_city'=> '166811000',
          'city_name'=> 'LIANGA'
      ],
      [
          'id'=> '808',
          'province_id'=> '75',
          'psgc_city'=> '168504000',
          'city_name'=> 'LIBJO (ALBOR)'
      ],
      [
          'id'=> '826',
          'province_id'=> '73',
          'psgc_city'=> '166812000',
          'city_name'=> 'LINGIG'
      ],
      [
          'id'=> '838',
          'province_id'=> '72',
          'psgc_city'=> '160305000',
          'city_name'=> 'LORETO'
      ],
      [
          'id'=> '839',
          'province_id'=> '75',
          'psgc_city'=> '168505000',
          'city_name'=> 'LORETO'
      ],
      [
          'id'=> '883',
          'province_id'=> '73',
          'psgc_city'=> '166813000',
          'city_name'=> 'MADRID'
      ],
      [
          'id'=> '887',
          'province_id'=> '71',
          'psgc_city'=> '160208000',
          'city_name'=> 'MAGALLANES'
      ],
      [
          'id'=> '906',
          'province_id'=> '74',
          'psgc_city'=> '166714000',
          'city_name'=> 'MAINIT'
      ],
      [
          'id'=> '920',
          'province_id'=> '74',
          'psgc_city'=> '166715000',
          'city_name'=> 'MALIMONO'
      ],
      [
          'id'=> '962',
          'province_id'=> '73',
          'psgc_city'=> '166814000',
          'city_name'=> 'MARIHATAG'
      ],
      [
          'id'=> '1035',
          'province_id'=> '71',
          'psgc_city'=> '160209000',
          'city_name'=> 'NASIPIT'
      ],
      [
          'id'=> '1144',
          'province_id'=> '74',
          'psgc_city'=> '166716000',
          'city_name'=> 'PILAR'
      ],
      [
          'id'=> '1164',
          'province_id'=> '74',
          'psgc_city'=> '166717000',
          'city_name'=> 'PLACER'
      ],
      [
          'id'=> '1188',
          'province_id'=> '72',
          'psgc_city'=> '160306000',
          'city_name'=> 'PROSPERIDAD (Capital)'
      ],
      [
          'id'=> '1213',
          'province_id'=> '71',
          'psgc_city'=> '160212000',
          'city_name'=> 'REMEDIOS T. ROMUALDEZ'
      ],
      [
          'id'=> '1226',
          'province_id'=> '72',
          'psgc_city'=> '160307000',
          'city_name'=> 'ROSARIO'
      ],
      [
          'id'=> '1256',
          'province_id'=> '73',
          'psgc_city'=> '166815000',
          'city_name'=> 'SAN AGUSTIN'
      ],
      [
          'id'=> '1266',
          'province_id'=> '74',
          'psgc_city'=> '166718000',
          'city_name'=> 'SAN BENITO'
      ],
      [
          'id'=> '1280',
          'province_id'=> '72',
          'psgc_city'=> '160308000',
          'city_name'=> 'SAN FRANCISCO'
      ],
      [
          'id'=> '1283',
          'province_id'=> '74',
          'psgc_city'=> '166719000',
          'city_name'=> 'SAN FRANCISCO (ANAO-AON)'
      ],
      [
          'id'=> '1297',
          'province_id'=> '74',
          'psgc_city'=> '166720000',
          'city_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '1309',
          'province_id'=> '75',
          'psgc_city'=> '168506000',
          'city_name'=> 'SAN JOSE (Capital)'
      ],
      [
          'id'=> '1323',
          'province_id'=> '72',
          'psgc_city'=> '160309000',
          'city_name'=> 'SAN LUIS'
      ],
      [
          'id'=> '1339',
          'province_id'=> '73',
          'psgc_city'=> '166816000',
          'city_name'=> 'SAN MIGUEL'
      ],
      [
          'id'=> '1386',
          'province_id'=> '72',
          'psgc_city'=> '160310000',
          'city_name'=> 'SANTA JOSEFA'
      ],
      [
          'id'=> '1398',
          'province_id'=> '74',
          'psgc_city'=> '166721000',
          'city_name'=> 'SANTA MONICA (SAPAO)'
      ],
      [
          'id'=> '1406',
          'province_id'=> '71',
          'psgc_city'=> '160210000',
          'city_name'=> 'SANTIAGO'
      ],
      [
          'id'=> '1439',
          'province_id'=> '72',
          'psgc_city'=> '160314000',
          'city_name'=> 'SIBAGAT'
      ],
      [
          'id'=> '1464',
          'province_id'=> '74',
          'psgc_city'=> '166722000',
          'city_name'=> 'SISON'
      ],
      [
          'id'=> '1467',
          'province_id'=> '74',
          'psgc_city'=> '166723000',
          'city_name'=> 'SOCORRO'
      ],
      [
          'id'=> '1502',
          'province_id'=> '74',
          'psgc_city'=> '166725000',
          'city_name'=> 'TAGANA-AN'
      ],
      [
          'id'=> '1504',
          'province_id'=> '73',
          'psgc_city'=> '166817000',
          'city_name'=> 'TAGBINA'
      ],
      [
          'id'=> '1506',
          'province_id'=> '73',
          'psgc_city'=> '166818000',
          'city_name'=> 'TAGO'
      ],
      [
          'id'=> '1511',
          'province_id'=> '72',
          'psgc_city'=> '160311000',
          'city_name'=> 'TALACOGON'
      ],
      [
          'id'=> '1570',
          'province_id'=> '72',
          'psgc_city'=> '160312000',
          'city_name'=> 'TRENTO'
      ],
      [
          'id'=> '1574',
          'province_id'=> '75',
          'psgc_city'=> '168507000',
          'city_name'=> 'TUBAJON'
      ],
      [
          'id'=> '1577',
          'province_id'=> '71',
          'psgc_city'=> '160211000',
          'city_name'=> 'TUBAY'
      ],
      [
          'id'=> '1581',
          'province_id'=> '74',
          'psgc_city'=> '166727000',
          'city_name'=> 'TUBOD'
      ],
      [
          'id'=> '1610',
          'province_id'=> '72',
          'psgc_city'=> '160313000',
          'city_name'=> 'VERUELA'
      ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = $this->cities;
        foreach ($cities as $key => $data) {
            City::create($data);
        }
    }
}
