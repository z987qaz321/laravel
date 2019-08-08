<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Judge;
use App\Model\Team;

class FirstTest extends Model
{
    protected $table = 'first_tests';
    protected $primaryKey = 'first_tests_id';

    protected $fillable = ['teams_id','judges_id','score_system','score_ppt','comment','suggest'];

    public function teams()
    {
        return $this->hasMany(Team::class, 'teams_id', 'first_tests_id');
    }

    public function judges()
    {
        return $this->hasMany(Judges::class, 'judges_id', 'first_tests_id');
    }
}
