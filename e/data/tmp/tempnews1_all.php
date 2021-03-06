<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <title><?=$grpagetitle?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="design by www.dede58.com" />
    <link href="/skin/default/css/style.css" rel="stylesheet">
    <link href="/skin/default/css/animate.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />

    <!--[if lt IE 9]>
    <script src="/skin/default/js/html5shiv.min.js"></script>
    <script src="/skin/default/js/respond.min.js"></script>
    <link href="/skin/default/css/ie8.css" rel="stylesheet">
    <![endif]-->
    <!--[if IE 9]>
    <link href="/skin/default/css/ie9.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 6]>
    <meta http-equiv="refresh" content="0;url=/no-ie6.html" />
    <![endif]-->
    <!--[if lte IE 7]>
    <meta http-equiv="refresh" content="0;url=/no-ie6.html" />
    <![endif]-->
</head>
<body>
<!-- head start -->
<header class="header header-top" id="header">
    <div class="container">
        <h1><a href="/" class="logo pull-left"><img src="/skin/default/images/logo.png" width="60" height="60" alt="logo"/></a>
            <small class="pull-left">一句简单的slogan<br/>可以改变一切
            </small>
        </h1>
        <nav class="nav pull-right">
            <ul class="nav-bar list-unstyled pull-left" id="nav">
                <li class="active"><a href="/">网站首页</a></li>
                <li><a href="/case/">依托单位</a>
                    <ul class="list-unstyled">
                        <li><a href="/case/sheji/">单位1</a></li>
                        <li><a href="/case/web/">单位2</a></li>
                        <li><a href="/case/net/">单位3</a></li>
                    </ul>
                </li>
                <li><a href="/team/">专家团队</a></li>
                <li><a href="/technology/">工艺技术</a>
                    <ul class="list-unstyled">
                       <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,3,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                           <li><a href="<?=$bqr['techurl']?>"><?=$bqr['title']?></a></li>
                       <?php
}
}
?>
                    </ul>
                </li>
                <li><a href="/news/ournews/">新闻资讯</a>
                    <ul class="list-unstyled">
                        <li><a href="/news/ournews/">公司新闻</a></li>
                        <li><a href="/news/hangye/">行业新闻</a></li>
                        <li><a href="/news/zhishi/">专业知识</a></li>
                    </ul>
                </li>
                <li><a href="/about.html">关于我们</a></li>
                <li><a href="/contact/">联系我们</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- head End -->
<!-- ym-banner start -->
<section class="ny-banner text-center" style="background-image:url(/skin/default/images/2014091259957041.png)">
    <div class="container text-left">
        <h2 class="text-left">新闻中心 Case<small>每一个设计作品都举世无双</small></h2>
        <p class="weizhi">当前位置：<a href='http://127.0.0.11/'>主页</a> > <a href='/news/'>新闻资讯</a> > <a href='/news/zhishi/'>专业知识</a> > </p>
    </div>
</section>
<!-- ym-banner End -->
<!-- crumbs start -->
<section class="crumbs text-right">
    <div class="container">
        <ul class="list-unstyled">

            <li><a href="/news/gongsi/" >公司新闻</a></li>

            <li><a href="/news/hangye/" >行业新闻</a></li>
            <li><a href='/news/zhishi/' class='hover'>专业知识</a></li>
        </ul>
    </div>
