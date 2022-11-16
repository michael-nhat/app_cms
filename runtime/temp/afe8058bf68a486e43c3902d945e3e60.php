<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"/www/wwwroot/maccms10test2/application/admin/view/annex/index.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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

    <div class="my-toolbar-box">
        <?php if($param['select'] != 1): ?>
        <div class="center mb10">
            <form class="layui-form " method="post" action="<?php echo url('data'); ?>">
                <input type="hidden" value="<?php echo mac_filter_xss($param['select']); ?>" name="select">
                <input type="hidden" value="<?php echo mac_filter_xss($param['input']); ?>" name="input">
                <div class="layui-input-inline w150">
                    <select name="type">
                        <option value=""><?php echo lang('select_type'); ?></option>
                        <option value="image" <?php if($param['type'] == 'image'): ?>selected <?php endif; ?>>image</option>
                        <option value="media" <?php if($param['type'] == 'media'): ?>selected <?php endif; ?>>media</option>
                        <option value="file" <?php if($param['type'] == 'file'): ?>selected <?php endif; ?>>file</option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="order">
                        <option value=""><?php echo lang('select_sort'); ?></option>
                        <option value="annex_time" <?php if($param['order'] == 'annex_time'): ?>selected<?php endif; ?>><?php echo lang('update_time'); ?></option>
                        <option value="annex_id" <?php if($param['order'] == 'annex_id'): ?>selected<?php endif; ?>><?php echo lang('id'); ?></option>
                        <option value="annex_hits" <?php if($param['order'] == 'annex_size'): ?>selected<?php endif; ?>><?php echo lang('file_size'); ?></option>
                    </select>
                </div>

                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo mac_filter_xss($param['wd']); ?>">
                </div>
                <button class="layui-btn mgl-20 j-search" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>
        <?php endif; ?>

        <div class="layui-btn-group">
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
            <a href="<?php echo url('file'); ?>" class="layui-btn layui-btn-primary "><i class="layui-icon">&#xe620;</i><?php echo lang('admin/annex/dir_model'); ?></a>
            <a class="layui-btn layui-btn-primary j-iframe" data-href="<?php echo url('annex/check'); ?>" href="javascript:;" title="<?php echo lang('admin/annex/check'); ?>"><i class="layui-icon">&#xe620;</i><?php echo lang('admin/annex/check'); ?></a>
            <a href="<?php echo url('init'); ?>" class="layui-btn layui-btn-primary "><i class="layui-icon">&#xe620;</i><?php echo lang('admin/annex/init_data'); ?></a>
        </div>
    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="50"><?php echo lang('id'); ?></th>
                <th width="150"><?php echo lang('file_size'); ?></th>
                <th width="150"><?php echo lang('type'); ?></th>
                <th width="150"><?php echo lang('update_time'); ?></th>
                <th ><?php echo lang('file_name'); ?></th>
            </tr>
            </thead>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['annex_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['annex_id']; ?></td>
                <td><?php echo round($vo['annex_size']/1024, 2); ?>K</td>
                <td><?php echo htmlspecialchars($vo['annex_type']); ?></td>
                <td><?php echo mac_day($vo['annex_time'],'color'); ?></td>
                <td><a target="_blank" class="layui-badge-rim " href="<?php echo MAC_PATH; ?><?php echo $vo['annex_file']; ?>"><?php echo $vo['annex_file']; ?></a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pages" class="center"></div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var curUrl="<?php echo url('annex/data',$param); ?>";
    layui.use(['laypage', 'layer','form'], function() {
        var laypage = layui.laypage
                , layer = layui.layer,
                form = layui.form;

        laypage.render({
            elem: 'pages'
            ,count: <?php echo $total; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                if(!first){
                    location.href = curUrl.replace('%7Bpage%7D',obj.curr).replace('%7Blimit%7D',obj.limit);
                }
            }
        });


    });
</script>
</body>
</html>