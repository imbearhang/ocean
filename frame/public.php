<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Public</title>
<link rel="shortcut icon"  href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/public.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/preload.css" media="all">
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script src="js/modernizr-2.8.3.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.js"></script>
<script language="javascript" src="js/jquery.dimensions.js"></script>
<script language="javascript" src="js/public.js"></script>
<script src="js/login.js"></script>
<SCRIPT LANGUAGE="JavaScript"> 
　　function MyAutoRun()
　　{ 
      $.ajax({                                                  //调用jquery的ajax方法   
        type: "POST",                                      //设置ajax方法提交数据的形式   
        url: "ajax2.php",                                       //把数据提交到sign2.php      
        success: function(days) {
		document.getElementById("days").innerHTML=days;
        }
      });
    }
　　window.onload=MyAutoRun();
/*========================================================================
	Wow Animation
==========================================================================*/
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 500);
	
</SCRIPT>
</head>

<body>
<div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
<div id="top">
  <div class="logo"><img src="img/LOGO.png" alt="" width="100%"></div>
  <div class="nav">
    <ul class="current">
      <li><a href="index.php">首页</a></li>
      <li><a href="news.php">报道</a></li>
      <li><a href="#">公益榜</a></li>
      <li><a href="contact.php">联系捐助</a></li>
      <li><a href="about.php">关于我们</a></li>
    </ul>
  </div>
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
    欢迎您！<br>
    <a href="logout.php">注销</a></div>
  <?php }?>
  
  <!--end--> 
  <!--图片动画-->
  <div class="cloud">
    <marquee align="center" behavior="alternate" direction="down" scrollamount="5" scrolldely="10" width="100%" height="150px">
    <center>
      <img src="img/cloud1.png">
    </center>
    </marquee>
  </div>
  <div class="cloud2">
    <marquee align="center" behavior="alternate" direction="up" scrollamount="2" scrolldely="10" width="100%" height="200px;">
    <center>
      <img src="img/cloud2.png">
    </center>
    </marquee>
  </div>
  <!--end-->
  
  <div id="h2">
    <h2>公益榜</h2>
  </div>
  <div class="circle1">
    <p class="type1">姓名:李四</p>
    <p class="type2">公益指数：1</p>
    <img src="img/tx1.png" alt="" width="90%"></div>
  <div class="circle2">
    <p class="type1">姓名:张三</p>
    <p class="type2">公益指数：3</p>
    <img src="img/tx2.png" alt="" width="90%"></div>
  <div class="circle3">
    <p class="type1">姓名:王五</p>
    <p class="type2">公益指数：2</p>
    <img src="img/tx3.png" alt="" width="90%"></div>
  <div class="bg1"><img src="img/background.jpg" alt=" " width="100%"></div>
