@extends('master')

@section('title')
    上传作业
@stop

@section('content')

    <div class="row" style="padding:0 0;margin: 0 0;">
        <div class="stu_leftcon">
            @include('Admin.left')
        </div>
        <div class="panel panel-default admin_right">
            <div class="Admin_location" style="padding: 20px 10px">
                <span>后台管理</span>><span>作业上传</span>
            </div>
            <div style="background: url(../images/flower.gif) no-repeat;  height: 40px;"></div>
            <div style="height:1px;border-top: 1px dashed #cccccc"></div>
            <div class="panel-body">
                {{--如果要上传文件，必须要在Form里面设置files为true--}}·
                {!! Form::open(array('url'=>'admin/upload_task_save/','files'=>true)) !!}

                <div class="form-group">
                    {!! Form::label('pro_class', '年级: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('nianji', Auth::user()->nianji, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('pro_class', '班级: ', ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('pro_class', Auth::user()->pro_class, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <br />

                {!! Form::file('txt') !!}

                {!! Form::submit('提交') !!}<br>


                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop