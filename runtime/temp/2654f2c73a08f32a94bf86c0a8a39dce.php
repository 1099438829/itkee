<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:54:"../public/templete/AdminThemes/system\site_config.html";i:1500534810;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
            <li class="layui-this" lay-id="site">站点配置</li>
            <li lay-id="email">邮箱配置</li>
            <li lay-id="theme">系统配置</li>
            <li lay-id="theme">QQ登录配置</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form form-container" action="<?php echo url('admin/system/updateConfig'); ?>" method="post">
                    <input type="hidden" name="config_type" value="site_config" />
                    <div class="layui-form-item">
                        <label class="layui-form-label">网站标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="site_config[site_title]" value="<?php echo (isset($site_config['site_title']) && ($site_config['site_title'] !== '')?$site_config['site_title']:''); ?>" required  lay-verify="required" placeholder="请输入网站标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">SEO标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="site_config[seo_title]" value="<?php echo (isset($site_config['seo_title']) && ($site_config['seo_title'] !== '')?$site_config['seo_title']:''); ?>" placeholder="请输入SEO标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">SEO关键字</label>
                        <div class="layui-input-block">
                            <input type="text" name="site_config[seo_keyword]" value="<?php echo (isset($site_config['seo_keyword']) && ($site_config['seo_keyword'] !== '')?$site_config['seo_keyword']:''); ?>" placeholder="请输入SEO关键字" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">SEO说明</label>
                        <div class="layui-input-block">
                            <textarea name="site_config[seo_description]" placeholder="请输入SEO说明" class="layui-textarea"><?php echo (isset($site_config['seo_description']) && ($site_config['seo_description'] !== '')?$site_config['seo_description']:''); ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">版权信息</label>
                        <div class="layui-input-block">
                            <input type="text" name="site_config[site_copyright]" value="<?php echo (isset($site_config['site_copyright']) && ($site_config['site_copyright'] !== '')?$site_config['site_copyright']:''); ?>" placeholder="请输入版权信息" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">ICP备案号</label>
                        <div class="layui-input-block">
                            <input type="text" name="site_config[site_icp]" value="<?php echo (isset($site_config['site_icp']) && ($site_config['site_icp'] !== '')?$site_config['site_icp']:''); ?>" placeholder="请输入版权信息" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">统计代码</label>
                        <div class="layui-input-block">
                            <textarea name="site_config[site_tongji]" placeholder="请输入统计代码" class="layui-textarea"><?php echo (isset($site_config['site_tongji']) && ($site_config['site_tongji'] !== '')?$site_config['site_tongji']:''); ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="*">提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="layui-form layui-tab-item">
                <div class="layui-form-item">
                    <form class="layui-form form-container" action="<?php echo url('admin/system/updateConfig'); ?>" method="post">
                        <input type="hidden" name="config_type" value="email_config" />
                        <div class="layui-form-item">
                            <label class="layui-form-label">发件人</label>
                            <div class="layui-input-block">
                                <input type="text" name="email_config[sender]" value="<?php echo (isset($email_config['sender']) && ($email_config['sender'] !== '')?$email_config['sender']:''); ?>" required  lay-verify="required" placeholder="请输入发件人" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">邮箱地址</label>
                            <div class="layui-input-block">
                                <input type="text" name="email_config[address]" value="<?php echo (isset($email_config['address']) && ($email_config['address'] !== '')?$email_config['address']:''); ?>" placeholder="请输入邮箱地址" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">SMTP服务器</label>
                            <div class="layui-input-block">
                                <input type="text" name="email_config[smtp]" value="<?php echo (isset($email_config['smtp']) && ($email_config['smtp'] !== '')?$email_config['smtp']:''); ?>" placeholder="SMTP服务器" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">连接方式</label>
                            <div class="layui-input-block">
                                <select name="email_config[smtpsecure]">
                                    <option value=""></option>
                                    <option value="ssl">ssl</option>
                                    <option value="tls">tls</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">SMTP服务器端口
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="email_config[smtp_port]" value="<?php echo (isset($email_config['smtp_port']) && ($email_config['smtp_port'] !== '')?$email_config['smtp_port']:''); ?>" placeholder="SMTP服务器端口" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">邮箱账号</label>
                            <div class="layui-input-block">
                                <input type="text" name="email_config[loginname]" value="<?php echo (isset($email_config['loginname']) && ($email_config['loginname'] !== '')?$email_config['loginname']:''); ?>" placeholder="邮箱账号" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">邮箱密码</label>
                            <div class="layui-input-block">
                                <input type="text" name="email_config[password]" value="<?php echo (isset($email_config['password']) && ($email_config['password'] !== '')?$email_config['password']:''); ?>" placeholder="邮箱密码" autocomplete="off" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="*">提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="layui-form layui-tab-item">
                <form class="layui-form form-container" action="<?php echo url('admin/system/updateConfig'); ?>" method="post">
                    <input type="hidden" name="config_type" value="system_config" />
                    <input type="hidden" name="system_config[app_debug]" value="false" />
                    <input type="hidden" name="system_config[app_trace]" value="false" />
                    <div class="layui-form-item">
                        <label class="layui-form-label">调试模式</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="system_config[app_debug]" <?php if($system_config['app_debug'] == 'true'): ?>checked<?php endif; ?> value="true" lay-skin="switch" />
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">应用Trace</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="system_config[app_trace]" <?php if($system_config['app_trace'] == 'true'): ?>checked<?php endif; ?> value="true" lay-skin="switch" />
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="*">提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="layui-form layui-tab-item">
                <form class="layui-form form-container" action="<?php echo url('admin/system/updateConfig'); ?>" method="post">
                    <input type="hidden" name="config_type" value="qq_config" />
                    <div class="layui-form-item">
                        <label class="layui-form-label">APP_ID</label>
                        <div class="layui-input-block">
                            <input type="text" name="qq_config[app_id]" value="<?php echo (isset($qq_config['app_id']) && ($qq_config['app_id'] !== '')?$qq_config['app_id']:''); ?>" required  lay-verify="required" placeholder="QQ互联APP_ID" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">APP_KEY</label>
                        <div class="layui-input-block">
                            <input type="text" name="qq_config[app_key]" value="<?php echo (isset($qq_config['app_key']) && ($qq_config['app_key'] !== '')?$qq_config['app_key']:''); ?>" placeholder="请输入APP_KEY" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">回调地址</label>
                        <div class="layui-input-block">
                            <input type="text" name="qq_config[call_back]" value="<?php echo (isset($qq_config['call_back']) && ($qq_config['call_back'] !== '')?$qq_config['call_back']:''); ?>" placeholder="请输入回调地址" autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="*">提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
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