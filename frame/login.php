<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8"/>
<title>用户登陆</title>
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
session_start();
error_reporting(0);
//连接数据库

$dblink=mysql_connect("localhost","root","") or die("数据库连接失败");

//设置字符串编码

mysql_query("set names utf8");

//选择数据库

mysql_select_db("ocean");

//获取表单数据。

$name=$_POST['username'];

$pwd=$_POST['password'];

$sql="select * from user where username='$name'";  


$rs=mysql_query($sql); //执行sql查询

$num=mysql_num_rows($rs); //获取记录数

if($num){ // 用户存在；

   $row=mysql_fetch_array($rs);

   if($pwd==$row['password']){ //对密码进行判断。
	
    $_SESSION['username']=$name;


	echo '<script>alert("登陆成功，正在为你跳转至后台页面!")</script>'; 
    header("location:index.php");

    }else{

	echo "密码不正确<br>";
	
	header("refresh:2;url=index.php");
	echo "<script>history.back(-1);</script>";
	print('2秒后自动跳转。');
	echo "<a href='javascript:history.back(-1);location.reload()'>返回</a> ";
	exit ();
	} 
}else{

	echo "用户不存在<br>";
	header("refresh:2;url=index.php");
	print('2秒后自动跳转。');
	echo "<a href='javascript:history.back(-1);location.reload()'>返回</a> ";
	exit ();
}

?>
</div>
</div>
</body>
</html>