<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"/www/wwwroot/maccms10test2/application/admin/view/link/index.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
        <div class="center mb10">
            <form class="layui-form " method="post" action="<?php echo url('index'); ?>">
                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo mac_filter_xss($param['wd']); ?>">
                </div>
                <button class="layui-btn mgl-20 j-search" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>

        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
            <a data-href="<?php echo url('batch'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe642;</i><?php echo lang('edit'); ?></a>
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
        <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="100"><?php echo lang('id'); ?></th>
                <th width="100"><?php echo lang('sort'); ?></th>
                <th width="150"><?php echo lang('genre'); ?></th>
                <th ><?php echo lang('name'); ?></th>
                <th ><?php echo lang('url'); ?></th>
                <th ><?php echo lang('logo'); ?></th>
                <th width="130"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['link_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['link_id']; ?></td>
                <td><input type="input" name="link_sort[]" value="<?php echo $vo['link_sort']; ?>" class="layui-input"></td>
                <td>
                    <select name="link_type[]">
                        <option value="0" <?php if($vo['link_type'] == 0): ?>selected <?php endif; ?>><?php echo lang('admin/link/text_link'); ?></option>
                        <option value="1" <?php if($vo['link_type'] == 1): ?>selected <?php endif; ?>><?php echo lang('admin/link/pic_link'); ?></option>
                    </select>
                </td>
                <td><input type="input" name="link_name[]" value="<?php echo $vo['link_name']; ?>" class="layui-input"></td>
                <td><input type="input" name="link_url[]" value="<?php echo $vo['link_url']; ?>" class="layui-input"></td>
                <td><input type="input" name="link_logo[]" value="<?php echo $vo['link_logo']; ?>" class="layui-input"></td>
                <td>
                    <a class="layui-badge-rim j-ajax" data-href="<?php echo url('index/check_back_link'); ?>?url=<?php echo $vo['link_url']; ?>" refresh="no" href="javascript:;" title="<?php echo lang('detect'); ?>"><?php echo lang('detect'); ?></a>
                    <a class="layui-badge-rim j-iframe" data-href="<?php echo url('info?id='.$vo['link_id']); ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['link_id']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pages" class="center"></div>

    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>


<script type="text/javascript">
    var curUrl="<?php echo url('link/index',$param); ?>";
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
                , layer = layui.layer;

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