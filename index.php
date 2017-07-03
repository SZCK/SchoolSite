<?php if($_SERVER['SERVER_PORT']==80) die(header("location: /old/")); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <!--
        Copyright SZCK 2016-2017
        Site  : http://www.tzqsyzx.com
        Site  : https://www.xtlsoft.top/ck
        Cdn   : https://s.tzqsyzx.com
        Author: Tianle Xu (xtl@xtlsoft.top)
        Teach : Miao Chen (admin@tzqsyzx.com)
        Blog  : https://blog.xtlsoft.top
        ++++++++++++++++++++++++++++
        | Used Open-Source Plugins |
        ++++++++++++++++++++++++++++
        |          jQuery          |
        |   html5shiv (Only IE8)   |
        |         bootstrap        |
        |           layer          |
        |          laytpl          |
        ++++++++++++++++++++++++++++
        
        @@@ ZH_COPYRIGHT_UTF-8 @@@
        @  南通市通州区实验中学
        @  创客工作室
        @  徐天乐 xtl@xtlsoft.top
        @@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <head>
        <!--指定字符集-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!--强制使用Edge内核渲染-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--适配移动设备-->
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <!--网站标题(会动态)-->
        <title>加载中……</title>
        <!--兼容IE8-->
        <!--[if lt IE 9]>
            <script src="./static/js/ie/html5shiv.js"></script>
            <script src="./static/js/ie/respond.js"></script>
            <script src="./static/js/ie/excanvas.js"></script>
        <![endif]-->
        <!--加载jQuery(开源js框架)-->
        <script src="./static/js/jquery.min.js"></script>
        <!--加载BootStrap(开源响应框架)-->
        <link href="./static/css/bootstrap.min.css" rel="stylesheet" />
        <script src="./static/js/bootstrap.min.js"></script>
        <!--加载layer(开源弹层组件)-->
        <script src="./static/js/layer.js"></script>
        <!--加载laytpl-->
        <script src="./static/js/laytpl.js"></script>
        <!--加载XDOBridge-->
        <script src="./static/js/XDO.js"></script>
        <!--加载自定css,js-->
        <link href="./static/css/site.css" rel="stylesheet" />
        <script src="./static/js/site-pre.js"></script>
    </head>
    <body onhashchange="hashChange();$('#analytics').html(window.config.analytics);">
        <!--该死的IE，老浏览器弹出提示-->
        <!--[if lt IE 8]>
            <div class="alert alert-danger">
                您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.
            </div>
        <![endif]-->
        <!--主导航-->
        <header class="x-header">
            <div class="x-header-topNav">
                <ul class="x-header-topNav-left list-inline">
                    <li><a href="#/index">首页</a></li>
                </ul>
                <ul class="x-header-topNav-right list-inline">
                    <li><a href="/old/">返回旧版</a></li>
                </ul>
            </div>
            <div class="x-header-title">
                <div class="x-header-title-logo"></div>
            </div>
            <div class="x-header-nav">
                <ul class="list-inline">
                    <li><a href="#/index">首页</a></li>
                </ul>
            </div>
        </header>
        <!--主容器-->
        <div id="main" class="container-fluid" style="padding-top: 3px;">
            <!--上边距-->
            <div class="x-fiftypx"></div>
            <!--加载提示-->
            <p align="center">Loading...</p>
        </div>
        <!--页面底部&版权-->
        <footer style="color:gray;">
            <hr style="height:1px; margin-bottom:9px;">
            <center>Powered by <a id="copyDiv" href="#"></a></center>
            <center name="nav-bottom">首页 | 统计<span id="analytics"></span></center>
        </footer>
        <!--背景音乐-->
        <div id="bgmusic"></div>
        <!--加载自定后置js-->
        <script src="./static/js/site.js"></script>
        <!--分享代码-->
        <div class="x-share-main-div" id="shareDiv"></div>
    </body>
</html>
