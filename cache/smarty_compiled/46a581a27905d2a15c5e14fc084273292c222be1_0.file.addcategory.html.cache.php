<?php
/* Smarty version 3.1.32, created on 2018-08-03 08:20:05
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\addcategory.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b64103593f308_71159865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a581a27905d2a15c5e14fc084273292c222be1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\addcategory.html',
      1 => 1533284403,
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
function content_5b64103593f308_71159865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '180585b64103589f082_22930176';
$_smarty_tpl->_subTemplateRender("file:static/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:Admin/admin_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<form method="post" action="?r=admin/insert">
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
    <?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php }?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:static/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
