@extends('master')
@section('title')
    学生成绩管理系统
    @stop
@section('content')
    <div class="container">
        <div class="jumbotron">
            {{--<h2><div class="quote">{{ inspring::quote() }}</div> </h2>--}}
            <p>同学们登录后先修改相关资料</p>
            <p>查询分数,有疑问咨询管理员</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">点击登录</a></p>
        </div>
    </div>
