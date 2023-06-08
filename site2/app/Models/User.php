<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'player';
protected $primaryKey = 'playerId';
public $timestamps = false;
// column sa table

protected $fillable = [
    'fullname', 'location', 'roleId'
];
}