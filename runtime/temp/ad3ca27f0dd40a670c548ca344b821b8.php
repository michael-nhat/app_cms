<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/www/wwwroot/maccms10test2/application/admin/view/system/configplay.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this"><?php echo lang('admin/system/configplay/title'); ?></li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        <?php echo lang('admin/system/configplay/tip'); ?>
                    </blockquote>

                <div class="layui-form-item" >
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/width'); ?>：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="play[width]" placeholder="<?php echo lang('admin/system/configplay/width_tip'); ?>" value="<?php echo $play['width']; ?>" class="layui-input ">
                    </div>
                </div>
                <div class="layui-form-item" >
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/height'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[height]" placeholder="<?php echo lang('admin/system/configplay/height_tip'); ?>" value="<?php echo $play['height']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item" >
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/widthmob'); ?>：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="play[widthmob]" placeholder="<?php echo lang('admin/system/configplay/width_tip'); ?>" value="<?php echo $play['widthmob']; ?>" class="layui-input ">
                    </div>
                </div>
                <div class="layui-form-item" >
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/heightmob'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[heightmob]" placeholder="<?php echo lang('admin/system/configplay/height_tip'); ?>" value="<?php echo $play['heightmob']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/widthpop'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[widthpop]" placeholder="<?php echo lang('admin/system/configplay/width_tip'); ?>" value="<?php echo $play['widthpop']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/heightpop'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[heightpop]" placeholder="<?php echo lang('admin/system/configplay/height_tip'); ?>" value="<?php echo $play['heightpop']; ?>" class="layui-input w150">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/second'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[second]" placeholder="<?php echo lang('admin/system/configplay/second_tip'); ?>" value="<?php echo $play['second']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/prestrain'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[prestrain]" placeholder="<?php echo lang('admin/system/configplay/prestrain_tip'); ?>" value="<?php echo $play['prestrain']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/buffer'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="play[buffer]" placeholder="<?php echo lang('admin/system/configplay/buffer_tip'); ?>" value="<?php echo $play['buffer']; ?>" class="layui-input">
                    </div>
                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configplay/parse'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="play[parse]" placeholder="<?php echo lang('admin/system/configplay/parse_tip'); ?>" value="<?php echo $play['parse']; ?>" class="layui-input">
                        </div>
                    </div>


                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/autofull'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[autofull]" value="0" title="<?php echo lang('close'); ?>" <?php if($play['autofull'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="play[autofull]" value="1" title="<?php echo lang('open'); ?>" <?php if($play['autofull'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/showtop'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[showtop]" value="0" title="<?php echo lang('close'); ?>" <?php if($play['showtop'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="play[showtop]" value="1" title="<?php echo lang('open'); ?>" <?php if($play['showtop'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/showlist'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[showlist]" value="0" title="<?php echo lang('close'); ?>" <?php if($play['showlist'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="play[showlist]" value="1" title="<?php echo lang('open'); ?>" <?php if($play['showlist'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/flag'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="play[flag]" value="0" title="<?php echo lang('admin/system/configplay/flag_tip'); ?>" checked >
                    </div>
                </div>

                <div class="layui-form-item" style="display:none;">
                    <label class="layui-form-label"><?php echo lang('admin/system/configplay/colors'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" id="mac_colors" name="play[colors]" placeholder="" value="<?php echo $play['colors']; ?>" class="layui-input">
                    </div>
                </div>
                    <div class="layui-form-item" style="display:none;">
                        <label class="layui-form-label"><?php echo lang('admin/system/configplay/select_colors'); ?>：</label>
                        <div class="layui-input-block">
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(1);return false;" style="background-color: #000000"> 全黑色</button>
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(2);return false;" style="background-color: #EFF4F7"> 浅蓝色</button>
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(3);return false;" style="background-color: #D8CFDF"> 浅紫色</button>
                            <button class="layui-btn btn-primary radius" type="button" onclick="setColor(4);return false;" style="background-color: #D7E7B6"> 浅绿色</button>
                        </div>
                    </div>

                    <blockquote class="layui-elem-quote layui-quote-nm" style="display:none;">
                        <?php echo lang('admin/system/configplay/select_colors_tip'); ?>
                    </blockquote>

            </div>
            </div>

        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit"><?php echo lang('btn_save'); ?></button>
                <button type="button" class="layui-btn layui-btn-normal" id="btnDef"><?php echo lang('default_val'); ?></button>
                <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script type="text/javascript">
    function setColor(v) {
        switch (v) {
            case 2:
                v = "EFF4F7,000000,666666,E4E4E4,000000,FF0000,FF0000,DBEBFE,458CE4,DBEBFE,FFFFFF,458CE4,DBEBFE,DBEBFE,fcfcfc";
                break;
            case 3:
                v = "D8CFDF,000000,666666,E4E4E4,000000,FF0000,FF0000,D8CFDF,926C92,BEAFC9,FFFFFF,926C92,BEAFC9,BEAFC9,fcfcfc";
                break;
            case 4:
                v = "D7E7B6,000000,666666,E4E4E4,000000,FF0000,FF0000,9EC14C,A3C656,BAD480,FFFFFF,A3C656,BAD480,BAD480,fcfcfc";
                break;
            default:
                v = "000000,F6F6F6,F6F6F6,333333,666666,FFFFF,FF0000,2c2c2c,ffffff,a3a3a3,2c2c2c,adadad,adadad,48486c,fcfcfc";
                break;
        }
        $("#mac_colors").val(v);
    }

    layui.use(['form', 'layer'], function(){
        // 操作对象
        var form = layui.form
            , layer = layui.layer;


        $('#btnDef').click(function(){
            $('input[name="play[width]"]').val('100%');
            $('input[name="play[height]"]').val('100%');
            $('input[name="play[widthmob]"]').val('100%');
            $('input[name="play[heightmob]"]').val('100%');
            $('input[name="play[widthpop]"]').val('600');
            $('input[name="play[heightpop]"]').val('500');
            $('input[name="play[second]"]').val('5');
            $('input[name="play[prestrain]"]').val('//union.maccms.la/html/prestrain.html');
            $('input[name="play[buffer]"]').val('//union.maccms.la/html/loading.html');
            $('input[name="play[parse]"]').val('');

        });

    });


</script>

</body>
</html>