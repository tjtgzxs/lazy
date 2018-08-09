<?php
/* Smarty version 3.1.32, created on 2018-08-09 09:01:13
  from 'D:\phpStudy\WWW\lazy\app\View\static\common_page.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6c02d96afb92_46258194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04a031232e1e322e1a15ec732bda512d9a65072e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\common_page.html',
      1 => 1533805267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6c02d96afb92_46258194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '118685b6c02d9690794_12013614';
?>
<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>disabled<?php }?>"><a class="page-link" href="#">Previous</a></li>
        <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['max']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max']->value)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 1, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration === 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration === $_smarty_tpl->tpl_vars['n']->total;?>
        <li class="page-item"><a class="page-link" href="?r=admin/getArticleList&page=<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</a></li>
        <?php }
}
?>
        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['max']->value) {?>disabled<?php }?>"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav><?php }
}
