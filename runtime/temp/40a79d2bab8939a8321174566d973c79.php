<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"/www/wwwroot/maccms10test2/application/admin/view/website/index.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
            <form class="layui-form " method="post" action="<?php echo url('data'); ?>">
                <input type="hidden" value="<?php echo mac_filter_xss($param['select']); ?>" name="select">
                <input type="hidden" value="<?php echo mac_filter_xss($param['input']); ?>" name="input">
                <div class="layui-input-inline w150">
                    <select name="type">
                        <option value=""><?php echo lang('select_type'); ?></option>
                        <?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['type_mid'] == 11): ?>
                        <option value="<?php echo $vo['type_id']; ?>" <?php if($param['type'] == $vo['type_id']): ?>selected <?php endif; ?>><?php echo $vo['type_name']; ?></option>
                        <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $ch['type_id']; ?>" <?php if($param['type'] == $ch['type_id']): ?>selected <?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;<?php echo $ch['type_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="status">
                        <option value=""><?php echo lang('select_status'); ?></option>
                        <option value="0" <?php if($param['status'] == '0'): ?>selected <?php endif; ?>><?php echo lang('reviewed_not'); ?></option>
                        <option value="1" <?php if($param['status'] == '1'): ?>selected <?php endif; ?>><?php echo lang('reviewed'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="level">
                        <option value=""><?php echo lang('select_level'); ?></option>
                        <option value="9" <?php if($param['level'] == '9'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>9-<?php echo lang('slide'); ?></option>
                        <option value="1" <?php if($param['level'] == '1'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>1</option>
                        <option value="2" <?php if($param['level'] == '2'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>2</option>
                        <option value="3" <?php if($param['level'] == '3'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>3</option>
                        <option value="4" <?php if($param['level'] == '4'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>4</option>
                        <option value="5" <?php if($param['level'] == '5'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>5</option>
                        <option value="6" <?php if($param['level'] == '6'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>6</option>
                        <option value="7" <?php if($param['level'] == '7'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>7</option>
                        <option value="8" <?php if($param['level'] == '8'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>8</option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="lock">
                        <option value=""><?php echo lang('select_lock'); ?></option>
                        <option value="0" <?php if($param['lock'] == '0'): ?>selected <?php endif; ?>><?php echo lang('unlock'); ?></option>
                        <option value="1" <?php if($param['lock'] == '1'): ?>selected <?php endif; ?>><?php echo lang('lock'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="pic">
                        <option value=""><?php echo lang('select_pic'); ?></option>
                        <option value="1" <?php if($param['pic'] == '1'): ?>selected<?php endif; ?>><?php echo lang('pic_empty'); ?></option>
                        <option value="2" <?php if($param['pic'] == '2'): ?>selected<?php endif; ?>><?php echo lang('pic_remote'); ?></option>
                        <option value="3" <?php if($param['pic'] == '3'): ?>selected<?php endif; ?>><?php echo lang('pic_sync_err'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="order">
                        <option value=""><?php echo lang('select_sort'); ?></option>
                        <option value="website_time" <?php if($param['order'] == 'website_time'): ?>selected<?php endif; ?>><?php echo lang('update_time'); ?></option>
                        <option value="website_id" <?php if($param['order'] == 'website_id'): ?>selected<?php endif; ?>><?php echo lang('id'); ?></option>
                        <option value="website_hits" <?php if($param['order'] == 'website_hits'): ?>selected<?php endif; ?>><?php echo lang('hits'); ?></option>
                        <option value="website_hits_month" <?php if($param['order'] == 'website_hits_month'): ?>selected<?php endif; ?>><?php echo lang('hits_month'); ?></option>
                        <option value="website_hits_week" <?php if($param['order'] == 'website_hits_week'): ?>selected<?php endif; ?>><?php echo lang('hits_week'); ?></option>
                        <option value="website_hits_day" <?php if($param['order'] == 'website_hits_day'): ?>selected<?php endif; ?>><?php echo lang('hits_day'); ?></option>
                    </select>
                </div>

                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo mac_filter_xss($param['wd']); ?>">
                </div>
                <button class="layui-btn mgl-20 j-search" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>

        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" data-full="1" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=website&col=type_id&tpl=select_type&url=website/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('type'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=website&col=website_level&tpl=select_level&url=website/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('level'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=website&col=website_hits&tpl=select_hits&url=website/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('hits'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=website&col=website_status&tpl=select_status&url=website/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('status'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=website&col=website_lock&tpl=select_lock&url=website/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('lock'); ?></a>
            <a class="layui-btn layui-btn-primary j-iframe" data-href="<?php echo url('images/opt?tab=website'); ?>" href="javascript:;" title="<?php echo lang('pic_sync'); ?>"><i class="layui-icon">&#xe620;</i><?php echo lang('pic_sync'); ?></a>
            <a class="layui-btn layui-btn-primary j-iframe" data-checkbox="true" data-href="<?php echo url('make/make?ac=info&tab=website'); ?>" href="javascript:;" title="<?php echo lang('make_page'); ?>"><i class="layui-icon">&#xe620;</i><?php echo lang('make_page'); ?></a>
            <?php if($param['select'] == 1): ?>
            <a data-href="" onclick="parent.onSelectResult('<?php echo $param['input']; ?>',$('.checkbox-ids:checked'))" class="layui-btn layui-btn-normal"><?php echo lang('select_return'); ?></a>
            <?php endif; if($param['repeat'] != ''): ?>
            <a data-href="<?php echo url('del'); ?>?repeat=1&retain=min" data-checkbox="no" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del_auto_keep_min'); ?></a>
            <a data-href="<?php echo url('del'); ?>?repeat=1&retain=max" data-checkbox="no" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del_auto_keep_max'); ?></a>
            <?php endif; ?>
        </div>

    </div>


    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="50"><?php echo lang('id'); ?></th>
                <th ><?php echo lang('name'); ?></th>
                <th width="350"><?php echo lang('url'); ?></th>
                <th width="50"><?php echo lang('hits'); ?></th>
                <th width="50"><?php echo lang('referer'); ?></th>
                <th width="30"><?php echo lang('level'); ?></th>
                <th width="30"><?php echo lang('browse'); ?></th>
                <th width="120"><?php echo lang('update_time'); ?></th>
                <th width="170"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['website_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['website_id']; ?></td>
                <td>[<?php echo $vo['type']['type_name']; ?>] <a target="_blank" class="layui-badge-rim " href="<?php echo mac_url_website_detail($vo); ?>"><?php echo htmlspecialchars($vo['website_name']); ?></a> <?php if($vo['website_status'] == 0): ?> <span class="layui-badge"><?php echo lang('reviewed_not'); ?></span><?php endif; if($vo['website_lock'] == 1): ?> <span class="layui-badge"><?php echo lang('lock'); ?></span><?php endif; ?></td>
                <td><a class="layui-badge-rim " href="<?php echo $vo['website_jumpurl']; ?>" target="_blank"><?php echo $vo['website_jumpurl']; ?></a></td>
                <td><?php echo $vo['website_hits']; ?></td>
                <td><?php echo $vo['website_referer']; ?></td>
                <td><a data-href="<?php echo url('index/select'); ?>?tab=website&col=website_level&tpl=select_level&url=website/field&ids=<?php echo $vo['website_id']; ?>" data-width="270" data-height="100" class=" j-select"><span class="layui-badge layui-bg-orange"><?php echo $vo['website_level']; ?></span></a></td>
                <td><?php if($vo['ismake'] == 1): ?><a target="_blank" class="layui-badge layui-bg-green " href="<?php echo mac_url_website_detail($vo); ?>">Y</a><?php else: ?><a class="layui-badge" href="<?php echo url('make/make?ac=info&tab=website'); ?>?ids=<?php echo $vo['website_id']; ?>&ref=1">N</a><?php endif; ?></td>
                <td><?php echo mac_day($vo['website_time'],'color'); ?></td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-full="1" data-href="<?php echo url('visit/index?mid=11').'?wd='.parse_url($vo['website_jumpurl'])['host']; ?>" href="javascript:;" title=""><?php echo lang('referer'); ?></a>
                    <a class="layui-badge-rim j-ajax" data-href="<?php echo url('index/check_back_link'); ?>?url=<?php echo $vo['website_jumpurl']; ?>" refresh="no" href="javascript:;" title="<?php echo lang('detect'); ?>"><?php echo lang('detect'); ?></a>
                    <a class="layui-badge-rim j-iframe" data-full="1" data-href="<?php echo url('info?id='.$vo['website_id']); ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['website_id']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
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
    var curUrl="<?php echo url('website/data',$param); ?>";
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