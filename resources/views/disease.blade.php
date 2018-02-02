@extends('master')
@section('title')
    儿童健康——{{ $items[0]->category }}
@stop
@section('content')

    <div class="line_row"></div>

    <div class="t_m pb16">
        <div class="t_m_z">
            <div class="t_lb_t"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/">儿童健康</a>&nbsp;&gt;&nbsp;<a href="/ertongjiankang/huxixitong/">{{ $items[0]->category }}</a></div>
        </div>
        <div class="t_auto pb16" id="Mhead2_0" style="display: block;">
            <dl class="txt_box">
                @for ($i = 0; $i < count($items); $i++)
                    <dd>
                        <a href="/health/{{ $items[0]->category }}/{{ $items[$i]->id }}/instruction" target="_blank" title="{{ $items[$i]->title }}">{{$i+1}}.{{ $items[$i]->title }}</a>
                        <span>{{ $items[$i]->date }}</span>
                        <span></span>
                    </dd>
                @endfor
                    </dl>
        </div>
        <div class="h6"></div>
        <div class="t_fy"><span>1</span><a href="/shiwangeweishime/qimiaoderenti/index_2.html" class="c_page">2</a><a href="/shiwangeweishime/qimiaoderenti/index_3.html" class="c_page">3</a><a href="/shiwangeweishime/qimiaoderenti/index_4.html" class="c_page">4</a><a href="/shiwangeweishime/qimiaoderenti/index_5.html" class="c_page">5</a><a href="/shiwangeweishime/qimiaoderenti/index_6.html" class="c_page">6</a><a href="/shiwangeweishime/qimiaoderenti/index_7.html" class="c_page">7</a><a href="/shiwangeweishime/qimiaoderenti/index_8.html" class="c_page">8</a><a href="/shiwangeweishime/qimiaoderenti/index_9.html" class="c_page">9</a><a href="/shiwangeweishime/qimiaoderenti/index_10.html" class="c_page">10</a>&nbsp;<a href="/shiwangeweishime/qimiaoderenti/index_2.html" class="nextpage">下一页</a></div>
    </div>

@stop





