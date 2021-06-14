<?php
namespace App\Services\Po;

use Illuminate\Http\Request;
use App\Models\Procurement;

class CreatePo 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($fields, $url)
    {

        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'List_po' , 'lurl' => $url, 'laction' => 'create');
        $createLogs = createLogs($arr);

        $data = Procurement::create([
            'po_no' => $fields['po_no'],
            'po_amount' => $fields['po_amount'],
            'status' => $fields['status'],
            'type' => $fields['type'],
        ]);

        return $data;
    }

}   