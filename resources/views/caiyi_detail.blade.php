@extends('master')
@section('title')
    {{ $items->title }}
@stop
@section('content')

    <div class="line_row"></div>
    <div id="t_lb_box" style="width: 98%">

        <div class="t_lb_l">

            <div class="t_b pb16 mh1200">

                <div class="t_news">
                    <h1>{{ $items->title }}</h1>
                    <div class="t_news_top">
                        <a target="_blank" href="/shougongzhizuo/zhezhidaquan/" title="{{ $items->category }}" class="topa">{{ $items->category }}</a>
                        <b class="topa">{{ $items->date }}</b>
                        <a href="//www.tom61.com/e/memberconnect/wx/tosj.php?fid=15&amp;id=120217" class="fswx iframe cc cboxElement">发送到微信</a>
                        <span><div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                         <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a>
                           </div>
                         </span>
                    </div>
                    <div class="l5"></div>
                    <div class="t_news_txt">
                        {{--<p>--}}
                            {{--<img src="http://img.tom61.com/file/shougongzhizuo/zhezhidaquan/2017-09-11/1505112838116667.jpg" title="1505112838116667.jpg" alt="1.jpg">--}}
                        {{--</p>--}}
                    </div>
                    <div class="t_fy"></div>
                </div>
            </div>

        </div>
        <div id="t_lb_r">

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
                        <script src="//css.tom61.com/js/class/class928_hotnews.js"></script>
                        @for ($i = 0; $i < count($itemslist); $i++)
                        <li class="t_li"><a href="/caiyi/{{ $itemslist[0]->category }}/{{ $itemslist[$i]->id }}/describe" title="{{ $itemslist[$i]->title }}" target="_blank">{{ $itemslist[$i]->title }}</a><span></span></li>
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2016-08-10/70925.html" title="蝙蝠2的折纸图解与方法教程" target="_blank">蝙蝠2的折纸图解与方法教程</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-01-22/95702.html" title="菠萝折纸图解与方法教程" target="_blank">菠萝折纸图解与方法教程</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-03-06/102602.html" title="圣诞树的折纸图解与方法教程5" target="_blank">圣诞树的折纸图解与方法教程5</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-03-19/103731.html" title="龙猫的折纸图解与方法教程" target="_blank">龙猫的折纸图解与方法教程</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-03-19/103714.html" title="四叶草3的折纸图解与方法教程" target="_blank">四叶草3的折纸图解与方法教程</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-02-26/101268.html" title="百合花的折纸图解与方法教程2" target="_blank">百合花的折纸图解与方法教程2</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-02-13/98771.html" title="蝴蝶的折纸图解与方法教程3" target="_blank">蝴蝶的折纸图解与方法教程3</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-02-13/98786.html" title="郁金香的折纸图解与方法教程" target="_blank">郁金香的折纸图解与方法教程</a><span></span></li>--}}
                        {{--<li class="t_li"><a href="/shougongzhizuo/zhezhidaquan/2017-03-05/102360.html" title="玫瑰花2的折纸图解与方法教程" target="_blank">玫瑰花2的折纸图解与方法教程</a><span></span></li>--}}
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
     var title = "{{ $items->title }}";
     var category = "{{ $items->category }}"
     var html="";
     var srcid = "";

for(var i= 0; i<title.length;i++)
{
    srcid=title.substring(i,i+1)


    html +="<p><img src='/picture/full/"+ category+"/"+title+"/"+srcid+".jpg'"+ "title='' alt='' width='80%'> </p>";
}
$(".t_news_txt").append(html);

    </script>
@stop