@extends('master')
@section('title')
    地理知识
@stop
@section('content')

    <div class="line_row"></div>
    <div class="t_m pb16">
        <div class="t_m_z">
            <div class="t_lb_t"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/baikequanshu/">百科全书</a>&nbsp;&gt;&nbsp;<a href="/baikequanshu/tianwendili/">天文地理</a>&nbsp;&gt;&nbsp;<a href="/baikequanshu/tianwendili/dilizhishi/">地理知识</a></div>

        </div>
        <div class="t_auto pb16" id="Mhead2_0" style="display: block;">
            <dl class="txt_box">

                    @for ($i = 0; $i < count($items); $i++)
                        <dd>
                            <a href="/baike/geography/{{ $items[$i]->id }}/detail" target="_blank" title="{{ $items[$i]->title }}">{{$i+1}}.{{ $items[$i]->title }}</a>
                            <span>{{ $items[$i]->date }}</span>
                            <span></span>
                        </dd>
                    @endfor

            </dl>
        </div>
        <div class="h6"></div>
        {{--<div class="t_fy"><span>1</span><a href="/baikequanshu/tianwendili/dilizhishi/index_2.html" class="c_page">2</a><a href="/baikequanshu/tianwendili/dilizhishi/index_3.html" class="c_page">3</a><a href="/baikequanshu/tianwendili/dilizhishi/index_4.html" class="c_page">4</a><a href="/baikequanshu/tianwendili/dilizhishi/index_5.html" class="c_page">5</a><a href="/baikequanshu/tianwendili/dilizhishi/index_6.html" class="c_page">6</a><a href="/baikequanshu/tianwendili/dilizhishi/index_7.html" class="c_page">7</a>&nbsp;<a href="/baikequanshu/tianwendili/dilizhishi/index_2.html" class="nextpage">下一页</a></div>--}}
    </div>
    @stop