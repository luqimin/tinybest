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
    <title>狂暴酷炫吊炸天</title>
    <meta name="description" content="屌屌屌专属栏目" />
    <meta name="keywords" content="屌屌屌专属栏目" />
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
<!-- banner start -->
<div class="text-center">
    <ul class="rslides list-unstyled">
        <li><div class="banner" style="background-image:url(/skin/default/images/banner1.jpg)"><!--<div class="container"><img src="/skin/default/images/banner1_1.png" alt="" /></div>--></div></li>
        <li><div class="banner" style="background-image:url(/skin/default/images/banner2.jpg)"><!--<div class="container"><img src="/skin/default/images/banner2_1.png" alt="" /></div>--></div></li>
        <li><div class="banner" style="background-image:url(/skin/default/images/banner3.jpg)"><!--<div class="container"><img src="/skin/default/images/banner3_1.png" alt="" /></div>--></div></li>
    </ul>
</div>
<!-- banner End -->
<!-- 工艺技术 start -->
<section style="background-image: url(/skin/default/images/2014092201299540.png)" class="case text-center sx-padding" id="demo">
    <div class="container">
        <h2 class="f-title wow animated fadeInUp">工艺技术 Techniques<small>为污水和固废提供专业的系统化一体式解决方案</small></h2>
        <!--<p class="fl-case wow animated fadeInUp">
            <a href="/tech/sheji/">技术分类1</a>
            <a href="/tech/web/">技术分类2</a>
            <a href="/tech/net/">技术分类3</a>
        </p>-->
        <div class="row">
            <figure class="wow animated flipInX">
                <a href="/case/web/10.html" target="_blank"><img src="/skin/default/images/1-15052610545N05-lp.jpg" width="360" height="256" alt="工业污水及固废污染处理技术"/></a>
                <figcaption>
                    <h3><a href="/case/web/10.html" target="_blank">工业污水及固废污染处理技术</a></h3>
                    <p>工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介</p>
                    <p class="case-more-top"><a href="/case/web/10.html" class="btn-success case-more" target="_blank">MORE INFO →</a></p>
                </figcaption>
            </figure>
            <figure class="wow animated flipInX">
                <a href="/case/net/7.html" target="_blank"><img src="/skin/default/images/1-150526104GK92-lp.jpg" width="360" height="256" alt="网络营销案例一"/></a>
                <figcaption>
                    <h3><a href="/case/net/7.html" target="_blank">工业污水及固废污染处理技术</a></h3>
                    <p>工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介这...</p>
                    <p class="case-more-top"><a href="/case/net/7.html" class="btn-success case-more" target="_blank">MORE INFO →</a></p>
                </figcaption>
            </figure>
            <figure class="wow animated flipInX">
                <a href="/case/net/8.html" target="_blank"><img src="/skin/default/images/1-1505261050322M-lp.jpg" width="360" height="256" alt="网络营销案例二"/></a>
                <figcaption>
                    <h3><a href="/case/net/8.html" target="_blank">工业污水及固废污染处理技术</a></h3>
                    <p>工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介...</p>
                    <p class="case-more-top"><a href="/case/net/8.html" class="btn-success case-more" target="_blank">MORE INFO →</a></p>
                </figcaption>
            </figure>
            <figure class="wow animated flipInX">
                <a href="/case/net/8.html" target="_blank"><img src="/skin/default/images/1-1505261050322M-lp.jpg" width="360" height="256" alt="网络营销案例二"/></a>
                <figcaption>
                    <h3><a href="/case/net/8.html" target="_blank">工业污水及固废污染处理技术</a></h3>
                    <p>工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介...</p>
                    <p class="case-more-top"><a href="/case/net/8.html" class="btn-success case-more" target="_blank">MORE INFO →</a></p>
                </figcaption>
            </figure>
            <figure class="wow animated flipInX">
                <a href="/case/web/10.html" target="_blank"><img src="/skin/default/images/1-15052610545N05-lp.jpg" width="360" height="256" alt="工业污水及固废污染处理技术"/></a>
                <figcaption>
                    <h3><a href="/case/web/10.html" target="_blank">工业污水及固废污染处理技术</a></h3>
                    <p>工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介</p>
                    <p class="case-more-top"><a href="/case/web/10.html" class="btn-success case-more" target="_blank">MORE INFO →</a></p>
                </figcaption>
            </figure>
            <figure class="wow animated flipInX">
                <a href="/case/web/10.html" target="_blank"><img src="/skin/default/images/1-15052610545N05-lp.jpg" width="360" height="256" alt="工业污水及固废污染处理技术"/></a>
                <figcaption>
                    <h3><a href="/case/web/10.html" target="_blank">工业污水及固废污染处理技术</a></h3>
                    <p>工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介工业污水及固废污染现状的简介</p>
                    <p class="case-more-top"><a href="/case/web/10.html" class="btn-success case-more" target="_blank">MORE INFO →</a></p>
                </figcaption>
            </figure>
        </div>
    </div>
