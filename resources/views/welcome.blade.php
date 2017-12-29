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
    <div class="row-fluid">
        <div class="span8">
            <div class="row-fluid">
                <div class="" style="width:28%;float: left">
                    <h4>学校通知</h4>
                    <img alt="140x140" src="/images/logo_2.jpg" width="100%" style="float: left;"/>
                </div>
                <div class="" style="width:28%;float: left">
                    <h4>最新通知</h4>
                    <img alt="140x140" src="/images/logo_3.jpg" width="100%" style="float: left;"/>
                </div>
                <div class="" style="width:44%;float: left">
                    <h4>最新要闻</h4>
                    <img alt="140x140" src="/images/logo_1.jpg" width="100%" style="float: left;"/>
                </div>
            </div>
        </div>
        <div class="span4" style="margin-left: 0px;">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default border">
                    <div class="panel-heading" style="">请登录学习系统</div>
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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> 记住我
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('登陆', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">
        </div>
        <div class="span10">
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