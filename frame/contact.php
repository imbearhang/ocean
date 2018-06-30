<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<title>contact</title>
<link rel="shortcut icon"  href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link href="file:///D|/wamp 2/www/PHP/Ocean Public/css/contact.css"
<script src="js/modernizr-2.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/preload.css" media="all">
<!--<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=I2qurTlslpYXq0LlzfKAIUffih2pXrwV"></script>
<script async src="http://c.cnzz.com/core.php"></script>-->
<script type="text/javascript" src="js/jquery.1.4.2-min.js"></script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
</p>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" src="js/contact.js"></script>
<script src="js/login.js"></script>

<!--可无视-->
<link href="css/base.css" type="text/css" rel="stylesheet" />

<!--主要样式-->
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/xes.core.js"></script>
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
		$('h1').css('color','#222222');
	}, 1000);
</script>
<div class="top">
  <div class="logo"><img src="img/LOGO.png" alt="" width="100%"></div>
  <div class="nav">
    <ul class="current">
      <li><a href="index.php">首页</a></li>
      <li><a href="news.php">报道</a></li>
      <li><a href="public.php">公益榜</a></li>
      <li><a href="#">联系捐助</a></li>
      <li><a href="about.php">关于我们</a></li>
    </ul>
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
    欢迎您！<br>
    <a href="logout.php">注销</a></div>
  <?php }?>
  
  <!--登录模块--> 
  <!--图片轮播开始-->
  <div class="sliderWrap">
    <div class="banner-TAL">
      <div class="viewport">
        <ul class="item">
          <li class="bn-bg01">
            <div class="wrapper">
              <h2 class="bn-text">手拉手<br>
                保护海洋环境</h2>
              <img class="frame" src="img/picture01.jpg" width="610" height="458" /></div>
          </li>
          <li class="bn-bg02">
            <div class="wrapper">
              <h2 class="bn-text">扬帆拥抱海洋<br>
                掌舵驶向美好</h2>
              <img class="frame" src="img/picture02.jpg" width="610" height="458" /></div>
          </li>
          <li class="bn-bg03">
            <div class="wrapper">
              <h2 class="bn-text">清新，是空气的本质<br>
                清澈，是清水的质地</h2>
              <img class="frame" src="img/picture03.jpg" width="610" height="458" /></div>
          </li>
          <li class="bn-bg04">
            <div class="wrapper">
              <h2 class="bn-text">在这里 不断探索<br>
                因有你我的努力</h2>
              <img class="frame" src="img/picture04.jpg" width="610" height="458" /></div>
          </li>
          <li class="bn-bg05">
            <div class="wrapper">
              <h2 class="bn-text">在这里 科技 互联网<br>
                与环保完美融合</h2>
              <img class="frame" src="img/picture05.jpg" width="610" height="458" /></div>
          </li>
          <li class="bn-bg06">
            <div class="wrapper">
              <h2 class="bn-text">在这里 我们一起<br>
                携手共护我们的海洋</h2>
              <img class="frame" src="img/picture06.jpg" width="610" height="458" /></div>
          </li>
        </ul>
      </div>
    </div>
    <div class="banner-TAL">
      <div class="focus-circlet f-bg01">
        <div class="focus-nav">
          <div class="focus-arrow"> <a class="arrow-top" href="javascript:;">向上</a> <a class="arrow-down" href="javascript:;">向下</a> </div>
          <ul class="focus-switch">
            <li class="selected"><a href="javascript:;">1</a></li>
            <li><a href="javascript:;">2</a></li>
            <li><a href="javascript:;">3</a></li>
            <li><a href="javascript:;">4</a></li>
            <li><a href="javascript:;">5</a></li>
            <li><a href="javascript:;">6</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
