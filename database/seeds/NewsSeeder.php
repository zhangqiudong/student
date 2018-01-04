<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' =>'关于城西小学寒假放假通知',
            'author' => '教务处',
            'link' => '',
            'date'=>'2017-12-25',
            'content'=>'放假时间是：2017年1月6号——2018年3月1日，请同学们按时返校！',

        ]);
        News::create([
            'title' =>'期末考试成绩查看通知(2017年)',
            'author' => '教务处',
            'link' => '',
            'date'=>'2017-12-25',
            'content'=>'放假时间是：2017年1月6号——2018年3月1日，请同学们按时返校！',

        ]);
    }
}
