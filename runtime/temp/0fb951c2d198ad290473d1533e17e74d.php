<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"../public/templete/AdminThemes/nav\index.html";i:1499936471;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
            <li class="layui-this">导航管理</li>
            <li class=""><a href="<?php echo url('admin/nav/add'); ?>">添加导航</a></li>
        </ul>
        <div class="layui-tab-content">
            <form class="layui-form layui-form-pane" action="<?php echo url('admin/nav/index'); ?>" method="get">
                <div class="layui-inline">
                    <label class="layui-form-label">所属分类</label>
                    <div class="layui-input-inline">
                        <select name="nav_cid" required lay-verify="required">
                            <option value=""></option>
                            <?php if(is_array($navcat_list) || $navcat_list instanceof \think\Collection || $navcat_list instanceof \think\Paginator): if( count($navcat_list)==0 ) : echo "" ;else: foreach($navcat_list as $key=>$vv): ?>
                            <option value="<?php echo $key; ?>" <?php if($key==\think\Request::instance()->get('nav_cid')): ?> selected="selected"<?php endif; ?>><?php echo $vv; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <button class="layui-btn">搜索</button>
                </div>
            </form>
            <hr>
            <div class="layui-tab-item layui-show">
                <table class="layui-table">
                    <thead>
                    <tr>
                        <th style="width: 60px;">展开</th>
                        <th style="width: 30px;">ID</th>
                        <th style="width: 30px;">排序</th>
                        <th>导航名称</th>
                        <th>导航分类名称</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($nav_level_list) || $nav_level_list instanceof \think\Collection || $nav_level_list instanceof \think\Paginator): if( count($nav_level_list)==0 ) : echo "" ;else: foreach($nav_level_list as $key=>$vo): 
                        if($vo['level'] == '1'){
                            $class_name = "level_one";
                            $plus = "&#xe623;";
                            $space = "";
                        }elseif($vo['level'] == '2'){
                            $class_name = "level_two";
                            $plus = "&#xe623;";
                            $space = "&nbsp;&nbsp;&nbsp;&nbsp;";
                        }else{
                            $class_name = "level_three";
                            $plus = "";
                            $space = "";
                        }
                     ?>
                    <tr class="<?php echo $class_name; ?> level_<?php echo $vo['pid']; ?>"  data-id="<?php echo $vo['id']; ?>" data-pid="<?php echo $vo['pid']; ?>">
                        <td><?php echo $space; ?><i class="layui-icon open_level" data-id="<?php echo $vo['id']; ?>" style="font-size: 25px;"><?php echo $plus; ?></i></td>
                        <td><?php echo $vo['id']; ?></td>
                        <td><?php echo $vo['sort']; ?></td>
                        <td><?php if($vo['level'] != '1'): for($i=1;$i<$vo['level'];$i++){echo  '&nbsp;&nbsp;&nbsp;└─';} endif; ?> <?php echo $vo['name']; ?></td>
                        <td><?php echo $navcat_list[$vo['nav_cid']]; ?></td>
                        <td><?php echo $vo['status']==1 ? '显示' : '隐藏'; ?></td>
                        <td>
                            <a href="<?php echo url('admin/nav/add',['pid'=>$vo['id'],'nav_cid'=>$vo['nav_cid']]); ?>" class="layui-btn layui-btn-mini">添加子导航</a>
                            <a href="<?php echo url('admin/nav/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-normal layui-btn-mini">编辑</a>
                            <a href="<?php echo url('admin/nav/delete',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini ajax-delete">删除</a>
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


<script src="__ADMIN_TMPL__/temp/menu.js"></script>

<!--页面JS脚本-->

</body>
</html>