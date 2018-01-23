@extends('master')
@section('title')
    个人信息修改
@stop
@section('content')
    <div class="row" style="padding:0 0;margin: 0 0;">

        @include('stu.left')

        <div class="panel panel-default"  style="float: left;width:85%">

            <div class="stu_location" style="padding: 20px 10px">
                <span>我的信息</span>><span>个人资料修改</span>
            </div>

            <div style="background: url(../images/flower.gif) no-repeat;  height: 40px;"></div>
            <div style="height:1px;border-top: 1px dashed #cccccc"></div>

            @include('errors.list')

            <div class="panel-body">
                <div class="edit_title">
                    <span>学生姓名：</span>{{ Auth::user()->name }}
                    <span>学生ID：</span> {{ Auth::user()->id }}
                </div>
                {!! Form::open(['url' => '/stu/update', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                {{--<div class="form-group">--}}
                {{--{!! Form::label('id', '学号: ', ['class' => 'col-md-2 control-label']) !!}--}}
                {{--<div class="col-md-6">--}}
                {{--{!! Form::text('id', Auth::user()->id, ['class' => 'form-control', 'readonly'])!!}--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                {{--{!! Form::label('name', '姓名: ', ['class' => 'col-md-2 control-label']) !!}--}}
                {{--<div class="col-md-6">--}}
                {{--{!! Form::text('name', Auth::user()->name, ['class' => 'form-control', 'readonly'])!!}--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    {!! Form::label('sex', '性别: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::select('sex', ['男' => '男', '女' => '女'], Auth::user()->sex, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('credit_ID', '身份证号: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('credit_ID',  Auth::user()->credit_ID,['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('phone', '手机: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('phone', Auth::user()->phone, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('pro_class', '班级: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('pro_class', Auth::user()->pro_class, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', '邮箱: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::email('email', Auth::user()->email, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('address', '住址: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('address', Auth::user()->address, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="group">
                    {!! Form::submit('确认修改', ['class' => 'btn btn-success form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop