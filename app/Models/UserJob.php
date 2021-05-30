<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class UserJob extends Model  {

 protected $table = 'tbluserjob';

 protected $fillable = [ 'jobid', 'jobname'];

 protected $primaryKey = 'jobid';
 public $timestamps = false;


}