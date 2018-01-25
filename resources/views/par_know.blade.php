@extends('master')
@section('title')
    父母学堂
@stop
@section('content')

    <div class="line_row"></div>

    <div class="t_m pb16">
        <div class="t_m_z">
            <div class="t_lb_t"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/par_know/">父母学堂</a></div>
        </div>
        <div class="t_auto pb16" id="Mhead1_0" style="display: block;">

            @foreach ($items as $item)
                <div class="w96 fl">
                    <div class="t_ximg">
                        <a href="/par_know/{{ $item->id }}/detail" target="_blank" title="{{ $item->title }}">
                            <img class="lazy" src="" onerror="nofind();">
                        </a>
                    </div>
                    <div class="t_xtxt">
                        <a href="/par_know/{{ $item->id }}/detail" class="xt_url">{{ $item->title }}</a>
                        <span>
                          {{ $item->abstract }}
                        </span>
                    </div>
                </div>
            @endforeach
    </div>
    </div>
@stop