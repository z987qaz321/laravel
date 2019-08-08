<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Team;
use App\Model\Teacher;

class Retest extends Model
{
    protected $table = 'retests';
    protected $primaryKey = 'retests_id';

    protected $fillable = ['teams_id','judges_id','score_creative','score_present','score_clothing','comment','suggest'];

    public function teams()
    {
        return $this->hasMany(Team::class, 'teams_id', 'retests_id');
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'teachers_id', 'retests_id');
    }
}
