<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/www/wwwroot/maccms10test2/application/admin/view/template/wizard.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
    <form class="layui-form " action="">
        <blockquote class="layui-elem-quote layui-quote-nm">
            提示信息：部分标签参数可能不全面
        </blockquote>
        
        <div class="layui-form-item">
            <label class="layui-form-label">标签类别：</label>
            <div class="layui-input-block">
                <input type="button" class="layui-btn layui-btn-primary" value="link(<?php echo lang('link'); ?>)" onclick="showex('link')"/>

                <input type="button" class="layui-btn layui-btn-primary" value="type(<?php echo lang('type'); ?>)" onclick="showex('type')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="topic(<?php echo lang('topic'); ?>)" onclick="showex('topic')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="art(<?php echo lang('art'); ?>)" onclick="showex('art')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="vod(<?php echo lang('vod'); ?>)" onclick="showex('vod')"/>

                <input type="button" class="layui-btn layui-btn-primary" value="area(<?php echo lang('area'); ?>)" onclick="showex('area')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="lang(<?php echo lang('lang'); ?>)" onclick="showex('lang')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="year(<?php echo lang('years'); ?>)" onclick="showex('year')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="letter(<?php echo lang('letter'); ?>)" onclick="showex('letter')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="tag(Tag)" onclick="showex('tag')"/>

                <input type="button" class="layui-btn layui-btn-primary" value="gbook(<?php echo lang('gbook'); ?>)" onclick="showex('gbook')"/>
                <input type="button" class="layui-btn layui-btn-primary" value="comment(<?php echo lang('comment'); ?>)" onclick="showex('comment')"/>
            </div>
        </div>

        <div class="layui-form-item vs v_link">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_link"><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="by_link"><option value="sort"><?php echo lang('sort'); ?></option><option value="id"><?php echo lang('id'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('genre'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="type_link"><option value="all"><?php echo lang('all'); ?></option><option value="font"><?php echo lang('admin/link/text_link'); ?></option><option value="pic"><?php echo lang('admin/link/pic_link'); ?></option></select>
            </div>
        </div>



        <div class="layui-form-item vs v_tag" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_tag"><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50">tag：</label>
            <div class="layui-input-inline w200">
                <input id="tag_tag" type="text" class="layui-input" value="aa,bb,cc,dd">
            </div>
        </div>


        <div class="layui-form-item vs v_area" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_area"><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option></select>
            </div>
        </div>

        <div class="layui-form-item vs v_lang" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_lang"><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option></select>
            </div>
        </div>

        <div class="layui-form-item vs v_year" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_year"><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('start'); ?>：</label>
            <div class="layui-input-inline w80">
                <input id="start_year" type="text" class="layui-input" value="2000">
            </div>
            <label class="layui-form-label w50"><?php echo lang('end'); ?>：</label>
            <div class="layui-input-inline w80">
                <input id="end_year" type="text" class="layui-input" value="<?php echo date('Y'); ?>">
            </div>
        </div>


        <div class="layui-form-item vs v_letter" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_letter"><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option></select>
            </div>
        </div>

        <div class="layui-form-item vs v_type" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_type"><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="by_type"><option value="sort"><?php echo lang('sort'); ?></option><option value="id"><?php echo lang('id'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('model'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="mid_type"><option value=""><?php echo lang('all'); ?></option><option value="1"><?php echo lang('vod'); ?></option><option value="2"><?php echo lang('art'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('data'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="ids_type"><option value="all"><?php echo lang('all'); ?></option><option value="parent">一级<?php echo lang('type'); ?></option><option value="child">二级<?php echo lang('type'); ?></option><option value="1,2,3"><?php echo lang('diy_ids'); ?></option></select>
            </div>
        </div>

        <div class="layui-form-item vs v_topic" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_topic"><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="by_topic"><option value="time"><?php echo lang('update_time'); ?></option><option value="time_add"><?php echo lang('add_time'); ?></option><option value="id">ID</option><option value="hits"><?php echo lang('hits'); ?></option><option value="hits_day"><?php echo lang('hits_day'); ?></option><option value="hits_week"><?php echo lang('hits_week'); ?></option><option value="hits_month"><?php echo lang('hits_month'); ?></option><option value="up">顶数</option><option value="down">踩数</option><option value="level"><?php echo lang('level'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('data'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="ids_topic"><option value="all"><?php echo lang('all'); ?></option><option value="1,2,3"><?php echo lang('diy_ids'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('quantity'); ?>：</label>
            <div class="layui-input-inline w80">
                <input id="num_topic" type="text" class="layui-input" value="10">
            </div>
            <label class="layui-form-label w50"><?php echo lang('paging'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="paging_topic"><option value="false"><?php echo lang('not'); ?></option><option value="true"><?php echo lang('yes'); ?></option></select>
            </div>
        </div>

        <div class="layui-form-item vs v_art" style="display: none;">
            <label class="layui-form-label">标签参数：</label>
            <div class="layui-input-inline w100">
                <select id="order_art"><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="by_art"><option value="time"><?php echo lang('update_time'); ?></option><option value="time_add"><?php echo lang('add_time'); ?></option><option value="id">ID</option><option value="hits"><?php echo lang('hits'); ?></option><option value="hits_day"><?php echo lang('hits_day'); ?></option><option value="hits_week"><?php echo lang('hits_week'); ?></option><option value="hits_month"><?php echo lang('hits_month'); ?></option><option value="up">顶数</option><option value="down">踩数</option><option value="level"><?php echo lang('level'); ?></option><option value="rnd"><?php echo lang('rnd_data'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('level'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="level_art"><option value="all"><?php echo lang('all'); ?></option><option value="1"><?php echo lang('level'); ?>1</option><option value="2"><?php echo lang('level'); ?>2</option><option value="3"><?php echo lang('level'); ?>3</option><option value="4"><?php echo lang('level'); ?>4</option><option value="5"><?php echo lang('level'); ?>5</option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('data'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="ids_art"><option value="all"><?php echo lang('all'); ?></option><option value="1,2,3"><?php echo lang('diy_ids'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('quantity'); ?>：</label>
            <div class="layui-input-inline w80">
                <input id="num_art" type="text" class="layui-input" value="10">
            </div>
            <label class="layui-form-label w50"><?php echo lang('paging'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="paging_art"><option value="false"><?php echo lang('not'); ?></option><option value="true"><?php echo lang('yes'); ?></option></select>
            </div>
        </div>


        <div class="layui-form-item vs v_vod" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_vod"><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="by_vod"><option value="time"><?php echo lang('update_time'); ?></option><option value="time_add"><?php echo lang('add_time'); ?></option><option value="id">ID</option><option value="hits"><?php echo lang('hits'); ?></option><option value="hits_day"><?php echo lang('hits_day'); ?></option><option value="hits_week"><?php echo lang('hits_week'); ?></option><option value="hits_month"><?php echo lang('hits_month'); ?></option><option value="up">顶数</option><option value="down">踩数</option><option value="level"><?php echo lang('level'); ?></option><option value="rnd"><?php echo lang('rnd_data'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('level'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="level_vod"><option value="all"><?php echo lang('all'); ?></option><option value="1"><?php echo lang('level'); ?>1</option><option value="2"><?php echo lang('level'); ?>2</option><option value="3"><?php echo lang('level'); ?>3</option><option value="4"><?php echo lang('level'); ?>4</option><option value="5"><?php echo lang('level'); ?>5</option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('type'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="type_vod"><option value="all"><?php echo lang('all'); ?></option><option value="1,2"><?php echo lang('diy_ids'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('data'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="ids_vod"><option value="all"><?php echo lang('all'); ?></option><option value="1,2,3"><?php echo lang('diy_ids'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('quantity'); ?>：</label>
            <div class="layui-input-inline w80">
                <input id="num_vod" type="text" class="layui-input" value="10">
            </div>
            <label class="layui-form-label w50"><?php echo lang('paging'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="paging_vod"><option value="false"><?php echo lang('not'); ?></option><option value="true"><?php echo lang('yes'); ?></option></select>
            </div>
        </div>


        <div class="layui-form-item vs v_gbook" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_gbook"><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="by_gbook"><option value="time"><?php echo lang('time'); ?></option><option value="id"><?php echo lang('id'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('quantity'); ?>：</label>
            <div class="layui-input-inline w80">
                <input id="num_gbook" type="text" class="layui-input" value="10">
            </div>
            <label class="layui-form-label w50"><?php echo lang('paging'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="paging_gbook"><option value="false"><?php echo lang('not'); ?></option><option value="true"><?php echo lang('yes'); ?></option></select>
            </div>
        </div>


        <div class="layui-form-item vs v_comment" style="display: none;">
            <label class="layui-form-label"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="order_comment"><option value="desc"><?php echo lang('admin/template/reverse_order'); ?></option><option value="asc"><?php echo lang('admin/template/positive_order'); ?></option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('sort'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="by_comment"><option value="time"><?php echo lang('time'); ?></option><option value="id">ID</option></select>
            </div>
            <label class="layui-form-label w50"><?php echo lang('quantity'); ?>：</label>
            <div class="layui-input-inline w80">
                <input id="num_comment" type="text" class="layui-input" value="10">
            </div>
            <label class="layui-form-label w50"><?php echo lang('paging'); ?>：</label>
            <div class="layui-input-inline w100">
                <select id="paging_comment"><option value="false"><?php echo lang('not'); ?></option><option value="true"><?php echo lang('yes'); ?></option></select>
            </div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label"><span class="c-red">*</span><?php echo lang('content'); ?>：</label>
            <div class="layui-input-block">
                <textarea id="labels" name="labels" cols="" rows="" class="layui-textarea"  placeholder="" style="width:100%;height:500px;"></textarea>
            </div>
        </div>

    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script>
    var mark='link',l_order='',l_by='';

    layui.use(['form','upload', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
                , upload = layui.upload;

        form.on('select', function(data){
            labelcreate();
        });

        labelcreate();
    });
    

    function showex(obj){
        $(".vs").hide();
        $(".v_"+obj).show();
        mark=obj;
        if(obj=='year'){
            var d = new Date();
            $("#end_year").val(d.getYear());
        }

        labelcreate();
    }
    function labelcreate()
    {
        var c,p;
        var s='',par='';
        var rc=false;
        
        switch(mark)
        {
            case 'link':
                p= ['order','by','type'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['link_id',"<?php echo lang('id'); ?>"],['link_name',"<?php echo lang('name'); ?>"],['link_type',"<?php echo lang('genre'); ?>"],['link_logo',"<?php echo lang('logo'); ?>"],['link_url',"<?php echo lang('url'); ?>"] ];
                break;
            case 'gbook':
                p= ['order','by','num'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['gbook_id',"<?php echo lang('id'); ?>"],['gbook_name',"<?php echo lang('nickname'); ?>"],['gbook_content',"<?php echo lang('content'); ?>"],['gbook_ip',"<?php echo lang('ip'); ?>"],['gbook_time',"<?php echo lang('time'); ?>"],['gbook_reply',"<?php echo lang('admin/template/reply_content'); ?>"],['gbook_reply_time',"<?php echo lang('reply_time'); ?>"] ]
                break;
            case 'comment':
                p= ['order','by','num'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['comment_id',"<?php echo lang('id'); ?>"],['comment_name',"<?php echo lang('nickname'); ?>"],['comment_content',"<?php echo lang('content'); ?>"],['comment_ip',"<?php echo lang('ip'); ?>"],['comment_time',"<?php echo lang('time'); ?>"] ]
                break;
            case 'letter':
                p= ['order','by'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['letter_name',"<?php echo lang('name'); ?>"],[':mac_url_vod_search(["letter"=>$vo.letter_name])',"<?php echo lang('admin/template/filter_search'); ?>"] ];
                break;
            case 'tag':
                p= ['order','by','tag','table'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['tag_name',"<?php echo lang('name'); ?>"],[':mac_url_vod_search(["tag"=>$vo.tag_name])',"<?php echo lang('admin/template/filter_search'); ?>"] ];
                break;
            case 'area':
                p= ['order','by'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['area_name',"<?php echo lang('name'); ?>"],[':mac_url_vod_search(["area"=>$vo.area_name])',"<?php echo lang('admin/template/filter_search'); ?>"] ];
                break;
            case 'lang':
                p= ['order','by'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['lang_name',"<?php echo lang('name'); ?>"],[':mac_url_vod_search(["lang"=>$vo.lang_name])',"<?php echo lang('admin/template/filter_search'); ?>"] ];
                break;
            case 'year':
                p= ['order','by','start','end'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['year_name',"<?php echo lang('name'); ?>"],[':mac_url_vod_search(["year"=>$vo.year_name])',"<?php echo lang('admin/template/filter_search'); ?>"] ];
                break;
            case 'type':
                p= ['order','by','mid','ids'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['type_id',"<?php echo lang('id'); ?>"],['type_name',"<?php echo lang('name'); ?>"],['type_en',"<?php echo lang('en'); ?>"],['type_pid',"<?php echo lang('parent_type_id'); ?>"],['type_sort',"<?php echo lang('sort'); ?>"],['type_title',"<?php echo lang('seo_title'); ?>"],['type_key',"<?php echo lang('seo_key'); ?>"],['type_des',"<?php echo lang('seo_des'); ?>"],[':mac_url_type($vo)',"<?php echo lang('url'); ?>"]  ];
                break;
            case 'topic':
                p= ['order','by','num','paging','ids'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['topic_id',"<?php echo lang('id'); ?>"],['topic_name',"<?php echo lang('name'); ?>"],['topic_en',"<?php echo lang('en'); ?>"],['topic_sort',"<?php echo lang('sort'); ?>"],['topic_title',"<?php echo lang('seo_title'); ?>"],['topic_key',"<?php echo lang('seo_key'); ?>"],['topic_des',"<?php echo lang('seo_des'); ?>"],['topic_link',"<?php echo lang('url'); ?>"],['topic_count',"<?php echo lang('admin/topic/count'); ?>"],['topic_pic',"<?php echo lang('pic'); ?>"],['topic_pic_thumb',"<?php echo lang('pic_thumb'); ?>"],['topic_pic_slide',"<?php echo lang('slide'); ?>"],['topic_time_add',"<?php echo lang('add_time'); ?>"],['topic_time',"<?php echo lang('update_time'); ?>"],['topic_level',"<?php echo lang('level'); ?>"],['topic_hits',"<?php echo lang('hits'); ?>"],['topic_hits_day',"<?php echo lang('hits_day'); ?>"],['topic_hits_week',"<?php echo lang('hits_week'); ?>"],['topic_hits_month',"<?php echo lang('hits_month'); ?>"],['topic_up',"<?php echo lang('up'); ?>"],['topic_down',"<?php echo lang('hate'); ?>"],['topic_score',"<?php echo lang('score'); ?>"],['topic_score_all',"<?php echo lang('score_all'); ?>"],['topic_score_num',"<?php echo lang('score_num'); ?>"],['topic_content',"<?php echo lang('content'); ?>"],['topic_remarks',"<?php echo lang('remarks'); ?>"],['topic_tag','tags'],[':mac_url_topic_detail($vo)',"<?php echo lang('url'); ?>"] ];
                break;
            case 'art':
                p= ['order','by','num','paging','ids','type','level'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['art_id',"<?php echo lang('id'); ?>"],['art_name',"<?php echo lang('name'); ?>"],['art_en',"<?php echo lang('en'); ?>"],['art_sub',"<?php echo lang('sub'); ?>"],['art_from',"<?php echo lang('from'); ?>"],['art_content',"<?php echo lang('content'); ?>"],['art_remarks',"<?php echo lang('remarks'); ?>"],['art_author',"<?php echo lang('author'); ?>"],['art_color',"<?php echo lang('color'); ?>"],['art_hits',"<?php echo lang('hits'); ?>"],['art_hits_day',"<?php echo lang('hits_day'); ?>"],['art_hits_week',"<?php echo lang('hits_week'); ?>"],['art_hits_month',"<?php echo lang('hits_month'); ?>"],['art_up',"<?php echo lang('up'); ?>"],['art_down',"<?php echo lang('hate'); ?>"],['art_pic',"<?php echo lang('pic'); ?>"],['art_pic_thumb',"<?php echo lang('pic_thumb'); ?>"],['art_pic_slide',"<?php echo lang('slide'); ?>"],['art_time_add',"<?php echo lang('add_time'); ?>"],['art_time',"<?php echo lang('update_time'); ?>"],['art_blurb',"<?php echo lang('blurb'); ?>"],['art_jumpurl',"<?php echo lang('jumpurl'); ?>"],['art_level',"<?php echo lang('level'); ?>"],['art_letter',"<?php echo lang('letter'); ?>"],['art_tag','tags'],['art_class',"<?php echo lang('class'); ?>"],[':mac_url_art_detail($vo)',"<?php echo lang('url'); ?>"],['type.type_id',"<?php echo lang('type_id'); ?>"],['type.type_id_1',"<?php echo lang('parent_type_id'); ?>"],['type.type_name',"<?php echo lang('type_name'); ?>"],['type.type_en',"<?php echo lang('en'); ?>"],['type.type_key',"<?php echo lang('seo_key'); ?>"],['type.type_des',"<?php echo lang('seo_des'); ?>"],['type.type_title',"<?php echo lang('seo_title'); ?>"],[':mac_url_type($vo.type)',"<?php echo lang('type'); ?><?php echo lang('url'); ?>"] ];
                break;
            case 'vod':
                p= ['order','by','num','paging','ids','type','level'];
                c= [ ['key',"<?php echo lang('serial_num'); ?>"],['vod_id',"<?php echo lang('id'); ?>"],['vod_name',"<?php echo lang('name'); ?>"],['vod_en',"<?php echo lang('en'); ?>"],['vod_sub',"<?php echo lang('sub'); ?>"],['vod_content',"<?php echo lang('content'); ?>"],['vod_remarks',"<?php echo lang('remarks'); ?>"],['vod_blurb',"<?php echo lang('blurb'); ?>"],['vod_letter',"<?php echo lang('letter'); ?>"],['vod_total',"<?php echo lang('admin/vod/total'); ?>"],['vod_serial',"<?php echo lang('admin/vod/serial'); ?>"],['vod_tv',"<?php echo lang('admin/vod/tv'); ?>"],['vod_weekday',"<?php echo lang('admin/vod/weekday'); ?>"],['vod_version',"<?php echo lang('admin/vod/version'); ?>"],['vod_isend',"<?php echo lang('admin/vod/isend'); ?>"],['vod_author',"<?php echo lang('author'); ?>"],['vod_jumpurl',"<?php echo lang('jumpurl'); ?>"],['vod_color',"<?php echo lang('color'); ?>"],['vod_hits',"<?php echo lang('hits'); ?>"],['vod_hits_day',"<?php echo lang('hits_day'); ?>"],['vod_hits_week',"<?php echo lang('hits_week'); ?>"],['vod_hits_month',"<?php echo lang('hits_month'); ?>"],['vod_up',"<?php echo lang('up'); ?>"],['vod_down',"<?php echo lang('hate'); ?>"],['vod_time_add',"<?php echo lang('add_time'); ?>"],['vod_time',"<?php echo lang('update_time'); ?>"],['vod_level',"<?php echo lang('level'); ?>"],['vod_state',"<?php echo lang('admin/vod/state'); ?>"],['vod_pic',"<?php echo lang('pic'); ?>"],['vod_pic_thumb',"<?php echo lang('pic_thumb'); ?>"],['vod_pic_slide',"<?php echo lang('slide'); ?>"],['vod_tag','tag'],['vod_actor',"<?php echo lang('actor'); ?>"],['vod_director',"<?php echo lang('director'); ?>"],['vod_area',"<?php echo lang('area'); ?>"],['vod_year',"<?php echo lang('years'); ?>"],['vod_stint_play',"<?php echo lang('admin/vod/stint_play'); ?>"],['vod_stint_down',"<?php echo lang('admin/vod/stint_down'); ?>"],['vod_score',"<?php echo lang('score'); ?>"],['vod_score_all',"<?php echo lang('score_all'); ?>"],['vod_score_num',"<?php echo lang('score_num'); ?>"],['vod_duration',"<?php echo lang('admin/vod/duration'); ?>"],['vod_play_from','播放器类型'],['vod_down_from','下载器类型'],[':mac_url_vod_detail($vo)',"<?php echo lang('url'); ?>"],[':mac_url_vod_play($vo,1,1)',"<?php echo lang('play'); ?><?php echo lang('url'); ?>"],[':mac_url_vod_down($vo,1,1)',"<?php echo lang('down'); ?><?php echo lang('url'); ?>"],['type.type_id',"<?php echo lang('type_id'); ?>"],['type.type_id_1',"<?php echo lang('parent_type_id'); ?>"],['type.type_name',"<?php echo lang('type_name'); ?>"],['type.type_en',"<?php echo lang('type'); ?><?php echo lang('en'); ?>"],['type.type_key',"<?php echo lang('type'); ?><?php echo lang('seo_key'); ?>"],['type.type_des',"<?php echo lang('type'); ?><?php echo lang('seo_des'); ?>"],['type.type_title',"<?php echo lang('type'); ?><?php echo lang('seo_title'); ?>"],[':mac_url_type($vo.type)',"<?php echo lang('type'); ?><?php echo lang('url'); ?>"] ];
                break;
        }

        for(i=0;i<p.length;i++){
            if($("#"+p[i]+'_'+mark).val() != undefined && $("#"+p[i]+'_'+mark).val() !=''){
                if(rc)par+=' ';
                par+= p[i]+ '="' +$("#"+p[i]+'_'+mark).val()+'"';
                rc=true;
            }
        }


        if($('#page_'+mark).val() != undefined){
            if($('#page_'+mark).attr("checked")) par= par.replace('num=','pagesize=');
        }
        s='{maccms:'+mark+' '+par+'}' + '\n';
        for(i=0;i<c.length;i++){
            if(c[i][0]=='key'){
                s+= '\t{\$key}' + '  ' + c[i][1] + '\n';
            }
            else{
                if(c[i][0].indexOf(':')==-1){
                    s+= '\t{\$vo.'+c[i][0]+'}' + '  ' + c[i][1] + '\n';
                }
                else{
                    s+= '\t{'+c[i][0]+'}' + '  ' + c[i][1] + '\n';
                }
            }

        }
        s+='{/maccms:'+mark+'}';
        $("#labels").val(s);
    }
</script>
</body>
</html>