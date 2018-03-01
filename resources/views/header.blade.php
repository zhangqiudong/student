<div class="row-fluid" style="background: url(/images/banner3.png) no-repeat;    height: 200px;    display: flex;    align-items: center;    background-size: 100% 100%;    width: 90%;
    margin: 0 auto;">
    <div style="width: 96%; margin: 0 auto;">
        <div class="span8">
            <a href="/"> <h3>学生管理系统</h3></a>
        </div>
        <div class="span4">
            <ul class="nav nav-pills" style="float: right;">
                <li role="presentation"><a href="{{route('register')}}">注册</a></li>
                {{--<li role="presentation"><a href="#">登陆</a></li>--}}
                @if (Auth::guest())
                    <li role="presentation"><a href="{{route('login')}}">登陆</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}">退出</a></li>
                        </ul>
                    </li>
                @endif


                <li role="presentation"> <a href="/help">帮助</a></li>
            </ul>
        </div>
        @include('nav')
    </div>
</div>