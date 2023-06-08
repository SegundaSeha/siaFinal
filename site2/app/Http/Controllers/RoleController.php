<?php
namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

Class RoleController extends Controller {

use ApiResponser;

private $request;
public function __construct(Request $request){
    $this->request = $request;
}



public function index()
{

    $users = Role::all();
    return $this->successResponse($users);

}
// ADD


public function show($id)
{

$user = Role::findOrFail($id);
return $this->successResponse($user);

}


}