</section>
<!-- crumbs End -->
<!-- content start -->
<div class="neirong">
    <article class="container info sx-padding clearfix" id="demo">
        <main class="main pull-left">
            <h2 class="biaoti wow animated fadeInUp" >公司在网站是不是需求策划？</h2>
            <p class="shuoming wow animated fadeInUp">日期：2015-05-29 / 人气：<span id="show_i_hits"><?=$ecms_gr[onclick]?></span></p>
            <div class="wow animated fadeInUp">
                <div>
                    织梦模板网分享： 网站策划关于网站建设来说很重要，但是许多网站建造的拥护者和制造人所并没有意识到这一点。许多公司仅仅简略的制造网站：直接拿一些有关的公司简介和商品的有关介绍资料，拍几张相片就交给制造人，让他们做的漂亮点，最终等着验收成果。而制造人呢，以客户需求为起点，为了页面愈加的美观，将一些动态效果加进去就交差了。这样的网站可能外观还不错也挺契合两边的需求，但必定不是一个有用的网站。为何呢？由于它并不算一个公司的宣扬画册而仅仅一个相似黑板报的东西，它传递的内容都太简略了，并不有用。</div>
                <div>
                    公司网站要想建造的有内容，有深度，有价值应该要具有一些功用，能够称为功用性网站。运用网络技能配上公司实际的产品做出来的网站才可称为功用型网站。举个比如：北京有一个家具商场，它的供货商在内蒙古，投资方在上海，北京的经销商每天都要用传真发送出售报表给上海的董事长，又要常常与内蒙古交流让内蒙古全面的了解北京的情况及时的进行供货。这些交流的办法通常是经过电话、传真等进行的，既不便利又不经济，假如没有人接听或接纳传真就对比麻烦了。本来这些工作能够在网上来完成的，只需都上网，就能够随时了解北京的信息了，并且自在的进行数据的核算综合等，不只便利，并且大大降低了本钱。</div>
                <div>
                    这种比如不计其数，总结起来网站的功用能够分为：</div>
                <div>
                    1、信息传递功用　</div>
                <div>
                    2、商品出售功用　</div>
                <div>
                    3、物流办理功用　</div>
                <div>
                    4、资金办理功用　</div>
                <div>
                    5、推广办理功用　</div>
                <div>
                    6、付出结算功用</div>
                <div>
                    7、工作办理功用　等等。</div>
                <div>
                    公司的实质即是一个推广整合的进程，关于公司网站建造的各种需求要充沛的了解和查询明白，公司的商场情况、竞争状态、推广途径、办法及办法等都是需求了解的内容，然后联系互联网的技能，将合适网上操作的放在网上进行有关操作，假如是与网络联系的，那么就联系起来，这姿态的网站的功用才是有用的，契合人们需求的。</div>
                <div>
                    许多传统推广的行家关于互联网了解的仍是不行透彻，关于许多能够经过网络完成的功用还不是太明白，或许仅仅浅显的了解一点，那么也就提不出有深度的需求，关于功用的设置也就不在行，这时就需求网络推广策划人了。网站所要策划的和必不可少的中心即是怎么简捷地表现网站的功用，并且让网站的功用与公司的ci体系有用的联系起来。</div>
                <div>
                    由此可知，网站规划的策划师必不可少的。一个成功的推广企划人应该具有这些本质：关于商场规律有充沛的了解，传统推广策划经历适当丰厚，对互联网了如指掌，工作道德观念十分的高尚</div>

            </div>
            <p class="text-right wow animated fadeInUp animated" style="visibility: visible;">编辑：dede58.com</p>
            <div class="content_page"></div>
            <hr />
            <div class="text-center wow animated fadeInUp"><a href='/news/zhishi/25.html' class='btn-success'>上一篇：喜欢静态页的站长们福利来了！ ←</a> <a href='#' class='btn-success'>下一篇：没有了</a></div>
        </main>
        <aside class="aside pull-left">
            <h4 class="ny-h4 wow animated fadeInUp">相关内容 <small>Related</small></h4>
            <ul class="list-unstyled clearfix wow animated fadeInUp">
                <li><a href="/news/zhishi/26.html" target="_blank" >公司在网站是不是需求策划？…</a><small class="pull-right">05-29</small></li>
                <li><a href="/news/zhishi/25.html" target="_blank" >喜欢静态页的站长们福利来了…</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/24.html" target="_blank" >你的网站是怎样增加用户体验…</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/23.html" target="_blank" >防止蜘蛛掉到陷阱的最好办法…</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/22.html" target="_blank" >网站内容不是你想的那么简单…</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/21.html" target="_blank" >您制作网站的初衷是什么？…</a><small class="pull-right">05-26</small></li>

            </ul>


            <h4 class="ny-h4 wow animated fadeInUp">联系我们 <small>Contact US</small></h4>
            <ul class="list-unstyled clearfix wow animated fadeInUp">
                <li class="red">全国服务热线：400-0000-1111</li>
                <li class="red">工作电话：010-12345678</li>
                <li class="red">24小时服务手机：188-8888-8888</li>
            </ul>
        </aside>
    </article>