$(document).ready(function(){
    $.xes.require(["slider"],function(){
	
        var nowIndex;
        var textArray=[
     	
        ];
        var linkArray=[
   ];
        var slider=$(".banner-TAL").slider({
            btnPrevCls: '.arrow-top',  //向前按钮样式
            btnNextCls: '.arrow-down',  //向后按钮样式
            pageCls: '.focus-switch li',  //页数按钮样式
            containerCls: '.viewport ul',//具体滑动内容元素样式
            itemCls: 'li',//滑动元素
            activeCls: 'selected',//选中样式
            perItem: 1,//显示的个数
            startIndex: 0,//开始的位置
            autoPlay: true,//是否自动播放
            duration: 2000,//自动播放时速度
            fxDuration: 1000,//滑动速度
            circle: true,//是否循环
            direction: 'vertical',//方向 horizon|vertical
            onStart:function(index){
                $(".focus-logo").attr("class","focus-logo");
                $(".focus-fixed-text").hide(300,function(){
                    $(this).attr("class","focus-fixed-text");
                    $(this).attr("style","");
                    $(this).css("width","0px");
                });
                $(".white-bg").addClass("flipInY");
                nowIndex=index;
            },
            onEnd:function(index){
                $(".focus-circlet").attr("class",'focus-circlet');
                $(".focus-circlet").addClass('f-bg0'+(index+1));
                $(".focus-logo").addClass("c-bg0"+(index+1));
                if(navigator.userAgent.indexOf("IE")>=0){
                    $(".focus-fixed-text")[0].setAttribute("class","focus-fixed-text t-bg0"+(nowIndex+1));
                    $(".focus-fixed-text").show().attr("class","focus-fixed-text t-bg0"+(nowIndex+1)).animate({width:400},800,'easeOutBounce',function(){
                        slider.busy=false;
                    });
                }
            },
            onShow: function(index){
            	 if(navigator.userAgent.indexOf("MSIE 6.0") || navigator.userAgent.indexOf("MSIE 7.0") || navigator.userAgent.indexOf("MSIE 8.0") || navigator.userAgent.indexOf("MSIE 9.0")) {
					//$(".white-bg").bind("webkitAnimationEnd animationend MSTransitionEnd", function(){
						$(this).removeClass("flipInY");
						nowIndex = index;
						$(".focus-fixed-text").show().attr("class", "focus-fixed-text t-bg0"+(nowIndex+1)).animate({width:430},800,'easeOutBounce',function(){
						});
						$(".focus-fixed-text p").html(textArray[nowIndex]);
						$("#img_link").attr('href', linkArray[nowIndex]);
					//});
        		}
            } //回调
        });
    	$(".white-bg").bind("webkitAnimationEnd animationend MSTransitionEnd",function(){
	        $(this).removeClass("flipInY");
	        slider.busy =true;
	        $(".focus-fixed-text p").html(textArray[nowIndex]);
	        $("#img_link").attr('href', linkArray[nowIndex]);
	        $(".focus-fixed-text").show().attr("class","focus-fixed-text t-bg0"+(nowIndex+1)).animate({width:400},800,'easeOutBounce',function(){
	           slider.busy=false;
	        });
    	});
    });
    $("nav.nav-TAL>ul>li>a").each(function(){
        var $this=$(this),index=$("nav.nav-TAL>ul>li>a.dropdown_fn").index($this);
        if($this.is(".dropdown_fn")){

            $this.bind("mouseover",function(e){
                $("nav.nav-TAL>ul>li>a").removeClass("hover");
                $("nav.nav-TAL>ul>li>div:visible").hide();
                $("nav.nav-TAL>ul>li>div").eq(index).show();
            });
        }else{
            $this.bind("mouseover",function(e){
                $("nav.nav-TAL>ul>li>a").removeClass("hover");
                $("nav.nav-TAL>ul>li>div:visible").hide();

            });
        }

    });
    $("nav.nav-TAL>ul>li>div").bind("mouseover",function(){
        var index= $("nav.nav-TAL>ul>li>div").index($(this));
        $("nav.nav-TAL>ul>li>a.dropdown_fn").eq(index).addClass("hover");
    });
    $("div.subNav-TAL").each(function(index){
        var $this=$(this);
        $this.bind("mouseout",function(e){
            if($this.find("*").index($(e.relatedTarget))<=0){
                $this.hide();
            }
        });
    });
});
</script> 
  <!--结束--> 
</div>
<div class="top2">
  <div class="p1">
    <p><span>联系我们 /</span> 捐助通道</p>
  </div>
</div>
<div class="mid">
  <div class="msg1"><img src="img/contact1.png" alt="" width="100%">
    <p>工作时间：周一到周五 8:00-17:00</p>
    <div class="type1">
      <p>捐赠联系方式</p>
      <p>单位：Ocean Public</p>
      <p>电子邮箱：80864519@qq.com</p>
      <p>QQ : 80864519</p>
      <div class="img1"><img src="img/logo2.png" width="100%" alt=""></div>
    </div>
  </div>
  <div class="msg2"><img src="img/contact2.png" alt="" width="100%"> 
    <!--图片动画-->
    <div class="cloud">
      <marquee align="center" behavior="alternate" direction="right" contenteditable="true" scrollamount="5" scrolldely="10" width="300px" >
      <img src="img/cloud4.png">
      </marquee>
    </div>
    <form id="form2" action="form.php" method="POST" >
      <p class="text_inf"> 留言反馈 / Information :<br>
        <textarea class="input2" type="text" name="txt_inf" size="30" maxlength="300" style="height:15em; width:20em;"></textarea>
      </p>
      <p>您的姓名 / Name : <br>
        <input class="input" type="text" name="name2" size="30" maxlength="20">
        <br>
        您的电话 / Tel ：<br>
        <input class="input" type="text" name="tel" size="30" maxlength="13">
        <br>
        电子邮箱 / Email ：<br>
        <input class="input" type="text" name="email" size="30" maxlength="25">
        <br>
      </p>
      <p id="sub1">
        <input class="sub1" type="submit" name="提交" value="提 交">
      </p>
    </form>
  </div>
</div>
<div class="Lower">
  <div class="frame1">
    <p><span>Address /</span> Welcome to</p>
  </div>
  <div class="type2">
    <p>地址：广东省广州市白云区江高镇学苑路1号（广东白云学院）</p>
    <p>电话：(020)-36093333</p>
    <p>电子邮箱：80864519@qq.com</p>
    <p>QQ：80864519</p>
    <p>工作时间：周一到周五 8:00-17:00<br>
      周六日及节假日放假</p>
  </div>
  <div style="width:50%;height:55%;border:#ccc solid 1px; display:block;float:left; margin-left:5%;margin-top:-30%;" id="dituContent"></div>
  
  <!--        <div class="baidmap"><div id="allmap"></div></div>--> 
  
</div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.215311,23.276944);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_RIGHT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"Ocean&nbsp;Public",content:"广东白云学院",point:"113.213892|23.278206",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script> 
<!--<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(113.219075,23.276214), 20);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("广州");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>-->

<div class="bottom">
  <div class="txt">
    <p>Copyright © 2016</p>
    <p> Ocean Public.All Rights Reserved.</p>
    <p></p>
  </div>
  <div class="frame2"></div>
  <ul class="chat">
    <li class="qq"> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=80864519&site=qq&menu=yes"><img border="0" src="img/qq-yes.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> 
      <!--<a href="#"><img src="img/qq-yes.png" width="40px" alt=""></a></li>-->
    <li class="weibo"><a href="#"><img src="img/sina-yes.png" width="40px" alt=""></a></li>
    <li class="email"><a href="#"><img src="img/email-yes.png" width="40px" alt=""></a></li>
  </ul>
</div>
</body>
</html>
