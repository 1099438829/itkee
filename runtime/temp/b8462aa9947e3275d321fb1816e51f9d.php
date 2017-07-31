<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"../public/templete/AdminThemes/user_action\index.html";i:1499608176;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
        <li class="layui-this">用户操作配置</li>
        <li class=""><a href="<?php echo url('admin/user_action/add'); ?>">添加用户操作配置</a></li>
    </ul>
    <div class="layui-tab-content">
        <form action="" method="post" class="ajax-form">
            <div class="layui-tab-item layui-show">
            <table class="layui-table">
                <thead>
                <tr>
                    <th>操作说明</th>
                    <th>积分更改</th>
                    <th>金币更改</th>
                    <th>周期类型</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php $cycle_types= array('0'=>'不限','1'=>'天','2'=>'小时','3'=>'永久');
                 if(is_array($user_action_list) || $user_action_list instanceof \think\Collection || $user_action_list instanceof \think\Paginator): if( count($user_action_list)==0 ) : echo "" ;else: foreach($user_action_list as $key=>$vo): ?>
                <tr>
                    <td><?php echo $vo['name']; ?> <?php echo $vo['action_remark']; ?></td>
                    <td><?php echo $vo['score']; ?></td>
                    <td><?php echo $vo['coin']; ?></td>
                    <td>
                        <?php if($vo['cycle_type'] == '0'): ?>
                        不限
                        <?php else: ?>
                        <?php echo $vo['reward_number']; ?>次/<?php echo $vo['cycle_time']; ?><?php echo $cycle_types[$vo['cycle_type']]; endif; ?>
                    </td>
                    <td><a href="<?php echo url('user_action/edit'); ?>?id=<?php echo $vo['id']; ?>">编辑</a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <?php echo $page; ?>
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