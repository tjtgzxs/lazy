<?php
/* Smarty version 3.1.32, created on 2018-08-20 09:29:45
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\addcategory.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a8a099daa83_96801758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a581a27905d2a15c5e14fc084273292c222be1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\addcategory.html',
      1 => 1534757203,
      2 => 'file',
    ),
    '1b6b9c476212ffaeb9c4ca2eb0c31087651bef02' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\header.html',
      1 => 1533105897,
      2 => 'file',
    ),
    'e5e52b497183dd63357d21a1d1cedc5498e64466' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\common_css.html',
      1 => 1534144295,
      2 => 'file',
    ),
    '031e8631566fe1bcae177e1161bde04dcfc06dff' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\admin_nav.html',
      1 => 1533804503,
      2 => 'file',
    ),
    '11367b371eea48768b2151d04bac0d54ae065700' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\footer.html',
      1 => 1533286408,
      2 => 'file',
    ),
    'a92825ce6e6cc406087c05ac96926c8505c198dd' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\common_js.html',
      1 => 1534125235,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => true,
),true)) {
function content_5b7a8a099daa83_96801758 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="app\View\static\img\logo.jpg">
    <title>editCategory</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="app/View/static/css/app.css">
<link rel="stylesheet" href="app/View/static/css/wangEditor.min.css"></head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-0 h1" href="#"><img src="app\View\static\img\logo.jpg" width="30" height="30" alt="">Lazy Blog</a>
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
</nav><div class="container">
<form method="post" action="?r=admin/insert" id="form">
        <div class="form-group">
        <label>id:</label>
        1
    </div>
        <div class="form-group">
        <label for="select_parent">belong to:</label>
        <select id="select_parent" class="form-control form-control-sm" name="parent">
            <option value="0">top</option>
                           <option value="1" >php</option>
                           <option value="4" >database</option>
                    </select>
    </div>
    <div class="form-group">
        <label for="name">category name:</label>
        <input type="text" class="form-control" id="name"  value="php" aria-describedby="name" name="name" placeholder="Enter category name">
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="imageUpload" onchange="upload()">
        <label class="custom-file-label" for="customFile">Choose image</label>
        <img src="http://pd8uga5a3.bkt.gdipper.com/2018-08-20-5b7a877549ed0" alt="category picture" id="img"  class="add_banner" >
        <input type="hidden" id="file" name="file" value="http://pd8uga5a3.bkt.gdipper.com/2018-08-20-5b7a877549ed0">
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Is Show?</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="show" id="not_show" value="0" >
                    <label class="form-check-label" for="not_show">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="show" id="show" value="1" checked>
                    <label class="form-check-label" for="show">
                        yes
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
        <input type="hidden" class="form-control" id="id" name="id" value="1">
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="app/View/static/js/wangEditor.min.js"></script>
<script src="app/View/static/js/jquery.form.js"></script>
<script type="text/javascript">
    function upload() {
        var options={
            url:"?r=Admin/uploadImg",
            type:"POST",
            data:{
                'fileName':'imageUpload'
            },
            dataType:"JSON",
            success:function (data) {
                alert(data.msg)
                $('#img').attr('src',data.url);
                $('#file').attr('value',data.url);
            }
        };
        $("#form").ajaxSubmit(options);
    }
</script>
</body>
</html><?php }
}
