<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Team;
use App\Model\Teacher;
use App\Model\Judge;

class Account extends Authenticatable
{
    const TYPE_ADMIN = '0';
    const TYPE_TEAM = '1';
    const TYPE_TEACHER = '2';
    const TYPE_JUDGE = '3';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'accounts';
    protected $primaryKey = 'accounts_id';

    protected $fillable = ['account','password','identity'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function teams(){
        return $this->belongsTo(Team::class,'accounts_id');
    }

    public function teachers(){
        return $this->belongsTo(Teacher::class,'accounts_id');
    }

    public function judges(){
        return $this->belongsTo(Judge::class,'accounts_id');
    }
}
