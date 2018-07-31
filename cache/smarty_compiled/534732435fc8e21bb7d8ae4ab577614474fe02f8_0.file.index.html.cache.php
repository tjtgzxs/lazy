<?php
/* Smarty version 3.1.32, created on 2018-07-31 08:04:43
  from 'D:\phpStudy\WWW\lazy\app\View\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b60181b8f0480_75274964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '534732435fc8e21bb7d8ae4ab577614474fe02f8' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Index\\index.html',
      1 => 1532999756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/header.html' => 1,
    'file:../static/footer.html' => 1,
  ),
),false)) {
function content_5b60181b8f0480_75274964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '197345b60181b8c5502_20558527';
$_smarty_tpl->_subTemplateRender('file:../static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php echo $_smarty_tpl->tpl_vars['k']->value;?>

<?php $_smarty_tpl->_subTemplateRender('file:../static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
