<?php

use Illuminate\Database\Seeder;
use App\Grade;
class grades_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'user_id' => 1210311232,
            'math'    => 99,
            'english'    => 80,
            'c'    => 96,
            'sport'    => 95,
            'think'    => 99,
            'soft'    => 98,
        ]);

        Grade::create([
            'user_id' => 1210311233,
        ]);
    }
}
