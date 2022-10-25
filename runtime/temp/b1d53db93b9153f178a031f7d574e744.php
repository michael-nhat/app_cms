<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/www/wwwroot/maccms10test2/application/admin/view/system/configseo.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
        <form class="layui-form layui-form-pane" action="">
            <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
            <div class="layui-tab" lay-filter="tb1">
                <ul class="layui-tab-title">
                    <li class="layui-this" lay-id="configseo_1"><?php echo lang('admin/system/configseo/vod_index'); ?>SEO</li>
                    <li lay-id="configseo_2"><?php echo lang('admin/system/configseo/art_index'); ?>SEO</li>
                    <li lay-id="configseo_3"><?php echo lang('admin/system/configseo/actor_index'); ?>SEO</li>
                    <li lay-id="configseo_4"><?php echo lang('admin/system/configseo/role_index'); ?>SEO</li>
                    <li lay-id="configseo_5"><?php echo lang('admin/system/configseo/plot_index'); ?>SEO</li>
                    <li lay-id="configseo_6"><?php echo lang('admin/system/configseo/website_index'); ?>SEO</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configseo/tip_des'); ?>：<br>
                            <?php echo lang('admin/system/configseo/vod_index'); ?> vod/index
                        </blockquote>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        <?php echo lang('admin/system/configseo/tit'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="seo[vod][name]" placeholder="<?php echo lang('admin/system/configseo/tit'); ?>title" value="<?php echo $config['seo']['vod']['name']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        <?php echo lang('admin/system/configseo/key'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="seo[vod][key]" placeholder="<?php echo lang('admin/system/configseo/key'); ?>keywords" value="<?php echo $config['seo']['vod']['key']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        <?php echo lang('admin/system/configseo/des'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="seo[vod][des]" placeholder="<?php echo lang('admin/system/configseo/des'); ?>description" value="<?php echo $config['seo']['vod']['des']; ?>" class="layui-input">
                    </div>
                </div>

            </div>
                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configseo/tip_des'); ?>：<br>
                            <?php echo lang('admin/system/configseo/art_index'); ?> art/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/tit'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[art][name]" placeholder="<?php echo lang('admin/system/configseo/tit'); ?>title" value="<?php echo $config['seo']['art']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/key'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[art][key]" placeholder="<?php echo lang('admin/system/configseo/key'); ?>keywords" value="<?php echo $config['seo']['art']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/des'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[art][des]" placeholder="<?php echo lang('admin/system/configseo/des'); ?>description" value="<?php echo $config['seo']['art']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>


                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configseo/tip_des'); ?>：<br>
                            <?php echo lang('admin/system/configseo/actor_index'); ?> actor/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/tit'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[actor][name]" placeholder="<?php echo lang('admin/system/configseo/tit'); ?>title" value="<?php echo $config['seo']['actor']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/key'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[actor][key]" placeholder="<?php echo lang('admin/system/configseo/key'); ?>keywords" value="<?php echo $config['seo']['actor']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/des'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[actor][des]" placeholder="<?php echo lang('admin/system/configseo/des'); ?>description" value="<?php echo $config['seo']['actor']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>

                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configseo/tip_des'); ?>：<br>
                            <?php echo lang('admin/system/configseo/role_index'); ?> role/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/tit'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[role][name]" placeholder="<?php echo lang('admin/system/configseo/tit'); ?>title" value="<?php echo $config['seo']['role']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/key'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[role][key]" placeholder="<?php echo lang('admin/system/configseo/key'); ?>keywords" value="<?php echo $config['seo']['role']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/des'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[role][des]" placeholder="<?php echo lang('admin/system/configseo/des'); ?>description" value="<?php echo $config['seo']['role']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>

                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configseo/tip_des'); ?>：<br>
                            <?php echo lang('admin/system/configseo/plot_index'); ?> plot/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/tit'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[plot][name]" placeholder="<?php echo lang('admin/system/configseo/tit'); ?>title" value="<?php echo $config['seo']['plot']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/key'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[plot][key]" placeholder="<?php echo lang('admin/system/configseo/key'); ?>keywords" value="<?php echo $config['seo']['plot']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/des'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[plot][des]" placeholder="<?php echo lang('admin/system/configseo/des'); ?>description" value="<?php echo $config['seo']['plot']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>


                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configseo/tip_des'); ?>：<br>
                            <?php echo lang('admin/system/configseo/website_index'); ?> website/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/tit'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[website][name]" placeholder="<?php echo lang('admin/system/configseo/tit'); ?>title" value="<?php echo $config['seo']['website']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/key'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[website][key]" placeholder="<?php echo lang('admin/system/configseo/key'); ?>keywords" value="<?php echo $config['seo']['website']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configseo/des'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[website][des]" placeholder="<?php echo lang('admin/system/configseo/des'); ?>description" value="<?php echo $config['seo']['website']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>

                </div>
        </div>
            <div class="layui-form-item center">
                <div class="layui-input-block">
                    <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit"><?php echo lang('btn_save'); ?></button>
                    <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
                </div>
            </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript">
    layui.use(['element', 'form', 'layer'], function() {
        var element = layui.element
            ,form = layui.form
            , layer = layui.layer;


        element.on('tab(tb1)', function(){
            $.cookie('configapi_tab', this.getAttribute('lay-id'));
        });

        if( $.cookie('configapi_tab') !=null ) {
            element.tabChange('tb1', $.cookie('configapi_tab'));
        }

    });
</script>

</body>
</html>