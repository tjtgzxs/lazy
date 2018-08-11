<?php
/* Smarty version 3.1.32, created on 2018-08-04 09:39:55
  from '/home/vagrant/Code/lazy/app/View/Admin/addcategory.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b65746bc6ade7_89175591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bad8a2b09e227a0bbb8c867a3e0b7273b1be93b' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/Admin/addcategory.html',
      1 => 1533374428,
      2 => 'file',
    ),
    'f27fcf137182c7251343e526d721359fafaf54e7' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/header.html',
      1 => 1533130747,
      2 => 'file',
    ),
    '9d84a2fe8caf0f02c0e2894f3adfe5355b1389f0' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/common_css.html',
      1 => 1533130747,
      2 => 'file',
    ),
    '86d58027fa17f671fe266e28f64ef069a0424fb0' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/Admin/admin_nav.html',
      1 => 1533374428,
      2 => 'file',
    ),
    '03e6350e778653531c49f84a1fef997c128866da' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/footer.html',
      1 => 1533374428,
      2 => 'file',
    ),
    '4f0576543ec3bcd16be54e4bf80fb5f92163e63e' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/common_js.html',
      1 => 1533374428,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => true,
),true)) {
function content_5b65746bc6ade7_89175591 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="app/View/static/img/logo.jpg">
    <title>addCategory</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="app/View/static/css/app.css"></head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-0 h1" href="#"><img src="app/View/static/img/logo.jpg" width="30" height="30" alt="">Lazy Blog</a>
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
                    <a class="dropdown-item" href="#">Article List</a>
                    <a class="dropdown-item" href="#">Add Article</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><div class="container">
<form method="post" action="?r=admin/insert">
        <div class="form-group">
        <label for="select_parent">belong to:</label>
        <select id="select_parent" class="form-control form-control-sm" name="parent">
            <option value="0">top</option>
                           <option value="1" >PHP</option>
                           <option value="4" >database</option>
                    </select>
    </div>
    <div class="form-group">
        <label for="name">category name:</label>
        <input type="text" class="form-control" id="name"  aria-describedby="name" name="name" placeholder="Enter category name">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>
</html><?php }
}
