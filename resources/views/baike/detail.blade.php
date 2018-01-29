@extends('master')
@section('title')
    {{ $items->title }}
@stop
@section('content')

    <div class="line_row"></div>

    <div id="t_lb_box">

        <div class="t_lb_l">

            <div class="t_b pb16 mh1200">

                <div class="t_news">
                    <h1>{{ $items->title }}</h1>
                    <div class="t_news_top">
                        <a target="_blank" href="#" title="{{ $items->collector }}" class="topa">{{ $items->collector }}</a>
                        <b class="topa">{{ $items->date }}</b>
                        <a href="//www.tom61.com/e/memberconnect/wx/tosj.php?fid=15&amp;id=112928" class="fswx iframe cc cboxElement">发送到微信</a>
                        <span>
                                <div class="bdsharebuttonbox">
                                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                                    <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                                    <a href="#" class="bds_more" data-cmd="more"></a>
                                </div>
                            </span>
                    </div>
                    <div class="l5"></div>
                      {{--{{ $items->content }}--}}


                <?php echo  $items->content ?>



                    <div class="t_fy"></div>
                </div>

                <div class="h6 pt16"></div>
                <div class="t_b" id="PAGE_AD_6">

                    <script type="text/javascript" src="//dm1.tom61.com/we3a1ec199f4cbf23cdb1a7dd9efea38e203b3930734ef.js"></script>
                </div>
                <div class="t_b">
                    <div class="w96">
                    </div>
                </div>
            </div>

        </div>


    <div id="t_lb_r">

        <div class="t_b" id="PAGE_AD_1">

            <script type="text/javascript" src="//dm1.tom61.com/fy3a1ec597f2cefe31db1a7dd9efea38e203b3930734ef.js"></script>
        </div>


        <div class="h6"></div>
        <div class="t_b" id="PAGE_AD_2">

            <script type="text/javascript" src="//dm1.tom61.com/jc3a1ec597f7c8f03fdb1a7dd9efea38e203b3930734ef.js"></script>
        </div>
        <div class="h6"></div>
        <div class="t_m">
            <div class="t_b_t">
                <ul id="head1" class="t_tj_tab">
                    <li class="current"><a href="#">本栏热门</a></li>
                    <li class=""><a href="#">本栏最新</a></li>
                </ul>
            </div>
            <div class="t_auto pt10 pb10" id="Mhead1_0" style="display: block;">
                <ul>
                    <script src="//css.tom61.com/js/class/class360_hotnews.js"></script><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-20/80628.html" title="台风发生频率最高的海域是什么地方" target="_blank">台风发生频率最高的海域是什么地</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-27/81525.html" title="趣味婚俗中的地理" target="_blank">趣味婚俗中的地理</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-20/80626.html" title="什么是锋面雨 - 锋面雨的形成" target="_blank">什么是锋面雨 - 锋面雨的形成</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78543.html" title="地球特点" target="_blank">地球特点</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-20/80627.html" title="什么是非典型梅雨 - 梅雨季节" target="_blank">什么是非典型梅雨 - 梅雨季节</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78546.html" title="七大洲地形" target="_blank">七大洲地形</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78548.html" title="气温分布规律" target="_blank">气温分布规律</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78549.html" title="地球气压带" target="_blank">地球气压带</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78551.html" title="中亚" target="_blank">中亚</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78547.html" title="陆地自然带分布与特征" target="_blank">陆地自然带分布与特征</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78550.html" title="东亚各国" target="_blank">东亚各国</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78545.html" title="七大洲分界和位置" target="_blank">七大洲分界和位置</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78544.html" title="东西南北半球的划分" target="_blank">东西南北半球的划分</a><span></span></li><li class="t_li"><a href="http://www.tom61.com/baikequanshu/tianwendili/dilizhishi/2008-11-11/5874.html" title="恒河水之谜" target="_blank">恒河水之谜</a><span></span></li><li class="t_li"><a href="http://www.tom61.com/baikequanshu/tianwendili/dilizhishi/2008-11-11/5883.html" title="海底洞穴壁画之谜" target="_blank">海底洞穴壁画之谜</a><span></span></li>
                </ul>
            </div>
            <div class="t_auto  pt10 pb10" id="Mhead1_1" style="display: none;">
                <ul>
                    <script src="//css.tom61.com/js/class/class360_newnews.js"></script><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-27/81525.html" title="趣味婚俗中的地理" target="_blank">趣味婚俗中的地理</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-20/80628.html" title="台风发生频率最高的海域是什么地方" target="_blank">台风发生频率最高的海域是什么地</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-20/80627.html" title="什么是非典型梅雨 - 梅雨季节" target="_blank">什么是非典型梅雨 - 梅雨季节</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-20/80626.html" title="什么是锋面雨 - 锋面雨的形成" target="_blank">什么是锋面雨 - 锋面雨的形成</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78551.html" title="中亚" target="_blank">中亚</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78550.html" title="东亚各国" target="_blank">东亚各国</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78549.html" title="地球气压带" target="_blank">地球气压带</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78548.html" title="气温分布规律" target="_blank">气温分布规律</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78547.html" title="陆地自然带分布与特征" target="_blank">陆地自然带分布与特征</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78546.html" title="七大洲地形" target="_blank">七大洲地形</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78545.html" title="七大洲分界和位置" target="_blank">七大洲分界和位置</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78544.html" title="东西南北半球的划分" target="_blank">东西南北半球的划分</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2016-10-08/78543.html" title="地球特点" target="_blank">地球特点</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2017-01-11/93357.html" title="地层中有哪些金属矿物?" target="_blank">地层中有哪些金属矿物?</a><span></span></li><li class="t_li"><a href="/baikequanshu/tianwendili/dilizhishi/2017-01-11/93355.html" title="矿物是怎样形成的?" target="_blank">矿物是怎样形成的?</a><span></span></li>
                </ul>
            </div>
        </div>
        <div class="h6"></div>
        <div class="t_b" id="PAGE_AD_3">

            <script type="text/javascript" src="//css.tom61.com/js/acmsd/thea17.js"></script>
        </div>
        <div class="h6"></div>
        <div class="t_b" id="PAGE_AD_5">

            <script type="text/javascript" src="//css.tom61.com/js/acmsd/thea18.js"></script>
        </div>

    </div>

    </div>

@stop