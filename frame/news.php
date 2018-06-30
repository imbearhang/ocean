<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ocean Public news</title>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script src="js/login.js"></script>
<script src="js/modernizr-2.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/preload.css" media="all">
<link rel="stylesheet" type="text/css" href="css/reset_y.css">
<link rel="stylesheet" type="text/css" href="css/news.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="impress-not-supported">
<div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
<script>
/*========================================================================
	Wow Animation
==========================================================================*/
	setTimeout(function(){
		$('body').addClass('loaded');
	}, 2000);
</script>
<div id="topnav">
  <div class="logo"><img src="img/LOGO.png" alt="" width="70%"></div>
  <div class="nav">
    <ul class="current">
      <li><a href="index.php">首页</a></li>
      <li><a href="#">报道</a></li>
      <li><a href="public.php">公益榜</a></li>
      <li><a href="contact.php">联系捐助</a></li>
      <li><a href="about.php">关于我们</a></li>
    </ul>
  </div>
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
      <a href="#0" class="cd-close-form">关闭</a> </div>
  </div>
</div>
<?php } else {?>
<div id="main2"> <span>
  <?php  echo ''.$_SESSION['username'].'' ?>
  </span><br>
  <a href="logout.php">注销</a> &nbsp;&nbsp;欢迎您！</div>
<?php }?>

<!--登录模块-->

<div class="bg"><img src="img/bg04.jpg" width="100%" /></div>
<header class="top" id="top">
  <div class="music" id="bgMusicSwitch" title="停止背景音乐">
    <div class="triangle"></div>
    <div class="pause pause1"></div>
    <div class="pause pause2"></div>
  </div>
