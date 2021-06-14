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
    public function execute($id, $url)
    {
        $user = auth()->user()->id;
        $arr = array('luser' => $user, 'lpage' => 'List_po' , 'lurl' => $url, 'laction' => 'delete');
        $createLogs = createLogs($arr);

        $po = Procurement::destroy($id);
        return $po;
    }
}
