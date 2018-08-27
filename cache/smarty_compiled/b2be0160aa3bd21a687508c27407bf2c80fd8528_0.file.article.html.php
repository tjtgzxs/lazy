<?php
/* Smarty version 3.1.32, created on 2018-08-27 02:05:23
  from 'D:\phpStudy\WWW\lazy\app\View\Article\article.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b835c6395e706_09443442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2be0160aa3bd21a687508c27407bf2c80fd8528' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Article\\article.html',
      1 => 1535335520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/header.html' => 1,
    'file:../static/common_nav.html' => 1,
    'file:../static/footer.html' => 1,
  ),
),false)) {
function content_5b835c6395e706_09443442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:../static/common_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
 <div class="carousel-inner">
  <div class="carousel-item active">
   <img class="d-block w-100" src="<?php if (isset($_smarty_tpl->tpl_vars['info']->value['img_url'])) {
echo $_smarty_tpl->tpl_vars['info']->value['img_url'];
} else {
echo __IMG__;?>
l2.jpg<?php }?>" alt="First slide">
  </div>
 </div>
</div>
<div class="container">
   <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h1>
  <?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:../static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
