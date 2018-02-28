@extends('master')
@section('title')
   才艺展示—{{ $items[0]->category }}
@stop
@section('content')
    <div class="t_main_box">

        <div class="t_g">
            <div class="t_g_t">
                <ul id="head1" class="t_ul_d">
                    <li class="current"><a href="#">手工制作类</a></li>
                </ul>
            </div>
            <div class="t_auto pb16" id="Mhead1_0" style="display: block;">
                <ul class="t_dh_tab">
                    <li><a href="/caiyi/zhezhidaquan/">折纸大全</a></li>
                    <li><a href="/caiyi/shouchaobaodaquan/">手抄报大全</a></li>
                    <li><a href="/caiyi/">黑板报大全</a></li>
                    <li><a href="/caiyi/jianzhi">剪纸大全</a></li>
                    <li><a href="//www.tom61.com/shougongzhizuo/cainixiangpini/">彩泥橡皮泥</a></li>
                    <li><a href="//www.tom61.com/shougongzhizuo/chuangyishougongdaquan/">创意手工大全</a></li>
                    <li><a href="//www.tom61.com/shougongzhizuo/feiwuliyong/">废物利用</a></li>
                    <li><a href="//www.tom61.com/shougongzhizuo/shougongbianzhi/">手工编织</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="t_m pb16">
            <div class="t_m_z">
                <script>
                   var ele  =  "{{ $items[0]->title }}";
                    if(ele == "折纸大全")
                    {
                        ele = 'zhezhi';
                    }
                    else ele = '';
                   $('.t_lb_t').find("a").eq(2).attr('href','/caiyi/'+ele);
                </script>
                <div class="t_lb_t"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/shougongzhizuo/">手工制作大全</a>&nbsp;&gt;&nbsp;<a href="/caiyi/zhezhi">{{ $items[0]->category }}</a></div>
            </div>
            <div class="t_auto pb10" id="Mhead1_0">
                @for ($i = 0; $i < count($items); $i++)

                <div class="w50 fl"><div class="t_ximg">
                        <a href="/caiyi/{{ $items[0]->category }}/{{ $items[$i]->id }}/describe" target="_blank" title="{{ $items[$i]->title }}">
                            <img class="lazy" class="abtr_img" alt="{{ $items[$i]->title }}" src="//" onerror="nofind();">
                        </a>
                    </div>
                    <div class="t_xtxt">
                        <a href="/caiyi/{{ $items[0]->category }}/{{ $items[$i]->id }}/describe" class="xt_url" target="_blank">{{ $items[$i]->title }}</a>
                        <span>{{ $items[$i]->abstract }}</span>
                    </div>
                </div>

                @endfor
<script>

  $('.lazy').each(function () {
      var ele2 = $(this).parent().attr('title');
      var ele1 = $(this).parent().attr('title').substring(0,1) ;
      var ele3 = "{{ $items[0]->category }}";
    $(this).attr('src',"/picture/full/"+ele3+"/"+ele2+"/"+ele1+".jpg")
  })

</script>
                {{--<div class="w50 fl"><div class="t_ximg">--}}
                        {{--<a href="/shougongzhizuo/zhezhidaquan/2017-09-11/120216.html" target="_blank" title="兔子3的折纸图解与方法教程">--}}
                            {{--<img class="lazy" alt="兔子3的折纸图解与方法教程" src="http://img.tom61.com/file/shougongzhizuo/zhezhidaquan/2017-09-11/1505112761163047.jpg" onerror="nofind();">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="t_xtxt">--}}
                        {{--<a href="/shougongzhizuo/zhezhidaquan/2017-09-11/120216.html" class="xt_url" target="_blank">兔子3的折纸图解与方法教程</a>--}}
                        {{--<span></span>--}}
                    {{--</div>--}}
                {{--</div>--}}


            </div>
          </div>

    </div>

@stop