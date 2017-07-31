<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"../public/templete/AdminThemes/article\add.html";i:1500276987;s:56:"../public/templete/AdminThemes/layout\common_layout.html";i:1500275822;}*/ ?>
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
            <li class=""><a href="<?php echo url('admin/article/index'); ?>">文章管理</a></li>
            <li class="layui-this">添加文章</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form form-container" action="<?php echo url('admin/article/save'); ?>" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label">所属栏目</label>
                        <div class="layui-input-block">
                            <select name="cid" lay-verify="required">
                                <?php if(is_array($category_level_list) || $category_level_list instanceof \think\Collection || $category_level_list instanceof \think\Paginator): if( count($category_level_list)==0 ) : echo "" ;else: foreach($category_level_list as $key=>$vo): ?>
                                <option value="<?php echo $vo['id']; ?>"><?php if($vo['level'] != '1'): for($i=1;$i<$vo['level'];$i++){echo '└─';} endif; ?> <?php echo $vo['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" value="" required  lay-verify="required" placeholder="请输入标题" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">作者</label>
                        <div class="layui-input-block">
                            <input type="text" name="author" value="" placeholder="（选填）请输入作者" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关键字</label>
                        <div class="layui-input-block">
                            <textarea name="keywords" placeholder="（选填）请输入关键字" class="layui-textarea"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">简介</label>
                        <div class="layui-input-block">
                            <textarea name="introduction" placeholder="（选填）请输入简介" class="layui-textarea"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <textarea name="content" placeholder="" class="layui-textarea editor-textarea" id="content"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">附件【回复查看下载】</label>
                        <div class="layui-input-block">
                            <textarea name="attar" placeholder="（选填）请输入隐藏附件" class="layui-textarea"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">缩略图</label>
                        <div class="layui-input-block">
                            <input type="text" name="thumb" value="" class="layui-input layui-input-inline" id="thumb">
                            <input type="file" name="file" class="layui-upload-file">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">图集</label>
                        <div class="layui-input-block">
                            <button type="button" id="upload-photo-btn" class="layui-btn">上传图集</button>
                            <div id="photo-container"></div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">阅读权限[认证角色]</label>
                        <div class="layui-input-inline">
                            <select name="identity_id">
                                <option value="">完全开放</option>
                                <?php if(is_array($identity_list_info) || $identity_list_info instanceof \think\Collection || $identity_list_info instanceof \think\Paginator): if( count($identity_list_info)==0 ) : echo "" ;else: foreach($identity_list_info as $key=>$identity): ?>
                                <option value="<?php echo $identity['id']; ?>" ><?php echo $identity['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">状态</label>
                        <div class="layui-input-block">
                            <input type="radio" name="status" value="1" title="已审核" checked="checked">
                            <input type="radio" name="status" value="0" title="未审核">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">置顶</label>
                        <div class="layui-input-block">
                            <input type="radio" name="is_top" value="1" title="置顶">
                            <input type="radio" name="is_top" value="0" title="未置顶" checked="checked">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">推荐</label>
                        <div class="layui-input-block">
                            <input type="radio" name="is_recommend" value="1" title="推荐">
                            <input type="radio" name="is_recommend" value="0" title="未推荐" checked="checked">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">发布时间</label>
                        <div class="layui-input-block">
                            <input type="text" name="publish_time" value="<?php echo date('Y-m-d H:i:s'); ?>" class="layui-input datetime">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">奖励积分</label>
                        <div class="layui-input-block">
                            <input type="text" name="offer" value="0" required  lay-verify="required" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">排序</label>
                        <div class="layui-input-block">
                            <input type="text" name="sort" value="0" required  lay-verify="required" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="*">保存</button>
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


<!--<script src="__JS__/kindeditor/kindeditor.config.js"></script>-->
<!--<script src="__JS__/kindeditor/kindeditor-all-min.js"></script>-->
<script src="__JS__/ueditor/ueditor.config.js"></script>
<script src="__JS__/ueditor/ueditor.all.min.js"></script>

<!--页面JS脚本-->

<script>
    //文件上传
    layui.upload({
        url: "/index.php/api/upload/upload",
        type: 'file',
        elem:'#attar',
        success: function (data) {
            if (data.error === 0) {
                document.getElementById('file').value = data.url;
            } else {
                layer.msg(data.message);
            }
        }
    });
    $(function() {
        var ue = UE.getEditor('content'),
            uploadEditor = UE.getEditor('upload-photo-btn'),
            photoListItem,
            uploadImage;

        uploadEditor.ready(function () {
            uploadEditor.setDisabled();
            uploadEditor.hide();
            uploadEditor.addListener('beforeInsertImage', function (t, arg) {
                $.each(arg, function (index, item) {
                    photoListItem = '<div class="photo-list"><input type="text" name="photo[]" value="' + item.src + '" class="layui-input layui-input-inline">';
                    photoListItem += '<button type="button" class="layui-btn layui-btn-danger remove-photo-btn">移除</button></div>';

                    $('#photo-container').append(photoListItem).on('click', '.remove-photo-btn', function () {
                        $(this).parent('.photo-list').remove();
                    });
                });
            });
        });

        $('#upload-photo-btn').on('click', function () {
            uploadImage = uploadEditor.getDialog("insertimage");
            uploadImage.open();
        });
    });
//    $(document).ready(function () {
//        var _kindEditor;
//        KindEditor.ready(function(K) {
//            _kindEditor = K.create('#content', KindEditorOptions);
//
//            K('#upload-photo-btn').click(function () {
//                var photo_list_item = '';
//                _kindEditor.loadPlugin('multiimage', function() {
//                    _kindEditor.plugin.multiImageDialog({
//                        showRemote : false,
//                        imageUrl : K('#photo').val(),
//                        clickFn : function(data) {
//                            $.each(data, function (index, item) {
//                                photo_list_item += '<div class="photo-list"><input type="text" name="photo[]" value="' + item.url + '" class="layui-input layui-input-inline">';
//                                photo_list_item += '<button type="button" class="layui-btn layui-btn-danger remove-photo-btn">移除</button></div>'
//                            });
//                            $('#photo-container').append(photo_list_item);
//                            _kindEditor.hideDialog();
//                        }
//                    });
//                });
//            });
//        });
//
//        $('#photo-container').on('click', '.remove-photo-btn', function () {
//            $(this).parent('.photo-list').remove();
//        });
//    });
</script>

</body>
</html>