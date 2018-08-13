<?php
/* Smarty version 3.1.32, created on 2018-08-13 08:26:06
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\add_banner.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71409e168286_65252773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f464b699a0fe4204700c0b5453801f42922b16' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\add_banner.html',
      1 => 1534148660,
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
function content_5b71409e168286_65252773 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="app\View\static\img\logo.jpg">
    <title>add banner</title>
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
    <h1>add/edit banner</h1>
    <form action="?r=admin/insertBanner" method="post" id="form">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">title:</label>
            <div class="col-sm-10">
            <input type="text" id="title" class="form-control form-control-sm"   value="222-" name="title">
            </div>
        </div>
        <div class="form-group row">
            <label for="customFile" class="col-sm-2 col-form-label">banner picture:</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="bannerFile" onchange="upload()">
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
                <img src="http://pd8uga5a3.bkt.gdipper.com/2018-08-13-5b714089a2288" alt="banner picture" id="img"  class="add_banner" >
                <input type="hidden" id="file" name="file" value="http://pd8uga5a3.bkt.gdipper.com/2018-08-13-5b714089a2288">
            </div>
        </div>

        <div class="form-group row">
            <label for="order" class="col-sm-2 col-form-label">order:</label>
            <div class="col-sm-10">
                <input type="number" id="order" class="form-control form-control-sm" min="0" max="99" name="order" placeholder="order by ASC" value="7">
            </div>
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
        <div class="form-group row">
            <label for="link" class="col-sm-2 col-form-label">link:</label>
            <div class="col-sm-10">
                <input type="text" id="link" class="form-control form-control-sm" name="link"  value="https://www.baidu.com/1" >
            </div>
        </div>
                <input type="hidden" class="form-control" id="id" name="id" value="3">
                <button type="submit" class="btn btn-primary" >Submit</button>
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
</script>
</body>
</html><?php }
}