</header>
<section id="timeline" class="timeline">
  <div id="line" class="line_white"></div>
  <div id="impress">
    <div id="timeList">
      <div class="step year" data-x="-600" data-y="0" data-scale ="0.5" id="0">
        <div class="year2016">2016</div>
        <div class="list_show">陆地<br>
          海洋、天空<br>
          三者如兄弟。<br>
          ——雪莱</div>
      </div>
      <div class="timeList_item step" data-x="0" data-y="0" id="1">
        <div class="circle">05/05</div>
        <h2 class="timeList_item_title">中国海监广西区总队组织实施“碧海2016”和“海盾2016”行动 </h2>
        <div class="list_show show1" > <img src="img/event1.jpg" width="500">
          <h2><a href="#"> 2016行动</a></h2>
          <p>此次专项行动有力打击和遏制非法围填<br>
            海等海洋违法行为法大案、要案。</p>
        </div>
      </div>
      <div class="timeList_item step"  data-x="200" data-y="0" id="2">
        <div class="circle">04/27</div>
        <h2 class="timeList_item_title">东营“碧海2016”专项执法行动启动</h2>
        <div class="list_show"> <img src="img/event2.jpg">
          <h2><a href="#">严查海洋污染</a></h2>
          <p class="m160">陆源污染居高不下 蓝色海洋呼吁<br>
            法治组合拳<br>
            日前，由中国海监东营市支队牵头实施<br>
            的东营市“碧海2016”专项执法行动正<br>
            式拉开帷幕。</p>
        </div>
      </div>
      <div class="timeList_item step" data-x="400" data-y="0" id="3">
        <div class="circle">03/09</div>
        <h2 class="timeList_item_title">微塑料污染对海洋生物的残忍伤害</h2>
        <div class="list_show"> <img src="img/event3.png" width="500">
          <h2><a href="#">触目惊心</a></h2>
          <p>微塑料通过各种途径进入海洋<br>
            阻碍了海洋植物所需光线<br>
            传播了有毒物质以致毒害了海洋生物。</p>
        </div>
      </div>
      <div class="timeList_item step" data-x="600" data-y="0" id="4">
        <div class="circle">02/15</div>
        <h2 class="timeList_item_title">真·海蓝</h2>
        <div class="list_show show3"> <img src="img/event4.jpg" width="500">
          <h2><a href="#">大海真蓝</a></h2>
          <p> &nbsp;&nbsp;&nbsp;&nbsp;小的时候，我听爸妈谈起了“大海”这两个字眼，一连串的疑问便在我心中油然而生：海有大明湖那样诗情画意吗？...大海真好，我从中读到了博大的胸怀、不屈不挠的毅力以及海纳百川精神。</p>
        </div>
      </div>
      <div class="step" data-x="600" data-y="0" data-scale ="0.5" id="2015">
        <div class="year2015"> 2015 </div>
        <div class="list_show year"> 伟大的心<br>
          像海洋一样，永远不会封冻。<br>
          ——白尔尼 </div>
      </div>
      <div class="timeList_item step" data-x="1000" data-y="0" id="5">
        <div class="circle">10/02</div>
        <h2 class="timeList_item_title">敲响海洋污染的警钟</h2>
        <div class="list_show"> <img src="img/event5.jpg" width="500">
          <h2><a href="#">墨西哥湾大漏油</a></h2>
          <p>2010年4月20日，英国石油公司在美国墨西哥湾租用的钻井平台“深水地平线”发生爆炸，导致大量石油泄漏，酿成一场经济和环境惨剧。</p>
        </div>
      </div>
      <div class="timeList_item step" data-x="1200" data-y="0" id="6">
        <div class="circle">07/04</div>
        <h2 class="timeList_item_title">阿迪达斯“行动”</h2>
        <div class="list_show"> <img src="img/event6.jpg" width="500">
          <h2><a href="#">阿迪达斯做了一双鞋</a></h2>
          <p>为了提高人们对于海洋污染的认识，阿迪达斯的设计团队特地推出了一款由回收的海洋塑料废弃物所制成的运动鞋 。</p>
        </div>
      </div>
      <div class="timeList_item step" data-x="1400" data-y="0" id="7">
        <div class="circle">05/26</div>
        <h2 class="timeList_item_title">海洋石油污染</h2>
        <div class="list_show show4"> <img src="img/event7.jpg">
          <h2><a href="#">海洋石油污染 </a></h2>
          <p>石油及其炼制品（汽油、煤油、柴油等）<br>
            在开采、炼制、贮运和使用过程中进入<br>
            海洋环境而造成的污染。是目前一种世界<br>
            性的严重的海洋污染。其防治必须依靠全<br>
            球性的合作才能较为有效的实现。</p>
        </div>
      </div>
      <div class="timeList_item step" data-x="1600" data-y="0" id="8">
        <div class="circle">04/17</div>
        <h2 class="timeList_item_title">海洋污染：船舶污染</h2>
        <div class="list_show"> <img src="img/event8.jpg" width="500">
          <h2><a href="#">船舶污染</a></h2>
          <p>船舶污染主要是指船舶在航行、停泊港口、装卸货物的过程中对周围水环境和大气环境产生的污染，主要污染物有含油污水、生活污水、船舶垃圾有三类，另外，也将产生粉尘、化学物品、废气等。</p>
        </div>
      </div>
      <div class="timeList_item step" data-x="1800" data-y="0" id="9">
        <div class="circle">03/01</div>
        <h2 class="timeList_item_title">海洋污染:塑料污染</h2>
        <div class="list_show show3"> <img src="img/event9.jpg" width="500">
          <h2><a href="#">塑料污染</a></h2>
          <p><img src="img/gui.jpg" /></p>
        </div>
      </div>
      <div class="timeList_item step refresh" data-x="5000" data-y="0" id="25">
        <div class="list_show"> <a href='javascript:replay();'><img src="img/refress.png"/></a>
          <p class="end">谢谢</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="gotop"> <a href="#top"><img src="img/top.png" title="回顶部"/></a></div>
<script type="text/javascript" src="js/impress.js"></script> 
<script> 
   (function() {
     if (! 
     /*@cc_on!@*/
     0) return;
     var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');
     var i= e.length;
     while (i--){
         document.createElement(e[i])
     } 
})() 
</script> 
<script>var impress = $.browser.msie?undefined:impress();

//预加载图片
new Image().src = "img/bg01.jpg";
new Image().src = "img/bg02.jpg";
new Image().src = "img/bg03.jpg";
new Image().src = "img/bg04.jpg";

var replay = function(){
	if(impress){
		impress.goto($("#0")[0]);
	}else{
		location.reload();
	}
};


var event_cache = null;

