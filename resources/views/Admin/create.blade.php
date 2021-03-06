@extends('master')

@section('title')
    添加学生
@stop

@section('content')

        <div class="row" style="padding:0 0;margin: 0 0;">
            <div class="stu_leftcon">
                @include('Admin.left')
            </div>
            <div class="panel panel-default admin_right">

                <h2 class="add_stu_title">添加学生</h2>
                <hr />

                @include('errors.list')

                <div class="form-group">
                    {!! Form::model($user = new \App\User, ['url' => 'admin/', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('id', '学号: ', ['class' => 'control-label col-md-1']) !!}
                        <div class="col-md-4">
                            {!! Form::text('id', old('id'), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', '姓名: ', ['class' => 'control-label col-md-1']) !!}
                        <div class="col-md-4">
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', '年级: ', ['class' => 'control-label col-md-1']) !!}
                        <div class="col-md-4">
                            {!! Form::text('nianji', old('nianji'), ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', '班级: ', ['class' => 'control-label col-md-1']) !!}
                        <div class="col-md-4">
                            {!! Form::text('pro_class', old('pro_class'), ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5">
                            {!! Form::submit('完成,创建', ['class' => 'btn btn-success form-control']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
@stop