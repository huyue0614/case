<?php 
// 这里是函数库

// 重定向，用来做页面跳转
// 2个参数 跳转url 弹出窗口展示信息
// 如果info为false则直接跳转，不用弹出窗口
function redirect($url,$info=false)
{
	if (!$info) {
		echo "<script>";
		echo "window.location.href='".$url."'";
		echo "</script>";
		exit();
	}
	else{
		echo "<script>";
		echo "alert('".$info."');";
		echo "window.location.href='".$url."'";
		echo "</script>";
		exit();
	}
}
?>