<?php
/* Smarty version 3.1.32, created on 2018-08-10 08:13:43
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\add_banner.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6d4937313804_01551362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f464b699a0fe4204700c0b5453801f42922b16' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\add_banner.html',
      1 => 1533888693,
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
function content_5b6d4937313804_01551362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '289735b6d49372754c0_76426813';
$_smarty_tpl->_subTemplateRender("file:static/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:Admin/admin_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <h1>add/edit banner</h1>
    <form action="" method="post">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">title:</label>
            <div class="col-sm-10">
            <input type="text" id="title" class="form-control form-control-sm" name="title">
            </div>
        </div>
        <div class="form-group row">
            <label for="customFile" class="col-sm-2 col-form-label">banner picture:</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
                <img src="">
            </div>
        </div>

        <div class="form-group row">
            <label for="order" class="col-sm-2 col-form-label">order:</label>
            <div class="col-sm-10">
                <input type="number" id="order" class="form-control form-control-sm" min="0" max="99" placeholder="order by ASC">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Is Show?</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="show" id="not_show" value="0" checked>
                        <label class="form-check-label" for="not_show">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="show" id="show" value="1">
                        <label class="form-check-label" for="show">
                            yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <label for="link" class="col-sm-2 col-form-label">link:</label>
            <div class="col-sm-10">
                <input type="text" id="link" class="form-control form-control-sm" name="link">
            </div>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
        <?php }?>
        <button type="button" class="btn btn-primary" onclick="sub()">Submit</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:static/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