var loop = true,timing=null;

$(function(){			
	
	 $(window).bind('scroll resize',function(){
        if($(window).scrollTop() >= 1)
            $('.gotop').css('display','block');
        else
            $('.gotop').css('display','none');
    });   
	
	var cache_event_top = function(){
		if(event_cache!=null)
			return;
		event_cache = new Array(24);
		var i = 0;
		var length = event_cache.length;
		for(;i<length;i++){
			var id = i+1;
			event_cache[i] = $("#"+id).position().top;
		}
	}
		
	var resize = function(){
		
		var width = $(window).width();
		var height = $(window).height();
		$(".bg img").css("width",width);
		$(".bg img").css("height",height);
		
	};
		
	var cur_month = 2;
	var scroll = function(){
		if($.browser.msie){
			cache_event_top();
			var st = $(window).scrollTop();
			var month = getMonthByTop(st);
			if(month!=cur_month){
				changeBackground(month);
				cur_month = month;
			}
		}
	};
	
	resize();
	
	$(window).resize(function(){
		resize();
	});
	
	$(window).scroll(function(){
		scroll();
	});
	
	$(".circle").click(function(){
			loop = false;
		if(timing)
			clearInterval(timing);
	});
	$(".refresh img").click(function(){
		loop = true;
		$(".refresh img").addClass("rotate45");
		setTimeout(function(){
			$(".refresh img").removeClass("rotate45");
		},2000);	
	});
	if(!$.browser.msie){
		if($.browser.safari)
			bgMusic = new Audio('music/music.mp3');
		else
			bgMusic = new Audio('music/music.ogg');
		bgMusic.loop = true;
		bgMusic.volume = 0.7;
		$('#bgMusicSwitch').click(function(){
			if(bgMusic.paused){
				bgMusic.play();
				$(".triangle").css("display","none");
				$(".pause").css("display","block");
				$("#bgMusicSwitch").attr("title","暂停背景音乐");
			}else{
				bgMusic.pause();
				$(".pause").css("display","none");
				$(".triangle").css("display","block");
				$("#bgMusicSwitch").attr("title","播放背景音乐");
			}});
		var bgSwitch = function(){
			$('#bgMusicSwitch').trigger('click');
		}
				
		bgSwitch();
	}else{
		$(".music").hide();
	}		
	
});


if(impress)impress.init();

var last_month = 4;

var changeBackground = function(month){
	var body = $("body");
	var url = "";
	if(month == 12 || month == 1 || month==2){
		if(last_month==4)
			return;
		last_month = 4;
		url = "img/bg04.jpg";
		$(".impress-supported .list_show h2").css("color","#0087f1");
		$(".impress-not-supported .timeList_item_title").css("color","#0087f1");
	}else if(month>=3 && month<=5){
		if(last_month==1)
			return;
		last_month = 1;
		url = "img/bg01.jpg";
		$(".impress-supported .list_show h2").css("color","#fff");
		$(".impress-not-supported .timeList_item_title").css("color","#eca200");
	}else if(month>=6 && month<=8){
		if(last_month==2)
			return;
		last_month = 2;
		url = "img/bg02.jpg";
		$(".impress-supported .list_show h2").css("color","#82e211");
		$(".impress-not-supported .timeList_item_title").css("color","#82e211");
	}else{
		if(last_month==3)
			return;
		last_month = 3;
		url = "img/bg03.jpg";
		$(".impress-supported .list_show h2").css("color","#ffca00");
		$(".impress-not-supported .timeList_item_title").css("color","#ffca00");
	}
	$(".bg img").attr("src",url);
};

if(!$.browser.msie){
	document.addEventListener('impress:stepenter', function(e){
		var cur = arguments[0].target;
		var date = $(cur).find(".circle").html();
		if(date){
			var month = +date.split("/")[0];
			changeBackground(month);
		}
		if(!loop)
			return;
		if (typeof timing !== 'undefined') clearInterval(timing);
		var duration = 4000;
		timing = setInterval(function(){
			var dom = impress.next();
			var id = +$(dom).attr("id");
			if(id==25){
				clearInterval(timing);
				loop = false;
			}
		}, duration);
	});
}
</script>
</body>
</html>
