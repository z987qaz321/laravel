<?php

namespace Database\Seeder\Base;

use App\Model\Teacher;
use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTeacher(27,'教師1','TC1@gmail.com','0911-111111');
        $this->createTeacher(28,'教師2','TC2@gmail.com','0922-222222');
        $this->createTeacher(29,'教師3','TC3@gmail.com','0933-333333');
        $this->createTeacher(30,'教師4','TC4@gmail.com','0944-444444');
        $this->createTeacher(31,'教師5','TC5@gmail.com','0955-555555');
    }

    public function createTeacher($accountId, $name, $email, $phone)
    {
        return Teacher::create([
            'accounts_id' => $accountId,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        ]);
    }
}
