<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" >
<meta charset="utf-8">
<title>Ocean Public</title>
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script src="http://libs.baidu.com/jqueryui/1.8.22/jquery-ui.min.js "></script>
<script src="js/jquery.fullPage.min.js"></script>
<script src="js/index.js"></script>
<script src="js/login.js"></script>
<script src="js/modernizr-2.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/preload.css" media="all">
<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body id="body">
<div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
<div class="logo"><img src="img/LOGO.png" alt="" width="100%"></div>
  <div id="nvai">
    <ul id="nav">
      <li><a href="#"><span>首页</span><span class="engdh">Home</span></a></li>
      <li><a href="news.php"><span>报道</span><span class="engdh">Report</span></a></li>
      <li><a href="public.php"><span>公益榜</span><span class="engdh">Public</span></a></li>  
      <li><a href="contact.php"><span>联系捐助</span><span class="engdh">Contact</span></a></li>
      <li><a href="about.php"><span>关于我们</span><span class="engdh">About us</span></a></li>
    </ul>
      <div class="bot"><img src="img/bottom.png" alt="" width="100%" height="100%"></div>
  </div>
<!--气泡-->
<div class="boll" onmouseover="ms.play()"></div>
<div class="boll2" onmouseover="ms.play()"></div>
<div class="boll3" onmouseover="ms.play()"></div>
<audio src="music/Bubble.mp3" id="boll"></audio>
<script>var ms=document.getElementById('boll');</script>
<!--视频按钮-->
<div class="box bg-2"> <a href="javascript:;" class="video" id="video">
  <button class="button button--ujarak button--border-medium button--round-s button--text-thick">观看纪录片—《海洋》</button>
  </a> </div>
<div class="video-btn" id="video-btn">
  <div class="video-area" id="video-area"></div>
  <div class="video-sug"><br><span>纪录片——《海洋》</span><br>来源：优酷网<br><p>&nbsp;&nbsp;&nbsp;前所未有地对海洋的深刻描绘，揭露海洋的壮观美景及超凡力量。本节目会带领我们游遍覆盖地球达70％的海洋世界，在它沉默而幽暗的深邃内涵里，其实掌握着所有生命的关键。每一集节目都令人目瞪口呆，让人见识一个幅员浩瀚，却又彼此紧密连系的生态系统。本系列足迹踏遍热带海滩到最险峻的深海，让人见识大部分人毕生难得一见、最奇特、最神秘的海洋生物。水面下的秘密世界即将清楚展露于观众眼前：复杂的环境里，栖息着令人咋舌的繁多物种，其间充满求生的决心、井然有序的秩序，以及丰富的戏剧性。这个世界，可以在这一刻呈现错综复杂的美丽面貌，下一刻又瞬即转为令人心痛的脆弱情境，绝对值得所有人一睹海洋真相。同时也揭露了人类对自然环境的破坏导致了海洋生物的生存危机，凸显出海洋保护的重要。</p></div>
  <a class="video-shut" id="video-shut">X</a> 
  </div>
<div id="shadow"></div>
<script>
  var obtn=document.getElementById('video');
  var ovideo=document.getElementById('video-btn');
  var oatn=document.getElementById('video-area');
  var oshut=document.getElementById('video-shut');
  var oshadow=document.getElementById('shadow');
  obtn.onclick=function () {
    ovideo.style.display='block';
    oshadow.style.display='block';
    oatn.innerHTML='<embed src="http://player.youku.com/player.php/sid/XNDA1NDczODI4/v.swf" allowFullScreen="true" quality="high" width="600" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>';
  }
  oshut.onclick= function () {
    ovideo.style.display='none';
    oshadow.style.display='none';
  }
</script> 

<!--结束-->
<?php
	error_reporting(0);
	session_start(); 
	if(!isset($_SESSION['username'])){  
	?>
<!--登录模块-->

<div id="main">
  <div class="demo">
    <nav class="main_nav">
      <ul>
        <li><a class="cd-signin" href="###0">登录</a></li>
        <li><a class="cd-signup" href="###0">注册</a></li>
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
      <a href="#0" class="cd-close-form">关闭</a> </div>
  </div>
</div>
<?php } else {?>
<div id="main2"> <span>
  <?php  echo ''.$_SESSION['username'].'' ?>
  </span><br>
  欢迎您！<br>
  <a href="logoutindex.php">注销</a></div>
<?php }?>

<!--登录模块-->

<div class="section section1">
  <div class="bg"><img src="img/section1.jpg" alt=""></div>
</div>
<div class="section section2">
  <div class="bg"><img src="img/section2.jpg" alt=""></div>
  <div class="bg21"><img src="img/bg21.png"  alt="" width="100%"></div>
  <h3>海洋正被污染</h3>
  <p class="p1">The Ocean Was Crying For</p>
  <p class="p2">HELP<span>！</span></p>
</div>
<div class="section section3">
  <div class="bg"><img src="img/section3.jpg" alt=""></div>
  <div class="bg31"><img src="img/bg31.png" alt="" width="100%"></div>
  <div class="bg32"><img src="img/bg32.png" alt="" width="100%"></div>
  <div class="bg33"></div>
  <div class="txt3">
    <p> &nbsp &nbsp 鲸是庞大的哺乳动物，它们无法像鱼那样迅速大量繁殖后代，而是像人类一样，需要喂奶育崽，所以鲸的种群增长十分缓慢。长久以来，少数国家的过度捕鲸，使鲸类面临种群灭绝的危险。</p>
  </div>
</div>
<div class="section section4">
  <div class="bg"><img src="img/section4.jpg" alt=""></div>
  <div class="bg41"><img src="img/bg41.png" alt="" width="100%"></div>
  <div class="bg42"><img src="img/bg42.png" alt="" width="100%"></div>
  <div class="bg43"><img src="img/bg43.png" alt="" width="100%"></div>
  <div class="bg44"><img src="img/bg44.png" alt="" width="100%"></div>
  <div class="txt4">
    <p> &nbsp &nbsp 人类的过渡排放使海洋生态系统遭到坏，有害物质进入海洋环境而造成污染，损害生物资源，危害人类健康，妨碍捕鱼和人类在海上的其他活动，损坏海水质量和环境质量，破坏了大自然的生态平衡。</p>
  </div>
</div>
<div class="section section5">
  <div class="bg"><img src="img/section5.jpg" alt=""></div>
  <div class="bg51"><img src="img/bg51.png" alt="" width="100%"></div>
  <div class="bg52"><a href="contact.php" class="bottom"><img src="img/bg52.png" width="100%"> </a></div>
  <div class="bg53"><img src="img/bg53.png" alt="" width="100%"></div>
</div>
</body>
</html>
