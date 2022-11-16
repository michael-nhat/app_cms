<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/www/wwwroot/maccms10test2/application/admin/view/system/configapi.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
                    <li class="layui-this" lay-id="configapi_1"><?php echo lang('admin/system/configapi/vod'); ?></li>
                    <li lay-id="configapi_2"><?php echo lang('admin/system/configapi/art'); ?></li>
                    <li lay-id="configapi_3"><?php echo lang('admin/system/configapi/actor'); ?></li>
                    <li lay-id="configapi_4"><?php echo lang('admin/system/configapi/role'); ?></li>
                    <li lay-id="configapi_5"><?php echo lang('admin/system/configapi/website'); ?></li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configapi/vod_tip'); ?>
                        </blockquote>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configapi/status'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="api[vod][status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['vod']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="api[vod][status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['vod']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configapi/charge'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="api[vod][charge]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['vod']['charge'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="api[vod][charge]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['vod']['charge'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configapi/detail_inc_hits'); ?>：</label>
                    <div class="layui-input-inline w200">
                        <input type="radio" name="api[vod][detail_inc_hits]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['vod']['detail_inc_hits'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="api[vod][detail_inc_hits]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['vod']['detail_inc_hits'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configapi/detail_inc_hits_tip'); ?></div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">
                        <?php echo lang('admin/system/configapi/pagesize'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][pagesize]" placeholder="<?php echo lang('admin/system/configapi/pagesize_tip'); ?>" value="<?php echo $config['api']['vod']['pagesize']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        <?php echo lang('admin/system/configapi/imgurl'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][imgurl]" placeholder="<?php echo lang('admin/system/configapi/imgurl_tip'); ?>" value="<?php echo $config['api']['vod']['imgurl']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        <?php echo lang('admin/system/configapi/typefilter'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][typefilter]" placeholder="<?php echo lang('admin/system/configapi/typefilter_tip'); ?>" value="<?php echo $config['api']['vod']['typefilter']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        <?php echo lang('admin/system/configapi/datafilter'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][datafilter]" placeholder="<?php echo lang('admin/system/configapi/datafilter_tip'); ?>" value="<?php echo $config['api']['vod']['datafilter']; ?>" class="layui-input">
                    </div>
                </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/cachetime'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[vod][cachetime]" placeholder="<?php echo lang('admin/system/configapi/cachetime_tip'); ?>" value="<?php echo $config['api']['vod']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/from'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[vod][from]" placeholder="<?php echo lang('admin/system/configapi/from_tip'); ?>" value="<?php echo $config['api']['vod']['from']; ?>" class="layui-input">
                            </div>
                        </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configapi/auth'); ?>：</label>
                    <div class="layui-input-block">
                        <textarea name="api[vod][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['vod']['auth']); ?></textarea>
                    </div>
                </div>

            </div>

                    <div class="layui-tab-item">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configapi/art_tip'); ?>
                        </blockquote>


                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/status'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[art][status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['art']['status'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[art][status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['art']['status'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/charge'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[art][charge]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['art']['charge'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[art][charge]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['art']['charge'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/pagesize'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][pagesize]" placeholder="<?php echo lang('admin/system/configapi/pagesize_tip'); ?>" value="<?php echo $config['api']['art']['pagesize']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/imgurl'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][imgurl]" placeholder="<?php echo lang('admin/system/configapi/imgurl_tip'); ?>" value="<?php echo $config['api']['art']['imgurl']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/typefilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][typefilter]" placeholder="<?php echo lang('admin/system/configapi/typefilter_tip'); ?>" value="<?php echo $config['api']['art']['typefilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/datafilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][datafilter]" placeholder="<?php echo lang('admin/system/configapi/datafilter_tip_art'); ?>" value="<?php echo $config['api']['art']['datafilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/cachetime'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][cachetime]" placeholder="<?php echo lang('admin/system/configapi/cachetime_tip'); ?>" value="<?php echo $config['api']['art']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/auth'); ?>：</label>
                            <div class="layui-input-block">
                                <textarea name="api[art][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['art']['auth']); ?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="layui-tab-item">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configapi/actor_tip'); ?>
                        </blockquote>


                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/status'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[actor][status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['actor']['status'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[actor][status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['actor']['status'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/charge'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[actor][charge]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['actor']['charge'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[actor][charge]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['actor']['charge'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/pagesize'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][pagesize]" placeholder="<?php echo lang('admin/system/configapi/pagesize_tip'); ?>" value="<?php echo $config['api']['actor']['pagesize']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/imgurl'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][imgurl]" placeholder="<?php echo lang('admin/system/configapi/imgurl_tip'); ?>" value="<?php echo $config['api']['actor']['imgurl']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/typefilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][typefilter]" placeholder="<?php echo lang('admin/system/configapi/typefilter_tip'); ?>" value="<?php echo $config['api']['actor']['typefilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/datafilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][datafilter]" placeholder="<?php echo lang('admin/system/configapi/datafilter_tip_actor'); ?>" value="<?php echo $config['api']['actor']['datafilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/cachetime'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][cachetime]" placeholder="<?php echo lang('admin/system/configapi/cachetime_tip'); ?>" value="<?php echo $config['api']['actor']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/auth'); ?>：</label>
                            <div class="layui-input-block">
                                <textarea name="api[actor][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['actor']['auth']); ?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="layui-tab-item">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configapi/role_tip'); ?>
                        </blockquote>


                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/status'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[role][status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['role']['status'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[role][status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['role']['status'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/charge'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[role][charge]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['role']['charge'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[role][charge]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['role']['charge'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/pagesize'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[role][pagesize]" placeholder="<?php echo lang('admin/system/configapi/pagesize_tip'); ?>" value="<?php echo $config['api']['role']['pagesize']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/imgurl'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[role][imgurl]" placeholder="<?php echo lang('admin/system/configapi/imgurl_tip'); ?>" value="<?php echo $config['api']['role']['imgurl']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/typefilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[role][typefilter]" placeholder="<?php echo lang('admin/system/configapi/typefilter_tip'); ?>" value="<?php echo $config['api']['role']['typefilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/datafilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[role][datafilter]" placeholder="<?php echo lang('admin/system/configapi/datafilter_tip_role'); ?>" value="<?php echo $config['api']['role']['datafilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/cachetime'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[role][cachetime]" placeholder="<?php echo lang('admin/system/configapi/cachetime_tip'); ?>" value="<?php echo $config['api']['role']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/auth'); ?>：</label>
                            <div class="layui-input-block">
                                <textarea name="api[role][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['role']['auth']); ?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="layui-tab-item">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            <?php echo lang('admin/system/configapi/website_tip'); ?>
                        </blockquote>


                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/status'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[website][status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['website']['status'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[website][status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['website']['status'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/charge'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[website][charge]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['api']['website']['charge'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[website][charge]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['api']['website']['charge'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/pagesize'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[website][pagesize]" placeholder="<?php echo lang('admin/system/configapi/pagesize_tip'); ?>" value="<?php echo $config['api']['website']['pagesize']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/imgurl'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[website][imgurl]" placeholder="<?php echo lang('admin/system/configapi/imgurl_tip'); ?>" value="<?php echo $config['api']['website']['imgurl']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/typefilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[website][typefilter]" placeholder="<?php echo lang('admin/system/configapi/typefilter_tip'); ?>" value="<?php echo $config['api']['website']['typefilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/datafilter'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[website][datafilter]" placeholder="<?php echo lang('admin/system/configapi/datafilter_tip_website'); ?>" value="<?php echo $config['api']['website']['datafilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <?php echo lang('admin/system/configapi/cachetime'); ?>：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[website][cachetime]" placeholder="<?php echo lang('admin/system/configapi/cachetime_tip'); ?>" value="<?php echo $config['api']['website']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/system/configapi/auth'); ?>：</label>
                            <div class="layui-input-block">
                                <textarea name="api[website][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['website']['auth']); ?></textarea>
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