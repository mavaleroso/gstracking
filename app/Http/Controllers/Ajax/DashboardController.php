<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Request;
use App\Models\Transaction;
use App\Models\Procurement;
use App\Models\Division;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['overview'] = Request::select('is_status',DB::raw('COUNT(is_status) AS count_status'))
                                    ->where(DB::raw('YEAR(travel_date)'),'=',$id)
                                    ->groupBy('is_status')
                                    ->get();

        $data['travel'] = Request::select(DB::raw('MONTHNAME(travel_date) AS travel_month'), DB::raw('COUNT(MONTH(travel_date)) AS travel_count'))
                                ->where(DB::raw('YEAR(travel_date)'),'=',$id)
                                ->where('is_status', '=', '2')
                                ->groupBy(DB::raw('MONTHNAME(travel_date)'))
                                ->get();

        $data['procurement'] =  Procurement::leftJoin('transactions','procurements.id','=','transactions.procurement_id')
                                            ->select(['procurements.*', DB::raw('(procurements.po_amount - SUM(transactions.total_cost)) as totalBalance')]
                                            )->groupBy('procurements.id','procurements.po_no')
                                            ->get();

        $data['activities']['upcoming'] = Transaction::leftJoin('requests', 'transactions.request_id','=','requests.id')
                                                        ->select('transactions.trip_ticket','requests.travel_date','requests.purpose')
                                                        ->where(DB::raw('YEAR(travel_date)'),'=',$id)
                                                        ->where('requests.is_status','=','2')
                                                        ->groupBy('transactions.trip_ticket','requests.id')
                                                        ->orderBy('requests.travel_date', 'ASC')
                                                        ->LIMIT(10)
                                                        ->get();

        $data['activities']['recent'] = Transaction::leftJoin('requests', 'transactions.request_id','=','requests.id')
                                                    ->select('transactions.trip_ticket','requests.travel_date','requests.purpose')
                                                    ->where(DB::raw('YEAR(travel_date)'),'=',$id)
                                                    ->where('requests.is_status','=','3')
                                                    ->groupBy('transactions.trip_ticket','requests.id')
                                                    ->orderBy('requests.travel_date', 'DESC')
                                                    ->LIMIT(10)
                                                    ->get();

        $data['division'] = Transaction::select('divisions.division_code', DB::raw('COUNT(divisions.id) as div_count'))
                                        ->leftJoin('requests','transactions.request_id','=','requests.id')
                                        ->leftJoin('divisions','requests.division_id','=','divisions.id')
                                        ->whereIn('requests.is_status',[2,3])->groupBy('requests.division_id')
                                        ->where(DB::raw('YEAR(travel_date)'),'=',$id)
                                        ->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
