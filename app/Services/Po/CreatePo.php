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
    public function execute($fields)
    {

        $data = Procurement::create([
            'po_no' => $fields['po_no'],
            'po_amount' => $fields['po_amount'],
            'balance' => $fields['balance'],
            'status' => $fields['status'],
        ]);

        return $data;
    }

}   