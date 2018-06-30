<?php
session_start();
error_reporting(0);
$time=time();
date_default_timezone_set('prc');
$link = mysqli_connect("localhost","root", ""); //连接数据库
//选择数据库
mysqli_select_db($link,'ocean');
//设置字符串编码
mysqli_set_charset($link,"utf8");

$checkSignSql= "SELECT `signtime` FROM `user` WHERE username='{$_SESSION['username']}'";
$res= mysqli_query($link,$checkSignSql);

while($r=mysqli_fetch_assoc($res)){
    $checktime=$r['signtime'];}

$time1= strtotime($checktime);
$time2= strtotime("now");
$time3= $time2-$time1;
if ($time3 > 86400){
    $updateSignSql = "UPDATE ocean.user SET signdays=signdays+1,signtime = now() WHERE username='{$_SESSION['username']}'";
    mysqli_query($link,$updateSignSql);
    echo 1;}
else {
    $time4=date("Y-m-d", strtotime ("$time1 +1 day"));
    $time5=$time4-$time2;
    echo date("H:i:s",intval($time5));
}
?>