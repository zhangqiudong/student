@extends('master')
@section('title')
    学生成绩管理系统
@stop
@section('content')
<link rel="stylesheet" href="/css/login.css">
    <div class="reg-box">
        <div class="reg-box-main pageW" style="    margin: 0 auto;">

            <p class="reg-tit">十月修行　只为等你<span class="go-login">已有账号 <a href="{{route('login')}}">立即去登录</a></span></p>
            <form method="post" action="/registerPost" class="reg-form dateForm">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="con-text he4"><span class="tit">登录手机</span>
                    <span class="con"><input type="text" name="mobile" id="mobile" class="mobile" placeholder="请输入您的手机号码"></span>
                </div>
                <div class="con-text he4"><span class="tit">昵称</span>
                    <span class="con"><input type="text" name="nickname" id="nickname" class="username" placeholder="2-14位，中文、数字或者英文（区分大小写） "></span>
                </div>
                <div class="con-text he4"><span class="tit">设置密码</span>
                    <span class="con"><input type="password" name="password" id="password" class="password" placeholder="6-16位，英文（区分大小写）、数字或下划线 "></span>
                    <span class="password-error"></span>
                </div>
                <div class="tab-wrap con-text">
                    {{--<div class="tab-hd con-text">--}}
                        {{--<span class="tit">选择状态</span>--}}
                        {{--<span class="con"><em class="hd-tit" oid="1"><input type="radio" name="yqzt" value="1">备孕中</em><em class="hd-tit" oid="2"><input type="radio" name="yqzt" value="2">正在孕期</em><em class="hd-tit" oid="3"><input type="radio" name="yqzt" value="3">已有宝宝</em></span>--}}
                    {{--</div>--}}

                {{--<div class="con-text he4">--}}
                    {{--<span class="tit">手机验证码</span>--}}
                    {{--<span class="con"><input type="text" name="Mcode" id="Mcode" class="Mcode"><input type="button" value="获取验证码" class="fsbtn"></span>--}}
                    {{--<!--<span class="tips error">手机验证码正确</span>-->--}}
                {{--</div>--}}
                    <div class="con-text he4">
                    <span class="tit">验证码</span>
                    <span class="con"><input type="text" name="Mcode" id="Mcode" class="Mcode">
                        <img src="{{ URL('index/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
                        <span> <a id="change" href="javascript:;" code_src=""> 换一张</a></span>
                    </span>
                     <script>
    $("#change").click(function(){
        $url = "{{ URL('index/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    })
</script>
                    </div>
                <div class="con-text he4 fwtk">
                    <input type="checkbox" name="agree" checked="checked" class="agree">
                    <span class="con">我已同意并阅读<a href="/member/login/regReadme" target="_blank" class="fwtk">《喜啦啦网服务协议》</a></span>
                </div>
                <div class="con-text">
                    <input type="submit" class="btn" id="btnReg" value="注册">
                </div>
                </div>
            </form>
        </div>

    </div>
@stop