<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>提交</title>
</head>
<style>
#main{ padding:15% 25%;}
.logo{ float:left; display:block;width:250px; height:250px; }
.top{
float:left;display:block; width:300px; height:200px; line-height:100px; text-align:center;  font-size:30px; color:#FFFFFF; font-family:'Microsoft YaHei UI'; margin-left: 15%; border: dashed #FFFFFF 3px; border-radius:30px;}
.top a{text-decoration:none;font-size:25px;color:#FFFFFF;}
</style>

<body  background="img/sign.jpg" no-repeat>
<div id="main">
<div class="logo"><img src="img/logo2.png" width="100%" alt=""></div>
<div class="top">

<?php
error_reporting(0);



$link = mysqli_connect("localhost","root", ""); //连接数据库

//设置字符串编码

mysqli_query($link,"set names utf8");

//选择数据库

mysqli_select_db($link,'ocean');

//获取表单数据。

$sql = "INSERT INTO ocean.information (name, tel, email ,txt_inf) VALUES ('$_POST[name2]','$_POST[tel]','$_POST[email]','$_POST[txt_inf]')";
mysqli_query($link,$sql);

	echo '提交成功<br>';
	header("refresh:2;url=contact.php");
	print('2秒后自动跳转。');
	echo "<a href='javascript:history.back(-1);location.reload()'>返回</a> ";
	exit (); // 退出
?>
</div>
</div>
</body>
</html>