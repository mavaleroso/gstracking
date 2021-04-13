<?php
namespace App\Services\Po;

use App\Models\Procurement;

class DeletePo
{
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($id)
    {
        $po = Procurement::destroy($id);
        return $po;
    }
}