</section><!-- 工艺技术 end -->

<!-- 平台依托单位 start -->
<section style="background-image: url(/skin/default/images/2014092200018883.jpg);" class="fuwu-bg pingpu-bg" id="demo">
    <div class="fuwu container text-center sx-padding">
        <h2 class="f-title wow animated fadeInUp">平台依托单位 Our Partners<small>创新性产学研合作和科技成果转化及产业化平台</small></h2>
        <div class="row">
            <figure class="wow animated zoomIn">
                <a href="javascript:" class="pic3"></a>
                <figcaption><a href="javascript:">北京化工大学生物质能源与环境工程研究中心</a></figcaption>
                <p>从办公选址到现场勘测再到需求挖掘，每个环节都有优秀的设计团队为您服务，每一个设计作品都举世无双，每一次服务体验都觉得那么亲切。</p>

            </figure>
            <figure class="bianju wow animated zoomIn">
                <a href="javascript:" class="pic2" target="_blank"></a>
                <figcaption><a href="javascript:">南京本然环保科技有限公司</a></figcaption>
                <p>工程质量是体现一个优秀办公室空间的最好说明，我们需要好的质量来证明我们的设计，立足国际品质的理念，让世界为您我喝彩。</p>
            </figure>
            <figure class="wow animated zoomIn">
                <a href="javascript:" class="pic2" target="_blank"></a>
                <figcaption><a href="javascript:">南京清合力能源科技有限公司</a></figcaption>
                <p>当我们第一次建立沟通时，我们的服务就已经开始，对JPD来说，客户永远是被放在第一位的，我们始终站在客户的角度去思考。</p>
            </figure>
        </div>
    </div>
</section><!-- 平台依托单位 end -->

<!-- 团队 start -->
<section style="background-image: url(/skin/default/images/2014092201299540.png);" class="kehu sx-padding text-center pingpu-bg" id="demo">
    <div class="container">
        <h2 class="f-title wow animated fadeInUp">专家团队 Our Team<small>科技创新团队</small></h2>
        <div class="row">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('2',12,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <figure class="wow animated flipInX">
                <img src="<?=$bqr['titlepic']?>" width="188" height="260" alt="<?=$bqr['title']?>"/>
                <figcaption>
                    <h3><?=$bqr['title']?></h3>
                    <p><?=$bqr['smalltext']?></p>
                </figcaption>
            </figure>
            <?php
}
}
?>
        </div>
        <p class="s-m40 wow animated fadeInUp"><a href="/team/" class="btn-success about-more" target="_blank">MORE INFO →</a></p>
    </div>
</section><!-- 团队 end -->

<!-- about US start -->
<div style="background-image: url(/skin/default/images/2014092201586924.jpg);" class="pingpu-bg">
    <article id="demo" class="about container text-center sx-padding">
        <h2 class="f-title wow animated fadeInUp">关于我们 About US<small>诚以载道，以信立本，合作共赢</small></h2>
        <div class="about-us wow animated fadeInUp">
            <p>平台见借鉴借鉴简介平台见借鉴借鉴简介平台见借鉴借鉴简介平台见借鉴借鉴简介平台见借鉴借鉴简介平台见借鉴借鉴简介平台见借鉴借鉴简介平台见借鉴借鉴简介</p>
            <p>enfdsf dfsf2jduis ksfhjdgifhd fdhjihjds dfmkgfdjksohif ewghutrhuj gtireoghtjir fghueri grhgutn jigjtr huti hut riogh urgh uoghjrtio dk<a href="/about.html" target="_blank">MORE INFO →</a>
            </p>
            <div class="about-lianjie text-center"><a href="/team/" class="ry" target="_blank">我们的团队  Honor</a><a href="/contact/" class="td" target="_blank">我们的地址  Team</a></div>
        </div>
    </article></div><!-- About US end -->
