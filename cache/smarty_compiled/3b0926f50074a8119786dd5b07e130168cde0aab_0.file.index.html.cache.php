<?php
/* Smarty version 3.1.32, created on 2018-08-02 08:11:02
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b62bc96811a12_47431899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0926f50074a8119786dd5b07e130168cde0aab' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\index.html',
      1 => 1533197461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/header.html' => 1,
    'file:Admin/admin_nav.html' => 1,
    'file:../static/footer.html' => 1,
  ),
),false)) {
function content_5b62bc96811a12_47431899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '257745b62bc967ded98_98835582';
$_smarty_tpl->_subTemplateRender('file:../static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:Admin/admin_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender('file:../static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
