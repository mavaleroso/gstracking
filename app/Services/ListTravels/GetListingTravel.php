<?php
namespace App\Services\ListTravels;

use Ccore\Core\Datatable;
use Illuminate\Http\Request;
use App\Models\TransactionVehicles;
use Illuminate\Support\Facades\DB;

class GetListingTravel
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($fields)
    {
        $results = [];
        $query = TransactionVehicles::leftJoin('requests', 'transaction_vehicles.request_id', '=', 'requests.id')
                        ->leftJoin('vehicles', 'vehicles.id', '=', 'transaction_vehicles.vehicle_id')
                        ->leftJoin('divisions', 'requests.division_id', '=', 'divisions.id')
                        ->leftJoin('sections', 'requests.section_id', '=', 'sections.id')
                        ->leftJoin('procurements', 'transaction_vehicles.procurement_id', '=', 'procurements.id')
                        ->leftJoin('destinations', 'requests.id', '=', 'destinations.request_id')
                        ->leftJoin('lib_cities', 'destinations.city_id', 'lib_cities.id')
                        ->leftJoin('lib_provinces', 'destinations.province_id', 'lib_provinces.id')
                        ->select(['transaction_vehicles.id','requests.serial_code', 'transaction_vehicles.trip_ticket', 'requests.travel_date', 'requests.return_date', 'transaction_vehicles.starting_odo','transaction_vehicles.ending_odo','transaction_vehicles.date_submit_proc','transaction_vehicles.travelled','procurements.po_no','procurements.po_amount','transaction_vehicles.rate_per_km', 'transaction_vehicles.fuel_charge', 'transaction_vehicles.fuel_liters','transaction_vehicles.flat_rate','transaction_vehicles.rate_per_night','transaction_vehicles.nights_count','transaction_vehicles.total_cost','transaction_vehicles.created_at', 'requests.is_status','transaction_vehicles.remarks', 'divisions.division_code', 'sections.section_code', 'transaction_vehicles.type as vehicle_type', 'vehicles.plate_no', 'requests.purpose','transaction_vehicles.status', DB::raw('GROUP_CONCAT(CONCAT(lib_cities.city_name, "(", lib_provinces.province_code, ")") SEPARATOR ", ") as destined')])
                        ->groupBy('transaction_vehicles.id')
                        ->paginate(10, ['*'], 'page', $fields['pages']);
                        
        for ($i=0; $i < count($query); $i++) { 
            $results['data'][] = [
                'tracking_no' => $this->api($query[$i]->requests),
            ];
        }
        $results['results'] = $query;
        $results['count'] = count(RequestTransactions::groupBy('group')->get());

        return $results;
    }

    public function api($requests)
    {
        $tracking = [];
        $req = explode(',',$requests);

        $portal_token = System::where('handler', 'PORTAL_TOKEN')->pluck('value')->first();

        for ($i=0; $i < count($req); $i++) { 
            $curl = curl_init();
        
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://caraga-portal.dswd.gov.ph/api/travel/details?travel_id='.$req[$i],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: '.$portal_token,
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            if(header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404)) {
                $tracking[] = 'Error 404';
            } else {
                try {
                    $tracking[] = json_decode($response)[0];
                } catch (\Throwable $th) {
                    $tracking[] = json_decode($response);
                }
            }
        }
        
        return $tracking;
    }

           // if ($fields['division']){
        //     $query->where('requests.division_id', 'like' , '%'.$fields['division'].'%');
        // }
        // if ($fields['section']){
        //     $query->where('requests.section_id', 'like' , '%'.$fields['section'].'%');
        // }
        // if ($fields['tripTicket']){
        //     $query->where('transaction_vehicles.trip_ticket', 'like' , '%'.$fields['tripTicket'].'%');
        // }
        // if ($fields['dateTravel']){
        //     $query->where('requests.travel_date', 'like' , '%'.$fields['dateTravel'].'%');
        // }
        // if ($fields['procurementSub']){
        //     $query->where('transaction_vehicles.date_submit_proc', 'like' , '%'.$fields['procurementSub'].'%');
        // }
        // if ($fields['distanceTravelled']){
        //     $query->where('transaction_vehicles.travelled', 'like' , '%'.$fields['distanceTravelled'].'%');
        // }
        // if ($fields['poNumber']){
        //     $query->where('procurements.po_no', 'like' , '%'.$fields['poNumber'].'%');
        // }
        // if ($fields['poAmount']){
        //     $query->where('procurements.po_amount', 'like' , '%'.$fields['poAmount'].'%');
        // }
        // if ($fields['rateperKm']){
        //     $query->where('transaction_vehicles.rate_per_km', 'like' , '%'.$fields['rateperKm'].'%');
        // }
        // if ($fields['flatRate']){
        //     $query->where('transaction_vehicles.flat_rate', 'like' , '%'.$fields['flatRate'].'%');
        // }
        // if ($fields['rateperNight']){
        //     $query->where('transaction_vehicles.rate_per_night', 'like' , '%'.$fields['rateperNight'].'%');
        // }
        // if ($fields['numberofNights']){
        //     $query->where('transaction_vehicles.nights_count', 'like' , '%'.$fields['numberofNights'].'%');
        // }
        // if ($fields['vehicleTemplate']){
        //     $query->where('vehicles.plate_no', 'like' , '%'.$fields['vehicleTemplate'].'%');
        // }

        // $result = Datatable::of($query, request(), [
        //     'searchable' => [
        //         'trip_ticket',
        //         'travel_date',
        //         'starting_odo',
        //         'ending_odo',
        //         'date_submit_proc',
        //         'travelled',
        //         'po_no',
        //         'po_amount',
        //         'rate_per_km',
        //         'flat_rate',
        //         'rate_per_night',
        //         'total_cost',
        //         'division_code',
        //         'purpose',
        //         'plate_no',
        //         'return_date',
        //         'serial_code',
        //     ],
        //     'orderable' => [
        //         'id',
        //         'trip_ticket',
        //         'travel_date',
        //         'starting_odo',
        //         'ending_odo',
        //         'date_submit_proc',
        //         'travelled',
        //         'po_no',
        //         'po_amount',
        //         'rate_per_km',
        //         'flat_rate',
        //         'rate_per_night',
        //         'total_cost',
        //         'status',
        //         'division_code',
        //         'purpose',
        //         'plate_no',
        //         'vehicle_type',
        //         'return_date',
        //         'serial_code',
        //     ]
        // ]);

        // $records = $result['query']->get();

        // return [
        //     'data' => $records,
        //     'draw' => intval(request()->draw),
        //     'recordsTotal' => $result['total'],
        //     'recordsFiltered' => $result['total']
        // ];
}   