</div>
<div class="roll">
  <div id="oecon">
    <ul>
      <li> <a href="#" class="face"><img src="img/tx2.png" width="60px" height="60px" /></a>
        <h3><a href="#">张三</a></h3>
        <p>既然是铁石、大地、无边的海洋。尽管坚强，也不抵无常一霸，美貌又怎能控诉他这种猖狂。——莎士比亚《“既然是铁石、大地、无边的海洋”》</p>
      </li>
      <li> <a href="#" class="face"><img src="img/tx1.png" width="60px" height="60px"/></a>
        <h3><a href="#">李四</a></h3>
        <p>海洋，需要你我共同保护，感谢网站为我们提供丰富的海洋保护知识，让我醍醐灌顶，明白平时所做的行为的不当，让我受益匪浅。</p>
      </li>
      <li> <a href="#" class="face"><img src="img/tx3.png" width="60px" height="60px" /></a>
        <h3><a href="#">王五</a></h3>
        <p>没有海洋，就没有地球上的丰富一切，珍惜和保护海洋，就是保护我们自己。</p>
      </li>
      <li> <a href="#" class="face"><img src="img/tx1.png" width="60px" height="60px" /></a>
        <h3><a href="#">赵六</a></h3>
        <p>垃圾回收，保护地球，举手之劳，参与环保，地球是我们从后代手中借来的、环保不分民族，生态没有国界不要旁观，请加入行动者的行列今天节约一滴水，留给后人一滴血。</p>
      </li>
    </ul>
  </div>
  <?php
	if(isset($_SESSION['username'])){  
	error_reporting(0);
	
		?>
<!--  <form name="userform" method="POST">-->
    <input  id="textmsn" type="text" name="textmsn" class="textmsn" placeholder=" 把您的想法与大家分享吧！" onFocus="noshow()" onBlur="show()">
    <br>
    <input  id="button" class="input_out" type="submit" name="submsn" value="发 送"
            onfocus="this.className='input_on';" 
            this.onmouseout=function(){this.className='input_out'};" 
            onmousemove="this.className='input_move'" 
            onmouseout="this.className='input_out'" ">
<!--  </form>-->
  <?php } else {?>
<!--  <form name="userform">-->
    <input type="text" id="textmsn" name="textmsn" class="textmsn" placeholder=" 把您的想法与大家分享吧！" onClick="noshow()" onBlur="show()">
    <br>
    <input class="input_out" type="submit" name="submsn" value="发 送"
            onfocus="this.className='input_on';" 
            this.onmouseout=function(){this.className='input_out'};" 
            onmousemove="this.className='input_move'" 
            onmouseout="this.className='input_out'" onClick="input2()"">
<!--</form>-->
  <?php }?>
  <script>
  function noshow()
 {
	 if(textmsn.placeholder==""){
	 document.textmsn.value="";
	 }
 }
 function show()
 {	
 	if(textmsn.value==""){
	document.textmsn.placeholder=" 把您的想法与大家分享吧！";
	}	 
 }
//ajax
$(document).ready(function(){         //DOM的onload事件处理函数   
       $("#button").click(function(){           //当按钮button被点击时的处理函数   
         postdata();                                       //button被点击时执行postdata函数   
     });   
   });   
   
   function postdata(){                              //提交数据函数   
      $.ajax({                                                  //调用jquery的ajax方法   
        type: "POST",                                      //设置ajax方法提交数据的形式   
        url: "ajax.php",                                       //把数据提交到ajax.php   
        data: "textmsn="+$("#textmsn").val(),     //输入框中的值作为提交的数据   
        success: function(msg){                  //提交成功后的回调，msg变量是ajax.php输出的内容。   
          alert("发送成功，等待管理员审核");                     
          $("#textmsn").val('');  
        }   
      });   
   }   
 </script> 
  <!--图片动画2-->
  <div class="cloud3">
    <marquee align="center" behavior="alternate" direction="down" scrollamount="5" scrolldely="10" height="300px">
    <center>
      <img src="img/cloud3.png">
    </center>
    </marquee>
  </div>
  <div class="cloud4">
    <marquee align="center" behavior="alternate" direction="up" scrollamount="5" scrolldely="10"  height="300px;">
    <center>
      <img src="img/cloud4.png">
    </center>
    </marquee>
  </div>
  <!--end--> 
</div>
<div id="second">
  <div class="box1">
    <div class="box1_1"><img src="img/codex2.png" alt="" width="100%"></div>
  </div>
  <div class="box2">
    <div id="days">0</div>

  </div>
  <?php
	if(isset($_SESSION['username'])){  
	?>
  <input type="image" src="img/ten.png" id="input" onBlur="changedays()" >
  <?php } else {?>
  <input type="image" src="img/ten.png" id="input2" onClick="input2()">
  <?php }?>
  <script>

  //ajax2
