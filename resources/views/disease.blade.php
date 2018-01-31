@extends('master')
@section('title')
    家教辅导
@stop
@section('content')

    <div class="line_row"></div>

    <div class="t_m pb16">
        <div class="t_m_z">
            <div class="t_lb_t"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/ertongjiankang/">儿童健康</a>&nbsp;&gt;&nbsp;<a href="/ertongjiankang/huxixitong/">呼吸系统</a></div>
        </div>
        <div class="t_auto pb16" id="Mhead2_0" style="display: block;">
            <dl class="txt_box">
                <dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2017-08-30/99824.html" target="_blank" title="电池为什么不会电人？">1.电池为什么不会电人？</a>
                    <span>2017-08-30</span>
                    <span></span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-04/72582.html" target="_blank" title="眼泪为什么是咸的？">63.眼泪为什么是咸的？</a>
                    <span>2016-11-04</span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-11/72722.html" target="_blank" title="为什么冬天有些人的耳朵和手会生冻疮">64.为什么冬天有些人的耳朵和手会生冻疮</a>
                    <span>2016-11-11</span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-14/72804.html" target="_blank" title="为什么奔跑时心脏会剧烈地跳动">65.为什么奔跑时心脏会剧烈地跳动</a>
                    <span>2016-11-14</span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-14/72816.html" target="_blank" title="我们吃下去的东西跑到哪儿去了">66.我们吃下去的东西跑到哪儿去了</a>
                    <span>2016-11-14</span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-11/72702.html" target="_blank" title="开发右脑有什么好处">67.开发右脑有什么好处</a>
                    <span>2016-11-11</span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-03/72457.html" target="_blank" title="蹈火舞者的脚为何不会被灼伤">68.蹈火舞者的脚为何不会被灼伤</a>
                    <span>2016-11-03</span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-11/72719.html" target="_blank" title="为什么伤口碰到咸的东西会格外痛">69.为什么伤口碰到咸的东西会格外痛</a>
                    <span>2016-11-11</span>
                </dd><dd>
                    <a href="/shiwangeweishime/qimiaoderenti/2016-11-14/72807.html" target="_blank" title="为什么碰伤的皮肤处会有乌青块">70.为什么碰伤的皮肤处会有乌青块</a>
                    <span>2016-11-14</span>
                </dd></dl>
        </div>
        <div class="h6"></div>
        <div class="t_fy"><span>1</span><a href="/shiwangeweishime/qimiaoderenti/index_2.html" class="c_page">2</a><a href="/shiwangeweishime/qimiaoderenti/index_3.html" class="c_page">3</a><a href="/shiwangeweishime/qimiaoderenti/index_4.html" class="c_page">4</a><a href="/shiwangeweishime/qimiaoderenti/index_5.html" class="c_page">5</a><a href="/shiwangeweishime/qimiaoderenti/index_6.html" class="c_page">6</a><a href="/shiwangeweishime/qimiaoderenti/index_7.html" class="c_page">7</a><a href="/shiwangeweishime/qimiaoderenti/index_8.html" class="c_page">8</a><a href="/shiwangeweishime/qimiaoderenti/index_9.html" class="c_page">9</a><a href="/shiwangeweishime/qimiaoderenti/index_10.html" class="c_page">10</a>&nbsp;<a href="/shiwangeweishime/qimiaoderenti/index_2.html" class="nextpage">下一页</a></div>
    </div>


    <div class="content">
        {{--<p><a href="javascript:void(0)" onClick="dashangToggle()" class="dashang" title="打赏，支持一下">打赏</a></p>--}}
        <div class="hide_box" style="display: block"></div>
        <div class="shang_box" style="display: block">
            <a class="shang_close" href="javascript:void(0)" onClick="dashangToggle()" title="关闭"><img src="images/close.jpg" alt="取消" /></a>
            <img class="shang_logo" src="images/logos.png" alt="金林苑" />
            <div class="shang_tit">
                <p>感谢您的支持，我会继续努力的!</p>
            </div>
            <div class="shang_payimg">
                <img src="images/alipayimg.jpg" alt="扫码支持" title="扫一扫" />
            </div>
            <div class="pay_explain">扫码打赏，你说多少就多少</div>
            <div class="shang_payselect">
                <div class="pay_item checked" data-id="alipay">
                    <span class="radiobox"></span>
                    <span class="pay_logo"><img src="images/alipay.jpg" alt="支付宝" /></span>
                </div>
                <div class="pay_item" data-id="weipay">
                    <span class="radiobox"></span>
                    <span class="pay_logo"><img src="images/wechat.jpg" alt="微信" /></span>
                </div>
            </div>
            <div class="shang_info">
                <p>打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码打赏哦</p>
                <p>Powered by <a href="http://www.jinliniuan.com" target="_blank" title="金林苑">金林苑</a>，分享从这里开始，精彩与您同在</p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $(".pay_item").click(function(){
                $(this).addClass('checked').siblings('.pay_item').removeClass('checked');
                var dataid=$(this).attr('data-id');
                $(".shang_payimg img").attr("src","images/"+dataid+"img.jpg");
                $("#shang_pay_txt").text(dataid=="alipay"?"支付宝":"微信");
            });
        });
        function dashangToggle(){
            $(".hide_box").fadeToggle();
            $(".shang_box").fadeToggle();
        }
    </script>
    <style type="text/css">
        .content{width:80%;margin:200px auto;}
        .hide_box{z-index:999;filter:alpha(opacity=50);background:#666;opacity: 0.5;-moz-opacity: 0.5;left:0;top:0;height:99%;width:100%;position:fixed;display:none;}
        .shang_box{width:540px;height:540px;padding:10px;background-color:#fff;border-radius:10px;position:fixed;z-index:9999;left:50%;top:50%;margin-left:-280px;margin-top:-280px;border:1px dotted #dedede;display:none;}
        .shang_box img{border:none;border-width:0;}
        .dashang{display:block;width:100px;margin:5px auto;height:25px;line-height:25px;padding:10px;background-color:#E74851;color:#fff;text-align:center;text-decoration:none;border-radius:10px;font-weight:bold;font-size:16px;transition: all 0.3s;}
        .dashang:hover{opacity:0.8;padding:15px;font-size:18px;}
        .shang_close{float:right;display:inline-block;}
        .shang_logo{display:block;text-align:center;margin:20px auto;}
        .shang_tit{width: 100%;height: 75px;text-align: center;line-height: 66px;color: #a3a3a3;font-size: 16px;background: url('images/cy-reward-title-bg.jpg');font-family: 'Microsoft YaHei';margin-top: 7px;margin-right:2px;}
        .shang_tit p{color:#a3a3a3;text-align:center;font-size:16px;}
        .shang_payimg{width:170px;padding:10px;border:6px solid #EA5F00;margin:0 auto;border-radius:3px;height:170px;}
        .shang_payimg img{display:block;text-align:center;width:140px;height:140px; }
        .pay_explain{text-align:center;margin:10px auto;font-size:12px;color:#545454;}
        .radiobox{width: 16px;height: 16px;background: url('images/radio2.jpg');display: block;float: left;margin-top: 5px;margin-right: 14px;}
        .checked .radiobox{background:url('images/radio1.jpg');}
        .shang_payselect{text-align:center;margin:0 auto;margin-top:40px;cursor:pointer;height:60px;width:280px;}
        .shang_payselect .pay_item{display:inline-block;margin-right:10px;float:left;}
        .shang_info{clear:both;}
        .shang_info p,.shang_info a{color:#C3C3C3;text-align:center;font-size:12px;text-decoration:none;line-height:2em;}

    </style>




@stop





