<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"E:\itkee_free\public/../application/install\view\index\complete.html";i:1498791793;s:60:"E:\itkee_free\public/../application/install\view\layout.html";i:1500539326;}*/ ?>
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
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div>

<!-- Install Content -->
<div class="content overflow-hidden install-page">
    <!-- Install Block -->
    <div class="block block-themed box">
        
<div class="box-content step5 text-center">
    <?php  ?>
    <div class="push-20">
        <img src="<?php echo $static_dir; ?>install/img/finish.png" alt="">
    </div>
    <p>再次感谢您选择ITKEE.CN社区系统，希望您会喜欢我们的产品！</p>
    <p class="h3">后台默认账号/密码：admin  123456</p>
    <a href="<?php echo \think\Request::instance()->baseFile(); ?>/admin" class="btn btn-minw btn-default push-20-r">登录后台</a>
    <a href="<?php echo \think\Request::instance()->baseFile(); ?>" class="btn btn-minw btn-default">打开前台</a>
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