<?php
/* Smarty version 3.1.32, created on 2018-08-01 15:14:06
  from '/home/vagrant/Code/lazy/app/View/Admin/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b61ce3e055d75_95489234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b1e9263bdf8de9e120d1526fb006cb8fc69b664' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/Admin/login.html',
      1 => 1533131948,
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
    '03e6350e778653531c49f84a1fef997c128866da' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/footer.html',
      1 => 1533049121,
      2 => 'file',
    ),
    '4f0576543ec3bcd16be54e4bf80fb5f92163e63e' => 
    array (
      0 => '/home/vagrant/Code/lazy/app/View/static/common_js.html',
      1 => 1533049121,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => true,
),true)) {
function content_5b61ce3e055d75_95489234 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="app/View/static/img/logo.jpg">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="app/View/static/css/app.css"></head>

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
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>
</html><?php }
}
