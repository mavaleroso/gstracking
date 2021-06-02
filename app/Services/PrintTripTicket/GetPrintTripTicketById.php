<?php
namespace App\Services\PrintTripTicket;

use App\Models\TransactionVehicles;
use App\Models\Destination;
use Illuminate\Support\Facades\DB;

class GetPrintTripTicketById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        $data['travel'] = TransactionVehicles::select(['requests.serial_code','requests.purpose',DB::raw('CONCAT(divisions.division_code," ", sections.section_code) as department'),'requests.travel_date','requests.return_date','requests.depart_time','requests.is_status'])
                                    ->leftJoin('requests', 'requests.id', '=', 'transaction_vehicles.request_id')
                                    ->leftJoin('divisions','requests.division_id','=','divisions.id')   
                                    ->leftJoin('sections','requests.section_id','=','sections.id')
                                    ->leftJoin('destinations','destinations.id','=','requests.id')
                                    ->where('requests.id',$id)
                                    ->groupBy('requests.id')
                                    ->get();

        $data['destinations'] = 


        return $data;        
    }
}
