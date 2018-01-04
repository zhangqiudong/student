@extends('master')

@section('title')
    欢迎登录
@stop

@section('content')
    <div class="line_row"></div>
    <div class="container-fluid login_con">
        <div class="span6"></div>
        <div class="span6" style="margin-left: 0px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default" style="min-height: 500px;">
                        <div class="panel-heading">登录</div>
                        <div class="panel-body">

                            @include('errors.list')

                            {!! Form::open(['url' => '/login', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                            <div class="form-group">
                                {!! Form::label('id', '学号', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('id', old('id'), ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', '密码', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" style="height: 13px;">记住我
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    {!! Form::submit('登陆系统', ['class' => 'btn btn-primary form-control']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span6"></div>

    </div>
@stop