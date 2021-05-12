<?php
namespace App\Services\ListRequests;

use Illuminate\Support\Facades\DB;
use App\Models\Request;

class GetRequestById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        $req = Request::leftJoin('users_details', 'requests.user_id', '=', 'users_details.user_id')
                        ->leftJoin('divisions', 'requests.division_id','=','divisions.id')
                        ->leftJoin('sections', 'requests.section_id','=','sections.id')
                        ->select(['requests.*', 'divisions.*', 'sections.*', DB::raw('CONCAT(users_details.first_name," ",users_details.last_name) AS fullname'), DB::raw('CONCAT(divisions.division_code, ", ", sections.section_code) AS department')])
                        ->where('requests.id', $id)->get();
        return $req;
    }
}
    