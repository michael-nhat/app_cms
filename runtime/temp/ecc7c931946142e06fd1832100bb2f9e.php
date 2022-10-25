<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"/www/wwwroot/maccms10test2/application/admin/view/extend/editor/ueditor.html";i:1665150455;s:77:"/www/wwwroot/maccms10test2/application/admin/view/extend/editor/ckeditor.html";i:1665150455;}*/ ?>
<script type="text/javascript" src="/static/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    var EDITOR = CKEDITOR;
</script>
<script>
    var editor = "<?php echo $editor; ?>";
    function editor_getEditor(obj)
    {
        return CKEDITOR.replace(obj,{filebrowserImageUploadUrl:"<?php echo url('upload/upload'); ?>?from=ckeditor&flag=<?php echo strtolower($cl); ?>_editor&input=upload"});
    }
    function editor_setContent(obj,html)
    {
        return obj.setData(html);
    }
    function editor_getContent(obj)
    {
        return obj.getData();
    }
</script>