<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Account;
use App\Model\Team;
use App\Model\Retest;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'teachers_id';

    protected $fillable = ['accounts_id','name','email','phone'];

    public function account()
    {
        return $this->hasOne(Account::class, 'accounts_id', 'teachers_id');
    }

    public function teams()
    {
        return $this->belongsTo(Team::class, 'teachers_id');
    }

    public function retest()
    {
        return $this->belongsTo(Retest::class, 'teachers_id');
    }
}
