<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"../public/templete/AdminThemes/download\index.html";i:1496149228;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
        <li class="layui-this">下载列表</li>
        <li class=""><a href="<?php echo url('admin/download/add'); ?>">添加下载</a></li>
    </ul>
    <div class="layui-tab-content">
        <form action="" method="post" class="ajax-form">
            <button type="button" class="layui-btn layui-btn-danger layui-btn-small ajax-action" data-action="<?php echo url('admin/download/delete'); ?>">删除</button>
            <div class="layui-tab-item layui-show">
            <table class="layui-table">
                <thead>
                <tr>
                    <th style="width: 15px;"><input type="checkbox" class="check-all"></th>
                    <th style="width: 30px;">ID</th>
                    <th>标题</th>
                    <th style="width: 400px;">内容</th>
                    <th>详情链接</th>
                    <th>状态</th>
                    <th>时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($download_list) || $download_list instanceof \think\Collection || $download_list instanceof \think\Paginator): if( count($download_list)==0 ) : echo "" ;else: foreach($download_list as $key=>$vo): ?>
                <tr>
                    <td><input type="checkbox" name="ids[]" value="<?php echo $vo['id']; ?>"></td>
                    <td><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['title']; ?></td>
                    <td><?php echo $vo['desc']; ?></td>
                    <td><a href="<?php echo $vo['url']; ?>" target="_blank"><?php echo $vo['url']; ?></a></td>
                    <td><?php echo $vo['status']==1?'正常':'关闭'; ?></td>
                    <td><?php echo $vo['create_time']; ?></td>
                    <td>
                        <a href="<?php echo url('admin/download/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-normal layui-btn-mini">编辑</a>
                        <a href="<?php echo url('admin/download/delete',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini ajax-delete">删除</a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <?php echo $download_list->render(); ?>
            </div>
         </form>
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