@extends('master')
@section('title')
学生成绩管理系统
@stop

@section('content')

@include('nav')
<div class="line_row"></div>
<div class="location"><span>当前位置：</span><a href="/">首页</a>->教育新闻 </div>
<div class="news_list" style="padding-left: 50px;">
    <ul>
        @for ($i = 0; $i < count($infos); $i++)
        <li><a href="/infos/{{ $infos[$i]->id }}/detail">({{$i+1}}).{{$infos[$i]->title}}<span>{{$infos[$i]->created_at}}</span></a> </li>
        @endfor
    </ul>
</div>
@stop