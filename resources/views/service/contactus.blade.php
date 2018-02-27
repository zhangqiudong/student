@extends('master')
@section('title')
    联系我们
@stop
@section('content')
    <link rel="stylesheet" href="/css/aboutus.css">
    <div class="aboutus">
        <div class="aboutus_cont">
            <div class="aboutus_head">
                <div class="logo_h_l">
                    <a class="logo" style="background: url('http://www.qbaobei.com/Public/Home/qbaobei2/images/logo1.png') no-repeat;">喜啦啦宝贝</a>
                    <h2>全球精品育儿门户</h2>
                    <div class="flower"></div>
                </div>
            </div>
            <div class="aboutus_box">
                <div class="aboutus_left">
                    <div class="a_box_tit">关于我们</div>
                    <ul class="a_box_list">
                        <li><a class="" href="javascript:;">网站介绍</a></li>
                        <li style="display:none;"><a href="javascript:;">喜啦啦宝贝大事记</a></li>
                        <li><a href="javascript:;">广告服务</a></li>
                        <li style="display:none;"><a href="javascript:;">投稿指南</a></li>


                        <li><a href="javascript:;">网站合作</a></li>
                        <li><a href="javascript:;">免责声明</a></li>
                        <li><a href="javascript:;" class="a_l_nav">联系我们</a></li>
                    </ul>
                </div>
                <div class="aboutus_right">
                    <div class="a_text01" style="display: none;">
                        <div class="a_nr_tit">
                            <h2>网站介绍</h2>
                        </div>
                        <div class="a_nr_list">
                            <h2>喜啦啦宝贝网简介</h2>
                            <p class="a_sj">   喜啦啦宝贝网(www.qbaobei.com)是专业的“母婴＋教育”一站式服务平台，于1999年倾力上线，是中国成立最早的垂直母婴网站。</p>
                            <p class="a_sj">   喜啦啦宝贝网的团队是一个充满激情理想务实的团队，我们拥有国内顶级育儿专家团队和富有拼搏精神的数百名早教专业人员，我们一直以团结协作、积极向上的理念为千千万万的准妈妈、妈妈们和宝宝们提供最贴心的服务。</p>
                            <p class="a_sj">   喜啦啦宝贝网历经18年的发展，目前拥有100万注册用户，累计超过90万篇专业育儿文章。回首过去的18年，我们不断创新，追求卓越，以“打造高品质的内容与产品，提供全方位的孕产育儿服务”为宗旨，通过互联网、移动终端等多种形态网络媒体资源，累计吸引8000万以上用户在此学习、分享、体验，现已成为国内最知名最权威的精品育儿门户网站之一。</p>
                            <p class="a_sj">   喜啦啦宝贝网还在不断创新中。2013年，喜啦啦宝贝网对系统和产品进行了全新的架构升级，将紧随信息时代的大变革，以至上的用户体验为先，综合运用华强的网络技术、云端技术优势，创建“最具价值、创新实用、趣味互动”的全媒体母婴及教育产品，“最全面、最专业、最前沿”的资讯服务和消费导向，继续引领潮流，稳固保持并吸引更宽、更广范围的用户群体和商业伙伴，合作共赢。</p>

                        </div>
                        <div class="a_nr_list">
                            <p class="a_nr_wenzi-hui">频道介绍</p>

                            <h2><a href="http://www.qbaobei.com/yuerbaodian/" target="_blank">育儿频道——</a><span class="a_nr_hui">分阶段、全方位提高养育知识</span></h2>
                            <p class="a_sj">  喜啦啦宝贝网育儿频道，致力于服务新手父母，并按宝贝的成长提供分阶段的婴幼儿养育知识。频道划分为孕前、0-1岁、1-3岁、3-6岁四个栏目，涵盖婴幼儿喂养、护理、健康等各方面相关的育儿资讯，让您的育儿生活更加丰富。</p>
                            <h2><a href="http://bbs.qbaobei.com/forum.php" target="_blank">早教频道——</a><span class="a_nr_hui">开启宝宝八大智能全面发展的金钥匙</span></h2>
                            <p class="a_sj">  喜啦啦宝贝网早教频道，汇集实用早教知识、早教技巧，为您提供0-6岁多样化的早期教育资讯及服务。同时还有国内外经典有趣的绘本童书资源，让宝宝随时随地听儿歌、讲故事、玩游戏、学知识，精选易于开发宝宝智力的趣味内容，让宝宝在快乐的情境中学习，轻松地开启智慧之门。早教频道作为早教交流及资源共享平台，是父母培养聪明快乐宝宝的好帮手。</p>
                            <h2><a href="http://home.qbaobei.com/" target="_blank">营养频道——</a><span class="a_nr_hui">让宝宝能吃、会吃、爱吃的饮食手册</span></h2>
                            <p class="a_sj">  喜啦啦宝贝网营养频道，是您必备的饮食手册，为准妈妈提供专业、多样的备孕、怀孕、月子的营养指导和食谱。为妈妈们提供营养、健康的婴儿辅食、宝宝营养饮食指导和食谱。开心每一天，从吃开始。</p>
                            <h2><a href="http://www.qbaobei.com/baobaoleyuan/" target="_blank">视频频道——</a><span class="a_nr_hui">娱乐中学习，知识全掌握</span></h2>
                            <p class="a_sj">  喜啦啦宝贝网视频频道，特地邀请全国各地顶级育儿专家团队，通过育儿专家权威风趣的亲身讲解，配合囊括了从准妈妈备孕到宝宝入学间所有育儿知识。同时还为儿童准备的健康有趣的教育故事、儿歌、动画、游戏等，为妈妈和宝宝免费提供丰富专业知识。</p>
                            <h2><a href="http://www.qbaobei.com/baobaoleyuan/" target="_blank">问答频道——</a><span class="a_nr_hui">答疑解惑，解决孕育过程所有问题</span></h2>
                            <p class="a_sj">  喜啦啦宝贝网问答频道，通过与三甲妇产医院联手提供最专业育儿知识问答，将孕育过程中所需要的知识、工具、答疑等权威内容聚合，以准确的私人定制知识的方式呈现给新手父母。让新手父母们每天获取更多新知识。</p>
                            <h2><a href="http://www.qbaobei.com/baobaoleyuan/" target="_blank">试用频道——</a><span class="a_nr_hui">助宝妈试后再选择，做最真实的用户体验</span></h2>
                            <p class="a_sj">  喜啦啦宝贝网试用频道，为广大的妈妈们提供各种有趣实用的母婴用品试用，妈妈们可以轻易地申请母婴产品进行试用，然后将试用感受、产品意见撰写成试用报告，提交到平台上来。试用中心提倡妈妈们从自身的角度出发，真实体验、深度使用商家提供的产品，有态度有深度地分享，从而帮助大家在购买母婴产品时有更好的参考。</p>

                        </div>
                    </div>
                    <!--div class="a_text02" style="display:none;">
                        <div class="a_nr_tit">
                            <h2>喜啦啦宝贝大事记</h2>
                        </div>
                        <div class="a_nr_list">
                            <h2>1999年</h2>
                            <p class="a_sj">  1999年1月，喜啦啦宝贝网于深圳成立，是最早成立的母婴网站之一。</p>
                            <h2>2006年</h2>
                            <p class="a_sj">  2006年，喜啦啦宝贝网PV超过80万，同时IP超过20万。 </p>
                            <h2>2007年</h2>
                            <p class="a_sj">  2007年6月，深圳华强传媒投资有限公司强势入驻喜啦啦宝贝网，加强资源整合，成功为用户和商家提供了全方位，多层次服务，并建立了相关服务体系。</p>
                            <h2>2008年</h2>
                            <p class="a_sj">  2008年1月19日，喜啦啦宝贝网联手深圳晚报、现代教育报、搜房网，成功举办了深圳首届亲子文化节，现场参与宝宝1000多名，现场观众上万人，是深圳有史以来规模最大影响最广内容最为丰富的亲子文化活动；</p>
                            <p class="a_sj">  2008年6月22日，基于首届亲子文化节影响深远，深受用户喜爱， 喜啦啦宝贝网策划并组织了深圳第二届亲子文化节。在深圳30个高档社区内开展，为鹏城家庭提供了相互沟通、交流的平台；</p>
                            <p class="a_sj">  2008年7月，喜啦啦宝贝网与39健康网建立内容合作关系。</p>
                            <h2>2010年</h2>
                            <p class="a_sj">  2010年4月，成功举办快乐童声mp3音频大赛；</p>
                            <p class="a_sj">  2010年6月，携手三公仔小儿七星茶成功开展15场社区活动；</p>
                            <p class="a_sj">  2010年8月，与方正建立内容合作。</p>
                            <h2>2011年</h2>
                            <p class="a_sj">  2011年3月，喜啦啦宝贝网联合深圳卫生局、深圳新闻网、南方报业网、搜狐视频、中国时刻网、晶报、南方都市报、深圳晚报、地铁早八点共同举办《关爱孕妇大型爱心公益活动》通过向准妈妈发放爱心徽章，呼吁社会给予孕妇更多的关爱和呵护。 </p>
                            <h2>2012年</h2>
                            <p class="a_sj">  2012年3月，《宝宝生日会-亲子蛋糕DIY活动》成功举办；</p>
                            <p class="a_sj">  2012年5月，推与《QQ星宝宝秀场》活动，近百个幼儿园参与海选，五场复赛，一场决赛，参与才艺宝宝一千多名；</p>
                            <p class="a_sj"> 2012年12月，《第三届深圳亲子文化节》启动，在深圳湾大型启动仪式后，进入深圳30个高端社区巡回活动；51家媒体全程跟踪报道，席卷全城！</p>

                        </div>
                    </div-->

                    <div class="a_text03" style="display:none;">
                        <div class="a_nr_tit">
                            <h2>广告服务</h2>
                        </div>
                        <div class="a_nr_list">
                            <h2>广告服务热线：</h2>

                            <p class="a_sj">  邮箱：<a href="mailto:czgw@jf.com">czgw@jf.com</a></p>
                            <p class="a_sj">  联系人：陈女士</p>
                            <p class="a_sj"> <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2949246001&amp;site=qq&amp;menu=yes" target="_blank">
                                    <img border="0" title="立即联系广告服务" alt="立即联系广告服务" src="http://wpa.qq.com/pa?p=2:2949246001:51">
                                </a> </p>
                            <!--p></p><p></p>
                            <span class="a_ppt"><a href="喜啦啦宝贝网刊例价.xls">喜啦啦宝贝新刊例价下载</a></span-->





                        </div>
                    </div>
                <!--div class="a_text04" style="display:none;">
					<div class="a_nr_tit">
						<h2>投稿指南</h2>
					</div>
					<div class="a_nr_list">
						<p></p><p></p><p></p>
						<p class="a_sj">  喜啦啦宝贝网（www.Qbaobeicom）作为提供全面、准确、权威母婴资讯和互动平台的大型专业网站，站内拥有多个高质量、多元化的专栏。为了更好地服务于读者，更全面地提供一站式的母婴资讯服务，诚征优秀稿件。</p>

						<h2>稿件要求</h2>
						<p class="a_sj">  1、稿件内容需是与某具体产品或活动紧密相关的使用心得、购买体验、功效详析等文章。要求稿件论点中立，论述详实，能够对读者的使用或购买起到指导作用。文章体裁不限，字数不限；</p>
						<p class="a_sj">  2、稿件建议采用纯文本格式(*.txt)。如果是文本文件，请注明插图位置。插图应清晰可辨，可保存为*.jpg、*.gif格式。如使用word等编辑的文本，建议不要将图片直接嵌在word文件中，而将插图另存，并注明插图位置；</p>
						<p class="a_sj"> 3、如果用电子邮件投稿，请务必压缩后发送；</p>
						<p class="a_sj"> 4、请使用中文的标点符号，例如句号为“。”而不是“.”； </p>
						<p class="a_sj"> 5、来稿请注明作者信息，包括：署名(真实姓名、笔名)、详细地址、邮编、联系电话、E-mail地址等，以便联系；</p>
						<p class="a_sj"> 6、我们保留对稿件的增删权；</p>
						<p class="a_sj"> 7、我们对有一稿多投、剽窃或抄袭行为者，将保留追究由此引起的法律、经济责任的权利； </p>
						<p class="a_sj"> 8、作者如愿长期合作，请与我们联系。 </p>

						<h2>投稿要求</h2>
						<p class="a_sj"> 1、请使用电子邮件方式投递稿件；</p>
						<p class="a_sj"> 2、编译的稿件，请注明出处并附带原文；</p>
						<p class="a_sj">  3、请按稿件内容投递到相关编辑信箱。</p>

						<h2>稿件著作权</h2>
						<p class="a_sj"> 1、投稿人保证其向我方所投之作品是其本人或与他人合作创作之成果，或对所投作品拥有合法的著作权，无第三人对其作品提出可成立之权利主张；</p>
						<p class="a_sj"> 2、投稿人保证向我方所投之稿件，应为尚未在任何媒体上发表过；</p>
						<p class="a_sj"> 3、投稿人保证其作品不含有违反宪法、法律及损害社会公共利益之内容；</p>
						<p class="a_sj"> 4、投稿人向我方所投之作品不得同时向第三方投送，即：不允许一稿多投。若投稿人有违反该款约定的行为，则我方有权不向投稿人支付报酬。但我方在收到投稿人所投作品10日内未作出采用通知的除外；</p>
						<p class="a_sj"> 5、支付稿费的稿件，网站有绝对使用权；</p>
						<p class="a_sj"> 6、投稿人委托我方声明，未经我方许可，任何网站、媒体、组织不得转载、摘编其作品；</p>
						<p class="a_sj"> 7、稿费中已经包含作品首次刊发费用以及我方取得与行使作品专有使用权的全部费用。即我方在对作品行使专有使用权时，无须另行支付报酬。</p>

						<h2>稿费结算</h2>
						<p class="a_sj"> 1、原创稿件的稿酬标准为30 - 200元人民币/千字，编译稿件的稿酬标准为20 - 60元人民币/千字。特稿特酬，优稿优酬；</p>
						<p class="a_sj"> 2、我们采用邮局汇款的方式支付稿费，请在稿件中注明真实姓名，汇款地址和邮政编码</p>
						<p class="a_sj"> 3、如果你希望通过银行卡结算，请在稿件中注明真实姓名，银行卡种类（建议使用招商银行一卡通），卡号，开户银行的完整名称（例如：XX银行XX分行XX支行，或信用卡中心、办事处、营业部、分理处…）； </p>
						<p class="a_sj"> 4、稿费隔月结算。（仅对按要求及时提供相信信息者）；</p>
						<p class="a_sj"> 5、稿件采用后发现一稿多投的，稿费不予支付；</p>
						<p class="a_sj"> 6、长期投稿的作者需要提交身份证复印件；</p>

						<h2>投稿联系方式</h2>
						<p class="a_sj"> 投稿邮箱：<a href="mailto:YQX@qbaobei.com">YQX@qbaobei.com</a></p>
						<p class="a_sj2">  袁小姐QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=2949246001&site=qq&menu=yes" target="_blank">
