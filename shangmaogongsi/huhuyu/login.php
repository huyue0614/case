<?php 
session_start();// 启动session，并且判断 如果用户session存在，则证明已经被登录
include 'fun.php';
include 'conn.php';//数据库连接
include 'db.php';//数据库操作文件

if (isset($_SESSION['user']['username'])) {
   redirect('/','你已经登录了');
}
//引入函数库
// $sql='select * from user limit 0,1';
// $jiguo=get_one($sql,$DB);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="网站说明">
<meta name="keywords" content="网站关键字">
<meta name="author" content="huhuyu,duerhong">

<title>
    网站首页 
</title>

<!-- Bootstrap core CSS -->
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<!-- Documentation extras -->
<link href="/admin/media/base.css" rel="stylesheet">
<script src="../assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Favicons -->
</head>
<body class="loginbg">
 
<div class="login">
   <h3>用户登录</h3>
   <hr class="line" />
   <form method="POST" action="">
     <div class="form-group">
       <label for="username">用户名</label>
       <input type="text" class="form-control" name="username"  placeholder="请输入用户名" >
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">密码</label>
       <input type="password" class="form-control" name="password" placeholder="请输入密码">
     </div>
     <input type="submit" name="submit" class="btn btn-primary" value="登录">
   </form>
</div>

<?php
   if ($_POST['submit']) { //用户是否提交了表单
      $username=$_POST['username'];//获取用户名
      $password=$_POST['password'];//获取密码
      if ($username=='' or $password=='') {
         redirect('/login.php','用户名或者密码不能为空！');
      }

      $sql='select * from user where `username`="'.$username.'" and `password`="'.$password.'" limit 0,1';
      $result=get_one($sql,$DB);
      if ($result) {// 按照用户名和密码查询如果返回了结果集，说明数据库中该条记录存在
      	$_SESSION['user']['username']=$result['username'];//封装用户名到session
      	$_SESSION['user']['nickname']=$result['nickname'];//封装昵称到session
      	redirect('/index.php','登录成功！');
      }
      else{
      	redirect('/login.php','用户名或者密码错误！');
      }
   }
?>
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
