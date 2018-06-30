// JavaScript Document

function input_1(){
	document.getElementById("box2_2img").src="img/1.png";
	 alert("感谢支持，每天只能点一次哦！");
	 }
function input2(){
	 alert("感谢支持，请先登录哦！");
	 return false;
	 }

var name = "#floatMenu";
	var menuYloc = null;
	
		$(document).ready(function(){
			menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
			$(window).scroll(function () { 
				offset = menuYloc+$(document).scrollTop()+"px";
				$(name).animate({top:offset},{duration:500,queue:false});
			});
		}); 
		
$(function(){
    var scrtime;
    $("#oecon").hover(function(){
         clearInterval(scrtime);
    },function(){
        scrtime = setInterval(function(){
            	var ul = $("#oecon ul");
                var liHeight = ul.find("li:last").height();
                ul.animate({marginTop : liHeight+40 +"px"},1000,function(){
                	ul.find("li:last").prependTo(ul);
                	ul.find("li:first").hide();
                	ul.css({marginTop:0});
                	ul.find("li:first").fadeIn(1000);
                });        
        },2000);
     }).trigger("mouseleave");

});