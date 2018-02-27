@extends('master')
@section('title')
    分享指南
@stop
@section('content')
    <link rel="stylesheet" href="/css/aboutus.css">
    <div class="channel-main detailBox">
        <div class="wrap channel-wraper">
            <div class="cont-goback"><span>您的位置：</span><a href="http://www.qbaobei.com">首页</a>&gt;<span>内容分享指南</span>
            </div>
            <div class="baike-main">
                <div class="artcle-box">
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <strong><span style="line-height:1;"><span style="line-height:2;color:#E53333;">内容分享指南:</span><span style="line-height:2;color:#E53333;"></span></span></strong>
                    </p>
                    <blockquote style="margin:0 0 0 40px;border:none;padding:0px;">
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">喜啦啦宝贝网是一个纯用户分享的母婴资讯网站，为了维护良好的分享氛围，喜啦啦宝贝网平台的维护者将依据《喜啦啦宝贝网使用协议》与以下条款，对发布在喜啦啦宝贝网平台里的内容进行管理。采取的措施包括但不限于删除内容、暂停或终止用户使用喜啦啦宝贝网。</span>
                        </p>
                    </blockquote>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <br>
                    </p>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <strong><span style="line-height:1;"><span style="line-height:2;color:#E53333;">喜啦啦宝贝网倡导理念:</span><span style="line-height:2;color:#E53333;"></span></span></strong>
                    </p>
                    <blockquote style="margin:0 0 0 40px;border:none;padding:0px;">
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">分享：喜啦啦宝贝网鼓励用户分享高质量的原创内容；</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">尊重：喜啦啦宝贝网尊重用户知识产权、劳动成果；</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">宽容：喜啦啦宝贝网提倡用户在彼此尊重的基础上进行建设性的交流。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
		<span style="line-height:2;"><br>
</span>
                        </p>
                    </blockquote>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <span style="line-height:2;"></span>
                    </p>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <strong><span style="line-height:2;color:#E53333;">喜啦啦宝贝网坚决反对以下行为:</span></strong>
                    </p>
                    <blockquote style="margin:0 0 0 40px;border:none;padding:0px;">
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">发布违反中国以及喜啦啦宝贝网用户所在地法律法规的内容。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">侵犯他人内容版权（见《知识产权细则》）。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">使用不文明用语、人身攻击、故意骚扰、泄露他人隐私以及地域性歧视。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">发布对其他用户造成骚扰的广告、营销性质内容。</span>
                        </p>
                    </blockquote>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <br>
                    </p>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <strong><span style="line-height:2;color:#E53333;">内容创作指导原则:</span></strong>
                    </p>
                    <blockquote style="margin:0 0 0 40px;border:none;padding:0px;">
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">文章内容为用户全权拥有和管理。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">文章内容全部来自用户分享，但喜啦啦宝贝网保留对这些内容的处理权力，包括但不限于屏蔽（不出现在公共区域，包括但不限于榜单、分类）、删除，请自行做好内容备份。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">喜啦啦宝贝网工作人员有责任和义务及时删除不不规范的内容。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">用户之间关于内容以及交流过程中产生的分歧与争执，喜啦啦宝贝网工作人员不参与协调和处理。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">违反规则的内容以及根据用户的据实投诉，喜啦啦宝贝网有可能删除该内容，并保留对违规用户帐号的处理权利（包括但不限于暂停使用、删除帐号）。</span>
                        </p>
                    </blockquote>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <br>
                    </p>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <strong><span style="line-height:2;color:#E53333;">知识产权细则:</span></strong>
                    </p>
                    <blockquote style="margin:0 0 0 40px;border:none;padding:0px;">
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">用户在喜啦啦宝贝网发布的图片、文字等内容，著作权均归本人所有。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">用户自行发布或者授权他人在喜啦啦宝贝网平台发表的全部内容，授予喜啦啦宝贝网免费的、不可撤销的、非独家使用许可，用于喜啦啦宝贝网相关的产品和服务上，包括但不限于网站、手机客户端或其他互联网产品，喜啦啦宝贝网将在显著位置标注作者信息。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">标有「独家」选项的文章，用户如果需要同时发布在其他互联网平台，需要得到喜啦啦宝贝网的许可，否则视为侵权，喜啦啦宝贝网保留对这些内容的处理权力，包括但不限于取消「独家」标识、屏蔽（不出现在公共区域，包括但不限于榜单、分类里）、删除，请自行做好内容备份。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">第三方出于非商业目的，将用户在喜啦啦宝贝网上发表的内容进行转载，应该在显著位置注明原作者信息以及「来源于喜啦啦宝贝网」、给出原始链接，并且不允许对内容进行修改演绎（如用户在内容里表达拒绝任何形式的转载，以用户的版权声明为准）。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">用户需要对上传的图片、文字等内容的版权负责，喜啦啦宝贝网不承担因此带来的任何第三方责任以及法律风险。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">对于第三方侵犯喜啦啦宝贝网用户的相关权益，在用户的同意和授权下，喜啦啦宝贝网保留对该第三方提出警告、诉讼的权利。</span>
                        </p>
                    </blockquote>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <br>
                    </p>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <strong><span style="line-height:2;color:#E53333;">用户指导细则:</span></strong>
                    </p>
                    <blockquote style="margin:0 0 0 40px;border:none;padding:0px;">
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">账号大量使用关注、点赞、留言等行为进行活动拉票，或者推销自身账号的行为，喜啦啦宝贝网系统或者工作人员将以适当的方式发出警告通知，并且暂停使用该账号的部分功能。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">有下列行为，账号立即停用：群发广告、恶意刷屏、使用程序操作、冒充其他用户、滥用行为。</span>
                        </p>
                    </blockquote>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <br>
                    </p>
                    <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                        <strong><span style="line-height:2;color:#E53333;">其他申明:</span></strong>
                    </p>
                    <blockquote style="margin:0 0 0 40px;border:none;padding:0px;">
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">所有本协议未涉及的情况参考《喜啦啦宝贝网使用协议》。</span>
                        </p>
                        <p style="margin-top:0px;margin-bottom:0px;padding:0px;color:#333333;font-family:微软雅黑, 'Arial Narrow', HELVETICA;font-size:16px;line-height:24px;white-space:normal;">
                            <span style="line-height:2;">喜啦啦宝贝网保留对本协议修改的权利并以适当的方式通知用户。</span>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@stop