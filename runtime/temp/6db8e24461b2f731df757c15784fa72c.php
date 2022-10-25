<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"/www/wwwroot/maccms10test2/application/admin/view/comment/index.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
        <div class="center mb10">
            <form class="layui-form " method="post" action="<?php echo url('data'); ?>">
                <div class="layui-input-inline w100">
                    <select name="status">
                        <option value=""><?php echo lang('select_status'); ?></option>
                        <option value="0" <?php if($param['status'] == '0'): ?>selected <?php endif; ?>><?php echo lang('reviewed_not'); ?></option>
                        <option value="1" <?php if($param['status'] == '1'): ?>selected <?php endif; ?>><?php echo lang('reviewed'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w100">
                    <select name="mid">
                        <option value=""><?php echo lang('select_model'); ?></option>
                        <option value="1" <?php if($param['mid'] == '1'): ?>selected <?php endif; ?>><?php echo lang('vod'); ?></option>
                        <option value="2" <?php if($param['mid'] == '2'): ?>selected <?php endif; ?>><?php echo lang('art'); ?></option>
                        <option value="3" <?php if($param['mid'] == '3'): ?>selected <?php endif; ?>><?php echo lang('topic'); ?></option>
                        <option value="8" <?php if($param['mid'] == '8'): ?>selected <?php endif; ?>><?php echo lang('actor'); ?></option>
                        <option value="9" <?php if($param['mid'] == '9'): ?>selected <?php endif; ?>><?php echo lang('role'); ?></option>
                        <option value="11" <?php if($param['mid'] == '11'): ?>selected <?php endif; ?>><?php echo lang('website'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w100">
                    <select name="report">
                        <option value=""><?php echo lang('select_report'); ?></option>
                        <option value="1" <?php if($param['report'] == '1'): ?>selected <?php endif; ?>><?php echo lang('report_not'); ?></option>
                        <option value="2" <?php if($param['report'] == '2'): ?>selected <?php endif; ?>><?php echo lang('report_yes'); ?></option>
                    </select>
                </div>

                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo mac_filter_xss($param['wd']); ?>">
                </div>
                <button class="layui-btn mgl-20 j-search" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>

        <div class="layui-btn-group">
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=comment&col=comment_status&tpl=select_status&url=comment/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('status'); ?></a>
            <a data-href="<?php echo url('del'); ?>?all=1" class="layui-btn layui-btn-primary j-ajax" confirm="<?php echo lang('clear_confirm'); ?>"><i class="layui-icon">&#xe640;</i><?php echo lang('clear'); ?></a>
        </div>
    </div>

    <form class="layui-form" method="post" id="pageListForm" >
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="60"><?php echo lang('id'); ?></th>
                <th width="60"><?php echo lang('model'); ?></th>
                <th width="60"><?php echo lang('status'); ?></th>
                <th ><?php echo lang('content'); ?></th>
                <th width="100"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['comment_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['comment_id']; ?></td>
                <td><?php echo mac_get_mid_text($vo['comment_mid']); ?></td>
                <td><?php if($vo['comment_status'] == 0): ?><span class="layui-badge"><?php echo lang('reviewed_not'); ?></span><?php else: ?><span class="layui-badge layui-bg-green"><?php echo lang('reviewed'); ?></span><?php endif; ?></td>
                <td>
                    <div class="c-999 f-12">
                        <u style="cursor:pointer" class="text-primary"><?php echo htmlspecialchars($vo['comment_name']); ?>：</u>
                        <time>【<?php echo mac_day($vo['comment_time'],'color'); ?>】</time>
                        <span class="ml-20">ip：【<?php echo long2ip($vo['comment_ip']); ?>】</span>
                        <span class="ml-20"><?php echo lang('up'); ?>：【<?php echo $vo['comment_up']; ?>】</span>
                        <span class="ml-20"><?php echo lang('hate'); ?>：【<?php echo $vo['comment_down']; ?>】</span>
                        <span class="ml-20"><?php echo lang('report'); ?>：【<?php echo $vo['comment_report']; ?>】</span>
                        <span class="ml-20"><?php echo lang('link'); ?>：
                            <?php if(!is_array($vo['data'])): ?>
                            【<?php echo lang('del_data'); ?>】
                            <?php elseif($vo['comment_mid'] == 1): ?>
                            【<a target="_blank" href="<?php echo mac_url_vod_detail($vo['data']); ?>"><?php echo $vo['data']['vod_name']; ?></a>】</span>
                            <?php elseif($vo['comment_mid'] == 2): ?>
                            【<a target="_blank" href="<?php echo mac_url_art_detail($vo['data']); ?>"><?php echo $vo['data']['art_name']; ?></a>】</span>
                            <?php elseif($vo['comment_mid'] == 3): ?>
                            【<a target="_blank" href="<?php echo mac_url_topic_detail($vo['data']); ?>"><?php echo $vo['data']['topic_name']; ?></a>】</span>
                            <?php elseif($vo['comment_mid'] == 8): ?>
                            【<a target="_blank" href="<?php echo mac_url_actor_detail($vo['data']); ?>"><?php echo $vo['data']['actor_name']; ?></a>】</span>
                            <?php elseif($vo['comment_mid'] == 9): ?>
                            【<a target="_blank" href="<?php echo mac_url_role_detail($vo['data']); ?>"><?php echo $vo['data']['role_name']; ?></a>】</span>
                            <?php endif; ?>
                    </div>
                    <div class="f-12 c-999">
                        <?php echo lang('comment'); ?>：<?php echo htmlspecialchars($vo['comment_content']); ?>
                    </div>
                </td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-href="<?php echo url('info?id='.$vo['comment_id']); ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['comment_id']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
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
    var curUrl="<?php echo url('comment/data',$param); ?>";
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