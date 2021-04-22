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
    public function execute($id, $fields)
    {

        $po = Procurement::find($id);
        $po->update([
            'po_amount' => $fields['po_amount'],
            'status' => $fields['status'],
        ]);

        return $po;
    }

}   