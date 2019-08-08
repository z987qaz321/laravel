<?php

namespace Database\Seeder\Base;

use App\Model\Judge;
use Illuminate\Database\Seeder;

class JudgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createJudge(32,'評審1','JD1@gmail.com','0911-111111');
        $this->createJudge(33,'評審2','JD2@gmail.com','0922-222222');
        $this->createJudge(34,'評審3','JD3@gmail.com','0933-333333');
        $this->createJudge(35,'評審4','JD4@gmail.com','0944-444444');
        $this->createJudge(36,'評審5','JD5@gmail.com','0955-555555');
    }

    public function createJudge($accountId, $name, $email, $phone)
    {
        return Judge::create([
            'accounts_id' => $accountId,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        ]);
    }
}
