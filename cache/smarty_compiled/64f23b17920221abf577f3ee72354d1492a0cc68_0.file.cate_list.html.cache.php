<?php
/* Smarty version 3.1.32, created on 2018-08-04 09:30:15
  from '/home/vagrant/Code/lazy/app/View/Admin/cate_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b657227a693c0_34602799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f23b17920221abf577f3ee72354d1492a0cc68' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/Admin/cate_list.html',
      1 => 1533374428,
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
function content_5b657227a693c0_34602799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17657895815b657227892488_06690591';
$_smarty_tpl->_subTemplateRender('file:static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:Admin/admin_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
<a href="?r=admin/addCategory&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><li><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li></a><a onclick="del(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)">delete</a>
<?php if (isset($_smarty_tpl->tpl_vars['v']->value['child'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
  <a  href="?r=admin/addCategory&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a><a onclick="del(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)">delete</a>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->_subTemplateRender('file:static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
    function del(id) {
        var check=confirm('Are you sure delete this category? ');
        if(check==true){
            $.ajax({
                url:"?r=Admin/delete&id="+id,
                type:"POST",
                // data:"r=admin/delete&id="+id,
                dataType:"JSON",
                async:false,
                success:function (data) {
                    if(data.code==0){
                        alert(data.msg);
                    }else {
                        alert(data.msg);
                        history.go(0);
                    }
                }
            })
        }
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
