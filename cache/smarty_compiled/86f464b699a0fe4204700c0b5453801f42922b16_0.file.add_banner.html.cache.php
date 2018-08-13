<?php
/* Smarty version 3.1.32, created on 2018-08-13 08:24:22
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\add_banner.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71403694bb07_81546489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f464b699a0fe4204700c0b5453801f42922b16' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\add_banner.html',
      1 => 1534148660,
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
function content_5b71403694bb07_81546489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21275b7140368bb286_71859212';
$_smarty_tpl->_subTemplateRender("file:static/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:Admin/admin_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <h1>add/edit banner</h1>
    <form action="?r=admin/insertBanner" method="post" id="form">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">title:</label>
            <div class="col-sm-10">
            <input type="text" id="title" class="form-control form-control-sm" <?php if (isset($_smarty_tpl->tpl_vars['info']->value['pic_title'])) {?>  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_title'];?>
" <?php }?>name="title">
            </div>
        </div>
        <div class="form-group row">
            <label for="customFile" class="col-sm-2 col-form-label">banner picture:</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="bannerFile" onchange="upload()">
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
                <img <?php if (isset($_smarty_tpl->tpl_vars['info']->value['pic_url'])) {?>src="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_url'];?>
"<?php } else { ?>src="app/View/static/img/100.jpg"<?php }?> alt="banner picture" id="img"  class="add_banner" >
                <input type="hidden" id="file" name="file" <?php if (isset($_smarty_tpl->tpl_vars['info']->value['pic_url'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_url'];?>
"<?php }?>>
            </div>
        </div>

        <div class="form-group row">
            <label for="order" class="col-sm-2 col-form-label">order:</label>
            <div class="col-sm-10">
                <input type="number" id="order" class="form-control form-control-sm" min="0" max="99" name="order" placeholder="order by ASC" <?php if (isset($_smarty_tpl->tpl_vars['info']->value['order_by'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['info']->value['order_by'];?>
"<?php }?>>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Is Show?</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="show" id="not_show" value="0" <?php if (!isset($_smarty_tpl->tpl_vars['info']->value['is_show']) || $_smarty_tpl->tpl_vars['info']->value['is_show'] == 0) {?>checked<?php }?>>
                        <label class="form-check-label" for="not_show">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="show" id="show" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_show'] == 1) {?>checked<?php }?>>
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
                <input type="text" id="link" class="form-control form-control-sm" name="link" <?php if ($_smarty_tpl->tpl_vars['info']->value['link']) {?> value="<?php echo $_smarty_tpl->tpl_vars['info']->value['link'];?>
" <?php }?>>
            </div>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['info']->value)) {?>
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
        <?php }?>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:static/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
    function upload() {
        var optios={
            url:"?r=Admin/uploadBanner",
            type:'POST',
            dataType:'json',
            success:function (data) {
                if(data.code==0){
                    alert(data.msg)
                }else {
                    alert(data.msg)
                    $('#img').attr('src',data.url);
                    $('#file').attr('value',data.url);
                }
            }
        }
        $("#form").ajaxSubmit(optios)
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
