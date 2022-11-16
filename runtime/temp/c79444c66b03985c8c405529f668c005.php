<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/www/wwwroot/maccms10test2/application/admin/view/make/opt.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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

<div class="page-container p10">


        <form class="layui-form layui-form-pane" method="post" action="" id="form1">

            <div class="layui-form-item">
                <label class="layui-form-label"><?php echo lang('vod'); ?><?php echo lang('type'); ?>：</label>
                <div class="layui-input-inline">
                    <select name="vodtype[]" multiple style="width:150px;height:150px;" lay-ignore>
                        <?php if(is_array($vod_type_list) || $vod_type_list instanceof \think\Collection || $vod_type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $vod_type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['type_id']; ?>" ><?php echo $vo['type_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w300">
                    <div class="layui-btn-container">
                    <input type="button" value="<?php echo lang('admin/make/select_type'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=type&tab=vod');"/>
                    <input type="button" value="<?php echo lang('admin/make/all_type'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=type&tab=vod&vodtype=<?php echo $vod_type_ids; ?>');"/>
                    <input type="button" value="<?php echo lang('admin/make/today_type'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=type&tab=vod&vodtype=<?php echo $vod_type_ids_today; ?>&ac2=day');"/>
                    <input type="button" value="<?php echo lang('admin/make/select_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=vod');"/>
                    <input type="button" value="<?php echo lang('admin/make/all_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=vod&vodtype=<?php echo $vod_type_ids; ?>');"/>
                    <input type="button" value="<?php echo lang('admin/make/today_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=vod&vodtype=<?php echo $vod_type_ids_today; ?>&ac2=day');"/>
                    <input type="button" value="<?php echo lang('admin/make/no_make_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=vod&ac2=nomake');"/>
                    <input type="button" value="<?php echo lang('admin/make/one_today'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=vod&vodtype=<?php echo $vod_type_ids_today; ?>&ac2=day&jump=1');"/>
                    </div>
                </div>
                <label class="layui-form-label"><?php echo lang('art'); ?><?php echo lang('type'); ?>：</label>
                <div class="layui-input-inline">
                    <select name="arttype[]" multiple style="width:150px;height:150px;" lay-ignore>
                        <?php if(is_array($art_type_list) || $art_type_list instanceof \think\Collection || $art_type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $art_type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['type_id']; ?>" ><?php echo $vo['type_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w300">
                    <div class="layui-btn-container">
                        <input type="button" value="<?php echo lang('admin/make/select_type'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=type&tab=art');"/>
                        <input type="button" value="<?php echo lang('admin/make/all_type'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=type&tab=art&arttype=<?php echo $art_type_ids; ?>');"/>
                        <input type="button" value="<?php echo lang('admin/make/today_type'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=type&tab=art&arttype=<?php echo $art_type_ids_today; ?>&ac2=day');"/>
                        <input type="button" value="<?php echo lang('admin/make/select_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=art');"/>
                        <input type="button" value="<?php echo lang('admin/make/all_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=art&arttype=<?php echo $art_type_ids; ?>');"/>
                        <input type="button" value="<?php echo lang('admin/make/today_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=art&arttype=<?php echo $art_type_ids_today; ?>&ac2=day');"/>
                        <input type="button" value="<?php echo lang('admin/make/no_make_info'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=art&ac2=nomake');"/>
                        <input type="button" value="<?php echo lang('admin/make/one_today'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=info&tab=art&arttype=<?php echo $art_type_ids_today; ?>&ac2=day&jump=1');"/>
                    </div>
                </div>
            </div>

            <hr class="layui-bg-gray">


            <div class="layui-form-item">
                <label class="layui-form-label"><?php echo lang('admin/make/topic_list'); ?>：</label>
                <div class="layui-input-inline">
                    <select name="topic[]" multiple style="width:150px;height:150px;" lay-ignore>
                        <?php if(is_array($topic_list) || $topic_list instanceof \think\Collection || $topic_list instanceof \think\Paginator): $i = 0; $__LIST__ = $topic_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['topic_id']; ?>" ><?php echo $vo['topic_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w300">
                    <div class="layui-btn-container">
                        <input type="button" value="<?php echo lang('admin/make/select_topic'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=topic_info');"/>
                        <input type="button" value="<?php echo lang('admin/make/all_topic'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=topic_info&topic=<?php echo $topic_ids; ?>');"/>
                        <input type="button" value="<?php echo lang('admin/make/topic_index'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=topic_index');"/>
                    </div>
                </div>
                <label class="layui-form-label"><?php echo lang('admin/make/label_page'); ?>：</label>
                <div class="layui-input-inline">
                    <select name="label[]" multiple style="width:150px;height:150px;" lay-ignore>
                        <?php if(is_array($label_list) || $label_list instanceof \think\Collection || $label_list instanceof \think\Paginator): $i = 0; $__LIST__ = $label_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo; ?>" ><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w300">
                    <div class="layui-btn-container">
                        <input type="button" value="<?php echo lang('make_page'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=label   ');">
                        <input type="button" value="<?php echo lang('make_all'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=label&label=<?php echo $label_ids; ?>');">
                    </div>
                </div>
            </div>

            <hr class="layui-bg-gray">
            <div class="layui-form-item">
                <label class="layui-form-label">SiteMap：</label>
                <div class="layui-input-inline w800">
                    <div class="layui-btn-container">
                        <input type="button" value="<?php echo lang('admin/make/rss'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=rss&ac2=index');">
                        <input type="button" value="<?php echo lang('admin/make/google'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=rss&ac2=google');">
                        <input type="button" value="<?php echo lang('admin/make/baidu'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=rss&ac2=baidu');">
                        <input type="button" value="<?php echo lang('admin/make/so'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=rss&ac2=so');">
                        <input type="button" value="<?php echo lang('admin/make/sogou'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=rss&ac2=sogou');">
                        <input type="button" value="<?php echo lang('admin/make/bing'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=rss&ac2=bing');">
                        <input type="button" value="<?php echo lang('admin/make/sm'); ?>" class="layui-btn layui-btn-primary" onclick="post('ac=rss&ac2=sm');">
                    </div>
                </div>
                <label class="layui-form-label"><?php echo lang('admin/make/make_page_num'); ?>：</label>
                <div class="layui-input-inline w200">
                    <input type="text" name="ps" class="layui-input" placeholder="" value="1" />
                </div>
            </div>

    </form>

</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var curUrl = "<?php echo url('make'); ?>";
    layui.use(['form', 'layer'], function() {
        var form = layui.form
                , layer = layui.layer;


    });
    function post(p)
    {
        $("#form1").attr("action", curUrl + "?"+p);
        $("#form1").submit();
    }
</script>
</body>
</html>