<img border="0" title="立即联系广告服务" alt="立即联系广告服务" src="http://wpa.qq.com/pa?p=2:2949246001:51">
</a></p>
					</div>
				</div-->



                    <div class="a_text05" style="display:none;">
                        <div class="a_nr_tit">
                            <h2>网站合作</h2>
                        </div>
                        <div class="a_nr_list">
                            <p></p><p></p><p></p>
                            <p class="a_sj">  我们愿意倾听所有以育儿教育服务为出发点的好想法，欢迎交流！欢迎各种形式与层次的内容和商务合作！</p>
                            <p class="a_sj">  内容合作：提供和接纳与育儿教育相关的优良资讯；</p>
                            <p class="a_sj">  商务推广合作：交换资源，共同实现各自网站稳定增长；</p>
                            <p></p>
                            <p class="a_sj">  电话：132 0748 3097 </p>
                            <p class="a_sj">  市场部QQ：<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2949246001&amp;site=qq&amp;menu=yes" target="_blank">
                                    <img border="0" title="立即联系市场部" alt="立即联系市场部" src="http://wpa.qq.com/pa?p=2:2949246001:51">
                                </a></p>

                        </div>
                    </div>
                    <div class="a_text06" style="display:none;">
                        <div class="a_nr_tit">
                            <h2>免责声明</h2>
                        </div>
                        <div class="a_nr_list">
                            <p></p><p></p><p></p>
                            <p>  一、本网刊载的各类形式的作品（包括但不仅限于文字、图片、图表、音像、电影）仅出于非商业性的信息传递，并不意味着赞同其观点或证实其内容的真实性，与喜啦啦宝贝网立场无关，使用时仅供参考，不构成任何使用建议。对于网友根据喜啦啦宝贝网提供的信息所做出的一切行为，相关责任作者需自行担负，除非另有明确的书面承诺文件，否则喜啦啦宝贝网不承担任何形式的责任。</p>
                            <p> 二、 喜啦啦宝贝网有权将在喜啦啦宝贝网内发表的作品用于其他用途，包括网站、电子杂志等，作品有附带版权声明者除外。</p>
                            <p>三、 当喜啦啦宝贝网以网络链接形式推荐内容给合作网站时，喜啦啦宝贝网不对这些网站或资源的可用性负责，且不保证从合作网站获取的任何内容、产品、服务或其他材料的真实性、合法性，对于任何因使用或信赖从此类网站或资源上获取的内容、产品、服务或其他材料而造成（或声称造成）的任何直接或间接损失，喜啦啦宝贝网均不承担任何责任。</p>
                            <p> 四、由于用户将个人密码告知他人或与他人共享注册账户，由此导致的任何个人资料泄露，喜啦啦宝贝网不负任何责任。</p>
                            <p> 五、任何由于计算机问题、黑客攻击、计算机病毒侵入或发作或因政府管制而造成的暂时性关闭等影响网络正常经营的不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等，喜啦啦宝贝网均得免责。</p>
                            <p>六、 除喜啦啦宝贝网注明之服务条款外，其他一切因使用喜啦啦宝贝网而引致之任何意外、疏忽、诽谤、版权或知识产权侵犯及其所造成的损失（包括因下载而感染电脑病毒），喜啦啦宝贝网概不负责，亦不承担任何法律责任。</p>
                            <p>七、 您与喜啦啦宝贝网上的广告或通过网站与广告商有往来或商业交易，或参与广告商的促销活动，包括有关货品或服务的付款及交付，以及关于此类交易的任何其他条款、条件、保证或陈述，纯属您与广告商之间的交易。若因此类交易而产生任何性质的任何损失或损害，喜啦啦宝贝网不对此负有责任。</p>

                        </div>
                    </div>
                    <div class="a_text07" style="">
                        <div class="a_nr_tit">
                            <h2>联系我们</h2>
                        </div>
                        <div class="a_nr_list">
                            <div class="a_nr_logo">
                                <!--a href="#"><img src="../Template/Qbaobei/Skin/v3/image/tmp/a_logo1.jpg" /></a-->
                                <a href="http://www.qbaobei.com"><img src="http://www.qbaobei.com/Public/Home/qbaobei2/images/logo1.png"></a>
                            </div>
                            <h2>市场部<span class="a_nr_hui">（活动合作、媒体合作、内容合作、品牌合作、项目合作、广告服务等）</span></h2>
                            <p class="a_sj">  市场部QQ：<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2949246001&amp;site=qq&amp;menu=yes" target="_blank">
                                    <img border="0" title="立即联系市场部" alt="立即联系市场部" src="http://wpa.qq.com/pa?p=2:2949246001:51">
                                </a></p>

                            <h2>广告服务</h2>

                            <p class="a_sj">  邮箱：<a href="mailto:czgw@jf.com">czgw@jf.com</a></p>
                            <p class="a_sj">  电话：132 0748 3097 </p>
                            <p class="a_sj">  联系人：陈女士</p>
                            <p class="a_sj"> <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2949246001&amp;site=qq&amp;menu=yes" target="_blank">
                                    <img border="0" title="立即联系广告服务" alt="立即联系广告服务" src="http://wpa.qq.com/pa?p=2:2949246001:51">
                                </a> </p>



                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop