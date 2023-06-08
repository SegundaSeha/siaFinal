<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Job extends Model{
protected $table = 'usejob';
protected $primaryKey = 'jobId';
public $timestamps = false;
// column sa table

protected $fillable = [
    'jobname'
];
}