<?php
/* Smarty version 3.1.32, created on 2018-08-08 06:10:21
  from 'D:\phpStudy\WWW\lazy\app\View\Admin\addarticle.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6a894d160601_78716532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7083d3a356c79aa5c1e1c9ce38b5cec9a08104b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\addarticle.html',
      1 => 1533708618,
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
      1 => 1533535381,
      2 => 'file',
    ),
    '031e8631566fe1bcae177e1161bde04dcfc06dff' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\lazy\\app\\View\\Admin\\admin_nav.html',
      1 => 1533694116,
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
      1 => 1533535381,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => true,
),true)) {
function content_5b6a894d160601_78716532 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="app\View\static\img\logo.jpg">
    <title>edit article</title>
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
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><div class="container">
    <h1>edit the article</h1>
    <form method="post" id="form" action="?r=Admin/insertArticle">
        <div class="form-group">
            <label for="top_category">top category:</label>
            <select id="top_category" class="form-control form-control-sm" name="top_cate">
                <option value="0">without category</option>
                                <option value="1" >PHP</option>
                                <option value="4" >database</option>
                            </select>
        </div>
        <div class="form-group">
            <label for="second_category">top category:</label>
            <select id="second_category" class="form-control form-control-sm" name="second_cate">
                <option value="0">without category</option>
                            </select>
        </div>
        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" name="title"  id="title" class="form-control form-control-sm" >
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose image</label>
        </div>
        <div class="form-group">
            <div id="editor">
                           </div>
        </div>
        <input type="hidden" class="form-control" id="text" name="text" value="">
                <button type="button" class="btn btn-primary" onclick="sub()">Submit</button>
    </form>
</div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="app/View/static/js/wangEditor.min.js"></script>

<script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    // or var editor = new E( document.getElementById('editor') )
    editor.create()
    function sub() {
        var html=editor.txt.html();
        var form=$("#form");
        $("#text").attr('value',html);
        form.submit();
    }
</script>
<script>
    $("#top_category").change(function () {
        $("#second_category").html("");
        $("#second_category").append("<option value=\"0\">without category</option>");
        var ss = $(this).children('option:selected').val();
        $.ajax({
            url:"?r=Admin/getSecond&pid="+ss,
            type:'POST',
            dataType:"JSON",
            async:false,
            success:function (data) {
                if(data.code==0){
                    alert(data.msg);
                }else {
                    var arr=data.data;
                    arr.forEach(function (index,value) {
                        console.log( value, index, this );
                        $("#second_category").append("<option value=\""+index['id']+"\">"+index['name']+"</option>");
                        // $("#second_category").appendChild('')
                    })

                }
            }
        })
    });
    
</script>
</body>
</html><?php }
}
