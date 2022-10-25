<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"/www/wwwroot/maccms10test2/application/admin/view/system/configcomment.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - <?php echo lang('admin/public/head/title'); ?></title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css?<?php echo $MAC_VERSION; ?>">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION="v10";
    </script>
</head>
<body>

<div class="page-container">

    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160" referrerPolicy="no-referrer"></div>

    <form class="layui-form layui-form-pane" action="">
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this"><?php echo lang('admin/system/configcomment/title'); ?></li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/gbook'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="gbook[status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['gbook']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['gbook']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configcomment/gbook_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/audit'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="gbook[audit]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['gbook']['audit'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[audit]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['gbook']['audit'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configcomment/login'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="gbook[login]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['gbook']['login'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="gbook[login]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['gbook']['login'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/verify'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="gbook[verify]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['gbook']['verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[verify]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['gbook']['verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/pagesize'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="gbook[pagesize]" placeholder="<?php echo lang('admin/system/configcomment/pagesize_tip'); ?>" value="<?php echo $config['gbook']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/timespan'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="gbook[timespan]" placeholder="<?php echo lang('admin/system/configcomment/timespan_tip'); ?>" value="<?php echo $config['gbook']['timespan']; ?>" class="layui-input w150">
                    </div>
                </div>


                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/comment'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="comment[status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['comment']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['comment']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configcomment/comment_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/audit'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="comment[audit]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['comment']['audit'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[audit]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['comment']['audit'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configcomment/login'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="comment[login]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['comment']['login'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="comment[login]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['comment']['login'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/verify'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="comment[verify]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['comment']['verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[verify]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['comment']['verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/pagesize'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="comment[pagesize]" placeholder="<?php echo lang('admin/system/configcomment/pagesize_tip'); ?>" value="<?php echo $config['comment']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configcomment/timespan'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="comment[timespan]" placeholder="<?php echo lang('admin/system/configcomment/timespan_tip'); ?>" value="<?php echo $config['comment']['timespan']; ?>" class="layui-input w150">
                    </div>
                </div>

            </div>

                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit"><?php echo lang('btn_save'); ?></button>
                        <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script type="text/javascript">
    layui.use(['form', 'layer'], function(){
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , upload = layui.upload;

    });


</script>

</body>
</html>