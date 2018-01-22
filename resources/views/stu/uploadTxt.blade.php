@extends('master')

@section('title')
    欢迎 -- {{ Auth::user()->name }}
@stop

@section('content')
    {{--如果要上传文件，必须要在Form里面设置files为true--}}
    {!! Form::open(array('url'=>'stu/uploadTxt_save','files'=>true)) !!}
    {{--name为iamge--}}
    {!! Form::file('txt') !!}
    <br />
    {!! Form::submit('提交') !!}<br>{!! Form::close() !!}
    @stop