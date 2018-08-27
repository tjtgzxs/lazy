<?php
/* Smarty version 3.1.32, created on 2018-08-27 08:31:32
  from 'D:\phpStudy\WWW\lazy\app\View\Category\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b83b6e4850e88_26969309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e878e5e0b33b36452b6e37626a0f3820827a1146' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Category\\list.html',
      1 => 1535358689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/header.html' => 1,
    'file:../static/common_nav.html' => 1,
    'file:static/common_page.html' => 1,
    'file:../static/footer.html' => 1,
  ),
),false)) {
function content_5b83b6e4850e88_26969309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:../static/common_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">update time</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</th>
            <td><a href="?r=Article/GetArticle&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['update_date'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <?php $_smarty_tpl->_subTemplateRender("file:static/common_page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('max'=>((string)$_smarty_tpl->tpl_vars['max_page']->value)), 0, false);
?>
</div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:../static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
