@extends('master')

@section('title')
    添加通知
@stop

@section('content')

    <div class="row" style="padding:0 0;margin: 0 0;">
        <div class="stu_leftcon">
            @include('Admin.left')
        </div>
        <div class="panel panel-default admin_right">
            <h2 class="add_news_title">添加新闻</h2>
            <hr />

            @include('errors.list')

            <div class="form-group">
                {{--{!! Form::model($news = new \App\News, ['url' => 'admin/uploadnews', 'class' => 'form-horizontal']) !!}--}}
                {!! Form::model($news = new \App\News, ['url' => 'admin/uploadnews', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('title', '标题: ', ['class' => 'control-label col-md-1']) !!}
                    <div class="col-md-4">
                        {!! Form::text('title', old('id'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('contents', '内容: ', ['class' => 'control-label col-md-1']) !!}
                    <div class="col-md-4">
                        {!! Form::text('contents', old('name'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('author', '作者: ', ['class' => 'control-label col-md-1']) !!}
                    <div class="col-md-4">
                        {!! Form::text('author', old('name'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('date', '时间: ', ['class' => 'control-label col-md-1']) !!}
                    <div class="col-md-4">
                        {!! Form::text('date', old('name'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('link', '链接: ', ['class' => 'control-label col-md-1']) !!}
                    <div class="col-md-4">
                        {!! Form::text('link', old('name'), ['class' => 'form-control']) !!}
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