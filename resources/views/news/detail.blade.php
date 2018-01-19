@extends('master')
@section('title')
    学生成绩管理系统
@stop

@section('content')

    @include('nav')
    <div class="line_row"></div>
    <div class="location"><span>当前位置：</span><a href="/">首页</a>-><a href="/news/list">学校通知</a>->内容</div>
    <div class="news_list" style="padding-left: 50px;">

        @foreach ($news as $news)

                {{$news->content}}

        @endforeach

    </div>
@stop