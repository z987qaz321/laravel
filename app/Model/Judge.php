<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Account;
use App\Model\FirstTest;

class Judge extends Model
{
    protected $table = 'judges';
    protected $primaryKey = 'judges_id';

    protected $fillable = ['accounts_id','name','email','phone'];

    public function account()
    {
        return $this->hasOne(Account::class, 'accounts_id', 'judges_id');
    }

    public function firstTest()
    {
        return $this->belongsTo(FirstTest::class, 'judges_id');
    }
}
