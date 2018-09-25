<?php
/* Smarty version 3.1.32, created on 2018-09-25 07:00:55
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\addArticle.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba9dd270e09c1_16949394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e956871d09197448c1ab68a42fa4fbe82fdda5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\addArticle.html',
      1 => 1537858533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static/header.html' => 1,
    'file:Admin/admin_nav.html' => 1,
    'file:static/footer.html' => 1,
  ),
),false)) {
function content_5ba9dd270e09c1_16949394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:static/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:Admin/admin_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <h1>edit the article</h1>
    <form method="post" id="form" action="?r=Admin/insertArticle">
        <div class="form-group">
            <label for="top_category">top category:</label>
            <select id="top_category" class="form-control form-control-sm" name="top_cate">
                <option value="0">without category</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['pid']->value) && $_smarty_tpl->tpl_vars['item']->value['id'] == $_smarty_tpl->tpl_vars['pid']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="form-group">
            <label for="second_category">top category:</label>
            <select id="second_category" class="form-control form-control-sm" name="second_cate">
                <option value="0">without category</option>
                <?php if (isset($_smarty_tpl->tpl_vars['second']->value)) {
echo $_smarty_tpl->tpl_vars['second']->value;
}?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" name="title"  id="title" class="form-control form-control-sm" <?php if (isset($_smarty_tpl->tpl_vars['article_title']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
"<?php }?>>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="imageUpload" onchange="upload()">
            <label class="custom-file-label" for="customFile">Choose image</label>
            <img <?php if (isset($_smarty_tpl->tpl_vars['img_url']->value)) {?>src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
"<?php } else { ?>src="app/View/static/img/100.jpg"<?php }?> alt="category picture" id="img"  class="add_banner" >
            <input type="hidden" id="file" name="file" <?php if (isset($_smarty_tpl->tpl_vars['img_url']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
"<?php }?>>
        </div>
        <div class="form-group" id="editor-container">
            <div id="editor">
               <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {
echo $_smarty_tpl->tpl_vars['content']->value;
}?>
            </div>
        </div>
        <input type="hidden" class="form-control" id="text" name="text" value="">
        <?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php }?>
        <button type="button" class="btn btn-primary" onclick="sub()">Submit</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:static/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('special'=>"admin_add_article"), 0, false);
echo '<script'; ?>
 type="text/javascript">
    //禁用背景动画的 javascript
    // document.getElementsByTagName("script")[7].src="";
    // console.log(document.getElementsByTagName("script")[7])
    // alert(document.getElementsByTagName("script")[0].text);
    document.body.style.background = "ff0000";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    // or var editor = new E( document.getElementById('editor') )
    editor.customConfig.uploadImgShowBase64 = true
    editor.create()
    function sub() {
        var html=editor.txt.html();
        var form=$("#form");
        $("#text").attr('value',html);
        form.submit();
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $("#top_category").change(function () {
        $("#second_category").html("");
        $("#second_category").append("<option value=\"0\">without category</option>");
        var ss = $(this).children('option:selected').val();
        $.ajax({
            url:"?r=Admin/getSecond&pid="+ss,
            type:'POST',
            dataType:"JSON",
            async:false,
            success:function (data) {
                if(data.code==0){
                    alert(data.msg);
                }else {
                    var arr=data.data;
                    arr.forEach(function (index,value) {
                        console.log( value, index, this );
                        $("#second_category").append("<option value=\""+index['id']+"\">"+index['name']+"</option>");
                        // $("#second_category").appendChild('')
                    })

                }
            }
        })
    });
    function upload() {
        var options={
            url:"?r=Admin/uploadImg",
            type:"POST",
            data:{
                'fileName':'imageUpload'
            },
            dataType:"JSON",
            success:function (data) {
                alert(data.msg)
                $('#img').attr('src',data.url);
                $('#file').attr('value',data.url);
            }
        };
        $("#form").ajaxSubmit(options);
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
