<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"../public/templete/AdminThemes/menu\index.html";i:1499936471;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
            <li class="layui-this">后台菜单</li>
            <li class=""><a href="<?php echo url('admin/menu/add'); ?>">添加菜单</a></li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <table class="layui-table">
                    <thead>
                    <tr>
                        <th style="width: 60px;">展开</th>
                        <th style="width: 50px;">排序</th>
                        <th style="width: 30px;">ID</th>
                        <th>菜单名称</th>
                        <th>控制器方法</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($admin_menu_level_list) || $admin_menu_level_list instanceof \think\Collection || $admin_menu_level_list instanceof \think\Paginator): if( count($admin_menu_level_list)==0 ) : echo "" ;else: foreach($admin_menu_level_list as $key=>$vo): 
                        if($vo['level'] == '1'){
                            $class_name = "level_one";
                            $plus = "&#xe623;";
                            $space = "";
                        }elseif($vo['level'] == '2'){
                            $class_name = "level_two";
                            $plus = "&#xe623;";
                            $space = "&nbsp;&nbsp;&nbsp;";
                        }else{
                            $class_name = "level_three";
                            $plus = "&#xe623;";
                            $space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                     ?>
                    <tr class="<?php echo $class_name; ?> level_<?php echo $vo['pid']; ?>"  data-id="<?php echo $vo['id']; ?>" data-pid="<?php echo $vo['pid']; ?>" style="">
                        <?php $url = url('admin/menu/setStatus',['id'=>$vo['id']]); ?>
                        <td><?php echo $space; ?><i class="layui-icon open_level" data-id="<?php echo $vo['id']; ?>" style="font-size: 25px;"><?php echo $plus; ?></i></td>
                        <td>
                            <input class="layui-input" name="sort" required="" lay-verify="required" placeholder="" autocomplete="off" type="text" id="change_sort_<?php echo $vo['id']; ?>" value="<?php echo $vo['sort']; ?>" data-url="<?php echo $url; ?>" onchange="change_sort(<?php echo $vo['id']; ?>)">
                        </td>
                        <td><?php echo $vo['id']; ?></td>
                        <td><?php if($vo['level'] != '1'): for($i=1;$i<$vo['level'];$i++){echo '&nbsp;&nbsp;&nbsp;└─';} endif; ?> <?php echo $vo['title']; ?></td>
                        <td><?php echo $vo['name']; ?></td>
                        <td>
                            <?php 
                                if($vo['status']==1){
                                    echo '<a href="'.$url.'" data-param="status=0" class="layui-btn layui-btn-mini ajax-post">显示</a>';
                                }else{
                                    echo '<a href="'.$url.'" data-param="status=0" class="layui-btn layui-btn-danger layui-btn-mini ajax-post">隐藏</a>';
                                }
                             ?>
                        </td>
                        <td>
                            <a href="<?php echo url('admin/menu/add',['pid'=>$vo['id']]); ?>" class="layui-btn layui-btn-mini">添加子菜单</a>
                            <a href="<?php echo url('admin/menu/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-normal layui-btn-mini">编辑</a>
                            <a href="<?php echo url('admin/menu/delete',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini ajax-delete">删除</a>
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

<script>
    //修改排序值
    function change_sort(id){
        var sort = $("#change_sort_"+id).val();
        var _url = $("#change_sort_"+id).attr("data-url");
        $.ajax({
            type:'POST',
            url:_url,
            dataType: "json",
            data:{"sort":sort},
            success:function(info){
                if (info.code === 1) {
                    setTimeout(function () {
                        location.href = info.url;
                    }, 1000);
                }
                layer.msg(info.msg);
            }
        })
    }
</script>

</body>
</html>