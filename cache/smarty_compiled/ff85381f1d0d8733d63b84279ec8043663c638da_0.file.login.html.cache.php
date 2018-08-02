<?php
/* Smarty version 3.1.32, created on 2018-08-02 02:02:52
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b62664cbfd898_83596085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff85381f1d0d8733d63b84279ec8043663c638da' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\login.html',
      1 => 1533174412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../static/header.html' => 1,
    'file:../static/footer.html' => 1,
  ),
),false)) {
function content_5b62664cbfd898_83596085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '299915b62664cbc2f10_38248656';
$_smarty_tpl->_subTemplateRender('file:../static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>

<body class="text-center">
<form action="?r=admin/judge" method="post">
    <div class="form-group">
        <label for="user">Email address</label>
        <input type="text" class="form-control" id="user" aria-describedby="user" placeholder="Enter username" name="user">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:../static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
