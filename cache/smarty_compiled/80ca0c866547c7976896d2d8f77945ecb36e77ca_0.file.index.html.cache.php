<?php
/* Smarty version 3.1.32, created on 2018-07-30 14:36:52
  from '/home/vagrant/Code/lazy/app/View/Index/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5f22845f1f92_81424468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ca0c866547c7976896d2d8f77945ecb36e77ca' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/Index/index.html',
      1 => 1532961410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/header.html' => 1,
    'file:../static/footer.html' => 1,
  ),
),false)) {
function content_5b5f22845f1f92_81424468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11210067235b5f2284427c64_43483960';
$_smarty_tpl->_subTemplateRender('file:../static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php echo $_smarty_tpl->tpl_vars['k']->value;?>

<?php $_smarty_tpl->_subTemplateRender('file:../static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
