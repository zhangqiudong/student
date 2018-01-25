@extends('master')
@section('title')
    学生成绩管理系统
@stop

@section('content')

    <div class="line_row"></div>
    <div class="location"><span>当前位置：</span><a href="/">首页</a>->学校通知 </div>
    <div class="news_list" style="padding-left: 50px;">
        <ul>
            @for ($i = 0; $i < count($news); $i++)
                <li><a href="/news/{{ $news[$i]->id }}/detail">({{$i+1}}).{{$news[$i]->title}}<span>{{$news[$i]->created_at}}</span></a> </li>
            @endfor
        </ul>
    </div>
@stop