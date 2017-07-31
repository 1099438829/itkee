<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"E:\itkee_free\public/../application/install\view\index\step2.html";i:1492480005;s:60:"E:\itkee_free\public/../application/install\view\layout.html";i:1500539326;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="zh"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>ITKEE.CN社区 - 安装</title>

    <meta name="description" content="">
    <meta name="author" content="caiweiming">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">


    <!-- Stylesheets -->
    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="__CSS__/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $static_dir; ?>install/css/oneui.css">
    <link rel="stylesheet" href="<?php echo $static_dir; ?>install/css/itkee_install.css">
    <link rel="stylesheet" href="<?php echo $static_dir; ?>install/css/base.css">
    <!-- END Stylesheets -->
</head>
<body>
<div class="bg-image" style="background-image: url('<?php echo $static_dir; ?>install/img/bg.jpg');"></div>

<div class="progress active progress-mini">
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
</div>

<!-- Install Content -->
<div class="content overflow-hidden install-page">
    <!-- Install Block -->
    <div class="block block-themed box">
        
<div class="box-content step2">
    <div class="title">
        <img src="<?php echo $static_dir; ?>install/img/title1.png" alt="">
    </div>
    <div class="option">运行环境</div>
    <table class="table table-borderless">
        <thead>
        <tr>
            <th style="width: 30%;">项目</th>
            <th style="width: 30%;">所需配置</th>
            <th style="width: 40%;">当前配置</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($env) || $env instanceof \think\Collection || $env instanceof \think\Paginator): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $item[0]; ?></td>
            <td><?php echo $item[1]; ?></td>
            <td>
                <i class="fa fa-<?php echo $item[4]; ?>"></i> <?php echo $item[3]; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="option">目录/文件权限</div>
    <table class="table table-borderless">
        <thead>
        <tr>
            <th style="width: 30%;">目录/文件</th>
            <th style="width: 30%;">所需状态</th>
            <th style="width: 40%;">当前状态</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($dirfile) || $dirfile instanceof \think\Collection || $dirfile instanceof \think\Paginator): $i = 0; $__LIST__ = $dirfile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $item[3]; ?></td>
            <td>可写</td>
            <td>
                <i class="fa fa-<?php echo $item[2]; ?>"></i> <?php echo $item[1]; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="option">函数及扩展依赖性</div>
    <table class="table table-borderless">
        <thead>
        <tr>
            <th style="width: 30%;">名称</th>
            <th style="width: 30%;">类型</th>
            <th style="width: 40%;">检查结果</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($func) || $func instanceof \think\Collection || $func instanceof \think\Paginator): $i = 0; $__LIST__ = $func;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $item[0]; ?></td>
            <td><?php echo $item[3]; ?></td>
            <td>
                <i class="fa fa-<?php echo $item[2]; ?>"></i> <?php echo $item[1]; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="button">
        <a href="<?php echo \think\Request::instance()->baseFile(); ?>" class="btn btn-minw btn-default">上一步</a>
        <a href="<?php echo \think\Request::instance()->baseFile(); ?>?s=/index/step3.html" class="btn btn-minw btn-default ajax-get">下一步</a>
    </div>
</div>

    </div>
    <!-- END Install Block -->
</div>
<!-- END Install Content -->

<!-- Install Footer -->
<div class="push-10-t push-10 text-center animated fadeInUp">
    <small class="text-white-op font-w600">2016-2017 &copy; <a href="http://www.itkee.cn" target="_blank">ITKEE.CN社区</a> <?php echo ITKEE_VERSION; ?></small>
</div>
<!-- END Install Footer -->
<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark" style="background: #0099ff">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">用户协议</h3>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Modal -->
<script src="__JS__/jquery.js"></script>
<script src="__BT__/js/bootstrap.min.js"></script>
<script src="__BT__/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo $static_dir; ?>install/js/install.js"></script>
<script>
    jQuery(function () {
        jQuery('#agreement').change(function () {
            jQuery('#next').prop('disabled', !$('#agreement').prop('checked'));
        });
        jQuery('#next').click(function () {
            location.href = '<?php echo \think\Request::instance()->baseFile(); ?>?s=/index/step2.html';
        });
    });
</script>
</body>
</html>