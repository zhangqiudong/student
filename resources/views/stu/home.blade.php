@extends('master')

@section('title')
    欢迎 -- {{ Auth::user()->name }}
@stop

@section('content')
    <div class="line_row"></div>
    <div class="container1">
        <div class="row" style="padding:0 0;margin: 0 0;">
            @include('stu.left')
            <div class="panel panel-default" style="float: left;width:85%">
                <div class="stu_location" style="padding: 20px 10px">
                    <span>我的信息</span>><span>个人资料</span>
                </div>
                <div style="background: url(../images/flower.gif) no-repeat;  height: 40px;"></div>
                <div style="height:1px;border-top: 1px dashed #cccccc"></div>

                <div class="panel-body">
                    <div>
                        <table class="table table-bordered base_info_table">
                            <tr><td>姓名：</td><td>{{ Auth::user()->name }}</td><td>身份证号码：</td><td></td></tr>
                            <tr><td>性别：</td><td>{{ Auth::user()->sex }}</td><td>学号：</td><td>{{ Auth::user()->id }}</td></tr>
                            <tr><td>年级：</td><td> {{ Auth::user()->nianji }}</td><td>班级：</td><td> {{ Auth::user()->pro_class }}</td></tr>
                            <tr><td>状态：</td><td>在读</td><td>班主任：</td><td></td></tr>
                            <tr><td colspan="3">联系方式（如有联系方式变动请及时修改，以便能及时联系到你，谢谢！）</td></tr>
                            <tr><td>手机：</td><td>{{ Auth::user()->phone }}</td><td>第二联系号码：</td><td>{{ Auth::user()->phone2 }}</td></tr>
                            <tr><td>QQ：</td><td>{{ Auth::user()->qq }}</td><td>电子邮箱：</td><td> {{ Auth::user()->email }}</td></tr>
                            <tr><td>联系地址：</td><td  colspan="3">{{ Auth::user()->address }}</td></tr>
                        </table>
                    </div>
                    <div class="personal-mes">
                        {{--学号: {{ Auth::user()->id }}--}}
                        {{--<br />--}}
                        {{--姓名: {{ Auth::user()->name }}--}}
                        {{--<br />--}}
                        {{--性别: {{ Auth::user()->sex }}--}}
                        {{--<br />--}}
                        {{--手机: {{ Auth::user()->phone }}--}}
                        {{--<br />--}}
                        {{--班级: {{ Auth::user()->pro_class }}--}}
                        {{--<br />--}}
                        {{--邮箱: {{ Auth::user()->email }}--}}
                        {{--<hr />--}}
                        <a href="/stu/edit"><button class="btn btn-primary">修改资料</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop