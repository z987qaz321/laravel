<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'processes';
    protected $primaryKey = 'processes_id';

    protected $fillable = ['title','content'];
}
