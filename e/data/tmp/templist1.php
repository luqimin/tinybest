<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="[!--news.url--]skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<!DOCTYPE html>
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
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td>[!--empirenews.listtemp--]<ul>
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5--></ul>
[!--empirenews.listtemp--]
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
                <td height="38"><div class="epages">[!--show.listpage--]</div></td>
</tr>
</table>
</td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('selfinfo',10,44,0,0,2,0);?> 
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
</tr>
</table></td>
</tr>
</table>
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
</body>
</html>