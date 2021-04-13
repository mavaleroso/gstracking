<?php
namespace App\Services\Po;

use App\Models\Procurement;

class GetPoById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\Transaction
     */
    public function execute(int $id)
    {
        
        $po = Procurement::find($id)->get();
        return $po;
    }
}
