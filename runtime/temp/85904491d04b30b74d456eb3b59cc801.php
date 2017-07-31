<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"../public/templete/AdminThemes/index\config.html";i:1500386036;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>ITKEE_CN 后台管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__JS__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__ADMIN_TMPL__/font/css/font-awesome.min.css">
    <!--CSS引用-->
    
<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css" media="all">

    <link rel="stylesheet" href="__ADMIN_TMPL__/css/admin.css">
    <!--[if lt IE 9]>
    <script src="__JS__/html5shiv.min.js"></script>
    <script src="__JS__/respond.min.js"></script>
    <![endif]-->
    
<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.min.css" media="all">

</head>

<body>

<!-- 为 ECharts 准备一个具备大小（宽高）的 DOM -->
<!-- 首页信息 -->
<div class="row system">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <section class="panel">
            <div class="panel-body">
                <div class="larry-table">
                    <table class="layui-table larry-table-info">
                        <colgroup>
                            <col width="150">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td><span class="tit">系统名称:</span></td>
                            <td><a href="http://www.itkee.cn" title="ITKEE.CN社区" class="tit" target="_blank"><span class="info">ITKEE.CN社区</span></a></td>
                        </tr>
                        <tr>
                            <td><span class="tit">网站域名:</span></td>
                            <td><span class="info iframe"><?php echo $config['url']; ?></span></td>
                        </tr>
                        <tr>
                            <td><span class="tit">服务器操作系统:</span></td>
                            <td><?php echo $config['server_os']; ?></td>
                        </tr>
                        <tr>
                            <td><span class="tit">官网地址:</span></td>
                            <td><span class="info"><a href="http://www.itkee.cn" class="official" target="_blank">http://www.itkee.cn</a></span></td>
                        </tr>
                        <tr>
                            <td><span class="tit">服务器端口:</span></td>
                            <td><?php echo $config['server_port']; ?></td>
                        </tr>
                        <tr>
                            <td><span class="tit">网站目录:</span></td>
                            <td><?php echo $config['document_root']; ?></td>
                        </tr>
                        <tr>
                            <td><span class="tit">服务器环境:</span></td>
                            <td><?php echo $config['server_soft']; ?></td>
                        </tr>
                        <tr>
                            <td><span class="tit">PHP版本:</span></td>
                            <td><?php echo $config['php_version']; ?></td>
                        </tr>
                        <tr>
                            <td><span class="tit">MySQL版本:</span></td>
                            <td><?php echo $config['mysql_version']; ?></td>
                        </tr>
                        <tr>
                            <td><span class="tit">最大上传限制:</span></td>
                            <td><?php echo $config['max_upload_size']; ?></td>
                        </tr>
                        <tr>
                            <td><span class="tit">技术团队:</span></td>
                            <td><a href="http://www.itkee.cn" target="_blank">ITKEE社区</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<!--网站主体-->
<script>
    // 定义全局JS变量
    var GV = {
        base_url: "__STATIC__"
    };
</script>
<!--JS引用-->
<script src="__JS__/jquery.js"></script>
<script src="__JS__/layui/lay/dest/layui.all.js"></script>
<script src="__JS__/common.js"></script>


<!--页面JS脚本-->

</body>
</html>