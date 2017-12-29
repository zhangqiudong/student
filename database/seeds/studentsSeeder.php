<?php

use Illuminate\Database\Seeder;
use App\student;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        DB::table('students')->delete();

        student::create([
            'id' => 1210311232,
            'name' => '李锐',
            'password' => Hash::make('1210311232')
        ]);

        student::create([
            'id' => 1210311233,
            'name' => '陈曦',
            'password' => Hash::make('1210311233')
        ]);

        student::create([
            'id' => 1234567890,
            'name' => '管理员',
            'password' => Hash::make('root'),
            'is_admin' => 1
        ]);


    }
}
