@extends('master')
@section('title')
    学生成绩管理系统
@stop
@section('content')

    <div class="row-fluid">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation" class="active"><a href="#">首页</a></li>
            <li role="presentation"><a href="#">家庭教育</a></li>
            <li role="presentation"><a href="#">文学素养</a></li>
            <li role="presentation"><a href="#">文学素养</a></li>
            <li role="presentation"><a href="#">好人好事</a></li>
            <li role="presentation"><a href="#">作业辅导</a></li>
            <li role="presentation"><a href="#">宝贝心里话</a></li>
            <li role="presentation"><a href="#">宝贝成长</a></li>
        </ul>
    </div>
    <div class="row-fluid">
        <img alt="140x140" src="/images/logo_3.jpg" width="100%"/>
    </div>
    <div class="row-fluid main">
        <div class="span8">
            <div class="row-fluid">
                <div class="" style="width:28%;float: left">
                    <h4 style="font-weight: bold;">学校通知</h4>
                    <div class="def_inde_img"><img  src="/images/logo_2.jpg" style="float: left;"/></div>
                    {{--<ul class="list-group def_index_ul">--}}
                        {{--<li class="list-group-item">Cras justo odio</li>--}}
                        {{--<li class="list-group-item">Dapibus ac facilisis in</li>--}}
                        {{--<li class="list-group-item">Morbi leo risus</li>--}}
                        {{--<li class="list-group-item">Porta ac consectetur ac</li>--}}
                        {{--<li class="list-group-item">Vestibulum at eros</li>--}}
                    {{--</ul>--}}
                    <ul class="list-group def_index_ul">
                    @foreach ($news as $new)
                        <li class="list-group-item"><a href="#">({{$new->id}}).{{$new->title}}</a> </li>
                    @endforeach
                    </ul>
                </div>
                <div class="" style="width:28%;float: left">
                    <h4 style="color: blue;font-weight: bold;">最新通知</h4>
                    <div class="def_inde_img"><img src="/images/logo_3.jpg" width="100%" style="float: left;"/></div>
                    <ul class="list-group def_index_ul">
                        <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                        <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                        <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                        <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                        <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="" style="width:44%;float: left">
                    <h4 style="color: purple;font-weight: bold;">最新要闻</h4>
                    <div class="def_inde_img"><img  src="/images/logo_1.jpg" width="100%" style="float: left;"/></div>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="span4 border"style="margin-left: 0px;width: 34%;background: #fff;height: 429px;">
            <div class="col-md-8 col-md-offset-2 index_form">
                <div class="panel panel-default" >
                    <div class="panel-heading">请登录学习系统</div>
                    <div class="panel-body">

                        @include('errors.list')

                        {!! Form::open(['url' => '/login', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::label('id', '学号', ['class' => 'col-md-4']) !!}
                            <div class="col-md-6">
                                {!! Form::text('id', old('id'), ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', '密码', ['class' => 'col-md-4']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" style="height: 13px;"> 记住我
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                {!! Form::submit('登陆', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                        <p style="margin-top: 60px;color: red"><span>注：</span>在校生请按学校要求操作,注意操作提醒</p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="span12" style="background:#fff;opacity: 0.4;margin-left: 0px;">
        </div>
    </div>


    {{--<div class="container">--}}
    {{--<div class="jumbotron">--}}
    {{--<h2><div class="quote">{{ inspring::quote() }}</div> </h2>--}}
    {{--<p>同学们登录后先修改相关资料</p>--}}
    {{--<p>查询分数,有疑问咨询管理员</p>--}}
    {{--<p><a class="btn btn-primary btn-lg" href="/login" role="button">点击登录</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
@stop