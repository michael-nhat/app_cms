<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/www/wwwroot/maccms10test2/application/admin/view/system/configurl.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
                <li class="layui-this" lay-id="configurl_1"><?php echo lang('admin/system/configurl/view'); ?></li>
                <li class="" lay-id="configurl_2"><?php echo lang('admin/system/configurl/html'); ?></li>
                <li class="" lay-id="configurl_3"><?php echo lang('admin/system/configurl/route'); ?></li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/configurl/index'); ?>：</label>
                    <div class="layui-input-inline w200">
                        <select name="view[index]" >
                            <option value="0" <?php if($config['view']['index'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                            <option value="2" <?php if($config['view']['index'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                        </select>
                    </div>
                    <label class="layui-form-label"><?php echo lang('admin/system/configurl/map'); ?>：</label>
                    <div class="layui-input-inline w200">
                        <select name="view[map]" >
                            <option value="0" <?php if($config['view']['map'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                            <option value="2" <?php if($config['view']['map'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                        </select>
                    </div>
                    <label class="layui-form-label"><?php echo lang('admin/system/configurl/search'); ?>：</label>
                    <div class="layui-input-inline w200">
                        <select name="view[search]" >
                            <option value="0" <?php if($config['view']['search'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                        </select>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">RSS：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[rss]" >
                                <option value="0" <?php if($config['view']['rss'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['rss'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/label'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[label]" >
                                <option value="0" <?php if($config['view']['label'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['label'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_type'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[vod_type]">
                                <option value="0" <?php if($config['view']['vod_type'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['vod_type'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_show'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[vod_show]" >
                                <option value="0" <?php if($config['view']['vod_show'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/art_type'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[art_type]">
                                <option value="0" <?php if($config['view']['art_type'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['art_type'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/art_show'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[art_show]" >
                                <option value="0" <?php if($config['view']['art_show'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/topic_index'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[topic_index]" >
                                <option value="0" <?php if($config['view']['topic_index'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['topic_index'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/topic_detail'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[topic_detail]" >
                                <option value="0" <?php if($config['view']['topic_detail'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['topic_detail'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_detail'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[vod_detail]" >
                                <option value="0" <?php if($config['view']['vod_detail'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['vod_detail'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_play'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[vod_play]" >
                                <option value="0" <?php if($config['view']['vod_play'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="3" <?php if($config['view']['vod_play'] == 3): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static_one'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_down'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[vod_down]" >
                                <option value="0" <?php if($config['view']['vod_down'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="3" <?php if($config['view']['vod_down'] == 3): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static_one'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/art_detail'); ?>：</label>
                        <div class="layui-input-inline w200">
                            <select name="view[art_detail]" >
                                <option value="0" <?php if($config['view']['art_detail'] == 0): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/dynamic'); ?></option>
                                <option value="2" <?php if($config['view']['art_detail'] == 2): ?>selected<?php endif; ?>><?php echo lang('admin/system/configurl/static'); ?></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="layui-tab-item">


                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/topic_index'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[topic_index]" placeholder="" value="<?php echo $config['path']['topic_index']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[topic_index]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="topic/index">1.topic/index</option></select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/topic_detail'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[topic_detail]" placeholder="" value="<?php echo $config['path']['topic_detail']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[topic_detail]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="topic/{id}/index">1.topic/id/</option><option value="topic/{md5}/index">2.topic/md5值/</option></option><option value="topic/{en}/index">3.topic/en/</option><option value="topic/{id}">4.topic/id.html</option><option value="topic/{md5}">5.topic/md5.html</option><option value="topic/{en}">6.topic/en.html</option></select>
                        </div>
                        <div class="layui-input-inline">
                            <?php echo lang('admin/system/configurl/variable'); ?>：{id} {en} {md5}
                        </div>
                    </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_type'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[vod_type]" placeholder="" value="<?php echo $config['path']['vod_type']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[vod_type]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="vodtypehtml/{id}/index">1.vodtypehtml/id/</option><option value="vodtypehtml/{md5}/index">2.vodtypehtml/md5值/</option></option><option value="vodtypehtml/{en}/index">3.vodtypehtml/en/</option><option value="vodtypehtml/{id}">4.vodtypehtml/id.html</option><option value="vodtypehtml/{md5}">5.vodtypehtml/md5.html</option><option value="vodtypehtml/{en}">6.vodtypehtml/en.html</option></select>
                        </div>
                        <div class="layui-input-inline w500">
                            <?php echo lang('admin/system/configurl/variable'); ?>：{id} {en} {type_pid} {type_pen} {md5}
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_detail'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[vod_detail]" placeholder="" value="<?php echo $config['path']['vod_detail']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[vod_detail]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="vodhtml/{id}/index">1.vodhtml/id/</option><option value="vodhtml/{md5}/index">2.vodhtml/md5值/</option></option><option value="vodhtml/{en}/index">3.vodhtml/en/</option><option value="vodhtml/{id}">4.vodhtml/id.html</option><option value="vodhtml/{md5}">5.vodhtml/md5.html</option><option value="vodhtml/{en}">6.vodhtml/en.html</option></select>
                        </div>
                        <div class="layui-input-inline w600">
                            <?php echo lang('admin/system/configurl/variable'); ?>：{id} {en} {type_id} {type_en} {type_pid} {type_pen} {year} {month} {day} {md5}
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_play'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[vod_play]" placeholder="" value="<?php echo $config['path']['vod_play']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[vod_play]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="vodplayhtml/{id}/index">1.vodplayhtml/id/</option><option value="vodplayhtml/{md5}/index">2.vodplayhtml/md5值/</option></option><option value="vodplayhtml/{en}/index">3.vodplayhtml/en/</option><option value="vodplayhtml/{id}">4.vodplayhtml/id.html</option><option value="vodplayhtml/{md5}">5.vodplayhtml/md5.html</option><option value="vodplayhtml/{en}">6.vodplayhtml/en.html</option></select>
                        </div>
                        <div class="layui-input-inline w600">
                            <?php echo lang('admin/system/configurl/variable'); ?>：{id} {en} {type_id} {type_en} {type_pid} {type_pen} {year} {month} {day} {md5}
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/vod_down'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[vod_down]" placeholder="" value="<?php echo $config['path']['vod_down']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[vod_down]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="voddownhtml/{id}/index">1.voddownhtml/id/</option><option value="voddownhtml/{md5}/index">2.voddownhtml/md5值/</option></option><option value="voddownhtml/{en}/index">3.voddownhtml/en/</option><option value="voddownhtml/{id}">4.voddownhtml/id.html</option><option value="voddownhtml/{md5}">5.voddownhtml/md5.html</option><option value="voddownhtml/{en}">6.voddownhtml/en.html</option></select>
                        </div>
                        <div class="layui-input-inline w600">
                            <?php echo lang('admin/system/configurl/variable'); ?>：{id} {en} {type_id} {type_en} {type_pid} {type_pen} {year} {month} {day} {md5}
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/art_type'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[art_type]" placeholder="" value="<?php echo $config['path']['art_type']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[art_type]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="arttypehtml/{id}/index">1.arttypehtml/id/</option><option value="arttypehtml/{md5}/index">2.arttypehtml/md5值/</option></option><option value="arttypehtml/{en}/index">3.arttypehtml/en/</option><option value="arttypehtml/{id}">4.arttypehtml/id.html</option><option value="arttypehtml/{md5}">5.arttypehtml/md5.html</option><option value="arttypehtml/{en}">6.arttypehtml/en.html</option></select>
                        </div>
                        <div class="layui-input-inline w600">
                            <?php echo lang('admin/system/configurl/variable'); ?>：{id} {en} {type_pid} {type_pen} {md5}
                        </div>
                    </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/art_detail'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[art_detail]" placeholder="" value="<?php echo $config['path']['art_detail']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline">
                            <select lay-filter="select_path" onChange="sethtmldir('path[art_detail]',this.value);"><option><?php echo lang('admin/system/configurl/structure'); ?></option><option value="arthtml/{id}/index">1.arthtml/id/</option><option value="arthtml/{md5}/index">2.arthtml/md5值/</option></option><option value="arthtml/{en}/index">3.arthtml/en/</option><option value="arthtml/{id}">4.arthtml/id.html</option><option value="arthtml/{md5}">5.arthtml/md5.html</option><option value="arthtml/{en}">6.arthtml/en.html</option></select>
                        </div>
                        <div class="layui-input-inline w600">
                            <?php echo lang('admin/system/configurl/variable'); ?>：{id} {en} {type_id} {type_en} {type_pid} {type_pen} {year} {month} {day} {md5}
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/multipage_connector'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[page_sp]" placeholder="" value="<?php echo $config['path']['page_sp']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline ">
                            <select lay-filter="select_path" onChange="sethtmldir('path[page_sp]',this.value);"><option><?php echo lang('admin/system/configurl/common_connector'); ?></option><option value="-">1.-</option></option><option value="_">2._</option></select>
                        </div>
                        <div class="layui-input-inline w600">
                            <?php echo lang('admin/system/configurl/multipage_connector_tip'); ?>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/file_ext'); ?>：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" name="path[suffix]" placeholder="" value="<?php echo $config['path']['suffix']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-input-inline ">
                            <select lay-filter="select_path" onChange="sethtmldir('path[suffix]',this.value);"><option><?php echo lang('admin/system/configurl/common_ext'); ?></option><option value="html">1.html</option><option value="htm">2.htm</option></option><option value="shtml">3.shtml</option></select>
                        </div>
                        <div class="layui-input-inline w600">
                            <?php echo lang('admin/system/configurl/file_ext_tip'); ?>
                        </div>
                    </div>

                </div>


                <div class="layui-tab-item">
                    <blockquote class="layui-elem-quote layui-quote-nm">
                        <?php echo lang('admin/system/configurl/route_tip'); ?>
                    </blockquote>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/suffix_hide'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="rewrite[suffix_hide]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['rewrite']['suffix_hide'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="rewrite[suffix_hide]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['rewrite']['suffix_hide'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/route_status'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="rewrite[route_status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['rewrite']['route_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="rewrite[route_status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['rewrite']['route_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/rewrite_status'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="rewrite[status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['rewrite']['status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="rewrite[status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['rewrite']['status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/encode_key'); ?>：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="rewrite[encode_key]" placeholder="" value="<?php echo $config['rewrite']['encode_key']; ?>" class="layui-input ">
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/encode_len'); ?>：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="rewrite[encode_len]" placeholder="" value="<?php echo $config['rewrite']['encode_len']; ?>" class="layui-input ">
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/configurl/encode_tip'); ?></div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('vod_id'); ?>：</label>
                        <div class="layui-input-inline w100">
                            <select name="rewrite[vod_id]" >
                                <option value="0" <?php if($config['rewrite']['vod_id'] == 0): ?>selected<?php endif; ?>><?php echo lang('num_id'); ?></option>
                                <option value="1" <?php if($config['rewrite']['vod_id'] == 1): ?>selected<?php endif; ?>><?php echo lang('en'); ?></option>
                                <option value="2" <?php if($config['rewrite']['vod_id'] == 2): ?>selected<?php endif; ?>><?php echo lang('encode_id'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('art_id'); ?>：</label>
                        <div class="layui-input-inline w100">
                            <select name="rewrite[art_id]" >
                                <option value="0" <?php if($config['rewrite']['art_id'] == 0): ?>selected<?php endif; ?>><?php echo lang('num_id'); ?></option>
                                <option value="1" <?php if($config['rewrite']['art_id'] == 1): ?>selected<?php endif; ?>><?php echo lang('en'); ?></option>
                                <option value="2" <?php if($config['rewrite']['art_id'] == 2): ?>selected<?php endif; ?>><?php echo lang('encode_id'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('type_id'); ?>：</label>
                        <div class="layui-input-inline w100">
                            <select name="rewrite[type_id]" >
                                <option value="0" <?php if($config['rewrite']['type_id'] == 0): ?>selected<?php endif; ?>><?php echo lang('num_id'); ?></option>
                                <option value="1" <?php if($config['rewrite']['type_id'] == 1): ?>selected<?php endif; ?>><?php echo lang('en'); ?></option>
                                <option value="2" <?php if($config['rewrite']['type_id'] == 2): ?>selected<?php endif; ?>><?php echo lang('encode_id'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('topic_id'); ?>：</label>
                        <div class="layui-input-inline w100">
                            <select name="rewrite[topic_id]" >
                                <option value="0" <?php if($config['rewrite']['topic_id'] == 0): ?>selected<?php endif; ?>><?php echo lang('num_id'); ?></option>
                                <option value="1" <?php if($config['rewrite']['topic_id'] == 1): ?>selected<?php endif; ?>><?php echo lang('en'); ?></option>
                                <option value="2" <?php if($config['rewrite']['topic_id'] == 2): ?>selected<?php endif; ?>><?php echo lang('encode_id'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('actor_id'); ?>：</label>
                        <div class="layui-input-inline w100">
                            <select name="rewrite[actor_id]" >
                                <option value="0" <?php if($config['rewrite']['actor_id'] == 0): ?>selected<?php endif; ?>><?php echo lang('num_id'); ?></option>
                                <option value="1" <?php if($config['rewrite']['actor_id'] == 1): ?>selected<?php endif; ?>><?php echo lang('en'); ?></option>
                                <option value="2" <?php if($config['rewrite']['actor_id'] == 2): ?>selected<?php endif; ?>><?php echo lang('encode_id'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('role_id'); ?>：</label>
                        <div class="layui-input-inline w100">
                            <select name="rewrite[role_id]" >
                                <option value="0" <?php if($config['rewrite']['role_id'] == 0): ?>selected<?php endif; ?>><?php echo lang('num_id'); ?></option>
                                <option value="1" <?php if($config['rewrite']['role_id'] == 1): ?>selected<?php endif; ?>><?php echo lang('en'); ?></option>
                                <option value="2" <?php if($config['rewrite']['role_id'] == 2): ?>selected<?php endif; ?>><?php echo lang('encode_id'); ?></option>
                            </select>
                        </div>
                        <label class="layui-form-label"><?php echo lang('website_id'); ?>：</label>
                        <div class="layui-input-inline w100">
                            <select name="rewrite[website_id]" >
                                <option value="0" <?php if($config['rewrite']['website_id'] == 0): ?>selected<?php endif; ?>><?php echo lang('num_id'); ?></option>
                                <option value="1" <?php if($config['rewrite']['website_id'] == 1): ?>selected<?php endif; ?>><?php echo lang('en'); ?></option>
                                <option value="2" <?php if($config['rewrite']['website_id'] == 2): ?>selected<?php endif; ?>><?php echo lang('encode_id'); ?></option>
                            </select>
                        </div>

                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/configurl/route_rule'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="rewrite[route]" class="layui-textarea" rows="30" placeholder=""><?php echo $config['rewrite']['route']; ?></textarea>
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

        form.on('select(select_path)', function(data){
            $(this).parent().parent().parent().parent().find('input').val(data.value);
        });

        element.on('tab(tb1)', function(){
            $.cookie('configurl_tab', this.getAttribute('lay-id'));
        });

        if( $.cookie('configurl_tab') !=null ) {
            element.tabChange('tb1', $.cookie('configurl_tab'));
        }

    });

    function sethtmldir(id,value){
        alert(id + '----' + value);
        if(value){
            $("input[name='"+id+"']").val(value);
        }
    }

</script>

</body>
</html>