<!-- News start -->
<div class="news" id="demo">
    <div class="container sx-padding clearfix">

        <section class="wow animated fadeInUp">
            <h2>公司新闻 <small>Company News</small></h2>
            <ul class="list-unstyled clearfix">
                <li><a href="/news/gongsi/13.html" title="如何让自己的网站更有质量？" target="_blank" Style="Color:rgb(255;font-weight:bold;">如何让自己的网站更有质量？</a><small class="pull-right">05-29</small></li>
                <li><a href="/news/gongsi/14.html" title="网站内容到底有多重要" target="_blank" Style="Color:rgb(255;font-weight:bold;">网站内容到底有多重要</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/gongsi/12.html" title="带着seo思维选域名 建站就成功了一半" target="_blank" Style="Color:rgb(255;font-weight:bold;">带着seo思维选域名 建站就成功了一半</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/gongsi/11.html" title="怎样做一个符合w3c规范的网页" target="_blank" Style="Color:rgb(255;font-weight:bold;">怎样做一个符合w3c规范的网页</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/gongsi/2.html" title="内容优化之有“心”创作" target="_blank" Style="Color:rgb(255;font-weight:bold;">内容优化之有“心”创作</a><small class="pull-right">05-25</small></li>
                <li><a href="/news/gongsi/1.html" title="网络公司告诉你有关面包屑导航的事" target="_blank" Style="Color:rgb(255;font-weight:bold;">网络公司告诉你有关面包屑导航的事</a><small class="pull-right">05-25</small></li>

            </ul>
            <p><a href="/news/gongsi/" class="btn-success news-more" target="_blank">MORE INFO →</a></p>
        </section>

        <section class=" bianju wow animated fadeInUp">
            <h2>行业新闻 <small>Industry News</small></h2>
            <ul class="list-unstyled clearfix">

                <li><a href="/news/hangye/20.html" title="网站制作SEO遵循的原则" target="_blank" Style="Color:rgb(255;font-weight:bold;">网站制作SEO遵循的原则</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/hangye/19.html" title="网站制作中的要点" target="_blank" Style="Color:rgb(255;font-weight:bold;">网站制作中的要点</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/hangye/18.html" title="网站制作标准化的优势介绍" target="_blank" Style="Color:rgb(255;font-weight:bold;">网站制作标准化的优势介绍</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/hangye/17.html" title="排名在变化，可我们的坚持不能变化" target="_blank" Style="Color:rgb(255;font-weight:bold;">排名在变化，可我们的坚持不能变化</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/hangye/16.html" title="伪原创对于网站的是非对错" target="_blank" Style="Color:rgb(255;font-weight:bold;">伪原创对于网站的是非对错</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/hangye/15.html" title="做好网站要知道以下几点" target="_blank" Style="Color:rgb(255;font-weight:bold;">做好网站要知道以下几点</a><small class="pull-right">05-26</small></li>


            </ul>
            <p><a href="/news/hangye/" class="btn-success news-more" target="_blank">MORE INFO →</a></p>
        </section>

        <section class="wow animated fadeInUp">
            <h2>专业常识 <small>Expertise</small></h2>
            <ul class="list-unstyled clearfix">

                <li><a href="/news/zhishi/26.html" title="公司在网站是不是需求策划？" target="_blank" Style="Color:rgb(255;font-weight:bold;">公司在网站是不是需求策划？</a><small class="pull-right">05-29</small></li>
                <li><a href="/news/zhishi/25.html" title="喜欢静态页的站长们福利来了！" target="_blank" Style="Color:rgb(255;font-weight:bold;">喜欢静态页的站长们福利来了！</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/24.html" title="你的网站是怎样增加用户体验的" target="_blank" Style="Color:rgb(255;font-weight:bold;">你的网站是怎样增加用户体验的</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/23.html" title="防止蜘蛛掉到陷阱的最好办法" target="_blank" Style="Color:rgb(255;font-weight:bold;">防止蜘蛛掉到陷阱的最好办法</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/22.html" title="网站内容不是你想的那么简单" target="_blank" Style="Color:rgb(255;font-weight:bold;">网站内容不是你想的那么简单</a><small class="pull-right">05-26</small></li>
                <li><a href="/news/zhishi/21.html" title="您制作网站的初衷是什么？" target="_blank" Style="Color:rgb(255;font-weight:bold;">您制作网站的初衷是什么？</a><small class="pull-right">05-26</small></li>

            </ul>
            <p><a href="/news/zhishi/" class="btn-success news-more" target="_blank">MORE INFO →</a></p>
        </section>
    </div>
</div>
<!-- News end -->
<!-- footer start -->
<footer style="background-image: url(/skin/default/images/2014092185736673.jpg);" class="pingpu-bg" id="yy">
    <div id="demo" class="footer container sx-padding">
        <div class="clearfix wow animated fadeIn">
            <section>
                <h3>在线留言 Leave a message</h3>
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
<script type="text/javascript" src="/skin/default/js/jiaodiantu.js"></script>

</body>
</html>