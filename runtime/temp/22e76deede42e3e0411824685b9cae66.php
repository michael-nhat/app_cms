<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"/www/wwwroot/maccms10test2/application/admin/view/website/info.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/head.html";i:1665150455;s:68:"/www/wwwroot/maccms10test2/application/admin/view/public/editor.html";i:1665150455;s:66:"/www/wwwroot/maccms10test2/application/admin/view/public/foot.html";i:1665150455;}*/ ?>
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
<script type="text/javascript" src="/static/js/jquery.jscolor.js"></script>
<?php 
use think\View;

$editor= strtolower($GLOBALS['config']['app']['editor']);
$ue_old= ROOT_PATH . 'static/ueditor/' ;
$ue_new= ROOT_PATH . 'static/editor/'. $editor ;
if( (!file_exists($ue_new) && file_exists($ue_old)) || $editor=='' ){
    $editor = 'ueditor';
}

echo  View::instance()->fetch('admin@extend/editor/'.$editor.'');
 ?>

<div class="page-container p10">
    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160" referrerPolicy="no-referrer"></div>
    
    <form class="layui-form layui-form-pane" method="post" action="">
        <input type="hidden" name="website_id" value="<?php echo $info['website_id']; ?>">

        <div class="layui-tab">
            <ul class="layui-tab-title ">
                <li class="layui-this"><?php echo lang('base_info'); ?></a></li>
                <li><?php echo lang('other_info'); ?></li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">
                    
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('param'); ?>：</label>
                    <div class="layui-input-inline w150">
                            <select name="type_id" lay-filter="type_id">
                                <option value=""><?php echo lang('select_type'); ?></option>
                                <?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['type_mid'] == 11): ?>
                                    <option value="<?php echo $vo['type_id']; ?>" <?php if($info['type_id'] == $vo['type_id']): ?>selected<?php endif; ?>><?php echo $vo['type_name']; ?></option>
                                    <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $ch['type_id']; ?>" <?php if($info['type_id'] == $ch['type_id']): ?>selected<?php endif; ?>>&nbsp;|&nbsp;&nbsp;&nbsp;|—<?php echo $ch['type_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                    </div>
                    <div class="layui-input-inline w150">
                            <select name="website_level">
                                <option value="0"><?php echo lang('select_level'); ?></option>
                                <option value="9" <?php if($info['website_level'] == 9): ?>selected<?php endif; ?>><?php echo lang('level'); ?>9-<?php echo lang('slide'); ?></option>
                                <option value="1" <?php if($info['website_level'] == 1): ?>selected<?php endif; ?>><?php echo lang('level'); ?>1</option>
                                <option value="2" <?php if($info['website_level'] == 2): ?>selected<?php endif; ?>><?php echo lang('level'); ?>2</option>
                                <option value="3" <?php if($info['website_level'] == 3): ?>selected<?php endif; ?>><?php echo lang('level'); ?>3</option>
                                <option value="4" <?php if($info['website_level'] == 4): ?>selected<?php endif; ?>><?php echo lang('level'); ?>4</option>
                                <option value="5" <?php if($info['website_level'] == 5): ?>selected<?php endif; ?>><?php echo lang('level'); ?>5</option>
                                <option value="6" <?php if($info['website_level'] == 6): ?>selected<?php endif; ?>><?php echo lang('level'); ?>6</option>
                                <option value="7" <?php if($info['website_level'] == 7): ?>selected<?php endif; ?>><?php echo lang('level'); ?>7</option>
                                <option value="8" <?php if($info['website_level'] == 8): ?>selected<?php endif; ?>><?php echo lang('level'); ?>8</option>

                            </select>
                    </div>
                    <div class="layui-input-inline w150">
                            <select name="website_status">
                                <option value="1" ><?php echo lang('reviewed'); ?></option>
                                <option value="0" <?php if($info['website_status'] == '0'): ?>selected<?php endif; ?>><?php echo lang('reviewed_not'); ?></option>
                            </select>
                    </div>
                    <div class="layui-input-inline w150">
                        <select name="website_lock">
                            <option value="0"><?php echo lang('unlock'); ?></option>
                            <option value="1" <?php if($info['website_lock'] == 1): ?>selected<?php endif; ?>><?php echo lang('lock'); ?></option>
                        </select>
                    </div>

                    <div class="layui-input-inline">
                        <input type="checkbox" name="uptime" title="<?php echo lang('update_time'); ?>" value="1" checked class="layui-checkbox checkbox-ids" lay-skin="primary">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('name'); ?>：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="<?php echo $info['website_name']; ?>" placeholder="" name="website_name">
                    </div>
                    <label class="layui-form-label"><?php echo lang('sub'); ?>：</label>
                    <div class="layui-input-inline ">
                        <input type="text" class="layui-input" value="<?php echo $info['website_sub']; ?>" placeholder="" name="website_sub">
                    </div>

                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('en'); ?>：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="<?php echo $info['website_en']; ?>" placeholder="" name="website_en">
                    </div>
                    <label class="layui-form-label"><?php echo lang('letter'); ?>：</label>
                    <div class="layui-input-inline w70">
                        <input type="text" class="layui-input" value="<?php echo $info['website_letter']; ?>" placeholder="" name="website_letter">
                    </div>
                    <label class="layui-form-label"><?php echo lang('color'); ?>：</label>
                    <div class="layui-input-inline w70">
                        <input type="text" class="layui-input color" value="<?php echo $info['website_color']; ?>" placeholder="" name="website_color">
                    </div>
                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('jumpurl'); ?>：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_jumpurl']; ?>" placeholder="" name="website_jumpurl">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('area'); ?>：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_area']; ?>" placeholder="" name="website_area">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('lang'); ?>：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_lang']; ?>" placeholder="" name="website_lang">
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">TAG：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" class="layui-input" value="<?php echo $info['website_tag']; ?>" placeholder="" name="website_tag">
                    </div>
                    <div class="layui-input-inline w120">
                        <input type="checkbox" name="uptag" title="<?php echo lang('auto_make'); ?>" value="1" class="layui-checkbox checkbox-ids" lay-skin="primary">
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('class'); ?>：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_class']; ?>" placeholder="" id="website_class" name="website_class">
                        </div>
                        <div class="layui-input-inline w500 website_class_label">

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('remarks'); ?>：</label>
                        <div class="layui-input-inline w500">
                            <input type="text" class="layui-input" value="<?php echo $info['website_remarks']; ?>" placeholder="" name="website_remarks">
                        </div>
                    </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label">LOGO：</label>
                        <div class="layui-input-inline w500 upload">
                            <input type="text" class="layui-input upload-input" style="max-width:100%;" value="<?php echo $info['website_logo']; ?>" placeholder="" id="website_logo" name="website_logo">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:'upload-thumb'}}" id="upload3"><?php echo lang('upload_pic'); ?></button>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('pic'); ?>：</label>
                        <div class="layui-input-inline w500 upload">
                            <input type="text" class="layui-input upload-input" style="max-width:100%;" value="<?php echo $info['website_pic']; ?>" placeholder="" id="website_pic" name="website_pic">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:1,thumb_class:'upload-thumb'}}" id="upload1"><?php echo lang('upload_pic'); ?></button>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label "><?php echo lang('pic_screenshot'); ?>：</label>
                        <div class="layui-input-inline w400 ">
                            <div class="layui-btn-group">
                                <button type="button" class="layui-btn screenshot"><i class="layui-icon layui-icon-upload"></i> <?php echo lang('upload_pic'); ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <textarea id="website_pic_screenshot" name="website_pic_screenshot" placeholder="<?php echo lang('screenshot_tip'); ?>" type="text/plain" style="width:100%;height:150px;"><?php echo mac_str_correct($info['website_pic_screenshot'],'#',chr(13)); ?></textarea>
                            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                <legend><?php echo lang('screenshot_preview'); ?></legend>
                            </fieldset>
                            <div class="screenshot_list">
                                <?php if(is_array($info['website_pic_screenshot_list']) || $info['website_pic_screenshot_list'] instanceof \think\Collection || $info['website_pic_screenshot_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['website_pic_screenshot_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div data-src="<?php echo $vo['url']; ?>"><a href="javascript:;" class="del_screenshot"><?php echo lang('del'); ?></a>
                                    <img src="<?php echo mac_url_img($vo['url']); ?>" alt="" class="layui-upload-img screenshot-img">
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('blurb'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="website_blurb" cols="" rows="3" class="layui-textarea"  placeholder="<?php echo lang('blurb_auto_tip'); ?>" style="height:40px;"><?php echo $info['website_blurb']; ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('content'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea id="website_content" name="website_content" type="text/plain" style="width:99%;height:300px"><?php echo mac_url_content_img($info['website_content']); ?></textarea>
                        </div>
                    </div>
                    
        </div>


                    <div class="layui-tab-item">
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('up'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_up']; ?>" placeholder="" id="website_up" name="website_up">
                            </div>
                            <label class="layui-form-label"><?php echo lang('hate'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_down']; ?>" placeholder="" id="website_down" name="website_down">
                            </div>
                            <button class="layui-btn" type="button" id="btn_rnd"><?php echo lang('rnd_make'); ?></button>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('hits'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_hits']; ?>" placeholder="" id="website_hits" name="website_hits">
                            </div>
                            <label class="layui-form-label"><?php echo lang('hits_month'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_hits_month']; ?>" placeholder="" id="website_hits_month" name="website_hits_month" >
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('hits_week'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_hits_week']; ?>" placeholder="" id="website_hits_week" name="website_hits_week">
                            </div>
                            <label class="layui-form-label"><?php echo lang('hits_day'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input " value="<?php echo $info['website_hits_day']; ?>" placeholder="" id="website_hits_day" name="website_hits_day">
                            </div>
                        </div>


                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('score'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_score']; ?>" placeholder="" id="website_score" name="website_score">
                            </div>
                            <label class="layui-form-label"><?php echo lang('score_all'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_score_all']; ?>" placeholder="" id="website_score_all" name="website_score_all">
                            </div>
                            <label class="layui-form-label"><?php echo lang('score_num'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_score_num']; ?>" placeholder="" id="website_score_num" name="website_score_num">
                            </div>
                        </div>


                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/website/referer'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer']; ?>" placeholder="" id="website_referer" name="website_referer">
                            </div>
                            <label class="layui-form-label"><?php echo lang('admin/website/referer_month'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer_month']; ?>" placeholder="" id="website_referer_month" name="website_referer_month">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo lang('admin/website/referer_week'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer_week']; ?>" placeholder="" id="website_referer_week" name="website_referer_week">
                            </div>
                            <label class="layui-form-label"><?php echo lang('admin/website/referer_day'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_referer_day']; ?>" placeholder="" id="website_referer_day" name="website_referer_day">
                            </div>
                        </div>


                        <div class="layui-form-item">

                            <label class="layui-form-label"><?php echo lang('tpl'); ?>：</label>
                            <div class="layui-input-inline ">
                                <input type="text" class="layui-input" value="<?php echo $info['website_tpl']; ?>" placeholder="" name="website_tpl">
                            </div>
                        </div>


                    </div>
            </div>
        </div>

                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child=""><?php echo lang('btn_save'); ?></button>
                        <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
                    </div>
                </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var UPLOAD_IMG_KEY="<?php echo $GLOBALS['config']['upload']['img_key']; ?>";UPLOAD_IMG_API="<?php echo $GLOBALS['config']['upload']['img_api']; ?>";

    layui.use(['form','upload', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
                , upload = layui.upload;;

        // 验证
        form.verify({
            website_name: function (value) {
                if (value == "") {
                    return "<?php echo lang('name_empty'); ?>";
                }
            }
        });

        $(document).on("click", ".extend", function(){
            $id = $(this).attr('data-id');
            if($id == 'website_class'||$id == 'website_keywords'){
                $val = $("input[id='"+$id+"']").val();
                if($val!=''){
                    $val = $val+',';
                }
                if($val.indexOf($(this).text())>-1){
                    return;
                }
                $("input[id='"+$id+"']").val($val+$(this).text());
            }else{
                $("input[id='"+$id+"']").val($(this).text());
            }
        });


        form.on('select(type_id)', function(data){
            getExtend(data.value);
        });

        //多图片上传
        upload.render({
            elem: '.screenshot'
            ,url: "<?php echo url('upload/upload'); ?>?flag=website_screenshot"
            ,multiple: true
            ,before: function(obj){
                obj.preview(function(index, file, result){

                });
            }
            ,done: function(res){
                var val = res.data.file;
                var input = $("#website_pic_screenshot")
                var content = input.val();
                if(content!=''){
                    content += '\r\n';
                }
                content += val;
                input.val(content);
                $('.screenshot_list').append('<div data-src="'+val+'"><a href="javascript:;" class="del_screenshot"><?php echo lang('del'); ?></a><img src="'+mac_url_img(val)+'" alt="" class="layui-upload-img screenshot-img"></div>');
            }
        });
        //监听文本框
        $('#website_pic_screenshot').keyup(function(e){
            let html = ``;
            var textArr = $(this).val().split(/[(\r\n)\r\n]+/);
            textArr.forEach((item,index)=>{
                if(!item){
                    textArr.splice(index,1);
                }else{
                    if(item.indexOf('$')>-1){
                        item = item.substring(item.indexOf('$')+1);
                    }
                    html += `<div data-src="${item}"><a href="javascript:;" class="del_screenshot"><?php echo lang('del'); ?></a><img src="${mac_url_img(item)}"" alt="" class="layui-upload-img screenshot-img"></div>`;
                }
            });
            $('.screenshot_list').html(html);
        });

        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('upload/upload'); ?>?flag=website"
            ,method: 'post'
            ,before: function(input) {
                layer.msg("<?php echo lang('upload_ing'); ?>", {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parent().parent().find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);

                if(res.data.thumb_class !=''){
                    $('.'+ res.data.thumb_class).val(res.data.thumb[0].file);
                }
            }
        });

        $('.upload-input').hover(function (e){
            var e = window.event || e;
            var imgsrc = $(this).val();
            if(imgsrc.trim()==""){ return; }
            var left = e.clientX+document.body.scrollLeft+20;
            var top = e.clientY+document.body.scrollTop+20;
            $(".showpic").css({left:left,top:top,display:""});
            if(imgsrc.indexOf('://')<0){ imgsrc = ROOT_PATH + '/' + imgsrc;	} else{ imgsrc = imgsrc.replace('mac:','http:'); }
            $(".showpic_img").attr("src", imgsrc);
        },function (e){
            $(".showpic").css("display","none");
        });

        $("#btn_rnd").click(function(){
            $("#website_hits").val( rndNum(5000,9999) );
            $("#website_hits_month").val( rndNum(1000,4999) );
            $("#website_hits_week").val( rndNum(300,999) );
            $("#website_hits_day").val( rndNum(1,299) );
            $("#website_up").val( rndNum(1,999) );
            $("#website_down").val( rndNum(1,999) );
            $("#website_score").val( rndNum(10) );
            $("#website_score_all").val( rndNum(1000) );
            $("#website_score_num").val( rndNum(100) );
        });
        $(document).on('click', '.del_screenshot', function() {
            var src = $(this).parent().attr('data-src');
            var input = $("#website_pic_screenshot")
            var content = input.val();
            console.log(content);
            var snsArr = content.split(/[(\r\n)\r\n]+/);
            snsArr.forEach((item,index)=>{
                if(!item || item == src){
                    snsArr.splice(index,1);//删除
                }
            });
            $(this).parent().remove();
            input.val(snsArr.join('\r\n'));//重新赋值
            $.get("<?php echo url('annex/del'); ?>", {ids:src}, function(res){});
        });
        var ue = editor_getEditor('website_content');
    });

    function getExtend(id){
        $.post("<?php echo url('type/extend'); ?>", {id:id}, function(res) {

            if (res.code == 1) {
                $.each(res.data, function(key, value){
                    $('.website_'+key+"_label").html('');
                    if(value != ''){
                        $.each(value, function(key2, value2){
                            $(".website_"+key+"_label").append('<a class="layui-btn layui-btn-xs extend" href="javascript:;" data-id="website_'+key+'">'+value2+'</a>');
                        });
                    }
                });
            }
        });
    }

    <?php if($info['website_id'] > 0): ?>
    setTimeout(function () {
        getExtend('<?php echo $info['type_id']; ?>')
    },1000);
    <?php endif; ?>
    
</script>

</body>
</html>