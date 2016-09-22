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
                        <li><a href="/service/youshi/">工业污水及工业污水及工业污水及工业污水及</a></li>
                        <li><a href="/service/fanchou/">服务范畴</a></li>
                        <li><a href="/service/fanchou/">服务范畴</a></li>
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
        <h2>关于我们 About US<small>“大化工”行业 有机废水/固废处理处置及资源化利用 技术转化与产业化平台</small></h2>
        <p class="weizhi">当前位置：<a href='/'>主页</a> > <a href='/about/'>关于我们</a></p>
    </div>
</section>
<!-- ym-banner End -->
<!-- crumbs start -->
<section class="crumbs text-right">
    <div class="container">
        <ul class="list-unstyled">
            <li><a href="/about.html">平台简介</a></li>
        </ul>
    </div>
</section>
<!-- crumbs End -->
<!-- content start -->
<div class="neirong">
    <article class="container info sx-padding" id="demo">
        <span style="color: rgb(102, 102, 102); font-family: 'microsoft yahei', 'lvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 30px;">
                “北京化工大学有机废水/固废处理处置及资源化利用技术与产业化平台”是.................................
        </span>
        <div class="content_page"></div>
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
                <form action="/plus/diy.php" enctype="multipart/form-data" method="post" name="lansige" onSubmit="return CheckForm()" >
                    <input type="hidden" name="action" value="post" />
                    <input type="hidden" name="diyid" value="1" />
                    <input type="hidden" name="do" value="2" />
                    <ul class="list-unstyled">
                        <li>
                            <input name="xm" type="text" id="xm" value="" placeholder="您的尊称 Name" maxlength="10">
                        </li>
                        <li>
                            <input name="dh" type="text" id="dh" value="" placeholder="您的电话 Phone" maxlength="11">
                        </li>
                        <li>
                            <textarea name="nr" cols="" id="nr" value="" placeholder="您要留言的内容 Content" maxlength="200"></textarea>
                        </li>
                        <input type="hidden" name="dede_fields" value="xm,text;dh,text;nr,multitext" />
                        <input type="hidden" name="dede_fieldshash" value="af9692c6aaa5752e3fce5a141f10a7c8" />
                        <li>
                            <input name="button" type="submit" id="button" value="立即提交 Submit →">
                        </li>
                    </ul>
                </form>
                <div id="savediv" style="visibility:hidden;">处理中,请勿进行其他操作...</div>
                <script language="javascript" type="text/javascript">
                    function gosavenow(){
                        savediv.style.visibility="visible";}
                </script>
                <script language="javascript" type="text/javascript">
                    function CheckForm() {
                        if(lansige.xm.value == '') {
                            alert('对不起！请输入您的称呼！');
                            lansige.xm.focus();
                            return false;}
                        if(lansige.dh.value == '') {
                            alert('对不起！请输入您的电话！');
                            lansige.dh.focus();
                            return false;}
                        var re = new RegExp("^([0-9])+$","ig");
                        {if (!re.test(lansige.dh.value))
                        {alert("对不起！电话只能是0-9的数字！");
                            lansige.dh.focus();
                            return false;}}
                        if(lansige.nr.value == '') {
                            alert('对不起！请输入您的留言内容(不超过200个字)！');
                            lansige.nr.focus();
                            return false;}
                        gosavenow();}
                </script>
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
                <h4>快捷入口 Quick Entry</h4>
                <p>  <a href="/about/" target="_blank">关于我们</a> /
                    <a href="/news/" target="_blank">新闻资讯</a> /
                    <a href="/case/" target="_blank">成功案例</a> /
                    <a href="/team/" target="_blank">企业团队</a> /
                    <a href="/service/" target="_blank">专业服务</a> /
                    <a href="/contact/" target="_blank">联系我们</a> /
                </p>
            </section>
            <section>
                <h3>内容搜索 Search</h3>
                <form name="formsearch" action="/plus/search.php">
                    <ul class="list-unstyled">
                        <li><input name="q" type="text" class="key" value="输入关键词 Keyword" placeholder="输入关键词 Keyword" onFocus="if (value =='输入关键词 Keyword'){value =''}" onBlur="if (value ==''){value='输入关键词 Keyword'}" /><input type="submit" class="s-button" value="搜索" /></li>
                    </ul>
                </form>
                <form method="post" target="_blank" action="http://list.qq.com/cgi-bin/qf_compose_send">
                    <ul class="list-unstyled">
                        <li class="mail-tx">输入邮箱定期接收我们的最新信息</li>
                        <li><input type="hidden" value="qf_booked_feedback" name="t" />
                            <input type="hidden" value="79d7181ac4d8b0144664925406fa6b1ebc29568929546ae8" name="id" />
                            <input type="text" class="mail" name="to" id="to" value="Email Address" placeholder="Email Address" onFocus="if (value =='Email Address'){value =''}" onBlur="if (value ==''){value='Email Address'}" /><input type="submit" class="m-button" value="提交"></li>
                    </ul>
                </form>
            </section>
        </div>
    </div>
    <div class="foot">
        <div class="container clearfix">
            <p class="copy pull-left">Copyright &copy; 2016-2016 京ICP备11100019号-1 <a href="http://www.luqimin.com/" target="_blank">技术支持</a></p>
            <p class="renzheng pull-right text-right"> <img src="/skin/default/images/2014090504144234.png" width="32" height="32" alt="工商合法注册企业" title="工商合法注册企业" /> <img src="/skin/default/images/2014090504203747.png" width="32" height="32" alt="安全网站" title="安全网站" /> <img src="/skin/default/images/2014090504244226.png" width="32" height="32" alt="网上报警" title="网上报警" /> <img src="/skin/default/images/2014090504278696.png" width="32" height="32" alt="中国建筑装饰协会会员" title="中国建筑装饰协会会员" /> <img src="/skin/default/images/2014090504317881.png" width="32" height="32" alt="中国建筑学会会员" title="中国建筑学会会员" /> </p>
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
<!-- header up start -->
<script src="/skin/default/js/headroom.min.js"></script>
<script src="/skin/default/js/jquery.headroom.js"></script>
<script>$("#header").headroom();</script>
<!-- banner start -->

<script type="text/javascript" src="/skin/default/js/nav.hover.js"></script>
<!-- footer end -->
<!-- kehu start -->

<!-- jQuery start -->
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