<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/bootstrap/js/bootstrap.js"></script>
    <style type="text/css">.red{  color: red;}</style>
</head>
<body>
<div class="container-fluid" style="width: 90%; margin: 0 auto;">

    @include('header')

    @yield('content')

    @include('footer')
</div>

{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
                {{--<span class="sr-only">Toggle Navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--@if(Auth::guest())--}}
                {{--<a class="navbar-brand" href="/">学生成绩管理</a>--}}
            {{--@else--}}
                {{--@if (Auth::user()->is_admin)--}}
                    {{--<a class="navbar-brand" href="/admin">学生成绩管理</a>--}}
                {{--@else--}}
                    {{--<a class="navbar-brand" href="/">学生成绩管理</a>--}}
                {{--@endif--}}
            {{--@endif--}}

        {{--</div>--}}

        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li><a href="http://www.golaravel.com" target="__blank">Power by laravel5</a></li>--}}
            {{--</ul>--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--@if (Auth::guest())--}}
                {{--@else--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="{{ url('/logout') }}">退出</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

{{--<div class="container">--}}
        {{--@include('flash')--}}
 {{--</div>--}}

{{--@yield('content')--}}

<!-- script -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script></body>
<script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
</html>