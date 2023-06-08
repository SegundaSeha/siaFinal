<?php
namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
Class JobController extends Controller {
use ApiResponser;

private $request;
public function __construct(Request $request){
    $this->request = $request;
}

public function index()
{

    $users = Job::all();
    return $this->successResponse($users);

}
// ADD


public function show($id)
{
$user = Job::findOrFail($id);
return $this->successResponse($user);

}

}