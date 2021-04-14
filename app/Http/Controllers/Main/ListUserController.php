<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Base\BaseController as Controller;
use Illuminate\Http\Request;
use App\Services\Tracking\CreateServiceProvider;
use App\Services\Tracking\UpdateRoles;
use App\Services\Tracking\GetListingServiceProvider;
use App\Models\UserDetail;
use App\Models\User;

class ListUserController extends Controller
{
    /**
     * Initialization
     */
    public function __construct()
    {
        parent::__construct();
        // permissions
        $this->middleware('permission:listuser-list', ['only' => ['index']]);
        $this->middleware('permission:listuser-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:listuser-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:listuser-delete', ['only' => ['destroy']]);
        $this->middleware('permission:listuser-view', ['only' => ['show']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(UserDetail::leftJoin('users','users_details.user_id','=','users.id')->leftJoin('roles','users.roles_id','=','roles.id')
        ->select(['users_details.*' , "roles.name AS role_name"])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::leftJoin('users_details','users_details.user_id','=','users.id')->where('users.id', $id)->get();
        return response()->json($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UpdateRoles $updateRoles , $id)
    {
        $result = $updateRoles->execute($id, $request);
        return json_encode(['type' => 'success','message' => __('main/notifications.user_roles_updated_successfully'), 'result' => $result]);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = ServiceProvider::destroy($id);
        return json_encode(['type' => 'success','message' => __('main/notifications.serviceProvider_deleted_successfully'), 'result' => $result]);
    }
}
