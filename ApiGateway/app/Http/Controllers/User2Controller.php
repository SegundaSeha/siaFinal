<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;
use App\Services\User2Service;

Class User2Controller extends Controller {

use ApiResponser;

public $user2Service;

public function __construct(user2Service $user2Service){ $this->user2Service = $user2Service;

}

public function index()
{
//
return $this->successResponse($this->user2Service->obtainUser2());
}

public function add(Request $request ){
  return $this->successResponse($this->user2Service->createUser2($request->all()));

}

public function show($id)
{
return $this->successResponse($this->user2Service->obtainsUser2($id));
}

public function update(Request $request,$id)
{
return $this->successResponse($this->user2Service->editUser2($request->all(),
$id));
}

public function delete($id)
{
return $this->successResponse($this->user2Service->deleteUser2($id));
}

}
