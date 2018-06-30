<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About us</title>
<link rel="shortcut icon" href="favicon.ico" >
<link rel="stylesheet" type="text/css" href="css/about.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script src="js/login.js"></script>
</head>

<body>
<div id="bg">

<div class="logo"><img src="img/LOGO.png" alt="" width="30%"></div>

  <div id="nvai">
    <ul id="nav">
      <li><a href="index.php"><span>首页</span><span class="engdh">Home</span></a></li>
      <li><a href="news.php"><span>报道</span><span class="engdh">Report</span></a></li>
      <li><a href="public.php"><span>公益榜</span><span class="engdh">Public</span></a></li>  
      <li><a href="contact.php"><span>联系捐助</span><span class="engdh">Contact</span></a></li>
      <li><a href="#"><span>关于我们</span><span class="engdh">About us</span></a></li>
    </ul>
      <div class="bot"><img src="img/bottom.png" alt="" width="100%" height="100%"></div>
  </div>
 
  <?php
	session_start(); 
	if(!isset($_SESSION['username'])){  
	?>
        <!--登录模块-->

		<div id="main">
		<div class="demo">
			<nav class="main_nav">
				<ul>
					<li><a class="cd-signin" href="#0">登录</a></li>
					<li><a class="cd-signup" href="#0">注册</a></li>
				</ul>
			</nav>
		</div>
		<div class="cd-user-modal">
			<div class="cd-user-modal-container">
				<ul class="cd-switcher">
					<li><a href="#0">用户登录</a></li>
					<li><a href="#0">注册新用户</a></li>
				</ul>
		   		<div id="cd-login"> <!-- 登录表单 -->
					<form class="cd-form" action="login.php" method="post">
						<p class="fieldset">
						  <label class="image-replace cd-username" for="signin-username">用户名</label>
						  <input class="full-width has-padding has-border" id="signin-username" type="text" name="username" placeholder="输入用户名">
						</p>
						<p class="fieldset">
						  <label class="image-replace cd-password" for="signin-password">密码</label>
						  <input class="full-width has-padding has-border" id="signin-password" type="password" name="password" placeholder="输入密码">
						</p>
						<p class="fieldset">
						  <input type="checkbox" id="remember-me" checked>
						  <label for="remember-me">记住登录状态</label>
						</p>
						<p class="fieldset">
						  <input class="full-width2" type="submit" name="submit" value="登 录">
						</p>
			  		</form>
		   		</div>
				<div id="cd-signup"> <!-- 注册表单 -->
					<form class="cd-form" action="reg.php" method="POST">
						<p class="fieldset">
						  <label class="image-replace cd-username" for="signup-username">用户名</label>
						  <input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="输入用户名">
						</p>
						<p class="fieldset">
						  <label class="image-replace cd-password" for="signup-password">密码</label>
						  <input class="full-width has-padding has-border" id="signup-password" type="password" name="password"  placeholder="输入密码">
						</p>
						<p class="fieldset">
						  <label class="image-replace cd-password" for="signup-password">密码</label>
						  <input class="full-width has-padding has-border" id="signup-password" type="password" name="confirm"  placeholder="再次输入密码">
						</p>
						<p class="fieldset">
						  <input class="full-width2" type="Submit" name="Submit" value="注册">
						</p>
					</form>
				</div>
				<a href="#0" class="cd-close-form">关闭</a>
			</div>
		</div>
	</div> 
 <?php } else {?>
    
<div id="main2"> <span><?php  echo ''.$_SESSION['username'].'' ?></span><br>欢迎您！<br><a href="logout.php">注销</a></div>  
<?php }?>
   

  
  
  <!--登录模块-->
 


			<div class="type">
               <marquee onmouseover="stop()" direction="up" onmouseout="start()"  scrollamount="6" scrolldelay="50">
            <p class="p1">关于我们</p>
            <p class="p2"><span>我</span>们是致力于宣传海洋保护公益的网站， 从生活中点点滴滴做起，保护环境，保护海洋，就是保护我们赖以生存的的地球。关心海洋，你就能听到大海的声音 ；疼惜鱼儿，你就能分享它曼妙的舞姿。愿大海永远清澈与辽阔，愿人类更美好，保护海洋，人人有责；滴滴水源，不可浪费，海为画世界，人在城中行。</p> </marquee>
			<p class="p3">如果你也想加入我们</p>
            <p class="p4">为海洋公益事业出一份力</p> 
                <div class="join"><a href="contact.php"><img src="img/join.png" width="100%"></a></div>
            <p class="p5">爱海、护海、用海；为你、为我、为他。</p>
           
            </div>





<img src="img/about.jpg" alt="" width="100%" height="1000px" >
</div>







</body>
</html>
