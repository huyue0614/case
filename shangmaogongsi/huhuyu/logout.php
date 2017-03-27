<?php 
// 设置页面编码格式
header("Content-type: text/html; charset=utf-8");
session_start();// 启动session，并且判断 如果用户session存在，则证明已经被登录
include 'fun.php';
unset($_SESSION['user']);//注销session
redirect('/login.php','注销成功！');
?>
