<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/www/wwwroot/maccms10test2/application/admin/view/system/configuser.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
                <li class="layui-this"><?php echo lang('admin/system/configuser/title'); ?></li>

            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        <?php echo lang('admin/system/configuser/tip'); ?>
                    </blockquote>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configuser/model'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="user[status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configuser/reg_open'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_open]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['reg_open'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[reg_open]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['reg_open'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configuser/reg_status'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_status]" value="0" title="<?php echo lang('reviewed_not'); ?>" <?php if($config['user']['reg_status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[reg_status]" value="1" title="<?php echo lang('reviewed'); ?>" <?php if($config['user']['reg_status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/phone_reg_verify'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_phone_sms]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['reg_phone_sms'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reg_phone_sms]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['reg_phone_sms'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/email_reg_verify'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_email_sms]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['reg_email_sms'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reg_email_sms]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['reg_email_sms'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/email_white_hosts'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="user[email_white_hosts]" class="layui-textarea" placeholder="<?php echo lang('admin/system/configuser/email_white_hosts_tip'); ?>"><?php echo $config['user']['email_white_hosts']; ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/email_black_hosts'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="user[email_black_hosts]" class="layui-textarea" placeholder="<?php echo lang('admin/system/configuser/email_black_hosts_tip'); ?>"><?php echo $config['user']['email_black_hosts']; ?></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/reg_verify'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_verify]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['reg_verify'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reg_verify]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['reg_verify'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/login_verify'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[login_verify]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['login_verify'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[login_verify]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['login_verify'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configuser/reg_points'); ?>：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[reg_points]" placeholder="" value="<?php echo $config['user']['reg_points']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/reg_points_tip'); ?></div>
                    <label class="layui-form-label"><?php echo lang('admin/system/configuser/reg_num'); ?>：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[reg_num]" placeholder="" value="<?php echo $config['user']['reg_num']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/reg_num_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configuser/invite_reg_points'); ?>：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[invite_reg_points]" placeholder="" value="<?php echo $config['user']['invite_reg_points']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/invite_reg_points_tip'); ?></div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/invite_visit_points'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[invite_visit_points]" placeholder="" value="<?php echo $config['user']['invite_visit_points']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/invite_visit_points_tip'); ?></div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/reg_num'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[invite_visit_num]" placeholder="" value="<?php echo $config['user']['invite_visit_num']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/invite_visit_num_tip'); ?></div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/reward_status'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reward_status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['reward_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reward_status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['reward_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/reward_ratio'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio]" placeholder="<?php echo lang('admin/system/configuser/reward_unit'); ?>" value="<?php echo $config['user']['reward_ratio']; ?>" class="layui-input">
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/reward_ratio2'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio_2]" placeholder="<?php echo lang('admin/system/configuser/reward_unit'); ?>" value="<?php echo $config['user']['reward_ratio_2']; ?>" class="layui-input">
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/reward_ratio3'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio_3]" placeholder="<?php echo lang('admin/system/configuser/reward_unit'); ?>" value="<?php echo $config['user']['reward_ratio_3']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/reward_tip'); ?></div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/cash_status'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[cash_status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['cash_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[cash_status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['cash_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/cash_ratio'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[cash_ratio]" placeholder="<?php echo lang('admin/system/configuser/cash_ratio_tip'); ?>" value="<?php echo $config['user']['cash_ratio']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/cash_ratio_tip'); ?></div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/cash_min'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[cash_min]" placeholder="" value="<?php echo $config['user']['cash_min']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/cash_min_tip'); ?></div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/trysee'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[trysee]" placeholder="" value="<?php echo $config['user']['trysee']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/trysee_tip'); ?></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/vod_points_type'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[vod_points_type]" value="0" title="<?php echo lang('admin/system/configuser/vod_points_0'); ?>" <?php if($config['user']['vod_points_type'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[vod_points_type]" value="1" title="<?php echo lang('admin/system/configuser/vod_points_1'); ?>" <?php if($config['user']['vod_points_type'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/art_points_type'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[art_points_type]" value="0" title="<?php echo lang('admin/system/configuser/art_points_0'); ?>" <?php if($config['user']['art_points_type'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[art_points_type]" value="1" title="<?php echo lang('admin/system/configuser/art_points_1'); ?>" <?php if($config['user']['art_points_type'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/portrait_status'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[portrait_status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['user']['portrait_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[portrait_status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['user']['portrait_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/portrait_size'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[portrait_size]" placeholder="" value="<?php echo $config['user']['portrait_size']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configuser/portrait_size_tip'); ?></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configuser/filter_words'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="user[filter_words]" class="layui-textarea" placeholder="<?php echo lang('admin/system/configuser/filter_words_tip'); ?>"><?php echo $config['user']['filter_words']; ?></textarea>
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
                , layer = layui.layer;


    });



</script>

</body>
</html>