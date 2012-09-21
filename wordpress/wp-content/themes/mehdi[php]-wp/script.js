// JavaScript Document

$(function(){
	$('.div-img a').click(function(){
		$('.darkbox').css({
			display : 'block',
			'z-index' : '1000',
			'background-image' : 'url('+$(this).attr('href')+')'
		}).animate({
			opacity : 1
		},400).click(function(){
			$(this).animate({
				opacity : 0,
			},400,'ease-out',function(){
				$(this).css({display : 'none'})
				})
			});
	return false;
	})
});