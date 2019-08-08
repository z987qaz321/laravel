<?php

use Database\Seeder\Base\AccountTableSeeder;
use Database\Seeder\Base\JudgeTableSeeder;
use Database\Seeder\Base\TeacherTableSeeder;
use Database\Seeder\Base\TeamTableSeeder;
use Database\Seeder\Base\ProcessTableSeeder;
use Database\Seeder\Base\FirstTestTableSeeder;
use Database\Seeder\Base\RetestTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountTableSeeder::class);
        $this->call(JudgeTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(ProcessTableSeeder::class);
        $this->call(FirstTestTableSeeder::class);
        $this->call(RetestTableSeeder::class);
    }
}
