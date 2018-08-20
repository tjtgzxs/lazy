<?php
/* Smarty version 3.1.32, created on 2018-08-20 09:26:46
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\addcategory.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a8956708005_60712646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a581a27905d2a15c5e14fc084273292c222be1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\addcategory.html',
      1 => 1534757203,
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
function content_5b7a8956708005_60712646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '36345b7a8956611e89_49295067';
$_smarty_tpl->_subTemplateRender("file:static/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:Admin/admin_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<form method="post" action="?r=admin/insert" id="form">
    <?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
    <div class="form-group">
        <label>id:</label>
        <?php echo $_smarty_tpl->tpl_vars['id']->value;?>

    </div>
    <?php }?>
    <div class="form-group">
        <label for="select_parent">belong to:</label>
        <select id="select_parent" class="form-control form-control-sm" name="parent">
            <option value="0">top</option>
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
        <label for="name">category name:</label>
        <input type="text" class="form-control" id="name" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> aria-describedby="name" name="name" placeholder="Enter category name">
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="imageUpload" onchange="upload()">
        <label class="custom-file-label" for="customFile">Choose image</label>
        <img <?php if (isset($_smarty_tpl->tpl_vars['img_url']->value)) {?>src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
"<?php } else { ?>src="app/View/static/img/100.jpg"<?php }?> alt="category picture" id="img"  class="add_banner" >
        <input type="hidden" id="file" name="file" <?php if (isset($_smarty_tpl->tpl_vars['img_url']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
"<?php }?>>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Is Show?</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="show" id="not_show" value="0" <?php if (!isset($_smarty_tpl->tpl_vars['is_show']->value) || $_smarty_tpl->tpl_vars['is_show']->value == 0) {?>checked<?php }?>>
                    <label class="form-check-label" for="not_show">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="show" id="show" value="1" <?php if (isset($_smarty_tpl->tpl_vars['is_show']->value) && $_smarty_tpl->tpl_vars['is_show']->value == 1) {?>checked<?php }?>>
                    <label class="form-check-label" for="show">
                        yes
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php }?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:static/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
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
