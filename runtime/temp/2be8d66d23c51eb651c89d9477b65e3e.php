<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"E:\itkee_free\public/../application/install\view\index\step3.html";i:1498744505;s:60:"E:\itkee_free\public/../application/install\view\layout.html";i:1500539326;}*/ ?>
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
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
</div>

<!-- Install Content -->
<div class="content overflow-hidden install-page">
    <!-- Install Block -->
    <div class="block block-themed box">
        
<div class="box-content step3">
    <div class="title">
        <img src="<?php echo $static_dir; ?>install/img/title2.png" alt="">
    </div>
    <div class="push-10-t">
        <form action="<?php echo url('step4'); ?>" class="form" method="post">
            <div class="form-group">
                <div><label>数据库类型</label></div>
                <label class="css-input css-radio css-radio-warning push-10-r">
                    <input type="radio" name="db[type]" checked="" value="mysql"><span></span> MySQL
                </label>
            </div>
            <div class="form-group">
                <label>数据库服务器，数据库服务器IP，一般为127.0.0.1</label>
                <input class="form-control" type="text" name="db[hostname]" value="127.0.0.1">
            </div>
            <div class="form-group">
                <label>数据库名</label>
                <input class="form-control" type="text" name="db[database]" value="itkee">
            </div>
            <div class="form-group">
                <label>数据库用户名</label>
                <input class="form-control" type="text" name="db[username]" value="">
            </div>
            <div class="form-group">
                <label>数据库密码</label>
                <input class="form-control" type="password" name="db[password]" value="">
            </div>
            <div class="form-group">
                <label>数据库端口，数据库服务连接端口，一般为3306</label>
                <input class="form-control" type="text" name="db[hostport]" value="3306">
            </div>
            <div class="form-group">
                <label>数据表前缀，同一个数据库运行多个系统时请修改为不同的前缀</label>
                <input class="form-control" type="text" name="db[prefix]" value="itkee_">
            </div>
            <div class="form-group">
                <div><label>是否覆盖同名数据库</label></div>
                <label class="css-input css-radio css-radio-warning push-10-r">
                    <input type="radio" name="cover" value="1"><span></span> 覆盖
                </label>
                <label class="css-input css-radio css-radio-warning push-10-r">
                    <input type="radio" name="cover" value="0" checked=""><span></span> 不覆盖
                </label>
            </div>
            <div class="button">
                <a href="<?php echo \think\Request::instance()->baseFile(); ?>?s=/index/step2.html" class="btn btn-minw btn-default">上一步</a>
                <button href="<?php echo \think\Request::instance()->baseFile(); ?>?s=/index/step4.html" class="btn btn-minw btn-default ajax-post" type="submit" target-form="form">下一步</button>
            </div>
        </form>
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