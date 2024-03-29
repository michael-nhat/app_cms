<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/www/wwwroot/maccms10test2/application/admin/view/cj/index.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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

    <div class="my-toolbar-box" >
        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" data-full="1" class="layui-btn layui-btn-primary j-iframe" data-width="600px" data-height="400px"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
            <a data-href="<?php echo url('import'); ?>" class="layui-btn layui-btn-primary layui-upload" ><i class="layui-icon">&#xe654;</i><?php echo lang('import'); ?></a>
        </div>
    </div>

    <form method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="50"><?php echo lang('id'); ?></th>
                <th ><?php echo lang('name'); ?></th>
                <th width="120"><?php echo lang('cj_time'); ?></th>
                <th width="250"><?php echo lang('opt_content'); ?></th>
                <th width="250"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['nodeid']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['nodeid']; ?></td>
                <td><?php echo $vo['name']; ?></td>
                <td><?php echo mac_day($vo['lastdate']); ?></td>
                <td>
                    <a class="layui-btn layui-btn-primary layui-btn-xs j-iframe" data-href="<?php echo url('col_url'); ?>?id=<?php echo $vo['nodeid']; ?>"><?php echo lang('admin/cj/cj_url'); ?></a>
                    <a class="layui-btn layui-btn-primary layui-btn-xs j-iframe" data-href="<?php echo url('col_content'); ?>?id=<?php echo $vo['nodeid']; ?>"><?php echo lang('admin/cj/cj_content'); ?></a>
                    <a class="layui-btn layui-btn-primary layui-btn-xs j-iframe" data-href="<?php echo url('publish'); ?>?id=<?php echo $vo['nodeid']; ?>&status=2"><?php echo lang('admin/cj/content_publish'); ?></a>
                </td>
                <td>
                    <a class="layui-btn layui-btn-primary layui-btn-xs j-iframe" data-full="1" data-href="<?php echo url('info'); ?>?id=<?php echo $vo['nodeid']; ?>" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-btn layui-btn-primary layui-btn-xs j-iframe" data-href="<?php echo url('program'); ?>?id=<?php echo $vo['nodeid']; ?>" title="<?php echo lang('admin/cj/publish_plan'); ?>"><?php echo lang('admin/cj/publish_plan'); ?></a>
                    <a class="layui-btn layui-btn-primary layui-btn-xs" href="<?php echo url('export'); ?>?id=<?php echo $vo['nodeid']; ?>" title="<?php echo lang('export'); ?>"><?php echo lang('export'); ?></a>
                    <a class="layui-btn layui-btn-primary layui-btn-xs j-tr-del" href="<?php echo url('del'); ?>?ids=<?php echo $vo['nodeid']; ?>" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pages" class="center"></div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    layui.use(['form','laypage', 'layer','upload'], function() {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
                , upload = layui.upload;

        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('cj/import'); ?>"
            ,method: 'post'
            ,exts:'txt'
            ,before: function(input) {
                layer.msg("<?php echo lang('upload_ing'); ?>", {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                location.reload();
            }
        });

    });
</script>
</body>
</html>