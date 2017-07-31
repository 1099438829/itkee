<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"../public/templete/AdminThemes/identity\index.html";i:1497690747;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
        <li class="layui-this">身份马甲管理</li>
        <li class=""><a href="<?php echo url('admin/identity/add'); ?>">添加身份马甲</a></li>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <table class="layui-table">
                <thead>
                <tr>
                    <th style="width: 30px;">ID</th>
                    <th>马甲名称</th>
                    <th>权限值</th>
                    <th>创建时间</th>
                    <th>前台申请</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($identity_list) || $identity_list instanceof \think\Collection || $identity_list instanceof \think\Paginator): if( count($identity_list)==0 ) : echo "" ;else: foreach($identity_list as $key=>$vo): ?>
                <tr>
                    <td><?php echo $vo['id']; ?></td>
                    <td><span class="span-tip" style="color:<?php echo $vo['color']; ?>;background: <?php echo $vo['backcolor']; ?>"><?php echo $vo['name']; ?></span></td>
                    <td><?php echo $vo['auth_value']; ?></td>
                    <td><?php echo $vo['create_time']; ?></td>
                    <td><?php echo $vo['type']==1 ? '启用' : '禁用'; ?></td>
                    <td>
                        <a href="<?php echo url('admin/identity/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-normal layui-btn-mini">编辑</a>
                        <a href="<?php echo url('admin/identity/delete',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini ajax-delete">删除</a>
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