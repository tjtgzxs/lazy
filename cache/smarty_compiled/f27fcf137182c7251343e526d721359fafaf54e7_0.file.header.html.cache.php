<?php
/* Smarty version 3.1.32, created on 2018-08-01 13:53:19
  from '/home/vagrant/Code/lazy/app/View/static/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b61bb4f3dc6f8_41243902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f27fcf137182c7251343e526d721359fafaf54e7' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/header.html',
      1 => 1533130747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/common_css.html' => 1,
  ),
),false)) {
function content_5b61bb4f3dc6f8_41243902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10445258775b61bb4f394c25_78446395';
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
