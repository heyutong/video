<!doctype html>
<html>
<base href="{{URL::asset('')}}">
<head>
    <meta charset="UTF-8"/>
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="admincss/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="admincss/css/main.css"/>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="{{url('admin/index')}}">首页</a></li>
                <li><a href="{{url('/')}}" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.sucaihuo.com">管理员</a></li>
                <li><a href="http://www.sucaihuo.com">修改密码</a></li>
                <li><a href="http://www.sucaihuo.com">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>音频管理</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('admin/video')}}"><i class="icon-font">&#xe008;</i>音频管理</a></li>
                        <li><a href="{{url('admin/videoAdd')}}"><i class="icon-font">&#xe005;</i>音频上传</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>会员管理</a>
                    <ul class="sub-menu">
                        <li><a href="admin/vip"><i class="icon-font">&#xe008;</i>会员管理</a></li>
                        <li><a href="admin/vipToken"><i class="icon-font">&#xe008;</i>审核会员</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>