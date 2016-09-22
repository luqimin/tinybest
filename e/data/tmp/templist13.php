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
    <title>[!--pagetitle--]</title>
    <meta name="description" content="[!--pagekey--]" />
    <meta name="keywords" content="[!--pagekey--]" />
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

<!-- head End -->
<!-- ym-banner start -->
<section class="ny-banner text-center" style="background-image:url(/skin/default/images/2014091259957041.png)">
	<div class="container text-left">
		<h2>依托平台 Case<small>每一个设计作品都举世无双</small></h2>
		<p class="weizhi">当前位置：<a href='#'>主页</a> > <a href='/technology/'>依托平台</a> > </p>
	</div>
</section>
<!-- ym-banner End -->

<!-- content start -->
<div class="neirong">
	<section class="case sx-padding" id="demo">
		<div class="container">
			<div class="row">
				[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]
			</div>

		</div>
	</section>
</div>
<!-- content End -->

<!-- content End -->
<!-- footer start -->
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

</body>
</html>



