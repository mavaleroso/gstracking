<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    private $cities = [
        [
          'id' => '1',
          'province_id' => '19',
          'psgc_city' => '035401000',
          'city_name' => 'ANGELES CITY'
        ],
        [
          'id' => '2',
          'province_id' => '42',
          'psgc_city' => '184501000',
          'city_name' => 'BACOLOD CITY (Capital)'
        ],
        [
          'id' => '3',
          'province_id' => '42',
          'psgc_city' => '184502000',
          'city_name' => 'BAGO CITY'
        ],
        [
          'id' => '4',
          'province_id' => '3',
          'psgc_city' => '141102000',
          'city_name' => 'BAGUIO CITY'
        ],
        [
          'id' => '5',
          'province_id' => '45',
          'psgc_city' => '184604000',
          'city_name' => 'BAIS CITY'
        ],
        [
          'id' => '6',
          'province_id' => '26',
          'psgc_city' => '041005000',
          'city_name' => 'BATANGAS CITY (Capital)'
        ],
        [
          'id' => '7',
          'province_id' => '71',
          'psgc_city' => '160202000',
          'city_name' => 'BUTUAN CITY (Capital)'
        ],
        [
          'id' => '8',
          'province_id' => '21',
          'psgc_city' => '034903000',
          'city_name' => 'CABANATUAN CITY'
        ],
        [
          'id' => '9',
          'province_id' => '42',
          'psgc_city' => '184504000',
          'city_name' => 'CADIZ CITY'
        ],
        [
          'id' => '10',
          'province_id' => '61',
          'psgc_city' => '104305000',
          'city_name' => 'CAGAYAN DE ORO CITY (Capital)'
        ],
        [
          'id' => '11',
          'province_id' => '52',
          'psgc_city' => '086003000',
          'city_name' => 'CALBAYOG CITY'
        ],
        [
          'id' => '12',
          'province_id' => '45',
          'psgc_city' => '184608000',
          'city_name' => 'CANLAON CITY'
        ],
        [
          'id' => '13',
          'province_id' => '24',
          'psgc_city' => '042105000',
          'city_name' => 'CAVITE CITY'
        ],
        [
          'id' => '14',
          'province_id' => '46',
          'psgc_city' => '072217000',
          'city_name' => 'CEBU CITY (Capital)'
        ],
        [
          'id' => '15',
          'province_id' => '10',
          'psgc_city' => '015503000',
          'city_name' => 'CITY OF ALAMINOS'
        ],
        [
          'id' => '16',
          'province_id' => '23',
          'psgc_city' => '045802000',
          'city_name' => 'CITY OF ANTIPOLO'
        ],
        [
          'id' => '17',
          'province_id' => '16',
          'psgc_city' => '030803000',
          'city_name' => 'CITY OF BALANGA (Capital)'
        ],
        [
          'id' => '18',
          'province_id' => '8',
          'psgc_city' => '012805000',
          'city_name' => 'CITY OF BATAC'
        ],
        [
          'id' => '19',
          'province_id' => '45',
          'psgc_city' => '184606000',
          'city_name' => 'CITY OF BAYAWAN (TULONG)'
        ],
        [
          'id' => '20',
          'province_id' => '53',
          'psgc_city' => '083708000',
          'city_name' => 'CITY OF BAYBAY'
        ],
        [
          'id' => '21',
          'province_id' => '72',
          'psgc_city' => '160301000',
          'city_name' => 'CITY OF BAYUGAN'
        ],
        [
          'id' => '22',
          'province_id' => '73',
          'psgc_city' => '166803000',
          'city_name' => 'CITY OF BISLIG'
        ],
        [
          'id' => '23',
          'province_id' => '46',
          'psgc_city' => '072211000',
          'city_name' => 'CITY OF BOGO'
        ],
        [
          'id' => '24',
          'province_id' => '50',
          'psgc_city' => '082604000',
          'city_name' => 'CITY OF BORONGAN (Capital)'
        ],
        [
          'id' => '25',
          'province_id' => '71',
          'psgc_city' => '160203000',
          'city_name' => 'CITY OF CABADBARAN'
        ],
        [
          'id' => '26',
          'province_id' => '25',
          'psgc_city' => '043405000',
          'city_name' => 'CITY OF CALAMBA'
        ],
        [
          'id' => '27',
          'province_id' => '29',
          'psgc_city' => '175205000',
          'city_name' => 'CITY OF CALAPAN (Capital)'
        ],
        [
          'id' => '28',
          'province_id' => '9',
          'psgc_city' => '012906000',
          'city_name' => 'CITY OF CANDON'
        ],
        [
          'id' => '29',
          'province_id' => '46',
          'psgc_city' => '072214000',
          'city_name' => 'CITY OF CARCAR'
        ],
        [
          'id' => '30',
          'province_id' => '52',
          'psgc_city' => '086005000',
          'city_name' => 'CITY OF CATBALOGAN (Capital)'
        ],
        [
          'id' => '31',
          'province_id' => '13',
          'psgc_city' => '023108000',
          'city_name' => 'CITY OF CAUAYAN'
        ],
        [
          'id' => '32',
          'province_id' => '65',
          'psgc_city' => '112403000',
          'city_name' => 'CITY OF DIGOS (Capital)'
        ],
        [
          'id' => '33',
          'province_id' => '61',
          'psgc_city' => '104307000',
          'city_name' => 'CITY OF EL SALVADOR'
        ],
        [
          'id' => '34',
          'province_id' => '42',
          'psgc_city' => '184509000',
          'city_name' => 'CITY OF ESCALANTE'
        ],
        [
          'id' => '35',
          'province_id' => '21',
          'psgc_city' => '034908000',
          'city_name' => 'CITY OF GAPAN'
        ],
        [
          'id' => '36',
          'province_id' => '45',
          'psgc_city' => '184611000',
          'city_name' => 'CITY OF GUIHULNGAN'
        ],
        [
          'id' => '37',
          'province_id' => '42',
          'psgc_city' => '184510000',
          'city_name' => 'CITY OF HIMAMAYLAN'
        ],
        [
          'id' => '38',
          'province_id' => '87',
          'psgc_city' => '099701000',
          'city_name' => 'CITY OF ISABELA (Capital)'
        ],
        [
          'id' => '39',
          'province_id' => '42',
          'psgc_city' => '184515000',
          'city_name' => 'CITY OF KABANKALAN'
        ],
        [
          'id' => '40',
          'province_id' => '69',
          'psgc_city' => '124704000',
          'city_name' => 'CITY OF KIDAPAWAN (Capital)'
        ],
        [
          'id' => '41',
          'province_id' => '67',
          'psgc_city' => '126306000',
          'city_name' => 'CITY OF KORONADAL (Capital)'
        ],
        [
          'id' => '42',
          'province_id' => '76',
          'psgc_city' => '150702000',
          'city_name' => 'CITY OF LAMITAN'
        ],
        [
          'id' => '43',
          'province_id' => '85',
          'psgc_city' => '137601000',
          'city_name' => 'CITY OF LAS PIÑAS'
        ],
        [
          'id' => '44',
          'province_id' => '36',
          'psgc_city' => '050508000',
          'city_name' => 'CITY OF LIGAO'
        ],
        [
          'id' => '45',
          'province_id' => '49',
          'psgc_city' => '086407000',
          'city_name' => 'CITY OF MAASIN (Capital)'
        ],
        [
          'id' => '46',
          'province_id' => '85',
          'psgc_city' => '137602000',
          'city_name' => 'CITY OF MAKATI'
        ],
        [
          'id' => '47',
          'province_id' => '84',
          'psgc_city' => '137502000',
          'city_name' => 'CITY OF MALABON'
        ],
        [
          'id' => '48',
          'province_id' => '59',
          'psgc_city' => '101312000',
          'city_name' => 'CITY OF MALAYBALAY (Capital)'
        ],
        [
          'id' => '49',
          'province_id' => '20',
          'psgc_city' => '031410000',
          'city_name' => 'CITY OF MALOLOS (Capital)'
        ],
        [
          'id' => '50',
          'province_id' => '83',
          'psgc_city' => '137401000',
          'city_name' => 'CITY OF MANDALUYONG'
        ],
        [
          'id' => '51',
          'province_id' => '82',
          'psgc_city' => '133903000',
          'city_name' => 'QUIAPO'
        ],
        [
          'id' => '52',
          'province_id' => '83',
          'psgc_city' => '137402000',
          'city_name' => 'CITY OF MARIKINA'
        ],
        [
          'id' => '53',
          'province_id' => '37',
          'psgc_city' => '054111000',
          'city_name' => 'CITY OF MASBATE (Capital)'
        ],
        [
          'id' => '54',
          'province_id' => '63',
          'psgc_city' => '112509000',
          'city_name' => 'CITY OF MATI (Capital)'
        ],
        [
          'id' => '55',
          'province_id' => '20',
          'psgc_city' => '031412000',
          'city_name' => 'CITY OF MEYCAUAYAN'
        ],
        [
          'id' => '56',
          'province_id' => '85',
          'psgc_city' => '137603000',
          'city_name' => 'CITY OF MUNTINLUPA'
        ],
        [
          'id' => '57',
          'province_id' => '46',
          'psgc_city' => '072234000',
          'city_name' => 'CITY OF NAGA'
        ],
        [
          'id' => '58',
          'province_id' => '84',
          'psgc_city' => '137503000',
          'city_name' => 'CITY OF NAVOTAS'
        ],
        [
          'id' => '59',
          'province_id' => '66',
          'psgc_city' => '112315000',
          'city_name' => 'CITY OF PANABO'
        ],
        [
          'id' => '60',
          'province_id' => '85',
          'psgc_city' => '137604000',
          'city_name' => 'CITY OF PARAÑAQUE'
        ],
        [
          'id' => '61',
          'province_id' => '83',
          'psgc_city' => '137403000',
          'city_name' => 'CITY OF PASIG'
        ],
        [
          'id' => '62',
          'province_id' => '43',
          'psgc_city' => '063035000',
          'city_name' => 'CITY OF PASSI'
        ],
        [
          'id' => '63',
          'province_id' => '7',
          'psgc_city' => '013314000',
          'city_name' => 'CITY OF SAN FERNANDO (Capital)'
        ],
        [
          'id' => '64',
          'province_id' => '19',
          'psgc_city' => '035416000',
          'city_name' => 'CITY OF SAN FERNANDO (Capital)'
        ],
        [
          'id' => '65',
          'province_id' => '20',
          'psgc_city' => '031420000',
          'city_name' => 'CITY OF SAN JOSE DEL MONTE'
        ],
        [
          'id' => '66',
          'province_id' => '83',
          'psgc_city' => '137405000',
          'city_name' => 'CITY OF SAN JUAN'
        ],
        [
          'id' => '67',
          'province_id' => '25',
          'psgc_city' => '043428000',
          'city_name' => 'CITY OF SANTA ROSA'
        ],
        [
          'id' => '68',
          'province_id' => '13',
          'psgc_city' => '023135000',
          'city_name' => 'CITY OF SANTIAGO'
        ],
        [
          'id' => '69',
          'province_id' => '42',
          'psgc_city' => '184527000',
          'city_name' => 'CITY OF SIPALAY'
        ],
        [
          'id' => '70',
          'province_id' => '35',
          'psgc_city' => '056216000',
          'city_name' => 'CITY OF SORSOGON (Capital)'
        ],
        [
          'id' => '71',
          'province_id' => '36',
          'psgc_city' => '050517000',
          'city_name' => 'CITY OF TABACO'
        ],
        [
          'id' => '72',
          'province_id' => '6',
          'psgc_city' => '143213000',
          'city_name' => 'CITY OF TABUK (Capital)'
        ],
        [
          'id' => '73',
          'province_id' => '68',
          'psgc_city' => '126511000',
          'city_name' => 'CITY OF TACURONG'
        ],
        [
          'id' => '74',
          'province_id' => '66',
          'psgc_city' => '112319000',
          'city_name' => 'CITY OF TAGUM (Capital)'
        ],
        [
          'id' => '75',
          'province_id' => '42',
          'psgc_city' => '184528000',
          'city_name' => 'CITY OF TALISAY'
        ],
        [
          'id' => '76',
          'province_id' => '46',
          'psgc_city' => '072250000',
          'city_name' => 'CITY OF TALISAY'
        ],
        [
          'id' => '77',
          'province_id' => '26',
          'psgc_city' => '041031000',
          'city_name' => 'CITY OF TANAUAN'
        ],
        [
          'id' => '78',
          'province_id' => '73',
          'psgc_city' => '166819000',
          'city_name' => 'CITY OF TANDAG (Capital)'
        ],
        [
          'id' => '79',
          'province_id' => '45',
          'psgc_city' => '184621000',
          'city_name' => 'CITY OF TANJAY'
        ],
        [
          'id' => '80',
          'province_id' => '18',
          'psgc_city' => '036916000',
          'city_name' => 'CITY OF TARLAC (Capital)'
        ],
        [
          'id' => '81',
          'province_id' => '27',
          'psgc_city' => '045647000',
          'city_name' => 'CITY OF TAYABAS'
        ],
        [
          'id' => '82',
          'province_id' => '10',
          'psgc_city' => '015546000',
          'city_name' => 'CITY OF URDANETA'
        ],
        [
          'id' => '83',
          'province_id' => '59',
          'psgc_city' => '101321000',
          'city_name' => 'CITY OF VALENCIA'
        ],
        [
          'id' => '84',
          'province_id' => '84',
          'psgc_city' => '137504000',
          'city_name' => 'CITY OF VALENZUELA'
        ],
        [
          'id' => '85',
          'province_id' => '42',
          'psgc_city' => '184531000',
          'city_name' => 'CITY OF VICTORIAS'
        ],
        [
          'id' => '86',
          'province_id' => '9',
          'psgc_city' => '012934000',
          'city_name' => 'CITY OF VIGAN (Capital)'
        ],
        [
          'id' => '87',
          'province_id' => '86',
          'psgc_city' => '129804000',
          'city_name' => 'COTABATO CITY'
        ],
        [
          'id' => '88',
          'province_id' => '10',
          'psgc_city' => '015518000',
          'city_name' => 'DAGUPAN CITY'
        ],
        [
          'id' => '89',
          'province_id' => '46',
          'psgc_city' => '072223000',
          'city_name' => 'DANAO CITY'
        ],
        [
          'id' => '90',
          'province_id' => '56',
          'psgc_city' => '097201000',
          'city_name' => 'DAPITAN CITY'
        ],
        [
          'id' => '91',
          'province_id' => '65',
          'psgc_city' => '112402000',
          'city_name' => 'DAVAO CITY'
        ],
        [
          'id' => '92',
          'province_id' => '56',
          'psgc_city' => '097202000',
          'city_name' => 'DIPOLOG CITY (Capital)'
        ],
        [
          'id' => '93',
          'province_id' => '45',
          'psgc_city' => '184610000',
          'city_name' => 'DUMAGUETE CITY (Capital)'
        ],
        [
          'id' => '94',
          'province_id' => '67',
          'psgc_city' => '126303000',
          'city_name' => 'GENERAL SANTOS CITY (DADIANGAS)'
        ],
        [
          'id' => '95',
          'province_id' => '61',
          'psgc_city' => '104308000',
          'city_name' => 'GINGOOG CITY'
        ],
        [
          'id' => '96',
          'province_id' => '60',
          'psgc_city' => '103504000',
          'city_name' => 'ILIGAN CITY'
        ],
        [
          'id' => '97',
          'province_id' => '43',
          'psgc_city' => '063022000',
          'city_name' => 'ILOILO CITY (Capital)'
        ],
        [
          'id' => '98',
          'province_id' => '38',
          'psgc_city' => '051716000',
          'city_name' => 'IRIGA CITY'
        ],
        [
          'id' => '99',
          'province_id' => '66',
          'psgc_city' => '112317000',
          'city_name' => 'ISLAND GARDEN CITY OF SAMAL'
        ],
        [
          'id' => '100',
          'province_id' => '84',
          'psgc_city' => '137501000',
          'city_name' => 'KALOOKAN CITY'
        ],
        [
          'id' => '101',
          'province_id' => '42',
          'psgc_city' => '184516000',
          'city_name' => 'LA CARLOTA CITY'
        ],
        [
          'id' => '102',
          'province_id' => '8',
          'psgc_city' => '012812000',
          'city_name' => 'LAOAG CITY (Capital)'
        ],
        [
          'id' => '103',
          'province_id' => '46',
          'psgc_city' => '072226000',
          'city_name' => 'LAPU-LAPU CITY (OPON)'
        ],
        [
          'id' => '104',
          'province_id' => '36',
          'psgc_city' => '050506000',
          'city_name' => 'LEGAZPI CITY (Capital)'
        ],
        [
          'id' => '105',
          'province_id' => '26',
          'psgc_city' => '041014000',
          'city_name' => 'LIPA CITY'
        ],
        [
          'id' => '106',
          'province_id' => '27',
          'psgc_city' => '045624000',
          'city_name' => 'LUCENA CITY (Capital)'
        ],
        [
          'id' => '107',
          'province_id' => '46',
          'psgc_city' => '072230000',
          'city_name' => 'MANDAUE CITY'
        ],
        [
          'id' => '108',
          'province_id' => '81',
          'psgc_city' => '153617000',
          'city_name' => 'MARAWI CITY (Capital)'
        ],
        [
          'id' => '109',
          'province_id' => '38',
          'psgc_city' => '051724000',
          'city_name' => 'NAGA CITY'
        ],
        [
          'id' => '110',
          'province_id' => '17',
          'psgc_city' => '037107000',
          'city_name' => 'OLONGAPO CITY'
        ],
        [
          'id' => '111',
          'province_id' => '53',
          'psgc_city' => '083738000',
          'city_name' => 'ORMOC CITY'
        ],
        [
          'id' => '112',
          'province_id' => '58',
          'psgc_city' => '104209000',
          'city_name' => 'OROQUIETA CITY (Capital)'
        ],
        [
          'id' => '113',
          'province_id' => '58',
          'psgc_city' => '104210000',
          'city_name' => 'OZAMIS CITY'
        ],
        [
          'id' => '114',
          'province_id' => '57',
          'psgc_city' => '097322000',
          'city_name' => 'PAGADIAN CITY (Capital)'
        ],
        [
          'id' => '115',
          'province_id' => '21',
          'psgc_city' => '034919000',
          'city_name' => 'PALAYAN CITY (Capital)'
        ],
        [
          'id' => '116',
          'province_id' => '85',
          'psgc_city' => '137605000',
          'city_name' => 'PASAY CITY'
        ],
        [
          'id' => '117',
          'province_id' => '31',
          'psgc_city' => '175316000',
          'city_name' => 'PUERTO PRINCESA CITY (Capital)'
        ],
        [
          'id' => '118',
          'province_id' => '83',
          'psgc_city' => '137404000',
          'city_name' => 'QUEZON CITY'
        ],
        [
          'id' => '119',
          'province_id' => '39',
          'psgc_city' => '061914000',
          'city_name' => 'ROXAS CITY (Capital)'
        ],
        [
          'id' => '120',
          'province_id' => '42',
          'psgc_city' => '184523000',
          'city_name' => 'SAGAY CITY'
        ],
        [
          'id' => '121',
          'province_id' => '10',
          'psgc_city' => '015532000',
          'city_name' => 'SAN CARLOS CITY'
        ],
        [
          'id' => '122',
          'province_id' => '42',
          'psgc_city' => '184524000',
          'city_name' => 'SAN CARLOS CITY'
        ],
        [
          'id' => '123',
          'province_id' => '21',
          'psgc_city' => '034926000',
          'city_name' => 'SAN JOSE CITY'
        ],
        [
          'id' => '124',
          'province_id' => '25',
          'psgc_city' => '043424000',
          'city_name' => 'SAN PABLO CITY'
        ],
        [
          'id' => '125',
          'province_id' => '21',
          'psgc_city' => '034917000',
          'city_name' => 'SCIENCE CITY OF MUÑOZ'
        ],
        [
          'id' => '126',
          'province_id' => '42',
          'psgc_city' => '184526000',
          'city_name' => 'SILAY CITY'
        ],
        [
          'id' => '127',
          'province_id' => '74',
          'psgc_city' => '166724000',
          'city_name' => 'SURIGAO CITY (Capital)'
        ],
        [
          'id' => '128',
          'province_id' => '53',
          'psgc_city' => '083747000',
          'city_name' => 'TACLOBAN CITY (Capital)'
        ],
        [
          'id' => '129',
          'province_id' => '24',
          'psgc_city' => '042119000',
          'city_name' => 'TAGAYTAY CITY'
        ],
        [
          'id' => '130',
          'province_id' => '47',
          'psgc_city' => '071242000',
          'city_name' => 'TAGBILARAN CITY (Capital)'
        ],
        [
          'id' => '131',
          'province_id' => '85',
          'psgc_city' => '137607000',
          'city_name' => 'TAGUIG CITY'
        ],
        [
          'id' => '132',
          'province_id' => '58',
          'psgc_city' => '104215000',
          'city_name' => 'TANGUB CITY'
        ],
        [
          'id' => '133',
          'province_id' => '46',
          'psgc_city' => '072251000',
          'city_name' => 'TOLEDO CITY'
        ],
        [
          'id' => '134',
          'province_id' => '24',
          'psgc_city' => '042122000',
          'city_name' => 'TRECE MARTIRES CITY (Capital)'
        ],
        [
          'id' => '135',
          'province_id' => '12',
          'psgc_city' => '021529000',
          'city_name' => 'TUGUEGARAO CITY (Capital)'
        ],
        [
          'id' => '136',
          'province_id' => '57',
          'psgc_city' => '097332000',
          'city_name' => 'ZAMBOANGA CITY'
        ],
        [
          'id' => '137',
          'province_id' => '31',
          'psgc_city' => '175301000',
          'city_name' => 'ABORLAN'
        ],
        [
          'id' => '138',
          'province_id' => '28',
          'psgc_city' => '175101000',
          'city_name' => 'ABRA DE ILOG'
        ],
        [
          'id' => '139',
          'province_id' => '16',
          'psgc_city' => '030801000',
          'city_name' => 'ABUCAY'
        ],
        [
          'id' => '140',
          'province_id' => '12',
          'psgc_city' => '021501000',
          'city_name' => 'ABULUG'
        ],
        [
          'id' => '141',
          'province_id' => '53',
          'psgc_city' => '083701000',
          'city_name' => 'ABUYOG'
        ],
        [
          'id' => '142',
          'province_id' => '8',
          'psgc_city' => '012801000',
          'city_name' => 'ADAMS'
        ],
        [
          'id' => '143',
          'province_id' => '27',
          'psgc_city' => '045601000',
          'city_name' => 'AGDANGAN'
        ],
        [
          'id' => '144',
          'province_id' => '14',
          'psgc_city' => '025701000',
          'city_name' => 'AGLIPAY'
        ],
        [
          'id' => '145',
          'province_id' => '10',
          'psgc_city' => '015501000',
          'city_name' => 'AGNO'
        ],
        [
          'id' => '146',
          'province_id' => '26',
          'psgc_city' => '041001000',
          'city_name' => 'AGONCILLO'
        ],
        [
          'id' => '147',
          'province_id' => '7',
          'psgc_city' => '013301000',
          'city_name' => 'AGOO'
        ],
        [
          'id' => '148',
          'province_id' => '10',
          'psgc_city' => '015502000',
          'city_name' => 'AGUILAR'
        ],
        [
          'id' => '149',
          'province_id' => '2',
          'psgc_city' => '142708000',
          'city_name' => 'AGUINALDO'
        ],
        [
          'id' => '150',
          'province_id' => '31',
          'psgc_city' => '175302000',
          'city_name' => 'AGUTAYA'
        ],
        [
          'id' => '151',
          'province_id' => '43',
          'psgc_city' => '063001000',
          'city_name' => 'AJUY'
        ],
        [
          'id' => '152',
          'province_id' => '76',
          'psgc_city' => '150708000',
          'city_name' => 'AKBAR'
        ],
        [
          'id' => '153',
          'province_id' => '27',
          'psgc_city' => '045602000',
          'city_name' => 'ALABAT'
        ],
        [
          'id' => '154',
          'province_id' => '70',
          'psgc_city' => '128001000',
          'city_name' => 'ALABEL (Capital)'
        ],
        [
          'id' => '155',
          'province_id' => '69',
          'psgc_city' => '124701000',
          'city_name' => 'ALAMADA'
        ],
        [
          'id' => '156',
          'province_id' => '25',
          'psgc_city' => '043401000',
          'city_name' => 'ALAMINOS'
        ],
        [
          'id' => '157',
          'province_id' => '53',
          'psgc_city' => '083702000',
          'city_name' => 'ALANGALANG'
        ],
        [
          'id' => '158',
          'province_id' => '76',
          'psgc_city' => '150709000',
          'city_name' => 'AL-BARKA'
        ],
        [
          'id' => '159',
          'province_id' => '53',
          'psgc_city' => '083703000',
          'city_name' => 'ALBUERA'
        ],
        [
          'id' => '160',
          'province_id' => '47',
          'psgc_city' => '071201000',
          'city_name' => 'ALBURQUERQUE'
        ],
        [
          'id' => '161',
          'province_id' => '10',
          'psgc_city' => '015504000',
          'city_name' => 'ALCALA'
        ],
        [
          'id' => '162',
          'province_id' => '12',
          'psgc_city' => '021502000',
          'city_name' => 'ALCALA'
        ],
        [
          'id' => '163',
          'province_id' => '46',
          'psgc_city' => '072201000',
          'city_name' => 'ALCANTARA'
        ],
        [
          'id' => '164',
          'province_id' => '30',
          'psgc_city' => '175901000',
          'city_name' => 'ALCANTARA'
        ],
        [
          'id' => '165',
          'province_id' => '46',
          'psgc_city' => '072202000',
          'city_name' => 'ALCOY'
        ],
        [
          'id' => '166',
          'province_id' => '46',
          'psgc_city' => '072203000',
          'city_name' => 'ALEGRIA'
        ],
        [
          'id' => '167',
          'province_id' => '74',
          'psgc_city' => '166701000',
          'city_name' => 'ALEGRIA'
        ],
        [
          'id' => '168',
          'province_id' => '69',
          'psgc_city' => '124717000',
          'city_name' => 'ALEOSAN'
        ],
        [
          'id' => '169',
          'province_id' => '24',
          'psgc_city' => '042101000',
          'city_name' => 'ALFONSO'
        ],
        [
          'id' => '170',
          'province_id' => '11',
          'psgc_city' => '025015000',
          'city_name' => 'ALFONSO CASTANEDA'
        ],
        [
          'id' => '171',
          'province_id' => '2',
          'psgc_city' => '142707000',
          'city_name' => 'ALFONSO LISTA (POTIA)'
        ],
        [
          'id' => '172',
          'province_id' => '21',
          'psgc_city' => '034901000',
          'city_name' => 'ALIAGA'
        ],
        [
          'id' => '173',
          'province_id' => '55',
          'psgc_city' => '098301000',
          'city_name' => 'ALICIA'
        ],
        [
          'id' => '174',
          'province_id' => '13',
          'psgc_city' => '023101000',
          'city_name' => 'ALICIA'
        ],
        [
          'id' => '175',
          'province_id' => '47',
          'psgc_city' => '071202000',
          'city_name' => 'ALICIA'
        ],
        [
          'id' => '176',
          'province_id' => '9',
          'psgc_city' => '012901000',
          'city_name' => 'ALILEM'
        ],
        [
          'id' => '177',
          'province_id' => '43',
          'psgc_city' => '063002000',
          'city_name' => 'ALIMODIAN'
        ],
        [
          'id' => '178',
          'province_id' => '26',
          'psgc_city' => '041002000',
          'city_name' => 'ALITAGTAG'
        ],
        [
          'id' => '179',
          'province_id' => '12',
          'psgc_city' => '021503000',
          'city_name' => 'ALLACAPAN'
        ],
        [
          'id' => '180',
          'province_id' => '51',
          'psgc_city' => '084801000',
          'city_name' => 'ALLEN'
        ],
        [
          'id' => '181',
          'province_id' => '52',
          'psgc_city' => '086001000',
          'city_name' => 'ALMAGRO'
        ],
        [
          'id' => '182',
          'province_id' => '54',
          'psgc_city' => '087801000',
          'city_name' => 'ALMERIA'
        ],
        [
          'id' => '183',
          'province_id' => '46',
          'psgc_city' => '072204000',
          'city_name' => 'ALOGUINSAN'
        ],
        [
          'id' => '184',
          'province_id' => '58',
          'psgc_city' => '104201000',
          'city_name' => 'ALORAN'
        ],
        [
          'id' => '185',
          'province_id' => '40',
          'psgc_city' => '060401000',
          'city_name' => 'ALTAVAS'
        ],
        [
          'id' => '186',
          'province_id' => '61',
          'psgc_city' => '104301000',
          'city_name' => 'ALUBIJID'
        ],
        [
          'id' => '187',
          'province_id' => '24',
          'psgc_city' => '042102000',
          'city_name' => 'AMADEO'
        ],
        [
          'id' => '188',
          'province_id' => '11',
          'psgc_city' => '025001000',
          'city_name' => 'AMBAGUIO'
        ],
        [
          'id' => '189',
          'province_id' => '45',
          'psgc_city' => '184601000',
          'city_name' => 'AMLAN (AYUQUITAN)'
        ],
        [
          'id' => '190',
          'province_id' => '80',
          'psgc_city' => '153801000',
          'city_name' => 'AMPATUAN'
        ],
        [
          'id' => '191',
          'province_id' => '12',
          'psgc_city' => '021504000',
          'city_name' => 'AMULUNG'
        ],
        [
          'id' => '192',
          'province_id' => '49',
          'psgc_city' => '086401000',
          'city_name' => 'ANAHAWAN'
        ],
        [
          'id' => '193',
          'province_id' => '18',
          'psgc_city' => '036901000',
          'city_name' => 'ANAO'
        ],
        [
          'id' => '194',
          'province_id' => '47',
          'psgc_city' => '071203000',
          'city_name' => 'ANDA'
        ],
        [
          'id' => '195',
          'province_id' => '10',
          'psgc_city' => '015505000',
          'city_name' => 'ANDA'
        ],
        [
          'id' => '196',
          'province_id' => '13',
          'psgc_city' => '023102000',
          'city_name' => 'ANGADANAN'
        ],
        [
          'id' => '197',
          'province_id' => '20',
          'psgc_city' => '031401000',
          'city_name' => 'ANGAT'
        ],
        [
          'id' => '198',
          'province_id' => '23',
          'psgc_city' => '045801000',
          'city_name' => 'ANGONO'
        ],
        [
          'id' => '199',
          'province_id' => '43',
          'psgc_city' => '063003000',
          'city_name' => 'ANILAO'
        ],
        [
          'id' => '200',
          'province_id' => '41',
          'psgc_city' => '060601000',
          'city_name' => 'ANINI-Y'
        ],
        [
          'id' => '201',
          'province_id' => '47',
          'psgc_city' => '071204000',
          'city_name' => 'ANTEQUERA'
        ],
        [
          'id' => '202',
          'province_id' => '69',
          'psgc_city' => '124715000',
          'city_name' => 'ANTIPAS'
        ],
        [
          'id' => '203',
          'province_id' => '19',
          'psgc_city' => '035402000',
          'city_name' => 'APALIT'
        ],
        [
          'id' => '204',
          'province_id' => '12',
          'psgc_city' => '021505000',
          'city_name' => 'APARRI'
        ],
        [
          'id' => '205',
          'province_id' => '31',
          'psgc_city' => '175303000',
          'city_name' => 'ARACELI'
        ],
        [
          'id' => '206',
          'province_id' => '69',
          'psgc_city' => '124718000',
          'city_name' => 'ARAKAN'
        ],
        [
          'id' => '207',
          'province_id' => '19',
          'psgc_city' => '035403000',
          'city_name' => 'ARAYAT'
        ],
        [
          'id' => '208',
          'province_id' => '46',
          'psgc_city' => '072205000',
          'city_name' => 'ARGAO'
        ],
        [
          'id' => '209',
          'province_id' => '7',
          'psgc_city' => '013302000',
          'city_name' => 'ARINGAY'
        ],
        [
          'id' => '210',
          'province_id' => '11',
          'psgc_city' => '025002000',
          'city_name' => 'ARITAO'
        ],
        [
          'id' => '211',
          'province_id' => '37',
          'psgc_city' => '054101000',
          'city_name' => 'AROROY'
        ],
        [
          'id' => '212',
          'province_id' => '50',
          'psgc_city' => '082601000',
          'city_name' => 'ARTECHE'
        ],
        [
          'id' => '213',
          'province_id' => '10',
          'psgc_city' => '015506000',
          'city_name' => 'ASINGAN'
        ],
        [
          'id' => '214',
          'province_id' => '2',
          'psgc_city' => '142711000',
          'city_name' => 'ASIPULO'
        ],
        [
          'id' => '215',
          'province_id' => '46',
          'psgc_city' => '072206000',
          'city_name' => 'ASTURIAS'
        ],
        [
          'id' => '216',
          'province_id' => '66',
          'psgc_city' => '112301000',
          'city_name' => 'ASUNCION (SAUG)'
        ],
        [
          'id' => '217',
          'province_id' => '27',
          'psgc_city' => '045603000',
          'city_name' => 'ATIMONAN'
        ],
        [
          'id' => '218',
          'province_id' => '3',
          'psgc_city' => '141101000',
          'city_name' => 'ATOK'
        ],
        [
          'id' => '219',
          'province_id' => '13',
          'psgc_city' => '023103000',
          'city_name' => 'AURORA'
        ],
        [
          'id' => '220',
          'province_id' => '57',
          'psgc_city' => '097302000',
          'city_name' => 'AURORA'
        ],
        [
          'id' => '221',
          'province_id' => '45',
          'psgc_city' => '184602000',
          'city_name' => 'AYUNGON'
        ],
        [
          'id' => '222',
          'province_id' => '38',
          'psgc_city' => '051701000',
          'city_name' => 'BAAO'
        ],
        [
          'id' => '223',
          'province_id' => '53',
          'psgc_city' => '083705000',
          'city_name' => 'BABATNGON'
        ],
        [
          'id' => '224',
          'province_id' => '36',
          'psgc_city' => '050501000',
          'city_name' => 'BACACAY'
        ],
        [
          'id' => '225',
          'province_id' => '8',
          'psgc_city' => '012802000',
          'city_name' => 'BACARRA'
        ],
        [
          'id' => '226',
          'province_id' => '47',
          'psgc_city' => '071205000',
          'city_name' => 'BACLAYON'
        ],
        [
          'id' => '227',
          'province_id' => '7',
          'psgc_city' => '013303000',
          'city_name' => 'BACNOTAN'
        ],
        [
          'id' => '228',
          'province_id' => '29',
          'psgc_city' => '175201000',
          'city_name' => 'BACO'
        ],
        [
          'id' => '229',
          'province_id' => '60',
          'psgc_city' => '103501000',
          'city_name' => 'BACOLOD'
        ],
        [
          'id' => '230',
          'province_id' => '81',
          'psgc_city' => '153601000',
          'city_name' => 'BACOLOD-KALAWI (BACOLOD GRANDE)'
        ],
        [
          'id' => '231',
          'province_id' => '19',
          'psgc_city' => '035404000',
          'city_name' => 'BACOLOR'
        ],
        [
          'id' => '232',
          'province_id' => '45',
          'psgc_city' => '184603000',
          'city_name' => 'BACONG'
        ],
        [
          'id' => '233',
          'province_id' => '24',
          'psgc_city' => '042103000',
          'city_name' => 'BACOOR'
        ],
        [
          'id' => '234',
          'province_id' => '74',
          'psgc_city' => '166702000',
          'city_name' => 'BACUAG'
        ],
        [
          'id' => '235',
          'province_id' => '56',
          'psgc_city' => '097226000',
          'city_name' => 'BACUNGAN (Leon T. Postigo)'
        ],
        [
          'id' => '236',
          'province_id' => '46',
          'psgc_city' => '072207000',
          'city_name' => 'BADIAN'
        ],
        [
          'id' => '237',
          'province_id' => '43',
          'psgc_city' => '063004000',
          'city_name' => 'BADIANGAN'
        ],
        [
          'id' => '238',
          'province_id' => '8',
          'psgc_city' => '012803000',
          'city_name' => 'BADOC'
        ],
        [
          'id' => '239',
          'province_id' => '11',
          'psgc_city' => '025003000',
          'city_name' => 'BAGABAG'
        ],
        [
          'id' => '240',
          'province_id' => '16',
          'psgc_city' => '030802000',
          'city_name' => 'BAGAC'
        ],
        [
          'id' => '241',
          'province_id' => '33',
          'psgc_city' => '052001000',
          'city_name' => 'BAGAMANOC'
        ],
        [
          'id' => '242',
          'province_id' => '63',
          'psgc_city' => '112501000',
          'city_name' => 'BAGANGA'
        ],
        [
          'id' => '243',
          'province_id' => '12',
          'psgc_city' => '021506000',
          'city_name' => 'BAGGAO'
        ],
        [
          'id' => '244',
          'province_id' => '7',
          'psgc_city' => '013304000',
          'city_name' => 'BAGULIN'
        ],
        [
          'id' => '245',
          'province_id' => '68',
          'psgc_city' => '126501000',
          'city_name' => 'BAGUMBAYAN'
        ],
        [
          'id' => '246',
          'province_id' => '3',
          'psgc_city' => '141103000',
          'city_name' => 'BAKUN'
        ],
        [
          'id' => '247',
          'province_id' => '31',
          'psgc_city' => '175304000',
          'city_name' => 'BALABAC'
        ],
        [
          'id' => '248',
          'province_id' => '81',
          'psgc_city' => '153602000',
          'city_name' => 'BALABAGAN'
        ],
        [
          'id' => '249',
          'province_id' => '20',
          'psgc_city' => '031402000',
          'city_name' => 'BALAGTAS (BIGAA)'
        ],
        [
          'id' => '250',
          'province_id' => '46',
          'psgc_city' => '072208000',
          'city_name' => 'BALAMBAN'
        ],
        [
          'id' => '251',
          'province_id' => '50',
          'psgc_city' => '082602000',
          'city_name' => 'BALANGIGA'
        ],
        [
          'id' => '252',
          'province_id' => '50',
          'psgc_city' => '082603000',
          'city_name' => 'BALANGKAYAN'
        ],
        [
          'id' => '253',
          'province_id' => '7',
          'psgc_city' => '013305000',
          'city_name' => 'BALAOAN'
        ],
        [
          'id' => '254',
          'province_id' => '43',
          'psgc_city' => '063005000',
          'city_name' => 'BALASAN'
        ],
        [
          'id' => '255',
          'province_id' => '38',
          'psgc_city' => '051702000',
          'city_name' => 'BALATAN'
        ],
        [
          'id' => '256',
          'province_id' => '26',
          'psgc_city' => '041003000',
          'city_name' => 'BALAYAN'
        ],
        [
          'id' => '257',
          'province_id' => '6',
          'psgc_city' => '143201000',
          'city_name' => 'BALBALAN'
        ],
        [
          'id' => '258',
          'province_id' => '37',
          'psgc_city' => '054102000',
          'city_name' => 'BALENO'
        ],
        [
          'id' => '259',
          'province_id' => '22',
          'psgc_city' => '037701000',
          'city_name' => 'BALER (Capital)'
        ],
        [
          'id' => '260',
          'province_id' => '26',
          'psgc_city' => '041004000',
          'city_name' => 'BALETE'
        ],
        [
          'id' => '261',
          'province_id' => '40',
          'psgc_city' => '060402000',
          'city_name' => 'BALETE'
        ],
        [
          'id' => '262',
          'province_id' => '58',
          'psgc_city' => '104202000',
          'city_name' => 'BALIANGAO'
        ],
        [
          'id' => '263',
          'province_id' => '56',
          'psgc_city' => '097224000',
          'city_name' => 'BALIGUIAN'
        ],
        [
          'id' => '264',
          'province_id' => '47',
          'psgc_city' => '071206000',
          'city_name' => 'BALILIHAN'
        ],
        [
          'id' => '265',
          'province_id' => '81',
          'psgc_city' => '153603000',
          'city_name' => 'BALINDONG (WATU)'
        ],
        [
          'id' => '266',
          'province_id' => '61',
          'psgc_city' => '104302000',
          'city_name' => 'BALINGASAG'
        ],
        [
          'id' => '267',
          'province_id' => '61',
          'psgc_city' => '104303000',
          'city_name' => 'BALINGOAN'
        ],
        [
          'id' => '268',
          'province_id' => '20',
          'psgc_city' => '031403000',
          'city_name' => 'BALIUAG'
        ],
        [
          'id' => '269',
          'province_id' => '12',
          'psgc_city' => '021507000',
          'city_name' => 'BALLESTEROS'
        ],
        [
          'id' => '270',
          'province_id' => '60',
          'psgc_city' => '103502000',
          'city_name' => 'BALOI'
        ],
        [
          'id' => '271',
          'province_id' => '37',
          'psgc_city' => '054103000',
          'city_name' => 'BALUD'
        ],
        [
          'id' => '272',
          'province_id' => '10',
          'psgc_city' => '015507000',
          'city_name' => 'BALUNGAO'
        ],
        [
          'id' => '273',
          'province_id' => '18',
          'psgc_city' => '036902000',
          'city_name' => 'BAMBAN'
        ],
        [
          'id' => '274',
          'province_id' => '11',
          'psgc_city' => '025004000',
          'city_name' => 'BAMBANG'
        ],
        [
          'id' => '275',
          'province_id' => '43',
          'psgc_city' => '063006000',
          'city_name' => 'BANATE'
        ],
        [
          'id' => '276',
          'province_id' => '2',
          'psgc_city' => '142701000',
          'city_name' => 'BANAUE'
        ],
        [
          'id' => '277',
          'province_id' => '63',
          'psgc_city' => '112502000',
          'city_name' => 'BANAYBANAY'
        ],
        [
          'id' => '278',
          'province_id' => '9',
          'psgc_city' => '012902000',
          'city_name' => 'BANAYOYO'
        ],
        [
          'id' => '279',
          'province_id' => '67',
          'psgc_city' => '126302000',
          'city_name' => 'BANGA'
        ],
        [
          'id' => '280',
          'province_id' => '40',
          'psgc_city' => '060403000',
          'city_name' => 'BANGA'
        ],
        [
          'id' => '281',
          'province_id' => '7',
          'psgc_city' => '013306000',
          'city_name' => 'BANGAR'
        ],
        [
          'id' => '282',
          'province_id' => '4',
          'psgc_city' => '140101000',
          'city_name' => 'BANGUED (Capital)'
        ],
        [
          'id' => '283',
          'province_id' => '8',
          'psgc_city' => '012804000',
          'city_name' => 'BANGUI'
        ],
        [
          'id' => '284',
          'province_id' => '10',
          'psgc_city' => '015508000',
          'city_name' => 'BANI'
        ],
        [
          'id' => '285',
          'province_id' => '69',
          'psgc_city' => '124716000',
          'city_name' => 'BANISILAN'
        ],
        [
          'id' => '286',
          'province_id' => '8',
          'psgc_city' => '012811000',
          'city_name' => 'BANNA (ESPIRITU)'
        ],
        [
          'id' => '287',
          'province_id' => '65',
          'psgc_city' => '112401000',
          'city_name' => 'BANSALAN'
        ],
        [
          'id' => '288',
          'province_id' => '29',
          'psgc_city' => '175202000',
          'city_name' => 'BANSUD'
        ],
        [
          'id' => '289',
          'province_id' => '9',
          'psgc_city' => '012903000',
          'city_name' => 'BANTAY'
        ],
        [
          'id' => '290',
          'province_id' => '46',
          'psgc_city' => '072209000',
          'city_name' => 'BANTAYAN'
        ],
        [
          'id' => '291',
          'province_id' => '30',
          'psgc_city' => '175902000',
          'city_name' => 'BANTON'
        ],
        [
          'id' => '292',
          'province_id' => '23',
          'psgc_city' => '045803000',
          'city_name' => 'BARAS'
        ],
        [
          'id' => '293',
          'province_id' => '33',
          'psgc_city' => '052002000',
          'city_name' => 'BARAS'
        ],
        [
          'id' => '294',
          'province_id' => '41',
          'psgc_city' => '060602000',
          'city_name' => 'BARBAZA'
        ],
        [
          'id' => '295',
          'province_id' => '35',
          'psgc_city' => '056202000',
          'city_name' => 'BARCELONA'
        ],
        [
          'id' => '296',
          'province_id' => '46',
          'psgc_city' => '072210000',
          'city_name' => 'BARILI'
        ],
        [
          'id' => '297',
          'province_id' => '78',
          'psgc_city' => '158401000',
          'city_name' => 'BARIRA'
        ],
        [
          'id' => '298',
          'province_id' => '1',
          'psgc_city' => '144401000',
          'city_name' => 'BARLIG'
        ],
        [
          'id' => '299',
          'province_id' => '73',
          'psgc_city' => '166801000',
          'city_name' => 'BAROBO'
        ],
        [
          'id' => '300',
          'province_id' => '43',
          'psgc_city' => '063007000',
          'city_name' => 'BAROTAC NUEVO'
        ],
        [
          'id' => '301',
          'province_id' => '43',
          'psgc_city' => '063008000',
          'city_name' => 'BAROTAC VIEJO'
        ],
        [
          'id' => '302',
          'province_id' => '60',
          'psgc_city' => '103503000',
          'city_name' => 'BAROY'
        ],
        [
          'id' => '303',
          'province_id' => '53',
          'psgc_city' => '083706000',
          'city_name' => 'BARUGO'
        ],
        [
          'id' => '304',
          'province_id' => '45',
          'psgc_city' => '184605000',
          'city_name' => 'BASAY'
        ],
        [
          'id' => '305',
          'province_id' => '15',
          'psgc_city' => '020901000',
          'city_name' => 'BASCO (Capital)'
        ],
        [
          'id' => '306',
          'province_id' => '52',
          'psgc_city' => '086002000',
          'city_name' => 'BASEY'
        ],
        [
          'id' => '307',
          'province_id' => '75',
          'psgc_city' => '168501000',
          'city_name' => 'BASILISA (RIZAL)'
        ],
        [
          'id' => '308',
          'province_id' => '10',
          'psgc_city' => '015509000',
          'city_name' => 'BASISTA'
        ],
        [
          'id' => '309',
          'province_id' => '34',
          'psgc_city' => '051601000',
          'city_name' => 'BASUD'
        ],
        [
          'id' => '310',
          'province_id' => '43',
          'psgc_city' => '063009000',
          'city_name' => 'BATAD'
        ],
        [
          'id' => '311',
          'province_id' => '40',
          'psgc_city' => '060404000',
          'city_name' => 'BATAN'
        ],
        [
          'id' => '312',
          'province_id' => '31',
          'psgc_city' => '175305000',
          'city_name' => 'BATARAZA'
        ],
        [
          'id' => '313',
          'province_id' => '38',
          'psgc_city' => '051703000',
          'city_name' => 'BATO'
        ],
        [
          'id' => '314',
          'province_id' => '33',
          'psgc_city' => '052003000',
          'city_name' => 'BATO'
        ],
        [
          'id' => '315',
          'province_id' => '53',
          'psgc_city' => '083707000',
          'city_name' => 'BATO'
        ],
        [
          'id' => '316',
          'province_id' => '47',
          'psgc_city' => '071207000',
          'city_name' => 'BATUAN'
        ],
        [
          'id' => '317',
          'province_id' => '37',
          'psgc_city' => '054104000',
          'city_name' => 'BATUAN'
        ],
        [
          'id' => '318',
          'province_id' => '26',
          'psgc_city' => '041006000',
          'city_name' => 'BAUAN'
        ],
        [
          'id' => '319',
          'province_id' => '7',
          'psgc_city' => '013307000',
          'city_name' => 'BAUANG'
        ],
        [
          'id' => '320',
          'province_id' => '1',
          'psgc_city' => '144402000',
          'city_name' => 'BAUKO'
        ],
        [
          'id' => '321',
          'province_id' => '59',
          'psgc_city' => '101301000',
          'city_name' => 'BAUNGON'
        ],
        [
          'id' => '322',
          'province_id' => '10',
          'psgc_city' => '015510000',
          'city_name' => 'BAUTISTA'
        ],
        [
          'id' => '323',
          'province_id' => '25',
          'psgc_city' => '043402000',
          'city_name' => 'BAY'
        ],
        [
          'id' => '324',
          'province_id' => '73',
          'psgc_city' => '166802000',
          'city_name' => 'BAYABAS'
        ],
        [
          'id' => '325',
          'province_id' => '10',
          'psgc_city' => '015511000',
          'city_name' => 'BAYAMBANG'
        ],
        [
          'id' => '326',
          'province_id' => '81',
          'psgc_city' => '153604000',
          'city_name' => 'BAYANG'
        ],
        [
          'id' => '327',
          'province_id' => '57',
          'psgc_city' => '097303000',
          'city_name' => 'BAYOG'
        ],
        [
          'id' => '328',
          'province_id' => '11',
          'psgc_city' => '025005000',
          'city_name' => 'BAYOMBONG (Capital)'
        ],
        [
          'id' => '329',
          'province_id' => '41',
          'psgc_city' => '060603000',
          'city_name' => 'BELISON'
        ],
        [
          'id' => '330',
          'province_id' => '13',
          'psgc_city' => '023104000',
          'city_name' => 'BENITO SOLIVEN'
        ],
        [
          'id' => '331',
          'province_id' => '1',
          'psgc_city' => '144403000',
          'city_name' => 'BESAO'
        ],
        [
          'id' => '332',
          'province_id' => '47',
          'psgc_city' => '071248000',
          'city_name' => 'BIEN UNIDO'
        ],
        [
          'id' => '333',
          'province_id' => '47',
          'psgc_city' => '071208000',
          'city_name' => 'BILAR'
        ],
        [
          'id' => '334',
          'province_id' => '54',
          'psgc_city' => '087802000',
          'city_name' => 'BILIRAN'
        ],
        [
          'id' => '335',
          'province_id' => '42',
          'psgc_city' => '184503000',
          'city_name' => 'BINALBAGAN'
        ],
        [
          'id' => '336',
          'province_id' => '10',
          'psgc_city' => '015512000',
          'city_name' => 'BINALONAN'
        ],
        [
          'id' => '337',
          'province_id' => '25',
          'psgc_city' => '043403000',
          'city_name' => 'BIÑAN'
        ],
        [
          'id' => '338',
          'province_id' => '23',
          'psgc_city' => '045804000',
          'city_name' => 'BINANGONAN'
        ],
        [
          'id' => '339',
          'province_id' => '45',
          'psgc_city' => '184607000',
          'city_name' => 'BINDOY (PAYABON)'
        ],
        [
          'id' => '340',
          'province_id' => '43',
          'psgc_city' => '063010000',
          'city_name' => 'BINGAWAN'
        ],
        [
          'id' => '341',
          'province_id' => '81',
          'psgc_city' => '153605000',
          'city_name' => 'BINIDAYAN'
        ],
        [
          'id' => '342',
          'province_id' => '10',
          'psgc_city' => '015513000',
          'city_name' => 'BINMALEY'
        ],
        [
          'id' => '343',
          'province_id' => '61',
          'psgc_city' => '104304000',
          'city_name' => 'BINUANGAN'
        ],
        [
          'id' => '344',
          'province_id' => '51',
          'psgc_city' => '084802000',
          'city_name' => 'BIRI'
        ],
        [
          'id' => '345',
          'province_id' => '32',
          'psgc_city' => '174001000',
          'city_name' => 'BOAC (Capital)'
        ],
        [
          'id' => '346',
          'province_id' => '51',
          'psgc_city' => '084803000',
          'city_name' => 'BOBON'
        ],
        [
          'id' => '347',
          'province_id' => '20',
          'psgc_city' => '031404000',
          'city_name' => 'BOCAUE'
        ],
        [
          'id' => '348',
          'province_id' => '3',
          'psgc_city' => '141104000',
          'city_name' => 'BOKOD'
        ],
        [
          'id' => '349',
          'province_id' => '10',
          'psgc_city' => '015514000',
          'city_name' => 'BOLINAO'
        ],
        [
          'id' => '350',
          'province_id' => '4',
          'psgc_city' => '140102000',
          'city_name' => 'BOLINEY'
        ],
        [
          'id' => '351',
          'province_id' => '46',
          'psgc_city' => '072212000',
          'city_name' => 'BOLJOON'
        ],
        [
          'id' => '352',
          'province_id' => '38',
          'psgc_city' => '051704000',
          'city_name' => 'BOMBON'
        ],
        [
          'id' => '353',
          'province_id' => '21',
          'psgc_city' => '034902000',
          'city_name' => 'BONGABON'
        ],
        [
          'id' => '354',
          'province_id' => '29',
          'psgc_city' => '175203000',
          'city_name' => 'BONGABONG'
        ],
        [
          'id' => '355',
          'province_id' => '77',
          'psgc_city' => '157002000',
          'city_name' => 'BONGAO (Capital)'
        ],
        [
          'id' => '356',
          'province_id' => '58',
          'psgc_city' => '104203000',
          'city_name' => 'BONIFACIO'
        ],
        [
          'id' => '357',
          'province_id' => '49',
          'psgc_city' => '086402000',
          'city_name' => 'BONTOC'
        ],
        [
          'id' => '358',
          'province_id' => '1',
          'psgc_city' => '144404000',
          'city_name' => 'BONTOC (Capital)'
        ],
        [
          'id' => '359',
          'province_id' => '46',
          'psgc_city' => '072213000',
          'city_name' => 'BORBON'
        ],
        [
          'id' => '360',
          'province_id' => '63',
          'psgc_city' => '112503000',
          'city_name' => 'BOSTON'
        ],
        [
          'id' => '361',
          'province_id' => '17',
          'psgc_city' => '037101000',
          'city_name' => 'BOTOLAN'
        ],
        [
          'id' => '362',
          'province_id' => '66',
          'psgc_city' => '112323000',
          'city_name' => 'BRAULIO E. DUJALI'
        ],
        [
          'id' => '363',
          'province_id' => '31',
          'psgc_city' => '175306000',
          'city_name' => 'BROOKE\'S POINT'
        ],
        [
          'id' => '364',
          'province_id' => '81',
          'psgc_city' => '153633000',
          'city_name' => 'BUADIPOSO-BUNTONG'
        ],
        [
          'id' => '365',
          'province_id' => '81',
          'psgc_city' => '153606000',
          'city_name' => 'BUBONG'
        ],
        [
          'id' => '366',
          'province_id' => '4',
          'psgc_city' => '140103000',
          'city_name' => 'BUCAY'
        ],
        [
          'id' => '367',
          'province_id' => '4',
          'psgc_city' => '140104000',
          'city_name' => 'BUCLOC'
        ],
        [
          'id' => '368',
          'province_id' => '47',
          'psgc_city' => '071209000',
          'city_name' => 'BUENAVISTA'
        ],
        [
          'id' => '369',
          'province_id' => '27',
          'psgc_city' => '045605000',
          'city_name' => 'BUENAVISTA'
        ],
        [
          'id' => '370',
          'province_id' => '71',
          'psgc_city' => '160201000',
          'city_name' => 'BUENAVISTA'
        ],
        [
          'id' => '371',
          'province_id' => '44',
          'psgc_city' => '067901000',
          'city_name' => 'BUENAVISTA'
        ],
        [
          'id' => '372',
          'province_id' => '32',
          'psgc_city' => '174002000',
          'city_name' => 'BUENAVISTA'
        ],
        [
          'id' => '373',
          'province_id' => '10',
          'psgc_city' => '015515000',
          'city_name' => 'BUGALLON'
        ],
        [
          'id' => '374',
          'province_id' => '41',
          'psgc_city' => '060604000',
          'city_name' => 'BUGASONG'
        ],
        [
          'id' => '375',
          'province_id' => '12',
          'psgc_city' => '021508000',
          'city_name' => 'BUGUEY'
        ],
        [
          'id' => '376',
          'province_id' => '3',
          'psgc_city' => '141105000',
          'city_name' => 'BUGUIAS'
        ],
        [
          'id' => '377',
          'province_id' => '38',
          'psgc_city' => '051705000',
          'city_name' => 'BUHI'
        ],
        [
          'id' => '378',
          'province_id' => '38',
          'psgc_city' => '051706000',
          'city_name' => 'BULA'
        ],
        [
          'id' => '379',
          'province_id' => '20',
          'psgc_city' => '031405000',
          'city_name' => 'BULACAN'
        ],
        [
          'id' => '380',
          'province_id' => '29',
          'psgc_city' => '175204000',
          'city_name' => 'BULALACAO (SAN PEDRO)'
        ],
        [
          'id' => '381',
          'province_id' => '35',
          'psgc_city' => '056203000',
          'city_name' => 'BULAN'
        ],
        [
          'id' => '382',
          'province_id' => '78',
          'psgc_city' => '158402000',
          'city_name' => 'BULDON'
        ],
        [
          'id' => '383',
          'province_id' => '80',
          'psgc_city' => '153803000',
          'city_name' => 'BULUAN'
        ],
        [
          'id' => '384',
          'province_id' => '35',
          'psgc_city' => '056204000',
          'city_name' => 'BULUSAN'
        ],
        [
          'id' => '385',
          'province_id' => '81',
          'psgc_city' => '153637000',
          'city_name' => 'BUMBARAN'
        ],
        [
          'id' => '386',
          'province_id' => '72',
          'psgc_city' => '160302000',
          'city_name' => 'BUNAWAN'
        ],
        [
          'id' => '387',
          'province_id' => '53',
          'psgc_city' => '083710000',
          'city_name' => 'BURAUEN'
        ],
        [
          'id' => '388',
          'province_id' => '27',
          'psgc_city' => '045606000',
          'city_name' => 'BURDEOS'
        ],
        [
          'id' => '389',
          'province_id' => '13',
          'psgc_city' => '023105000',
          'city_name' => 'BURGOS'
        ],
        [
          'id' => '390',
          'province_id' => '7',
          'psgc_city' => '013308000',
          'city_name' => 'BURGOS'
        ],
        [
          'id' => '391',
          'province_id' => '10',
          'psgc_city' => '015516000',
          'city_name' => 'BURGOS'
        ],
        [
          'id' => '392',
          'province_id' => '8',
          'psgc_city' => '012806000',
          'city_name' => 'BURGOS'
        ],
        [
          'id' => '393',
          'province_id' => '74',
          'psgc_city' => '166704000',
          'city_name' => 'BURGOS'
        ],
        [
          'id' => '394',
          'province_id' => '9',
          'psgc_city' => '012904000',
          'city_name' => 'BURGOS'
        ],
        [
          'id' => '395',
          'province_id' => '40',
          'psgc_city' => '060405000',
          'city_name' => 'BURUANGA'
        ],
        [
          'id' => '396',
          'province_id' => '20',
          'psgc_city' => '031406000',
          'city_name' => 'BUSTOS'
        ],
        [
          'id' => '397',
          'province_id' => '31',
          'psgc_city' => '175307000',
          'city_name' => 'BUSUANGA'
        ],
        [
          'id' => '398',
          'province_id' => '81',
          'psgc_city' => '153607000',
          'city_name' => 'BUTIG'
        ],
        [
          'id' => '399',
          'province_id' => '55',
          'psgc_city' => '098302000',
          'city_name' => 'BUUG'
        ],
        [
          'id' => '400',
          'province_id' => '7',
          'psgc_city' => '013309000',
          'city_name' => 'CABA'
        ],
        [
          'id' => '401',
          'province_id' => '13',
          'psgc_city' => '023106000',
          'city_name' => 'CABAGAN'
        ],
        [
          'id' => '402',
          'province_id' => '17',
          'psgc_city' => '037102000',
          'city_name' => 'CABANGAN'
        ],
        [
          'id' => '403',
          'province_id' => '59',
          'psgc_city' => '101322000',
          'city_name' => 'CABANGLASAN'
        ],
        [
          'id' => '404',
          'province_id' => '14',
          'psgc_city' => '025702000',
          'city_name' => 'CABARROGUIS (Capital)'
        ],
        [
          'id' => '405',
          'province_id' => '43',
          'psgc_city' => '063012000',
          'city_name' => 'CABATUAN'
        ],
        [
          'id' => '406',
          'province_id' => '13',
          'psgc_city' => '023107000',
          'city_name' => 'CABATUAN'
        ],
        [
          'id' => '407',
          'province_id' => '21',
          'psgc_city' => '034904000',
          'city_name' => 'CABIAO'
        ],
        [
          'id' => '408',
          'province_id' => '54',
          'psgc_city' => '087803000',
          'city_name' => 'CABUCGAYAN'
        ],
        [
          'id' => '409',
          'province_id' => '9',
          'psgc_city' => '012905000',
          'city_name' => 'CABUGAO'
        ],
        [
          'id' => '410',
          'province_id' => '38',
          'psgc_city' => '051707000',
          'city_name' => 'CABUSAO'
        ],
        [
          'id' => '411',
          'province_id' => '25',
          'psgc_city' => '043404000',
          'city_name' => 'CABUYAO'
        ],
        [
          'id' => '412',
          'province_id' => '31',
          'psgc_city' => '175308000',
          'city_name' => 'CAGAYANCILLO'
        ],
        [
          'id' => '413',
          'province_id' => '75',
          'psgc_city' => '168502000',
          'city_name' => 'CAGDIANAO'
        ],
        [
          'id' => '414',
          'province_id' => '73',
          'psgc_city' => '166804000',
          'city_name' => 'CAGWAIT'
        ],
        [
          'id' => '415',
          'province_id' => '54',
          'psgc_city' => '087804000',
          'city_name' => 'CAIBIRAN'
        ],
        [
          'id' => '416',
          'province_id' => '23',
          'psgc_city' => '045805000',
          'city_name' => 'CAINTA'
        ],
        [
          'id' => '417',
          'province_id' => '30',
          'psgc_city' => '175903000',
          'city_name' => 'CAJIDIOCAN'
        ],
        [
          'id' => '418',
          'province_id' => '38',
          'psgc_city' => '051708000',
          'city_name' => 'CALABANGA'
        ],
        [
          'id' => '419',
          'province_id' => '26',
          'psgc_city' => '041007000',
          'city_name' => 'CALACA'
        ],
        [
          'id' => '420',
          'province_id' => '58',
          'psgc_city' => '104204000',
          'city_name' => 'CALAMBA'
        ],
        [
          'id' => '421',
          'province_id' => '5',
          'psgc_city' => '148101000',
          'city_name' => 'CALANASAN (BAYAG)'
        ],
        [
          'id' => '422',
          'province_id' => '81',
          'psgc_city' => '153632000',
          'city_name' => 'CALANOGAS'
        ],
        [
          'id' => '423',
          'province_id' => '47',
          'psgc_city' => '071210000',
          'city_name' => 'CALAPE'
        ],
        [
          'id' => '424',
          'province_id' => '10',
          'psgc_city' => '015517000',
          'city_name' => 'CALASIAO'
        ],
        [
          'id' => '425',
          'province_id' => '26',
          'psgc_city' => '041008000',
          'city_name' => 'CALATAGAN'
        ],
        [
          'id' => '426',
          'province_id' => '42',
          'psgc_city' => '184505000',
          'city_name' => 'CALATRAVA'
        ],
        [
          'id' => '427',
          'province_id' => '30',
          'psgc_city' => '175904000',
          'city_name' => 'CALATRAVA'
        ],
        [
          'id' => '428',
          'province_id' => '27',
          'psgc_city' => '045607000',
          'city_name' => 'CALAUAG'
        ],
        [
          'id' => '429',
          'province_id' => '25',
          'psgc_city' => '043406000',
          'city_name' => 'CALAUAN'
        ],
        [
          'id' => '430',
          'province_id' => '12',
          'psgc_city' => '021509000',
          'city_name' => 'CALAYAN'
        ],
        [
          'id' => '431',
          'province_id' => '52',
          'psgc_city' => '086004000',
          'city_name' => 'CALBIGA'
        ],
        [
          'id' => '432',
          'province_id' => '43',
          'psgc_city' => '063013000',
          'city_name' => 'CALINOG'
        ],
        [
          'id' => '433',
          'province_id' => '28',
          'psgc_city' => '175102000',
          'city_name' => 'CALINTAAN'
        ],
        [
          'id' => '434',
          'province_id' => '53',
          'psgc_city' => '083713000',
          'city_name' => 'CALUBIAN'
        ],
        [
          'id' => '435',
          'province_id' => '20',
          'psgc_city' => '031407000',
          'city_name' => 'CALUMPIT'
        ],
        [
          'id' => '436',
          'province_id' => '41',
          'psgc_city' => '060605000',
          'city_name' => 'CALUYA'
        ],
        [
          'id' => '437',
          'province_id' => '12',
          'psgc_city' => '021510000',
          'city_name' => 'CAMALANIUGAN'
        ],
        [
          'id' => '438',
          'province_id' => '36',
          'psgc_city' => '050502000',
          'city_name' => 'CAMALIG'
        ],
        [
          'id' => '439',
          'province_id' => '38',
          'psgc_city' => '051709000',
          'city_name' => 'CAMALIGAN'
        ],
        [
          'id' => '440',
          'province_id' => '18',
          'psgc_city' => '036903000',
          'city_name' => 'CAMILING'
        ],
        [
          'id' => '441',
          'province_id' => '38',
          'psgc_city' => '051710000',
          'city_name' => 'CANAMAN'
        ],
        [
          'id' => '442',
          'province_id' => '50',
          'psgc_city' => '082605000',
          'city_name' => 'CAN-AVID'
        ],
        [
          'id' => '443',
          'province_id' => '19',
          'psgc_city' => '035405000',
          'city_name' => 'CANDABA'
        ],
        [
          'id' => '444',
          'province_id' => '27',
          'psgc_city' => '045608000',
          'city_name' => 'CANDELARIA'
        ],
        [
          'id' => '445',
          'province_id' => '17',
          'psgc_city' => '037103000',
          'city_name' => 'CANDELARIA'
        ],
        [
          'id' => '446',
          'province_id' => '47',
          'psgc_city' => '071211000',
          'city_name' => 'CANDIJAY'
        ],
        [
          'id' => '447',
          'province_id' => '42',
          'psgc_city' => '184506000',
          'city_name' => 'CANDONI'
        ],
        [
          'id' => '448',
          'province_id' => '73',
          'psgc_city' => '166805000',
          'city_name' => 'CANTILAN'
        ],
        [
          'id' => '449',
          'province_id' => '9',
          'psgc_city' => '012907000',
          'city_name' => 'CAOAYAN'
        ],
        [
          'id' => '450',
          'province_id' => '34',
          'psgc_city' => '051602000',
          'city_name' => 'CAPALONGA'
        ],
        [
          'id' => '451',
          'province_id' => '18',
          'psgc_city' => '036904000',
          'city_name' => 'CAPAS'
        ],
        [
          'id' => '452',
          'province_id' => '53',
          'psgc_city' => '083714000',
          'city_name' => 'CAPOOCAN'
        ],
        [
          'id' => '453',
          'province_id' => '51',
          'psgc_city' => '084804000',
          'city_name' => 'CAPUL'
        ],
        [
          'id' => '454',
          'province_id' => '63',
          'psgc_city' => '112504000',
          'city_name' => 'CARAGA'
        ],
        [
          'id' => '455',
          'province_id' => '38',
          'psgc_city' => '051711000',
          'city_name' => 'CARAMOAN'
        ],
        [
          'id' => '456',
          'province_id' => '33',
          'psgc_city' => '052004000',
          'city_name' => 'CARAMORAN'
        ],
        [
          'id' => '457',
          'province_id' => '8',
          'psgc_city' => '012807000',
          'city_name' => 'CARASI'
        ],
        [
          'id' => '458',
          'province_id' => '23',
          'psgc_city' => '045806000',
          'city_name' => 'CARDONA'
        ],
        [
          'id' => '459',
          'province_id' => '53',
          'psgc_city' => '083715000',
          'city_name' => 'CARIGARA'
        ],
        [
          'id' => '460',
          'province_id' => '43',
          'psgc_city' => '063014000',
          'city_name' => 'CARLES'
        ],
        [
          'id' => '461',
          'province_id' => '46',
          'psgc_city' => '072215000',
          'city_name' => 'CARMEN'
        ],
        [
          'id' => '462',
          'province_id' => '66',
          'psgc_city' => '112303000',
          'city_name' => 'CARMEN'
        ],
        [
          'id' => '463',
          'province_id' => '69',
          'psgc_city' => '124702000',
          'city_name' => 'CARMEN'
        ],
        [
          'id' => '464',
          'province_id' => '47',
          'psgc_city' => '071212000',
          'city_name' => 'CARMEN'
        ],
        [
          'id' => '465',
          'province_id' => '71',
          'psgc_city' => '160204000',
          'city_name' => 'CARMEN'
        ],
        [
          'id' => '466',
          'province_id' => '73',
          'psgc_city' => '166806000',
          'city_name' => 'CARMEN'
        ],
        [
          'id' => '467',
          'province_id' => '24',
          'psgc_city' => '042104000',
          'city_name' => 'CARMONA'
        ],
        [
          'id' => '468',
          'province_id' => '21',
          'psgc_city' => '034905000',
          'city_name' => 'CARRANGLAN'
        ],
        [
          'id' => '469',
          'province_id' => '73',
          'psgc_city' => '166807000',
          'city_name' => 'CARRASCAL'
        ],
        [
          'id' => '470',
          'province_id' => '35',
          'psgc_city' => '056205000',
          'city_name' => 'CASIGURAN'
        ],
        [
          'id' => '471',
          'province_id' => '22',
          'psgc_city' => '037702000',
          'city_name' => 'CASIGURAN'
        ],
        [
          'id' => '472',
          'province_id' => '35',
          'psgc_city' => '056206000',
          'city_name' => 'CASTILLA'
        ],
        [
          'id' => '473',
          'province_id' => '17',
          'psgc_city' => '037104000',
          'city_name' => 'CASTILLEJOS'
        ],
        [
          'id' => '474',
          'province_id' => '37',
          'psgc_city' => '054105000',
          'city_name' => 'CATAINGAN'
        ],
        [
          'id' => '475',
          'province_id' => '27',
          'psgc_city' => '045610000',
          'city_name' => 'CATANAUAN'
        ],
        [
          'id' => '476',
          'province_id' => '62',
          'psgc_city' => '101801000',
          'city_name' => 'CATARMAN'
        ],
        [
          'id' => '477',
          'province_id' => '51',
          'psgc_city' => '084805000',
          'city_name' => 'CATARMAN (Capital)'
        ],
        [
          'id' => '478',
          'province_id' => '63',
          'psgc_city' => '112505000',
          'city_name' => 'CATEEL'
        ],
        [
          'id' => '479',
          'province_id' => '47',
          'psgc_city' => '071213000',
          'city_name' => 'CATIGBIAN'
        ],
        [
          'id' => '480',
          'province_id' => '46',
          'psgc_city' => '072216000',
          'city_name' => 'CATMON'
        ],
        [
          'id' => '481',
          'province_id' => '51',
          'psgc_city' => '084806000',
          'city_name' => 'CATUBIG'
        ],
        [
          'id' => '482',
          'province_id' => '42',
          'psgc_city' => '184507000',
          'city_name' => 'CAUAYAN'
        ],
        [
          'id' => '483',
          'province_id' => '25',
          'psgc_city' => '043407000',
          'city_name' => 'CAVINTI'
        ],
        [
          'id' => '484',
          'province_id' => '37',
          'psgc_city' => '054106000',
          'city_name' => 'CAWAYAN'
        ],
        [
          'id' => '485',
          'province_id' => '9',
          'psgc_city' => '012908000',
          'city_name' => 'CERVANTES'
        ],
        [
          'id' => '486',
          'province_id' => '58',
          'psgc_city' => '104205000',
          'city_name' => 'CLARIN'
        ],
        [
          'id' => '487',
          'province_id' => '47',
          'psgc_city' => '071214000',
          'city_name' => 'CLARIN'
        ],
        [
          'id' => '488',
          'province_id' => '74',
          'psgc_city' => '166706000',
          'city_name' => 'CLAVER'
        ],
        [
          'id' => '489',
          'province_id' => '12',
          'psgc_city' => '021511000',
          'city_name' => 'CLAVERIA'
        ],
        [
          'id' => '490',
          'province_id' => '37',
          'psgc_city' => '054107000',
          'city_name' => 'CLAVERIA'
        ],
        [
          'id' => '491',
          'province_id' => '61',
          'psgc_city' => '104306000',
          'city_name' => 'CLAVERIA'
        ],
        [
          'id' => '492',
          'province_id' => '68',
          'psgc_city' => '126502000',
          'city_name' => 'COLUMBIO'
        ],
        [
          'id' => '493',
          'province_id' => '64',
          'psgc_city' => '118201000',
          'city_name' => 'COMPOSTELA'
        ],
        [
          'id' => '494',
          'province_id' => '46',
          'psgc_city' => '072218000',
          'city_name' => 'COMPOSTELA'
        ],
        [
          'id' => '495',
          'province_id' => '58',
          'psgc_city' => '104206000',
          'city_name' => 'CONCEPCION'
        ],
        [
          'id' => '496',
          'province_id' => '43',
          'psgc_city' => '063015000',
          'city_name' => 'CONCEPCION'
        ],
        [
          'id' => '497',
          'province_id' => '18',
          'psgc_city' => '036905000',
          'city_name' => 'CONCEPCION'
        ],
        [
          'id' => '498',
          'province_id' => '30',
          'psgc_city' => '175905000',
          'city_name' => 'CONCEPCION'
        ],
        [
          'id' => '499',
          'province_id' => '5',
          'psgc_city' => '148102000',
          'city_name' => 'CONNER'
        ],
        [
          'id' => '500',
          'province_id' => '46',
          'psgc_city' => '072219000',
          'city_name' => 'CONSOLACION'
        ],
        [
          'id' => '501',
          'province_id' => '30',
          'psgc_city' => '175906000',
          'city_name' => 'CORCUERA'
        ],
        [
          'id' => '502',
          'province_id' => '46',
          'psgc_city' => '072220000',
          'city_name' => 'CORDOBA'
        ],
        [
          'id' => '503',
          'province_id' => '13',
          'psgc_city' => '023109000',
          'city_name' => 'CORDON'
        ],
        [
          'id' => '504',
          'province_id' => '47',
          'psgc_city' => '071215000',
          'city_name' => 'CORELLA'
        ],
        [
          'id' => '505',
          'province_id' => '31',
          'psgc_city' => '175309000',
          'city_name' => 'CORON'
        ],
        [
          'id' => '506',
          'province_id' => '47',
          'psgc_city' => '071216000',
          'city_name' => 'CORTES'
        ],
        [
          'id' => '507',
          'province_id' => '73',
          'psgc_city' => '166808000',
          'city_name' => 'CORTES'
        ],
        [
          'id' => '508',
          'province_id' => '39',
          'psgc_city' => '061901000',
          'city_name' => 'CUARTERO'
        ],
        [
          'id' => '509',
          'province_id' => '26',
          'psgc_city' => '041009000',
          'city_name' => 'CUENCA'
        ],
        [
          'id' => '510',
          'province_id' => '54',
          'psgc_city' => '087805000',
          'city_name' => 'CULABA'
        ],
        [
          'id' => '511',
          'province_id' => '41',
          'psgc_city' => '060606000',
          'city_name' => 'CULASI'
        ],
        [
          'id' => '512',
          'province_id' => '31',
          'psgc_city' => '175322000',
          'city_name' => 'CULION'
        ],
        [
          'id' => '513',
          'province_id' => '8',
          'psgc_city' => '012808000',
          'city_name' => 'CURRIMAO'
        ],
        [
          'id' => '514',
          'province_id' => '21',
          'psgc_city' => '034906000',
          'city_name' => 'CUYAPO'
        ],
        [
          'id' => '515',
          'province_id' => '31',
          'psgc_city' => '175310000',
          'city_name' => 'CUYO'
        ],
        [
          'id' => '516',
          'province_id' => '46',
          'psgc_city' => '072221000',
          'city_name' => 'DAANBANTAYAN'
        ],
        [
          'id' => '517',
          'province_id' => '34',
          'psgc_city' => '051603000',
          'city_name' => 'DAET (Capital)'
        ],
        [
          'id' => '518',
          'province_id' => '53',
          'psgc_city' => '083717000',
          'city_name' => 'DAGAMI'
        ],
        [
          'id' => '519',
          'province_id' => '47',
          'psgc_city' => '071217000',
          'city_name' => 'DAGOHOY'
        ],
        [
          'id' => '520',
          'province_id' => '4',
          'psgc_city' => '140105000',
          'city_name' => 'DAGUIOMAN'
        ],
        [
          'id' => '521',
          'province_id' => '46',
          'psgc_city' => '072222000',
          'city_name' => 'DALAGUETE'
        ],
        [
          'id' => '522',
          'province_id' => '59',
          'psgc_city' => '101302000',
          'city_name' => 'DAMULOG'
        ],
        [
          'id' => '523',
          'province_id' => '47',
          'psgc_city' => '071218000',
          'city_name' => 'DANAO'
        ],
        [
          'id' => '524',
          'province_id' => '59',
          'psgc_city' => '101303000',
          'city_name' => 'DANGCAGAN'
        ],
        [
          'id' => '525',
          'province_id' => '4',
          'psgc_city' => '140106000',
          'city_name' => 'DANGLAS'
        ],
        [
          'id' => '526',
          'province_id' => '39',
          'psgc_city' => '061902000',
          'city_name' => 'DAO'
        ],
        [
          'id' => '527',
          'province_id' => '74',
          'psgc_city' => '166707000',
          'city_name' => 'DAPA'
        ],
        [
          'id' => '528',
          'province_id' => '36',
          'psgc_city' => '050503000',
          'city_name' => 'DARAGA (LOCSIN)'
        ],
        [
          'id' => '529',
          'province_id' => '52',
          'psgc_city' => '086006000',
          'city_name' => 'DARAM'
        ],
        [
          'id' => '530',
          'province_id' => '24',
          'psgc_city' => '042106000',
          'city_name' => 'DASMARIÑAS'
        ],
        [
          'id' => '531',
          'province_id' => '10',
          'psgc_city' => '015519000',
          'city_name' => 'DASOL'
        ],
        [
          'id' => '532',
          'province_id' => '80',
          'psgc_city' => '153828000',
          'city_name' => 'DATU ABDULLAH SANGKI'
        ],
        [
          'id' => '533',
          'province_id' => '80',
          'psgc_city' => '153831000',
          'city_name' => 'DATU ANGGAL MIDTIMBANG'
        ],
        [
          'id' => '534',
          'province_id' => '78',
          'psgc_city' => '158403000',
          'city_name' => 'DATU BLAH T. SINSUAT'
        ],
        [
          'id' => '535',
          'province_id' => '78',
          'psgc_city' => '158404000',
          'city_name' => 'DATU ODIN SINSUAT (DINAIG) (Capital)'
        ],
        [
          'id' => '536',
          'province_id' => '80',
          'psgc_city' => '153805000',
          'city_name' => 'DATU PAGLAS'
        ],
        [
          'id' => '537',
          'province_id' => '80',
          'psgc_city' => '153806000',
          'city_name' => 'DATU PIANG'
        ],
        [
          'id' => '538',
          'province_id' => '80',
          'psgc_city' => '153826000',
          'city_name' => 'DATU SAUDI-AMPATUAN'
        ],
        [
          'id' => '539',
          'province_id' => '80',
          'psgc_city' => '153827000',
          'city_name' => 'DATU UNSAY'
        ],
        [
          'id' => '540',
          'province_id' => '45',
          'psgc_city' => '184609000',
          'city_name' => 'DAUIN'
        ],
        [
          'id' => '541',
          'province_id' => '47',
          'psgc_city' => '071219000',
          'city_name' => 'DAUIS'
        ],
        [
          'id' => '542',
          'province_id' => '74',
          'psgc_city' => '166708000',
          'city_name' => 'DEL CARMEN'
        ],
        [
          'id' => '543',
          'province_id' => '38',
          'psgc_city' => '051712000',
          'city_name' => 'DEL GALLEGO'
        ],
        [
          'id' => '544',
          'province_id' => '13',
          'psgc_city' => '023118000',
          'city_name' => 'DELFIN ALBANO (MAGSAYSAY)'
        ],
        [
          'id' => '545',
          'province_id' => '11',
          'psgc_city' => '025006000',
          'city_name' => 'DIADI'
        ],
        [
          'id' => '546',
          'province_id' => '14',
          'psgc_city' => '025703000',
          'city_name' => 'DIFFUN'
        ],
        [
          'id' => '547',
          'province_id' => '22',
          'psgc_city' => '037703000',
          'city_name' => 'DILASAG'
        ],
        [
          'id' => '548',
          'province_id' => '37',
          'psgc_city' => '054108000',
          'city_name' => 'DIMASALANG'
        ],
        [
          'id' => '549',
          'province_id' => '57',
          'psgc_city' => '097305000',
          'city_name' => 'DIMATALING'
        ],
        [
          'id' => '550',
          'province_id' => '47',
          'psgc_city' => '071220000',
          'city_name' => 'DIMIAO'
        ],
        [
          'id' => '551',
          'province_id' => '75',
          'psgc_city' => '168503000',
          'city_name' => 'DINAGAT'
        ],
        [
          'id' => '552',
          'province_id' => '22',
          'psgc_city' => '037704000',
          'city_name' => 'DINALUNGAN'
        ],
        [
          'id' => '553',
          'province_id' => '16',
          'psgc_city' => '030804000',
          'city_name' => 'DINALUPIHAN'
        ],
        [
          'id' => '554',
          'province_id' => '13',
          'psgc_city' => '023110000',
          'city_name' => 'DINAPIGUE'
        ],
        [
          'id' => '555',
          'province_id' => '57',
          'psgc_city' => '097306000',
          'city_name' => 'DINAS'
        ],
        [
          'id' => '556',
          'province_id' => '22',
          'psgc_city' => '037705000',
          'city_name' => 'DINGALAN'
        ],
        [
          'id' => '557',
          'province_id' => '43',
          'psgc_city' => '063016000',
          'city_name' => 'DINGLE'
        ],
        [
          'id' => '558',
          'province_id' => '8',
          'psgc_city' => '012809000',
          'city_name' => 'DINGRAS'
        ],
        [
          'id' => '559',
          'province_id' => '22',
          'psgc_city' => '037706000',
          'city_name' => 'DIPACULAO'
        ],
        [
          'id' => '560',
          'province_id' => '55',
          'psgc_city' => '098303000',
          'city_name' => 'DIPLAHAN'
        ],
        [
          'id' => '561',
          'province_id' => '81',
          'psgc_city' => '153624000',
          'city_name' => 'DITSAAN-RAMAIN'
        ],
        [
          'id' => '562',
          'province_id' => '13',
          'psgc_city' => '023111000',
          'city_name' => 'DIVILACAN'
        ],
        [
          'id' => '563',
          'province_id' => '27',
          'psgc_city' => '045615000',
          'city_name' => 'DOLORES'
        ],
        [
          'id' => '564',
          'province_id' => '50',
          'psgc_city' => '082606000',
          'city_name' => 'DOLORES'
        ],
        [
          'id' => '565',
          'province_id' => '4',
          'psgc_city' => '140107000',
          'city_name' => 'DOLORES'
        ],
        [
          'id' => '566',
          'province_id' => '59',
          'psgc_city' => '101304000',
          'city_name' => 'DON CARLOS'
        ],
        [
          'id' => '567',
          'province_id' => '65',
          'psgc_city' => '112416000',
          'city_name' => 'DON MARCELINO'
        ],
        [
          'id' => '568',
          'province_id' => '58',
          'psgc_city' => '104217000',
          'city_name' => 'DON VICTORIANO CHIONGBIAN (DON MARIANO MARCOS)'
        ],
        [
          'id' => '569',
          'province_id' => '20',
          'psgc_city' => '031424000',
          'city_name' => 'DOÑA REMEDIOS TRINIDAD'
        ],
        [
          'id' => '570',
          'province_id' => '35',
          'psgc_city' => '056207000',
          'city_name' => 'DONSOL'
        ],
        [
          'id' => '571',
          'province_id' => '43',
          'psgc_city' => '063017000',
          'city_name' => 'DUEÑAS'
        ],
        [
          'id' => '572',
          'province_id' => '47',
          'psgc_city' => '071221000',
          'city_name' => 'DUERO'
        ],
        [
          'id' => '573',
          'province_id' => '53',
          'psgc_city' => '083718000',
          'city_name' => 'DULAG'
        ],
        [
          'id' => '574',
          'province_id' => '39',
          'psgc_city' => '061903000',
          'city_name' => 'DUMALAG'
        ],
        [
          'id' => '575',
          'province_id' => '57',
          'psgc_city' => '097307000',
          'city_name' => 'DUMALINAO'
        ],
        [
          'id' => '576',
          'province_id' => '8',
          'psgc_city' => '012810000',
          'city_name' => 'DUMALNEG'
        ],
        [
          'id' => '577',
          'province_id' => '43',
          'psgc_city' => '063018000',
          'city_name' => 'DUMANGAS'
        ],
        [
          'id' => '578',
          'province_id' => '46',
          'psgc_city' => '072224000',
          'city_name' => 'DUMANJUG'
        ],
        [
          'id' => '579',
          'province_id' => '31',
          'psgc_city' => '175311000',
          'city_name' => 'DUMARAN'
        ],
        [
          'id' => '580',
          'province_id' => '39',
          'psgc_city' => '061904000',
          'city_name' => 'DUMARAO'
        ],
        [
          'id' => '581',
          'province_id' => '57',
          'psgc_city' => '097308000',
          'city_name' => 'DUMINGAG'
        ],
        [
          'id' => '582',
          'province_id' => '11',
          'psgc_city' => '025007000',
          'city_name' => 'DUPAX DEL NORTE'
        ],
        [
          'id' => '583',
          'province_id' => '11',
          'psgc_city' => '025008000',
          'city_name' => 'DUPAX DEL SUR'
        ],
        [
          'id' => '584',
          'province_id' => '13',
          'psgc_city' => '023112000',
          'city_name' => 'ECHAGUE'
        ],
        [
          'id' => '585',
          'province_id' => '31',
          'psgc_city' => '175312000',
          'city_name' => 'EL NIDO (BACUIT)'
        ],
        [
          'id' => '586',
          'province_id' => '12',
          'psgc_city' => '021512000',
          'city_name' => 'ENRILE'
        ],
        [
          'id' => '587',
          'province_id' => '42',
          'psgc_city' => '184508000',
          'city_name' => 'ENRIQUE B. MAGALONA (SARAVIA)'
        ],
        [
          'id' => '588',
          'province_id' => '48',
          'psgc_city' => '076101000',
          'city_name' => 'ENRIQUE VILLANUEVA'
        ],
        [
          'id' => '589',
          'province_id' => '72',
          'psgc_city' => '160303000',
          'city_name' => 'ESPERANZA'
        ],
        [
          'id' => '590',
          'province_id' => '37',
          'psgc_city' => '054109000',
          'city_name' => 'ESPERANZA'
        ],
        [
          'id' => '591',
          'province_id' => '68',
          'psgc_city' => '126503000',
          'city_name' => 'ESPERANZA'
        ],
        [
          'id' => '592',
          'province_id' => '43',
          'psgc_city' => '063019000',
          'city_name' => 'ESTANCIA'
        ],
        [
          'id' => '593',
          'province_id' => '25',
          'psgc_city' => '043408000',
          'city_name' => 'FAMY'
        ],
        [
          'id' => '594',
          'province_id' => '30',
          'psgc_city' => '175916000',
          'city_name' => 'FERROL'
        ],
        [
          'id' => '595',
          'province_id' => '5',
          'psgc_city' => '148103000',
          'city_name' => 'FLORA'
        ],
        [
          'id' => '596',
          'province_id' => '19',
          'psgc_city' => '035406000',
          'city_name' => 'FLORIDABLANCA'
        ],
        [
          'id' => '597',
          'province_id' => '21',
          'psgc_city' => '034907000',
          'city_name' => 'GABALDON (BITULOK & SABANI)'
        ],
        [
          'id' => '598',
          'province_id' => '38',
          'psgc_city' => '051713000',
          'city_name' => 'GAINZA'
        ],
        [
          'id' => '599',
          'province_id' => '9',
          'psgc_city' => '012909000',
          'city_name' => 'GALIMUYOD'
        ],
        [
          'id' => '600',
          'province_id' => '51',
          'psgc_city' => '084807000',
          'city_name' => 'GAMAY'
        ],
        [
          'id' => '601',
          'province_id' => '13',
          'psgc_city' => '023113000',
          'city_name' => 'GAMU'
        ],
        [
          'id' => '602',
          'province_id' => '81',
          'psgc_city' => '153609000',
          'city_name' => 'GANASSI'
        ],
        [
          'id' => '603',
          'province_id' => '52',
          'psgc_city' => '086007000',
          'city_name' => 'GANDARA'
        ],
        [
          'id' => '604',
          'province_id' => '38',
          'psgc_city' => '051714000',
          'city_name' => 'GARCHITORENA'
        ],
        [
          'id' => '605',
          'province_id' => '47',
          'psgc_city' => '071222000',
          'city_name' => 'GARCIA HERNANDEZ'
        ],
        [
          'id' => '606',
          'province_id' => '32',
          'psgc_city' => '174003000',
          'city_name' => 'GASAN'
        ],
        [
          'id' => '607',
          'province_id' => '12',
          'psgc_city' => '021513000',
          'city_name' => 'GATTARAN'
        ],
        [
          'id' => '608',
          'province_id' => '24',
          'psgc_city' => '042123000',
          'city_name' => 'GEN. MARIANO ALVAREZ'
        ],
        [
          'id' => '609',
          'province_id' => '80',
          'psgc_city' => '153819000',
          'city_name' => 'GEN. S. K. PENDATUN'
        ],
        [
          'id' => '610',
          'province_id' => '24',
          'psgc_city' => '042107000',
          'city_name' => 'GENERAL EMILIO AGUINALDO'
        ],
        [
          'id' => '611',
          'province_id' => '27',
          'psgc_city' => '045616000',
          'city_name' => 'GENERAL LUNA'
        ],
        [
          'id' => '612',
          'province_id' => '74',
          'psgc_city' => '166710000',
          'city_name' => 'GENERAL LUNA'
        ],
        [
          'id' => '613',
          'province_id' => '50',
          'psgc_city' => '082607000',
          'city_name' => 'GENERAL MACARTHUR'
        ],
        [
          'id' => '614',
          'province_id' => '21',
          'psgc_city' => '034909000',
          'city_name' => 'GENERAL MAMERTO NATIVIDAD'
        ],
        [
          'id' => '615',
          'province_id' => '27',
          'psgc_city' => '045617000',
          'city_name' => 'GENERAL NAKAR'
        ],
        [
          'id' => '616',
          'province_id' => '21',
          'psgc_city' => '034910000',
          'city_name' => 'GENERAL TINIO (PAPAYA)'
        ],
        [
          'id' => '617',
          'province_id' => '24',
          'psgc_city' => '042108000',
          'city_name' => 'GENERAL TRIAS'
        ],
        [
          'id' => '618',
          'province_id' => '18',
          'psgc_city' => '036906000',
          'city_name' => 'GERONA'
        ],
        [
          'id' => '619',
          'province_id' => '74',
          'psgc_city' => '166711000',
          'city_name' => 'GIGAQUIT'
        ],
        [
          'id' => '620',
          'province_id' => '33',
          'psgc_city' => '052005000',
          'city_name' => 'GIGMOTO'
        ],
        [
          'id' => '621',
          'province_id' => '46',
          'psgc_city' => '072225000',
          'city_name' => 'GINATILAN'
        ],
        [
          'id' => '622',
          'province_id' => '50',
          'psgc_city' => '082608000',
          'city_name' => 'GIPORLOS'
        ],
        [
          'id' => '623',
          'province_id' => '61',
          'psgc_city' => '104309000',
          'city_name' => 'GITAGUM'
        ],
        [
          'id' => '624',
          'province_id' => '70',
          'psgc_city' => '128002000',
          'city_name' => 'GLAN'
        ],
        [
          'id' => '625',
          'province_id' => '29',
          'psgc_city' => '175206000',
          'city_name' => 'GLORIA'
        ],
        [
          'id' => '626',
          'province_id' => '38',
          'psgc_city' => '051715000',
          'city_name' => 'GOA'
        ],
        [
          'id' => '627',
          'province_id' => '56',
          'psgc_city' => '097225000',
          'city_name' => 'GODOD'
        ],
        [
          'id' => '628',
          'province_id' => '12',
          'psgc_city' => '021514000',
          'city_name' => 'GONZAGA'
        ],
        [
          'id' => '629',
          'province_id' => '63',
          'psgc_city' => '112506000',
          'city_name' => 'GOVERNOR GENEROSO'
        ],
        [
          'id' => '630',
          'province_id' => '9',
          'psgc_city' => '012910000',
          'city_name' => 'GREGORIO DEL PILAR (CONCEPCION)'
        ],
        [
          'id' => '631',
          'province_id' => '19',
          'psgc_city' => '035407000',
          'city_name' => 'GUAGUA'
        ],
        [
          'id' => '632',
          'province_id' => '35',
          'psgc_city' => '056208000',
          'city_name' => 'GUBAT'
        ],
        [
          'id' => '633',
          'province_id' => '20',
          'psgc_city' => '031408000',
          'city_name' => 'GUIGUINTO'
        ],
        [
          'id' => '634',
          'province_id' => '21',
          'psgc_city' => '034911000',
          'city_name' => 'GUIMBA'
        ],
        [
          'id' => '635',
          'province_id' => '43',
          'psgc_city' => '063020000',
          'city_name' => 'GUIMBAL'
        ],
        [
          'id' => '636',
          'province_id' => '27',
          'psgc_city' => '045618000',
          'city_name' => 'GUINAYANGAN'
        ],
        [
          'id' => '637',
          'province_id' => '47',
          'psgc_city' => '071223000',
          'city_name' => 'GUINDULMAN'
        ],
        [
          'id' => '638',
          'province_id' => '80',
          'psgc_city' => '153825000',
          'city_name' => 'GUINDULUNGAN'
        ],
        [
          'id' => '639',
          'province_id' => '36',
          'psgc_city' => '050504000',
          'city_name' => 'GUINOBATAN'
        ],
        [
          'id' => '640',
          'province_id' => '62',
          'psgc_city' => '101802000',
          'city_name' => 'GUINSILIBAN'
        ],
        [
          'id' => '641',
          'province_id' => '57',
          'psgc_city' => '097343000',
          'city_name' => 'GUIPOS'
        ],
        [
          'id' => '642',
          'province_id' => '50',
          'psgc_city' => '082609000',
          'city_name' => 'GUIUAN'
        ],
        [
          'id' => '643',
          'province_id' => '27',
          'psgc_city' => '045619000',
          'city_name' => 'GUMACA'
        ],
        [
          'id' => '644',
          'province_id' => '56',
          'psgc_city' => '097223000',
          'city_name' => 'GUTALAC'
        ],
        [
          'id' => '645',
          'province_id' => '76',
          'psgc_city' => '150710000',
          'city_name' => 'HADJI MOHAMMAD AJUL'
        ],
        [
          'id' => '646',
          'province_id' => '76',
          'psgc_city' => '150712000',
          'city_name' => 'HADJI MUHTAMAD'
        ],
        [
          'id' => '647',
          'province_id' => '79',
          'psgc_city' => '156606000',
          'city_name' => 'HADJI PANGLIMA TAHIL (MARUNGGAS)'
        ],
        [
          'id' => '648',
          'province_id' => '65',
          'psgc_city' => '112404000',
          'city_name' => 'HAGONOY'
        ],
        [
          'id' => '649',
          'province_id' => '20',
          'psgc_city' => '031409000',
          'city_name' => 'HAGONOY'
        ],
        [
          'id' => '650',
          'province_id' => '41',
          'psgc_city' => '060608000',
          'city_name' => 'HAMTIC'
        ],
        [
          'id' => '651',
          'province_id' => '16',
          'psgc_city' => '030805000',
          'city_name' => 'HERMOSA'
        ],
        [
          'id' => '652',
          'province_id' => '50',
          'psgc_city' => '082610000',
          'city_name' => 'HERNANI'
        ],
        [
          'id' => '653',
          'province_id' => '53',
          'psgc_city' => '083719000',
          'city_name' => 'HILONGOS'
        ],
        [
          'id' => '654',
          'province_id' => '52',
          'psgc_city' => '086008000',
          'city_name' => 'HINABANGAN'
        ],
        [
          'id' => '655',
          'province_id' => '73',
          'psgc_city' => '166809000',
          'city_name' => 'HINATUAN'
        ],
        [
          'id' => '656',
          'province_id' => '53',
          'psgc_city' => '083720000',
          'city_name' => 'HINDANG'
        ],
        [
          'id' => '657',
          'province_id' => '2',
          'psgc_city' => '142709000',
          'city_name' => 'HINGYON'
        ],
        [
          'id' => '658',
          'province_id' => '42',
          'psgc_city' => '184511000',
          'city_name' => 'HINIGARAN'
        ],
        [
          'id' => '659',
          'province_id' => '42',
          'psgc_city' => '184512000',
          'city_name' => 'HINOBA-AN (ASIA)'
        ],
        [
          'id' => '660',
          'province_id' => '49',
          'psgc_city' => '086403000',
          'city_name' => 'HINUNANGAN'
        ],
        [
          'id' => '661',
          'province_id' => '49',
          'psgc_city' => '086404000',
          'city_name' => 'HINUNDAYAN'
        ],
        [
          'id' => '662',
          'province_id' => '2',
          'psgc_city' => '142702000',
          'city_name' => 'HUNGDUAN'
        ],
        [
          'id' => '663',
          'province_id' => '17',
          'psgc_city' => '037105000',
          'city_name' => 'IBA (Capital)'
        ],
        [
          'id' => '664',
          'province_id' => '26',
          'psgc_city' => '041010000',
          'city_name' => 'IBAAN'
        ],
        [
          'id' => '665',
          'province_id' => '40',
          'psgc_city' => '060406000',
          'city_name' => 'IBAJAY'
        ],
        [
          'id' => '666',
          'province_id' => '43',
          'psgc_city' => '063021000',
          'city_name' => 'IGBARAS'
        ],
        [
          'id' => '667',
          'province_id' => '12',
          'psgc_city' => '021515000',
          'city_name' => 'IGUIG'
        ],
        [
          'id' => '668',
          'province_id' => '13',
          'psgc_city' => '023114000',
          'city_name' => 'ILAGAN (Capital)'
        ],
        [
          'id' => '669',
          'province_id' => '42',
          'psgc_city' => '184513000',
          'city_name' => 'ILOG'
        ],
        [
          'id' => '670',
          'province_id' => '55',
          'psgc_city' => '098304000',
          'city_name' => 'IMELDA'
        ],
        [
          'id' => '671',
          'province_id' => '59',
          'psgc_city' => '101305000',
          'city_name' => 'IMPASUG-ONG'
        ],
        [
          'id' => '672',
          'province_id' => '24',
          'psgc_city' => '042109000',
          'city_name' => 'IMUS'
        ],
        [
          'id' => '673',
          'province_id' => '47',
          'psgc_city' => '071224000',
          'city_name' => 'INABANGA'
        ],
        [
          'id' => '674',
          'province_id' => '79',
          'psgc_city' => '156601000',
          'city_name' => 'INDANAN'
        ],
        [
          'id' => '675',
          'province_id' => '24',
          'psgc_city' => '042110000',
          'city_name' => 'INDANG'
        ],
        [
          'id' => '676',
          'province_id' => '10',
          'psgc_city' => '015520000',
          'city_name' => 'INFANTA'
        ],
        [
          'id' => '677',
          'province_id' => '27',
          'psgc_city' => '045620000',
          'city_name' => 'INFANTA'
        ],
        [
          'id' => '678',
          'province_id' => '61',
          'psgc_city' => '104310000',
          'city_name' => 'INITAO'
        ],
        [
          'id' => '679',
          'province_id' => '53',
          'psgc_city' => '083721000',
          'city_name' => 'INOPACAN'
        ],
        [
          'id' => '680',
          'province_id' => '55',
          'psgc_city' => '098305000',
          'city_name' => 'IPIL (Capital)'
        ],
        [
          'id' => '681',
          'province_id' => '35',
          'psgc_city' => '056209000',
          'city_name' => 'IROSIN'
        ],
        [
          'id' => '682',
          'province_id' => '53',
          'psgc_city' => '083722000',
          'city_name' => 'ISABEL'
        ],
        [
          'id' => '683',
          'province_id' => '42',
          'psgc_city' => '184514000',
          'city_name' => 'ISABELA'
        ],
        [
          'id' => '684',
          'province_id' => '68',
          'psgc_city' => '126504000',
          'city_name' => 'ISULAN (Capital)'
        ],
        [
          'id' => '685',
          'province_id' => '15',
          'psgc_city' => '020902000',
          'city_name' => 'ITBAYAT'
        ],
        [
          'id' => '686',
          'province_id' => '3',
          'psgc_city' => '141106000',
          'city_name' => 'ITOGON'
        ],
        [
          'id' => '687',
          'province_id' => '15',
          'psgc_city' => '020903000',
          'city_name' => 'IVANA'
        ],
        [
          'id' => '688',
          'province_id' => '39',
          'psgc_city' => '061905000',
          'city_name' => 'IVISAN'
        ],
        [
          'id' => '689',
          'province_id' => '71',
          'psgc_city' => '160205000',
          'city_name' => 'JABONGA'
        ],
        [
          'id' => '690',
          'province_id' => '21',
          'psgc_city' => '034912000',
          'city_name' => 'JAEN'
        ],
        [
          'id' => '691',
          'province_id' => '47',
          'psgc_city' => '071225000',
          'city_name' => 'JAGNA'
        ],
        [
          'id' => '692',
          'province_id' => '23',
          'psgc_city' => '045807000',
          'city_name' => 'JALA-JALA'
        ],
        [
          'id' => '693',
          'province_id' => '39',
          'psgc_city' => '061906000',
          'city_name' => 'JAMINDAN'
        ],
        [
          'id' => '694',
          'province_id' => '43',
          'psgc_city' => '063023000',
          'city_name' => 'JANIUAY'
        ],
        [
          'id' => '695',
          'province_id' => '53',
          'psgc_city' => '083723000',
          'city_name' => 'JARO'
        ],
        [
          'id' => '696',
          'province_id' => '61',
          'psgc_city' => '104311000',
          'city_name' => 'JASAAN'
        ],
        [
          'id' => '697',
          'province_id' => '53',
          'psgc_city' => '083724000',
          'city_name' => 'JAVIER (BUGHO)'
        ],
        [
          'id' => '698',
          'province_id' => '47',
          'psgc_city' => '071226000',
          'city_name' => 'JETAFE'
        ],
        [
          'id' => '699',
          'province_id' => '52',
          'psgc_city' => '086009000',
          'city_name' => 'JIABONG'
        ],
        [
          'id' => '700',
          'province_id' => '45',
          'psgc_city' => '184612000',
          'city_name' => 'JIMALALUD'
        ],
        [
          'id' => '701',
          'province_id' => '58',
          'psgc_city' => '104207000',
          'city_name' => 'JIMENEZ'
        ],
        [
          'id' => '702',
          'province_id' => '50',
          'psgc_city' => '082611000',
          'city_name' => 'JIPAPAD'
        ],
        [
          'id' => '703',
          'province_id' => '79',
          'psgc_city' => '156602000',
          'city_name' => 'JOLO (Capital)'
        ],
        [
          'id' => '704',
          'province_id' => '27',
          'psgc_city' => '045621000',
          'city_name' => 'JOMALIG'
        ],
        [
          'id' => '705',
          'province_id' => '13',
          'psgc_city' => '023115000',
          'city_name' => 'JONES'
        ],
        [
          'id' => '706',
          'province_id' => '44',
          'psgc_city' => '067902000',
          'city_name' => 'JORDAN (Capital)'
        ],
        [
          'id' => '707',
          'province_id' => '65',
          'psgc_city' => '112405000',
          'city_name' => 'JOSE ABAD SANTOS (TRINIDAD)'
        ],
        [
          'id' => '708',
          'province_id' => '56',
          'psgc_city' => '097222000',
          'city_name' => 'JOSE DALMAN (PONOT)'
        ],
        [
          'id' => '709',
          'province_id' => '34',
          'psgc_city' => '051605000',
          'city_name' => 'JOSE PANGANIBAN'
        ],
        [
          'id' => '710',
          'province_id' => '57',
          'psgc_city' => '097337000',
          'city_name' => 'JOSEFINA'
        ],
        [
          'id' => '711',
          'province_id' => '36',
          'psgc_city' => '050505000',
          'city_name' => 'JOVELLAR'
        ],
        [
          'id' => '712',
          'province_id' => '35',
          'psgc_city' => '056210000',
          'city_name' => 'JUBAN'
        ],
        [
          'id' => '713',
          'province_id' => '53',
          'psgc_city' => '083725000',
          'city_name' => 'JULITA'
        ],
        [
          'id' => '714',
          'province_id' => '69',
          'psgc_city' => '124703000',
          'city_name' => 'KABACAN'
        ],
        [
          'id' => '715',
          'province_id' => '55',
          'psgc_city' => '098306000',
          'city_name' => 'KABASALAN'
        ],
        [
          'id' => '716',
          'province_id' => '3',
          'psgc_city' => '141107000',
          'city_name' => 'KABAYAN'
        ],
        [
          'id' => '717',
          'province_id' => '5',
          'psgc_city' => '148104000',
          'city_name' => 'KABUGAO (Capital)'
        ],
        [
          'id' => '718',
          'province_id' => '78',
          'psgc_city' => '158405000',
          'city_name' => 'KABUNTALAN (TUMBAO)'
        ],
        [
          'id' => '719',
          'province_id' => '59',
          'psgc_city' => '101306000',
          'city_name' => 'KADINGILAN'
        ],
        [
          'id' => '720',
          'province_id' => '68',
          'psgc_city' => '126505000',
          'city_name' => 'KALAMANSIG'
        ],
        [
          'id' => '721',
          'province_id' => '56',
          'psgc_city' => '097227000',
          'city_name' => 'KALAWIT'
        ],
        [
          'id' => '722',
          'province_id' => '25',
          'psgc_city' => '043409000',
          'city_name' => 'KALAYAAN'
        ],
        [
          'id' => '723',
          'province_id' => '31',
          'psgc_city' => '175321000',
          'city_name' => 'KALAYAAN'
        ],
        [
          'id' => '724',
          'province_id' => '40',
          'psgc_city' => '060407000',
          'city_name' => 'KALIBO (Capital)'
        ],
        [
          'id' => '725',
          'province_id' => '59',
          'psgc_city' => '101307000',
          'city_name' => 'KALILANGAN'
        ],
        [
          'id' => '726',
          'province_id' => '79',
          'psgc_city' => '156603000',
          'city_name' => 'KALINGALAN CALUANG'
        ],
        [
          'id' => '727',
          'province_id' => '53',
          'psgc_city' => '083726000',
          'city_name' => 'KANANGA'
        ],
        [
          'id' => '728',
          'province_id' => '81',
          'psgc_city' => '153610000',
          'city_name' => 'KAPAI'
        ],
        [
          'id' => '729',
          'province_id' => '66',
          'psgc_city' => '112305000',
          'city_name' => 'KAPALONG'
        ],
        [
          'id' => '730',
          'province_id' => '3',
          'psgc_city' => '141108000',
          'city_name' => 'KAPANGAN'
        ],
        [
          'id' => '731',
          'province_id' => '81',
          'psgc_city' => '153639000',
          'city_name' => 'KAPATAGAN'
        ],
        [
          'id' => '732',
          'province_id' => '60',
          'psgc_city' => '103505000',
          'city_name' => 'KAPATAGAN'
        ],
        [
          'id' => '733',
          'province_id' => '11',
          'psgc_city' => '025009000',
          'city_name' => 'KASIBU'
        ],
        [
          'id' => '734',
          'province_id' => '56',
          'psgc_city' => '097203000',
          'city_name' => 'KATIPUNAN'
        ],
        [
          'id' => '735',
          'province_id' => '60',
          'psgc_city' => '103507000',
          'city_name' => 'KAUSWAGAN'
        ],
        [
          'id' => '736',
          'province_id' => '54',
          'psgc_city' => '087806000',
          'city_name' => 'KAWAYAN'
        ],
        [
          'id' => '737',
          'province_id' => '24',
          'psgc_city' => '042111000',
          'city_name' => 'KAWIT'
        ],
        [
          'id' => '738',
          'province_id' => '11',
          'psgc_city' => '025010000',
          'city_name' => 'KAYAPA'
        ],
        [
          'id' => '739',
          'province_id' => '70',
          'psgc_city' => '128003000',
          'city_name' => 'KIAMBA'
        ],
        [
          'id' => '740',
          'province_id' => '2',
          'psgc_city' => '142703000',
          'city_name' => 'KIANGAN'
        ],
        [
          'id' => '741',
          'province_id' => '59',
          'psgc_city' => '101308000',
          'city_name' => 'KIBAWE'
        ],
        [
          'id' => '742',
          'province_id' => '65',
          'psgc_city' => '112406000',
          'city_name' => 'KIBLAWAN'
        ],
        [
          'id' => '743',
          'province_id' => '3',
          'psgc_city' => '141109000',
          'city_name' => 'KIBUNGAN'
        ],
        [
          'id' => '744',
          'province_id' => '61',
          'psgc_city' => '104312000',
          'city_name' => 'KINOGUITAN'
        ],
        [
          'id' => '745',
          'province_id' => '59',
          'psgc_city' => '101309000',
          'city_name' => 'KITAOTAO'
        ],
        [
          'id' => '746',
          'province_id' => '71',
          'psgc_city' => '160206000',
          'city_name' => 'KITCHARAO'
        ],
        [
          'id' => '747',
          'province_id' => '60',
          'psgc_city' => '103508000',
          'city_name' => 'KOLAMBUGAN'
        ],
        [
          'id' => '748',
          'province_id' => '57',
          'psgc_city' => '097311000',
          'city_name' => 'KUMALARANG'
        ],
        [
          'id' => '749',
          'province_id' => '42',
          'psgc_city' => '184517000',
          'city_name' => 'LA CASTELLANA'
        ],
        [
          'id' => '750',
          'province_id' => '56',
          'psgc_city' => '097204000',
          'city_name' => 'LA LIBERTAD'
        ],
        [
          'id' => '751',
          'province_id' => '45',
          'psgc_city' => '184613000',
          'city_name' => 'LA LIBERTAD'
        ],
        [
          'id' => '752',
          'province_id' => '4',
          'psgc_city' => '140108000',
          'city_name' => 'LA PAZ'
        ],
        [
          'id' => '753',
          'province_id' => '53',
          'psgc_city' => '083728000',
          'city_name' => 'LA PAZ'
        ],
        [
          'id' => '754',
          'province_id' => '72',
          'psgc_city' => '160304000',
          'city_name' => 'LA PAZ'
        ],
        [
          'id' => '755',
          'province_id' => '18',
          'psgc_city' => '036907000',
          'city_name' => 'LA PAZ'
        ],
        [
          'id' => '756',
          'province_id' => '3',
          'psgc_city' => '141110000',
          'city_name' => 'LA TRINIDAD (Capital)'
        ],
        [
          'id' => '757',
          'province_id' => '64',
          'psgc_city' => '118202000',
          'city_name' => 'LAAK (SAN VICENTE)'
        ],
        [
          'id' => '758',
          'province_id' => '57',
          'psgc_city' => '097312000',
          'city_name' => 'LABANGAN'
        ],
        [
          'id' => '759',
          'province_id' => '56',
          'psgc_city' => '097205000',
          'city_name' => 'LABASON'
        ],
        [
          'id' => '760',
          'province_id' => '34',
          'psgc_city' => '051606000',
          'city_name' => 'LABO'
        ],
        [
          'id' => '761',
          'province_id' => '10',
          'psgc_city' => '015521000',
          'city_name' => 'LABRADOR'
        ],
        [
          'id' => '762',
          'province_id' => '4',
          'psgc_city' => '140109000',
          'city_name' => 'LACUB'
        ],
        [
          'id' => '763',
          'province_id' => '4',
          'psgc_city' => '140110000',
          'city_name' => 'LAGANGILANG'
        ],
        [
          'id' => '764',
          'province_id' => '2',
          'psgc_city' => '142704000',
          'city_name' => 'LAGAWE (Capital)'
        ],
        [
          'id' => '765',
          'province_id' => '4',
          'psgc_city' => '140111000',
          'city_name' => 'LAGAYAN'
        ],
        [
          'id' => '766',
          'province_id' => '61',
          'psgc_city' => '104313000',
          'city_name' => 'LAGONGLONG'
        ],
        [
          'id' => '767',
          'province_id' => '38',
          'psgc_city' => '051717000',
          'city_name' => 'LAGONOY'
        ],
        [
          'id' => '768',
          'province_id' => '61',
          'psgc_city' => '104314000',
          'city_name' => 'LAGUINDINGAN'
        ],
        [
          'id' => '769',
          'province_id' => '67',
          'psgc_city' => '126319000',
          'city_name' => 'LAKE SEBU'
        ],
        [
          'id' => '770',
          'province_id' => '57',
          'psgc_city' => '097333000',
          'city_name' => 'LAKEWOOD'
        ],
        [
          'id' => '771',
          'province_id' => '60',
          'psgc_city' => '103509000',
          'city_name' => 'LALA'
        ],
        [
          'id' => '772',
          'province_id' => '12',
          'psgc_city' => '021516000',
          'city_name' => 'LAL-LO'
        ],
        [
          'id' => '773',
          'province_id' => '68',
          'psgc_city' => '126508000',
          'city_name' => 'LAMBAYONG (MARIANO MARCOS)'
        ],
        [
          'id' => '774',
          'province_id' => '43',
          'psgc_city' => '063025000',
          'city_name' => 'LAMBUNAO'
        ],
        [
          'id' => '775',
          'province_id' => '2',
          'psgc_city' => '142705000',
          'city_name' => 'LAMUT'
        ],
        [
          'id' => '776',
          'province_id' => '4',
          'psgc_city' => '140112000',
          'city_name' => 'LANGIDEN'
        ],
        [
          'id' => '777',
          'province_id' => '77',
          'psgc_city' => '157009000',
          'city_name' => 'LANGUYAN'
        ],
        [
          'id' => '778',
          'province_id' => '59',
          'psgc_city' => '101310000',
          'city_name' => 'LANTAPAN'
        ],
        [
          'id' => '779',
          'province_id' => '76',
          'psgc_city' => '150703000',
          'city_name' => 'LANTAWAN'
        ],
        [
          'id' => '780',
          'province_id' => '73',
          'psgc_city' => '166810000',
          'city_name' => 'LANUZA'
        ],
        [
          'id' => '781',
          'province_id' => '10',
          'psgc_city' => '015548000',
          'city_name' => 'LAOAC'
        ],
        [
          'id' => '782',
          'province_id' => '51',
          'psgc_city' => '084808000',
          'city_name' => 'LAOANG'
        ],
        [
          'id' => '783',
          'province_id' => '51',
          'psgc_city' => '084809000',
          'city_name' => 'LAPINIG'
        ],
        [
          'id' => '784',
          'province_id' => '57',
          'psgc_city' => '097313000',
          'city_name' => 'LAPUYAN'
        ],
        [
          'id' => '785',
          'province_id' => '48',
          'psgc_city' => '076102000',
          'city_name' => 'LARENA'
        ],
        [
          'id' => '786',
          'province_id' => '51',
          'psgc_city' => '084810000',
          'city_name' => 'LAS NAVAS'
        ],
        [
          'id' => '787',
          'province_id' => '71',
          'psgc_city' => '160207000',
          'city_name' => 'LAS NIEVES'
        ],
        [
          'id' => '788',
          'province_id' => '12',
          'psgc_city' => '021517000',
          'city_name' => 'LASAM'
        ],
        [
          'id' => '789',
          'province_id' => '41',
          'psgc_city' => '060609000',
          'city_name' => 'LAUA-AN'
        ],
        [
          'id' => '790',
          'province_id' => '21',
          'psgc_city' => '034913000',
          'city_name' => 'LAUR'
        ],
        [
          'id' => '791',
          'province_id' => '26',
          'psgc_city' => '041011000',
          'city_name' => 'LAUREL'
        ],
        [
          'id' => '792',
          'province_id' => '51',
          'psgc_city' => '084811000',
          'city_name' => 'LAVEZARES'
        ],
        [
          'id' => '793',
          'province_id' => '50',
          'psgc_city' => '082612000',
          'city_name' => 'LAWAAN'
        ],
        [
          'id' => '794',
          'province_id' => '48',
          'psgc_city' => '076103000',
          'city_name' => 'LAZI'
        ],
        [
          'id' => '795',
          'province_id' => '68',
          'psgc_city' => '126506000',
          'city_name' => 'LEBAK'
        ],
        [
          'id' => '796',
          'province_id' => '43',
          'psgc_city' => '063026000',
          'city_name' => 'LEGANES'
        ],
        [
          'id' => '797',
          'province_id' => '26',
          'psgc_city' => '041012000',
          'city_name' => 'LEMERY'
        ],
        [
          'id' => '798',
          'province_id' => '43',
          'psgc_city' => '063027000',
          'city_name' => 'LEMERY'
        ],
        [
          'id' => '799',
          'province_id' => '43',
          'psgc_city' => '063028000',
          'city_name' => 'LEON'
        ],
        [
          'id' => '800',
          'province_id' => '53',
          'psgc_city' => '083729000',
          'city_name' => 'LEYTE'
        ],
        [
          'id' => '801',
          'province_id' => '40',
          'psgc_city' => '060408000',
          'city_name' => 'LEZO'
        ],
        [
          'id' => '802',
          'province_id' => '26',
          'psgc_city' => '041013000',
          'city_name' => 'LIAN'
        ],
        [
          'id' => '803',
          'province_id' => '73',
          'psgc_city' => '166811000',
          'city_name' => 'LIANGA'
        ],
        [
          'id' => '804',
          'province_id' => '40',
          'psgc_city' => '060409000',
          'city_name' => 'LIBACAO'
        ],
        [
          'id' => '805',
          'province_id' => '49',
          'psgc_city' => '086405000',
          'city_name' => 'LIBAGON'
        ],
        [
          'id' => '806',
          'province_id' => '61',
          'psgc_city' => '104315000',
          'city_name' => 'LIBERTAD'
        ],
        [
          'id' => '807',
          'province_id' => '41',
          'psgc_city' => '060610000',
          'city_name' => 'LIBERTAD'
        ],
        [
          'id' => '808',
          'province_id' => '75',
          'psgc_city' => '168504000',
          'city_name' => 'LIBJO (ALBOR)'
        ],
        [
          'id' => '809',
          'province_id' => '38',
          'psgc_city' => '051718000',
          'city_name' => 'LIBMANAN'
        ],
        [
          'id' => '810',
          'province_id' => '36',
          'psgc_city' => '050507000',
          'city_name' => 'LIBON'
        ],
        [
          'id' => '811',
          'province_id' => '59',
          'psgc_city' => '101311000',
          'city_name' => 'LIBONA'
        ],
        [
          'id' => '812',
          'province_id' => '69',
          'psgc_city' => '124705000',
          'city_name' => 'LIBUNGAN'
        ],
        [
          'id' => '813',
          'province_id' => '21',
          'psgc_city' => '034914000',
          'city_name' => 'LICAB'
        ],
        [
          'id' => '814',
          'province_id' => '4',
          'psgc_city' => '140113000',
          'city_name' => 'LICUAN-BAAY (LICUAN)'
        ],
        [
          'id' => '815',
          'province_id' => '9',
          'psgc_city' => '012911000',
          'city_name' => 'LIDLIDDA'
        ],
        [
          'id' => '816',
          'province_id' => '47',
          'psgc_city' => '071227000',
          'city_name' => 'LILA'
        ],
        [
          'id' => '817',
          'province_id' => '25',
          'psgc_city' => '043410000',
          'city_name' => 'LILIW'
        ],
        [
          'id' => '818',
          'province_id' => '49',
          'psgc_city' => '086406000',
          'city_name' => 'LILOAN'
        ],
        [
          'id' => '819',
          'province_id' => '46',
          'psgc_city' => '072227000',
          'city_name' => 'LILOAN'
        ],
        [
          'id' => '820',
          'province_id' => '56',
          'psgc_city' => '097206000',
          'city_name' => 'LILOY'
        ],
        [
          'id' => '821',
          'province_id' => '49',
          'psgc_city' => '086419000',
          'city_name' => 'LIMASAWA'
        ],
        [
          'id' => '822',
          'province_id' => '16',
          'psgc_city' => '030806000',
          'city_name' => 'LIMAY'
        ],
        [
          'id' => '823',
          'province_id' => '60',
          'psgc_city' => '103510000',
          'city_name' => 'LINAMON'
        ],
        [
          'id' => '824',
          'province_id' => '31',
          'psgc_city' => '175313000',
          'city_name' => 'LINAPACAN'
        ],
        [
          'id' => '825',
          'province_id' => '10',
          'psgc_city' => '015522000',
          'city_name' => 'LINGAYEN (Capital)'
        ],
        [
          'id' => '826',
          'province_id' => '73',
          'psgc_city' => '166812000',
          'city_name' => 'LINGIG'
        ],
        [
          'id' => '827',
          'province_id' => '21',
          'psgc_city' => '034915000',
          'city_name' => 'LLANERA'
        ],
        [
          'id' => '828',
          'province_id' => '50',
          'psgc_city' => '082613000',
          'city_name' => 'LLORENTE'
        ],
        [
          'id' => '829',
          'province_id' => '47',
          'psgc_city' => '071228000',
          'city_name' => 'LOAY'
        ],
        [
          'id' => '830',
          'province_id' => '26',
          'psgc_city' => '041015000',
          'city_name' => 'LOBO'
        ],
        [
          'id' => '831',
          'province_id' => '47',
          'psgc_city' => '071229000',
          'city_name' => 'LOBOC'
        ],
        [
          'id' => '832',
          'province_id' => '28',
          'psgc_city' => '175103000',
          'city_name' => 'LOOC'
        ],
        [
          'id' => '833',
          'province_id' => '30',
          'psgc_city' => '175907000',
          'city_name' => 'LOOC'
        ],
        [
          'id' => '834',
          'province_id' => '47',
          'psgc_city' => '071230000',
          'city_name' => 'LOON'
        ],
        [
          'id' => '835',
          'province_id' => '51',
          'psgc_city' => '084824000',
          'city_name' => 'LOPE DE VEGA'
        ],
        [
          'id' => '836',
          'province_id' => '27',
          'psgc_city' => '045622000',
          'city_name' => 'LOPEZ'
        ],
        [
          'id' => '837',
          'province_id' => '58',
          'psgc_city' => '104208000',
          'city_name' => 'LOPEZ JAENA'
        ],
        [
          'id' => '838',
          'province_id' => '72',
          'psgc_city' => '160305000',
          'city_name' => 'LORETO'
        ],
        [
          'id' => '839',
          'province_id' => '75',
          'psgc_city' => '168505000',
          'city_name' => 'LORETO'
        ],
        [
          'id' => '840',
          'province_id' => '25',
          'psgc_city' => '043411000',
          'city_name' => 'LOS BAÑOS'
        ],
        [
          'id' => '841',
          'province_id' => '4',
          'psgc_city' => '140114000',
          'city_name' => 'LUBA'
        ],
        [
          'id' => '842',
          'province_id' => '28',
          'psgc_city' => '175104000',
          'city_name' => 'LUBANG'
        ],
        [
          'id' => '843',
          'province_id' => '19',
          'psgc_city' => '035408000',
          'city_name' => 'LUBAO'
        ],
        [
          'id' => '844',
          'province_id' => '6',
          'psgc_city' => '143206000',
          'city_name' => 'LUBUAGAN'
        ],
        [
          'id' => '845',
          'province_id' => '27',
          'psgc_city' => '045623000',
          'city_name' => 'LUCBAN'
        ],
        [
          'id' => '846',
          'province_id' => '61',
          'psgc_city' => '104316000',
          'city_name' => 'LUGAIT'
        ],
        [
          'id' => '847',
          'province_id' => '79',
          'psgc_city' => '156617000',
          'city_name' => 'LUGUS'
        ],
        [
          'id' => '848',
          'province_id' => '25',
          'psgc_city' => '043412000',
          'city_name' => 'LUISIANA'
        ],
        [
          'id' => '849',
          'province_id' => '81',
          'psgc_city' => '153611000',
          'city_name' => 'LUMBA-BAYABAO (MAGUING)'
        ],
        [
          'id' => '850',
          'province_id' => '81',
          'psgc_city' => '153641000',
          'city_name' => 'LUMBACA-UNAYAN'
        ],
        [
          'id' => '851',
          'province_id' => '25',
          'psgc_city' => '043413000',
          'city_name' => 'LUMBAN'
        ],
        [
          'id' => '852',
          'province_id' => '81',
          'psgc_city' => '153612000',
          'city_name' => 'LUMBATAN'
        ],
        [
          'id' => '853',
          'province_id' => '81',
          'psgc_city' => '153636000',
          'city_name' => 'LUMBAYANAGUE'
        ],
        [
          'id' => '854',
          'province_id' => '7',
          'psgc_city' => '013310000',
          'city_name' => 'LUNA'
        ],
        [
          'id' => '855',
          'province_id' => '13',
          'psgc_city' => '023116000',
          'city_name' => 'LUNA'
        ],
        [
          'id' => '856',
          'province_id' => '5',
          'psgc_city' => '148105000',
          'city_name' => 'LUNA'
        ],
        [
          'id' => '857',
          'province_id' => '21',
          'psgc_city' => '034916000',
          'city_name' => 'LUPAO'
        ],
        [
          'id' => '858',
          'province_id' => '38',
          'psgc_city' => '051719000',
          'city_name' => 'LUPI'
        ],
        [
          'id' => '859',
          'province_id' => '63',
          'psgc_city' => '112507000',
          'city_name' => 'LUPON'
        ],
        [
          'id' => '860',
          'province_id' => '68',
          'psgc_city' => '126507000',
          'city_name' => 'LUTAYAN'
        ],
        [
          'id' => '861',
          'province_id' => '79',
          'psgc_city' => '156604000',
          'city_name' => 'LUUK'
        ],
        [
          'id' => '862',
          'province_id' => '70',
          'psgc_city' => '128004000',
          'city_name' => 'MAASIM'
        ],
        [
          'id' => '863',
          'province_id' => '43',
          'psgc_city' => '063029000',
          'city_name' => 'MAASIN'
        ],
        [
          'id' => '864',
          'province_id' => '39',
          'psgc_city' => '061907000',
          'city_name' => 'MA-AYON'
        ],
        [
          'id' => '865',
          'province_id' => '19',
          'psgc_city' => '035409000',
          'city_name' => 'MABALACAT'
        ],
        [
          'id' => '866',
          'province_id' => '45',
          'psgc_city' => '184614000',
          'city_name' => 'MABINAY'
        ],
        [
          'id' => '867',
          'province_id' => '47',
          'psgc_city' => '071231000',
          'city_name' => 'MABINI'
        ],
        [
          'id' => '868',
          'province_id' => '10',
          'psgc_city' => '015523000',
          'city_name' => 'MABINI'
        ],
        [
          'id' => '869',
          'province_id' => '26',
          'psgc_city' => '041016000',
          'city_name' => 'MABINI'
        ],
        [
          'id' => '870',
          'province_id' => '64',
          'psgc_city' => '118203000',
          'city_name' => 'MABINI (DOÑA ALICIA)'
        ],
        [
          'id' => '871',
          'province_id' => '25',
          'psgc_city' => '043414000',
          'city_name' => 'MABITAC'
        ],
        [
          'id' => '872',
          'province_id' => '55',
          'psgc_city' => '098307000',
          'city_name' => 'MABUHAY'
        ],
        [
          'id' => '873',
          'province_id' => '19',
          'psgc_city' => '035410000',
          'city_name' => 'MACABEBE'
        ],
        [
          'id' => '874',
          'province_id' => '27',
          'psgc_city' => '045625000',
          'city_name' => 'MACALELON'
        ],
        [
          'id' => '875',
          'province_id' => '53',
          'psgc_city' => '083730000',
          'city_name' => 'MACARTHUR'
        ],
        [
          'id' => '876',
          'province_id' => '64',
          'psgc_city' => '118204000',
          'city_name' => 'MACO'
        ],
        [
          'id' => '877',
          'province_id' => '13',
          'psgc_city' => '023117000',
          'city_name' => 'MACONACON'
        ],
        [
          'id' => '878',
          'province_id' => '49',
          'psgc_city' => '086408000',
          'city_name' => 'MACROHON'
        ],
        [
          'id' => '879',
          'province_id' => '40',
          'psgc_city' => '060410000',
          'city_name' => 'MADALAG'
        ],
        [
          'id' => '880',
          'province_id' => '81',
          'psgc_city' => '153613000',
          'city_name' => 'MADALUM'
        ],
        [
          'id' => '881',
          'province_id' => '81',
          'psgc_city' => '153614000',
          'city_name' => 'MADAMBA'
        ],
        [
          'id' => '882',
          'province_id' => '14',
          'psgc_city' => '025704000',
          'city_name' => 'MADDELA'
        ],
        [
          'id' => '883',
          'province_id' => '73',
          'psgc_city' => '166813000',
          'city_name' => 'MADRID'
        ],
        [
          'id' => '884',
          'province_id' => '46',
          'psgc_city' => '072228000',
          'city_name' => 'MADRIDEJOS'
        ],
        [
          'id' => '885',
          'province_id' => '19',
          'psgc_city' => '035411000',
          'city_name' => 'MAGALANG'
        ],
        [
          'id' => '886',
          'province_id' => '24',
          'psgc_city' => '042112000',
          'city_name' => 'MAGALLANES'
        ],
        [
          'id' => '887',
          'province_id' => '71',
          'psgc_city' => '160208000',
          'city_name' => 'MAGALLANES'
        ],
        [
          'id' => '888',
          'province_id' => '35',
          'psgc_city' => '056211000',
          'city_name' => 'MAGALLANES'
        ],
        [
          'id' => '889',
          'province_id' => '38',
          'psgc_city' => '051720000',
          'city_name' => 'MAGARAO'
        ],
        [
          'id' => '890',
          'province_id' => '25',
          'psgc_city' => '043415000',
          'city_name' => 'MAGDALENA'
        ],
        [
          'id' => '891',
          'province_id' => '30',
          'psgc_city' => '175908000',
          'city_name' => 'MAGDIWANG'
        ],
        [
          'id' => '892',
          'province_id' => '69',
          'psgc_city' => '124706000',
          'city_name' => 'MAGPET'
        ],
        [
          'id' => '893',
          'province_id' => '28',
          'psgc_city' => '175105000',
          'city_name' => 'MAGSAYSAY'
        ],
        [
          'id' => '894',
          'province_id' => '60',
          'psgc_city' => '103511000',
          'city_name' => 'MAGSAYSAY'
        ],
        [
          'id' => '895',
          'province_id' => '31',
          'psgc_city' => '175314000',
          'city_name' => 'MAGSAYSAY'
        ],
        [
          'id' => '896',
          'province_id' => '65',
          'psgc_city' => '112407000',
          'city_name' => 'MAGSAYSAY'
        ],
        [
          'id' => '897',
          'province_id' => '61',
          'psgc_city' => '104317000',
          'city_name' => 'MAGSAYSAY (LINUGOS)'
        ],
        [
          'id' => '898',
          'province_id' => '9',
          'psgc_city' => '012912000',
          'city_name' => 'MAGSINGAL'
        ],
        [
          'id' => '899',
          'province_id' => '81',
          'psgc_city' => '153634000',
          'city_name' => 'MAGUING'
        ],
        [
          'id' => '900',
          'province_id' => '53',
          'psgc_city' => '083731000',
          'city_name' => 'MAHAPLAG'
        ],
        [
          'id' => '901',
          'province_id' => '15',
          'psgc_city' => '020904000',
          'city_name' => 'MAHATAO'
        ],
        [
          'id' => '902',
          'province_id' => '57',
          'psgc_city' => '097315000',
          'city_name' => 'MAHAYAG'
        ],
        [
          'id' => '903',
          'province_id' => '62',
          'psgc_city' => '101803000',
          'city_name' => 'MAHINOG'
        ],
        [
          'id' => '904',
          'province_id' => '60',
          'psgc_city' => '103512000',
          'city_name' => 'MAIGO'
        ],
        [
          'id' => '905',
          'province_id' => '79',
          'psgc_city' => '156605000',
          'city_name' => 'MAIMBUNG'
        ],
        [
          'id' => '906',
          'province_id' => '74',
          'psgc_city' => '166714000',
          'city_name' => 'MAINIT'
        ],
        [
          'id' => '907',
          'province_id' => '70',
          'psgc_city' => '128005000',
          'city_name' => 'MAITUM'
        ],
        [
          'id' => '908',
          'province_id' => '25',
          'psgc_city' => '043416000',
          'city_name' => 'MAJAYJAY'
        ],
        [
          'id' => '909',
          'province_id' => '40',
          'psgc_city' => '060411000',
          'city_name' => 'MAKATO'
        ],
        [
          'id' => '910',
          'province_id' => '69',
          'psgc_city' => '124707000',
          'city_name' => 'MAKILALA'
        ],
        [
          'id' => '911',
          'province_id' => '81',
          'psgc_city' => '153615000',
          'city_name' => 'MALABANG'
        ],
        [
          'id' => '912',
          'province_id' => '46',
          'psgc_city' => '072229000',
          'city_name' => 'MALABUYOC'
        ],
        [
          'id' => '913',
          'province_id' => '65',
          'psgc_city' => '112408000',
          'city_name' => 'MALALAG'
        ],
        [
          'id' => '914',
          'province_id' => '55',
          'psgc_city' => '098308000',
          'city_name' => 'MALANGAS'
        ],
        [
          'id' => '915',
          'province_id' => '70',
          'psgc_city' => '128006000',
          'city_name' => 'MALAPATAN'
        ],
        [
          'id' => '916',
          'province_id' => '10',
          'psgc_city' => '015524000',
          'city_name' => 'MALASIQUI'
        ],
        [
          'id' => '917',
          'province_id' => '40',
          'psgc_city' => '060412000',
          'city_name' => 'MALAY'
        ],
        [
          'id' => '918',
          'province_id' => '4',
          'psgc_city' => '140115000',
          'city_name' => 'MALIBCONG'
        ],
        [
          'id' => '919',
          'province_id' => '36',
          'psgc_city' => '050509000',
          'city_name' => 'MALILIPOT'
        ],
        [
          'id' => '920',
          'province_id' => '74',
          'psgc_city' => '166715000',
          'city_name' => 'MALIMONO'
        ],
        [
          'id' => '921',
          'province_id' => '40',
          'psgc_city' => '060413000',
          'city_name' => 'MALINAO'
        ],
        [
          'id' => '922',
          'province_id' => '36',
          'psgc_city' => '050510000',
          'city_name' => 'MALINAO'
        ],
        [
          'id' => '923',
          'province_id' => '65',
          'psgc_city' => '112409000',
          'city_name' => 'MALITA'
        ],
        [
          'id' => '924',
          'province_id' => '49',
          'psgc_city' => '086409000',
          'city_name' => 'MALITBOG'
        ],
        [
          'id' => '925',
          'province_id' => '59',
          'psgc_city' => '101313000',
          'city_name' => 'MALITBOG'
        ],
        [
          'id' => '926',
          'province_id' => '13',
          'psgc_city' => '023119000',
          'city_name' => 'MALLIG'
        ],
        [
          'id' => '927',
          'province_id' => '70',
          'psgc_city' => '128007000',
          'city_name' => 'MALUNGON'
        ],
        [
          'id' => '928',
          'province_id' => '76',
          'psgc_city' => '150704000',
          'city_name' => 'MALUSO'
        ],
        [
          'id' => '929',
          'province_id' => '26',
          'psgc_city' => '041017000',
          'city_name' => 'MALVAR'
        ],
        [
          'id' => '930',
          'province_id' => '80',
          'psgc_city' => '153820000',
          'city_name' => 'MAMASAPANO'
        ],
        [
          'id' => '931',
          'province_id' => '62',
          'psgc_city' => '101804000',
          'city_name' => 'MAMBAJAO (Capital)'
        ],
        [
          'id' => '932',
          'province_id' => '28',
          'psgc_city' => '175106000',
          'city_name' => 'MAMBURAO (Capital)'
        ],
        [
          'id' => '933',
          'province_id' => '39',
          'psgc_city' => '061908000',
          'city_name' => 'MAMBUSAO'
        ],
        [
          'id' => '934',
          'province_id' => '4',
          'psgc_city' => '140116000',
          'city_name' => 'MANABO'
        ],
        [
          'id' => '935',
          'province_id' => '10',
          'psgc_city' => '015525000',
          'city_name' => 'MANAOAG'
        ],
        [
          'id' => '936',
          'province_id' => '42',
          'psgc_city' => '184518000',
          'city_name' => 'MANAPLA'
        ],
        [
          'id' => '937',
          'province_id' => '63',
          'psgc_city' => '112508000',
          'city_name' => 'MANAY'
        ],
        [
          'id' => '938',
          'province_id' => '37',
          'psgc_city' => '054110000',
          'city_name' => 'MANDAON'
        ],
        [
          'id' => '939',
          'province_id' => '10',
          'psgc_city' => '015526000',
          'city_name' => 'MANGALDAN'
        ],
        [
          'id' => '940',
          'province_id' => '10',
          'psgc_city' => '015527000',
          'city_name' => 'MANGATAREM'
        ],
        [
          'id' => '941',
          'province_id' => '80',
          'psgc_city' => '153832000',
          'city_name' => 'MANGUDADATU'
        ],
        [
          'id' => '942',
          'province_id' => '36',
          'psgc_city' => '050511000',
          'city_name' => 'MANITO'
        ],
        [
          'id' => '943',
          'province_id' => '45',
          'psgc_city' => '184615000',
          'city_name' => 'MANJUYOD'
        ],
        [
          'id' => '944',
          'province_id' => '3',
          'psgc_city' => '141111000',
          'city_name' => 'MANKAYAN'
        ],
        [
          'id' => '945',
          'province_id' => '59',
          'psgc_city' => '101314000',
          'city_name' => 'MANOLO FORTICH'
        ],
        [
          'id' => '946',
          'province_id' => '29',
          'psgc_city' => '175207000',
          'city_name' => 'MANSALAY'
        ],
        [
          'id' => '947',
          'province_id' => '61',
          'psgc_city' => '104318000',
          'city_name' => 'MANTICAO'
        ],
        [
          'id' => '948',
          'province_id' => '56',
          'psgc_city' => '097207000',
          'city_name' => 'MANUKAN'
        ],
        [
          'id' => '949',
          'province_id' => '51',
          'psgc_city' => '084812000',
          'city_name' => 'MAPANAS'
        ],
        [
          'id' => '950',
          'province_id' => '10',
          'psgc_city' => '015528000',
          'city_name' => 'MAPANDAN'
        ],
        [
          'id' => '951',
          'province_id' => '77',
          'psgc_city' => '157003000',
          'city_name' => 'MAPUN (CAGAYAN DE TAWI-TAWI)'
        ],
        [
          'id' => '952',
          'province_id' => '52',
          'psgc_city' => '086010000',
          'city_name' => 'MARABUT'
        ],
        [
          'id' => '953',
          'province_id' => '24',
          'psgc_city' => '042113000',
          'city_name' => 'MARAGONDON'
        ],
        [
          'id' => '954',
          'province_id' => '64',
          'psgc_city' => '118205000',
          'city_name' => 'MARAGUSAN (SAN MARIANO)'
        ],
        [
          'id' => '955',
          'province_id' => '59',
          'psgc_city' => '101315000',
          'city_name' => 'MARAMAG'
        ],
        [
          'id' => '956',
          'province_id' => '81',
          'psgc_city' => '153616000',
          'city_name' => 'MARANTAO'
        ],
        [
          'id' => '957',
          'province_id' => '8',
          'psgc_city' => '012813000',
          'city_name' => 'MARCOS'
        ],
        [
          'id' => '958',
          'province_id' => '57',
          'psgc_city' => '097317000',
          'city_name' => 'MARGOSATUBIG'
        ],
        [
          'id' => '959',
          'province_id' => '48',
          'psgc_city' => '076104000',
          'city_name' => 'MARIA'
        ],
        [
          'id' => '960',
          'province_id' => '22',
          'psgc_city' => '037707000',
          'city_name' => 'MARIA AURORA'
        ],
        [
          'id' => '961',
          'province_id' => '47',
          'psgc_city' => '071232000',
          'city_name' => 'MARIBOJOC'
        ],
        [
          'id' => '962',
          'province_id' => '73',
          'psgc_city' => '166814000',
          'city_name' => 'MARIHATAG'
        ],
        [
          'id' => '963',
          'province_id' => '20',
          'psgc_city' => '031411000',
          'city_name' => 'MARILAO'
        ],
        [
          'id' => '964',
          'province_id' => '54',
          'psgc_city' => '087807000',
          'city_name' => 'MARIPIPI'
        ],
        [
          'id' => '965',
          'province_id' => '16',
          'psgc_city' => '030807000',
          'city_name' => 'MARIVELES'
        ],
        [
          'id' => '966',
          'province_id' => '81',
          'psgc_city' => '153631000',
          'city_name' => 'MAROGONG'
        ],
        [
          'id' => '967',
          'province_id' => '19',
          'psgc_city' => '035412000',
          'city_name' => 'MASANTOL'
        ],
        [
          'id' => '968',
          'province_id' => '17',
          'psgc_city' => '037106000',
          'city_name' => 'MASINLOC'
        ],
        [
          'id' => '969',
          'province_id' => '81',
          'psgc_city' => '153618000',
          'city_name' => 'MASIU'
        ],
        [
          'id' => '970',
          'province_id' => '50',
          'psgc_city' => '082614000',
          'city_name' => 'MASLOG'
        ],
        [
          'id' => '971',
          'province_id' => '26',
          'psgc_city' => '041018000',
          'city_name' => 'MATAAS NA KAHOY'
        ],
        [
          'id' => '972',
          'province_id' => '53',
          'psgc_city' => '083733000',
          'city_name' => 'MATAG-OB'
        ],
        [
          'id' => '973',
          'province_id' => '69',
          'psgc_city' => '124708000',
          'city_name' => 'MATALAM'
        ],
        [
          'id' => '974',
          'province_id' => '53',
          'psgc_city' => '083734000',
          'city_name' => 'MATALOM'
        ],
        [
          'id' => '975',
          'province_id' => '65',
          'psgc_city' => '112410000',
          'city_name' => 'MATANAO'
        ],
        [
          'id' => '976',
          'province_id' => '78',
          'psgc_city' => '158406000',
          'city_name' => 'MATANOG'
        ],
        [
          'id' => '977',
          'province_id' => '35',
          'psgc_city' => '056212000',
          'city_name' => 'MATNOG'
        ],
        [
          'id' => '978',
          'province_id' => '52',
          'psgc_city' => '086011000',
          'city_name' => 'MATUGUINAO'
        ],
        [
          'id' => '979',
          'province_id' => '60',
          'psgc_city' => '103513000',
          'city_name' => 'MATUNGAO'
        ],
        [
          'id' => '980',
          'province_id' => '27',
          'psgc_city' => '045627000',
          'city_name' => 'MAUBAN'
        ],
        [
          'id' => '981',
          'province_id' => '64',
          'psgc_city' => '118206000',
          'city_name' => 'MAWAB'
        ],
        [
          'id' => '982',
          'province_id' => '18',
          'psgc_city' => '036908000',
          'city_name' => 'MAYANTOC'
        ],
        [
          'id' => '983',
          'province_id' => '50',
          'psgc_city' => '082615000',
          'city_name' => 'MAYDOLONG'
        ],
        [
          'id' => '984',
          'province_id' => '53',
          'psgc_city' => '083735000',
          'city_name' => 'MAYORGA'
        ],
        [
          'id' => '985',
          'province_id' => '2',
          'psgc_city' => '142706000',
          'city_name' => 'MAYOYAO'
        ],
        [
          'id' => '986',
          'province_id' => '46',
          'psgc_city' => '072231000',
          'city_name' => 'MEDELLIN'
        ],
        [
          'id' => '987',
          'province_id' => '61',
          'psgc_city' => '104319000',
          'city_name' => 'MEDINA'
        ],
        [
          'id' => '988',
          'province_id' => '24',
          'psgc_city' => '042114000',
          'city_name' => 'MENDEZ (MENDEZ-NUÑEZ)'
        ],
        [
          'id' => '989',
          'province_id' => '50',
          'psgc_city' => '082616000',
          'city_name' => 'MERCEDES'
        ],
        [
          'id' => '990',
          'province_id' => '34',
          'psgc_city' => '051607000',
          'city_name' => 'MERCEDES'
        ],
        [
          'id' => '991',
          'province_id' => '53',
          'psgc_city' => '083736000',
          'city_name' => 'MERIDA'
        ],
        [
          'id' => '992',
          'province_id' => '19',
          'psgc_city' => '035413000',
          'city_name' => 'MEXICO'
        ],
        [
          'id' => '993',
          'province_id' => '43',
          'psgc_city' => '063030000',
          'city_name' => 'MIAGAO'
        ],
        [
          'id' => '994',
          'province_id' => '57',
          'psgc_city' => '097318000',
          'city_name' => 'MIDSALIP'
        ],
        [
          'id' => '995',
          'province_id' => '69',
          'psgc_city' => '124709000',
          'city_name' => 'MIDSAYAP'
        ],
        [
          'id' => '996',
          'province_id' => '37',
          'psgc_city' => '054112000',
          'city_name' => 'MILAGROS'
        ],
        [
          'id' => '997',
          'province_id' => '38',
          'psgc_city' => '051721000',
          'city_name' => 'MILAOR'
        ],
        [
          'id' => '998',
          'province_id' => '43',
          'psgc_city' => '063031000',
          'city_name' => 'MINA'
        ],
        [
          'id' => '999',
          'province_id' => '38',
          'psgc_city' => '051722000',
          'city_name' => 'MINALABAC'
        ],
        [
          'id' => '1000',
          'province_id' => '19',
          'psgc_city' => '035414000',
          'city_name' => 'MINALIN'
        ],
        [
          'id' => '1001',
          'province_id' => '46',
          'psgc_city' => '072232000',
          'city_name' => 'MINGLANILLA'
        ],
        [
          'id' => '1002',
          'province_id' => '69',
          'psgc_city' => '124710000',
          'city_name' => 'M\'LANG'
        ],
        [
          'id' => '1003',
          'province_id' => '46',
          'psgc_city' => '072233000',
          'city_name' => 'MOALBOAL'
        ],
        [
          'id' => '1004',
          'province_id' => '37',
          'psgc_city' => '054113000',
          'city_name' => 'MOBO'
        ],
        [
          'id' => '1005',
          'province_id' => '32',
          'psgc_city' => '174004000',
          'city_name' => 'MOGPOG'
        ],
        [
          'id' => '1006',
          'province_id' => '42',
          'psgc_city' => '184519000',
          'city_name' => 'MOISES PADILLA (MAGALLON)'
        ],
        [
          'id' => '1007',
          'province_id' => '57',
          'psgc_city' => '097319000',
          'city_name' => 'MOLAVE'
        ],
        [
          'id' => '1008',
          'province_id' => '18',
          'psgc_city' => '036909000',
          'city_name' => 'MONCADA'
        ],
        [
          'id' => '1009',
          'province_id' => '51',
          'psgc_city' => '084813000',
          'city_name' => 'MONDRAGON'
        ],
        [
          'id' => '1010',
          'province_id' => '64',
          'psgc_city' => '118207000',
          'city_name' => 'MONKAYO'
        ],
        [
          'id' => '1011',
          'province_id' => '37',
          'psgc_city' => '054114000',
          'city_name' => 'MONREAL'
        ],
        [
          'id' => '1012',
          'province_id' => '64',
          'psgc_city' => '118208000',
          'city_name' => 'MONTEVISTA'
        ],
        [
          'id' => '1013',
          'province_id' => '23',
          'psgc_city' => '045809000',
          'city_name' => 'MORONG'
        ],
        [
          'id' => '1014',
          'province_id' => '16',
          'psgc_city' => '030808000',
          'city_name' => 'MORONG'
        ],
        [
          'id' => '1015',
          'province_id' => '52',
          'psgc_city' => '086012000',
          'city_name' => 'MOTIONG'
        ],
        [
          'id' => '1016',
          'province_id' => '27',
          'psgc_city' => '045628000',
          'city_name' => 'MULANAY'
        ],
        [
          'id' => '1017',
          'province_id' => '81',
          'psgc_city' => '153619000',
          'city_name' => 'MULONDO'
        ],
        [
          'id' => '1018',
          'province_id' => '60',
          'psgc_city' => '103514000',
          'city_name' => 'MUNAI'
        ],
        [
          'id' => '1019',
          'province_id' => '42',
          'psgc_city' => '184520000',
          'city_name' => 'MURCIA'
        ],
        [
          'id' => '1020',
          'province_id' => '56',
          'psgc_city' => '097208000',
          'city_name' => 'MUTIA'
        ],
        [
          'id' => '1021',
          'province_id' => '61',
          'psgc_city' => '104320000',
          'city_name' => 'NAAWAN'
        ],
        [
          'id' => '1022',
          'province_id' => '40',
          'psgc_city' => '060414000',
          'city_name' => 'NABAS'
        ],
        [
          'id' => '1023',
          'province_id' => '38',
          'psgc_city' => '051723000',
          'city_name' => 'NABUA'
        ],
        [
          'id' => '1024',
          'province_id' => '64',
          'psgc_city' => '118209000',
          'city_name' => 'NABUNTURAN (Capital)'
        ],
        [
          'id' => '1025',
          'province_id' => '55',
          'psgc_city' => '098309000',
          'city_name' => 'NAGA'
        ],
        [
          'id' => '1026',
          'province_id' => '9',
          'psgc_city' => '012913000',
          'city_name' => 'NAGBUKEL'
        ],
        [
          'id' => '1027',
          'province_id' => '25',
          'psgc_city' => '043417000',
          'city_name' => 'NAGCARLAN'
        ],
        [
          'id' => '1028',
          'province_id' => '14',
          'psgc_city' => '025706000',
          'city_name' => 'NAGTIPUNAN'
        ],
        [
          'id' => '1029',
          'province_id' => '7',
          'psgc_city' => '013311000',
          'city_name' => 'NAGUILIAN'
        ],
        [
          'id' => '1030',
          'province_id' => '13',
          'psgc_city' => '023120000',
          'city_name' => 'NAGUILIAN'
        ],
        [
          'id' => '1031',
          'province_id' => '24',
          'psgc_city' => '042115000',
          'city_name' => 'NAIC'
        ],
        [
          'id' => '1032',
          'province_id' => '21',
          'psgc_city' => '034918000',
          'city_name' => 'NAMPICUAN'
        ],
        [
          'id' => '1033',
          'province_id' => '31',
          'psgc_city' => '175315000',
          'city_name' => 'NARRA'
        ],
        [
          'id' => '1034',
          'province_id' => '9',
          'psgc_city' => '012914000',
          'city_name' => 'NARVACAN'
        ],
        [
          'id' => '1035',
          'province_id' => '71',
          'psgc_city' => '160209000',
          'city_name' => 'NASIPIT'
        ],
        [
          'id' => '1036',
          'province_id' => '26',
          'psgc_city' => '041019000',
          'city_name' => 'NASUGBU'
        ],
        [
          'id' => '1037',
          'province_id' => '10',
          'psgc_city' => '015529000',
          'city_name' => 'NATIVIDAD'
        ],
        [
          'id' => '1038',
          'province_id' => '1',
          'psgc_city' => '144405000',
          'city_name' => 'NATONIN'
        ],
        [
          'id' => '1039',
          'province_id' => '29',
          'psgc_city' => '175208000',
          'city_name' => 'NAUJAN'
        ],
        [
          'id' => '1040',
          'province_id' => '54',
          'psgc_city' => '087808000',
          'city_name' => 'NAVAL (Capital)'
        ],
        [
          'id' => '1041',
          'province_id' => '64',
          'psgc_city' => '118210000',
          'city_name' => 'NEW BATAAN'
        ],
        [
          'id' => '1042',
          'province_id' => '66',
          'psgc_city' => '112314000',
          'city_name' => 'NEW CORELLA'
        ],
        [
          'id' => '1043',
          'province_id' => '43',
          'psgc_city' => '063032000',
          'city_name' => 'NEW LUCENA'
        ],
        [
          'id' => '1044',
          'province_id' => '40',
          'psgc_city' => '060415000',
          'city_name' => 'NEW WASHINGTON'
        ],
        [
          'id' => '1045',
          'province_id' => '67',
          'psgc_city' => '126311000',
          'city_name' => 'NORALA'
        ],
        [
          'id' => '1046',
          'province_id' => '78',
          'psgc_city' => '158411000',
          'city_name' => 'NORTHERN KABUNTALAN'
        ],
        [
          'id' => '1047',
          'province_id' => '20',
          'psgc_city' => '031413000',
          'city_name' => 'NORZAGARAY'
        ],
        [
          'id' => '1048',
          'province_id' => '24',
          'psgc_city' => '042116000',
          'city_name' => 'NOVELETA'
        ],
        [
          'id' => '1049',
          'province_id' => '8',
          'psgc_city' => '012814000',
          'city_name' => 'NUEVA ERA'
        ],
        [
          'id' => '1050',
          'province_id' => '44',
          'psgc_city' => '067903000',
          'city_name' => 'NUEVA VALENCIA'
        ],
        [
          'id' => '1051',
          'province_id' => '40',
          'psgc_city' => '060416000',
          'city_name' => 'NUMANCIA'
        ],
        [
          'id' => '1052',
          'province_id' => '60',
          'psgc_city' => '103515000',
          'city_name' => 'NUNUNGAN'
        ],
        [
          'id' => '1053',
          'province_id' => '36',
          'psgc_city' => '050512000',
          'city_name' => 'OAS'
        ],
        [
          'id' => '1054',
          'province_id' => '20',
          'psgc_city' => '031414000',
          'city_name' => 'OBANDO'
        ],
        [
          'id' => '1055',
          'province_id' => '38',
          'psgc_city' => '051725000',
          'city_name' => 'OCAMPO'
        ],
        [
          'id' => '1056',
          'province_id' => '30',
          'psgc_city' => '175909000',
          'city_name' => 'ODIONGAN'
        ],
        [
          'id' => '1057',
          'province_id' => '79',
          'psgc_city' => '156607000',
          'city_name' => 'OLD PANAMAO'
        ],
        [
          'id' => '1058',
          'province_id' => '55',
          'psgc_city' => '098310000',
          'city_name' => 'OLUTANGA'
        ],
        [
          'id' => '1059',
          'province_id' => '79',
          'psgc_city' => '156619000',
          'city_name' => 'OMAR'
        ],
        [
          'id' => '1060',
          'province_id' => '61',
          'psgc_city' => '104321000',
          'city_name' => 'OPOL'
        ],
        [
          'id' => '1061',
          'province_id' => '16',
          'psgc_city' => '030809000',
          'city_name' => 'ORANI'
        ],
        [
          'id' => '1062',
          'province_id' => '50',
          'psgc_city' => '082617000',
          'city_name' => 'ORAS'
        ],
        [
          'id' => '1063',
          'province_id' => '16',
          'psgc_city' => '030810000',
          'city_name' => 'ORION'
        ],
        [
          'id' => '1064',
          'province_id' => '46',
          'psgc_city' => '072235000',
          'city_name' => 'OSLOB'
        ],
        [
          'id' => '1065',
          'province_id' => '43',
          'psgc_city' => '063034000',
          'city_name' => 'OTON'
        ],
        [
          'id' => '1066',
          'province_id' => '65',
          'psgc_city' => '112411000',
          'city_name' => 'PADADA'
        ],
        [
          'id' => '1067',
          'province_id' => '49',
          'psgc_city' => '086410000',
          'city_name' => 'PADRE BURGOS'
        ],
        [
          'id' => '1068',
          'province_id' => '27',
          'psgc_city' => '045629000',
          'city_name' => 'PADRE BURGOS'
        ],
        [
          'id' => '1069',
          'province_id' => '26',
          'psgc_city' => '041020000',
          'city_name' => 'PADRE GARCIA'
        ],
        [
          'id' => '1070',
          'province_id' => '25',
          'psgc_city' => '043418000',
          'city_name' => 'PAETE'
        ],
        [
          'id' => '1071',
          'province_id' => '80',
          'psgc_city' => '153822000',
          'city_name' => 'PAGAGAWAN'
        ],
        [
          'id' => '1072',
          'province_id' => '80',
          'psgc_city' => '153810000',
          'city_name' => 'PAGALUNGAN'
        ],
        [
          'id' => '1073',
          'province_id' => '81',
          'psgc_city' => '153620000',
          'city_name' => 'PAGAYAWAN (TATARIKAN)'
        ],
        [
          'id' => '1074',
          'province_id' => '27',
          'psgc_city' => '045630000',
          'city_name' => 'PAGBILAO'
        ],
        [
          'id' => '1075',
          'province_id' => '80',
          'psgc_city' => '153823000',
          'city_name' => 'PAGLAT'
        ],
        [
          'id' => '1076',
          'province_id' => '52',
          'psgc_city' => '086026000',
          'city_name' => 'PAGSANGHAN'
        ],
        [
          'id' => '1077',
          'province_id' => '25',
          'psgc_city' => '043419000',
          'city_name' => 'PAGSANJAN'
        ],
        [
          'id' => '1078',
          'province_id' => '8',
          'psgc_city' => '012815000',
          'city_name' => 'PAGUDPUD'
        ],
        [
          'id' => '1079',
          'province_id' => '25',
          'psgc_city' => '043420000',
          'city_name' => 'PAKIL'
        ],
        [
          'id' => '1080',
          'province_id' => '13',
          'psgc_city' => '023121000',
          'city_name' => 'PALANAN'
        ],
        [
          'id' => '1081',
          'province_id' => '37',
          'psgc_city' => '054115000',
          'city_name' => 'PALANAS'
        ],
        [
          'id' => '1082',
          'province_id' => '51',
          'psgc_city' => '084814000',
          'city_name' => 'PALAPAG'
        ],
        [
          'id' => '1083',
          'province_id' => '17',
          'psgc_city' => '037108000',
          'city_name' => 'PALAUIG'
        ],
        [
          'id' => '1084',
          'province_id' => '68',
          'psgc_city' => '126509000',
          'city_name' => 'PALIMBANG'
        ],
        [
          'id' => '1085',
          'province_id' => '53',
          'psgc_city' => '083739000',
          'city_name' => 'PALO'
        ],
        [
          'id' => '1086',
          'province_id' => '53',
          'psgc_city' => '083740000',
          'city_name' => 'PALOMPON'
        ],
        [
          'id' => '1087',
          'province_id' => '28',
          'psgc_city' => '175107000',
          'city_name' => 'PALUAN'
        ],
        [
          'id' => '1088',
          'province_id' => '51',
          'psgc_city' => '084815000',
          'city_name' => 'PAMBUJAN'
        ],
        [
          'id' => '1089',
          'province_id' => '38',
          'psgc_city' => '051726000',
          'city_name' => 'PAMPLONA'
        ],
        [
          'id' => '1090',
          'province_id' => '12',
          'psgc_city' => '021518000',
          'city_name' => 'PAMPLONA'
        ],
        [
          'id' => '1091',
          'province_id' => '45',
          'psgc_city' => '184616000',
          'city_name' => 'PAMPLONA'
        ],
        [
          'id' => '1092',
          'province_id' => '58',
          'psgc_city' => '104211000',
          'city_name' => 'PANAON'
        ],
        [
          'id' => '1093',
          'province_id' => '39',
          'psgc_city' => '061909000',
          'city_name' => 'PANAY'
        ],
        [
          'id' => '1094',
          'province_id' => '80',
          'psgc_city' => '153833000',
          'city_name' => 'PANDAG'
        ],
        [
          'id' => '1095',
          'province_id' => '79',
          'psgc_city' => '156618000',
          'city_name' => 'PANDAMI'
        ],
        [
          'id' => '1096',
          'province_id' => '41',
          'psgc_city' => '060611000',
          'city_name' => 'PANDAN'
        ],
        [
          'id' => '1097',
          'province_id' => '33',
          'psgc_city' => '052006000',
          'city_name' => 'PANDAN'
        ],
        [
          'id' => '1098',
          'province_id' => '20',
          'psgc_city' => '031415000',
          'city_name' => 'PANDI'
        ],
        [
          'id' => '1099',
          'province_id' => '33',
          'psgc_city' => '052007000',
          'city_name' => 'PANGANIBAN (PAYO)'
        ],
        [
          'id' => '1100',
          'province_id' => '59',
          'psgc_city' => '101316000',
          'city_name' => 'PANGANTUCAN'
        ],
        [
          'id' => '1101',
          'province_id' => '25',
          'psgc_city' => '043421000',
          'city_name' => 'PANGIL'
        ],
        [
          'id' => '1102',
          'province_id' => '47',
          'psgc_city' => '071233000',
          'city_name' => 'PANGLAO'
        ],
        [
          'id' => '1103',
          'province_id' => '79',
          'psgc_city' => '156616000',
          'city_name' => 'PANGLIMA ESTINO (NEW PANAMAO)'
        ],
        [
          'id' => '1104',
          'province_id' => '77',
          'psgc_city' => '157001000',
          'city_name' => 'PANGLIMA SUGALA (BALIMBING) (Capital)'
        ],
        [
          'id' => '1105',
          'province_id' => '79',
          'psgc_city' => '156608000',
          'city_name' => 'PANGUTARAN'
        ],
        [
          'id' => '1106',
          'province_id' => '18',
          'psgc_city' => '036910000',
          'city_name' => 'PANIQUI'
        ],
        [
          'id' => '1107',
          'province_id' => '39',
          'psgc_city' => '061910000',
          'city_name' => 'PANITAN'
        ],
        [
          'id' => '1108',
          'province_id' => '21',
          'psgc_city' => '034920000',
          'city_name' => 'PANTABANGAN'
        ],
        [
          'id' => '1109',
          'province_id' => '60',
          'psgc_city' => '103516000',
          'city_name' => 'PANTAO RAGAT'
        ],
        [
          'id' => '1110',
          'province_id' => '60',
          'psgc_city' => '103523000',
          'city_name' => 'PANTAR'
        ],
        [
          'id' => '1111',
          'province_id' => '64',
          'psgc_city' => '118211000',
          'city_name' => 'PANTUKAN'
        ],
        [
          'id' => '1112',
          'province_id' => '27',
          'psgc_city' => '045631000',
          'city_name' => 'PANUKULAN'
        ],
        [
          'id' => '1113',
          'province_id' => '8',
          'psgc_city' => '012816000',
          'city_name' => 'PAOAY'
        ],
        [
          'id' => '1114',
          'province_id' => '20',
          'psgc_city' => '031416000',
          'city_name' => 'PAOMBONG'
        ],
        [
          'id' => '1115',
          'province_id' => '34',
          'psgc_city' => '051608000',
          'city_name' => 'PARACALE'
        ],
        [
          'id' => '1116',
          'province_id' => '1',
          'psgc_city' => '144406000',
          'city_name' => 'PARACELIS'
        ],
        [
          'id' => '1117',
          'province_id' => '52',
          'psgc_city' => '086022000',
          'city_name' => 'PARANAS (WRIGHT)'
        ],
        [
          'id' => '1118',
          'province_id' => '79',
          'psgc_city' => '156609000',
          'city_name' => 'PARANG'
        ],
        [
          'id' => '1119',
          'province_id' => '78',
          'psgc_city' => '158407000',
          'city_name' => 'PARANG'
        ],
        [
          'id' => '1120',
          'province_id' => '38',
          'psgc_city' => '051727000',
          'city_name' => 'PASACAO'
        ],
        [
          'id' => '1121',
          'province_id' => '6',
          'psgc_city' => '143208000',
          'city_name' => 'PASIL'
        ],
        [
          'id' => '1122',
          'province_id' => '53',
          'psgc_city' => '083741000',
          'city_name' => 'PASTRANA'
        ],
        [
          'id' => '1123',
          'province_id' => '8',
          'psgc_city' => '012817000',
          'city_name' => 'PASUQUIN'
        ],
        [
          'id' => '1124',
          'province_id' => '79',
          'psgc_city' => '156610000',
          'city_name' => 'PATA'
        ],
        [
          'id' => '1125',
          'province_id' => '85',
          'psgc_city' => '137606000',
          'city_name' => 'PATEROS'
        ],
        [
          'id' => '1126',
          'province_id' => '79',
          'psgc_city' => '156611000',
          'city_name' => 'PATIKUL'
        ],
        [
          'id' => '1127',
          'province_id' => '27',
          'psgc_city' => '045632000',
          'city_name' => 'PATNANUNGAN'
        ],
        [
          'id' => '1128',
          'province_id' => '41',
          'psgc_city' => '060612000',
          'city_name' => 'PATNONGON'
        ],
        [
          'id' => '1129',
          'province_id' => '43',
          'psgc_city' => '063036000',
          'city_name' => 'PAVIA'
        ],
        [
          'id' => '1130',
          'province_id' => '55',
          'psgc_city' => '098311000',
          'city_name' => 'PAYAO'
        ],
        [
          'id' => '1131',
          'province_id' => '12',
          'psgc_city' => '021519000',
          'city_name' => 'PEÑABLANCA'
        ],
        [
          'id' => '1132',
          'province_id' => '21',
          'psgc_city' => '034921000',
          'city_name' => 'PEÑARANDA'
        ],
        [
          'id' => '1133',
          'province_id' => '4',
          'psgc_city' => '140117000',
          'city_name' => 'PEÑARRUBIA'
        ],
        [
          'id' => '1134',
          'province_id' => '27',
          'psgc_city' => '045633000',
          'city_name' => 'PEREZ'
        ],
        [
          'id' => '1135',
          'province_id' => '81',
          'psgc_city' => '153621000',
          'city_name' => 'PIAGAPO'
        ],
        [
          'id' => '1136',
          'province_id' => '12',
          'psgc_city' => '021520000',
          'city_name' => 'PIAT'
        ],
        [
          'id' => '1137',
          'province_id' => '81',
          'psgc_city' => '153635000',
          'city_name' => 'PICONG (SULTAN GUMANDER)'
        ],
        [
          'id' => '1138',
          'province_id' => '8',
          'psgc_city' => '012818000',
          'city_name' => 'PIDDIG'
        ],
        [
          'id' => '1139',
          'province_id' => '4',
          'psgc_city' => '140118000',
          'city_name' => 'PIDIGAN'
        ],
        [
          'id' => '1140',
          'province_id' => '69',
          'psgc_city' => '124711000',
          'city_name' => 'PIGKAWAYAN'
        ],
        [
          'id' => '1141',
          'province_id' => '69',
          'psgc_city' => '124712000',
          'city_name' => 'PIKIT'
        ],
        [
          'id' => '1142',
          'province_id' => '25',
          'psgc_city' => '043422000',
          'city_name' => 'PILA'
        ],
        [
          'id' => '1143',
          'province_id' => '39',
          'psgc_city' => '061911000',
          'city_name' => 'PILAR'
        ],
        [
          'id' => '1144',
          'province_id' => '74',
          'psgc_city' => '166716000',
          'city_name' => 'PILAR'
        ],
        [
          'id' => '1145',
          'province_id' => '47',
          'psgc_city' => '071234000',
          'city_name' => 'PILAR'
        ],
        [
          'id' => '1146',
          'province_id' => '46',
          'psgc_city' => '072236000',
          'city_name' => 'PILAR'
        ],
        [
          'id' => '1147',
          'province_id' => '4',
          'psgc_city' => '140119000',
          'city_name' => 'PILAR'
        ],
        [
          'id' => '1148',
          'province_id' => '16',
          'psgc_city' => '030811000',
          'city_name' => 'PILAR'
        ],
        [
          'id' => '1149',
          'province_id' => '35',
          'psgc_city' => '056213000',
          'city_name' => 'PILAR'
        ],
        [
          'id' => '1150',
          'province_id' => '38',
          'psgc_city' => '051728000',
          'city_name' => 'PILI (Capital)'
        ],
        [
          'id' => '1151',
          'province_id' => '23',
          'psgc_city' => '045810000',
          'city_name' => 'PILILLA'
        ],
        [
          'id' => '1152',
          'province_id' => '52',
          'psgc_city' => '086013000',
          'city_name' => 'PINABACDAO'
        ],
        [
          'id' => '1153',
          'province_id' => '29',
          'psgc_city' => '175209000',
          'city_name' => 'PINAMALAYAN'
        ],
        [
          'id' => '1154',
          'province_id' => '46',
          'psgc_city' => '072237000',
          'city_name' => 'PINAMUNGAHAN'
        ],
        [
          'id' => '1155',
          'province_id' => '56',
          'psgc_city' => '097209000',
          'city_name' => 'PIÑAN (NEW PIÑAN)'
        ],
        [
          'id' => '1156',
          'province_id' => '8',
          'psgc_city' => '012819000',
          'city_name' => 'PINILI'
        ],
        [
          'id' => '1157',
          'province_id' => '49',
          'psgc_city' => '086411000',
          'city_name' => 'PINTUYAN'
        ],
        [
          'id' => '1158',
          'province_id' => '6',
          'psgc_city' => '143209000',
          'city_name' => 'PINUKPUK'
        ],
        [
          'id' => '1159',
          'province_id' => '36',
          'psgc_city' => '050513000',
          'city_name' => 'PIO DURAN'
        ],
        [
          'id' => '1160',
          'province_id' => '37',
          'psgc_city' => '054116000',
          'city_name' => 'PIO V. CORPUZ (LIMBUHAN)'
        ],
        [
          'id' => '1161',
          'province_id' => '27',
          'psgc_city' => '045634000',
          'city_name' => 'PITOGO'
        ],
        [
          'id' => '1162',
          'province_id' => '57',
          'psgc_city' => '097338000',
          'city_name' => 'PITOGO'
        ],
        [
          'id' => '1163',
          'province_id' => '37',
          'psgc_city' => '054117000',
          'city_name' => 'PLACER'
        ],
        [
          'id' => '1164',
          'province_id' => '74',
          'psgc_city' => '166717000',
          'city_name' => 'PLACER'
        ],
        [
          'id' => '1165',
          'province_id' => '20',
          'psgc_city' => '031417000',
          'city_name' => 'PLARIDEL'
        ],
        [
          'id' => '1166',
          'province_id' => '27',
          'psgc_city' => '045635000',
          'city_name' => 'PLARIDEL'
        ],
        [
          'id' => '1167',
          'province_id' => '58',
          'psgc_city' => '104212000',
          'city_name' => 'PLARIDEL'
        ],
        [
          'id' => '1168',
          'province_id' => '29',
          'psgc_city' => '175210000',
          'city_name' => 'POLA'
        ],
        [
          'id' => '1169',
          'province_id' => '56',
          'psgc_city' => '097210000',
          'city_name' => 'POLANCO'
        ],
        [
          'id' => '1170',
          'province_id' => '36',
          'psgc_city' => '050514000',
          'city_name' => 'POLANGUI'
        ],
        [
          'id' => '1171',
          'province_id' => '27',
          'psgc_city' => '045636000',
          'city_name' => 'POLILLO'
        ],
        [
          'id' => '1172',
          'province_id' => '67',
          'psgc_city' => '126312000',
          'city_name' => 'POLOMOLOK'
        ],
        [
          'id' => '1173',
          'province_id' => '42',
          'psgc_city' => '184521000',
          'city_name' => 'PONTEVEDRA'
        ],
        [
          'id' => '1174',
          'province_id' => '39',
          'psgc_city' => '061912000',
          'city_name' => 'PONTEVEDRA'
        ],
        [
          'id' => '1175',
          'province_id' => '81',
          'psgc_city' => '153622000',
          'city_name' => 'POONA BAYABAO (GATA)'
        ],
        [
          'id' => '1176',
          'province_id' => '60',
          'psgc_city' => '103517000',
          'city_name' => 'POONA PIAGAPO'
        ],
        [
          'id' => '1177',
          'province_id' => '19',
          'psgc_city' => '035415000',
          'city_name' => 'PORAC'
        ],
        [
          'id' => '1178',
          'province_id' => '46',
          'psgc_city' => '072238000',
          'city_name' => 'PORO'
        ],
        [
          'id' => '1179',
          'province_id' => '43',
          'psgc_city' => '063037000',
          'city_name' => 'POTOTAN'
        ],
        [
          'id' => '1180',
          'province_id' => '10',
          'psgc_city' => '015530000',
          'city_name' => 'POZORRUBIO'
        ],
        [
          'id' => '1181',
          'province_id' => '47',
          'psgc_city' => '071235000',
          'city_name' => 'PRES. CARLOS P. GARCIA (PITOGO)'
        ],
        [
          'id' => '1182',
          'province_id' => '56',
          'psgc_city' => '097211000',
          'city_name' => 'PRES. MANUEL A. ROXAS'
        ],
        [
          'id' => '1183',
          'province_id' => '38',
          'psgc_city' => '051729000',
          'city_name' => 'PRESENTACION (PARUBCAN)'
        ],
        [
          'id' => '1184',
          'province_id' => '68',
          'psgc_city' => '126510000',
          'city_name' => 'PRESIDENT QUIRINO'
        ],
        [
          'id' => '1185',
          'province_id' => '69',
          'psgc_city' => '124713000',
          'city_name' => 'PRESIDENT ROXAS'
        ],
        [
          'id' => '1186',
          'province_id' => '39',
          'psgc_city' => '061913000',
          'city_name' => 'PRESIDENT ROXAS'
        ],
        [
          'id' => '1187',
          'province_id' => '35',
          'psgc_city' => '056214000',
          'city_name' => 'PRIETO DIAZ'
        ],
        [
          'id' => '1188',
          'province_id' => '72',
          'psgc_city' => '160306000',
          'city_name' => 'PROSPERIDAD (Capital)'
        ],
        [
          'id' => '1189',
          'province_id' => '81',
          'psgc_city' => '153623000',
          'city_name' => 'PUALAS'
        ],
        [
          'id' => '1190',
          'province_id' => '5',
          'psgc_city' => '148106000',
          'city_name' => 'PUDTOL'
        ],
        [
          'id' => '1191',
          'province_id' => '29',
          'psgc_city' => '175211000',
          'city_name' => 'PUERTO GALERA'
        ],
        [
          'id' => '1192',
          'province_id' => '7',
          'psgc_city' => '013312000',
          'city_name' => 'PUGO'
        ],
        [
          'id' => '1193',
          'province_id' => '20',
          'psgc_city' => '031418000',
          'city_name' => 'PULILAN'
        ],
        [
          'id' => '1194',
          'province_id' => '42',
          'psgc_city' => '184522000',
          'city_name' => 'PULUPANDAN'
        ],
        [
          'id' => '1195',
          'province_id' => '18',
          'psgc_city' => '036911000',
          'city_name' => 'PURA'
        ],
        [
          'id' => '1196',
          'province_id' => '31',
          'psgc_city' => '175317000',
          'city_name' => 'QUEZON'
        ],
        [
          'id' => '1197',
          'province_id' => '13',
          'psgc_city' => '023122000',
          'city_name' => 'QUEZON'
        ],
        [
          'id' => '1198',
          'province_id' => '59',
          'psgc_city' => '101317000',
          'city_name' => 'QUEZON'
        ],
        [
          'id' => '1199',
          'province_id' => '27',
          'psgc_city' => '045637000',
          'city_name' => 'QUEZON'
        ],
        [
          'id' => '1200',
          'province_id' => '11',
          'psgc_city' => '025011000',
          'city_name' => 'QUEZON'
        ],
        [
          'id' => '1201',
          'province_id' => '21',
          'psgc_city' => '034922000',
          'city_name' => 'QUEZON'
        ],
        [
          'id' => '1202',
          'province_id' => '50',
          'psgc_city' => '082618000',
          'city_name' => 'QUINAPONDAN'
        ],
        [
          'id' => '1203',
          'province_id' => '13',
          'psgc_city' => '023123000',
          'city_name' => 'QUIRINO'
        ],
        [
          'id' => '1204',
          'province_id' => '9',
          'psgc_city' => '012915000',
          'city_name' => 'QUIRINO (ANGKAKI)'
        ],
        [
          'id' => '1205',
          'province_id' => '38',
          'psgc_city' => '051730000',
          'city_name' => 'RAGAY'
        ],
        [
          'id' => '1206',
          'province_id' => '80',
          'psgc_city' => '153829000',
          'city_name' => 'RAJAH BUAYAN'
        ],
        [
          'id' => '1207',
          'province_id' => '13',
          'psgc_city' => '023124000',
          'city_name' => 'RAMON'
        ],
        [
          'id' => '1208',
          'province_id' => '57',
          'psgc_city' => '097323000',
          'city_name' => 'RAMON MAGSAYSAY (LIARGO)'
        ],
        [
          'id' => '1209',
          'province_id' => '18',
          'psgc_city' => '036912000',
          'city_name' => 'RAMOS'
        ],
        [
          'id' => '1210',
          'province_id' => '36',
          'psgc_city' => '050515000',
          'city_name' => 'RAPU-RAPU'
        ],
        [
          'id' => '1211',
          'province_id' => '27',
          'psgc_city' => '045638000',
          'city_name' => 'REAL'
        ],
        [
          'id' => '1212',
          'province_id' => '13',
          'psgc_city' => '023125000',
          'city_name' => 'REINA MERCEDES'
        ],
        [
          'id' => '1213',
          'province_id' => '71',
          'psgc_city' => '160212000',
          'city_name' => 'REMEDIOS T. ROMUALDEZ'
        ],
        [
          'id' => '1214',
          'province_id' => '21',
          'psgc_city' => '034923000',
          'city_name' => 'RIZAL'
        ],
        [
          'id' => '1215',
          'province_id' => '28',
          'psgc_city' => '175108000',
          'city_name' => 'RIZAL'
        ],
        [
          'id' => '1216',
          'province_id' => '56',
          'psgc_city' => '097212000',
          'city_name' => 'RIZAL'
        ],
        [
          'id' => '1217',
          'province_id' => '12',
          'psgc_city' => '021521000',
          'city_name' => 'RIZAL'
        ],
        [
          'id' => '1218',
          'province_id' => '25',
          'psgc_city' => '043423000',
          'city_name' => 'RIZAL'
        ],
        [
          'id' => '1219',
          'province_id' => '6',
          'psgc_city' => '143211000',
          'city_name' => 'RIZAL (LIWAN)'
        ],
        [
          'id' => '1220',
          'province_id' => '31',
          'psgc_city' => '175323000',
          'city_name' => 'RIZAL (MARCOS)'
        ],
        [
          'id' => '1221',
          'province_id' => '23',
          'psgc_city' => '045808000',
          'city_name' => 'RODRIGUEZ (MONTALBAN)'
        ],
        [
          'id' => '1222',
          'province_id' => '30',
          'psgc_city' => '175910000',
          'city_name' => 'ROMBLON (Capital)'
        ],
        [
          'id' => '1223',
          'province_id' => '46',
          'psgc_city' => '072239000',
          'city_name' => 'RONDA'
        ],
        [
          'id' => '1224',
          'province_id' => '10',
          'psgc_city' => '015531000',
          'city_name' => 'ROSALES'
        ],
        [
          'id' => '1225',
          'province_id' => '26',
          'psgc_city' => '041021000',
          'city_name' => 'ROSARIO'
        ],
        [
          'id' => '1226',
          'province_id' => '72',
          'psgc_city' => '160307000',
          'city_name' => 'ROSARIO'
        ],
        [
          'id' => '1227',
          'province_id' => '51',
          'psgc_city' => '084816000',
          'city_name' => 'ROSARIO'
        ],
        [
          'id' => '1228',
          'province_id' => '7',
          'psgc_city' => '013313000',
          'city_name' => 'ROSARIO'
        ],
        [
          'id' => '1229',
          'province_id' => '24',
          'psgc_city' => '042117000',
          'city_name' => 'ROSARIO'
        ],
        [
          'id' => '1230',
          'province_id' => '55',
          'psgc_city' => '098312000',
          'city_name' => 'ROSELLER LIM'
        ],
        [
          'id' => '1231',
          'province_id' => '29',
          'psgc_city' => '175212000',
          'city_name' => 'ROXAS'
        ],
        [
          'id' => '1232',
          'province_id' => '13',
          'psgc_city' => '023126000',
          'city_name' => 'ROXAS'
        ],
        [
          'id' => '1233',
          'province_id' => '31',
          'psgc_city' => '175318000',
          'city_name' => 'ROXAS'
        ],
        [
          'id' => '1234',
          'province_id' => '1',
          'psgc_city' => '144407000',
          'city_name' => 'SABANGAN'
        ],
        [
          'id' => '1235',
          'province_id' => '3',
          'psgc_city' => '141112000',
          'city_name' => 'SABLAN'
        ],
        [
          'id' => '1236',
          'province_id' => '28',
          'psgc_city' => '175109000',
          'city_name' => 'SABLAYAN'
        ],
        [
          'id' => '1237',
          'province_id' => '15',
          'psgc_city' => '020905000',
          'city_name' => 'SABTANG'
        ],
        [
          'id' => '1238',
          'province_id' => '1',
          'psgc_city' => '144408000',
          'city_name' => 'SADANGA'
        ],
        [
          'id' => '1239',
          'province_id' => '1',
          'psgc_city' => '144409000',
          'city_name' => 'SAGADA'
        ],
        [
          'id' => '1240',
          'province_id' => '62',
          'psgc_city' => '101805000',
          'city_name' => 'SAGAY'
        ],
        [
          'id' => '1241',
          'province_id' => '47',
          'psgc_city' => '071236000',
          'city_name' => 'SAGBAYAN (BORJA)'
        ],
        [
          'id' => '1242',
          'province_id' => '38',
          'psgc_city' => '051731000',
          'city_name' => 'SAGÑAY'
        ],
        [
          'id' => '1243',
          'province_id' => '14',
          'psgc_city' => '025705000',
          'city_name' => 'SAGUDAY'
        ],
        [
          'id' => '1244',
          'province_id' => '81',
          'psgc_city' => '153625000',
          'city_name' => 'SAGUIARAN'
        ],
        [
          'id' => '1245',
          'province_id' => '49',
          'psgc_city' => '086412000',
          'city_name' => 'SAINT BERNARD'
        ],
        [
          'id' => '1246',
          'province_id' => '61',
          'psgc_city' => '104322000',
          'city_name' => 'SALAY'
        ],
        [
          'id' => '1247',
          'province_id' => '50',
          'psgc_city' => '082619000',
          'city_name' => 'SALCEDO'
        ],
        [
          'id' => '1248',
          'province_id' => '9',
          'psgc_city' => '012916000',
          'city_name' => 'SALCEDO (BAUGEN)'
        ],
        [
          'id' => '1249',
          'province_id' => '4',
          'psgc_city' => '140120000',
          'city_name' => 'SALLAPADAN'
        ],
        [
          'id' => '1250',
          'province_id' => '56',
          'psgc_city' => '097213000',
          'city_name' => 'SALUG'
        ],
        [
          'id' => '1251',
          'province_id' => '60',
          'psgc_city' => '103518000',
          'city_name' => 'SALVADOR'
        ],
        [
          'id' => '1252',
          'province_id' => '42',
          'psgc_city' => '184532000',
          'city_name' => 'SALVADOR BENEDICTO'
        ],
        [
          'id' => '1253',
          'province_id' => '16',
          'psgc_city' => '030812000',
          'city_name' => 'SAMAL'
        ],
        [
          'id' => '1254',
          'province_id' => '46',
          'psgc_city' => '072240000',
          'city_name' => 'SAMBOAN'
        ],
        [
          'id' => '1255',
          'province_id' => '27',
          'psgc_city' => '045639000',
          'city_name' => 'SAMPALOC'
        ],
        [
          'id' => '1256',
          'province_id' => '73',
          'psgc_city' => '166815000',
          'city_name' => 'SAN AGUSTIN'
        ],
        [
          'id' => '1257',
          'province_id' => '13',
          'psgc_city' => '023127000',
          'city_name' => 'SAN AGUSTIN'
        ],
        [
          'id' => '1258',
          'province_id' => '30',
          'psgc_city' => '175911000',
          'city_name' => 'SAN AGUSTIN'
        ],
        [
          'id' => '1259',
          'province_id' => '27',
          'psgc_city' => '045640000',
          'city_name' => 'SAN ANDRES'
        ],
        [
          'id' => '1260',
          'province_id' => '30',
          'psgc_city' => '175912000',
          'city_name' => 'SAN ANDRES'
        ],
        [
          'id' => '1261',
          'province_id' => '33',
          'psgc_city' => '052008000',
          'city_name' => 'SAN ANDRES (CALOLBON)'
        ],
        [
          'id' => '1262',
          'province_id' => '21',
          'psgc_city' => '034924000',
          'city_name' => 'SAN ANTONIO'
        ],
        [
          'id' => '1263',
          'province_id' => '51',
          'psgc_city' => '084817000',
          'city_name' => 'SAN ANTONIO'
        ],
        [
          'id' => '1264',
          'province_id' => '27',
          'psgc_city' => '045641000',
          'city_name' => 'SAN ANTONIO'
        ],
        [
          'id' => '1265',
          'province_id' => '17',
          'psgc_city' => '037109000',
          'city_name' => 'SAN ANTONIO'
        ],
        [
          'id' => '1266',
          'province_id' => '74',
          'psgc_city' => '166718000',
          'city_name' => 'SAN BENITO'
        ],
        [
          'id' => '1267',
          'province_id' => '18',
          'psgc_city' => '036913000',
          'city_name' => 'SAN CLEMENTE'
        ],
        [
          'id' => '1268',
          'province_id' => '43',
          'psgc_city' => '063038000',
          'city_name' => 'SAN DIONISIO'
        ],
        [
          'id' => '1269',
          'province_id' => '9',
          'psgc_city' => '012917000',
          'city_name' => 'SAN EMILIO'
        ],
        [
          'id' => '1270',
          'province_id' => '42',
          'psgc_city' => '184525000',
          'city_name' => 'SAN ENRIQUE'
        ],
        [
          'id' => '1271',
          'province_id' => '43',
          'psgc_city' => '063039000',
          'city_name' => 'SAN ENRIQUE'
        ],
        [
          'id' => '1272',
          'province_id' => '9',
          'psgc_city' => '012918000',
          'city_name' => 'SAN ESTEBAN'
        ],
        [
          'id' => '1273',
          'province_id' => '10',
          'psgc_city' => '015533000',
          'city_name' => 'SAN FABIAN'
        ],
        [
          'id' => '1274',
          'province_id' => '17',
          'psgc_city' => '037110000',
          'city_name' => 'SAN FELIPE'
        ],
        [
          'id' => '1275',
          'province_id' => '37',
          'psgc_city' => '054118000',
          'city_name' => 'SAN FERNANDO'
        ],
        [
          'id' => '1276',
          'province_id' => '59',
          'psgc_city' => '101318000',
          'city_name' => 'SAN FERNANDO'
        ],
        [
          'id' => '1277',
          'province_id' => '46',
          'psgc_city' => '072241000',
          'city_name' => 'SAN FERNANDO'
        ],
        [
          'id' => '1278',
          'province_id' => '30',
          'psgc_city' => '175913000',
          'city_name' => 'SAN FERNANDO'
        ],
        [
          'id' => '1279',
          'province_id' => '38',
          'psgc_city' => '051732000',
          'city_name' => 'SAN FERNANDO'
        ],
        [
          'id' => '1280',
          'province_id' => '72',
          'psgc_city' => '160308000',
          'city_name' => 'SAN FRANCISCO'
        ],
        [
          'id' => '1281',
          'province_id' => '49',
          'psgc_city' => '086413000',
          'city_name' => 'SAN FRANCISCO'
        ],
        [
          'id' => '1282',
          'province_id' => '46',
          'psgc_city' => '072242000',
          'city_name' => 'SAN FRANCISCO'
        ],
        [
          'id' => '1283',
          'province_id' => '74',
          'psgc_city' => '166719000',
          'city_name' => 'SAN FRANCISCO (ANAO-AON)'
        ],
        [
          'id' => '1284',
          'province_id' => '27',
          'psgc_city' => '045642000',
          'city_name' => 'SAN FRANCISCO (AURORA)'
        ],
        [
          'id' => '1285',
          'province_id' => '7',
          'psgc_city' => '013315000',
          'city_name' => 'SAN GABRIEL'
        ],
        [
          'id' => '1286',
          'province_id' => '13',
          'psgc_city' => '023128000',
          'city_name' => 'SAN GUILLERMO'
        ],
        [
          'id' => '1287',
          'province_id' => '9',
          'psgc_city' => '012919000',
          'city_name' => 'SAN ILDEFONSO'
        ],
        [
          'id' => '1288',
          'province_id' => '20',
          'psgc_city' => '031419000',
          'city_name' => 'SAN ILDEFONSO'
        ],
        [
          'id' => '1289',
          'province_id' => '4',
          'psgc_city' => '140121000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1290',
          'province_id' => '21',
          'psgc_city' => '034925000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1291',
          'province_id' => '63',
          'psgc_city' => '112510000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1292',
          'province_id' => '51',
          'psgc_city' => '084818000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1293',
          'province_id' => '47',
          'psgc_city' => '071237000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1294',
          'province_id' => '66',
          'psgc_city' => '112324000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1295',
          'province_id' => '13',
          'psgc_city' => '023129000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1296',
          'province_id' => '53',
          'psgc_city' => '083742000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1297',
          'province_id' => '74',
          'psgc_city' => '166720000',
          'city_name' => 'SAN ISIDRO'
        ],
        [
          'id' => '1298',
          'province_id' => '10',
          'psgc_city' => '015534000',
          'city_name' => 'SAN JACINTO'
        ],
        [
          'id' => '1299',
          'province_id' => '37',
          'psgc_city' => '054119000',
          'city_name' => 'SAN JACINTO'
        ],
        [
          'id' => '1300',
          'province_id' => '43',
          'psgc_city' => '063040000',
          'city_name' => 'SAN JOAQUIN'
        ],
        [
          'id' => '1301',
          'province_id' => '52',
          'psgc_city' => '086025000',
          'city_name' => 'SAN JORGE'
        ],
        [
          'id' => '1302',
          'province_id' => '28',
          'psgc_city' => '175110000',
          'city_name' => 'SAN JOSE'
        ],
        [
          'id' => '1303',
          'province_id' => '38',
          'psgc_city' => '051733000',
          'city_name' => 'SAN JOSE'
        ],
        [
          'id' => '1304',
          'province_id' => '30',
          'psgc_city' => '175914000',
          'city_name' => 'SAN JOSE'
        ],
        [
          'id' => '1305',
          'province_id' => '51',
          'psgc_city' => '084819000',
          'city_name' => 'SAN JOSE'
        ],
        [
          'id' => '1306',
          'province_id' => '45',
          'psgc_city' => '184617000',
          'city_name' => 'SAN JOSE'
        ],
        [
          'id' => '1307',
          'province_id' => '26',
          'psgc_city' => '041022000',
          'city_name' => 'SAN JOSE'
        ],
        [
          'id' => '1308',
          'province_id' => '18',
          'psgc_city' => '036918000',
          'city_name' => 'SAN JOSE'
        ],
        [
          'id' => '1309',
          'province_id' => '75',
          'psgc_city' => '168506000',
          'city_name' => 'SAN JOSE (Capital)'
        ],
        [
          'id' => '1310',
          'province_id' => '41',
          'psgc_city' => '060613000',
          'city_name' => 'SAN JOSE (Capital)'
        ],
        [
          'id' => '1311',
          'province_id' => '52',
          'psgc_city' => '086014000',
          'city_name' => 'SAN JOSE DE BUAN'
        ],
        [
          'id' => '1312',
          'province_id' => '48',
          'psgc_city' => '076105000',
          'city_name' => 'SAN JUAN'
        ],
        [
          'id' => '1313',
          'province_id' => '4',
          'psgc_city' => '140122000',
          'city_name' => 'SAN JUAN'
        ],
        [
          'id' => '1314',
          'province_id' => '7',
          'psgc_city' => '013316000',
          'city_name' => 'SAN JUAN'
        ],
        [
          'id' => '1315',
          'province_id' => '26',
          'psgc_city' => '041023000',
          'city_name' => 'SAN JUAN'
        ],
        [
          'id' => '1316',
          'province_id' => '49',
          'psgc_city' => '086414000',
          'city_name' => 'SAN JUAN (CABALIAN)'
        ],
        [
          'id' => '1317',
          'province_id' => '9',
          'psgc_city' => '012920000',
          'city_name' => 'SAN JUAN (LAPOG)'
        ],
        [
          'id' => '1318',
          'province_id' => '50',
          'psgc_city' => '082620000',
          'city_name' => 'SAN JULIAN'
        ],
        [
          'id' => '1319',
          'province_id' => '21',
          'psgc_city' => '034927000',
          'city_name' => 'SAN LEONARDO'
        ],
        [
          'id' => '1320',
          'province_id' => '44',
          'psgc_city' => '067904000',
          'city_name' => 'SAN LORENZO'
        ],
        [
          'id' => '1321',
          'province_id' => '34',
          'psgc_city' => '051604000',
          'city_name' => 'SAN LORENZO RUIZ (IMELDA)'
        ],
        [
          'id' => '1322',
          'province_id' => '22',
          'psgc_city' => '037708000',
          'city_name' => 'SAN LUIS'
        ],
        [
          'id' => '1323',
          'province_id' => '72',
          'psgc_city' => '160309000',
          'city_name' => 'SAN LUIS'
        ],
        [
          'id' => '1324',
          'province_id' => '26',
          'psgc_city' => '041024000',
          'city_name' => 'SAN LUIS'
        ],
        [
          'id' => '1325',
          'province_id' => '19',
          'psgc_city' => '035417000',
          'city_name' => 'SAN LUIS'
        ],
        [
          'id' => '1326',
          'province_id' => '13',
          'psgc_city' => '023130000',
          'city_name' => 'SAN MANUEL'
        ],
        [
          'id' => '1327',
          'province_id' => '18',
          'psgc_city' => '036914000',
          'city_name' => 'SAN MANUEL'
        ],
        [
          'id' => '1328',
          'province_id' => '10',
          'psgc_city' => '015535000',
          'city_name' => 'SAN MANUEL'
        ],
        [
          'id' => '1329',
          'province_id' => '17',
          'psgc_city' => '037111000',
          'city_name' => 'SAN MARCELINO'
        ],
        [
          'id' => '1330',
          'province_id' => '13',
          'psgc_city' => '023131000',
          'city_name' => 'SAN MARIANO'
        ],
        [
          'id' => '1331',
          'province_id' => '13',
          'psgc_city' => '023132000',
          'city_name' => 'SAN MATEO'
        ],
        [
          'id' => '1332',
          'province_id' => '23',
          'psgc_city' => '045811000',
          'city_name' => 'SAN MATEO'
        ],
        [
          'id' => '1333',
          'province_id' => '33',
          'psgc_city' => '052009000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1334',
          'province_id' => '53',
          'psgc_city' => '083743000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1335',
          'province_id' => '57',
          'psgc_city' => '097324000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1336',
          'province_id' => '47',
          'psgc_city' => '071238000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1337',
          'province_id' => '43',
          'psgc_city' => '063041000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1338',
          'province_id' => '20',
          'psgc_city' => '031421000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1339',
          'province_id' => '73',
          'psgc_city' => '166816000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1340',
          'province_id' => '17',
          'psgc_city' => '037112000',
          'city_name' => 'SAN NARCISO'
        ],
        [
          'id' => '1341',
          'province_id' => '27',
          'psgc_city' => '045644000',
          'city_name' => 'SAN NARCISO'
        ],
        [
          'id' => '1342',
          'province_id' => '26',
          'psgc_city' => '041025000',
          'city_name' => 'SAN NICOLAS'
        ],
        [
          'id' => '1343',
          'province_id' => '10',
          'psgc_city' => '015536000',
          'city_name' => 'SAN NICOLAS'
        ],
        [
          'id' => '1344',
          'province_id' => '8',
          'psgc_city' => '012820000',
          'city_name' => 'SAN NICOLAS'
        ],
        [
          'id' => '1345',
          'province_id' => '57',
          'psgc_city' => '097325000',
          'city_name' => 'SAN PABLO'
        ],
        [
          'id' => '1346',
          'province_id' => '13',
          'psgc_city' => '023133000',
          'city_name' => 'SAN PABLO'
        ],
        [
          'id' => '1347',
          'province_id' => '37',
          'psgc_city' => '054120000',
          'city_name' => 'SAN PASCUAL'
        ],
        [
          'id' => '1348',
          'province_id' => '26',
          'psgc_city' => '041026000',
          'city_name' => 'SAN PASCUAL'
        ],
        [
          'id' => '1349',
          'province_id' => '25',
          'psgc_city' => '043425000',
          'city_name' => 'SAN PEDRO'
        ],
        [
          'id' => '1350',
          'province_id' => '50',
          'psgc_city' => '082621000',
          'city_name' => 'SAN POLICARPO'
        ],
        [
          'id' => '1351',
          'province_id' => '10',
          'psgc_city' => '015537000',
          'city_name' => 'SAN QUINTIN'
        ],
        [
          'id' => '1352',
          'province_id' => '4',
          'psgc_city' => '140123000',
          'city_name' => 'SAN QUINTIN'
        ],
        [
          'id' => '1353',
          'province_id' => '43',
          'psgc_city' => '063042000',
          'city_name' => 'SAN RAFAEL'
        ],
        [
          'id' => '1354',
          'province_id' => '20',
          'psgc_city' => '031422000',
          'city_name' => 'SAN RAFAEL'
        ],
        [
          'id' => '1355',
          'province_id' => '46',
          'psgc_city' => '072243000',
          'city_name' => 'SAN REMIGIO'
        ],
        [
          'id' => '1356',
          'province_id' => '41',
          'psgc_city' => '060614000',
          'city_name' => 'SAN REMIGIO'
        ],
        [
          'id' => '1357',
          'province_id' => '49',
          'psgc_city' => '086415000',
          'city_name' => 'SAN RICARDO'
        ],
        [
          'id' => '1358',
          'province_id' => '51',
          'psgc_city' => '084820000',
          'city_name' => 'SAN ROQUE'
        ],
        [
          'id' => '1359',
          'province_id' => '52',
          'psgc_city' => '086015000',
          'city_name' => 'SAN SEBASTIAN'
        ],
        [
          'id' => '1360',
          'province_id' => '19',
          'psgc_city' => '035418000',
          'city_name' => 'SAN SIMON'
        ],
        [
          'id' => '1361',
          'province_id' => '29',
          'psgc_city' => '175213000',
          'city_name' => 'SAN TEODORO'
        ],
        [
          'id' => '1362',
          'province_id' => '51',
          'psgc_city' => '084821000',
          'city_name' => 'SAN VICENTE'
        ],
        [
          'id' => '1363',
          'province_id' => '34',
          'psgc_city' => '051609000',
          'city_name' => 'SAN VICENTE'
        ],
        [
          'id' => '1364',
          'province_id' => '31',
          'psgc_city' => '175319000',
          'city_name' => 'SAN VICENTE'
        ],
        [
          'id' => '1365',
          'province_id' => '9',
          'psgc_city' => '012921000',
          'city_name' => 'SAN VICENTE'
        ],
        [
          'id' => '1366',
          'province_id' => '12',
          'psgc_city' => '021522000',
          'city_name' => 'SANCHEZ-MIRA'
        ],
        [
          'id' => '1367',
          'province_id' => '9',
          'psgc_city' => '012922000',
          'city_name' => 'SANTA'
        ],
        [
          'id' => '1368',
          'province_id' => '12',
          'psgc_city' => '021523000',
          'city_name' => 'SANTA ANA'
        ],
        [
          'id' => '1369',
          'province_id' => '19',
          'psgc_city' => '035419000',
          'city_name' => 'SANTA ANA'
        ],
        [
          'id' => '1370',
          'province_id' => '10',
          'psgc_city' => '015538000',
          'city_name' => 'SANTA BARBARA'
        ],
        [
          'id' => '1371',
          'province_id' => '43',
          'psgc_city' => '063043000',
          'city_name' => 'SANTA BARBARA'
        ],
        [
          'id' => '1372',
          'province_id' => '9',
          'psgc_city' => '012923000',
          'city_name' => 'SANTA CATALINA'
        ],
        [
          'id' => '1373',
          'province_id' => '45',
          'psgc_city' => '184618000',
          'city_name' => 'SANTA CATALINA'
        ],
        [
          'id' => '1374',
          'province_id' => '17',
          'psgc_city' => '037113000',
          'city_name' => 'SANTA CRUZ'
        ],
        [
          'id' => '1375',
          'province_id' => '28',
          'psgc_city' => '175111000',
          'city_name' => 'SANTA CRUZ'
        ],
        [
          'id' => '1376',
          'province_id' => '9',
          'psgc_city' => '012924000',
          'city_name' => 'SANTA CRUZ'
        ],
        [
          'id' => '1377',
          'province_id' => '32',
          'psgc_city' => '174005000',
          'city_name' => 'SANTA CRUZ'
        ],
        [
          'id' => '1378',
          'province_id' => '65',
          'psgc_city' => '112412000',
          'city_name' => 'SANTA CRUZ'
        ],
        [
          'id' => '1379',
          'province_id' => '25',
          'psgc_city' => '043426000',
          'city_name' => 'SANTA CRUZ (Capital)'
        ],
        [
          'id' => '1380',
          'province_id' => '34',
          'psgc_city' => '051610000',
          'city_name' => 'SANTA ELENA'
        ],
        [
          'id' => '1381',
          'province_id' => '46',
          'psgc_city' => '072244000',
          'city_name' => 'SANTA FE'
        ],
        [
          'id' => '1382',
          'province_id' => '53',
          'psgc_city' => '083744000',
          'city_name' => 'SANTA FE'
        ],
        [
          'id' => '1383',
          'province_id' => '11',
          'psgc_city' => '025012000',
          'city_name' => 'SANTA FE'
        ],
        [
          'id' => '1384',
          'province_id' => '30',
          'psgc_city' => '175915000',
          'city_name' => 'SANTA FE'
        ],
        [
          'id' => '1385',
          'province_id' => '18',
          'psgc_city' => '036915000',
          'city_name' => 'SANTA IGNACIA'
        ],
        [
          'id' => '1386',
          'province_id' => '72',
          'psgc_city' => '160310000',
          'city_name' => 'SANTA JOSEFA'
        ],
        [
          'id' => '1387',
          'province_id' => '9',
          'psgc_city' => '012925000',
          'city_name' => 'SANTA LUCIA'
        ],
        [
          'id' => '1388',
          'province_id' => '35',
          'psgc_city' => '056215000',
          'city_name' => 'SANTA MAGDALENA'
        ],
        [
          'id' => '1389',
          'province_id' => '5',
          'psgc_city' => '148107000',
          'city_name' => 'SANTA MARCELA'
        ],
        [
          'id' => '1390',
          'province_id' => '52',
          'psgc_city' => '086016000',
          'city_name' => 'SANTA MARGARITA'
        ],
        [
          'id' => '1391',
          'province_id' => '20',
          'psgc_city' => '031423000',
          'city_name' => 'SANTA MARIA'
        ],
        [
          'id' => '1392',
          'province_id' => '13',
          'psgc_city' => '023134000',
          'city_name' => 'SANTA MARIA'
        ],
        [
          'id' => '1393',
          'province_id' => '65',
          'psgc_city' => '112413000',
          'city_name' => 'SANTA MARIA'
        ],
        [
          'id' => '1394',
          'province_id' => '9',
          'psgc_city' => '012926000',
          'city_name' => 'SANTA MARIA'
        ],
        [
          'id' => '1395',
          'province_id' => '10',
          'psgc_city' => '015539000',
          'city_name' => 'SANTA MARIA'
        ],
        [
          'id' => '1396',
          'province_id' => '25',
          'psgc_city' => '043427000',
          'city_name' => 'SANTA MARIA'
        ],
        [
          'id' => '1397',
          'province_id' => '30',
          'psgc_city' => '175917000',
          'city_name' => 'SANTA MARIA (IMELDA)'
        ],
        [
          'id' => '1398',
          'province_id' => '74',
          'psgc_city' => '166721000',
          'city_name' => 'SANTA MONICA (SAPAO)'
        ],
        [
          'id' => '1399',
          'province_id' => '12',
          'psgc_city' => '021524000',
          'city_name' => 'SANTA PRAXEDES'
        ],
        [
          'id' => '1400',
          'province_id' => '19',
          'psgc_city' => '035420000',
          'city_name' => 'SANTA RITA'
        ],
        [
          'id' => '1401',
          'province_id' => '52',
          'psgc_city' => '086017000',
          'city_name' => 'SANTA RITA'
        ],
        [
          'id' => '1402',
          'province_id' => '21',
          'psgc_city' => '034928000',
          'city_name' => 'SANTA ROSA'
        ],
        [
          'id' => '1403',
          'province_id' => '26',
          'psgc_city' => '041027000',
          'city_name' => 'SANTA TERESITA'
        ],
        [
          'id' => '1404',
          'province_id' => '12',
          'psgc_city' => '021525000',
          'city_name' => 'SANTA TERESITA'
        ],
        [
          'id' => '1405',
          'province_id' => '46',
          'psgc_city' => '072245000',
          'city_name' => 'SANTANDER'
        ],
        [
          'id' => '1406',
          'province_id' => '71',
          'psgc_city' => '160210000',
          'city_name' => 'SANTIAGO'
        ],
        [
          'id' => '1407',
          'province_id' => '9',
          'psgc_city' => '012927000',
          'city_name' => 'SANTIAGO'
        ],
        [
          'id' => '1408',
          'province_id' => '9',
          'psgc_city' => '012928000',
          'city_name' => 'SANTO DOMINGO'
        ],
        [
          'id' => '1409',
          'province_id' => '21',
          'psgc_city' => '034929000',
          'city_name' => 'SANTO DOMINGO'
        ],
        [
          'id' => '1410',
          'province_id' => '36',
          'psgc_city' => '050516000',
          'city_name' => 'SANTO DOMINGO (LIBOG)'
        ],
        [
          'id' => '1411',
          'province_id' => '67',
          'psgc_city' => '126318000',
          'city_name' => 'SANTO NIÑO'
        ],
        [
          'id' => '1412',
          'province_id' => '52',
          'psgc_city' => '086018000',
          'city_name' => 'SANTO NIÑO'
        ],
        [
          'id' => '1413',
          'province_id' => '12',
          'psgc_city' => '021526000',
          'city_name' => 'SANTO NIÑO (FAIRE)'
        ],
        [
          'id' => '1414',
          'province_id' => '13',
          'psgc_city' => '023136000',
          'city_name' => 'SANTO TOMAS'
        ],
        [
          'id' => '1415',
          'province_id' => '7',
          'psgc_city' => '013317000',
          'city_name' => 'SANTO TOMAS'
        ],
        [
          'id' => '1416',
          'province_id' => '26',
          'psgc_city' => '041028000',
          'city_name' => 'SANTO TOMAS'
        ],
        [
          'id' => '1417',
          'province_id' => '10',
          'psgc_city' => '015540000',
          'city_name' => 'SANTO TOMAS'
        ],
        [
          'id' => '1418',
          'province_id' => '66',
          'psgc_city' => '112318000',
          'city_name' => 'SANTO TOMAS'
        ],
        [
          'id' => '1419',
          'province_id' => '19',
          'psgc_city' => '035421000',
          'city_name' => 'SANTO TOMAS'
        ],
        [
          'id' => '1420',
          'province_id' => '7',
          'psgc_city' => '013318000',
          'city_name' => 'SANTOL'
        ],
        [
          'id' => '1421',
          'province_id' => '60',
          'psgc_city' => '103519000',
          'city_name' => 'SAPAD'
        ],
        [
          'id' => '1422',
          'province_id' => '58',
          'psgc_city' => '104213000',
          'city_name' => 'SAPANG DALAGA'
        ],
        [
          'id' => '1423',
          'province_id' => '77',
          'psgc_city' => '157010000',
          'city_name' => 'SAPA-SAPA'
        ],
        [
          'id' => '1424',
          'province_id' => '39',
          'psgc_city' => '061915000',
          'city_name' => 'SAPI-AN'
        ],
        [
          'id' => '1425',
          'province_id' => '43',
          'psgc_city' => '063044000',
          'city_name' => 'SARA'
        ],
        [
          'id' => '1426',
          'province_id' => '65',
          'psgc_city' => '112415000',
          'city_name' => 'SARANGANI'
        ],
        [
          'id' => '1427',
          'province_id' => '27',
          'psgc_city' => '045645000',
          'city_name' => 'SARIAYA'
        ],
        [
          'id' => '1428',
          'province_id' => '8',
          'psgc_city' => '012821000',
          'city_name' => 'SARRAT'
        ],
        [
          'id' => '1429',
          'province_id' => '19',
          'psgc_city' => '035422000',
          'city_name' => 'SASMUAN (Sexmoan)'
        ],
        [
          'id' => '1430',
          'province_id' => '41',
          'psgc_city' => '060615000',
          'city_name' => 'SEBASTE'
        ],
        [
          'id' => '1431',
          'province_id' => '68',
          'psgc_city' => '126512000',
          'city_name' => 'SEN. NINOY AQUINO'
        ],
        [
          'id' => '1432',
          'province_id' => '56',
          'psgc_city' => '097214000',
          'city_name' => 'SERGIO OSMEÑA SR.'
        ],
        [
          'id' => '1433',
          'province_id' => '47',
          'psgc_city' => '071239000',
          'city_name' => 'SEVILLA'
        ],
        [
          'id' => '1434',
          'province_id' => '80',
          'psgc_city' => '153808000',
          'city_name' => 'SHARIFF AGUAK (MAGANOY) (Capital)'
        ],
        [
          'id' => '1435',
          'province_id' => '79',
          'psgc_city' => '156612000',
          'city_name' => 'SIASI'
        ],
        [
          'id' => '1436',
          'province_id' => '45',
          'psgc_city' => '184619000',
          'city_name' => 'SIATON'
        ],
        [
          'id' => '1437',
          'province_id' => '55',
          'psgc_city' => '098313000',
          'city_name' => 'SIAY'
        ],
        [
          'id' => '1438',
          'province_id' => '56',
          'psgc_city' => '097215000',
          'city_name' => 'SIAYAN'
        ],
        [
          'id' => '1439',
          'province_id' => '72',
          'psgc_city' => '160314000',
          'city_name' => 'SIBAGAT'
        ],
        [
          'id' => '1440',
          'province_id' => '41',
          'psgc_city' => '060616000',
          'city_name' => 'SIBALOM'
        ],
        [
          'id' => '1441',
          'province_id' => '46',
          'psgc_city' => '072246000',
          'city_name' => 'SIBONGA'
        ],
        [
          'id' => '1442',
          'province_id' => '56',
          'psgc_city' => '097216000',
          'city_name' => 'SIBUCO'
        ],
        [
          'id' => '1443',
          'province_id' => '45',
          'psgc_city' => '184620000',
          'city_name' => 'SIBULAN'
        ],
        [
          'id' => '1444',
          'province_id' => '44',
          'psgc_city' => '067905000',
          'city_name' => 'SIBUNAG'
        ],
        [
          'id' => '1445',
          'province_id' => '56',
          'psgc_city' => '097217000',
          'city_name' => 'SIBUTAD'
        ],
        [
          'id' => '1446',
          'province_id' => '77',
          'psgc_city' => '157011000',
          'city_name' => 'SIBUTU'
        ],
        [
          'id' => '1447',
          'province_id' => '47',
          'psgc_city' => '071240000',
          'city_name' => 'SIERRA BULLONES'
        ],
        [
          'id' => '1448',
          'province_id' => '9',
          'psgc_city' => '012929000',
          'city_name' => 'SIGAY'
        ],
        [
          'id' => '1449',
          'province_id' => '39',
          'psgc_city' => '061916000',
          'city_name' => 'SIGMA'
        ],
        [
          'id' => '1450',
          'province_id' => '47',
          'psgc_city' => '071241000',
          'city_name' => 'SIKATUNA'
        ],
        [
          'id' => '1451',
          'province_id' => '49',
          'psgc_city' => '086416000',
          'city_name' => 'SILAGO'
        ],
        [
          'id' => '1452',
          'province_id' => '24',
          'psgc_city' => '042118000',
          'city_name' => 'SILANG'
        ],
        [
          'id' => '1453',
          'province_id' => '51',
          'psgc_city' => '084822000',
          'city_name' => 'SILVINO LOBOS'
        ],
        [
          'id' => '1454',
          'province_id' => '77',
          'psgc_city' => '157004000',
          'city_name' => 'SIMUNUL'
        ],
        [
          'id' => '1455',
          'province_id' => '58',
          'psgc_city' => '104214000',
          'city_name' => 'SINACABAN'
        ],
        [
          'id' => '1456',
          'province_id' => '9',
          'psgc_city' => '012930000',
          'city_name' => 'SINAIT'
        ],
        [
          'id' => '1457',
          'province_id' => '56',
          'psgc_city' => '097218000',
          'city_name' => 'SINDANGAN'
        ],
        [
          'id' => '1458',
          'province_id' => '25',
          'psgc_city' => '043429000',
          'city_name' => 'SINILOAN'
        ],
        [
          'id' => '1459',
          'province_id' => '56',
          'psgc_city' => '097219000',
          'city_name' => 'SIOCON'
        ],
        [
          'id' => '1460',
          'province_id' => '38',
          'psgc_city' => '051734000',
          'city_name' => 'SIPOCOT'
        ],
        [
          'id' => '1461',
          'province_id' => '48',
          'psgc_city' => '076106000',
          'city_name' => 'SIQUIJOR (Capital)'
        ],
        [
          'id' => '1462',
          'province_id' => '56',
          'psgc_city' => '097220000',
          'city_name' => 'SIRAWAI'
        ],
        [
          'id' => '1463',
          'province_id' => '38',
          'psgc_city' => '051735000',
          'city_name' => 'SIRUMA'
        ],
        [
          'id' => '1464',
          'province_id' => '74',
          'psgc_city' => '166722000',
          'city_name' => 'SISON'
        ],
        [
          'id' => '1465',
          'province_id' => '10',
          'psgc_city' => '015541000',
          'city_name' => 'SISON'
        ],
        [
          'id' => '1466',
          'province_id' => '77',
          'psgc_city' => '157005000',
          'city_name' => 'SITANGKAI'
        ],
        [
          'id' => '1467',
          'province_id' => '74',
          'psgc_city' => '166723000',
          'city_name' => 'SOCORRO'
        ],
        [
          'id' => '1468',
          'province_id' => '29',
          'psgc_city' => '175214000',
          'city_name' => 'SOCORRO'
        ],
        [
          'id' => '1469',
          'province_id' => '31',
          'psgc_city' => '175324000',
          'city_name' => 'SOFRONIO ESPAÑOLA'
        ],
        [
          'id' => '1470',
          'province_id' => '49',
          'psgc_city' => '086417000',
          'city_name' => 'SOGOD'
        ],
        [
          'id' => '1471',
          'province_id' => '46',
          'psgc_city' => '072247000',
          'city_name' => 'SOGOD'
        ],
        [
          'id' => '1472',
          'province_id' => '12',
          'psgc_city' => '021527000',
          'city_name' => 'SOLANA'
        ],
        [
          'id' => '1473',
          'province_id' => '11',
          'psgc_city' => '025013000',
          'city_name' => 'SOLANO'
        ],
        [
          'id' => '1474',
          'province_id' => '8',
          'psgc_city' => '012822000',
          'city_name' => 'SOLSONA'
        ],
        [
          'id' => '1475',
          'province_id' => '57',
          'psgc_city' => '097340000',
          'city_name' => 'SOMINOT (DON MARIANO MARCOS)'
        ],
        [
          'id' => '1476',
          'province_id' => '77',
          'psgc_city' => '157006000',
          'city_name' => 'SOUTH UBIAN'
        ],
        [
          'id' => '1477',
          'province_id' => '80',
          'psgc_city' => '153817000',
          'city_name' => 'SOUTH UPI'
        ],
        [
          'id' => '1478',
          'province_id' => '10',
          'psgc_city' => '015542000',
          'city_name' => 'SUAL'
        ],
        [
          'id' => '1479',
          'province_id' => '17',
          'psgc_city' => '037114000',
          'city_name' => 'SUBIC'
        ],
        [
          'id' => '1480',
          'province_id' => '7',
          'psgc_city' => '013319000',
          'city_name' => 'SUDIPEN'
        ],
        [
          'id' => '1481',
          'province_id' => '61',
          'psgc_city' => '104323000',
          'city_name' => 'SUGBONGCOGON'
        ],
        [
          'id' => '1482',
          'province_id' => '9',
          'psgc_city' => '012931000',
          'city_name' => 'SUGPON'
        ],
        [
          'id' => '1483',
          'province_id' => '50',
          'psgc_city' => '082622000',
          'city_name' => 'SULAT'
        ],
        [
          'id' => '1484',
          'province_id' => '65',
          'psgc_city' => '112414000',
          'city_name' => 'SULOP'
        ],
        [
          'id' => '1485',
          'province_id' => '81',
          'psgc_city' => '153640000',
          'city_name' => 'SULTAN DUMALONDONG'
        ],
        [
          'id' => '1486',
          'province_id' => '78',
          'psgc_city' => '158408000',
          'city_name' => 'SULTAN KUDARAT (NULING)'
        ],
        [
          'id' => '1487',
          'province_id' => '78',
          'psgc_city' => '158409000',
          'city_name' => 'SULTAN MASTURA'
        ],
        [
          'id' => '1488',
          'province_id' => '60',
          'psgc_city' => '103506000',
          'city_name' => 'SULTAN NAGA DIMAPORO (KAROMATAN)'
        ],
        [
          'id' => '1489',
          'province_id' => '80',
          'psgc_city' => '153813000',
          'city_name' => 'SULTAN SA BARONGIS (LAMBAYONG)'
        ],
        [
          'id' => '1490',
          'province_id' => '59',
          'psgc_city' => '101319000',
          'city_name' => 'SUMILAO'
        ],
        [
          'id' => '1491',
          'province_id' => '76',
          'psgc_city' => '150705000',
          'city_name' => 'SUMISIP'
        ],
        [
          'id' => '1492',
          'province_id' => '67',
          'psgc_city' => '126313000',
          'city_name' => 'SURALLAH'
        ],
        [
          'id' => '1493',
          'province_id' => '9',
          'psgc_city' => '012932000',
          'city_name' => 'SUYO'
        ],
        [
          'id' => '1494',
          'province_id' => '26',
          'psgc_city' => '041029000',
          'city_name' => 'TAAL'
        ],
        [
          'id' => '1495',
          'province_id' => '53',
          'psgc_city' => '083745000',
          'city_name' => 'TABANGO'
        ],
        [
          'id' => '1496',
          'province_id' => '57',
          'psgc_city' => '097327000',
          'city_name' => 'TABINA'
        ],
        [
          'id' => '1497',
          'province_id' => '46',
          'psgc_city' => '072248000',
          'city_name' => 'TABOGON'
        ],
        [
          'id' => '1498',
          'province_id' => '53',
          'psgc_city' => '083746000',
          'city_name' => 'TABONTABON'
        ],
        [
          'id' => '1499',
          'province_id' => '46',
          'psgc_city' => '072249000',
          'city_name' => 'TABUELAN'
        ],
        [
          'id' => '1500',
          'province_id' => '1',
          'psgc_city' => '144410000',
          'city_name' => 'TADIAN'
        ],
        [
          'id' => '1501',
          'province_id' => '50',
          'psgc_city' => '082623000',
          'city_name' => 'TAFT'
        ],
        [
          'id' => '1502',
          'province_id' => '74',
          'psgc_city' => '166725000',
          'city_name' => 'TAGANA-AN'
        ],
        [
          'id' => '1503',
          'province_id' => '52',
          'psgc_city' => '086024000',
          'city_name' => 'TAGAPUL-AN'
        ],
        [
          'id' => '1504',
          'province_id' => '73',
          'psgc_city' => '166817000',
          'city_name' => 'TAGBINA'
        ],
        [
          'id' => '1505',
          'province_id' => '27',
          'psgc_city' => '045646000',
          'city_name' => 'TAGKAWAYAN'
        ],
        [
          'id' => '1506',
          'province_id' => '73',
          'psgc_city' => '166818000',
          'city_name' => 'TAGO'
        ],
        [
          'id' => '1507',
          'province_id' => '61',
          'psgc_city' => '104324000',
          'city_name' => 'TAGOLOAN'
        ],
        [
          'id' => '1508',
          'province_id' => '60',
          'psgc_city' => '103520000',
          'city_name' => 'TAGOLOAN'
        ],
        [
          'id' => '1509',
          'province_id' => '81',
          'psgc_city' => '153638000',
          'city_name' => 'TAGOLOAN II'
        ],
        [
          'id' => '1510',
          'province_id' => '9',
          'psgc_city' => '012933000',
          'city_name' => 'TAGUDIN'
        ],
        [
          'id' => '1511',
          'province_id' => '72',
          'psgc_city' => '160311000',
          'city_name' => 'TALACOGON'
        ],
        [
          'id' => '1512',
          'province_id' => '66',
          'psgc_city' => '112322000',
          'city_name' => 'TALAINGOD'
        ],
        [
          'id' => '1513',
          'province_id' => '59',
          'psgc_city' => '101320000',
          'city_name' => 'TALAKAG'
        ],
        [
          'id' => '1514',
          'province_id' => '52',
          'psgc_city' => '086019000',
          'city_name' => 'TALALORA'
        ],
        [
          'id' => '1515',
          'province_id' => '21',
          'psgc_city' => '034930000',
          'city_name' => 'TALAVERA'
        ],
        [
          'id' => '1516',
          'province_id' => '80',
          'psgc_city' => '153816000',
          'city_name' => 'TALAYAN'
        ],
        [
          'id' => '1517',
          'province_id' => '47',
          'psgc_city' => '071243000',
          'city_name' => 'TALIBON'
        ],
        [
          'id' => '1518',
          'province_id' => '79',
          'psgc_city' => '156613000',
          'city_name' => 'TALIPAO'
        ],
        [
          'id' => '1519',
          'province_id' => '26',
          'psgc_city' => '041030000',
          'city_name' => 'TALISAY'
        ],
        [
          'id' => '1520',
          'province_id' => '34',
          'psgc_city' => '051611000',
          'city_name' => 'TALISAY'
        ],
        [
          'id' => '1521',
          'province_id' => '61',
          'psgc_city' => '104325000',
          'city_name' => 'TALISAYAN'
        ],
        [
          'id' => '1522',
          'province_id' => '80',
          'psgc_city' => '153821000',
          'city_name' => 'TALITAY'
        ],
        [
          'id' => '1523',
          'province_id' => '21',
          'psgc_city' => '034931000',
          'city_name' => 'TALUGTUG'
        ],
        [
          'id' => '1524',
          'province_id' => '55',
          'psgc_city' => '098314000',
          'city_name' => 'TALUSAN'
        ],
        [
          'id' => '1525',
          'province_id' => '57',
          'psgc_city' => '097328000',
          'city_name' => 'TAMBULIG'
        ],
        [
          'id' => '1526',
          'province_id' => '67',
          'psgc_city' => '126314000',
          'city_name' => 'TAMPAKAN'
        ],
        [
          'id' => '1527',
          'province_id' => '81',
          'psgc_city' => '153626000',
          'city_name' => 'TAMPARAN'
        ],
        [
          'id' => '1528',
          'province_id' => '56',
          'psgc_city' => '097221000',
          'city_name' => 'TAMPILISAN'
        ],
        [
          'id' => '1529',
          'province_id' => '53',
          'psgc_city' => '083748000',
          'city_name' => 'TANAUAN'
        ],
        [
          'id' => '1530',
          'province_id' => '23',
          'psgc_city' => '045812000',
          'city_name' => 'TANAY'
        ],
        [
          'id' => '1531',
          'province_id' => '77',
          'psgc_city' => '157007000',
          'city_name' => 'TANDUBAS'
        ],
        [
          'id' => '1532',
          'province_id' => '40',
          'psgc_city' => '060417000',
          'city_name' => 'TANGALAN'
        ],
        [
          'id' => '1533',
          'province_id' => '60',
          'psgc_city' => '103521000',
          'city_name' => 'TANGCAL'
        ],
        [
          'id' => '1534',
          'province_id' => '67',
          'psgc_city' => '126315000',
          'city_name' => 'TANTANGAN'
        ],
        [
          'id' => '1535',
          'province_id' => '6',
          'psgc_city' => '143214000',
          'city_name' => 'TANUDAN'
        ],
        [
          'id' => '1536',
          'province_id' => '24',
          'psgc_city' => '042120000',
          'city_name' => 'TANZA'
        ],
        [
          'id' => '1537',
          'province_id' => '39',
          'psgc_city' => '061917000',
          'city_name' => 'TAPAZ'
        ],
        [
          'id' => '1538',
          'province_id' => '79',
          'psgc_city' => '156614000',
          'city_name' => 'TAPUL'
        ],
        [
          'id' => '1539',
          'province_id' => '81',
          'psgc_city' => '153627000',
          'city_name' => 'TARAKA'
        ],
        [
          'id' => '1540',
          'province_id' => '52',
          'psgc_city' => '086020000',
          'city_name' => 'TARANGNAN'
        ],
        [
          'id' => '1541',
          'province_id' => '63',
          'psgc_city' => '112511000',
          'city_name' => 'TARRAGONA'
        ],
        [
          'id' => '1542',
          'province_id' => '45',
          'psgc_city' => '184622000',
          'city_name' => 'TAYASAN'
        ],
        [
          'id' => '1543',
          'province_id' => '26',
          'psgc_city' => '041032000',
          'city_name' => 'TAYSAN'
        ],
        [
          'id' => '1544',
          'province_id' => '23',
          'psgc_city' => '045813000',
          'city_name' => 'TAYTAY'
        ],
        [
          'id' => '1545',
          'province_id' => '31',
          'psgc_city' => '175320000',
          'city_name' => 'TAYTAY'
        ],
        [
          'id' => '1546',
          'province_id' => '10',
          'psgc_city' => '015543000',
          'city_name' => 'TAYUG'
        ],
        [
          'id' => '1547',
          'province_id' => '4',
          'psgc_city' => '140124000',
          'city_name' => 'TAYUM'
        ],
        [
          'id' => '1548',
          'province_id' => '67',
          'psgc_city' => '126316000',
          'city_name' => 'T\'BOLI'
        ],
        [
          'id' => '1549',
          'province_id' => '23',
          'psgc_city' => '045814000',
          'city_name' => 'TERESA'
        ],
        [
          'id' => '1550',
          'province_id' => '24',
          'psgc_city' => '042121000',
          'city_name' => 'TERNATE'
        ],
        [
          'id' => '1551',
          'province_id' => '27',
          'psgc_city' => '045648000',
          'city_name' => 'TIAONG'
        ],
        [
          'id' => '1552',
          'province_id' => '41',
          'psgc_city' => '060617000',
          'city_name' => 'TIBIAO'
        ],
        [
          'id' => '1553',
          'province_id' => '38',
          'psgc_city' => '051736000',
          'city_name' => 'TIGAON'
        ],
        [
          'id' => '1554',
          'province_id' => '57',
          'psgc_city' => '097344000',
          'city_name' => 'TIGBAO'
        ],
        [
          'id' => '1555',
          'province_id' => '43',
          'psgc_city' => '063045000',
          'city_name' => 'TIGBAUAN'
        ],
        [
          'id' => '1556',
          'province_id' => '38',
          'psgc_city' => '051737000',
          'city_name' => 'TINAMBAC'
        ],
        [
          'id' => '1557',
          'province_id' => '4',
          'psgc_city' => '140125000',
          'city_name' => 'TINEG'
        ],
        [
          'id' => '1558',
          'province_id' => '6',
          'psgc_city' => '143215000',
          'city_name' => 'TINGLAYAN'
        ],
        [
          'id' => '1559',
          'province_id' => '26',
          'psgc_city' => '041033000',
          'city_name' => 'TINGLOY'
        ],
        [
          'id' => '1560',
          'province_id' => '2',
          'psgc_city' => '142710000',
          'city_name' => 'TINOC'
        ],
        [
          'id' => '1561',
          'province_id' => '76',
          'psgc_city' => '150706000',
          'city_name' => 'TIPO-TIPO'
        ],
        [
          'id' => '1562',
          'province_id' => '55',
          'psgc_city' => '098315000',
          'city_name' => 'TITAY'
        ],
        [
          'id' => '1563',
          'province_id' => '36',
          'psgc_city' => '050518000',
          'city_name' => 'TIWI'
        ],
        [
          'id' => '1564',
          'province_id' => '41',
          'psgc_city' => '060607000',
          'city_name' => 'TOBIAS FORNIER (DAO)'
        ],
        [
          'id' => '1565',
          'province_id' => '42',
          'psgc_city' => '184529000',
          'city_name' => 'TOBOSO'
        ],
        [
          'id' => '1566',
          'province_id' => '53',
          'psgc_city' => '083749000',
          'city_name' => 'TOLOSA'
        ],
        [
          'id' => '1567',
          'province_id' => '49',
          'psgc_city' => '086418000',
          'city_name' => 'TOMAS OPPUS'
        ],
        [
          'id' => '1568',
          'province_id' => '79',
          'psgc_city' => '156615000',
          'city_name' => 'TONGKIL'
        ],
        [
          'id' => '1569',
          'province_id' => '32',
          'psgc_city' => '174006000',
          'city_name' => 'TORRIJOS'
        ],
        [
          'id' => '1570',
          'province_id' => '72',
          'psgc_city' => '160312000',
          'city_name' => 'TRENTO'
        ],
        [
          'id' => '1571',
          'province_id' => '47',
          'psgc_city' => '071244000',
          'city_name' => 'TRINIDAD'
        ],
        [
          'id' => '1572',
          'province_id' => '12',
          'psgc_city' => '021528000',
          'city_name' => 'TUAO'
        ],
        [
          'id' => '1573',
          'province_id' => '3',
          'psgc_city' => '141113000',
          'city_name' => 'TUBA'
        ],
        [
          'id' => '1574',
          'province_id' => '75',
          'psgc_city' => '168507000',
          'city_name' => 'TUBAJON'
        ],
        [
          'id' => '1575',
          'province_id' => '7',
          'psgc_city' => '013320000',
          'city_name' => 'TUBAO'
        ],
        [
          'id' => '1576',
          'province_id' => '81',
          'psgc_city' => '153628000',
          'city_name' => 'TUBARAN'
        ],
        [
          'id' => '1577',
          'province_id' => '71',
          'psgc_city' => '160211000',
          'city_name' => 'TUBAY'
        ],
        [
          'id' => '1578',
          'province_id' => '47',
          'psgc_city' => '071245000',
          'city_name' => 'TUBIGON'
        ],
        [
          'id' => '1579',
          'province_id' => '3',
          'psgc_city' => '141114000',
          'city_name' => 'TUBLAY'
        ],
        [
          'id' => '1580',
          'province_id' => '4',
          'psgc_city' => '140126000',
          'city_name' => 'TUBO'
        ],
        [
          'id' => '1581',
          'province_id' => '74',
          'psgc_city' => '166727000',
          'city_name' => 'TUBOD'
        ],
        [
          'id' => '1582',
          'province_id' => '60',
          'psgc_city' => '103522000',
          'city_name' => 'TUBOD (Capital)'
        ],
        [
          'id' => '1583',
          'province_id' => '43',
          'psgc_city' => '063046000',
          'city_name' => 'TUBUNGAN'
        ],
        [
          'id' => '1584',
          'province_id' => '46',
          'psgc_city' => '072252000',
          'city_name' => 'TUBURAN'
        ],
        [
          'id' => '1585',
          'province_id' => '76',
          'psgc_city' => '150707000',
          'city_name' => 'TUBURAN'
        ],
        [
          'id' => '1586',
          'province_id' => '58',
          'psgc_city' => '104216000',
          'city_name' => 'TUDELA'
        ],
        [
          'id' => '1587',
          'province_id' => '46',
          'psgc_city' => '072253000',
          'city_name' => 'TUDELA'
        ],
        [
          'id' => '1588',
          'province_id' => '81',
          'psgc_city' => '153629000',
          'city_name' => 'TUGAYA'
        ],
        [
          'id' => '1589',
          'province_id' => '57',
          'psgc_city' => '097330000',
          'city_name' => 'TUKURAN'
        ],
        [
          'id' => '1590',
          'province_id' => '69',
          'psgc_city' => '124714000',
          'city_name' => 'TULUNAN'
        ],
        [
          'id' => '1591',
          'province_id' => '13',
          'psgc_city' => '023137000',
          'city_name' => 'TUMAUINI'
        ],
        [
          'id' => '1592',
          'province_id' => '53',
          'psgc_city' => '083750000',
          'city_name' => 'TUNGA'
        ],
        [
          'id' => '1593',
          'province_id' => '55',
          'psgc_city' => '098316000',
          'city_name' => 'TUNGAWAN'
        ],
        [
          'id' => '1594',
          'province_id' => '67',
          'psgc_city' => '126317000',
          'city_name' => 'TUPI'
        ],
        [
          'id' => '1595',
          'province_id' => '77',
          'psgc_city' => '157008000',
          'city_name' => 'TURTLE ISLANDS'
        ],
        [
          'id' => '1596',
          'province_id' => '26',
          'psgc_city' => '041034000',
          'city_name' => 'TUY'
        ],
        [
          'id' => '1597',
          'province_id' => '47',
          'psgc_city' => '071246000',
          'city_name' => 'UBAY'
        ],
        [
          'id' => '1598',
          'province_id' => '10',
          'psgc_city' => '015544000',
          'city_name' => 'UMINGAN'
        ],
        [
          'id' => '1599',
          'province_id' => '76',
          'psgc_city' => '150711000',
          'city_name' => 'UNGKAYA PUKAN'
        ],
        [
          'id' => '1600',
          'province_id' => '27',
          'psgc_city' => '045649000',
          'city_name' => 'UNISAN'
        ],
        [
          'id' => '1601',
          'province_id' => '78',
          'psgc_city' => '158410000',
          'city_name' => 'UPI'
        ],
        [
          'id' => '1602',
          'province_id' => '10',
          'psgc_city' => '015545000',
          'city_name' => 'URBIZTONDO'
        ],
        [
          'id' => '1603',
          'province_id' => '37',
          'psgc_city' => '054121000',
          'city_name' => 'USON'
        ],
        [
          'id' => '1604',
          'province_id' => '15',
          'psgc_city' => '020906000',
          'city_name' => 'UYUGAN'
        ],
        [
          'id' => '1605',
          'province_id' => '41',
          'psgc_city' => '060618000',
          'city_name' => 'VALDERRAMA'
        ],
        [
          'id' => '1606',
          'province_id' => '47',
          'psgc_city' => '071247000',
          'city_name' => 'VALENCIA'
        ],
        [
          'id' => '1607',
          'province_id' => '45',
          'psgc_city' => '184623000',
          'city_name' => 'VALENCIA (LUZURRIAGA)'
        ],
        [
          'id' => '1608',
          'province_id' => '42',
          'psgc_city' => '184530000',
          'city_name' => 'VALLADOLID'
        ],
        [
          'id' => '1609',
          'province_id' => '45',
          'psgc_city' => '184624000',
          'city_name' => 'VALLEHERMOSO'
        ],
        [
          'id' => '1610',
          'province_id' => '72',
          'psgc_city' => '160313000',
          'city_name' => 'VERUELA'
        ],
        [
          'id' => '1611',
          'province_id' => '29',
          'psgc_city' => '175215000',
          'city_name' => 'VICTORIA'
        ],
        [
          'id' => '1612',
          'province_id' => '51',
          'psgc_city' => '084823000',
          'city_name' => 'VICTORIA'
        ],
        [
          'id' => '1613',
          'province_id' => '25',
          'psgc_city' => '043430000',
          'city_name' => 'VICTORIA'
        ],
        [
          'id' => '1614',
          'province_id' => '18',
          'psgc_city' => '036917000',
          'city_name' => 'VICTORIA'
        ],
        [
          'id' => '1615',
          'province_id' => '33',
          'psgc_city' => '052010000',
          'city_name' => 'VIGA'
        ],
        [
          'id' => '1616',
          'province_id' => '53',
          'psgc_city' => '083751000',
          'city_name' => 'VILLABA'
        ],
        [
          'id' => '1617',
          'province_id' => '61',
          'psgc_city' => '104326000',
          'city_name' => 'VILLANUEVA'
        ],
        [
          'id' => '1618',
          'province_id' => '52',
          'psgc_city' => '086021000',
          'city_name' => 'VILLAREAL'
        ],
        [
          'id' => '1619',
          'province_id' => '10',
          'psgc_city' => '015547000',
          'city_name' => 'VILLASIS'
        ],
        [
          'id' => '1620',
          'province_id' => '11',
          'psgc_city' => '025014000',
          'city_name' => 'VILLAVERDE'
        ],
        [
          'id' => '1621',
          'province_id' => '4',
          'psgc_city' => '140127000',
          'city_name' => 'VILLAVICIOSA'
        ],
        [
          'id' => '1622',
          'province_id' => '57',
          'psgc_city' => '097341000',
          'city_name' => 'VINCENZO A. SAGUN'
        ],
        [
          'id' => '1623',
          'province_id' => '8',
          'psgc_city' => '012823000',
          'city_name' => 'VINTAR'
        ],
        [
          'id' => '1624',
          'province_id' => '34',
          'psgc_city' => '051612000',
          'city_name' => 'VINZONS'
        ],
        [
          'id' => '1625',
          'province_id' => '33',
          'psgc_city' => '052011000',
          'city_name' => 'VIRAC (Capital)'
        ],
        [
          'id' => '1626',
          'province_id' => '81',
          'psgc_city' => '153630000',
          'city_name' => 'WAO'
        ],
        [
          'id' => '1627',
          'province_id' => '45',
          'psgc_city' => '184625000',
          'city_name' => 'ZAMBOANGUITA'
        ],
        [
          'id' => '1628',
          'province_id' => '21',
          'psgc_city' => '034932000',
          'city_name' => 'ZARAGOZA'
        ],
        [
          'id' => '1629',
          'province_id' => '43',
          'psgc_city' => '063047000',
          'city_name' => 'ZARRAGA'
        ],
        [
          'id' => '1630',
          'province_id' => '52',
          'psgc_city' => '086023000',
          'city_name' => 'ZUMARRAGA'
        ],
        [
          'id' => '1631',
          'province_id' => '82',
          'psgc_city' => '133901000',
          'city_name' => 'TONDO I / II'
        ],
        [
          'id' => '1632',
          'province_id' => '82',
          'psgc_city' => '133902000',
          'city_name' => 'BINONDO'
        ],
        [
          'id' => '1633',
          'province_id' => '82',
          'psgc_city' => '133904000',
          'city_name' => 'SAN NICOLAS'
        ],
        [
          'id' => '1634',
          'province_id' => '82',
          'psgc_city' => '133905000',
          'city_name' => 'SANTA CRUZ'
        ],
        [
          'id' => '1635',
          'province_id' => '82',
          'psgc_city' => '133906000',
          'city_name' => 'SAMPALOC'
        ],
        [
          'id' => '1636',
          'province_id' => '82',
          'psgc_city' => '133907000',
          'city_name' => 'SAN MIGUEL'
        ],
        [
          'id' => '1637',
          'province_id' => '82',
          'psgc_city' => '133908000',
          'city_name' => 'ERMITA'
        ],
        [
          'id' => '1638',
          'province_id' => '82',
          'psgc_city' => '133909000',
          'city_name' => 'INTRAMUROS'
        ],
        [
          'id' => '1639',
          'province_id' => '82',
          'psgc_city' => '133910000',
          'city_name' => 'MALATE'
        ],
        [
          'id' => '1640',
          'province_id' => '82',
          'psgc_city' => '133911000',
          'city_name' => 'PACO'
        ],
        [
          'id' => '1641',
          'province_id' => '82',
          'psgc_city' => '133912000',
          'city_name' => 'PANDACAN'
        ],
        [
          'id' => '1642',
          'province_id' => '82',
          'psgc_city' => '133913000',
          'city_name' => 'PORT AREA'
        ],
        [
          'id' => '1643',
          'province_id' => '82',
          'psgc_city' => '133914000',
          'city_name' => 'SANTA ANA'
        ],
        [
          'id' => '1644',
          'province_id' => '76',
          'psgc_city' => '150713000',
          'city_name' => 'TABUAN-LASA'
        ],
        [
          'id' => '1645',
          'province_id' => '88',
          'psgc_city' => '118601000',
          'city_name' => 'DON MARCELINO'
        ],
        [
          'id' => '1646',
          'province_id' => '88',
          'psgc_city' => '118602000',
          'city_name' => 'JOSE ABAD SANTOS (TRINIDAD)'
        ],
        [
          'id' => '1647',
          'province_id' => '88',
          'psgc_city' => '118603000',
          'city_name' => 'MALITA'
        ],
        [
          'id' => '1648',
          'province_id' => '88',
          'psgc_city' => '118604000',
          'city_name' => 'SANTA MARIA'
        ],
        [
          'id' => '1649',
          'province_id' => '88',
          'psgc_city' => '118605000',
          'city_name' => 'SARANGANI'
        ],
        [
          'id' => '1650',
          'province_id' => '80',
          'psgc_city' => '153802000',
          'city_name' => 'BULDO'
        ],
        [
          'id' => '1651',
          'province_id' => '80',
          'psgc_city' => '153807000',
          'city_name' => 'DATU ODIN SINSUAT (DINAIG)'
        ],
        [
          'id' => '1652',
          'province_id' => '80',
          'psgc_city' => '153809000',
          'city_name' => 'MATANOG'
        ],
        [
          'id' => '1653',
          'province_id' => '80',
          'psgc_city' => '153811000',
          'city_name' => 'PARANG'
        ],
        [
          'id' => '1654',
          'province_id' => '80',
          'psgc_city' => '153812000',
          'city_name' => 'SULTAN KUDARAT (NULING)'
        ],
        [
          'id' => '1655',
          'province_id' => '80',
          'psgc_city' => '153814000',
          'city_name' => 'KABUNTALAN (TUMBAO)'
        ],
        [
          'id' => '1656',
          'province_id' => '80',
          'psgc_city' => '153815000',
          'city_name' => 'UPI'
        ],
        [
          'id' => '1657',
          'province_id' => '80',
          'psgc_city' => '153818000',
          'city_name' => 'BARIRA'
        ],
        [
          'id' => '1658',
          'province_id' => '80',
          'psgc_city' => '153824000',
          'city_name' => 'SULTAN MASTURA'
        ],
        [
          'id' => '1659',
          'province_id' => '80',
          'psgc_city' => '153830000',
          'city_name' => 'DATU BLAH T. SINSUAT'
        ],
        [
          'id' => '1660',
          'province_id' => '80',
          'psgc_city' => '153835000',
          'city_name' => 'DATU HOFFER AMPATUA'
        ],
        [
          'id' => '1661',
          'province_id' => '80',
          'psgc_city' => '153836000',
          'city_name' => 'DATU SALIBO'
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
