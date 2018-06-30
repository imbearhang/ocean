<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
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
error_reporting(0); //关闭php调试警告提示，
$name=$_POST['username']; //用post方法对表单提交过来的数据进行处理
$password=$_POST['password'];
if($name==''||$password=='') //开始对用户输入执行判断
{
echo '用户名或密码为空<br>';
	header("refresh:2;url=index.php");
	print('2秒后自动跳转。');
	echo "<a href='javascript:history.back(-1);location.reload()'>返回</a> ";
exit ();
}
$link = mysql_connect('localhost', 'root', ''); //连接数据库
mysql_select_db('ocean',$link); //选择数据ocean_public
$sql1= "SELECT * FROM `user` WHERE `username`='$_POST[username]'"; // 执行查询语句 $_POST[username] 要用单引号括起来
$rs=mysql_query($sql1,$link);
$row=mysql_fetch_array($rs);
if ($row){ 
echo '用户名已存在<br>';
	header("refresh:2;url=index.php");
	print('2秒后自动跳转。');
	echo "<a href='javascript:history.back(-1);location.reload()'>返回</a> ";
	exit();
}
$sql2 = "INSERT INTO ocean.user (username, password) VALUES ('$_POST[username]','$_POST[password]')";
mysql_query($sql2,$link);
echo '恭喜!!注册成功'.'</br>';
	header("refresh:2;url=index.php");
	print('2秒后自动跳转。');
	echo "<a href='javascript:history.back(-1);location.reload()'>返回</a> ";
exit (); // 退出

?>
</div>
</div>
</body>
</html>