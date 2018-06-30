// JavaScript Document

$(function(){
	if($.browser.msie && $.browser.version < 5){
		$('body').addClass('ltie5');
	}
	$.fn.fullpage({
		verticalCentered: false,
		anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
		navigation: true,
		navigationTooltips: ['首页', 'HELP', 'Whale', 'Safe', 'Join']
	});
});
/*========================================================================
	Wow Animation
==========================================================================*/
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 2000);
	
