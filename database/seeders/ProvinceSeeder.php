<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{

    private $provinces = [
        [
          'id' => '1',
          'region_id' => '2',
          'psgc_province' => '144400000',
          'province_name' => 'MOUNTAIN PROVINCE'
        ],
        [
          'id' => '2',
          'region_id' => '2',
          'psgc_province' => '142700000',
          'province_name' => 'IFUGAO'
        ],
        [
          'id' => '3',
          'region_id' => '2',
          'psgc_province' => '141100000',
          'province_name' => 'BENGUET'
        ],
        [
          'id' => '4',
          'region_id' => '2',
          'psgc_province' => '140100000',
          'province_name' => 'ABRA'
        ],
        [
          'id' => '5',
          'region_id' => '2',
          'psgc_province' => '148100000',
          'province_name' => 'APAYAO'
        ],
        [
          'id' => '6',
          'region_id' => '2',
          'psgc_province' => '143200000',
          'province_name' => 'KALINGA'
        ],
        [
          'id' => '7',
          'region_id' => '3',
          'psgc_province' => '013300000',
          'province_name' => 'LA UNION'
        ],
        [
          'id' => '8',
          'region_id' => '3',
          'psgc_province' => '012800000',
          'province_name' => 'ILOCOS NORTE'
        ],
        [
          'id' => '9',
          'region_id' => '3',
          'psgc_province' => '012900000',
          'province_name' => 'ILOCOS SUR'
        ],
        [
          'id' => '10',
          'region_id' => '3',
          'psgc_province' => '015500000',
          'province_name' => 'PANGASINAN'
        ],
        [
          'id' => '11',
          'region_id' => '4',
          'psgc_province' => '025000000',
          'province_name' => 'NUEVA VIZCAYA'
        ],
        [
          'id' => '12',
          'region_id' => '4',
          'psgc_province' => '021500000',
          'province_name' => 'CAGAYAN'
        ],
        [
          'id' => '13',
          'region_id' => '4',
          'psgc_province' => '023100000',
          'province_name' => 'ISABELA'
        ],
        [
          'id' => '14',
          'region_id' => '4',
          'psgc_province' => '025700000',
          'province_name' => 'QUIRINO'
        ],
        [
          'id' => '15',
          'region_id' => '4',
          'psgc_province' => '020900000',
          'province_name' => 'BATANES'
        ],
        [
          'id' => '16',
          'region_id' => '5',
          'psgc_province' => '030800000',
          'province_name' => 'BATAAN'
        ],
        [
          'id' => '17',
          'region_id' => '5',
          'psgc_province' => '037100000',
          'province_name' => 'ZAMBALES'
        ],
        [
          'id' => '18',
          'region_id' => '5',
          'psgc_province' => '036900000',
          'province_name' => 'TARLAC'
        ],
        [
          'id' => '19',
          'region_id' => '5',
          'psgc_province' => '035400000',
          'province_name' => 'PAMPANGA'
        ],
        [
          'id' => '20',
          'region_id' => '5',
          'psgc_province' => '031400000',
          'province_name' => 'BULACAN'
        ],
        [
          'id' => '21',
          'region_id' => '5',
          'psgc_province' => '034900000',
          'province_name' => 'NUEVA ECIJA'
        ],
        [
          'id' => '22',
          'region_id' => '5',
          'psgc_province' => '037700000',
          'province_name' => 'AURORA'
        ],
        [
          'id' => '23',
          'region_id' => '6',
          'psgc_province' => '045800000',
          'province_name' => 'RIZAL'
        ],
        [
          'id' => '24',
          'region_id' => '6',
          'psgc_province' => '042100000',
          'province_name' => 'CAVITE'
        ],
        [
          'id' => '25',
          'region_id' => '6',
          'psgc_province' => '043400000',
          'province_name' => 'LAGUNA'
        ],
        [
          'id' => '26',
          'region_id' => '6',
          'psgc_province' => '041000000',
          'province_name' => 'BATANGAS'
        ],
        [
          'id' => '27',
          'region_id' => '6',
          'psgc_province' => '045600000',
          'province_name' => 'QUEZON'
        ],
        [
          'id' => '28',
          'region_id' => '7',
          'psgc_province' => '175100000',
          'province_name' => 'OCCIDENTAL MINDORO'
        ],
        [
          'id' => '29',
          'region_id' => '7',
          'psgc_province' => '175200000',
          'province_name' => 'ORIENTAL MINDORO'
        ],
        [
          'id' => '30',
          'region_id' => '7',
          'psgc_province' => '175900000',
          'province_name' => 'ROMBLON'
        ],
        [
          'id' => '31',
          'region_id' => '7',
          'psgc_province' => '175300000',
          'province_name' => 'PALAWAN'
        ],
        [
          'id' => '32',
          'region_id' => '7',
          'psgc_province' => '174000000',
          'province_name' => 'MARINDUQUE'
        ],
        [
          'id' => '33',
          'region_id' => '8',
          'psgc_province' => '052000000',
          'province_name' => 'CATANDUANES'
        ],
        [
          'id' => '34',
          'region_id' => '8',
          'psgc_province' => '051600000',
          'province_name' => 'CAMARINES NORTE'
        ],
        [
          'id' => '35',
          'region_id' => '8',
          'psgc_province' => '056200000',
          'province_name' => 'SORSOGON'
        ],
        [
          'id' => '36',
          'region_id' => '8',
          'psgc_province' => '050500000',
          'province_name' => 'ALBAY'
        ],
        [
          'id' => '37',
          'region_id' => '8',
          'psgc_province' => '054100000',
          'province_name' => 'MASBATE'
        ],
        [
          'id' => '38',
          'region_id' => '8',
          'psgc_province' => '051700000',
          'province_name' => 'CAMARINES SUR'
        ],
        [
          'id' => '39',
          'region_id' => '9',
          'psgc_province' => '061900000',
          'province_name' => 'CAPIZ'
        ],
        [
          'id' => '40',
          'region_id' => '9',
          'psgc_province' => '060400000',
          'province_name' => 'AKLAN'
        ],
        [
          'id' => '41',
          'region_id' => '9',
          'psgc_province' => '060600000',
          'province_name' => 'ANTIQUE'
        ],
        [
          'id' => '42',
          'region_id' => '19',
          'psgc_province' => '184500000',
          'province_name' => 'NEGROS OCCIDENTAL'
        ],
        [
          'id' => '43',
          'region_id' => '9',
          'psgc_province' => '063000000',
          'province_name' => 'ILOILO'
        ],
        [
          'id' => '44',
          'region_id' => '9',
          'psgc_province' => '067900000',
          'province_name' => 'GUIMARAS'
        ],
        [
          'id' => '45',
          'region_id' => '19',
          'psgc_province' => '184600000',
          'province_name' => 'NEGROS ORIENTAL'
        ],
        [
          'id' => '46',
          'region_id' => '10',
          'psgc_province' => '072200000',
          'province_name' => 'CEBU'
        ],
        [
          'id' => '47',
          'region_id' => '10',
          'psgc_province' => '071200000',
          'province_name' => 'BOHOL'
        ],
        [
          'id' => '48',
          'region_id' => '10',
          'psgc_province' => '076100000',
          'province_name' => 'SIQUIJOR'
        ],
        [
          'id' => '49',
          'region_id' => '11',
          'psgc_province' => '086400000',
          'province_name' => 'SOUTHERN LEYTE'
        ],
        [
          'id' => '50',
          'region_id' => '11',
          'psgc_province' => '082600000',
          'province_name' => 'EASTERN SAMAR'
        ],
        [
          'id' => '51',
          'region_id' => '11',
          'psgc_province' => '084800000',
          'province_name' => 'NORTHERN SAMAR'
        ],
        [
          'id' => '52',
          'region_id' => '11',
          'psgc_province' => '086000000',
          'province_name' => 'SAMAR (WESTERN SAMAR)'
        ],
        [
          'id' => '53',
          'region_id' => '11',
          'psgc_province' => '083700000',
          'province_name' => 'LEYTE'
        ],
        [
          'id' => '54',
          'region_id' => '11',
          'psgc_province' => '087800000',
          'province_name' => 'BILIRAN'
        ],
        [
          'id' => '55',
          'region_id' => '12',
          'psgc_province' => '098300000',
          'province_name' => 'ZAMBOANGA SIBUGAY'
        ],
        [
          'id' => '56',
          'region_id' => '12',
          'psgc_province' => '097200000',
          'province_name' => 'ZAMBOANGA DEL NORTE'
        ],
        [
          'id' => '57',
          'region_id' => '12',
          'psgc_province' => '097300000',
          'province_name' => 'ZAMBOANGA DEL SUR'
        ],
        [
          'id' => '58',
          'region_id' => '13',
          'psgc_province' => '104200000',
          'province_name' => 'MISAMIS OCCIDENTAL'
        ],
        [
          'id' => '59',
          'region_id' => '13',
          'psgc_province' => '101300000',
          'province_name' => 'BUKIDNON'
        ],
        [
          'id' => '60',
          'region_id' => '13',
          'psgc_province' => '103500000',
          'province_name' => 'LANAO DEL NORTE'
        ],
        [
          'id' => '61',
          'region_id' => '13',
          'psgc_province' => '104300000',
          'province_name' => 'MISAMIS ORIENTAL'
        ],
        [
          'id' => '62',
          'region_id' => '13',
          'psgc_province' => '101800000',
          'province_name' => 'CAMIGUIN'
        ],
        [
          'id' => '63',
          'region_id' => '14',
          'psgc_province' => '112500000',
          'province_name' => 'DAVAO ORIENTAL'
        ],
        [
          'id' => '64',
          'region_id' => '14',
          'psgc_province' => '118200000',
          'province_name' => 'COMPOSTELA VALLEY'
        ],
        [
          'id' => '65',
          'region_id' => '14',
          'psgc_province' => '112400000',
          'province_name' => 'DAVAO DEL SUR'
        ],
        [
          'id' => '66',
          'region_id' => '14',
          'psgc_province' => '112300000',
          'province_name' => 'DAVAO DEL NORTE'
        ],
        [
          'id' => '67',
          'region_id' => '15',
          'psgc_province' => '126300000',
          'province_name' => 'SOUTH COTABATO'
        ],
        [
          'id' => '68',
          'region_id' => '15',
          'psgc_province' => '126500000',
          'province_name' => 'SULTAN KUDARAT'
        ],
        [
          'id' => '69',
          'region_id' => '15',
          'psgc_province' => '124700000',
          'province_name' => 'COTABATO (NORTH COTABATO)'
        ],
        [
          'id' => '70',
          'region_id' => '15',
          'psgc_province' => '128000000',
          'province_name' => 'SARANGANI'
        ],
        [
          'id' => '71',
          'region_id' => '16',
          'psgc_province' => '160200000',
          'province_name' => 'AGUSAN DEL NORTE'
        ],
        [
          'id' => '72',
          'region_id' => '16',
          'psgc_province' => '160300000',
          'province_name' => 'AGUSAN DEL SUR'
        ],
        [
          'id' => '73',
          'region_id' => '16',
          'psgc_province' => '166800000',
          'province_name' => 'SURIGAO DEL SUR'
        ],
        [
          'id' => '74',
          'region_id' => '16',
          'psgc_province' => '166700000',
          'province_name' => 'SURIGAO DEL NORTE'
        ],
        [
          'id' => '75',
          'region_id' => '16',
          'psgc_province' => '168500000',
          'province_name' => 'DINAGAT ISLANDS'
        ],
        [
          'id' => '76',
          'region_id' => '17',
          'psgc_province' => '150700000',
          'province_name' => 'BASILAN'
        ],
        [
          'id' => '77',
          'region_id' => '17',
          'psgc_province' => '157000000',
          'province_name' => 'TAWI-TAWI'
        ],
        [
          'id' => '78',
          'region_id' => '17',
          'psgc_province' => '158400000',
          'province_name' => 'SHARIFF KABUNSUAN'
        ],
        [
          'id' => '79',
          'region_id' => '17',
          'psgc_province' => '156600000',
          'province_name' => 'SULU'
        ],
        [
          'id' => '80',
          'region_id' => '17',
          'psgc_province' => '153800000',
          'province_name' => 'MAGUINDANAO'
        ],
        [
          'id' => '81',
          'region_id' => '17',
          'psgc_province' => '153600000',
          'province_name' => 'LANAO DEL SUR'
        ],
        [
          'id' => '82',
          'region_id' => '1',
          'psgc_province' => '133900000',
          'province_name' => 'NCR FIRST DISTRICT'
        ],
        [
          'id' => '83',
          'region_id' => '1',
          'psgc_province' => '137400000',
          'province_name' => 'NCR SECOND DISTRICT'
        ],
        [
          'id' => '84',
          'region_id' => '1',
          'psgc_province' => '137500000',
          'province_name' => 'NCR THIRD DISTRICT'
        ],
        [
          'id' => '85',
          'region_id' => '1',
          'psgc_province' => '137600000',
          'province_name' => 'NCR FOURTH DISTRICT'
        ],
        [
          'id' => '86',
          'region_id' => '15',
          'psgc_province' => '129800000',
          'province_name' => 'COTABATO CITY'
        ],
        [
          'id' => '87',
          'region_id' => '12',
          'psgc_province' => '099700000',
          'province_name' => 'CITY OF ISABELA'
        ],
        [
          'id' => '88',
          'region_id' => '14',
          'psgc_province' => '118600000',
          'province_name' => 'DAVAO OCCIDENTAL'
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
