@extends('master')
@section('title')
    父母学堂
@stop
@section('content')

    <div class="line_row"></div>
    <div class="t_main_box">


        <div id="t_lb_box">

            <div class="t_lb_l">

                <div class="t_b pb16 mh1200">

                    <div class="t_news">
                        @foreach ($items as $item)
                        <h1>{{ $item->title }}</h1>

                        <div class="t_news_top">
                            <a target="_blank" href="#" title="早教育儿精选" class="topa">{{ $item->collector }}</a>
                            <b class="topa">{{ $item->date }}</b>
                            <a href="//www.tom61.com/e/memberconnect/wx/tosj.php?fid=15&amp;id=119753" class="fswx iframe cc cboxElement">发送到微信</a>
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
                           <?php echo html_entity_decode($item->content ) ?>
                        <div class="t_fy"></div>
                    </div>
                    @endforeach
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
                            <script src="//css.tom61.com/js/class/class912_hotnews.js"></script><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-06-19/44270.html" title="你剪掉了我的翅膀，却怪我不会飞翔" target="_blank">你剪掉了我的翅膀，却怪我不会飞翔</a><span></span></li><li class="t_li"><a href="http://www.tom61.com/yuerdaquan/yuerzhihuijingxuan/2014-04-10/42857.html" title="不要让珠心算和手脑算害了孩子" target="_blank">不要让珠心算和手脑算害了孩子</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-06-20/44283.html" title="告诉孩子，我们为什么要上学？" target="_blank">告诉孩子，我们为什么要上学？</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2015-05-29/64977.html" title="糟糕家长这五句话给孩子戴上脚镣" target="_blank">糟糕家长这五句话给孩子戴上脚镣</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-06-17/44162.html" title="五招可改变孩子懒惰磨蹭的坏习惯" target="_blank">五招可改变孩子懒惰磨蹭的坏习惯</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2015-05-28/64974.html" title="如果你有个儿子，那么请好好看看" target="_blank">如果你有个儿子，那么请好好看看</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-06-11/44077.html" title="小学语文必会基础知识,有孩子的收藏了" target="_blank">小学语文必会基础知识,有孩子的</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2015-05-27/64973.html" title="三类妈妈易教子无方" target="_blank">三类妈妈易教子无方</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2015-05-28/64975.html" title="这条信息不管多忙都要看一看，父母值得一看" target="_blank">这条信息不管多忙都要看一看，父母</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-07-02/44470.html" title="手影全集(很难找哦可以教孩子了)" target="_blank">手影全集(很难找哦可以教孩子了)</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-06-13/44110.html" title="95首绕口令：锻练你和孩子的普通话" target="_blank">95首绕口令：锻练你和孩子的普通话</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-06-11/44074.html" title="爸爸，我为什么要上学? (最接地气的回答!!)" target="_blank">爸爸，我为什么要上学? (最接地气</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-08-28/47886.html" title="日本妈妈的十条家训" target="_blank">日本妈妈的十条家训</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2014-11-07/53271.html" title="超棒的33个可以让孩子动手的科学小实验（3-12岁）" target="_blank">超棒的33个可以让孩子动手的科学</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2015-05-29/64976.html" title="父亲如何成为孩子的朋友" target="_blank">父亲如何成为孩子的朋友</a><span></span></li>
                        </ul>
                    </div>
                    <div class="t_auto  pt10 pb10" id="Mhead1_1" style="display: none;">
                        <ul>
                            <script src="//css.tom61.com/js/class/class912_newnews.js"></script><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106484.html" title="小学作文逆天妙方！抓住六大特点，让你写出高分作文！" target="_blank">小学作文逆天妙方！抓住六大特点，让</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106483.html" title="这才是教育的最大死敌，但几乎每个家长都在做！" target="_blank">这才是教育的最大死敌，但几乎每个</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106482.html" title="能控制妈妈暴脾气，改掉孩子坏毛病的好法子！" target="_blank">能控制妈妈暴脾气，改掉孩子坏毛病</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106481.html" title="伤害孩子的7种爸爸，最后一种简直不能忍，你家老公上榜了吗？" target="_blank">伤害孩子的7种爸爸，最后一种简直</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106480.html" title="孩子生活在一个懂得好好说话的家庭，究竟有多重要？" target="_blank">孩子生活在一个懂得好好说话的家</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106479.html" title="倪萍消失十年，为儿子治病哭到眼泪流干！" target="_blank">倪萍消失十年，为儿子治病哭到眼泪</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106478.html" title="爱撒谎的孩子更聪明！早知道这点，爸妈能少犯多少错！" target="_blank">爱撒谎的孩子更聪明！早知道这点，爸</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106477.html" title="该不该用妈妈3年换孩子30年？任何事业的成功，都无法弥补孩子教育的失败" target="_blank">该不该用妈妈3年换孩子30年？任何</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106476.html" title="千万别用这4种方式哄孩子！后果很严重！" target="_blank">千万别用这4种方式哄孩子！后果很</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106475.html" title="为什么中国人养孩子那么累？七大原因，你中了几个？" target="_blank">为什么中国人养孩子那么累？七大原</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106474.html" title="3岁到7岁是爱告状的巅峰！你真以为这是小事吗？" target="_blank">3岁到7岁是爱告状的巅峰！你真以为</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106473.html" title="孩子是否成才，决定权在父母！（深度好文）" target="_blank">孩子是否成才，决定权在父母！（深度好</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106472.html" title="为什么老二会比老大精？原来根源在这里……" target="_blank">为什么老二会比老大精？原来根源在</a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106471.html" title="别再把撒手不管当成静待花开了（ 深度好文 ）" target="_blank">别再把撒手不管当成静待花开了（ </a><span></span></li><li class="t_li"><a href="/yuerdaquan/yuerzhihuijingxuan/2017-03-30/106470.html" title="为什么美国孩子那么自信，看完就懂了！" target="_blank">为什么美国孩子那么自信，看完就懂</a><span></span></li>
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

    </div>
@stop