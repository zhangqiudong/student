@extends('master')
@section('title')
学生成绩管理系统
@stop

@section('content')

@include('nav')
<div class="line_row"></div>
<div class="location"><span>当前位置：</span><a href="/">首页</a>-><a href="/infos/list">新闻</a>->内容</div>
<div class="infos_detail">

    @foreach ($infos as $infos)

    {{--{{$infos->content}}--}}


    <div id="content_body">
        {{--<script language="javascript">--}}
            {{--var file_yt='';--}}
            {{--if(file_yt!=""){--}}
                {{--document.write('<h2>'+file_yt+'</h2>');--}}
            {{--}--}}
        {{--</script>--}}
        <h1>{{$infos->title}}</h1>
        {{--<script language="javascript">--}}
            {{--var file_subdoctitle='';--}}
            {{--if(file_subdoctitle!=""){--}}
                {{--document.write('<h2>'+file_subdoctitle+'</h2>');--}}
            {{--}--}}
        {{--</script>--}}
        <div id="content_date_source">{{$infos->date}}　来源：{{$infos->source}}</div>
        <div class="TRS_Editor">
            <p>{{$infos->content}}</p>
        </div>

        <div id="moeCode"><canvas width="150" height="150" style="display: none;"></canvas><img alt="扫描分享" src="data:image/png;base64,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" style="display: block;">扫一扫分享本页</div>
        <div class="moe_wcode"></div>
        <div id="content_editor">（责任编辑：{{$infos->author}}）</div>
        <dl class="relnews"><dt>相关阅读</dt></dl>

    </div>
    @endforeach


</div>
@stop