</div>
<!-- content End -->
<!-- footer start -->
<!-- footer start -->
<footer style="background-image: url(/skin/default/images/2014092185736673.jpg);" class="pingpu-bg" id="yy">
    <div id="demo" class="footer container sx-padding">
        <div class="clearfix wow animated fadeIn">
            <section>
                <h3>在线预约 Online booking</h3>
                <form method="post">
                    <ul class="list-unstyled">
                        <li>
                            <input name="name" type="text" id="fd_name" value="" placeholder="您的尊称 Name" maxlength="10">
                        </li>
                        <li>
                            <input name="mycall" type="text" id="fd_mycall" value="" placeholder="您的电话 Phone" maxlength="11">
                        </li>
                        <li>
                            <textarea name="saytext" cols="" id="fb_saytext" value="" placeholder="您要留言的内容 Content" maxlength="200"></textarea>
                        </li>
                        <li>
                            <input type="button" id="feedbackBtn" value="立即提交 Submit →">
                        </li>
                    </ul>
                </form>
                <div id="savediv" style="visibility:hidden;">处理中,请勿进行其他操作...</div>
            </section>
            <section class="bianju">
                <h3>联系我们 Contact US</h3>
                <address>
                    <ul class="list-unstyled">
                        <li>地址：北京化工大学</li>
                        <li>服务电话：010-11112222/ 400-8888-888</li>
                        <li>服务手机：188-8888-8888/ 24 Hours 服务</li>
                        <li>Q　　Q：88888888</li>
                        <li>E-mail：12345@qq.com</li>
                    </ul>
                </address>
            </section>
            <section>
                <h3>快捷入口 Quick Entry</h3>
                <p>  <a href="/about/" target="_blank">关于我们</a> /
                    <a href="/news/" target="_blank">新闻资讯</a> /
                    <a href="/case/" target="_blank">成功案例</a> /
                    <a href="/team/" target="_blank">企业团队</a> /
                    <a href="/service/" target="_blank">专业服务</a> /
                    <a href="/contact/" target="_blank">联系我们</a> /
                </p>
            </section>
        </div>
    </div>
    <div class="foot">
        <div class="container clearfix">
            <p class="copy pull-left">Copyright &copy; 2016-2016 京ICP备11100019号-1 <a href="http://www.luqimin.com/" target="_blank">技术支持</a></p>
            <!--<p class="renzheng pull-right text-right">
                <img src="/skin/default/images/2014090504144234.png" width="32" height="32" alt="工商合法注册企业" title="工商合法注册企业" /> 
                <img src="/skin/default/images/2014090504203747.png" width="32" height="32" alt="安全网站" title="安全网站" />
                <img src="/skin/default/images/2014090504244226.png" width="32" height="32" alt="网上报警" title="网上报警" /> 
                <img src="/skin/default/images/2014090504278696.png" width="32" height="32" alt="中国建筑装饰协会会员" title="中国建筑装饰协会会员" /> 
                <img src="/skin/default/images/2014090504317881.png" width="32" height="32" alt="中国建筑学会会员" title="中国建筑学会会员" />
             </p>-->
        </div>
    </div>
</footer>
<!-- footer end -->
<!-- jQuery start -->
<script src="/skin/default/js/jquery.min.js"></script>
<script src="/skin/default/js/wow.min.js"></script>
<script>
wow = new WOW(
{animateClass: 'animated',
offset:100});
wow.init();
</script>
<script src="/skin/default/js/headroom.min.js"></script>
<script src="/skin/default/js/jquery.headroom.js"></script>
<script>$("#header").headroom();</script>
<script src="/skin/default/js/common.js"></script>
<!-- footer end -->
<!-- kehu start -->
<!--<div class="kefu">
    <ul class="list-unstyled">
        <li><a href="/contact" title="更多联系方式" target="_blank" class="kefu-lx">在线客服</a></li>
        <li><a href="#yy" class="kefu-yy" title="快速预约设计" rel="nofollow">快速预约</a></li>
        <li><a href="#yy" class="kefu-wx" title="官方微信" rel="nofollow">官方微信<span class="kefu-weixin"><img src="/skin/default/images/kefu-weixin.jpg" width="140" height="140" alt=""/></span></a></li>
        <li><a href="#top" class="kefu-top" title="回网页顶部" rel="nofollow">返回顶部</a></li>
    </ul>
-->
</body>
</html>