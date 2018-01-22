@extends('master')

@section('title')
    管理员
@stop

@section('content')
    <div class="line_row"></div>
        <div class="row" style="padding:0 0;margin: 0 0;">
            <div class="stu_leftcon">
                @include('Admin.left')
           </div>
            <div class="panel panel-default admin_right">
                @include('errors.list')
                <form action="Admin/search" class="admin_search">
                    <input type="text" name="name" placeholder="输入姓名"><button  class="btn btn-primary" type="submit">搜索</button>
                </form>
                <h3 align="center">学生信息表</h3>
                <table class="table table-hover">
                <tr><td>学号</td><td>姓名</td><td>性别</td><td>手机</td><td>班级</td><td>邮箱</td><td>操作</td></tr>
                @if (count($users))
                @foreach ($users as $user)
                <tr>
                <td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->sex }}</td><td>{{ $user->phone }}</td><td>{{ $user->pro_class }}</td><td>{{ $user->email }}</td><td>
                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal{{$user->id}}">更新分数</button>
                <form action="{{ url('admin/'.$user->id) }}" style='display: inline' method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-sm btn-danger" onclick="return confirm('确定删除?')">删除</button>
                </form>
                </td>
                </tr>
                @include('Admin.upload_grade')
                @endforeach
                @else
                <h1>没有学生名单,请管理员添加</h1>
                @endif
                </table>
                <?php echo $users->render(); ?>
            </div>
        </div>
@stop