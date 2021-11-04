<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barangay;

class BrgySeeder extends Seeder
{
    private $brgys = [
      [
          'id'=> '424',
          'city_id'=> '448',
          'psgc_brgy'=> '166805002',
          'brgy_name'=> 'BUGSUKAN'
      ],
      
      [
          'id'=> '425',
          'city_id'=> '448',
          'psgc_brgy'=> '166805003',
          'brgy_name'=> 'BUNTALID'
      ],
      [
          'id'=> '426',
          'city_id'=> '448',
          'psgc_brgy'=> '166805004',
          'brgy_name'=> 'CABANGAHAN'
      ],
      [
          'id'=> '427',
          'city_id'=> '448',
          'psgc_brgy'=> '166805005',
          'brgy_name'=> 'CABAS-AN'
      ],
      [
          'id'=> '428',
          'city_id'=> '448',
          'psgc_brgy'=> '166805006',
          'brgy_name'=> 'CALAGDAAN'
      ],
      [
          'id'=> '429',
          'city_id'=> '448',
          'psgc_brgy'=> '166805007',
          'brgy_name'=> 'CONSUELO'
      ],
      [
          'id'=> '430',
          'city_id'=> '448',
          'psgc_brgy'=> '166805008',
          'brgy_name'=> 'GENERAL ISLAND'
      ],
      [
          'id'=> '431',
          'city_id'=> '448',
          'psgc_brgy'=> '166805009',
          'brgy_name'=> 'LININTI-AN (POB.)'
      ],
      [
          'id'=> '432',
          'city_id'=> '448',
          'psgc_brgy'=> '166805010',
          'brgy_name'=> 'MAGASANG'
      ],
      [
          'id'=> '433',
          'city_id'=> '448',
          'psgc_brgy'=> '166805011',
          'brgy_name'=> 'MAGOSILOM (POB.)'
      ],
      [
          'id'=> '434',
          'city_id'=> '448',
          'psgc_brgy'=> '166805012',
          'brgy_name'=> 'PAG-ANTAYAN'
      ],
      [
          'id'=> '435',
          'city_id'=> '448',
          'psgc_brgy'=> '166805013',
          'brgy_name'=> 'PALASAO'
      ],
      [
          'id'=> '436',
          'city_id'=> '448',
          'psgc_brgy'=> '166805014',
          'brgy_name'=> 'PARANG'
      ],
      [
          'id'=> '437',
          'city_id'=> '448',
          'psgc_brgy'=> '166805015',
          'brgy_name'=> 'TAPI'
      ],
      [
          'id'=> '438',
          'city_id'=> '448',
          'psgc_brgy'=> '166805016',
          'brgy_name'=> 'TIGABONG'
      ],
      [
          'id'=> '439',
          'city_id'=> '448',
          'psgc_brgy'=> '166805017',
          'brgy_name'=> 'LOBO'
      ],
      [
          'id'=> '440',
          'city_id'=> '448',
          'psgc_brgy'=> '166805018',
          'brgy_name'=> 'SAN PEDRO'
      ],
      [
          'id'=> '1113',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818001',
          'brgy_name'=> 'ALBA'
      ],
      [
          'id'=> '1114',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818002',
          'brgy_name'=> 'ANAHAO BAG-O'
      ],
      [
          'id'=> '1115',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818003',
          'brgy_name'=> 'ANAHAO DAAN'
      ],
      [
          'id'=> '1116',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818004',
          'brgy_name'=> 'BADONG'
      ],
      [
          'id'=> '1117',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818005',
          'brgy_name'=> 'BAJAO'
      ],
      [
          'id'=> '1118',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818006',
          'brgy_name'=> 'BANGSUD'
      ],
      [
          'id'=> '1119',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818007',
          'brgy_name'=> 'CAGDAPAO'
      ],
      [
          'id'=> '1120',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818008',
          'brgy_name'=> 'CAMAGONG'
      ],
      [
          'id'=> '1121',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818009',
          'brgy_name'=> 'CARAS-AN'
      ],
      [
          'id'=> '1122',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818010',
          'brgy_name'=> 'CAYALE'
      ],
      [
          'id'=> '1123',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818011',
          'brgy_name'=> 'DAYO-AN'
      ],
      [
          'id'=> '1124',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818012',
          'brgy_name'=> 'GAMUT'
      ],
      [
          'id'=> '1125',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818013',
          'brgy_name'=> 'JUBANG'
      ],
      [
          'id'=> '1126',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818014',
          'brgy_name'=> 'KINABIGTASAN'
      ],
      [
          'id'=> '1127',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818015',
          'brgy_name'=> 'LAYOG'
      ],
      [
          'id'=> '1128',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818016',
          'brgy_name'=> 'LINDOY'
      ],
      [
          'id'=> '1129',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818017',
          'brgy_name'=> 'MERCEDES'
      ],
      [
          'id'=> '1130',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818018',
          'brgy_name'=> 'PURISIMA (POB.)'
      ],
      [
          'id'=> '1131',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818019',
          'brgy_name'=> 'SUMO-SUMO'
      ],
      [
          'id'=> '1132',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818020',
          'brgy_name'=> 'UMBAY'
      ],
      [
          'id'=> '1133',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818021',
          'brgy_name'=> 'UNABAN'
      ],
      [
          'id'=> '1134',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818022',
          'brgy_name'=> 'UNIDOS'
      ],
      [
          'id'=> '1135',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818023',
          'brgy_name'=> 'VICTORIA'
      ],
      [
          'id'=> '1136',
          'city_id'=> '1506',
          'psgc_brgy'=> '166818024',
          'brgy_name'=> 'CABANGAHAN'
      ],
      [
          'id'=> '1584',
          'city_id'=> '689',
          'psgc_brgy'=> '160205001',
          'brgy_name'=> 'BALEGUIAN'
      ],
      [
          'id'=> '1585',
          'city_id'=> '689',
          'psgc_brgy'=> '160205002',
          'brgy_name'=> 'BANGONAY'
      ],
      [
          'id'=> '1586',
          'city_id'=> '689',
          'psgc_brgy'=> '160205003',
          'brgy_name'=> 'A. BELTRAN (CAMALIG)'
      ],
      [
          'id'=> '1587',
          'city_id'=> '689',
          'psgc_brgy'=> '160205004',
          'brgy_name'=> 'BUNGA'
      ],
      [
          'id'=> '1588',
          'city_id'=> '689',
          'psgc_brgy'=> '160205005',
          'brgy_name'=> 'COLORADO'
      ],
      [
          'id'=> '1589',
          'city_id'=> '689',
          'psgc_brgy'=> '160205006',
          'brgy_name'=> 'CUYAGO'
      ],
      [
          'id'=> '1590',
          'city_id'=> '689',
          'psgc_brgy'=> '160205007',
          'brgy_name'=> 'LIBAS'
      ],
      [
          'id'=> '1591',
          'city_id'=> '689',
          'psgc_brgy'=> '160205008',
          'brgy_name'=> 'MAGDAGOOC'
      ],
      [
          'id'=> '1592',
          'city_id'=> '689',
          'psgc_brgy'=> '160205009',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '1593',
          'city_id'=> '689',
          'psgc_brgy'=> '160205010',
          'brgy_name'=> 'MARAIGING'
      ],
      [
          'id'=> '1594',
          'city_id'=> '689',
          'psgc_brgy'=> '160205011',
          'brgy_name'=> 'POBLACION (JABONGA)'
      ],
      [
          'id'=> '1595',
          'city_id'=> '689',
          'psgc_brgy'=> '160205012',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '1596',
          'city_id'=> '689',
          'psgc_brgy'=> '160205013',
          'brgy_name'=> 'SAN PABLO'
      ],
      [
          'id'=> '1597',
          'city_id'=> '689',
          'psgc_brgy'=> '160205014',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '1598',
          'city_id'=> '689',
          'psgc_brgy'=> '160205015',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '1846',
          'city_id'=> '465',
          'psgc_brgy'=> '160204001',
          'brgy_name'=> 'CAHAYAGAN'
      ],
      [
          'id'=> '1847',
          'city_id'=> '465',
          'psgc_brgy'=> '160204002',
          'brgy_name'=> 'GOSOON'
      ],
      [
          'id'=> '1848',
          'city_id'=> '465',
          'psgc_brgy'=> '160204004',
          'brgy_name'=> 'MANOLIGAO'
      ],
      [
          'id'=> '1849',
          'city_id'=> '465',
          'psgc_brgy'=> '160204009',
          'brgy_name'=> 'POBLACION (CARMEN)'
      ],
      [
          'id'=> '1850',
          'city_id'=> '465',
          'psgc_brgy'=> '160204010',
          'brgy_name'=> 'ROJALES'
      ],
      [
          'id'=> '1851',
          'city_id'=> '465',
          'psgc_brgy'=> '160204011',
          'brgy_name'=> 'SAN AGUSTIN'
      ],
      [
          'id'=> '1852',
          'city_id'=> '465',
          'psgc_brgy'=> '160204012',
          'brgy_name'=> 'TAGCATONG'
      ],
      [
          'id'=> '1853',
          'city_id'=> '465',
          'psgc_brgy'=> '160204014',
          'brgy_name'=> 'VINAPOR'
      ],
      [
          'id'=> '3281',
          'city_id'=> '838',
          'psgc_brgy'=> '160305001',
          'brgy_name'=> 'BINUCAYAN'
      ],
      [
          'id'=> '3282',
          'city_id'=> '838',
          'psgc_brgy'=> '160305002',
          'brgy_name'=> 'JOHNSON'
      ],
      [
          'id'=> '3283',
          'city_id'=> '838',
          'psgc_brgy'=> '160305003',
          'brgy_name'=> 'MAGAUD'
      ],
      [
          'id'=> '3284',
          'city_id'=> '838',
          'psgc_brgy'=> '160305004',
          'brgy_name'=> 'NUEVA GRACIA'
      ],
      [
          'id'=> '3285',
          'city_id'=> '838',
          'psgc_brgy'=> '160305005',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '3286',
          'city_id'=> '838',
          'psgc_brgy'=> '160305006',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '3287',
          'city_id'=> '838',
          'psgc_brgy'=> '160305007',
          'brgy_name'=> 'SAN MARIANO'
      ],
      [
          'id'=> '3288',
          'city_id'=> '838',
          'psgc_brgy'=> '160305008',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '3289',
          'city_id'=> '838',
          'psgc_brgy'=> '160305009',
          'brgy_name'=> 'SANTA TERESA'
      ],
      [
          'id'=> '3290',
          'city_id'=> '838',
          'psgc_brgy'=> '160305010',
          'brgy_name'=> 'SANTO TOMAS'
      ],
      [
          'id'=> '3291',
          'city_id'=> '838',
          'psgc_brgy'=> '160305011',
          'brgy_name'=> 'VIOLANTA'
      ],
      [
          'id'=> '3292',
          'city_id'=> '838',
          'psgc_brgy'=> '160305012',
          'brgy_name'=> 'WALOE'
      ],
      [
          'id'=> '3293',
          'city_id'=> '838',
          'psgc_brgy'=> '160305013',
          'brgy_name'=> 'KASAPA'
      ],
      [
          'id'=> '3294',
          'city_id'=> '838',
          'psgc_brgy'=> '160305014',
          'brgy_name'=> 'KATIPUNAN'
      ],
      [
          'id'=> '3295',
          'city_id'=> '838',
          'psgc_brgy'=> '160305015',
          'brgy_name'=> 'KAUSWAGAN'
      ],
      [
          'id'=> '3296',
          'city_id'=> '838',
          'psgc_brgy'=> '160305016',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '3297',
          'city_id'=> '838',
          'psgc_brgy'=> '160305017',
          'brgy_name'=> 'SABUD'
      ],
      [
          'id'=> '3609',
          'city_id'=> '826',
          'psgc_brgy'=> '166812001',
          'brgy_name'=> 'ANIBONGAN'
      ],
      [
          'id'=> '3610',
          'city_id'=> '826',
          'psgc_brgy'=> '166812002',
          'brgy_name'=> 'BARCELONA'
      ],
      [
          'id'=> '3611',
          'city_id'=> '826',
          'psgc_brgy'=> '166812003',
          'brgy_name'=> 'BONGAN'
      ],
      [
          'id'=> '3612',
          'city_id'=> '826',
          'psgc_brgy'=> '166812004',
          'brgy_name'=> 'BOGAK'
      ],
      [
          'id'=> '3613',
          'city_id'=> '826',
          'psgc_brgy'=> '166812005',
          'brgy_name'=> 'HANDAMAYAN'
      ],
      [
          'id'=> '3614',
          'city_id'=> '826',
          'psgc_brgy'=> '166812006',
          'brgy_name'=> 'MAHAYAHAY'
      ],
      [
          'id'=> '3615',
          'city_id'=> '826',
          'psgc_brgy'=> '166812007',
          'brgy_name'=> 'MANDUS'
      ],
      [
          'id'=> '3616',
          'city_id'=> '826',
          'psgc_brgy'=> '166812008',
          'brgy_name'=> 'MANSA-ILAO'
      ],
      [
          'id'=> '3617',
          'city_id'=> '826',
          'psgc_brgy'=> '166812009',
          'brgy_name'=> 'PAGTILA-AN'
      ],
      [
          'id'=> '3618',
          'city_id'=> '826',
          'psgc_brgy'=> '166812010',
          'brgy_name'=> 'PALO ALTO'
      ],
      [
          'id'=> '3619',
          'city_id'=> '826',
          'psgc_brgy'=> '166812011',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '3620',
          'city_id'=> '826',
          'psgc_brgy'=> '166812012',
          'brgy_name'=> 'RAJAH CABUNGSO-AN'
      ],
      [
          'id'=> '3621',
          'city_id'=> '826',
          'psgc_brgy'=> '166812013',
          'brgy_name'=> 'SABANG'
      ],
      [
          'id'=> '3622',
          'city_id'=> '826',
          'psgc_brgy'=> '166812014',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '3623',
          'city_id'=> '826',
          'psgc_brgy'=> '166812015',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '3624',
          'city_id'=> '826',
          'psgc_brgy'=> '166812016',
          'brgy_name'=> 'TAGPOPORAN'
      ],
      [
          'id'=> '3625',
          'city_id'=> '826',
          'psgc_brgy'=> '166812017',
          'brgy_name'=> 'UNION'
      ],
      [
          'id'=> '3626',
          'city_id'=> '826',
          'psgc_brgy'=> '166812018',
          'brgy_name'=> 'VALENCIA'
      ],
      [
          'id'=> '4932',
          'city_id'=> '655',
          'psgc_brgy'=> '166809002',
          'brgy_name'=> 'BACULIN'
      ],
      [
          'id'=> '4933',
          'city_id'=> '655',
          'psgc_brgy'=> '166809004',
          'brgy_name'=> 'BIGAAN'
      ],
      [
          'id'=> '4934',
          'city_id'=> '655',
          'psgc_brgy'=> '166809005',
          'brgy_name'=> 'CAMBATONG'
      ],
      [
          'id'=> '4935',
          'city_id'=> '655',
          'psgc_brgy'=> '166809006',
          'brgy_name'=> 'CAMPA'
      ],
      [
          'id'=> '4936',
          'city_id'=> '655',
          'psgc_brgy'=> '166809009',
          'brgy_name'=> 'DUGMANON'
      ],
      [
          'id'=> '4937',
          'city_id'=> '655',
          'psgc_brgy'=> '166809010',
          'brgy_name'=> 'HARIP'
      ],
      [
          'id'=> '4938',
          'city_id'=> '655',
          'psgc_brgy'=> '166809012',
          'brgy_name'=> 'LA CASA (POB.)'
      ],
      [
          'id'=> '4939',
          'city_id'=> '655',
          'psgc_brgy'=> '166809014',
          'brgy_name'=> 'LOYOLA'
      ],
      [
          'id'=> '4940',
          'city_id'=> '655',
          'psgc_brgy'=> '166809017',
          'brgy_name'=> 'MALIGAYA'
      ],
      [
          'id'=> '4941',
          'city_id'=> '655',
          'psgc_brgy'=> '166809021',
          'brgy_name'=> 'PAGTIGNI-AN (BITOON)'
      ],
      [
          'id'=> '4942',
          'city_id'=> '655',
          'psgc_brgy'=> '166809022',
          'brgy_name'=> 'POCTO'
      ],
      [
          'id'=> '4943',
          'city_id'=> '655',
          'psgc_brgy'=> '166809023',
          'brgy_name'=> 'PORT LAMON'
      ],
      [
          'id'=> '4944',
          'city_id'=> '655',
          'psgc_brgy'=> '166809025',
          'brgy_name'=> 'ROXAS'
      ],
      [
          'id'=> '4945',
          'city_id'=> '655',
          'psgc_brgy'=> '166809026',
          'brgy_name'=> 'SAN JUAN'
      ],
      [
          'id'=> '4946',
          'city_id'=> '655',
          'psgc_brgy'=> '166809031',
          'brgy_name'=> 'SASA'
      ],
      [
          'id'=> '4947',
          'city_id'=> '655',
          'psgc_brgy'=> '166809034',
          'brgy_name'=> 'TAGASAKA'
      ],
      [
          'id'=> '4948',
          'city_id'=> '655',
          'psgc_brgy'=> '166809037',
          'brgy_name'=> 'TALISAY'
      ],
      [
          'id'=> '4949',
          'city_id'=> '655',
          'psgc_brgy'=> '166809038',
          'brgy_name'=> 'TARUSAN'
      ],
      [
          'id'=> '4950',
          'city_id'=> '655',
          'psgc_brgy'=> '166809039',
          'brgy_name'=> 'TIDMAN'
      ],
      [
          'id'=> '4951',
          'city_id'=> '655',
          'psgc_brgy'=> '166809040',
          'brgy_name'=> 'TIWI'
      ],
      [
          'id'=> '4952',
          'city_id'=> '655',
          'psgc_brgy'=> '166809041',
          'brgy_name'=> 'BENIGNO AQUINO (ZONE I POB.)'
      ],
      [
          'id'=> '4953',
          'city_id'=> '655',
          'psgc_brgy'=> '166809042',
          'brgy_name'=> 'ZONE II (POB.)'
      ],
      [
          'id'=> '4954',
          'city_id'=> '655',
          'psgc_brgy'=> '166809043',
          'brgy_name'=> 'ZONE III MAHARLIKA (POB.)'
      ],
      [
          'id'=> '4955',
          'city_id'=> '655',
          'psgc_brgy'=> '166809044',
          'brgy_name'=> 'TAGBOBONGA'
      ],
      [
          'id'=> '5018',
          'city_id'=> '299',
          'psgc_brgy'=> '166801001',
          'brgy_name'=> 'AMAGA'
      ],
      [
          'id'=> '5019',
          'city_id'=> '299',
          'psgc_brgy'=> '166801002',
          'brgy_name'=> 'BAHI'
      ],
      [
          'id'=> '5020',
          'city_id'=> '299',
          'psgc_brgy'=> '166801003',
          'brgy_name'=> 'CABACUNGAN'
      ],
      [
          'id'=> '5021',
          'city_id'=> '299',
          'psgc_brgy'=> '166801005',
          'brgy_name'=> 'CAMBAGANG'
      ],
      [
          'id'=> '5022',
          'city_id'=> '299',
          'psgc_brgy'=> '166801006',
          'brgy_name'=> 'CAUSWAGAN'
      ],
      [
          'id'=> '5023',
          'city_id'=> '299',
          'psgc_brgy'=> '166801007',
          'brgy_name'=> 'DAPDAP'
      ],
      [
          'id'=> '5024',
          'city_id'=> '299',
          'psgc_brgy'=> '166801008',
          'brgy_name'=> 'DUGHAN'
      ],
      [
          'id'=> '5025',
          'city_id'=> '299',
          'psgc_brgy'=> '166801009',
          'brgy_name'=> 'GAMUT'
      ],
      [
          'id'=> '5026',
          'city_id'=> '299',
          'psgc_brgy'=> '166801010',
          'brgy_name'=> 'JAVIER'
      ],
      [
          'id'=> '5027',
          'city_id'=> '299',
          'psgc_brgy'=> '166801011',
          'brgy_name'=> 'KINAYAN'
      ],
      [
          'id'=> '5028',
          'city_id'=> '299',
          'psgc_brgy'=> '166801013',
          'brgy_name'=> 'MAMIS'
      ],
      [
          'id'=> '5029',
          'city_id'=> '299',
          'psgc_brgy'=> '166801015',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '5030',
          'city_id'=> '299',
          'psgc_brgy'=> '166801016',
          'brgy_name'=> 'RIZAL'
      ],
      [
          'id'=> '5031',
          'city_id'=> '299',
          'psgc_brgy'=> '166801017',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '5032',
          'city_id'=> '299',
          'psgc_brgy'=> '166801019',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '5033',
          'city_id'=> '299',
          'psgc_brgy'=> '166801020',
          'brgy_name'=> 'SUA'
      ],
      [
          'id'=> '5034',
          'city_id'=> '299',
          'psgc_brgy'=> '166801021',
          'brgy_name'=> 'SUDLON'
      ],
      [
          'id'=> '5035',
          'city_id'=> '299',
          'psgc_brgy'=> '166801023',
          'brgy_name'=> 'UNIDAD'
      ],
      [
          'id'=> '5036',
          'city_id'=> '299',
          'psgc_brgy'=> '166801024',
          'brgy_name'=> 'WAKAT'
      ],
      [
          'id'=> '5037',
          'city_id'=> '299',
          'psgc_brgy'=> '166801025',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '5038',
          'city_id'=> '299',
          'psgc_brgy'=> '166801026',
          'brgy_name'=> 'TAMBIS'
      ],
      [
          'id'=> '5155',
          'city_id'=> '787',
          'psgc_brgy'=> '160207001',
          'brgy_name'=> 'AMBACON'
      ],
      [
          'id'=> '5156',
          'city_id'=> '787',
          'psgc_brgy'=> '160207002',
          'brgy_name'=> 'BONIFACIO'
      ],
      [
          'id'=> '5157',
          'city_id'=> '787',
          'psgc_brgy'=> '160207003',
          'brgy_name'=> 'CONSORCIA'
      ],
      [
          'id'=> '5158',
          'city_id'=> '787',
          'psgc_brgy'=> '160207004',
          'brgy_name'=> 'KATIPUNAN'
      ],
      [
          'id'=> '5159',
          'city_id'=> '787',
          'psgc_brgy'=> '160207005',
          'brgy_name'=> 'LINGAYAO'
      ],
      [
          'id'=> '5160',
          'city_id'=> '787',
          'psgc_brgy'=> '160207006',
          'brgy_name'=> 'MALICATO'
      ],
      [
          'id'=> '5161',
          'city_id'=> '787',
          'psgc_brgy'=> '160207007',
          'brgy_name'=> 'MANINGALAO'
      ],
      [
          'id'=> '5162',
          'city_id'=> '787',
          'psgc_brgy'=> '160207008',
          'brgy_name'=> 'MARCOS CALO'
      ],
      [
          'id'=> '5163',
          'city_id'=> '787',
          'psgc_brgy'=> '160207009',
          'brgy_name'=> 'MAT-I'
      ],
      [
          'id'=> '5164',
          'city_id'=> '787',
          'psgc_brgy'=> '160207010',
          'brgy_name'=> 'PINANA-AN'
      ],
      [
          'id'=> '5165',
          'city_id'=> '787',
          'psgc_brgy'=> '160207011',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '5166',
          'city_id'=> '787',
          'psgc_brgy'=> '160207013',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '5167',
          'city_id'=> '787',
          'psgc_brgy'=> '160207014',
          'brgy_name'=> 'TINUCORAN'
      ],
      [
          'id'=> '5168',
          'city_id'=> '787',
          'psgc_brgy'=> '160207015',
          'brgy_name'=> 'BALUNGAGAN'
      ],
      [
          'id'=> '5169',
          'city_id'=> '787',
          'psgc_brgy'=> '160207016',
          'brgy_name'=> 'EDUARDO G. MONTILLA (CAMBOAYON)'
      ],
      [
          'id'=> '5170',
          'city_id'=> '787',
          'psgc_brgy'=> '160207017',
          'brgy_name'=> 'DURIAN'
      ],
      [
          'id'=> '5171',
          'city_id'=> '787',
          'psgc_brgy'=> '160207018',
          'brgy_name'=> 'IBUAN'
      ],
      [
          'id'=> '5172',
          'city_id'=> '787',
          'psgc_brgy'=> '160207019',
          'brgy_name'=> 'ROSARIO'
      ],
      [
          'id'=> '5173',
          'city_id'=> '787',
          'psgc_brgy'=> '160207020',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '5174',
          'city_id'=> '787',
          'psgc_brgy'=> '160207021',
          'brgy_name'=> 'CASIKLAN'
      ],
      [
          'id'=> '5547',
          'city_id'=> '469',
          'psgc_brgy'=> '166807001',
          'brgy_name'=> 'ADLAY'
      ],
      [
          'id'=> '5548',
          'city_id'=> '469',
          'psgc_brgy'=> '166807002',
          'brgy_name'=> 'BABUYAN'
      ],
      [
          'id'=> '5549',
          'city_id'=> '469',
          'psgc_brgy'=> '166807003',
          'brgy_name'=> 'BACOLOD'
      ],
      [
          'id'=> '5550',
          'city_id'=> '469',
          'psgc_brgy'=> '166807004',
          'brgy_name'=> 'BAYBAY (POB.)'
      ],
      [
          'id'=> '5551',
          'city_id'=> '469',
          'psgc_brgy'=> '166807005',
          'brgy_name'=> 'BON-OT'
      ],
      [
          'id'=> '5552',
          'city_id'=> '469',
          'psgc_brgy'=> '166807006',
          'brgy_name'=> 'CAGLAYAG'
      ],
      [
          'id'=> '5553',
          'city_id'=> '469',
          'psgc_brgy'=> '166807007',
          'brgy_name'=> 'DAHICAN'
      ],
      [
          'id'=> '5554',
          'city_id'=> '469',
          'psgc_brgy'=> '166807008',
          'brgy_name'=> 'DOYOS (POB.)'
      ],
      [
          'id'=> '5555',
          'city_id'=> '469',
          'psgc_brgy'=> '166807009',
          'brgy_name'=> 'EMBARCADERO (POB.)'
      ],
      [
          'id'=> '5556',
          'city_id'=> '469',
          'psgc_brgy'=> '166807010',
          'brgy_name'=> 'GAMUTON'
      ],
      [
          'id'=> '5557',
          'city_id'=> '469',
          'psgc_brgy'=> '166807011',
          'brgy_name'=> 'PANIKIAN'
      ],
      [
          'id'=> '5558',
          'city_id'=> '469',
          'psgc_brgy'=> '166807012',
          'brgy_name'=> 'PANTUKAN'
      ],
      [
          'id'=> '5559',
          'city_id'=> '469',
          'psgc_brgy'=> '166807013',
          'brgy_name'=> 'SACA (POB.)'
      ],
      [
          'id'=> '5560',
          'city_id'=> '469',
          'psgc_brgy'=> '166807014',
          'brgy_name'=> 'TAG-ANITO'
      ],
      [
          'id'=> '5761',
          'city_id'=> '839',
          'psgc_brgy'=> '168505001',
          'brgy_name'=> 'CARMEN (POB.)'
      ],
      [
          'id'=> '5762',
          'city_id'=> '839',
          'psgc_brgy'=> '168505002',
          'brgy_name'=> 'ESPERANZA'
      ],
      [
          'id'=> '5763',
          'city_id'=> '839',
          'psgc_brgy'=> '168505003',
          'brgy_name'=> 'FERDINAND'
      ],
      [
          'id'=> '5764',
          'city_id'=> '839',
          'psgc_brgy'=> '168505004',
          'brgy_name'=> 'HELENE'
      ],
      [
          'id'=> '5765',
          'city_id'=> '839',
          'psgc_brgy'=> '168505006',
          'brgy_name'=> 'LIBERTY'
      ],
      [
          'id'=> '5766',
          'city_id'=> '839',
          'psgc_brgy'=> '168505008',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '5767',
          'city_id'=> '839',
          'psgc_brgy'=> '168505011',
          'brgy_name'=> 'PANAMAON'
      ],
      [
          'id'=> '5768',
          'city_id'=> '839',
          'psgc_brgy'=> '168505013',
          'brgy_name'=> 'SAN JUAN (POB.)'
      ],
      [
          'id'=> '5769',
          'city_id'=> '839',
          'psgc_brgy'=> '168505015',
          'brgy_name'=> 'SANTA CRUZ (POB.)'
      ],
      [
          'id'=> '5770',
          'city_id'=> '839',
          'psgc_brgy'=> '168505017',
          'brgy_name'=> 'SANTIAGO (POB.)'
      ],
      [
          'id'=> '6141',
          'city_id'=> '386',
          'psgc_brgy'=> '160302001',
          'brgy_name'=> 'BUNAWAN BROOK'
      ],
      [
          'id'=> '6142',
          'city_id'=> '386',
          'psgc_brgy'=> '160302002',
          'brgy_name'=> 'CONSUELO'
      ],
      [
          'id'=> '6143',
          'city_id'=> '386',
          'psgc_brgy'=> '160302003',
          'brgy_name'=> 'LIBERTAD'
      ],
      [
          'id'=> '6144',
          'city_id'=> '386',
          'psgc_brgy'=> '160302004',
          'brgy_name'=> 'MAMBALILI'
      ],
      [
          'id'=> '6145',
          'city_id'=> '386',
          'psgc_brgy'=> '160302005',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '6146',
          'city_id'=> '386',
          'psgc_brgy'=> '160302006',
          'brgy_name'=> 'SAN ANDRES'
      ],
      [
          'id'=> '6147',
          'city_id'=> '386',
          'psgc_brgy'=> '160302007',
          'brgy_name'=> 'SAN MARCOS'
      ],
      [
          'id'=> '6148',
          'city_id'=> '386',
          'psgc_brgy'=> '160302008',
          'brgy_name'=> 'IMELDA'
      ],
      [
          'id'=> '6149',
          'city_id'=> '386',
          'psgc_brgy'=> '160302009',
          'brgy_name'=> 'NUEVA ERA'
      ],
      [
          'id'=> '6150',
          'city_id'=> '386',
          'psgc_brgy'=> '160302010',
          'brgy_name'=> 'SAN TEODORO'
      ],
      [
          'id'=> '6461',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722001',
          'brgy_name'=> 'BIYABID'
      ],
      [
          'id'=> '6462',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722003',
          'brgy_name'=> 'GACEPAN'
      ],
      [
          'id'=> '6463',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722004',
          'brgy_name'=> 'IMA'
      ],
      [
          'id'=> '6464',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722005',
          'brgy_name'=> 'LOWER PATAG'
      ],
      [
          'id'=> '6465',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722006',
          'brgy_name'=> 'MABUHAY'
      ],
      [
          'id'=> '6466',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722007',
          'brgy_name'=> 'MAYAG'
      ],
      [
          'id'=> '6467',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722008',
          'brgy_name'=> 'POBLACION (SAN PEDRO)'
      ],
      [
          'id'=> '6468',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722009',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '6469',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722010',
          'brgy_name'=> 'SAN PABLO'
      ],
      [
          'id'=> '6470',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722011',
          'brgy_name'=> 'TAGBAYANI'
      ],
      [
          'id'=> '6471',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722012',
          'brgy_name'=> 'TINOGPAHAN'
      ],
      [
          'id'=> '6472',
          'city_id'=> '1464',
          'psgc_brgy'=> '166722013',
          'brgy_name'=> 'UPPER PATAG'
      ],
      [
          'id'=> '7592',
          'city_id'=> '414',
          'psgc_brgy'=> '166804001',
          'brgy_name'=> 'ARAS-ASAN'
      ],
      [
          'id'=> '7593',
          'city_id'=> '414',
          'psgc_brgy'=> '166804002',
          'brgy_name'=> 'BACOLOD'
      ],
      [
          'id'=> '7594',
          'city_id'=> '414',
          'psgc_brgy'=> '166804003',
          'brgy_name'=> 'BITAUGAN EAST'
      ],
      [
          'id'=> '7595',
          'city_id'=> '414',
          'psgc_brgy'=> '166804004',
          'brgy_name'=> 'BITAUGAN WEST'
      ],
      [
          'id'=> '7596',
          'city_id'=> '414',
          'psgc_brgy'=> '166804005',
          'brgy_name'=> 'TAWAGAN'
      ],
      [
          'id'=> '7597',
          'city_id'=> '414',
          'psgc_brgy'=> '166804006',
          'brgy_name'=> 'LACTUDAN'
      ],
      [
          'id'=> '7598',
          'city_id'=> '414',
          'psgc_brgy'=> '166804007',
          'brgy_name'=> 'MAT-E'
      ],
      [
          'id'=> '7599',
          'city_id'=> '414',
          'psgc_brgy'=> '166804008',
          'brgy_name'=> 'LA PURISIMA (PALHE)'
      ],
      [
          'id'=> '7600',
          'city_id'=> '414',
          'psgc_brgy'=> '166804009',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '7601',
          'city_id'=> '414',
          'psgc_brgy'=> '166804011',
          'brgy_name'=> 'UNIDAD'
      ],
      [
          'id'=> '7602',
          'city_id'=> '414',
          'psgc_brgy'=> '166804012',
          'brgy_name'=> 'TUBO-TUBO'
      ],
      [
          'id'=> '8453',
          'city_id'=> '589',
          'psgc_brgy'=> '160303001',
          'brgy_name'=> 'ANOLINGAN'
      ],
      [
          'id'=> '8454',
          'city_id'=> '589',
          'psgc_brgy'=> '160303002',
          'brgy_name'=> 'BAKINGKING'
      ],
      [
          'id'=> '8455',
          'city_id'=> '589',
          'psgc_brgy'=> '160303003',
          'brgy_name'=> 'BENTAHON'
      ],
      [
          'id'=> '8456',
          'city_id'=> '589',
          'psgc_brgy'=> '160303004',
          'brgy_name'=> 'BUNAGUIT'
      ],
      [
          'id'=> '8457',
          'city_id'=> '589',
          'psgc_brgy'=> '160303006',
          'brgy_name'=> 'CATMONON'
      ],
      [
          'id'=> '8458',
          'city_id'=> '589',
          'psgc_brgy'=> '160303007',
          'brgy_name'=> 'CONCORDIA'
      ],
      [
          'id'=> '8459',
          'city_id'=> '589',
          'psgc_brgy'=> '160303008',
          'brgy_name'=> 'DAKUTAN'
      ],
      [
          'id'=> '8460',
          'city_id'=> '589',
          'psgc_brgy'=> '160303009',
          'brgy_name'=> 'DUANGAN'
      ],
      [
          'id'=> '8461',
          'city_id'=> '589',
          'psgc_brgy'=> '160303010',
          'brgy_name'=> 'MAC-ARTHUR'
      ],
      [
          'id'=> '8462',
          'city_id'=> '589',
          'psgc_brgy'=> '160303011',
          'brgy_name'=> 'GUADALUPE'
      ],
      [
          'id'=> '8463',
          'city_id'=> '589',
          'psgc_brgy'=> '160303012',
          'brgy_name'=> 'HAWILIAN'
      ],
      [
          'id'=> '8464',
          'city_id'=> '589',
          'psgc_brgy'=> '160303013',
          'brgy_name'=> 'LABAO'
      ],
      [
          'id'=> '8465',
          'city_id'=> '589',
          'psgc_brgy'=> '160303014',
          'brgy_name'=> 'MAASIN'
      ],
      [
          'id'=> '8466',
          'city_id'=> '589',
          'psgc_brgy'=> '160303015',
          'brgy_name'=> 'MAHAGCOT'
      ],
      [
          'id'=> '8467',
          'city_id'=> '589',
          'psgc_brgy'=> '160303016',
          'brgy_name'=> 'MILAGROS'
      ],
      [
          'id'=> '8468',
          'city_id'=> '589',
          'psgc_brgy'=> '160303017',
          'brgy_name'=> 'NATO'
      ],
      [
          'id'=> '8469',
          'city_id'=> '589',
          'psgc_brgy'=> '160303018',
          'brgy_name'=> 'ORO'
      ],
      [
          'id'=> '8470',
          'city_id'=> '589',
          'psgc_brgy'=> '160303019',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '8471',
          'city_id'=> '589',
          'psgc_brgy'=> '160303020',
          'brgy_name'=> 'REMEDIOS'
      ],
      [
          'id'=> '8472',
          'city_id'=> '589',
          'psgc_brgy'=> '160303021',
          'brgy_name'=> 'SALUG'
      ],
      [
          'id'=> '8473',
          'city_id'=> '589',
          'psgc_brgy'=> '160303022',
          'brgy_name'=> 'SAN TORIBIO'
      ],
      [
          'id'=> '8474',
          'city_id'=> '589',
          'psgc_brgy'=> '160303023',
          'brgy_name'=> 'SANTA FE'
      ],
      [
          'id'=> '8475',
          'city_id'=> '589',
          'psgc_brgy'=> '160303024',
          'brgy_name'=> 'SEGUNDA'
      ],
      [
          'id'=> '8476',
          'city_id'=> '589',
          'psgc_brgy'=> '160303026',
          'brgy_name'=> 'TAGABASE'
      ],
      [
          'id'=> '8477',
          'city_id'=> '589',
          'psgc_brgy'=> '160303027',
          'brgy_name'=> 'TAGANAHAW'
      ],
      [
          'id'=> '8478',
          'city_id'=> '589',
          'psgc_brgy'=> '160303028',
          'brgy_name'=> 'TAGBALILI'
      ],
      [
          'id'=> '8479',
          'city_id'=> '589',
          'psgc_brgy'=> '160303029',
          'brgy_name'=> 'TAHINA'
      ],
      [
          'id'=> '8480',
          'city_id'=> '589',
          'psgc_brgy'=> '160303030',
          'brgy_name'=> 'TANDANG SORA'
      ],
      [
          'id'=> '8481',
          'city_id'=> '589',
          'psgc_brgy'=> '160303031',
          'brgy_name'=> 'AGSABU'
      ],
      [
          'id'=> '8482',
          'city_id'=> '589',
          'psgc_brgy'=> '160303032',
          'brgy_name'=> 'AGUINALDO'
      ],
      [
          'id'=> '8483',
          'city_id'=> '589',
          'psgc_brgy'=> '160303033',
          'brgy_name'=> 'BALUBO'
      ],
      [
          'id'=> '8484',
          'city_id'=> '589',
          'psgc_brgy'=> '160303034',
          'brgy_name'=> 'CEBULAN'
      ],
      [
          'id'=> '8485',
          'city_id'=> '589',
          'psgc_brgy'=> '160303035',
          'brgy_name'=> 'CROSSING LUNA'
      ],
      [
          'id'=> '8486',
          'city_id'=> '589',
          'psgc_brgy'=> '160303036',
          'brgy_name'=> 'CUBO'
      ],
      [
          'id'=> '8487',
          'city_id'=> '589',
          'psgc_brgy'=> '160303037',
          'brgy_name'=> 'GUIBONON'
      ],
      [
          'id'=> '8488',
          'city_id'=> '589',
          'psgc_brgy'=> '160303038',
          'brgy_name'=> 'KALABUAN'
      ],
      [
          'id'=> '8489',
          'city_id'=> '589',
          'psgc_brgy'=> '160303039',
          'brgy_name'=> 'KINAMAYBAY'
      ],
      [
          'id'=> '8490',
          'city_id'=> '589',
          'psgc_brgy'=> '160303040',
          'brgy_name'=> 'LANGAG'
      ],
      [
          'id'=> '8491',
          'city_id'=> '589',
          'psgc_brgy'=> '160303041',
          'brgy_name'=> 'MALIWANAG'
      ],
      [
          'id'=> '8492',
          'city_id'=> '589',
          'psgc_brgy'=> '160303042',
          'brgy_name'=> 'NEW GINGOOG'
      ],
      [
          'id'=> '8493',
          'city_id'=> '589',
          'psgc_brgy'=> '160303043',
          'brgy_name'=> 'ODIONG'
      ],
      [
          'id'=> '8494',
          'city_id'=> '589',
          'psgc_brgy'=> '160303044',
          'brgy_name'=> 'PIGLAWIGAN'
      ],
      [
          'id'=> '8495',
          'city_id'=> '589',
          'psgc_brgy'=> '160303045',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '8496',
          'city_id'=> '589',
          'psgc_brgy'=> '160303046',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '8497',
          'city_id'=> '589',
          'psgc_brgy'=> '160303047',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '8498',
          'city_id'=> '589',
          'psgc_brgy'=> '160303048',
          'brgy_name'=> 'SINAKUNGAN'
      ],
      [
          'id'=> '8499',
          'city_id'=> '589',
          'psgc_brgy'=> '160303049',
          'brgy_name'=> 'VALENTINA'
      ],
      [
          'id'=> '8619',
          'city_id'=> '127',
          'psgc_brgy'=> '166724001',
          'brgy_name'=> 'ALANG-ALANG'
      ],
      [
          'id'=> '8620',
          'city_id'=> '127',
          'psgc_brgy'=> '166724002',
          'brgy_name'=> 'ALEGRIA'
      ],
      [
          'id'=> '8621',
          'city_id'=> '127',
          'psgc_brgy'=> '166724003',
          'brgy_name'=> 'ANOMAR'
      ],
      [
          'id'=> '8622',
          'city_id'=> '127',
          'psgc_brgy'=> '166724004',
          'brgy_name'=> 'AURORA'
      ],
      [
          'id'=> '8623',
          'city_id'=> '127',
          'psgc_brgy'=> '166724005',
          'brgy_name'=> 'SEMA (BAD-ASAY)'
      ],
      [
          'id'=> '8624',
          'city_id'=> '127',
          'psgc_brgy'=> '166724006',
          'brgy_name'=> 'BALIBAYON'
      ],
      [
          'id'=> '8625',
          'city_id'=> '127',
          'psgc_brgy'=> '166724007',
          'brgy_name'=> 'BAYBAY'
      ],
      [
          'id'=> '8626',
          'city_id'=> '127',
          'psgc_brgy'=> '166724008',
          'brgy_name'=> 'BILABID'
      ],
      [
          'id'=> '8627',
          'city_id'=> '127',
          'psgc_brgy'=> '166724010',
          'brgy_name'=> 'BITAUGAN'
      ],
      [
          'id'=> '8628',
          'city_id'=> '127',
          'psgc_brgy'=> '166724011',
          'brgy_name'=> 'BONIFACIO'
      ],
      [
          'id'=> '8629',
          'city_id'=> '127',
          'psgc_brgy'=> '166724012',
          'brgy_name'=> 'BUENAVISTA'
      ],
      [
          'id'=> '8630',
          'city_id'=> '127',
          'psgc_brgy'=> '166724013',
          'brgy_name'=> 'CABONGBONGAN'
      ],
      [
          'id'=> '8631',
          'city_id'=> '127',
          'psgc_brgy'=> '166724014',
          'brgy_name'=> 'CAGNIOG'
      ],
      [
          'id'=> '8632',
          'city_id'=> '127',
          'psgc_brgy'=> '166724015',
          'brgy_name'=> 'CAGUTSAN'
      ],
      [
          'id'=> '8633',
          'city_id'=> '127',
          'psgc_brgy'=> '166724016',
          'brgy_name'=> 'CANTIASAY'
      ],
      [
          'id'=> '8634',
          'city_id'=> '127',
          'psgc_brgy'=> '166724017',
          'brgy_name'=> 'CAPALAYAN'
      ],
      [
          'id'=> '8635',
          'city_id'=> '127',
          'psgc_brgy'=> '166724018',
          'brgy_name'=> 'CATADMAN'
      ],
      [
          'id'=> '8636',
          'city_id'=> '127',
          'psgc_brgy'=> '166724019',
          'brgy_name'=> 'DANAO'
      ],
      [
          'id'=> '8637',
          'city_id'=> '127',
          'psgc_brgy'=> '166724020',
          'brgy_name'=> 'DANAWAN'
      ],
      [
          'id'=> '8638',
          'city_id'=> '127',
          'psgc_brgy'=> '166724021',
          'brgy_name'=> 'DAY-ASAN'
      ],
      [
          'id'=> '8639',
          'city_id'=> '127',
          'psgc_brgy'=> '166724022',
          'brgy_name'=> 'IPIL'
      ],
      [
          'id'=> '8640',
          'city_id'=> '127',
          'psgc_brgy'=> '166724023',
          'brgy_name'=> 'LIBUAC'
      ],
      [
          'id'=> '8641',
          'city_id'=> '127',
          'psgc_brgy'=> '166724024',
          'brgy_name'=> 'LIPATA'
      ],
      [
          'id'=> '8642',
          'city_id'=> '127',
          'psgc_brgy'=> '166724025',
          'brgy_name'=> 'LISONDRA'
      ],
      [
          'id'=> '8643',
          'city_id'=> '127',
          'psgc_brgy'=> '166724026',
          'brgy_name'=> 'LUNA'
      ],
      [
          'id'=> '8644',
          'city_id'=> '127',
          'psgc_brgy'=> '166724027',
          'brgy_name'=> 'MABINI'
      ],
      [
          'id'=> '8645',
          'city_id'=> '127',
          'psgc_brgy'=> '166724028',
          'brgy_name'=> 'MABUA'
      ],
      [
          'id'=> '8646',
          'city_id'=> '127',
          'psgc_brgy'=> '166724029',
          'brgy_name'=> 'MANYAGAO'
      ],
      [
          'id'=> '8647',
          'city_id'=> '127',
          'psgc_brgy'=> '166724030',
          'brgy_name'=> 'MAPAWA'
      ],
      [
          'id'=> '8648',
          'city_id'=> '127',
          'psgc_brgy'=> '166724031',
          'brgy_name'=> 'MAT-I'
      ],
      [
          'id'=> '8649',
          'city_id'=> '127',
          'psgc_brgy'=> '166724032',
          'brgy_name'=> 'NABAGO'
      ],
      [
          'id'=> '8650',
          'city_id'=> '127',
          'psgc_brgy'=> '166724033',
          'brgy_name'=> 'NONOC'
      ],
      [
          'id'=> '8651',
          'city_id'=> '127',
          'psgc_brgy'=> '166724034',
          'brgy_name'=> 'POCTOY'
      ],
      [
          'id'=> '8652',
          'city_id'=> '127',
          'psgc_brgy'=> '166724035',
          'brgy_name'=> 'PUNTA BILAR'
      ],
      [
          'id'=> '8653',
          'city_id'=> '127',
          'psgc_brgy'=> '166724036',
          'brgy_name'=> 'QUEZON'
      ],
      [
          'id'=> '8654',
          'city_id'=> '127',
          'psgc_brgy'=> '166724037',
          'brgy_name'=> 'RIZAL'
      ],
      [
          'id'=> '8655',
          'city_id'=> '127',
          'psgc_brgy'=> '166724038',
          'brgy_name'=> 'SABANG'
      ],
      [
          'id'=> '8656',
          'city_id'=> '127',
          'psgc_brgy'=> '166724039',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '8657',
          'city_id'=> '127',
          'psgc_brgy'=> '166724040',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '8658',
          'city_id'=> '127',
          'psgc_brgy'=> '166724041',
          'brgy_name'=> 'SAN JUAN'
      ],
      [
          'id'=> '8659',
          'city_id'=> '127',
          'psgc_brgy'=> '166724042',
          'brgy_name'=> 'SAN PEDRO (HANIGAD)'
      ],
      [
          'id'=> '8660',
          'city_id'=> '127',
          'psgc_brgy'=> '166724043',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '8661',
          'city_id'=> '127',
          'psgc_brgy'=> '166724044',
          'brgy_name'=> 'SIDLAKAN'
      ],
      [
          'id'=> '8662',
          'city_id'=> '127',
          'psgc_brgy'=> '166724045',
          'brgy_name'=> 'SILOP'
      ],
      [
          'id'=> '8663',
          'city_id'=> '127',
          'psgc_brgy'=> '166724046',
          'brgy_name'=> 'SUGBAY'
      ],
      [
          'id'=> '8664',
          'city_id'=> '127',
          'psgc_brgy'=> '166724047',
          'brgy_name'=> 'SUKAILANG'
      ],
      [
          'id'=> '8665',
          'city_id'=> '127',
          'psgc_brgy'=> '166724048',
          'brgy_name'=> 'TAFT (POB.)'
      ],
      [
          'id'=> '8666',
          'city_id'=> '127',
          'psgc_brgy'=> '166724064',
          'brgy_name'=> 'TALISAY'
      ],
      [
          'id'=> '8667',
          'city_id'=> '127',
          'psgc_brgy'=> '166724065',
          'brgy_name'=> 'TOGBONGON'
      ],
      [
          'id'=> '8668',
          'city_id'=> '127',
          'psgc_brgy'=> '166724066',
          'brgy_name'=> 'TRINIDAD'
      ],
      [
          'id'=> '8669',
          'city_id'=> '127',
          'psgc_brgy'=> '166724067',
          'brgy_name'=> 'OROK'
      ],
      [
          'id'=> '8670',
          'city_id'=> '127',
          'psgc_brgy'=> '166724068',
          'brgy_name'=> 'WASHINGTON (POB.)'
      ],
      [
          'id'=> '8671',
          'city_id'=> '127',
          'psgc_brgy'=> '166724095',
          'brgy_name'=> 'ZARAGOZA'
      ],
      [
          'id'=> '8672',
          'city_id'=> '127',
          'psgc_brgy'=> '166724096',
          'brgy_name'=> 'CANLANIPA'
      ],
      [
          'id'=> '9048',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212001',
          'brgy_name'=> 'POBLACION I (AGAY)'
      ],
      [
          'id'=> '9049',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212002',
          'brgy_name'=> 'BALANGBALANG'
      ],
      [
          'id'=> '9050',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212003',
          'brgy_name'=> 'BASILISA'
      ],
      [
          'id'=> '9051',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212004',
          'brgy_name'=> 'HUMILOG'
      ],
      [
          'id'=> '9052',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212005',
          'brgy_name'=> 'PANAYTAYON'
      ],
      [
          'id'=> '9053',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212006',
          'brgy_name'=> 'SAN ANTONIO'
      ],
      [
          'id'=> '9054',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212007',
          'brgy_name'=> 'TAGBONGABONG'
      ],
      [
          'id'=> '9055',
          'city_id'=> '1213',
          'psgc_brgy'=> '160212008',
          'brgy_name'=> 'POBLACION II'
      ],
      [
          'id'=> '9531',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209001',
          'brgy_name'=> 'ACLAN'
      ],
      [
          'id'=> '9532',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209002',
          'brgy_name'=> 'AMONTAY'
      ],
      [
          'id'=> '9533',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209004',
          'brgy_name'=> 'ATA-ATAHON'
      ],
      [
          'id'=> '9534',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209005',
          'brgy_name'=> 'CAMAGONG'
      ],
      [
          'id'=> '9535',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209006',
          'brgy_name'=> 'CUBI-CUBI'
      ],
      [
          'id'=> '9536',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209007',
          'brgy_name'=> 'CULIT'
      ],
      [
          'id'=> '9537',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209008',
          'brgy_name'=> 'JAGUIMITAN'
      ],
      [
          'id'=> '9538',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209009',
          'brgy_name'=> 'KINABJANGAN'
      ],
      [
          'id'=> '9539',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209010',
          'brgy_name'=> 'BARANGAY 1 (POB.)'
      ],
      [
          'id'=> '9540',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209011',
          'brgy_name'=> 'BARANGAY 2 (POB.)'
      ],
      [
          'id'=> '9541',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209012',
          'brgy_name'=> 'BARANGAY 3 (POB.)'
      ],
      [
          'id'=> '9542',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209013',
          'brgy_name'=> 'BARANGAY 4 (POB.)'
      ],
      [
          'id'=> '9543',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209014',
          'brgy_name'=> 'BARANGAY 5 (POB.)'
      ],
      [
          'id'=> '9544',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209015',
          'brgy_name'=> 'BARANGAY 6 (POB.)'
      ],
      [
          'id'=> '9545',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209016',
          'brgy_name'=> 'BARANGAY 7 (POB.)'
      ],
      [
          'id'=> '9546',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209017',
          'brgy_name'=> 'PUNTA'
      ],
      [
          'id'=> '9547',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209018',
          'brgy_name'=> 'SANTA ANA'
      ],
      [
          'id'=> '9548',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209019',
          'brgy_name'=> 'TALISAY'
      ],
      [
          'id'=> '9549',
          'city_id'=> '1035',
          'psgc_brgy'=> '160209020',
          'brgy_name'=> 'TRIANGULO'
      ],
      [
          'id'=> '10038',
          'city_id'=> '488',
          'psgc_brgy'=> '166706001',
          'brgy_name'=> 'CABUGO'
      ],
      [
          'id'=> '10039',
          'city_id'=> '488',
          'psgc_brgy'=> '166706002',
          'brgy_name'=> 'CAGDIANAO'
      ],
      [
          'id'=> '10040',
          'city_id'=> '488',
          'psgc_brgy'=> '166706003',
          'brgy_name'=> 'DAYWAN'
      ],
      [
          'id'=> '10041',
          'city_id'=> '488',
          'psgc_brgy'=> '166706004',
          'brgy_name'=> 'HAYANGGABON'
      ],
      [
          'id'=> '10042',
          'city_id'=> '488',
          'psgc_brgy'=> '166706005',
          'brgy_name'=> 'LADGARON (POB.)'
      ],
      [
          'id'=> '10043',
          'city_id'=> '488',
          'psgc_brgy'=> '166706006',
          'brgy_name'=> 'LAPINIGAN'
      ],
      [
          'id'=> '10044',
          'city_id'=> '488',
          'psgc_brgy'=> '166706007',
          'brgy_name'=> 'MAGALLANES'
      ],
      [
          'id'=> '10045',
          'city_id'=> '488',
          'psgc_brgy'=> '166706008',
          'brgy_name'=> 'PANATAO'
      ],
      [
          'id'=> '10046',
          'city_id'=> '488',
          'psgc_brgy'=> '166706009',
          'brgy_name'=> 'TAYAGA (POB. EAST)'
      ],
      [
          'id'=> '10047',
          'city_id'=> '488',
          'psgc_brgy'=> '166706010',
          'brgy_name'=> 'BAGAKAY (POB. WEST)'
      ],
      [
          'id'=> '10048',
          'city_id'=> '488',
          'psgc_brgy'=> '166706011',
          'brgy_name'=> 'SAPA'
      ],
      [
          'id'=> '10049',
          'city_id'=> '488',
          'psgc_brgy'=> '166706012',
          'brgy_name'=> 'TAGANITO'
      ],
      [
          'id'=> '10050',
          'city_id'=> '488',
          'psgc_brgy'=> '166706013',
          'brgy_name'=> 'URBIZTONDO'
      ],
      [
          'id'=> '10051',
          'city_id'=> '488',
          'psgc_brgy'=> '166706014',
          'brgy_name'=> 'WANGKE'
      ],
      [
          'id'=> '11118',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309001',
          'brgy_name'=> 'ANISLAGAN'
      ],
      [
          'id'=> '11119',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309002',
          'brgy_name'=> 'BAYLO'
      ],
      [
          'id'=> '11120',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309003',
          'brgy_name'=> 'COALICION'
      ],
      [
          'id'=> '11121',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309004',
          'brgy_name'=> 'CULI'
      ],
      [
          'id'=> '11122',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309005',
          'brgy_name'=> 'NUEVO TRABAJO'
      ],
      [
          'id'=> '11123',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309006',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '11124',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309007',
          'brgy_name'=> 'SANTA INES'
      ],
      [
          'id'=> '11125',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309008',
          'brgy_name'=> 'BALIT'
      ],
      [
          'id'=> '11126',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309009',
          'brgy_name'=> 'BINICALAN'
      ],
      [
          'id'=> '11127',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309010',
          'brgy_name'=> 'CECILIA'
      ],
      [
          'id'=> '11128',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309011',
          'brgy_name'=> 'DIMASALANG'
      ],
      [
          'id'=> '11129',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309012',
          'brgy_name'=> 'DON ALEJANDRO'
      ],
      [
          'id'=> '11130',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309013',
          'brgy_name'=> 'DON PEDRO'
      ],
      [
          'id'=> '11131',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309014',
          'brgy_name'=> 'DOÑA FLAVIA'
      ],
      [
          'id'=> '11132',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309015',
          'brgy_name'=> 'MAHAGSAY'
      ],
      [
          'id'=> '11133',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309016',
          'brgy_name'=> 'MAHAPAG'
      ],
      [
          'id'=> '11134',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309017',
          'brgy_name'=> 'MAHAYAHAY'
      ],
      [
          'id'=> '11135',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309018',
          'brgy_name'=> 'MURITULA'
      ],
      [
          'id'=> '11136',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309019',
          'brgy_name'=> 'POLICARPO'
      ],
      [
          'id'=> '11137',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309020',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '11138',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309021',
          'brgy_name'=> 'SAN PEDRO'
      ],
      [
          'id'=> '11139',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309022',
          'brgy_name'=> 'SANTA RITA'
      ],
      [
          'id'=> '11140',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309023',
          'brgy_name'=> 'SANTIAGO'
      ],
      [
          'id'=> '11141',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309024',
          'brgy_name'=> 'WEGGUAM'
      ],
      [
          'id'=> '11142',
          'city_id'=> '1323',
          'psgc_brgy'=> '160309025',
          'brgy_name'=> 'DOÑA MAXIMA'
      ],
      [
          'id'=> '11271',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312001',
          'brgy_name'=> 'BASA'
      ],
      [
          'id'=> '11272',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312002',
          'brgy_name'=> 'CUEVAS'
      ],
      [
          'id'=> '11273',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312003',
          'brgy_name'=> 'KAPATUNGAN'
      ],
      [
          'id'=> '11274',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312004',
          'brgy_name'=> 'LANGKILA-AN'
      ],
      [
          'id'=> '11275',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312005',
          'brgy_name'=> 'NEW VISAYAS'
      ],
      [
          'id'=> '11276',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312006',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '11277',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312007',
          'brgy_name'=> 'PULANG-LUPA'
      ],
      [
          'id'=> '11278',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312008',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '11279',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312009',
          'brgy_name'=> 'SAN IGNACIO'
      ],
      [
          'id'=> '11280',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312010',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '11281',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312011',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '11282',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312012',
          'brgy_name'=> 'SANTA MARIA'
      ],
      [
          'id'=> '11283',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312013',
          'brgy_name'=> 'TUDELA'
      ],
      [
          'id'=> '11284',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312014',
          'brgy_name'=> 'CEBOLIN'
      ],
      [
          'id'=> '11285',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312015',
          'brgy_name'=> 'MANAT'
      ],
      [
          'id'=> '11286',
          'city_id'=> '1570',
          'psgc_brgy'=> '160312016',
          'brgy_name'=> 'PANGYAN'
      ],
      [
          'id'=> '11807',
          'city_id'=> '7',
          'psgc_brgy'=> '160202002',
          'brgy_name'=> 'AGAO POB. (BGY. 3)'
      ],
      [
          'id'=> '11808',
          'city_id'=> '7',
          'psgc_brgy'=> '160202003',
          'brgy_name'=> 'AGUSAN PEQUEÑO'
      ],
      [
          'id'=> '11809',
          'city_id'=> '7',
          'psgc_brgy'=> '160202004',
          'brgy_name'=> 'AMBAGO'
      ],
      [
          'id'=> '11810',
          'city_id'=> '7',
          'psgc_brgy'=> '160202006',
          'brgy_name'=> 'AMPARO'
      ],
      [
          'id'=> '11811',
          'city_id'=> '7',
          'psgc_brgy'=> '160202007',
          'brgy_name'=> 'AMPAYON'
      ],
      [
          'id'=> '11812',
          'city_id'=> '7',
          'psgc_brgy'=> '160202008',
          'brgy_name'=> 'ANTICALA'
      ],
      [
          'id'=> '11813',
          'city_id'=> '7',
          'psgc_brgy'=> '160202009',
          'brgy_name'=> 'ANTONGALON'
      ],
      [
          'id'=> '11814',
          'city_id'=> '7',
          'psgc_brgy'=> '160202010',
          'brgy_name'=> 'AUPAGAN'
      ],
      [
          'id'=> '11815',
          'city_id'=> '7',
          'psgc_brgy'=> '160202012',
          'brgy_name'=> 'BAAN KM 3'
      ],
      [
          'id'=> '11816',
          'city_id'=> '7',
          'psgc_brgy'=> '160202013',
          'brgy_name'=> 'BABAG'
      ],
      [
          'id'=> '11817',
          'city_id'=> '7',
          'psgc_brgy'=> '160202014',
          'brgy_name'=> 'BADING POB. (BGY. 22)'
      ],
      [
          'id'=> '11818',
          'city_id'=> '7',
          'psgc_brgy'=> '160202016',
          'brgy_name'=> 'BANCASI'
      ],
      [
          'id'=> '11819',
          'city_id'=> '7',
          'psgc_brgy'=> '160202017',
          'brgy_name'=> 'BANZA'
      ],
      [
          'id'=> '11820',
          'city_id'=> '7',
          'psgc_brgy'=> '160202018',
          'brgy_name'=> 'BAOBAOAN'
      ],
      [
          'id'=> '11821',
          'city_id'=> '7',
          'psgc_brgy'=> '160202019',
          'brgy_name'=> 'BASAG'
      ],
      [
          'id'=> '11822',
          'city_id'=> '7',
          'psgc_brgy'=> '160202020',
          'brgy_name'=> 'BAYANIHAN POB. (BGY. 27)'
      ],
      [
          'id'=> '11823',
          'city_id'=> '7',
          'psgc_brgy'=> '160202021',
          'brgy_name'=> 'BILAY'
      ],
      [
          'id'=> '11824',
          'city_id'=> '7',
          'psgc_brgy'=> '160202022',
          'brgy_name'=> 'BIT-OS'
      ],
      [
          'id'=> '11825',
          'city_id'=> '7',
          'psgc_brgy'=> '160202023',
          'brgy_name'=> 'BITAN-AGAN'
      ],
      [
          'id'=> '11826',
          'city_id'=> '7',
          'psgc_brgy'=> '160202024',
          'brgy_name'=> 'BOBON'
      ],
      [
          'id'=> '11827',
          'city_id'=> '7',
          'psgc_brgy'=> '160202025',
          'brgy_name'=> 'BONBON'
      ],
      [
          'id'=> '11828',
          'city_id'=> '7',
          'psgc_brgy'=> '160202026',
          'brgy_name'=> 'BUGABUS'
      ],
      [
          'id'=> '11829',
          'city_id'=> '7',
          'psgc_brgy'=> '160202027',
          'brgy_name'=> 'BUHANGIN POB. (BGY. 19)'
      ],
      [
          'id'=> '11830',
          'city_id'=> '7',
          'psgc_brgy'=> '160202029',
          'brgy_name'=> 'CABCABON'
      ],
      [
          'id'=> '11831',
          'city_id'=> '7',
          'psgc_brgy'=> '160202031',
          'brgy_name'=> 'CAMAYAHAN'
      ],
      [
          'id'=> '11832',
          'city_id'=> '7',
          'psgc_brgy'=> '160202033',
          'brgy_name'=> 'BAAN RIVERSIDE POB. (BGY. 20)'
      ],
      [
          'id'=> '11833',
          'city_id'=> '7',
          'psgc_brgy'=> '160202036',
          'brgy_name'=> 'DANKIAS'
      ],
      [
          'id'=> '11834',
          'city_id'=> '7',
          'psgc_brgy'=> '160202037',
          'brgy_name'=> 'IMADEJAS POB. (BGY. 24)'
      ],
      [
          'id'=> '11835',
          'city_id'=> '7',
          'psgc_brgy'=> '160202038',
          'brgy_name'=> 'DIEGO SILANG POB. (BGY. 6)'
      ],
      [
          'id'=> '11836',
          'city_id'=> '7',
          'psgc_brgy'=> '160202039',
          'brgy_name'=> 'DOONGAN'
      ],
      [
          'id'=> '11837',
          'city_id'=> '7',
          'psgc_brgy'=> '160202040',
          'brgy_name'=> 'DUMALAGAN'
      ],
      [
          'id'=> '11838',
          'city_id'=> '7',
          'psgc_brgy'=> '160202043',
          'brgy_name'=> 'GOLDEN RIBBON POB. (BGY. 2)'
      ],
      [
          'id'=> '11839',
          'city_id'=> '7',
          'psgc_brgy'=> '160202044',
          'brgy_name'=> 'DAGOHOY POB. (BGY. 7)'
      ],
      [
          'id'=> '11840',
          'city_id'=> '7',
          'psgc_brgy'=> '160202045',
          'brgy_name'=> 'JOSE RIZAL POB. (BGY. 25)'
      ],
      [
          'id'=> '11841',
          'city_id'=> '7',
          'psgc_brgy'=> '160202047',
          'brgy_name'=> 'HOLY REDEEMER POB. (BGY. 23)'
      ],
      [
          'id'=> '11842',
          'city_id'=> '7',
          'psgc_brgy'=> '160202048',
          'brgy_name'=> 'HUMABON POB. (BGY. 11)'
      ],
      [
          'id'=> '11843',
          'city_id'=> '7',
          'psgc_brgy'=> '160202049',
          'brgy_name'=> 'KINAMLUTAN'
      ],
      [
          'id'=> '11844',
          'city_id'=> '7',
          'psgc_brgy'=> '160202051',
          'brgy_name'=> 'LAPU-LAPU POB. (BGY. 8)'
      ],
      [
          'id'=> '11845',
          'city_id'=> '7',
          'psgc_brgy'=> '160202052',
          'brgy_name'=> 'LEMON'
      ],
      [
          'id'=> '11846',
          'city_id'=> '7',
          'psgc_brgy'=> '160202053',
          'brgy_name'=> 'LEON KILAT POB. (BGY. 13)'
      ],
      [
          'id'=> '11847',
          'city_id'=> '7',
          'psgc_brgy'=> '160202054',
          'brgy_name'=> 'LIBERTAD'
      ],
      [
          'id'=> '11848',
          'city_id'=> '7',
          'psgc_brgy'=> '160202055',
          'brgy_name'=> 'LIMAHA POB. (BGY. 14)'
      ],
      [
          'id'=> '11849',
          'city_id'=> '7',
          'psgc_brgy'=> '160202056',
          'brgy_name'=> 'LOS ANGELES'
      ],
      [
          'id'=> '11850',
          'city_id'=> '7',
          'psgc_brgy'=> '160202057',
          'brgy_name'=> 'LUMBOCAN'
      ],
      [
          'id'=> '11851',
          'city_id'=> '7',
          'psgc_brgy'=> '160202060',
          'brgy_name'=> 'MAGUINDA'
      ],
      [
          'id'=> '11852',
          'city_id'=> '7',
          'psgc_brgy'=> '160202061',
          'brgy_name'=> 'MAHAY'
      ],
      [
          'id'=> '11853',
          'city_id'=> '7',
          'psgc_brgy'=> '160202062',
          'brgy_name'=> 'MAHOGANY POB. (BGY. 21)'
      ],
      [
          'id'=> '11854',
          'city_id'=> '7',
          'psgc_brgy'=> '160202063',
          'brgy_name'=> 'MAIBU'
      ],
      [
          'id'=> '11855',
          'city_id'=> '7',
          'psgc_brgy'=> '160202064',
          'brgy_name'=> 'MANDAMO'
      ],
      [
          'id'=> '11856',
          'city_id'=> '7',
          'psgc_brgy'=> '160202065',
          'brgy_name'=> 'MANILA DE BUGABUS'
      ],
      [
          'id'=> '11857',
          'city_id'=> '7',
          'psgc_brgy'=> '160202066',
          'brgy_name'=> 'MAON POB. (BGY. 1)'
      ],
      [
          'id'=> '11858',
          'city_id'=> '7',
          'psgc_brgy'=> '160202067',
          'brgy_name'=> 'MASAO'
      ],
      [
          'id'=> '11859',
          'city_id'=> '7',
          'psgc_brgy'=> '160202068',
          'brgy_name'=> 'MAUG'
      ],
      [
          'id'=> '11860',
          'city_id'=> '7',
          'psgc_brgy'=> '160202069',
          'brgy_name'=> 'PORT POYOHON POB. (BGY. 17 - NEW ASIA)'
      ],
      [
          'id'=> '11861',
          'city_id'=> '7',
          'psgc_brgy'=> '160202070',
          'brgy_name'=> 'NEW SOCIETY VILLAGE POB. (BGY. 26)'
      ],
      [
          'id'=> '11862',
          'city_id'=> '7',
          'psgc_brgy'=> '160202071',
          'brgy_name'=> 'ONG YIU POB. (BGY. 16)'
      ],
      [
          'id'=> '11863',
          'city_id'=> '7',
          'psgc_brgy'=> '160202072',
          'brgy_name'=> 'PIANING'
      ],
      [
          'id'=> '11864',
          'city_id'=> '7',
          'psgc_brgy'=> '160202073',
          'brgy_name'=> 'PINAMANCULAN'
      ],
      [
          'id'=> '11865',
          'city_id'=> '7',
          'psgc_brgy'=> '160202074',
          'brgy_name'=> 'RAJAH SOLIMAN POB. (BGY. 4)'
      ],
      [
          'id'=> '11866',
          'city_id'=> '7',
          'psgc_brgy'=> '160202075',
          'brgy_name'=> 'SAN IGNACIO POB. (BGY. 15)'
      ],
      [
          'id'=> '11867',
          'city_id'=> '7',
          'psgc_brgy'=> '160202076',
          'brgy_name'=> 'SAN MATEO'
      ],
      [
          'id'=> '11868',
          'city_id'=> '7',
          'psgc_brgy'=> '160202077',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '11869',
          'city_id'=> '7',
          'psgc_brgy'=> '160202078',
          'brgy_name'=> 'SIKATUNA POB. (BGY. 10)'
      ],
      [
          'id'=> '11870',
          'city_id'=> '7',
          'psgc_brgy'=> '160202079',
          'brgy_name'=> 'SILONGAN POB. (BGY. 5)'
      ],
      [
          'id'=> '11871',
          'city_id'=> '7',
          'psgc_brgy'=> '160202080',
          'brgy_name'=> 'SUMILIHON'
      ],
      [
          'id'=> '11872',
          'city_id'=> '7',
          'psgc_brgy'=> '160202082',
          'brgy_name'=> 'TAGABACA'
      ],
      [
          'id'=> '11873',
          'city_id'=> '7',
          'psgc_brgy'=> '160202083',
          'brgy_name'=> 'TAGUIBO'
      ],
      [
          'id'=> '11874',
          'city_id'=> '7',
          'psgc_brgy'=> '160202084',
          'brgy_name'=> 'TALIGAMAN'
      ],
      [
          'id'=> '11875',
          'city_id'=> '7',
          'psgc_brgy'=> '160202085',
          'brgy_name'=> 'TANDANG SORA POB. (BGY. 12)'
      ],
      [
          'id'=> '11876',
          'city_id'=> '7',
          'psgc_brgy'=> '160202086',
          'brgy_name'=> 'TINIWISAN'
      ],
      [
          'id'=> '11877',
          'city_id'=> '7',
          'psgc_brgy'=> '160202087',
          'brgy_name'=> 'TUNGAO'
      ],
      [
          'id'=> '11878',
          'city_id'=> '7',
          'psgc_brgy'=> '160202089',
          'brgy_name'=> 'URDUJA POB. (BGY. 9)'
      ],
      [
          'id'=> '11879',
          'city_id'=> '7',
          'psgc_brgy'=> '160202090',
          'brgy_name'=> 'VILLA KANANGA'
      ],
      [
          'id'=> '11880',
          'city_id'=> '7',
          'psgc_brgy'=> '160202091',
          'brgy_name'=> 'OBRERO POB. (BGY. 18)'
      ],
      [
          'id'=> '11881',
          'city_id'=> '7',
          'psgc_brgy'=> '160202092',
          'brgy_name'=> 'BUGSUKAN'
      ],
      [
          'id'=> '11882',
          'city_id'=> '7',
          'psgc_brgy'=> '160202093',
          'brgy_name'=> 'DE ORO'
      ],
      [
          'id'=> '11883',
          'city_id'=> '7',
          'psgc_brgy'=> '160202094',
          'brgy_name'=> 'DULAG'
      ],
      [
          'id'=> '11884',
          'city_id'=> '7',
          'psgc_brgy'=> '160202095',
          'brgy_name'=> 'FLORIDA'
      ],
      [
          'id'=> '11885',
          'city_id'=> '7',
          'psgc_brgy'=> '160202096',
          'brgy_name'=> 'NONG-NONG'
      ],
      [
          'id'=> '11886',
          'city_id'=> '7',
          'psgc_brgy'=> '160202097',
          'brgy_name'=> 'PAGATPATAN'
      ],
      [
          'id'=> '11887',
          'city_id'=> '7',
          'psgc_brgy'=> '160202098',
          'brgy_name'=> 'PANGABUGAN'
      ],
      [
          'id'=> '11888',
          'city_id'=> '7',
          'psgc_brgy'=> '160202099',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '11889',
          'city_id'=> '7',
          'psgc_brgy'=> '160202100',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '11890',
          'city_id'=> '7',
          'psgc_brgy'=> '160202101',
          'brgy_name'=> 'SUMILE'
      ],
      [
          'id'=> '11891',
          'city_id'=> '7',
          'psgc_brgy'=> '160202102',
          'brgy_name'=> 'DON FRANCISCO'
      ],
      [
          'id'=> '11892',
          'city_id'=> '7',
          'psgc_brgy'=> '160202103',
          'brgy_name'=> ' PIGDAULAN'
      ],
      [
          'id'=> '11907',
          'city_id'=> '619',
          'psgc_brgy'=> '166711001',
          'brgy_name'=> 'ALAMBIQUE (POB.)'
      ],
      [
          'id'=> '11908',
          'city_id'=> '619',
          'psgc_brgy'=> '166711002',
          'brgy_name'=> 'ANIBONGAN'
      ],
      [
          'id'=> '11909',
          'city_id'=> '619',
          'psgc_brgy'=> '166711003',
          'brgy_name'=> 'CAMAM-ONAN'
      ],
      [
          'id'=> '11910',
          'city_id'=> '619',
          'psgc_brgy'=> '166711004',
          'brgy_name'=> 'CAM-BOAYON'
      ],
      [
          'id'=> '11911',
          'city_id'=> '619',
          'psgc_brgy'=> '166711005',
          'brgy_name'=> 'IPIL (POB.)'
      ],
      [
          'id'=> '11912',
          'city_id'=> '619',
          'psgc_brgy'=> '166711006',
          'brgy_name'=> 'LAHI'
      ],
      [
          'id'=> '11913',
          'city_id'=> '619',
          'psgc_brgy'=> '166711007',
          'brgy_name'=> 'MAHANUB'
      ],
      [
          'id'=> '11914',
          'city_id'=> '619',
          'psgc_brgy'=> '166711008',
          'brgy_name'=> 'PONIENTE'
      ],
      [
          'id'=> '11915',
          'city_id'=> '619',
          'psgc_brgy'=> '166711009',
          'brgy_name'=> 'SAN ANTONIO (BONOT)'
      ],
      [
          'id'=> '11916',
          'city_id'=> '619',
          'psgc_brgy'=> '166711010',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '11917',
          'city_id'=> '619',
          'psgc_brgy'=> '166711011',
          'brgy_name'=> 'SICO-SICO'
      ],
      [
          'id'=> '11918',
          'city_id'=> '619',
          'psgc_brgy'=> '166711012',
          'brgy_name'=> 'VILLAFLOR'
      ],
      [
          'id'=> '11919',
          'city_id'=> '619',
          'psgc_brgy'=> '166711013',
          'brgy_name'=> 'VILLAFRANCA'
      ],
      [
          'id'=> '11928',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307001',
          'brgy_name'=> 'BAYUGAN 3'
      ],
      [
          'id'=> '11929',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307002',
          'brgy_name'=> 'CABANTAO'
      ],
      [
          'id'=> '11930',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307003',
          'brgy_name'=> 'CABAWAN'
      ],
      [
          'id'=> '11931',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307004',
          'brgy_name'=> 'MARFIL'
      ],
      [
          'id'=> '11932',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307005',
          'brgy_name'=> 'NOVELE'
      ],
      [
          'id'=> '11933',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307006',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '11934',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307007',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '11935',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307008',
          'brgy_name'=> 'TAGBAYAGAN'
      ],
      [
          'id'=> '11936',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307009',
          'brgy_name'=> 'WASI-AN'
      ],
      [
          'id'=> '11937',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307010',
          'brgy_name'=> 'LIBUAC'
      ],
      [
          'id'=> '11938',
          'city_id'=> '1226',
          'psgc_brgy'=> '160307011',
          'brgy_name'=> 'MALIGAYA'
      ],
      [
          'id'=> '12512',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720001',
          'brgy_name'=> 'BUHING CALIPAY'
      ],
      [
          'id'=> '12513',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720002',
          'brgy_name'=> 'DEL CARMEN (POB.)'
      ],
      [
          'id'=> '12514',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720003',
          'brgy_name'=> 'DEL PILAR'
      ],
      [
          'id'=> '12515',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720004',
          'brgy_name'=> 'MACAPAGAL'
      ],
      [
          'id'=> '12516',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720006',
          'brgy_name'=> 'PACIFICO'
      ],
      [
          'id'=> '12517',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720007',
          'brgy_name'=> 'PELAEZ'
      ],
      [
          'id'=> '12518',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720008',
          'brgy_name'=> 'ROXAS'
      ],
      [
          'id'=> '12519',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720009',
          'brgy_name'=> 'SAN MIGUEL'
      ],
      [
          'id'=> '12520',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720010',
          'brgy_name'=> 'SANTA PAZ'
      ],
      [
          'id'=> '12521',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720011',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '12522',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720012',
          'brgy_name'=> 'TAMBACAN'
      ],
      [
          'id'=> '12523',
          'city_id'=> '1297',
          'psgc_brgy'=> '166720013',
          'brgy_name'=> 'TIGASAO'
      ],
      [
          'id'=> '12630',
          'city_id'=> '370',
          'psgc_brgy'=> '160201001',
          'brgy_name'=> 'ABILAN'
      ],
      [
          'id'=> '12631',
          'city_id'=> '370',
          'psgc_brgy'=> '160201002',
          'brgy_name'=> 'AGONG-ONG'
      ],
      [
          'id'=> '12632',
          'city_id'=> '370',
          'psgc_brgy'=> '160201003',
          'brgy_name'=> 'ALUBIJID'
      ],
      [
          'id'=> '12633',
          'city_id'=> '370',
          'psgc_brgy'=> '160201004',
          'brgy_name'=> 'GUINABSAN'
      ],
      [
          'id'=> '12634',
          'city_id'=> '370',
          'psgc_brgy'=> '160201007',
          'brgy_name'=> 'MACALANG'
      ],
      [
          'id'=> '12635',
          'city_id'=> '370',
          'psgc_brgy'=> '160201008',
          'brgy_name'=> 'MALAPONG'
      ],
      [
          'id'=> '12636',
          'city_id'=> '370',
          'psgc_brgy'=> '160201009',
          'brgy_name'=> 'MALPOC'
      ],
      [
          'id'=> '12637',
          'city_id'=> '370',
          'psgc_brgy'=> '160201010',
          'brgy_name'=> 'MANAPA'
      ],
      [
          'id'=> '12638',
          'city_id'=> '370',
          'psgc_brgy'=> '160201011',
          'brgy_name'=> 'MATABAO'
      ],
      [
          'id'=> '12639',
          'city_id'=> '370',
          'psgc_brgy'=> '160201013',
          'brgy_name'=> 'POBLACION 1'
      ],
      [
          'id'=> '12640',
          'city_id'=> '370',
          'psgc_brgy'=> '160201014',
          'brgy_name'=> 'POBLACION 2'
      ],
      [
          'id'=> '12641',
          'city_id'=> '370',
          'psgc_brgy'=> '160201015',
          'brgy_name'=> 'POBLACION 3'
      ],
      [
          'id'=> '12642',
          'city_id'=> '370',
          'psgc_brgy'=> '160201016',
          'brgy_name'=> 'POBLACION 4'
      ],
      [
          'id'=> '12643',
          'city_id'=> '370',
          'psgc_brgy'=> '160201017',
          'brgy_name'=> 'POBLACION 5'
      ],
      [
          'id'=> '12644',
          'city_id'=> '370',
          'psgc_brgy'=> '160201018',
          'brgy_name'=> 'POBLACION 6'
      ],
      [
          'id'=> '12645',
          'city_id'=> '370',
          'psgc_brgy'=> '160201019',
          'brgy_name'=> 'POBLACION 7'
      ],
      [
          'id'=> '12646',
          'city_id'=> '370',
          'psgc_brgy'=> '160201020',
          'brgy_name'=> 'POBLACION 8'
      ],
      [
          'id'=> '12647',
          'city_id'=> '370',
          'psgc_brgy'=> '160201021',
          'brgy_name'=> 'POBLACION 9'
      ],
      [
          'id'=> '12648',
          'city_id'=> '370',
          'psgc_brgy'=> '160201022',
          'brgy_name'=> 'POBLACION 10'
      ],
      [
          'id'=> '12649',
          'city_id'=> '370',
          'psgc_brgy'=> '160201023',
          'brgy_name'=> 'RIZAL'
      ],
      [
          'id'=> '12650',
          'city_id'=> '370',
          'psgc_brgy'=> '160201024',
          'brgy_name'=> 'SACOL'
      ],
      [
          'id'=> '12651',
          'city_id'=> '370',
          'psgc_brgy'=> '160201025',
          'brgy_name'=> 'SANGAY'
      ],
      [
          'id'=> '12652',
          'city_id'=> '370',
          'psgc_brgy'=> '160201026',
          'brgy_name'=> 'TALO-AO'
      ],
      [
          'id'=> '12653',
          'city_id'=> '370',
          'psgc_brgy'=> '160201027',
          'brgy_name'=> 'LOWER OLAVE'
      ],
      [
          'id'=> '12654',
          'city_id'=> '370',
          'psgc_brgy'=> '160201028',
          'brgy_name'=> ' SIMBALAN'
      ],
      [
          'id'=> '13021',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306001',
          'brgy_name'=> 'AURORA'
      ],
      [
          'id'=> '13022',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306002',
          'brgy_name'=> 'AWA'
      ],
      [
          'id'=> '13023',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306003',
          'brgy_name'=> 'AZPETIA'
      ],
      [
          'id'=> '13024',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306004',
          'brgy_name'=> 'POBLACION (BAHBAH)'
      ],
      [
          'id'=> '13025',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306006',
          'brgy_name'=> 'LA CARIDAD'
      ],
      [
          'id'=> '13026',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306007',
          'brgy_name'=> 'LA SUERTE'
      ],
      [
          'id'=> '13027',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306008',
          'brgy_name'=> 'LA UNION'
      ],
      [
          'id'=> '13028',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306009',
          'brgy_name'=> 'LAS NAVAS'
      ],
      [
          'id'=> '13029',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306010',
          'brgy_name'=> 'LIBERTAD'
      ],
      [
          'id'=> '13030',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306011',
          'brgy_name'=> 'LOS ARCOS'
      ],
      [
          'id'=> '13031',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306012',
          'brgy_name'=> 'LUCENA'
      ],
      [
          'id'=> '13032',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306013',
          'brgy_name'=> 'MABUHAY'
      ],
      [
          'id'=> '13033',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306014',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '13034',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306015',
          'brgy_name'=> 'MAPAGA'
      ],
      [
          'id'=> '13035',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306016',
          'brgy_name'=> 'NEW MAUG'
      ],
      [
          'id'=> '13036',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306017',
          'brgy_name'=> 'NAPO'
      ],
      [
          'id'=> '13037',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306018',
          'brgy_name'=> 'PATIN-AY'
      ],
      [
          'id'=> '13038',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306020',
          'brgy_name'=> 'SALIMBOGAON'
      ],
      [
          'id'=> '13039',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306021',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '13040',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306022',
          'brgy_name'=> 'SAN JOAQUIN'
      ],
      [
          'id'=> '13041',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306023',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '13042',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306024',
          'brgy_name'=> 'SAN LORENZO'
      ],
      [
          'id'=> '13043',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306025',
          'brgy_name'=> 'SAN MARTIN'
      ],
      [
          'id'=> '13044',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306026',
          'brgy_name'=> 'SAN PEDRO'
      ],
      [
          'id'=> '13045',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306027',
          'brgy_name'=> 'SAN RAFAEL'
      ],
      [
          'id'=> '13046',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306029',
          'brgy_name'=> 'SAN SALVADOR'
      ],
      [
          'id'=> '13047',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306030',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '13048',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306031',
          'brgy_name'=> 'SANTA IRENE'
      ],
      [
          'id'=> '13049',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306032',
          'brgy_name'=> 'SANTA MARIA'
      ],
      [
          'id'=> '13050',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306033',
          'brgy_name'=> 'LA PERIAN'
      ],
      [
          'id'=> '13051',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306034',
          'brgy_name'=> 'LA PURISIMA'
      ],
      [
          'id'=> '13052',
          'city_id'=> '1188',
          'psgc_brgy'=> '160306035',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '13053',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507001',
          'brgy_name'=> 'IMELDA'
      ],
      [
          'id'=> '13054',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507002',
          'brgy_name'=> 'MABINI'
      ],
      [
          'id'=> '13055',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507003',
          'brgy_name'=> 'MALINAO'
      ],
      [
          'id'=> '13056',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507004',
          'brgy_name'=> 'NAVARRO'
      ],
      [
          'id'=> '13057',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507005',
          'brgy_name'=> 'DIAZ (ROMUALDEZ)'
      ],
      [
          'id'=> '13058',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507006',
          'brgy_name'=> 'ROXAS'
      ],
      [
          'id'=> '13059',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507007',
          'brgy_name'=> 'SAN ROQUE (POB.)'
      ],
      [
          'id'=> '13060',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507008',
          'brgy_name'=> 'SAN VICENTE (POB.)'
      ],
      [
          'id'=> '13061',
          'city_id'=> '1574',
          'psgc_brgy'=> '168507009',
          'brgy_name'=> 'SANTA CRUZ (POB.)'
      ],
      [
          'id'=> '13483',
          'city_id'=> '551',
          'psgc_brgy'=> '168503002',
          'brgy_name'=> 'CAB-ILAN'
      ],
      [
          'id'=> '13484',
          'city_id'=> '551',
          'psgc_brgy'=> '168503003',
          'brgy_name'=> 'CABAYAWAN'
      ],
      [
          'id'=> '13485',
          'city_id'=> '551',
          'psgc_brgy'=> '168503004',
          'brgy_name'=> 'ESCOLTA (POB.)'
      ],
      [
          'id'=> '13486',
          'city_id'=> '551',
          'psgc_brgy'=> '168503005',
          'brgy_name'=> 'GOMEZ'
      ],
      [
          'id'=> '13487',
          'city_id'=> '551',
          'psgc_brgy'=> '168503007',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '13488',
          'city_id'=> '551',
          'psgc_brgy'=> '168503009',
          'brgy_name'=> 'MAUSWAGON (POB.)'
      ],
      [
          'id'=> '13489',
          'city_id'=> '551',
          'psgc_brgy'=> '168503012',
          'brgy_name'=> 'WHITE BEACH (POB.)'
      ],
      [
          'id'=> '13490',
          'city_id'=> '551',
          'psgc_brgy'=> '168503014',
          'brgy_name'=> 'BAGUMBAYAN'
      ],
      [
          'id'=> '13491',
          'city_id'=> '551',
          'psgc_brgy'=> '168503016',
          'brgy_name'=> 'NEW MABUHAY'
      ],
      [
          'id'=> '13492',
          'city_id'=> '551',
          'psgc_brgy'=> '168503021',
          'brgy_name'=> 'WADAS'
      ],
      [
          'id'=> '13493',
          'city_id'=> '551',
          'psgc_brgy'=> '168503022',
          'brgy_name'=> 'CAYETANO'
      ],
      [
          'id'=> '13494',
          'city_id'=> '551',
          'psgc_brgy'=> '168503023',
          'brgy_name'=> 'JUSTINIANA EDERA'
      ],
      [
          'id'=> '13872',
          'city_id'=> '234',
          'psgc_brgy'=> '166702001',
          'brgy_name'=> 'CABUGAO'
      ],
      [
          'id'=> '13873',
          'city_id'=> '234',
          'psgc_brgy'=> '166702002',
          'brgy_name'=> 'CAMBUAYON'
      ],
      [
          'id'=> '13874',
          'city_id'=> '234',
          'psgc_brgy'=> '166702003',
          'brgy_name'=> 'CAMPO'
      ],
      [
          'id'=> '13875',
          'city_id'=> '234',
          'psgc_brgy'=> '166702004',
          'brgy_name'=> 'DUGSANGON'
      ],
      [
          'id'=> '13876',
          'city_id'=> '234',
          'psgc_brgy'=> '166702005',
          'brgy_name'=> 'PAUTAO'
      ],
      [
          'id'=> '13877',
          'city_id'=> '234',
          'psgc_brgy'=> '166702006',
          'brgy_name'=> 'PAYAPAG'
      ],
      [
          'id'=> '13878',
          'city_id'=> '234',
          'psgc_brgy'=> '166702007',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '13879',
          'city_id'=> '234',
          'psgc_brgy'=> '166702008',
          'brgy_name'=> 'PUNGTOD'
      ],
      [
          'id'=> '13880',
          'city_id'=> '234',
          'psgc_brgy'=> '166702009',
          'brgy_name'=> 'SANTO ROSARIO'
      ],
      [
          'id'=> '13935',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719001',
          'brgy_name'=> 'AMONTAY'
      ],
      [
          'id'=> '13936',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719002',
          'brgy_name'=> 'BALITE'
      ],
      [
          'id'=> '13937',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719003',
          'brgy_name'=> 'BANBANON'
      ],
      [
          'id'=> '13938',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719004',
          'brgy_name'=> 'DIAZ'
      ],
      [
          'id'=> '13939',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719005',
          'brgy_name'=> 'HONRADO'
      ],
      [
          'id'=> '13940',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719006',
          'brgy_name'=> 'JUBGAN'
      ],
      [
          'id'=> '13941',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719007',
          'brgy_name'=> 'LINONGGANAN'
      ],
      [
          'id'=> '13942',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719008',
          'brgy_name'=> 'MACOPA'
      ],
      [
          'id'=> '13943',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719009',
          'brgy_name'=> 'MAGTANGALE'
      ],
      [
          'id'=> '13944',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719010',
          'brgy_name'=> 'OSLAO'
      ],
      [
          'id'=> '13945',
          'city_id'=> '1283',
          'psgc_brgy'=> '166719011',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '14644',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716001',
          'brgy_name'=> 'CARIDAD'
      ],
      [
          'id'=> '14645',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716002',
          'brgy_name'=> 'KATIPUNAN'
      ],
      [
          'id'=> '14646',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716003',
          'brgy_name'=> 'MAASIN'
      ],
      [
          'id'=> '14647',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716004',
          'brgy_name'=> 'MABINI'
      ],
      [
          'id'=> '14648',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716005',
          'brgy_name'=> 'MABUHAY'
      ],
      [
          'id'=> '14649',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716006',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '14650',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716007',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '14651',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716008',
          'brgy_name'=> 'ASINAN (POB.)'
      ],
      [
          'id'=> '14652',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716009',
          'brgy_name'=> 'CENTRO (POB.)'
      ],
      [
          'id'=> '14653',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716010',
          'brgy_name'=> 'PILARING (POB.)'
      ],
      [
          'id'=> '14654',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716011',
          'brgy_name'=> 'PUNTA (POB.)'
      ],
      [
          'id'=> '14655',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716012',
          'brgy_name'=> 'CONSOLACION'
      ],
      [
          'id'=> '14656',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716013',
          'brgy_name'=> 'DATU'
      ],
      [
          'id'=> '14657',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716014',
          'brgy_name'=> 'DAYAOHAY'
      ],
      [
          'id'=> '14658',
          'city_id'=> '1144',
          'psgc_brgy'=> '166716015',
          'brgy_name'=> 'JABOY'
      ],
      [
          'id'=> '15149',
          'city_id'=> '78',
          'psgc_brgy'=> '166819001',
          'brgy_name'=> 'AWASIAN'
      ],
      [
          'id'=> '15150',
          'city_id'=> '78',
          'psgc_brgy'=> '166819002',
          'brgy_name'=> 'BAGONG LUNGSOD (POB.)'
      ],
      [
          'id'=> '15151',
          'city_id'=> '78',
          'psgc_brgy'=> '166819003',
          'brgy_name'=> 'BIOTO'
      ],
      [
          'id'=> '15152',
          'city_id'=> '78',
          'psgc_brgy'=> '166819004',
          'brgy_name'=> 'BUENAVISTA'
      ],
      [
          'id'=> '15153',
          'city_id'=> '78',
          'psgc_brgy'=> '166819005',
          'brgy_name'=> 'BONGTOD POB. (EAST WEST)'
      ],
      [
          'id'=> '15154',
          'city_id'=> '78',
          'psgc_brgy'=> '166819006',
          'brgy_name'=> 'DAGOCDOC (POB.)'
      ],
      [
          'id'=> '15155',
          'city_id'=> '78',
          'psgc_brgy'=> '166819008',
          'brgy_name'=> 'MABUA'
      ],
      [
          'id'=> '15156',
          'city_id'=> '78',
          'psgc_brgy'=> '166819009',
          'brgy_name'=> 'MABUHAY'
      ],
      [
          'id'=> '15157',
          'city_id'=> '78',
          'psgc_brgy'=> '166819010',
          'brgy_name'=> 'MAITUM'
      ],
      [
          'id'=> '15158',
          'city_id'=> '78',
          'psgc_brgy'=> '166819011',
          'brgy_name'=> 'MATICDUM'
      ],
      [
          'id'=> '15159',
          'city_id'=> '78',
          'psgc_brgy'=> '166819012',
          'brgy_name'=> 'PANDANON'
      ],
      [
          'id'=> '15160',
          'city_id'=> '78',
          'psgc_brgy'=> '166819013',
          'brgy_name'=> 'PANGI'
      ],
      [
          'id'=> '15161',
          'city_id'=> '78',
          'psgc_brgy'=> '166819014',
          'brgy_name'=> 'QUEZON'
      ],
      [
          'id'=> '15162',
          'city_id'=> '78',
          'psgc_brgy'=> '166819015',
          'brgy_name'=> 'ROSARIO'
      ],
      [
          'id'=> '15163',
          'city_id'=> '78',
          'psgc_brgy'=> '166819016',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '15164',
          'city_id'=> '78',
          'psgc_brgy'=> '166819017',
          'brgy_name'=> 'SAN AGUSTIN NORTE'
      ],
      [
          'id'=> '15165',
          'city_id'=> '78',
          'psgc_brgy'=> '166819018',
          'brgy_name'=> 'SAN AGUSTIN SUR'
      ],
      [
          'id'=> '15166',
          'city_id'=> '78',
          'psgc_brgy'=> '166819019',
          'brgy_name'=> 'SAN ANTONIO'
      ],
      [
          'id'=> '15167',
          'city_id'=> '78',
          'psgc_brgy'=> '166819020',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '15168',
          'city_id'=> '78',
          'psgc_brgy'=> '166819021',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '15169',
          'city_id'=> '78',
          'psgc_brgy'=> '166819022',
          'brgy_name'=> 'TELAJE'
      ],
      [
          'id'=> '15301',
          'city_id'=> '1266',
          'psgc_brgy'=> '166718001',
          'brgy_name'=> 'BONGDO'
      ],
      [
          'id'=> '15302',
          'city_id'=> '1266',
          'psgc_brgy'=> '166718002',
          'brgy_name'=> 'MARIBOJOC'
      ],
      [
          'id'=> '15303',
          'city_id'=> '1266',
          'psgc_brgy'=> '166718003',
          'brgy_name'=> 'NUEVO CAMPO'
      ],
      [
          'id'=> '15304',
          'city_id'=> '1266',
          'psgc_brgy'=> '166718005',
          'brgy_name'=> 'SAN JUAN'
      ],
      [
          'id'=> '15305',
          'city_id'=> '1266',
          'psgc_brgy'=> '166718006',
          'brgy_name'=> 'SANTA CRUZ (POB.)'
      ],
      [
          'id'=> '15306',
          'city_id'=> '1266',
          'psgc_brgy'=> '166718007',
          'brgy_name'=> 'TALISAY (POB.)'
      ],
      [
          'id'=> '18091',
          'city_id'=> '466',
          'psgc_brgy'=> '166806001',
          'brgy_name'=> 'ANTAO'
      ],
      [
          'id'=> '18092',
          'city_id'=> '466',
          'psgc_brgy'=> '166806002',
          'brgy_name'=> 'CANCAVAN'
      ],
      [
          'id'=> '18093',
          'city_id'=> '466',
          'psgc_brgy'=> '166806003',
          'brgy_name'=> 'CARMEN (POB.)'
      ],
      [
          'id'=> '18094',
          'city_id'=> '466',
          'psgc_brgy'=> '166806004',
          'brgy_name'=> 'ESPERANZA'
      ],
      [
          'id'=> '18095',
          'city_id'=> '466',
          'psgc_brgy'=> '166806005',
          'brgy_name'=> 'PUYAT'
      ],
      [
          'id'=> '18096',
          'city_id'=> '466',
          'psgc_brgy'=> '166806006',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '18097',
          'city_id'=> '466',
          'psgc_brgy'=> '166806007',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '18098',
          'city_id'=> '466',
          'psgc_brgy'=> '166806008',
          'brgy_name'=> 'HINAPOYAN'
      ],
      [
          'id'=> '18303',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313001',
          'brgy_name'=> 'BINONGAN'
      ],
      [
          'id'=> '18304',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313002',
          'brgy_name'=> 'DEL MONTE'
      ],
      [
          'id'=> '18305',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313003',
          'brgy_name'=> 'DON MATEO'
      ],
      [
          'id'=> '18306',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313004',
          'brgy_name'=> 'LA FORTUNA'
      ],
      [
          'id'=> '18307',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313005',
          'brgy_name'=> 'LIMOT'
      ],
      [
          'id'=> '18308',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313006',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '18309',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313007',
          'brgy_name'=> 'MASAYAN'
      ],
      [
          'id'=> '18310',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313008',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '18311',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313009',
          'brgy_name'=> 'SAMPAGUITA'
      ],
      [
          'id'=> '18312',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313010',
          'brgy_name'=> 'SAN GABRIEL'
      ],
      [
          'id'=> '18313',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313011',
          'brgy_name'=> 'SANTA EMELIA'
      ],
      [
          'id'=> '18314',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313012',
          'brgy_name'=> 'SINOBONG'
      ],
      [
          'id'=> '18315',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313013',
          'brgy_name'=> 'ANITAP'
      ],
      [
          'id'=> '18316',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313014',
          'brgy_name'=> 'BACAY II'
      ],
      [
          'id'=> '18317',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313015',
          'brgy_name'=> 'CAIGANGAN'
      ],
      [
          'id'=> '18318',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313016',
          'brgy_name'=> 'CANDIIS'
      ],
      [
          'id'=> '18319',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313017',
          'brgy_name'=> 'KATIPUNAN'
      ],
      [
          'id'=> '18320',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313018',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '18321',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313019',
          'brgy_name'=> 'SAWAGAN'
      ],
      [
          'id'=> '18322',
          'city_id'=> '1610',
          'psgc_brgy'=> '160313020',
          'brgy_name'=> 'SISIMON'
      ],
      [
          'id'=> '18781',
          'city_id'=> '612',
          'psgc_brgy'=> '166710001',
          'brgy_name'=> 'ANAJAWAN'
      ],
      [
          'id'=> '18782',
          'city_id'=> '612',
          'psgc_brgy'=> '166710002',
          'brgy_name'=> 'CABITOONAN'
      ],
      [
          'id'=> '18783',
          'city_id'=> '612',
          'psgc_brgy'=> '166710003',
          'brgy_name'=> 'CATANGNAN'
      ],
      [
          'id'=> '18784',
          'city_id'=> '612',
          'psgc_brgy'=> '166710004',
          'brgy_name'=> 'CONSUELO'
      ],
      [
          'id'=> '18785',
          'city_id'=> '612',
          'psgc_brgy'=> '166710005',
          'brgy_name'=> 'CORAZON'
      ],
      [
          'id'=> '18786',
          'city_id'=> '612',
          'psgc_brgy'=> '166710006',
          'brgy_name'=> 'DAKU'
      ],
      [
          'id'=> '18787',
          'city_id'=> '612',
          'psgc_brgy'=> '166710007',
          'brgy_name'=> 'POBLACION I (PUROK I)'
      ],
      [
          'id'=> '18788',
          'city_id'=> '612',
          'psgc_brgy'=> '166710008',
          'brgy_name'=> 'POBLACION II (PUROK II)'
      ],
      [
          'id'=> '18789',
          'city_id'=> '612',
          'psgc_brgy'=> '166710009',
          'brgy_name'=> 'POBLACION III (PUROK III)'
      ],
      [
          'id'=> '18790',
          'city_id'=> '612',
          'psgc_brgy'=> '166710010',
          'brgy_name'=> 'POBLACION IV (PUROK IV)'
      ],
      [
          'id'=> '18791',
          'city_id'=> '612',
          'psgc_brgy'=> '166710011',
          'brgy_name'=> 'POBLACION V (PUROK V)'
      ],
      [
          'id'=> '18792',
          'city_id'=> '612',
          'psgc_brgy'=> '166710012',
          'brgy_name'=> 'LA JANUZA'
      ],
      [
          'id'=> '18793',
          'city_id'=> '612',
          'psgc_brgy'=> '166710013',
          'brgy_name'=> 'LIBERTAD'
      ],
      [
          'id'=> '18794',
          'city_id'=> '612',
          'psgc_brgy'=> '166710014',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '18795',
          'city_id'=> '612',
          'psgc_brgy'=> '166710015',
          'brgy_name'=> 'MALINAO'
      ],
      [
          'id'=> '18796',
          'city_id'=> '612',
          'psgc_brgy'=> '166710017',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '18797',
          'city_id'=> '612',
          'psgc_brgy'=> '166710018',
          'brgy_name'=> 'SANTA FE'
      ],
      [
          'id'=> '18798',
          'city_id'=> '612',
          'psgc_brgy'=> '166710019',
          'brgy_name'=> 'SUYANGAN'
      ],
      [
          'id'=> '18799',
          'city_id'=> '612',
          'psgc_brgy'=> '166710020',
          'brgy_name'=> 'TAWIN-TAWIN'
      ],
      [
          'id'=> '19053',
          'city_id'=> '25',
          'psgc_brgy'=> '160203002',
          'brgy_name'=> 'ANTONIO LUNA'
      ],
      [
          'id'=> '19054',
          'city_id'=> '25',
          'psgc_brgy'=> '160203005',
          'brgy_name'=> 'BAY-ANG'
      ],
      [
          'id'=> '19055',
          'city_id'=> '25',
          'psgc_brgy'=> '160203006',
          'brgy_name'=> 'BAYABAS'
      ],
      [
          'id'=> '19056',
          'city_id'=> '25',
          'psgc_brgy'=> '160203007',
          'brgy_name'=> 'CAASINAN'
      ],
      [
          'id'=> '19057',
          'city_id'=> '25',
          'psgc_brgy'=> '160203009',
          'brgy_name'=> 'CABINET'
      ],
      [
          'id'=> '19058',
          'city_id'=> '25',
          'psgc_brgy'=> '160203010',
          'brgy_name'=> 'CALAMBA'
      ],
      [
          'id'=> '19059',
          'city_id'=> '25',
          'psgc_brgy'=> '160203011',
          'brgy_name'=> 'CALIBUNAN'
      ],
      [
          'id'=> '19060',
          'city_id'=> '25',
          'psgc_brgy'=> '160203012',
          'brgy_name'=> 'COMAGASCAS'
      ],
      [
          'id'=> '19061',
          'city_id'=> '25',
          'psgc_brgy'=> '160203013',
          'brgy_name'=> 'CONCEPCION'
      ],
      [
          'id'=> '19062',
          'city_id'=> '25',
          'psgc_brgy'=> '160203014',
          'brgy_name'=> 'DEL PILAR'
      ],
      [
          'id'=> '19063',
          'city_id'=> '25',
          'psgc_brgy'=> '160203016',
          'brgy_name'=> 'KATUGASAN'
      ],
      [
          'id'=> '19064',
          'city_id'=> '25',
          'psgc_brgy'=> '160203017',
          'brgy_name'=> 'KAUSWAGAN'
      ],
      [
          'id'=> '19065',
          'city_id'=> '25',
          'psgc_brgy'=> '160203018',
          'brgy_name'=> 'LA UNION'
      ],
      [
          'id'=> '19066',
          'city_id'=> '25',
          'psgc_brgy'=> '160203019',
          'brgy_name'=> 'MABINI'
      ],
      [
          'id'=> '19067',
          'city_id'=> '25',
          'psgc_brgy'=> '160203021',
          'brgy_name'=> 'POBLACION 1'
      ],
      [
          'id'=> '19068',
          'city_id'=> '25',
          'psgc_brgy'=> '160203022',
          'brgy_name'=> 'POBLACION 10'
      ],
      [
          'id'=> '19069',
          'city_id'=> '25',
          'psgc_brgy'=> '160203023',
          'brgy_name'=> 'POBLACION 11'
      ],
      [
          'id'=> '19070',
          'city_id'=> '25',
          'psgc_brgy'=> '160203024',
          'brgy_name'=> 'POBLACION 12'
      ],
      [
          'id'=> '19071',
          'city_id'=> '25',
          'psgc_brgy'=> '160203025',
          'brgy_name'=> 'POBLACION 2'
      ],
      [
          'id'=> '19072',
          'city_id'=> '25',
          'psgc_brgy'=> '160203026',
          'brgy_name'=> 'POBLACION 3'
      ],
      [
          'id'=> '19073',
          'city_id'=> '25',
          'psgc_brgy'=> '160203027',
          'brgy_name'=> 'POBLACION 4'
      ],
      [
          'id'=> '19074',
          'city_id'=> '25',
          'psgc_brgy'=> '160203028',
          'brgy_name'=> 'POBLACION 5'
      ],
      [
          'id'=> '19075',
          'city_id'=> '25',
          'psgc_brgy'=> '160203029',
          'brgy_name'=> 'POBLACION 6'
      ],
      [
          'id'=> '19076',
          'city_id'=> '25',
          'psgc_brgy'=> '160203030',
          'brgy_name'=> 'POBLACION 7'
      ],
      [
          'id'=> '19077',
          'city_id'=> '25',
          'psgc_brgy'=> '160203031',
          'brgy_name'=> 'POBLACION 8'
      ],
      [
          'id'=> '19078',
          'city_id'=> '25',
          'psgc_brgy'=> '160203032',
          'brgy_name'=> 'POBLACION 9'
      ],
      [
          'id'=> '19079',
          'city_id'=> '25',
          'psgc_brgy'=> '160203033',
          'brgy_name'=> 'PUTING BATO'
      ],
      [
          'id'=> '19080',
          'city_id'=> '25',
          'psgc_brgy'=> '160203037',
          'brgy_name'=> 'SANGHAN'
      ],
      [
          'id'=> '19081',
          'city_id'=> '25',
          'psgc_brgy'=> '160203038',
          'brgy_name'=> 'SORIANO'
      ],
      [
          'id'=> '19082',
          'city_id'=> '25',
          'psgc_brgy'=> '160203040',
          'brgy_name'=> 'TOLOSA'
      ],
      [
          'id'=> '19083',
          'city_id'=> '25',
          'psgc_brgy'=> '160203041',
          'brgy_name'=> 'MAHABA'
      ],
      [
          'id'=> '19394',
          'city_id'=> '167',
          'psgc_brgy'=> '166701001',
          'brgy_name'=> 'POBLACION (ALEGRIA)'
      ],
      [
          'id'=> '19395',
          'city_id'=> '167',
          'psgc_brgy'=> '166701002',
          'brgy_name'=> 'ALIPAO'
      ],
      [
          'id'=> '19396',
          'city_id'=> '167',
          'psgc_brgy'=> '166701003',
          'brgy_name'=> 'BUDLINGIN'
      ],
      [
          'id'=> '19397',
          'city_id'=> '167',
          'psgc_brgy'=> '166701004',
          'brgy_name'=> 'CAMP EDUARD (GEOTINA)'
      ],
      [
          'id'=> '19398',
          'city_id'=> '167',
          'psgc_brgy'=> '166701005',
          'brgy_name'=> 'OMBONG'
      ],
      [
          'id'=> '19399',
          'city_id'=> '167',
          'psgc_brgy'=> '166701006',
          'brgy_name'=> 'PONGTUD'
      ],
      [
          'id'=> '19400',
          'city_id'=> '167',
          'psgc_brgy'=> '166701007',
          'brgy_name'=> 'SAN PEDRO'
      ],
      [
          'id'=> '19401',
          'city_id'=> '167',
          'psgc_brgy'=> '166701008',
          'brgy_name'=> 'FERLDA'
      ],
      [
          'id'=> '19402',
          'city_id'=> '167',
          'psgc_brgy'=> '166701009',
          'brgy_name'=> 'JULIO OUANO (POB.)'
      ],
      [
          'id'=> '19403',
          'city_id'=> '167',
          'psgc_brgy'=> '166701010',
          'brgy_name'=> 'SAN JUAN'
      ],
      [
          'id'=> '19404',
          'city_id'=> '167',
          'psgc_brgy'=> '166701011',
          'brgy_name'=> 'ANAHAW'
      ],
      [
          'id'=> '19405',
          'city_id'=> '167',
          'psgc_brgy'=> '166701012',
          'brgy_name'=> ' GAMUTON'
      ],
      [
          'id'=> '19428',
          'city_id'=> '542',
          'psgc_brgy'=> '166708001',
          'brgy_name'=> 'BAGAKAY (ALBURO)'
      ],
      [
          'id'=> '19429',
          'city_id'=> '542',
          'psgc_brgy'=> '166708002',
          'brgy_name'=> 'ANTIPOLO'
      ],
      [
          'id'=> '19430',
          'city_id'=> '542',
          'psgc_brgy'=> '166708004',
          'brgy_name'=> 'BITOON'
      ],
      [
          'id'=> '19431',
          'city_id'=> '542',
          'psgc_brgy'=> '166708006',
          'brgy_name'=> 'CABUGAO'
      ],
      [
          'id'=> '19432',
          'city_id'=> '542',
          'psgc_brgy'=> '166708007',
          'brgy_name'=> 'CANCOHOY'
      ],
      [
          'id'=> '19433',
          'city_id'=> '542',
          'psgc_brgy'=> '166708008',
          'brgy_name'=> 'CAUB'
      ],
      [
          'id'=> '19434',
          'city_id'=> '542',
          'psgc_brgy'=> '166708009',
          'brgy_name'=> 'DEL CARMEN (POB.)'
      ],
      [
          'id'=> '19435',
          'city_id'=> '542',
          'psgc_brgy'=> '166708010',
          'brgy_name'=> 'DOMOYOG'
      ],
      [
          'id'=> '19436',
          'city_id'=> '542',
          'psgc_brgy'=> '166708011',
          'brgy_name'=> 'ESPERANZA'
      ],
      [
          'id'=> '19437',
          'city_id'=> '542',
          'psgc_brgy'=> '166708012',
          'brgy_name'=> 'JAMOYAON'
      ],
      [
          'id'=> '19438',
          'city_id'=> '542',
          'psgc_brgy'=> '166708013',
          'brgy_name'=> 'KATIPUNAN'
      ],
      [
          'id'=> '19439',
          'city_id'=> '542',
          'psgc_brgy'=> '166708014',
          'brgy_name'=> 'LOBOGON'
      ],
      [
          'id'=> '19440',
          'city_id'=> '542',
          'psgc_brgy'=> '166708016',
          'brgy_name'=> 'MABUHAY'
      ],
      [
          'id'=> '19441',
          'city_id'=> '542',
          'psgc_brgy'=> '166708017',
          'brgy_name'=> 'MAHAYAHAY'
      ],
      [
          'id'=> '19442',
          'city_id'=> '542',
          'psgc_brgy'=> '166708019',
          'brgy_name'=> 'QUEZON'
      ],
      [
          'id'=> '19443',
          'city_id'=> '542',
          'psgc_brgy'=> '166708021',
          'brgy_name'=> 'SAN FERNANDO'
      ],
      [
          'id'=> '19444',
          'city_id'=> '542',
          'psgc_brgy'=> '166708022',
          'brgy_name'=> 'SAN JOSE (POB.)'
      ],
      [
          'id'=> '19445',
          'city_id'=> '542',
          'psgc_brgy'=> '166708025',
          'brgy_name'=> 'SAYAK'
      ],
      [
          'id'=> '19446',
          'city_id'=> '542',
          'psgc_brgy'=> '166708027',
          'brgy_name'=> 'TUBORAN'
      ],
      [
          'id'=> '19447',
          'city_id'=> '542',
          'psgc_brgy'=> '166708028',
          'brgy_name'=> 'HALIAN'
      ],
      [
          'id'=> '21001',
          'city_id'=> '920',
          'psgc_brgy'=> '166715001',
          'brgy_name'=> 'DORO (BINOCARAN)'
      ],
      [
          'id'=> '21002',
          'city_id'=> '920',
          'psgc_brgy'=> '166715002',
          'brgy_name'=> 'BUNYASAN'
      ],
      [
          'id'=> '21003',
          'city_id'=> '920',
          'psgc_brgy'=> '166715003',
          'brgy_name'=> 'CANTAPOY'
      ],
      [
          'id'=> '21004',
          'city_id'=> '920',
          'psgc_brgy'=> '166715004',
          'brgy_name'=> 'CAGTINAE'
      ],
      [
          'id'=> '21005',
          'city_id'=> '920',
          'psgc_brgy'=> '166715005',
          'brgy_name'=> 'CAYAWAN'
      ],
      [
          'id'=> '21006',
          'city_id'=> '920',
          'psgc_brgy'=> '166715007',
          'brgy_name'=> 'HANAGDONG'
      ],
      [
          'id'=> '21007',
          'city_id'=> '920',
          'psgc_brgy'=> '166715008',
          'brgy_name'=> 'KARIHATAG'
      ],
      [
          'id'=> '21008',
          'city_id'=> '920',
          'psgc_brgy'=> '166715009',
          'brgy_name'=> 'MASGAD'
      ],
      [
          'id'=> '21009',
          'city_id'=> '920',
          'psgc_brgy'=> '166715010',
          'brgy_name'=> 'PILI'
      ],
      [
          'id'=> '21010',
          'city_id'=> '920',
          'psgc_brgy'=> '166715012',
          'brgy_name'=> 'SAN ISIDRO (POB.)'
      ],
      [
          'id'=> '21011',
          'city_id'=> '920',
          'psgc_brgy'=> '166715013',
          'brgy_name'=> 'TINAGO'
      ],
      [
          'id'=> '21012',
          'city_id'=> '920',
          'psgc_brgy'=> '166715014',
          'brgy_name'=> 'CANSAYONG'
      ],
      [
          'id'=> '21013',
          'city_id'=> '920',
          'psgc_brgy'=> '166715015',
          'brgy_name'=> 'CAN-AGA'
      ],
      [
          'id'=> '21014',
          'city_id'=> '920',
          'psgc_brgy'=> '166715016',
          'brgy_name'=> 'VILLARIZA'
      ],
      [
          'id'=> '21097',
          'city_id'=> '754',
          'psgc_brgy'=> '160304001',
          'brgy_name'=> 'BATAAN'
      ],
      [
          'id'=> '21098',
          'city_id'=> '754',
          'psgc_brgy'=> '160304002',
          'brgy_name'=> 'COMOTA'
      ],
      [
          'id'=> '21099',
          'city_id'=> '754',
          'psgc_brgy'=> '160304003',
          'brgy_name'=> 'HALAPITAN'
      ],
      [
          'id'=> '21100',
          'city_id'=> '754',
          'psgc_brgy'=> '160304004',
          'brgy_name'=> 'LANGASIAN'
      ],
      [
          'id'=> '21101',
          'city_id'=> '754',
          'psgc_brgy'=> '160304005',
          'brgy_name'=> 'OSMEÑA, SR.'
      ],
      [
          'id'=> '21102',
          'city_id'=> '754',
          'psgc_brgy'=> '160304006',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '21103',
          'city_id'=> '754',
          'psgc_brgy'=> '160304007',
          'brgy_name'=> 'SAGUNTO'
      ],
      [
          'id'=> '21104',
          'city_id'=> '754',
          'psgc_brgy'=> '160304008',
          'brgy_name'=> 'VILLA PAZ'
      ],
      [
          'id'=> '21105',
          'city_id'=> '754',
          'psgc_brgy'=> '160304009',
          'brgy_name'=> 'ANGELES'
      ],
      [
          'id'=> '21106',
          'city_id'=> '754',
          'psgc_brgy'=> '160304010',
          'brgy_name'=> 'KASAPA II'
      ],
      [
          'id'=> '21107',
          'city_id'=> '754',
          'psgc_brgy'=> '160304011',
          'brgy_name'=> 'LYDIA'
      ],
      [
          'id'=> '21108',
          'city_id'=> '754',
          'psgc_brgy'=> '160304012',
          'brgy_name'=> 'PANAGANGAN'
      ],
      [
          'id'=> '21109',
          'city_id'=> '754',
          'psgc_brgy'=> '160304013',
          'brgy_name'=> 'SABANG ADGAWAN'
      ],
      [
          'id'=> '21110',
          'city_id'=> '754',
          'psgc_brgy'=> '160304014',
          'brgy_name'=> 'SAN PATRICIO'
      ],
      [
          'id'=> '21111',
          'city_id'=> '754',
          'psgc_brgy'=> '160304015',
          'brgy_name'=> 'VALENTINA'
      ],
      [
          'id'=> '21897',
          'city_id'=> '746',
          'psgc_brgy'=> '160206001',
          'brgy_name'=> 'BANGAYAN'
      ],
      [
          'id'=> '21898',
          'city_id'=> '746',
          'psgc_brgy'=> '160206002',
          'brgy_name'=> 'CANAWAY'
      ],
      [
          'id'=> '21899',
          'city_id'=> '746',
          'psgc_brgy'=> '160206003',
          'brgy_name'=> 'HINIMBANGAN'
      ],
      [
          'id'=> '21900',
          'city_id'=> '746',
          'psgc_brgy'=> '160206004',
          'brgy_name'=> 'JALIOBONG'
      ],
      [
          'id'=> '21901',
          'city_id'=> '746',
          'psgc_brgy'=> '160206005',
          'brgy_name'=> 'MAHAYAHAY'
      ],
      [
          'id'=> '21902',
          'city_id'=> '746',
          'psgc_brgy'=> '160206006',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '21903',
          'city_id'=> '746',
          'psgc_brgy'=> '160206007',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '21904',
          'city_id'=> '746',
          'psgc_brgy'=> '160206008',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '21905',
          'city_id'=> '746',
          'psgc_brgy'=> '160206009',
          'brgy_name'=> 'SANGAY'
      ],
      [
          'id'=> '21906',
          'city_id'=> '746',
          'psgc_brgy'=> '160206010',
          'brgy_name'=> 'CROSSING'
      ],
      [
          'id'=> '21907',
          'city_id'=> '746',
          'psgc_brgy'=> '160206011',
          'brgy_name'=> ' SONGKOY'
      ],
      [
          'id'=> '21943',
          'city_id'=> '21',
          'psgc_brgy'=> '160301001',
          'brgy_name'=> 'CALAITAN'
      ],
      [
          'id'=> '21944',
          'city_id'=> '21',
          'psgc_brgy'=> '160301002',
          'brgy_name'=> 'CHARITO'
      ],
      [
          'id'=> '21945',
          'city_id'=> '21',
          'psgc_brgy'=> '160301003',
          'brgy_name'=> 'FILI'
      ],
      [
          'id'=> '21946',
          'city_id'=> '21',
          'psgc_brgy'=> '160301004',
          'brgy_name'=> 'HAMOGAWAY'
      ],
      [
          'id'=> '21947',
          'city_id'=> '21',
          'psgc_brgy'=> '160301006',
          'brgy_name'=> 'KATIPUNAN'
      ],
      [
          'id'=> '21948',
          'city_id'=> '21',
          'psgc_brgy'=> '160301007',
          'brgy_name'=> 'MABUHAY'
      ],
      [
          'id'=> '21949',
          'city_id'=> '21',
          'psgc_brgy'=> '160301009',
          'brgy_name'=> 'MARCELINA'
      ],
      [
          'id'=> '21950',
          'city_id'=> '21',
          'psgc_brgy'=> '160301010',
          'brgy_name'=> 'MAYGATASAN'
      ],
      [
          'id'=> '21951',
          'city_id'=> '21',
          'psgc_brgy'=> '160301011',
          'brgy_name'=> 'NOLI'
      ],
      [
          'id'=> '21952',
          'city_id'=> '21',
          'psgc_brgy'=> '160301013',
          'brgy_name'=> 'OSMEÑA'
      ],
      [
          'id'=> '21953',
          'city_id'=> '21',
          'psgc_brgy'=> '160301014',
          'brgy_name'=> 'PANAYTAY'
      ],
      [
          'id'=> '21954',
          'city_id'=> '21',
          'psgc_brgy'=> '160301016',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '21955',
          'city_id'=> '21',
          'psgc_brgy'=> '160301017',
          'brgy_name'=> 'SAGMONE'
      ],
      [
          'id'=> '21956',
          'city_id'=> '21',
          'psgc_brgy'=> '160301018',
          'brgy_name'=> 'SAGUMA'
      ],
      [
          'id'=> '21957',
          'city_id'=> '21',
          'psgc_brgy'=> '160301019',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '21958',
          'city_id'=> '21',
          'psgc_brgy'=> '160301020',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '21959',
          'city_id'=> '21',
          'psgc_brgy'=> '160301023',
          'brgy_name'=> 'SANTA IRENE'
      ],
      [
          'id'=> '21960',
          'city_id'=> '21',
          'psgc_brgy'=> '160301024',
          'brgy_name'=> 'TAGLATAWAN'
      ],
      [
          'id'=> '21961',
          'city_id'=> '21',
          'psgc_brgy'=> '160301025',
          'brgy_name'=> 'VERDU'
      ],
      [
          'id'=> '21962',
          'city_id'=> '21',
          'psgc_brgy'=> '160301027',
          'brgy_name'=> 'WAWA'
      ],
      [
          'id'=> '21963',
          'city_id'=> '21',
          'psgc_brgy'=> '160301028',
          'brgy_name'=> 'BERSEBA'
      ],
      [
          'id'=> '21964',
          'city_id'=> '21',
          'psgc_brgy'=> '160301029',
          'brgy_name'=> 'BUCAC'
      ],
      [
          'id'=> '21965',
          'city_id'=> '21',
          'psgc_brgy'=> '160301030',
          'brgy_name'=> 'CAGBAS'
      ],
      [
          'id'=> '21966',
          'city_id'=> '21',
          'psgc_brgy'=> '160301031',
          'brgy_name'=> 'CANAYUGAN'
      ],
      [
          'id'=> '21967',
          'city_id'=> '21',
          'psgc_brgy'=> '160301032',
          'brgy_name'=> 'CLARO CORTEZ'
      ],
      [
          'id'=> '21968',
          'city_id'=> '21',
          'psgc_brgy'=> '160301033',
          'brgy_name'=> 'GAMAO'
      ],
      [
          'id'=> '21969',
          'city_id'=> '21',
          'psgc_brgy'=> '160301034',
          'brgy_name'=> 'GETSEMANE'
      ],
      [
          'id'=> '21970',
          'city_id'=> '21',
          'psgc_brgy'=> '160301035',
          'brgy_name'=> 'GRACE ESTATE'
      ],
      [
          'id'=> '21971',
          'city_id'=> '21',
          'psgc_brgy'=> '160301036',
          'brgy_name'=> 'MAGKIANGKANG'
      ],
      [
          'id'=> '21972',
          'city_id'=> '21',
          'psgc_brgy'=> '160301037',
          'brgy_name'=> 'MAHAYAG'
      ],
      [
          'id'=> '21973',
          'city_id'=> '21',
          'psgc_brgy'=> '160301038',
          'brgy_name'=> 'MONTIVESTA'
      ],
      [
          'id'=> '21974',
          'city_id'=> '21',
          'psgc_brgy'=> '160301039',
          'brgy_name'=> 'MT. ARARAT'
      ],
      [
          'id'=> '21975',
          'city_id'=> '21',
          'psgc_brgy'=> '160301040',
          'brgy_name'=> 'MT. CARMEL'
      ],
      [
          'id'=> '21976',
          'city_id'=> '21',
          'psgc_brgy'=> '160301041',
          'brgy_name'=> 'MT. OLIVE'
      ],
      [
          'id'=> '21977',
          'city_id'=> '21',
          'psgc_brgy'=> '160301042',
          'brgy_name'=> 'NEW SALEM'
      ],
      [
          'id'=> '21978',
          'city_id'=> '21',
          'psgc_brgy'=> '160301043',
          'brgy_name'=> 'PINAGALAAN'
      ],
      [
          'id'=> '21979',
          'city_id'=> '21',
          'psgc_brgy'=> '160301044',
          'brgy_name'=> 'SAN AGUSTIN'
      ],
      [
          'id'=> '21980',
          'city_id'=> '21',
          'psgc_brgy'=> '160301045',
          'brgy_name'=> 'SAN JUAN'
      ],
      [
          'id'=> '21981',
          'city_id'=> '21',
          'psgc_brgy'=> '160301046',
          'brgy_name'=> 'SANTA TERESITA'
      ],
      [
          'id'=> '21982',
          'city_id'=> '21',
          'psgc_brgy'=> '160301047',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '21983',
          'city_id'=> '21',
          'psgc_brgy'=> '160301048',
          'brgy_name'=> 'TAGLIBAS'
      ],
      [
          'id'=> '21984',
          'city_id'=> '21',
          'psgc_brgy'=> '160301049',
          'brgy_name'=> 'TAGUBAY'
      ],
      [
          'id'=> '21985',
          'city_id'=> '21',
          'psgc_brgy'=> '160301050',
          'brgy_name'=> 'VILLA UNDAYON'
      ],
      [
          'id'=> '22488',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311001',
          'brgy_name'=> 'BUENAGRACIA'
      ],
      [
          'id'=> '22489',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311002',
          'brgy_name'=> 'CAUSWAGAN'
      ],
      [
          'id'=> '22490',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311004',
          'brgy_name'=> 'CULI'
      ],
      [
          'id'=> '22491',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311005',
          'brgy_name'=> 'DEL MONTE'
      ],
      [
          'id'=> '22492',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311006',
          'brgy_name'=> 'DESAMPARADOS'
      ],
      [
          'id'=> '22493',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311007',
          'brgy_name'=> 'LABNIG'
      ],
      [
          'id'=> '22494',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311008',
          'brgy_name'=> 'SABANG GIBUNG'
      ],
      [
          'id'=> '22495',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311009',
          'brgy_name'=> 'SAN AGUSTIN (POB.)'
      ],
      [
          'id'=> '22496',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311010',
          'brgy_name'=> 'SAN ISIDRO (POB.)'
      ],
      [
          'id'=> '22497',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311011',
          'brgy_name'=> 'SAN NICOLAS (POB.)'
      ],
      [
          'id'=> '22498',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311012',
          'brgy_name'=> 'ZAMORA'
      ],
      [
          'id'=> '22499',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311013',
          'brgy_name'=> 'ZILLOVIA'
      ],
      [
          'id'=> '22500',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311014',
          'brgy_name'=> 'LA FLORA'
      ],
      [
          'id'=> '22501',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311015',
          'brgy_name'=> 'MAHARLIKA'
      ],
      [
          'id'=> '22502',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311016',
          'brgy_name'=> 'MARBON'
      ],
      [
          'id'=> '22503',
          'city_id'=> '1511',
          'psgc_brgy'=> '160311017',
          'brgy_name'=> 'BALUCAN'
      ],
      [
          'id'=> '23462',
          'city_id'=> '808',
          'psgc_brgy'=> '168504001',
          'brgy_name'=> 'ALBOR (POB.)'
      ],
      [
          'id'=> '23463',
          'city_id'=> '808',
          'psgc_brgy'=> '168504002',
          'brgy_name'=> 'ARELLANO'
      ],
      [
          'id'=> '23464',
          'city_id'=> '808',
          'psgc_brgy'=> '168504003',
          'brgy_name'=> 'BAYANIHAN'
      ],
      [
          'id'=> '23465',
          'city_id'=> '808',
          'psgc_brgy'=> '168504004',
          'brgy_name'=> 'DOÑA HELEN'
      ],
      [
          'id'=> '23466',
          'city_id'=> '808',
          'psgc_brgy'=> '168504005',
          'brgy_name'=> 'GARCIA'
      ],
      [
          'id'=> '23467',
          'city_id'=> '808',
          'psgc_brgy'=> '168504006',
          'brgy_name'=> 'GENERAL AGUINALDO (BOLOD-BOLOD)'
      ],
      [
          'id'=> '23468',
          'city_id'=> '808',
          'psgc_brgy'=> '168504007',
          'brgy_name'=> 'KANIHAAN'
      ],
      [
          'id'=> '23469',
          'city_id'=> '808',
          'psgc_brgy'=> '168504008',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '23470',
          'city_id'=> '808',
          'psgc_brgy'=> '168504009',
          'brgy_name'=> 'OSMEÑA'
      ],
      [
          'id'=> '23471',
          'city_id'=> '808',
          'psgc_brgy'=> '168504010',
          'brgy_name'=> 'PLARIDEL'
      ],
      [
          'id'=> '23472',
          'city_id'=> '808',
          'psgc_brgy'=> '168504011',
          'brgy_name'=> 'QUEZON'
      ],
      [
          'id'=> '23473',
          'city_id'=> '808',
          'psgc_brgy'=> '168504012',
          'brgy_name'=> 'SAN ANTONIO (POB.)'
      ],
      [
          'id'=> '23474',
          'city_id'=> '808',
          'psgc_brgy'=> '168504013',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '23475',
          'city_id'=> '808',
          'psgc_brgy'=> '168504014',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '23476',
          'city_id'=> '808',
          'psgc_brgy'=> '168504015',
          'brgy_name'=> 'LLAMERA'
      ],
      [
          'id'=> '23477',
          'city_id'=> '808',
          'psgc_brgy'=> '168504016',
          'brgy_name'=> 'ROSITA'
      ],
      [
          'id'=> '24908',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506001',
          'brgy_name'=> 'AURELIO'
      ],
      [
          'id'=> '24909',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506002',
          'brgy_name'=> 'CUARINTA'
      ],
      [
          'id'=> '24910',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506003',
          'brgy_name'=> 'DON RUBEN ECLEO (BALTAZAR)'
      ],
      [
          'id'=> '24911',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506004',
          'brgy_name'=> 'JACQUEZ'
      ],
      [
          'id'=> '24912',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506005',
          'brgy_name'=> 'JUSTINIANA EDERA'
      ],
      [
          'id'=> '24913',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506006',
          'brgy_name'=> 'LUNA'
      ],
      [
          'id'=> '24914',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506007',
          'brgy_name'=> 'MAHAYAHAY'
      ],
      [
          'id'=> '24915',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506008',
          'brgy_name'=> 'MATINGBE'
      ],
      [
          'id'=> '24916',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506009',
          'brgy_name'=> 'SAN JOSE (POB.)'
      ],
      [
          'id'=> '24917',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506010',
          'brgy_name'=> 'SAN JUAN'
      ],
      [
          'id'=> '24918',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506011',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '24919',
          'city_id'=> '1309',
          'psgc_brgy'=> '168506012',
          'brgy_name'=> 'WILSON'
      ],
      [
          'id'=> '25165',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717002',
          'brgy_name'=> 'AMOSLOG'
      ],
      [
          'id'=> '25166',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717003',
          'brgy_name'=> 'ANISLAGAN'
      ],
      [
          'id'=> '25167',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717004',
          'brgy_name'=> 'BAD-AS'
      ],
      [
          'id'=> '25168',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717005',
          'brgy_name'=> 'BOYONGAN'
      ],
      [
          'id'=> '25169',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717006',
          'brgy_name'=> 'BUGAS-BUGAS'
      ],
      [
          'id'=> '25170',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717007',
          'brgy_name'=> 'CENTRAL (POB.)'
      ],
      [
          'id'=> '25171',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717008',
          'brgy_name'=> 'ELLAPERAL (NONOK)'
      ],
      [
          'id'=> '25172',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717009',
          'brgy_name'=> 'IPIL (POB.)'
      ],
      [
          'id'=> '25173',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717010',
          'brgy_name'=> 'LAKANDULA'
      ],
      [
          'id'=> '25174',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717011',
          'brgy_name'=> 'MABINI'
      ],
      [
          'id'=> '25175',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717012',
          'brgy_name'=> 'MACALAYA'
      ],
      [
          'id'=> '25176',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717013',
          'brgy_name'=> 'MAGSAYSAY (POB.)'
      ],
      [
          'id'=> '25177',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717014',
          'brgy_name'=> 'MAGUPANGE'
      ],
      [
          'id'=> '25178',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717015',
          'brgy_name'=> 'PANANAY-AN'
      ],
      [
          'id'=> '25179',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717016',
          'brgy_name'=> 'PANHUTONGAN'
      ],
      [
          'id'=> '25180',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717017',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '25181',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717018',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '25182',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717019',
          'brgy_name'=> 'SUYOC'
      ],
      [
          'id'=> '25183',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717020',
          'brgy_name'=> 'TAGBONGABONG'
      ],
      [
          'id'=> '25184',
          'city_id'=> '1164',
          'psgc_brgy'=> '166717021',
          'brgy_name'=> 'SANI-SANI'
      ],
      [
          'id'=> '25328',
          'city_id'=> '803',
          'psgc_brgy'=> '166811001',
          'brgy_name'=> 'ANIBONGAN'
      ],
      [
          'id'=> '25329',
          'city_id'=> '803',
          'psgc_brgy'=> '166811002',
          'brgy_name'=> 'BANAHAO'
      ],
      [
          'id'=> '25330',
          'city_id'=> '803',
          'psgc_brgy'=> '166811003',
          'brgy_name'=> 'BAN-AS'
      ],
      [
          'id'=> '25331',
          'city_id'=> '803',
          'psgc_brgy'=> '166811004',
          'brgy_name'=> 'BAUCAWE'
      ],
      [
          'id'=> '25332',
          'city_id'=> '803',
          'psgc_brgy'=> '166811005',
          'brgy_name'=> 'DIATAGON'
      ],
      [
          'id'=> '25333',
          'city_id'=> '803',
          'psgc_brgy'=> '166811006',
          'brgy_name'=> 'GANAYON'
      ],
      [
          'id'=> '25334',
          'city_id'=> '803',
          'psgc_brgy'=> '166811007',
          'brgy_name'=> 'LIATIMCO'
      ],
      [
          'id'=> '25335',
          'city_id'=> '803',
          'psgc_brgy'=> '166811008',
          'brgy_name'=> 'MANYAYAY'
      ],
      [
          'id'=> '25336',
          'city_id'=> '803',
          'psgc_brgy'=> '166811009',
          'brgy_name'=> 'PAYASAN'
      ],
      [
          'id'=> '25337',
          'city_id'=> '803',
          'psgc_brgy'=> '166811010',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '25338',
          'city_id'=> '803',
          'psgc_brgy'=> '166811011',
          'brgy_name'=> 'SAINT CHRISTINE'
      ],
      [
          'id'=> '25339',
          'city_id'=> '803',
          'psgc_brgy'=> '166811012',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '25340',
          'city_id'=> '803',
          'psgc_brgy'=> '166811013',
          'brgy_name'=> 'SAN PEDRO'
      ],
      [
          'id'=> '26303',
          'city_id'=> '906',
          'psgc_brgy'=> '166714001',
          'brgy_name'=> 'BINGA'
      ],
      [
          'id'=> '26304',
          'city_id'=> '906',
          'psgc_brgy'=> '166714002',
          'brgy_name'=> 'BOBONA-ON'
      ],
      [
          'id'=> '26305',
          'city_id'=> '906',
          'psgc_brgy'=> '166714003',
          'brgy_name'=> 'CANTUGAS'
      ],
      [
          'id'=> '26306',
          'city_id'=> '906',
          'psgc_brgy'=> '166714004',
          'brgy_name'=> 'DAYANO'
      ],
      [
          'id'=> '26307',
          'city_id'=> '906',
          'psgc_brgy'=> '166714005',
          'brgy_name'=> 'MABINI'
      ],
      [
          'id'=> '26308',
          'city_id'=> '906',
          'psgc_brgy'=> '166714006',
          'brgy_name'=> 'MAGPAYANG'
      ],
      [
          'id'=> '26309',
          'city_id'=> '906',
          'psgc_brgy'=> '166714007',
          'brgy_name'=> 'MAGSAYSAY (POB.)'
      ],
      [
          'id'=> '26310',
          'city_id'=> '906',
          'psgc_brgy'=> '166714009',
          'brgy_name'=> 'MANSAYAO'
      ],
      [
          'id'=> '26311',
          'city_id'=> '906',
          'psgc_brgy'=> '166714010',
          'brgy_name'=> 'MARAYAG'
      ],
      [
          'id'=> '26312',
          'city_id'=> '906',
          'psgc_brgy'=> '166714011',
          'brgy_name'=> 'MATIN-AO'
      ],
      [
          'id'=> '26313',
          'city_id'=> '906',
          'psgc_brgy'=> '166714012',
          'brgy_name'=> 'PACO'
      ],
      [
          'id'=> '26314',
          'city_id'=> '906',
          'psgc_brgy'=> '166714013',
          'brgy_name'=> 'QUEZON (POB.)'
      ],
      [
          'id'=> '26315',
          'city_id'=> '906',
          'psgc_brgy'=> '166714014',
          'brgy_name'=> 'ROXAS'
      ],
      [
          'id'=> '26316',
          'city_id'=> '906',
          'psgc_brgy'=> '166714015',
          'brgy_name'=> 'SAN FRANCISCO'
      ],
      [
          'id'=> '26317',
          'city_id'=> '906',
          'psgc_brgy'=> '166714016',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '26318',
          'city_id'=> '906',
          'psgc_brgy'=> '166714017',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '26319',
          'city_id'=> '906',
          'psgc_brgy'=> '166714018',
          'brgy_name'=> 'SIANA'
      ],
      [
          'id'=> '26320',
          'city_id'=> '906',
          'psgc_brgy'=> '166714019',
          'brgy_name'=> 'SILOP'
      ],
      [
          'id'=> '26321',
          'city_id'=> '906',
          'psgc_brgy'=> '166714020',
          'brgy_name'=> 'TAGBUYAWAN'
      ],
      [
          'id'=> '26322',
          'city_id'=> '906',
          'psgc_brgy'=> '166714021',
          'brgy_name'=> 'TAPI-AN'
      ],
      [
          'id'=> '26323',
          'city_id'=> '906',
          'psgc_brgy'=> '166714022',
          'brgy_name'=> 'TOLINGON'
      ],
      [
          'id'=> '26754',
          'city_id'=> '780',
          'psgc_brgy'=> '166810001',
          'brgy_name'=> 'AGSAM'
      ],
      [
          'id'=> '26755',
          'city_id'=> '780',
          'psgc_brgy'=> '166810003',
          'brgy_name'=> 'BOCAWE'
      ],
      [
          'id'=> '26756',
          'city_id'=> '780',
          'psgc_brgy'=> '166810004',
          'brgy_name'=> 'BUNGA'
      ],
      [
          'id'=> '26757',
          'city_id'=> '780',
          'psgc_brgy'=> '166810008',
          'brgy_name'=> 'GAMUTON'
      ],
      [
          'id'=> '26758',
          'city_id'=> '780',
          'psgc_brgy'=> '166810009',
          'brgy_name'=> 'HABAG'
      ],
      [
          'id'=> '26759',
          'city_id'=> '780',
          'psgc_brgy'=> '166810010',
          'brgy_name'=> 'MAMPI'
      ],
      [
          'id'=> '26760',
          'city_id'=> '780',
          'psgc_brgy'=> '166810011',
          'brgy_name'=> 'NURCIA'
      ],
      [
          'id'=> '26761',
          'city_id'=> '780',
          'psgc_brgy'=> '166810015',
          'brgy_name'=> 'SIBAHAY'
      ],
      [
          'id'=> '26762',
          'city_id'=> '780',
          'psgc_brgy'=> '166810016',
          'brgy_name'=> 'ZONE I (POB.)'
      ],
      [
          'id'=> '26763',
          'city_id'=> '780',
          'psgc_brgy'=> '166810017',
          'brgy_name'=> 'PAKWAN'
      ],
      [
          'id'=> '26764',
          'city_id'=> '780',
          'psgc_brgy'=> '166810018',
          'brgy_name'=> 'ZONE II (POB.)'
      ],
      [
          'id'=> '26765',
          'city_id'=> '780',
          'psgc_brgy'=> '166810019',
          'brgy_name'=> 'ZONE III (POB.)'
      ],
      [
          'id'=> '26766',
          'city_id'=> '780',
          'psgc_brgy'=> '166810020',
          'brgy_name'=> 'ZONE IV (POB.)'
      ],
      [
          'id'=> '27068',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723001',
          'brgy_name'=> 'DEL PILAR'
      ],
      [
          'id'=> '27069',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723002',
          'brgy_name'=> 'HELENE'
      ],
      [
          'id'=> '27070',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723003',
          'brgy_name'=> 'HONRADO'
      ],
      [
          'id'=> '27071',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723004',
          'brgy_name'=> 'NAVARRO (POB.)'
      ],
      [
          'id'=> '27072',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723005',
          'brgy_name'=> 'NUEVA ESTRELLA'
      ],
      [
          'id'=> '27073',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723006',
          'brgy_name'=> 'PAMOSAINGAN'
      ],
      [
          'id'=> '27074',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723007',
          'brgy_name'=> 'RIZAL (POB.)'
      ],
      [
          'id'=> '27075',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723008',
          'brgy_name'=> 'SALOG'
      ],
      [
          'id'=> '27076',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723009',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '27077',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723010',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '27078',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723011',
          'brgy_name'=> 'SERING'
      ],
      [
          'id'=> '27079',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723012',
          'brgy_name'=> 'SONGKOY'
      ],
      [
          'id'=> '27080',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723013',
          'brgy_name'=> 'SUDLON'
      ],
      [
          'id'=> '27081',
          'city_id'=> '1467',
          'psgc_brgy'=> '166723014',
          'brgy_name'=> 'ALBINO TARUC'
      ],
      [
          'id'=> '27161',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815001',
          'brgy_name'=> 'BRETANIA'
      ],
      [
          'id'=> '27162',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815002',
          'brgy_name'=> 'BUATONG'
      ],
      [
          'id'=> '27163',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815003',
          'brgy_name'=> 'BUHISAN'
      ],
      [
          'id'=> '27164',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815004',
          'brgy_name'=> 'GATA'
      ],
      [
          'id'=> '27165',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815005',
          'brgy_name'=> 'HORNASAN'
      ],
      [
          'id'=> '27166',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815006',
          'brgy_name'=> 'JANIPAAN'
      ],
      [
          'id'=> '27167',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815007',
          'brgy_name'=> 'KAUSWAGAN'
      ],
      [
          'id'=> '27168',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815008',
          'brgy_name'=> 'OTEIZA'
      ],
      [
          'id'=> '27169',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815009',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '27170',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815010',
          'brgy_name'=> 'PONG-ON'
      ],
      [
          'id'=> '27171',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815011',
          'brgy_name'=> 'PONGTOD'
      ],
      [
          'id'=> '27172',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815012',
          'brgy_name'=> 'SALVACION'
      ],
      [
          'id'=> '27173',
          'city_id'=> '1256',
          'psgc_brgy'=> '166815013',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '27608',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310001',
          'brgy_name'=> 'ANGAS'
      ],
      [
          'id'=> '27609',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310002',
          'brgy_name'=> 'AURORA'
      ],
      [
          'id'=> '27610',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310003',
          'brgy_name'=> 'AWAO'
      ],
      [
          'id'=> '27611',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310004',
          'brgy_name'=> 'TAPAZ'
      ],
      [
          'id'=> '27612',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310005',
          'brgy_name'=> 'PATROCINIO'
      ],
      [
          'id'=> '27613',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310006',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '27614',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310007',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '27615',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310008',
          'brgy_name'=> 'SANTA ISABEL'
      ],
      [
          'id'=> '27616',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310009',
          'brgy_name'=> 'SAYON'
      ],
      [
          'id'=> '27617',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310010',
          'brgy_name'=> 'CONCEPCION'
      ],
      [
          'id'=> '27618',
          'city_id'=> '1386',
          'psgc_brgy'=> '160310011',
          'brgy_name'=> 'PAG-ASA'
      ],
      [
          'id'=> '29125',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211001',
          'brgy_name'=> 'BINUANGAN'
      ],
      [
          'id'=> '29126',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211002',
          'brgy_name'=> 'CABAYAWA'
      ],
      [
          'id'=> '29127',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211003',
          'brgy_name'=> 'DOÑA ROSARIO'
      ],
      [
          'id'=> '29128',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211004',
          'brgy_name'=> 'LA FRATERNIDAD'
      ],
      [
          'id'=> '29129',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211005',
          'brgy_name'=> 'LAWIGAN'
      ],
      [
          'id'=> '29130',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211006',
          'brgy_name'=> 'POBLACION 1'
      ],
      [
          'id'=> '29131',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211007',
          'brgy_name'=> 'POBLACION 2'
      ],
      [
          'id'=> '29132',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211008',
          'brgy_name'=> 'SANTA ANA'
      ],
      [
          'id'=> '29133',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211009',
          'brgy_name'=> 'TAGMAMARKAY'
      ],
      [
          'id'=> '29134',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211010',
          'brgy_name'=> 'TAGPANGAHOY'
      ],
      [
          'id'=> '29135',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211011',
          'brgy_name'=> 'TINIGBASAN'
      ],
      [
          'id'=> '29136',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211012',
          'brgy_name'=> 'VICTORY'
      ],
      [
          'id'=> '29137',
          'city_id'=> '1577',
          'psgc_brgy'=> '160211013',
          'brgy_name'=> 'DOÑA TELESFORA'
      ],
      [
          'id'=> '29342',
          'city_id'=> '393',
          'psgc_brgy'=> '166704001',
          'brgy_name'=> 'BAYBAY'
      ],
      [
          'id'=> '29343',
          'city_id'=> '393',
          'psgc_brgy'=> '166704002',
          'brgy_name'=> 'BITAUG'
      ],
      [
          'id'=> '29344',
          'city_id'=> '393',
          'psgc_brgy'=> '166704003',
          'brgy_name'=> 'POBLACION 1'
      ],
      [
          'id'=> '29345',
          'city_id'=> '393',
          'psgc_brgy'=> '166704004',
          'brgy_name'=> 'POBLACION 2'
      ],
      [
          'id'=> '29346',
          'city_id'=> '393',
          'psgc_brgy'=> '166704005',
          'brgy_name'=> 'SAN MATEO'
      ],
      [
          'id'=> '29347',
          'city_id'=> '393',
          'psgc_brgy'=> '166704006',
          'brgy_name'=> 'MATIN-AO'
      ],
      [
          'id'=> '29418',
          'city_id'=> '413',
          'psgc_brgy'=> '168502001',
          'brgy_name'=> 'BOA'
      ],
      [
          'id'=> '29419',
          'city_id'=> '413',
          'psgc_brgy'=> '168502002',
          'brgy_name'=> 'CABUNGA-AN'
      ],
      [
          'id'=> '29420',
          'city_id'=> '413',
          'psgc_brgy'=> '168502003',
          'brgy_name'=> 'DEL PILAR'
      ],
      [
          'id'=> '29421',
          'city_id'=> '413',
          'psgc_brgy'=> '168502004',
          'brgy_name'=> 'LAGUNA'
      ],
      [
          'id'=> '29422',
          'city_id'=> '413',
          'psgc_brgy'=> '168502005',
          'brgy_name'=> 'LEGASPI'
      ],
      [
          'id'=> '29423',
          'city_id'=> '413',
          'psgc_brgy'=> '168502006',
          'brgy_name'=> 'MA-ATAS'
      ],
      [
          'id'=> '29424',
          'city_id'=> '413',
          'psgc_brgy'=> '168502007',
          'brgy_name'=> 'NUEVA ESTRELLA'
      ],
      [
          'id'=> '29425',
          'city_id'=> '413',
          'psgc_brgy'=> '168502008',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '29426',
          'city_id'=> '413',
          'psgc_brgy'=> '168502009',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '29427',
          'city_id'=> '413',
          'psgc_brgy'=> '168502010',
          'brgy_name'=> 'SANTA RITA'
      ],
      [
          'id'=> '29428',
          'city_id'=> '413',
          'psgc_brgy'=> '168502011',
          'brgy_name'=> 'TIGBAO'
      ],
      [
          'id'=> '29429',
          'city_id'=> '413',
          'psgc_brgy'=> '168502012',
          'brgy_name'=> 'VALENCIA'
      ],
      [
          'id'=> '29430',
          'city_id'=> '413',
          'psgc_brgy'=> '168502013',
          'brgy_name'=> 'MABINI (BORJA)'
      ],
      [
          'id'=> '29431',
          'city_id'=> '413',
          'psgc_brgy'=> '168502014',
          'brgy_name'=> 'R. ECLEO, SR.'
      ],
      [
          'id'=> '29432',
          'city_id'=> '307',
          'psgc_brgy'=> '168501002',
          'brgy_name'=> 'CATADMAN'
      ],
      [
          'id'=> '29433',
          'city_id'=> '307',
          'psgc_brgy'=> '168501003',
          'brgy_name'=> 'COLUMBUS'
      ],
      [
          'id'=> '29434',
          'city_id'=> '307',
          'psgc_brgy'=> '168501004',
          'brgy_name'=> 'CORING'
      ],
      [
          'id'=> '29435',
          'city_id'=> '307',
          'psgc_brgy'=> '168501005',
          'brgy_name'=> 'CORTES'
      ],
      [
          'id'=> '29436',
          'city_id'=> '307',
          'psgc_brgy'=> '168501006',
          'brgy_name'=> 'DOÑA HELENE'
      ],
      [
          'id'=> '29437',
          'city_id'=> '307',
          'psgc_brgy'=> '168501007',
          'brgy_name'=> 'FERDINAND'
      ],
      [
          'id'=> '29438',
          'city_id'=> '307',
          'psgc_brgy'=> '168501008',
          'brgy_name'=> 'GEOTINA'
      ],
      [
          'id'=> '29439',
          'city_id'=> '307',
          'psgc_brgy'=> '168501009',
          'brgy_name'=> 'IMEE (BACTASAN)'
      ],
      [
          'id'=> '29440',
          'city_id'=> '307',
          'psgc_brgy'=> '168501010',
          'brgy_name'=> 'MELGAR'
      ],
      [
          'id'=> '29441',
          'city_id'=> '307',
          'psgc_brgy'=> '168501011',
          'brgy_name'=> 'MONTAG'
      ],
      [
          'id'=> '29442',
          'city_id'=> '307',
          'psgc_brgy'=> '168501012',
          'brgy_name'=> 'NAVARRO'
      ],
      [
          'id'=> '29443',
          'city_id'=> '307',
          'psgc_brgy'=> '168501013',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '29444',
          'city_id'=> '307',
          'psgc_brgy'=> '168501014',
          'brgy_name'=> 'PUERTO PRINCESA'
      ],
      [
          'id'=> '29445',
          'city_id'=> '307',
          'psgc_brgy'=> '168501015',
          'brgy_name'=> 'RITA GLENDA'
      ],
      [
          'id'=> '29446',
          'city_id'=> '307',
          'psgc_brgy'=> '168501016',
          'brgy_name'=> 'ROXAS'
      ],
      [
          'id'=> '29447',
          'city_id'=> '307',
          'psgc_brgy'=> '168501017',
          'brgy_name'=> 'SERING'
      ],
      [
          'id'=> '29448',
          'city_id'=> '307',
          'psgc_brgy'=> '168501018',
          'brgy_name'=> 'TAG-ABACA'
      ],
      [
          'id'=> '29449',
          'city_id'=> '307',
          'psgc_brgy'=> '168501019',
          'brgy_name'=> 'BENGLEN'
      ],
      [
          'id'=> '29450',
          'city_id'=> '307',
          'psgc_brgy'=> '168501020',
          'brgy_name'=> ' DIEGAS'
      ],
      [
          'id'=> '29451',
          'city_id'=> '307',
          'psgc_brgy'=> '168501021',
          'brgy_name'=> ' EDERA'
      ],
      [
          'id'=> '29452',
          'city_id'=> '307',
          'psgc_brgy'=> '168501022',
          'brgy_name'=> ' NEW NAZARETH'
      ],
      [
          'id'=> '29453',
          'city_id'=> '307',
          'psgc_brgy'=> '168501023',
          'brgy_name'=> ' ROMA'
      ],
      [
          'id'=> '29454',
          'city_id'=> '307',
          'psgc_brgy'=> '168501024',
          'brgy_name'=> ' SANTA MONICA'
      ],
      [
          'id'=> '29455',
          'city_id'=> '307',
          'psgc_brgy'=> '168501025',
          'brgy_name'=> ' SANTO NIÑO'
      ],
      [
          'id'=> '29456',
          'city_id'=> '307',
          'psgc_brgy'=> '168501026',
          'brgy_name'=> ' SOMBRADO'
      ],
      [
          'id'=> '29457',
          'city_id'=> '307',
          'psgc_brgy'=> '168501027',
          'brgy_name'=> ' VILLA ECLEO'
      ],
      [
          'id'=> '29458',
          'city_id'=> '307',
          'psgc_brgy'=> '168501028',
          'brgy_name'=> ' VILLA PANTINOPLE'
      ],
      [
          'id'=> '30523',
          'city_id'=> '887',
          'psgc_brgy'=> '160208001',
          'brgy_name'=> 'BUHANG'
      ],
      [
          'id'=> '30524',
          'city_id'=> '887',
          'psgc_brgy'=> '160208002',
          'brgy_name'=> 'CALOC-AN'
      ],
      [
          'id'=> '30525',
          'city_id'=> '887',
          'psgc_brgy'=> '160208003',
          'brgy_name'=> 'GUIASAN'
      ],
      [
          'id'=> '30526',
          'city_id'=> '887',
          'psgc_brgy'=> '160208005',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '30527',
          'city_id'=> '887',
          'psgc_brgy'=> '160208008',
          'brgy_name'=> 'TAOD-OY'
      ],
      [
          'id'=> '30528',
          'city_id'=> '887',
          'psgc_brgy'=> '160208009',
          'brgy_name'=> 'MARCOS'
      ],
      [
          'id'=> '30529',
          'city_id'=> '887',
          'psgc_brgy'=> '160208010',
          'brgy_name'=> 'SANTO NIÑO'
      ],
      [
          'id'=> '30530',
          'city_id'=> '887',
          'psgc_brgy'=> '160208011',
          'brgy_name'=> 'SANTO ROSARIO'
      ],
      [
          'id'=> '32506',
          'city_id'=> '324',
          'psgc_brgy'=> '166802001',
          'brgy_name'=> 'AMAG'
      ],
      [
          'id'=> '32507',
          'city_id'=> '324',
          'psgc_brgy'=> '166802002',
          'brgy_name'=> 'BALETE (POB.)'
      ],
      [
          'id'=> '32508',
          'city_id'=> '324',
          'psgc_brgy'=> '166802003',
          'brgy_name'=> 'CABUGO'
      ],
      [
          'id'=> '32509',
          'city_id'=> '324',
          'psgc_brgy'=> '166802004',
          'brgy_name'=> 'CAGBAOTO'
      ],
      [
          'id'=> '32510',
          'city_id'=> '324',
          'psgc_brgy'=> '166802005',
          'brgy_name'=> 'LA PAZ'
      ],
      [
          'id'=> '32511',
          'city_id'=> '324',
          'psgc_brgy'=> '166802006',
          'brgy_name'=> 'MAGOBAWOK'
      ],
      [
          'id'=> '32512',
          'city_id'=> '324',
          'psgc_brgy'=> '166802007',
          'brgy_name'=> 'PANAOSAWON'
      ],
      [
          'id'=> '33103',
          'city_id'=> '527',
          'psgc_brgy'=> '166707001',
          'brgy_name'=> 'BAGAKAY'
      ],
      [
          'id'=> '33104',
          'city_id'=> '527',
          'psgc_brgy'=> '166707002',
          'brgy_name'=> 'BARANGAY 1 (POB.)'
      ],
      [
          'id'=> '33105',
          'city_id'=> '527',
          'psgc_brgy'=> '166707003',
          'brgy_name'=> 'BARANGAY 13 (POB.)'
      ],
      [
          'id'=> '33106',
          'city_id'=> '527',
          'psgc_brgy'=> '166707004',
          'brgy_name'=> 'BUENAVISTA'
      ],
      [
          'id'=> '33107',
          'city_id'=> '527',
          'psgc_brgy'=> '166707005',
          'brgy_name'=> 'CABAWA'
      ],
      [
          'id'=> '33108',
          'city_id'=> '527',
          'psgc_brgy'=> '166707006',
          'brgy_name'=> 'CAMBAS-AC'
      ],
      [
          'id'=> '33109',
          'city_id'=> '527',
          'psgc_brgy'=> '166707007',
          'brgy_name'=> 'CONSOLACION'
      ],
      [
          'id'=> '33110',
          'city_id'=> '527',
          'psgc_brgy'=> '166707008',
          'brgy_name'=> 'CORREGIDOR'
      ],
      [
          'id'=> '33111',
          'city_id'=> '527',
          'psgc_brgy'=> '166707009',
          'brgy_name'=> 'DAGOHOY'
      ],
      [
          'id'=> '33112',
          'city_id'=> '527',
          'psgc_brgy'=> '166707010',
          'brgy_name'=> 'DON PAULINO'
      ],
      [
          'id'=> '33113',
          'city_id'=> '527',
          'psgc_brgy'=> '166707011',
          'brgy_name'=> 'JUBANG'
      ],
      [
          'id'=> '33114',
          'city_id'=> '527',
          'psgc_brgy'=> '166707012',
          'brgy_name'=> 'MONTSERRAT'
      ],
      [
          'id'=> '33115',
          'city_id'=> '527',
          'psgc_brgy'=> '166707013',
          'brgy_name'=> 'OSMEÑA'
      ],
      [
          'id'=> '33116',
          'city_id'=> '527',
          'psgc_brgy'=> '166707014',
          'brgy_name'=> 'BARANGAY 10 (POB.)'
      ],
      [
          'id'=> '33117',
          'city_id'=> '527',
          'psgc_brgy'=> '166707015',
          'brgy_name'=> 'BARANGAY 11 (POB.)'
      ],
      [
          'id'=> '33118',
          'city_id'=> '527',
          'psgc_brgy'=> '166707016',
          'brgy_name'=> 'BARANGAY 12 (POB.)'
      ],
      [
          'id'=> '33119',
          'city_id'=> '527',
          'psgc_brgy'=> '166707017',
          'brgy_name'=> 'BARANGAY 2 (POB.)'
      ],
      [
          'id'=> '33120',
          'city_id'=> '527',
          'psgc_brgy'=> '166707018',
          'brgy_name'=> 'BARANGAY 3 (POB.)'
      ],
      [
          'id'=> '33121',
          'city_id'=> '527',
          'psgc_brgy'=> '166707019',
          'brgy_name'=> 'BARANGAY 4 (POB.)'
      ],
      [
          'id'=> '33122',
          'city_id'=> '527',
          'psgc_brgy'=> '166707020',
          'brgy_name'=> 'BARANGAY 5 (POB.)'
      ],
      [
          'id'=> '33123',
          'city_id'=> '527',
          'psgc_brgy'=> '166707021',
          'brgy_name'=> 'BARANGAY 6 (POB.)'
      ],
      [
          'id'=> '33124',
          'city_id'=> '527',
          'psgc_brgy'=> '166707022',
          'brgy_name'=> 'BARANGAY 7 (POB.)'
      ],
      [
          'id'=> '33125',
          'city_id'=> '527',
          'psgc_brgy'=> '166707023',
          'brgy_name'=> 'BARANGAY 8 (POB.)'
      ],
      [
          'id'=> '33126',
          'city_id'=> '527',
          'psgc_brgy'=> '166707024',
          'brgy_name'=> 'BARANGAY 9 (POB.)'
      ],
      [
          'id'=> '33127',
          'city_id'=> '527',
          'psgc_brgy'=> '166707025',
          'brgy_name'=> 'SAN CARLOS'
      ],
      [
          'id'=> '33128',
          'city_id'=> '527',
          'psgc_brgy'=> '166707026',
          'brgy_name'=> 'SAN MIGUEL'
      ],
      [
          'id'=> '33129',
          'city_id'=> '527',
          'psgc_brgy'=> '166707027',
          'brgy_name'=> 'SANTA FE'
      ],
      [
          'id'=> '33130',
          'city_id'=> '527',
          'psgc_brgy'=> '166707028',
          'brgy_name'=> 'UNION'
      ],
      [
          'id'=> '33131',
          'city_id'=> '527',
          'psgc_brgy'=> '166707029',
          'brgy_name'=> 'SANTA FELOMINA'
      ],
      [
          'id'=> '33555',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314001',
          'brgy_name'=> 'AFGA'
      ],
      [
          'id'=> '33556',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314002',
          'brgy_name'=> 'ANAHAWAN'
      ],
      [
          'id'=> '33557',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314003',
          'brgy_name'=> 'BANAGBANAG'
      ],
      [
          'id'=> '33558',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314004',
          'brgy_name'=> 'DEL ROSARIO'
      ],
      [
          'id'=> '33559',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314005',
          'brgy_name'=> 'EL RIO'
      ],
      [
          'id'=> '33560',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314006',
          'brgy_name'=> 'ILIHAN'
      ],
      [
          'id'=> '33561',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314007',
          'brgy_name'=> 'KAUSWAGAN'
      ],
      [
          'id'=> '33562',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314008',
          'brgy_name'=> 'KIOYA'
      ],
      [
          'id'=> '33563',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314009',
          'brgy_name'=> 'MAGKALAPE'
      ],
      [
          'id'=> '33564',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314010',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '33565',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314011',
          'brgy_name'=> 'MAHAYAHAY'
      ],
      [
          'id'=> '33566',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314012',
          'brgy_name'=> 'NEW TUBIGON'
      ],
      [
          'id'=> '33567',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314013',
          'brgy_name'=> 'PADIAY'
      ],
      [
          'id'=> '33568',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314014',
          'brgy_name'=> 'PEREZ'
      ],
      [
          'id'=> '33569',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314015',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '33570',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314016',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '33571',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314017',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '33572',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314018',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '33573',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314019',
          'brgy_name'=> 'SANTA MARIA'
      ],
      [
          'id'=> '33574',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314020',
          'brgy_name'=> 'SINAI'
      ],
      [
          'id'=> '33575',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314021',
          'brgy_name'=> 'TABON-TABON'
      ],
      [
          'id'=> '33576',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314022',
          'brgy_name'=> 'TAG-UYANGO'
      ],
      [
          'id'=> '33577',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314023',
          'brgy_name'=> 'VILLANGIT'
      ],
      [
          'id'=> '33578',
          'city_id'=> '1439',
          'psgc_brgy'=> '160314024',
          'brgy_name'=> 'KOLAMBUGAN'
      ],
      [
          'id'=> '33752',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210002',
          'brgy_name'=> 'CURVA'
      ],
      [
          'id'=> '33753',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210003',
          'brgy_name'=> 'JAGUPIT'
      ],
      [
          'id'=> '33754',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210005',
          'brgy_name'=> 'LA PAZ'
      ],
      [
          'id'=> '33755',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210007',
          'brgy_name'=> 'POBLACION I'
      ],
      [
          'id'=> '33756',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210008',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '33757',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210009',
          'brgy_name'=> 'TAGBUYACAN'
      ],
      [
          'id'=> '33758',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210010',
          'brgy_name'=> 'ESTANISLAO MORGADO'
      ],
      [
          'id'=> '33759',
          'city_id'=> '1406',
          'psgc_brgy'=> '160210011',
          'brgy_name'=> 'POBLACION II'
      ],
      [
          'id'=> '34406',
          'city_id'=> '507',
          'psgc_brgy'=> '166808001',
          'brgy_name'=> 'BALIBADON'
      ],
      [
          'id'=> '34407',
          'city_id'=> '507',
          'psgc_brgy'=> '166808002',
          'brgy_name'=> 'BURGOS'
      ],
      [
          'id'=> '34408',
          'city_id'=> '507',
          'psgc_brgy'=> '166808003',
          'brgy_name'=> 'CAPANDAN'
      ],
      [
          'id'=> '34409',
          'city_id'=> '507',
          'psgc_brgy'=> '166808004',
          'brgy_name'=> 'MABAHIN'
      ],
      [
          'id'=> '34410',
          'city_id'=> '507',
          'psgc_brgy'=> '166808005',
          'brgy_name'=> 'MADRELINO'
      ],
      [
          'id'=> '34411',
          'city_id'=> '507',
          'psgc_brgy'=> '166808006',
          'brgy_name'=> 'MANLICO'
      ],
      [
          'id'=> '34412',
          'city_id'=> '507',
          'psgc_brgy'=> '166808007',
          'brgy_name'=> 'MATHO'
      ],
      [
          'id'=> '34413',
          'city_id'=> '507',
          'psgc_brgy'=> '166808008',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '34414',
          'city_id'=> '507',
          'psgc_brgy'=> '166808009',
          'brgy_name'=> 'TAG-ANONGAN'
      ],
      [
          'id'=> '34415',
          'city_id'=> '507',
          'psgc_brgy'=> '166808010',
          'brgy_name'=> 'TIGAO'
      ],
      [
          'id'=> '34416',
          'city_id'=> '507',
          'psgc_brgy'=> '166808011',
          'brgy_name'=> 'TUBORAN'
      ],
      [
          'id'=> '34417',
          'city_id'=> '507',
          'psgc_brgy'=> '166808012',
          'brgy_name'=> 'UBA'
      ],
      [
          'id'=> '34700',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817001',
          'brgy_name'=> 'BATUNAN'
      ],
      [
          'id'=> '34701',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817002',
          'brgy_name'=> 'CARPENITO'
      ],
      [
          'id'=> '34702',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817003',
          'brgy_name'=> 'KAHAYAGAN'
      ],
      [
          'id'=> '34703',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817004',
          'brgy_name'=> 'LAGO'
      ],
      [
          'id'=> '34704',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817006',
          'brgy_name'=> 'MAGLAMBING'
      ],
      [
          'id'=> '34705',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817007',
          'brgy_name'=> 'MAGLATAB'
      ],
      [
          'id'=> '34706',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817008',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '34707',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817009',
          'brgy_name'=> 'MALIXI'
      ],
      [
          'id'=> '34708',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817010',
          'brgy_name'=> 'MANAMBIA'
      ],
      [
          'id'=> '34709',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817011',
          'brgy_name'=> 'OSMEÑA'
      ],
      [
          'id'=> '34710',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817012',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '34711',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817013',
          'brgy_name'=> 'QUEZON'
      ],
      [
          'id'=> '34712',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817014',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '34713',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817015',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '34714',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817016',
          'brgy_name'=> 'SANTA FE'
      ],
      [
          'id'=> '34715',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817017',
          'brgy_name'=> 'SANTA JUANA'
      ],
      [
          'id'=> '34716',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817018',
          'brgy_name'=> 'SANTA MARIA'
      ],
      [
          'id'=> '34717',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817019',
          'brgy_name'=> 'SAYON'
      ],
      [
          'id'=> '34718',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817020',
          'brgy_name'=> 'SORIANO'
      ],
      [
          'id'=> '34719',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817021',
          'brgy_name'=> 'TAGONGON'
      ],
      [
          'id'=> '34720',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817022',
          'brgy_name'=> 'TRINIDAD'
      ],
      [
          'id'=> '34721',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817023',
          'brgy_name'=> 'UGOBAN'
      ],
      [
          'id'=> '34722',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817024',
          'brgy_name'=> 'VILLAVERDE'
      ],
      [
          'id'=> '34723',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817025',
          'brgy_name'=> 'DOÑA CARMEN'
      ],
      [
          'id'=> '34724',
          'city_id'=> '1504',
          'psgc_brgy'=> '166817026',
          'brgy_name'=> 'HINAGDANAN'
      ],
      [
          'id'=> '35631',
          'city_id'=> '962',
          'psgc_brgy'=> '166814001',
          'brgy_name'=> 'ALEGRIA'
      ],
      [
          'id'=> '35632',
          'city_id'=> '962',
          'psgc_brgy'=> '166814002',
          'brgy_name'=> 'AMONTAY'
      ],
      [
          'id'=> '35633',
          'city_id'=> '962',
          'psgc_brgy'=> '166814003',
          'brgy_name'=> 'ANTIPOLO'
      ],
      [
          'id'=> '35634',
          'city_id'=> '962',
          'psgc_brgy'=> '166814004',
          'brgy_name'=> 'AROROGAN'
      ],
      [
          'id'=> '35635',
          'city_id'=> '962',
          'psgc_brgy'=> '166814005',
          'brgy_name'=> 'BAYAN'
      ],
      [
          'id'=> '35636',
          'city_id'=> '962',
          'psgc_brgy'=> '166814006',
          'brgy_name'=> 'MAHABA'
      ],
      [
          'id'=> '35637',
          'city_id'=> '962',
          'psgc_brgy'=> '166814007',
          'brgy_name'=> 'MARARAG'
      ],
      [
          'id'=> '35638',
          'city_id'=> '962',
          'psgc_brgy'=> '166814008',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '35639',
          'city_id'=> '962',
          'psgc_brgy'=> '166814009',
          'brgy_name'=> 'SAN ANTONIO'
      ],
      [
          'id'=> '35640',
          'city_id'=> '962',
          'psgc_brgy'=> '166814010',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '35641',
          'city_id'=> '962',
          'psgc_brgy'=> '166814011',
          'brgy_name'=> 'SAN PEDRO'
      ],
      [
          'id'=> '35642',
          'city_id'=> '962',
          'psgc_brgy'=> '166814012',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '35726',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308001',
          'brgy_name'=> 'ALEGRIA'
      ],
      [
          'id'=> '35727',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308002',
          'brgy_name'=> 'BAYUGAN 2'
      ],
      [
          'id'=> '35728',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308003',
          'brgy_name'=> 'BORBON'
      ],
      [
          'id'=> '35729',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308005',
          'brgy_name'=> 'CAIMPUGAN'
      ],
      [
          'id'=> '35730',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308006',
          'brgy_name'=> 'EBRO'
      ],
      [
          'id'=> '35731',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308007',
          'brgy_name'=> 'HUBANG'
      ],
      [
          'id'=> '35732',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308008',
          'brgy_name'=> 'LAPINIGAN'
      ],
      [
          'id'=> '35733',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308009',
          'brgy_name'=> 'LUCAC'
      ],
      [
          'id'=> '35734',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308010',
          'brgy_name'=> 'MATE'
      ],
      [
          'id'=> '35735',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308011',
          'brgy_name'=> 'NEW VISAYAS'
      ],
      [
          'id'=> '35736',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308012',
          'brgy_name'=> 'PASTA'
      ],
      [
          'id'=> '35737',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308013',
          'brgy_name'=> 'PISA-AN'
      ],
      [
          'id'=> '35738',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308015',
          'brgy_name'=> 'BARANGAY 1 (POB.)'
      ],
      [
          'id'=> '35739',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308016',
          'brgy_name'=> 'BARANGAY 2 (POB.)'
      ],
      [
          'id'=> '35740',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308017',
          'brgy_name'=> 'BARANGAY 3 (POB.)'
      ],
      [
          'id'=> '35741',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308018',
          'brgy_name'=> 'BARANGAY 4 (POB.)'
      ],
      [
          'id'=> '35742',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308019',
          'brgy_name'=> 'BARANGAY 5 (POB.)'
      ],
      [
          'id'=> '35743',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308020',
          'brgy_name'=> 'RIZAL'
      ],
      [
          'id'=> '35744',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308021',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '35745',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308022',
          'brgy_name'=> 'SANTA ANA'
      ],
      [
          'id'=> '35746',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308024',
          'brgy_name'=> 'TAGAPUA'
      ],
      [
          'id'=> '35747',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308025',
          'brgy_name'=> 'BITAN-AGAN'
      ],
      [
          'id'=> '35748',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308026',
          'brgy_name'=> 'BUENASUERTE'
      ],
      [
          'id'=> '35749',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308027',
          'brgy_name'=> 'DAS-AGAN'
      ],
      [
          'id'=> '35750',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308028',
          'brgy_name'=> 'KARAUS'
      ],
      [
          'id'=> '35751',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308029',
          'brgy_name'=> 'LADGADAN'
      ],
      [
          'id'=> '35752',
          'city_id'=> '1280',
          'psgc_brgy'=> '160308030',
          'brgy_name'=> 'ORMACA'
      ],
      [
          'id'=> '35991',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816001',
          'brgy_name'=> 'BAGYANG'
      ],
      [
          'id'=> '35992',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816002',
          'brgy_name'=> 'BARAS'
      ],
      [
          'id'=> '35993',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816003',
          'brgy_name'=> 'BITAUGAN'
      ],
      [
          'id'=> '35994',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816004',
          'brgy_name'=> 'BOLHOON'
      ],
      [
          'id'=> '35995',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816005',
          'brgy_name'=> 'CALATNGAN'
      ],
      [
          'id'=> '35996',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816006',
          'brgy_name'=> 'CARROMATA'
      ],
      [
          'id'=> '35997',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816007',
          'brgy_name'=> 'CASTILLO'
      ],
      [
          'id'=> '35998',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816008',
          'brgy_name'=> 'LIBAS GUA'
      ],
      [
          'id'=> '35999',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816009',
          'brgy_name'=> 'LIBAS SUD'
      ],
      [
          'id'=> '36000',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816010',
          'brgy_name'=> 'MAGROYONG'
      ],
      [
          'id'=> '36001',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816011',
          'brgy_name'=> 'MAHAYAG (MAITUM)'
      ],
      [
          'id'=> '36002',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816012',
          'brgy_name'=> 'PATONG'
      ],
      [
          'id'=> '36003',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816013',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '36004',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816014',
          'brgy_name'=> 'SAGBAYAN'
      ],
      [
          'id'=> '36005',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816016',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '36006',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816017',
          'brgy_name'=> 'SIAGAO'
      ],
      [
          'id'=> '36007',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816018',
          'brgy_name'=> 'UMALAG'
      ],
      [
          'id'=> '36008',
          'city_id'=> '1339',
          'psgc_brgy'=> '166816019',
          'brgy_name'=> 'TINA'
      ],
      [
          'id'=> '39532',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725001',
          'brgy_name'=> 'AURORA (POB.)'
      ],
      [
          'id'=> '39533',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725002',
          'brgy_name'=> 'AZUCENA (POB.)'
      ],
      [
          'id'=> '39534',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725003',
          'brgy_name'=> 'BANBAN'
      ],
      [
          'id'=> '39535',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725004',
          'brgy_name'=> 'CAWILAN'
      ],
      [
          'id'=> '39536',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725005',
          'brgy_name'=> 'FABIO'
      ],
      [
          'id'=> '39537',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725007',
          'brgy_name'=> 'HIMAMAUG'
      ],
      [
          'id'=> '39538',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725008',
          'brgy_name'=> 'LAUREL'
      ],
      [
          'id'=> '39539',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725009',
          'brgy_name'=> 'LOWER LIBAS'
      ],
      [
          'id'=> '39540',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725010',
          'brgy_name'=> 'OPONG'
      ],
      [
          'id'=> '39541',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725011',
          'brgy_name'=> 'SAMPAGUITA (POB.)'
      ],
      [
          'id'=> '39542',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725012',
          'brgy_name'=> 'TALAVERA'
      ],
      [
          'id'=> '39543',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725013',
          'brgy_name'=> 'UNION'
      ],
      [
          'id'=> '39544',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725014',
          'brgy_name'=> 'UPPER LIBAS'
      ],
      [
          'id'=> '39545',
          'city_id'=> '1502',
          'psgc_brgy'=> '166725015',
          'brgy_name'=> 'PATINO'
      ],
      [
          'id'=> '39859',
          'city_id'=> '22',
          'psgc_brgy'=> '166803002',
          'brgy_name'=> 'BUCTO'
      ],
      [
          'id'=> '39860',
          'city_id'=> '22',
          'psgc_brgy'=> '166803003',
          'brgy_name'=> 'BURBOANAN'
      ],
      [
          'id'=> '39861',
          'city_id'=> '22',
          'psgc_brgy'=> '166803004',
          'brgy_name'=> 'SAN ROQUE (CADANGLASAN)'
      ],
      [
          'id'=> '39862',
          'city_id'=> '22',
          'psgc_brgy'=> '166803005',
          'brgy_name'=> 'CAGUYAO'
      ],
      [
          'id'=> '39863',
          'city_id'=> '22',
          'psgc_brgy'=> '166803006',
          'brgy_name'=> 'COLETO'
      ],
      [
          'id'=> '39864',
          'city_id'=> '22',
          'psgc_brgy'=> '166803007',
          'brgy_name'=> 'LABISMA'
      ],
      [
          'id'=> '39865',
          'city_id'=> '22',
          'psgc_brgy'=> '166803008',
          'brgy_name'=> 'LAWIGAN'
      ],
      [
          'id'=> '39866',
          'city_id'=> '22',
          'psgc_brgy'=> '166803009',
          'brgy_name'=> 'MANGAGOY'
      ],
      [
          'id'=> '39867',
          'city_id'=> '22',
          'psgc_brgy'=> '166803010',
          'brgy_name'=> 'MONE'
      ],
      [
          'id'=> '39868',
          'city_id'=> '22',
          'psgc_brgy'=> '166803011',
          'brgy_name'=> 'PAMAYPAYAN'
      ],
      [
          'id'=> '39869',
          'city_id'=> '22',
          'psgc_brgy'=> '166803012',
          'brgy_name'=> 'POBLACION'
      ],
      [
          'id'=> '39870',
          'city_id'=> '22',
          'psgc_brgy'=> '166803013',
          'brgy_name'=> 'SAN ANTONIO'
      ],
      [
          'id'=> '39871',
          'city_id'=> '22',
          'psgc_brgy'=> '166803014',
          'brgy_name'=> 'SAN FERNANDO'
      ],
      [
          'id'=> '39872',
          'city_id'=> '22',
          'psgc_brgy'=> '166803015',
          'brgy_name'=> 'SAN ISIDRO (BAGNAN)'
      ],
      [
          'id'=> '39873',
          'city_id'=> '22',
          'psgc_brgy'=> '166803016',
          'brgy_name'=> 'SAN JOSE'
      ],
      [
          'id'=> '39874',
          'city_id'=> '22',
          'psgc_brgy'=> '166803017',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '39875',
          'city_id'=> '22',
          'psgc_brgy'=> '166803018',
          'brgy_name'=> 'SANTA CRUZ'
      ],
      [
          'id'=> '39876',
          'city_id'=> '22',
          'psgc_brgy'=> '166803019',
          'brgy_name'=> 'SIBAROY'
      ],
      [
          'id'=> '39877',
          'city_id'=> '22',
          'psgc_brgy'=> '166803020',
          'brgy_name'=> 'TABON'
      ],
      [
          'id'=> '39878',
          'city_id'=> '22',
          'psgc_brgy'=> '166803021',
          'brgy_name'=> 'TUMANAN'
      ],
      [
          'id'=> '39879',
          'city_id'=> '22',
          'psgc_brgy'=> '166803022',
          'brgy_name'=> 'PAMANLINAN'
      ],
      [
          'id'=> '39880',
          'city_id'=> '22',
          'psgc_brgy'=> '166803023',
          'brgy_name'=> 'KAHAYAG'
      ],
      [
          'id'=> '39881',
          'city_id'=> '22',
          'psgc_brgy'=> '166803024',
          'brgy_name'=> 'MAHARLIKA'
      ],
      [
          'id'=> '39882',
          'city_id'=> '22',
          'psgc_brgy'=> '166803025',
          'brgy_name'=> 'COMAWAS'
      ],
      [
          'id'=> '40266',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727001',
          'brgy_name'=> 'CAPAYAHAN'
      ],
      [
          'id'=> '40267',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727002',
          'brgy_name'=> 'CAWILAN'
      ],
      [
          'id'=> '40268',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727003',
          'brgy_name'=> 'DEL ROSARIO'
      ],
      [
          'id'=> '40269',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727004',
          'brgy_name'=> 'MARGA'
      ],
      [
          'id'=> '40270',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727005',
          'brgy_name'=> 'MOTORPOOL'
      ],
      [
          'id'=> '40271',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727006',
          'brgy_name'=> 'POBLACION (TUBOD)'
      ],
      [
          'id'=> '40272',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727007',
          'brgy_name'=> 'SAN ISIDRO'
      ],
      [
          'id'=> '40273',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727008',
          'brgy_name'=> 'TIMAMANA'
      ],
      [
          'id'=> '40274',
          'city_id'=> '1581',
          'psgc_brgy'=> '166727009',
          'brgy_name'=> 'SAN PABLO'
      ],
      [
          'id'=> '40275',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721001',
          'brgy_name'=> 'ABAD SANTOS'
      ],
      [
          'id'=> '40276',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721002',
          'brgy_name'=> 'ALEGRIA'
      ],
      [
          'id'=> '40277',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721003',
          'brgy_name'=> 'T. ARLAN (POB.)'
      ],
      [
          'id'=> '40278',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721004',
          'brgy_name'=> 'BAILAN'
      ],
      [
          'id'=> '40279',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721005',
          'brgy_name'=> 'GARCIA'
      ],
      [
          'id'=> '40280',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721006',
          'brgy_name'=> 'LIBERTAD'
      ],
      [
          'id'=> '40281',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721007',
          'brgy_name'=> 'MABINI'
      ],
      [
          'id'=> '40282',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721008',
          'brgy_name'=> 'MABUHAY (POB.)'
      ],
      [
          'id'=> '40283',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721009',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '40284',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721010',
          'brgy_name'=> 'RIZAL'
      ],
      [
          'id'=> '40285',
          'city_id'=> '1398',
          'psgc_brgy'=> '166721012',
          'brgy_name'=> 'TANGBO'
      ],
      [
          'id'=> '41279',
          'city_id'=> '883',
          'psgc_brgy'=> '166813001',
          'brgy_name'=> 'BAGSAC'
      ],
      [
          'id'=> '41280',
          'city_id'=> '883',
          'psgc_brgy'=> '166813002',
          'brgy_name'=> 'BAYOGO'
      ],
      [
          'id'=> '41281',
          'city_id'=> '883',
          'psgc_brgy'=> '166813003',
          'brgy_name'=> 'MAGSAYSAY'
      ],
      [
          'id'=> '41282',
          'city_id'=> '883',
          'psgc_brgy'=> '166813004',
          'brgy_name'=> 'MANGA'
      ],
      [
          'id'=> '41283',
          'city_id'=> '883',
          'psgc_brgy'=> '166813005',
          'brgy_name'=> 'PANAYOGON'
      ],
      [
          'id'=> '41284',
          'city_id'=> '883',
          'psgc_brgy'=> '166813006',
          'brgy_name'=> 'PATONG PATONG'
      ],
      [
          'id'=> '41285',
          'city_id'=> '883',
          'psgc_brgy'=> '166813007',
          'brgy_name'=> 'QUIRINO (POB.)'
      ],
      [
          'id'=> '41286',
          'city_id'=> '883',
          'psgc_brgy'=> '166813008',
          'brgy_name'=> 'SAN ANTONIO'
      ],
      [
          'id'=> '41287',
          'city_id'=> '883',
          'psgc_brgy'=> '166813009',
          'brgy_name'=> 'SAN JUAN'
      ],
      [
          'id'=> '41288',
          'city_id'=> '883',
          'psgc_brgy'=> '166813010',
          'brgy_name'=> 'SAN ROQUE'
      ],
      [
          'id'=> '41289',
          'city_id'=> '883',
          'psgc_brgy'=> '166813011',
          'brgy_name'=> 'SAN VICENTE'
      ],
      [
          'id'=> '41290',
          'city_id'=> '883',
          'psgc_brgy'=> '166813012',
          'brgy_name'=> 'SONGKIT'
      ],
      [
          'id'=> '41291',
          'city_id'=> '883',
          'psgc_brgy'=> '166813013',
          'brgy_name'=> 'UNION'
      ],
      [
          'id'=> '41292',
          'city_id'=> '883',
          'psgc_brgy'=> '166813014',
          'brgy_name'=> 'LINIBONAN'
      ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brgys = $this->brgys;
        foreach ($brgys as $key => $data) {
            Barangay::create($data);
        }
    }
}
