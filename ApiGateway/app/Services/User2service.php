<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User2service{
use ConsumesExternalService;

public $baseUri;


public function __construct()
{
 $this->baseUri = config('services.database2.base_uri');
}

public function obtainUser2()
{
return $this->performRequest('GET','/player');
}

public function createUser2($data)
{
return $this->performRequest('POST', '/player',$data);
}

public function obtainsUser2($id)
{
return $this->performRequest('GET', "/player/{$id}");
}

public function editUser2($data, $id)
{
return $this->performRequest('PUT',"/player/{$id}", $data);
} 

public function deleteUser2($id)
{
return $this->performRequest('DELETE', "/player/{$id}");
}
}