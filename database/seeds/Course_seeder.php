<?php

use Illuminate\Database\Seeder;
use App\Course;
class Course_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'school' =>'城西小学',
            'grade'    =>'2年纪',
            'class'    => '1班',
            'first_course'    => '美术',
            'second_course'    => '英语',
            'third_course'    =>'历史' ,
            'fourth_course'    => '政治',
            'fifth_course'    => '体育',
            'sixth_course'    =>'语文',
            'seventh_course'    => '自然',
            'eight_course'    => '数学',
            'ninth_course'    => '',
            'tenth_course'    =>'' ,
            'eleventh_course'    =>'' ,
            'twelfth_course'    =>'' ,
        ]);
        Course::create([
            'school' =>'城西小学',
            'grade'    =>'2年纪',
            'class'    => '2班',
            'first_course'    => '数学',
            'second_course'    => '英语',
            'third_course'    =>'美术' ,
            'fourth_course'    => '自然',
            'fifth_course'    => '体育',
            'sixth_course'    =>'语文',
            'seventh_course'    => '政治',
            'eight_course'    => '历史',
            'ninth_course'    => '',
            'tenth_course'    =>'' ,
            'eleventh_course'    =>'' ,
            'twelfth_course'    =>'' ,
        ]);
    }
}
