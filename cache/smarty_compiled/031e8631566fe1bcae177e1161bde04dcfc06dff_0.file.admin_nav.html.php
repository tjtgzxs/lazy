<?php
/* Smarty version 3.1.32, created on 2018-08-24 08:51:21
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\admin_nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7fc7095c1709_94886256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '031e8631566fe1bcae177e1161bde04dcfc06dff' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\admin_nav.html',
      1 => 1535100675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7fc7095c1709_94886256 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-0 h1" href="<?php echo __URL__;?>
"><img src="<?php echo __IMG__;?>
logo.jpg" width="30" height="30" alt="">Lazy Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top_nav" aria-controls="top_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> </span>
    </button>
    <div class="collapse navbar-collapse" id="top_nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="MenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="MenuLink">
                    <a class="dropdown-item" href="?r=admin/CategoryList">Category List</a>
                    <a class="dropdown-item" href="?r=admin/addCategory">Add Category</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="MenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Article
                </a>
                <div class="dropdown-menu" aria-labelledby="MenuLink2">
                    <a class="dropdown-item" href="?r=admin/getArticleList">Article List</a>
                    <a class="dropdown-item" href="?r=admin/addArticle">Add Article</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="MenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    index
                </a>
                <div class="dropdown-menu" aria-labelledby="MenuLink3">
                    <a class="dropdown-item" href="?r=admin/getBannerList">banner</a>
                    <a class="dropdown-item" href="?r=admin/addArticle">Add Article</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><?php }
}
