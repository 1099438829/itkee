<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"../public/templete/AdminThemes/navcat\index.html";i:1496828495;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
    
    <link rel="stylesheet" href="__ADMIN_TMPL__/css/admin.css">
    <!--[if lt IE 9]>
    <script src="__JS__/html5shiv.min.js"></script>
    <script src="__JS__/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <!--tab标签-->
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li class="layui-this">导航分类管理</li>
            <li class=""><a href="<?php echo url('admin/navcat/add'); ?>">添加导航分类</a></li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <table class="layui-table">
                    <thead>
                    <tr>
                        <th style="width: 30px;">ID</th>
                        <th>导航分类名称</th>
                        <th>标注</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($navcats) || $navcats instanceof \think\Collection || $navcats instanceof \think\Paginator): if( count($navcats)==0 ) : echo "" ;else: foreach($navcats as $key=>$vo): ?>
                    <tr>
                        <td><?php echo $vo['navcid']; ?></td>
                        <td><?php echo $vo['name']; ?></td>
                        <td><?php echo $vo['remark']; ?></td>
                        <td><?php echo $vo['status']==1 ? '显示' : '隐藏'; ?></td>
                        <td>
                            <a href="<?php echo url('admin/navcat/edit',['id'=>$vo['navcid']]); ?>" class="layui-btn layui-btn-normal layui-btn-mini">编辑</a>
                            <a href="<?php echo url('admin/navcat/delete',['id'=>$vo['navcid']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini ajax-delete">删除</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
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