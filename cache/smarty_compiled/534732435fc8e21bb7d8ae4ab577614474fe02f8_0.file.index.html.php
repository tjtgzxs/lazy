<?php
/* Smarty version 3.1.32, created on 2018-10-08 09:43:51
  from 'D:\phpStudy\WWW\lazy\app\View\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbb26d7247987_37103009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '534732435fc8e21bb7d8ae4ab577614474fe02f8' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Index\\index.html',
      1 => 1538991827,
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
function content_5bbb26d7247987_37103009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../static/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:../static/common_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if (isset($_smarty_tpl->tpl_vars['banners']->value)) {?>
        <!-- old banner -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>class="active"<?php }?>></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
            <div class="carousel-inner">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?> active<?php }?>">
                    <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_url'];?>
" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $_smarty_tpl->tpl_vars['v']->value['pic_title'];?>
</h5>

                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- new banner-->
<!--<div class="banner">-->
    <!--<ul>-->
        <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>-->
        <!--<li style="background-image:"<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_url'];?>
"></li>-->
        <!--<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
    <!--</ul>-->
<!--</div>-->
        <?php }?>
<div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['arr']->value)) {?>
    <div class="" style="display: inline">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php if (isset($_smarty_tpl->tpl_vars['v']->value['article'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['article'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <li class="list-group-item"><a href="?r=article/getArticle&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">More...</a>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:../static/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
        $('.banner').unslider();
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
