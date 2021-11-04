<?php
namespace App\Services\Po;

use Illuminate\Http\Request;
use App\Models\Procurement;

class UpdatePo 
{
    /**
     * Get user by email
     *
     * @param string $email
     */
    public function execute($id, $fields, $url)
    {
        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'List_po' , 'lurl' => $url, 'laction' => 'edit');
        $createLogs = createLogs($arr);

        $po = Procurement::find($id);
        $po->update([
            'po_amount' => $fields['po_amount'],
            'status' => $fields['status'],
        ]);

        return $po;
    }

}   