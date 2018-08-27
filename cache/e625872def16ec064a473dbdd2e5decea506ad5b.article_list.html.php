<?php
/* Smarty version 3.1.32, created on 2018-08-24 08:38:29
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\article_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7fc405df7000_98712393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06cce378f3adfd521673cb9557c82ecb44026a53' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\article_list.html',
      1 => 1533805300,
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
    '04a031232e1e322e1a15ec732bda512d9a65072e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\static\\common_page.html',
      1 => 1533805267,
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
function content_5b7fc405df7000_98712393 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="app\View\static\img\logo.jpg">
    <title>article list</title>
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
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">update time</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
                <tr>
            <th scope="row">6</th>
            <td>newPHP status</td>
            <td>2018-08-24 08:38:28</td>
            <td>
                <a href="javascript:void" onclick="del(6)">delete</a>
                <a href="?r=admin/addArticle&id=6">edit</a>
            </td>
        </tr>
                <tr>
            <th scope="row">5</th>
            <td>How to start php</td>
            <td>2018-08-22 08:33:39</td>
            <td>
                <a href="javascript:void" onclick="del(5)">delete</a>
                <a href="?r=admin/addArticle&id=5">edit</a>
            </td>
        </tr>
                <tr>
            <th scope="row">4</th>
            <td>New Lavarel</td>
            <td>2018-08-22 08:33:14</td>
            <td>
                <a href="javascript:void" onclick="del(4)">delete</a>
                <a href="?r=admin/addArticle&id=4">edit</a>
            </td>
        </tr>
                <tr>
            <th scope="row">1</th>
            <td>How to start Lavarel with redis --2</td>
            <td>2018-08-08 03:38:32</td>
            <td>
                <a href="javascript:void" onclick="del(1)">delete</a>
                <a href="?r=admin/addArticle&id=1">edit</a>
            </td>
        </tr>
                </tbody>
    </table>

   <nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="?r=admin/getArticleList&page=1">1</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav></div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="app/View/static/js/wangEditor.min.js"></script>
<script src="app/View/static/js/jquery.form.js"></script>
<script type="text/javascript">
    function del(id) {
        var check=confirm('Are you sure delete this article? ');
        if(check==true){
            $.ajax({
                url:"?r=Admin/deleteArticle&id="+id,
                type:"POST",
                // data:"r=admin/delete&id="+id,
                dataType:"JSON",
                async:false,
                success:function (data) {
                    if(data.code==0){
                        alert(data.msg);
                    }else {
                        alert(data.msg);
                        history.go(0);
                    }
                }
            })
        }
    }
</script>
</body>
</html><?php }
}
