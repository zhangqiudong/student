@extends('master')
@section('title')
    优秀作文展示
@stop
@section('content')

    <div class="line_row"></div>
    {{--<div class="location"><span>当前位置：</span><a href="/">首页</a>->学校通知 </div>--}}

    <div class="t_m pb16">
        <div class="t_m_z">
            <div class="t_lb_t"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/youxiuzuowen/">优秀作文</a>&nbsp;&gt;&nbsp;<a href="/youxiuzuowen/wodezuowen/">原创作文</a></div>
        </div>
        <div class="t_auto pb16" id="Mhead2_0" style="display: block;">
            <dl class="txt_box">
                @foreach ($compositions as $composition)
                <dd>
                    <a href="/youxiuzuowen/{{ $composition->id }}" target="_blank" title="{{ $composition->title }}">{{ $composition->title }}</a>
                    <span>{{ $composition->authorName }}</span>
                    <span>点击:3160</span>
                    <span class="star5"></span>
                </dd>
                @endforeach
                    {{--<dd>--}}
                    {{--<a href="/youxiuzuowen/wodezuowen/2010-07-12/3849.html" target="_blank" title="竞选班长发言稿">竞选班长发言</a>--}}
                    {{--<span>作者:ヅ凝?雪?じ</span>--}}
                    {{--<span>点击:2944</span>--}}
                    {{--<span class="star0"></span>--}}
                {{--</dd>--}}
            </dl>
        </div>
    </div>

@stop