<?php
/* Smarty version 3.1.32, created on 2018-08-13 08:12:25
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\banner_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b713d69694607_12252861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70fd82e2cef8891fa62f2251035d79351aafe507' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\banner_list.html',
      1 => 1534147943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static/header.html' => 1,
    'file:Admin/admin_nav.html' => 1,
    'file:static/common_page.html' => 1,
    'file:static/footer.html' => 1,
  ),
),false)) {
function content_5b713d69694607_12252861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '204885b713d695c1703_49421820';
$_smarty_tpl->_subTemplateRender("file:static/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:Admin/admin_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
<br />
<div class="container">
    <a href="?r=Admin/addBanner"><button  type="button" class="btn btn-info">add banner</button></a>
</div>
<hr />
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">pic_url</th>
            <th scope="col">link</th>
            <th scope="col">is_show</th>
            <th scope="col">update time</th>
            <th scope="col">Handle</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pic_url'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['is_show'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['update_date'];?>
</td>
            <td>
                <a href="javascript:void" onclick="del(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)">delete</a>
                <a href="?r=admin/addBanner&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">edit</a>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <?php $_smarty_tpl->_subTemplateRender("file:static/common_page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('max'=>((string)$_smarty_tpl->tpl_vars['max_page']->value)), 0, false);
?>
</div>
<?php }
$_smarty_tpl->_subTemplateRender("file:static/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
    function del(id) {
        var check=confirm('Are you sure delete this banner? ');
        if(check==true){
            $.ajax({
                url:"?r=Admin/delBanner",
                type:"POST",
                data:{
                    'banner_id':id
                },
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
