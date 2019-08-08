<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $table = 'awards';
    protected $primaryKey = 'awards_id';

    protected $fillable = ['filename','year'];
}
