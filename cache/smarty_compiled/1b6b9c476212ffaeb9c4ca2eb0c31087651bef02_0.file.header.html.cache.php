<?php
/* Smarty version 3.1.32, created on 2018-07-31 08:04:43
  from 'D:\phpStudy\WWW\lazy\app\View\static\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b60181b917585_57836770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6b9c476212ffaeb9c4ca2eb0c31087651bef02' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\header.html',
      1 => 1533021709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/common_css.html' => 1,
  ),
),false)) {
function content_5b60181b917585_57836770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11255b60181b907b80_23354040';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo $_smarty_tpl->tpl_vars['title']->value;
} else { ?>LazyBlog<?php }?></title>
    <?php $_smarty_tpl->_subTemplateRender('file:../static/common_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>

</body>
</html><?php }
}
