<?php
session_start();
error_reporting(0);
$link = mysqli_connect("localhost","root", ""); //连接数据库
//选择数据库
mysqli_select_db($link,'ocean');
//设置字符串编码
mysqli_set_charset($link,"utf8");
$Sql= "SELECT `signdays` FROM `user` WHERE username='{$_SESSION['username']}'";
$res= mysqli_query($link,$Sql);
while($r=mysqli_fetch_assoc($res)){
    $checkdays=$r['signdays'];}
echo $checkdays;
?>