<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Account;
use App\Model\Teacher;
use App\Model\FirstTest;
use App\Model\Retest;

class Team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'teams_id';

    protected $fillable = [
        'accounts_id',
        'teachers_id',
        'team_num',
        'team_name',
        'team_field',
        'team_category',
        'education',
        'class',
        'member',
        'word',
        'ppt',
        'poster',
        'vidoe',
        'website',
    ];

    public function account()
    {
        return $this->hasOne(Account::class, 'accounts_id', 'teams_id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'teachers_id', 'teams_id');
    }

    public function firstTest()
    {
        return $this->belongsTo(FirstTest::class, 'teams_id');
    }

    public function retest()
    {
        return $this->belongsTo(Retest::class, 'teams_id');
    }
}
