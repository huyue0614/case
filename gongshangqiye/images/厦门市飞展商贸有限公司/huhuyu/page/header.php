<?php 
session_start();// 启动session，并且判断 如果用户session存在，则证明已经被登录
include 'fun.php';
include 'conn.php';//数据库连接
include 'db.php';//数据库操作文件

if (!isset($_SESSION['user']['username'])) {
   redirect('/login.php','对不起，你还未登录。');
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bootstrap - 简洁、直观、强悍、移动设备优先的前端开发框架，让web开发更迅速、简单。">
<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="author" content="译者：王赛 <wangsai@bootcss.com>">

<title>
    网站首页
</title>

<!-- Bootstrap core CSS -->
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<!-- Documentation extras -->
<link href="/media/base.css" rel="stylesheet">
<script src="../assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
</head>
<body>
 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">后台管理系统</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">首页</a></li>
        <li><a href="#">文章管理</a></li>
        <li><a href="#">菜单管理</a></li>
        
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="请输入关键字">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            欢迎您，<?php echo $_SESSION['user']['nickname'] ?> 
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">修改资料</a></li>
          </ul>
        </li>

        <li><a href="/logout.php">注销</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


