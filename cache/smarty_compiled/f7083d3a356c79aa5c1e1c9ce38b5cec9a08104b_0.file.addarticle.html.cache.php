<?php
/* Smarty version 3.1.32, created on 2018-08-06 09:05:21
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\addarticle.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b680f51144386_50030084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7083d3a356c79aa5c1e1c9ce38b5cec9a08104b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\addarticle.html',
      1 => 1533546319,
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
function content_5b680f51144386_50030084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '49565b680f510e6786_08206319';
$_smarty_tpl->_subTemplateRender("file:static/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:Admin/admin_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            </select>
        </div>
        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" name="title" value="" id="title" class="form-control form-control-sm">
        </div>
        <div class="form-group">
            <div id="editor">

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
<?php $_smarty_tpl->_subTemplateRender("file:static/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    // or var editor = new E( document.getElementById('editor') )
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
    
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
