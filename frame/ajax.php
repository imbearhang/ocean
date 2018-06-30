<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
error_reporting(0);
$link = mysqli_connect("localhost","root", ""); //连接数据库
	
	//设置字符串编码
	
	mysqli_query($link,"set names utf8");
	
	//选择数据库
	
	mysqli_select_db($link,'ocean');
	
	//获取表单数据。
	
	$sql = "INSERT INTO ocean.usermsgn (textmsn) VALUES ('$_POST[textmsn]')";
	mysqli_query($link,$sql);

?>
</body>
</html>