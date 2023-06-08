<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
Class UserController extends Controller {
use ApiResponser;

private $request;
public function __construct(Request $request){
    $this->request = $request;
}

public function getAllUsers(){
    $users = User::all();
    return response()->json($users, 200);
}


public function index()
{

    $users = User::all();
    return $this->successResponse($users);

}
// ADD
public function add(Request $request ){

$rules = [
    'username' => 'required|max:150',
    'password' => 'required|max:150',
    'jobId' => 'required| numeric|min:1|not_in:0',
];

$this->validate($request,$rules);
$userjob = Job::findOrFail($request->jobId);

$user = User::create($request->all());

return $this->successResponse($user);
}

public function show($id)
{
$user = User::findOrFail($id);
return $this->successResponse($user);

}

public function update(Request $request,$id)
{
    $rules = [
        'username' => 'required|max:150',
        'password' => 'required|max:150',
        'jobId' => 'required| numeric|min:1|not_in:0',
    ];
    
    $this->validate($request,$rules);
    $userjob = Job::findOrFail($request->jobId);
$user = User::findOrFail($id);
$user->fill($request->all());

// if no changes happen
if ($user->isClean()) {
return $this->errorResponse('At least one value must
change', Response::HTTP_UNPROCESSABLE_ENTITY);
}
$user->save();
return $this->successResponse($user);

}

public function delete($id){

$user = User::findOrFail($id);
$user->delete();

return $this->successResponse($user);

}

}
