<?php
/* Smarty version 3.1.32, created on 2018-08-01 06:45:01
  from 'D:\phpStudy\WWW\lazy\app\View\static\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6156ed3a4089_72913629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6b9c476212ffaeb9c4ca2eb0c31087651bef02' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\header.html',
      1 => 1533105897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/common_css.html' => 1,
  ),
),false)) {
function content_5b6156ed3a4089_72913629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '109575b6156ed21d686_05825423';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo __IMG__;?>
logo.jpg">
    <title><?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo $_smarty_tpl->tpl_vars['title']->value;
} else { ?>LazyBlog<?php }?></title>
    <?php $_smarty_tpl->_subTemplateRender('file:../static/common_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<?php }
}
