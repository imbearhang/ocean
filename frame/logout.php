<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注销</title>
</head>

<body>
<?php
//注销登录
session_start(); 
session_destroy(); 
// header("location:index.php"); 
echo "'<script>history.back(-1);</script>'";
?> 
</body>
</html>