@extends('master')

@section('title')
     帮助
    @stop
@section('content')


    <div class="line_row"></div>
    <script src=" http://api.tianditu.com/js/maps.js" type="text/javascript"></script>
    <script>
        var map;
        var zoom = 12;
        function onLoad()
        {
            //初始化地图对象
            map=new TMap("mapDiv");
            //设置显示地图的中心点和级
            map.centerAndZoom(new TLngLat(116.40969,39.89945),zoom);
        }
    </script>
        <div class="row-fluid">
            <div class="span6">
                <h3>
                    婴幼儿教学.
                </h3>
                <dl>
                    <dt>Rolex</dt>
                    <dd>劳力士创始人为汉斯.威尔斯多夫，1908年他在瑞士将劳力士注册为商标。</dd>
                    <dt>Vacheron Constantin</dt>
                    <dd>始创于1775年的江诗丹顿已有250年历史，</dd>
                    <dd>是世界上历史最悠久、延续时间最长的名表之一。</dd>
                    <dt>IWC</dt>
                    <dd>创立于1868年的万国表有“机械表专家”之称。</dd>
                    <dt>Cartier</dt>
                    <dd>卡地亚拥有150多年历史，是法国珠宝金银首饰的制造名家。</dd>
                </dl>
                <ul class="help_company" style="margin-top: 50px;">
                    <li>公司地址：</li>
                    <li>公司地址：</li>
                    <li>研发团队：</li>
                    <li>邮箱：</li>
                </ul>
            </div>
            <div class="span6">
                <div id="mapDiv" style="position:absolute;width:40%; height:400px"></div>
            </div>

        </div>

    @stop