$(document).ready(function(){         //DOM的onload事件处理函数
       $("#input").click(function(){           //当按钮button被点击时的处理函数   
         postdata2();                                       //button被点击时执行postdata函数   
     });   
   });

  function postdata2(){                              //提交数据函数
    $.ajax({                                                  //调用jquery的ajax方法
      type: "POST",                                      //设置ajax方法提交数据的形式
      url: "sign.php",                                       //把数据提交到sign.php
      success: function(msg) {
        if (msg == 1){
          alert("增加成功");            //提交成功后的回调，msg变量是sign.php输出的内容。
        return;}
        else {
        var timelog = msg;
        var info= "经过" +timelog+ "后才能再次增加哦！";
        alert(info);}
      }
    });
  }
   
   function changedays(){                             //提交数据函数   
      $.ajax({                                                  //调用jquery的ajax方法   
        type: "POST",                                      //设置ajax方法提交数据的形式   
        url: "ajax2.php",                                       //把数据提交到sign.php      
        success: function(days) {
		document.getElementById("days").innerHTML=days;
        }
      });
    }
   
  </script>

  <div id="type2">
    <p>您的指数</p>
    <p>代表您对我们的支持程度</p>
    <p>感谢！</p>
  </div>
  <div class="type2_1">
    <p>点击增加您的公益指数</p>
  </div>
  <div class="bg2"><img src="img/background2.jpg" alt="" width="100%"></div>
</div>
<div class="bg3_1"><img src="img/bg3_1.png" alt="" width="100%"></div>
<div class="bg3_2"><img src="img/bg3_2.png" alt="" width="100%"></div>
<div class="bg3_3"><img src="img/bg3_3.png" alt=""></div>
<div id="type3_1">
  <p><span>海</span>洋垃圾是指海洋和海岸环境中具持久性的、人造的或经加工的固体废弃物。海洋垃圾影响海洋景观，威胁航行安全，并对海洋生态系统的健康产生影响，进而对海洋经济产生负面效应。这些海洋垃圾一部分停留在海滩上，一部分可漂浮在海面或沉入海底。正确认识海洋垃圾的来源，从源头上减少海洋垃圾的数量，有助于降低海洋垃圾对海洋生态环境产生的影响。</p>
</div>
<div class="type3_2">
  <p><span>陆</span>源污染大量未经处理的城市污水和工业废水直接或间接往入海洋。陆源污染物质种类最广、数量最多，对海洋环境的影响最大。陆源污染物对封闭和半封闭海区的影响尤为严重。陆源污染物可以通过临海企事业单位的直接入海排污管道或沟渠、入海河流等途径进入海洋。</p>
</div>
<div class="type3_3">
  <p><span>石</span>油及其炼制品（汽油、煤油、柴油等）在开采、炼制、贮运和使用过程中进入海洋环境而造成的污染。是目前一种世界性的严重的海洋污染。石油烃对海洋生物的毒害，主要是破坏细胞膜的正常结构和透性，干扰生物体的酶系，进而影响生物体的正常生理、生化过程。其防治必须依靠全球性的合作才能较为有效的实现。</p>
</div>
<div class="bg3"><img src="img/background4.jpg" alt="" width="100%"></div>
<div id="floatMenu">
  <ul class="menu1">
    <li><a href="#h2"> 公益榜 </a></li>
  </ul>
  <ul class="menu2">
    <li><a href="#oecon" > 留言区 </a></li>
    <li><a href="#type2"> 增加指数 </a></li>
    <li><a href="#type3_1"> 污染介绍 </a></li>
  </ul>
  <ul class="menu3">
    <li><a href="contact.php"> 下一页 </a></li>
  </ul>
</div>
<div class="bottom">
  <div class="txt">
    <p>Copyright © 2016</p>
    <p> Ocean Public.All Rights Reserved.</p>
    <p></p>
  </div>
  <div class="frame2"></div>
  <ul class="chat">
    <li class="qq"> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=80864519&site=qq&menu=yes"><img border="0" src="img/qq-yes.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
    <li class="weibo"><a href="#"><img src="img/sina-yes.png" width="40px" alt=""></a></li>
    <li class="email"><a href="#"><img src="img/email-yes.png" width="40px" alt=""></a></li>
  </ul>
</div>
</body>
</html>