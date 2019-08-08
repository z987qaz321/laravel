<?php

namespace Database\Seeder\Base;

use App\Model\Process;
use Illuminate\Database\Seeder;

class ProcessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createProcess('108學年度專題展流程','流程內容');
    }

    public function createProcess($title, $content)
    {
        return Process::create([
            'title' => $title,
            'content' => $content,
        ]);
    }
}
