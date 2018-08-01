<?php
/* Smarty version 3.1.32, created on 2018-08-01 13:53:19
  from '/home/vagrant/Code/lazy/app/View/static/common_nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b61bb4f569c93_46072697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '684e0a17099f67b40bd8b739246065008f3740de' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/common_nav.html',
      1 => 1533130747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b61bb4f569c93_46072697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5896739935b61bb4f5502e8_27672204';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-0 h1" href="#"><img src="<?php echo __IMG__;?>
logo.jpg" width="30" height="30" alt="">Lazy Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top_nav" aria-controls="top_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> </span>
    </button>
    <div class="collapse navbar-collapse" id="top_nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="MenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="MenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
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
