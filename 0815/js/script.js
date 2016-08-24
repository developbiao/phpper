$(function (){
	$(".link .button").hover(function (){
			var title=$(this).attr("data");
			$(".tip em").text(title);
			var pos = $(this).position().left; //获取a标签相对父元素的定位
			var dis = ($('.tip').outerWidth() - $(this).outerWidth()) /2;
			var l = pos - dis;

			$(".tip").css({'opacity':1, 'left':l + 'px'}).animate({'top':145, 'opacity':1}, 300);
	},
	 function (){
	 	if(!$(".tip").is('animated'))
	 	{//解决在一个队列里面动画bug
	 		$(".tip").animate({'top':160, 'opacity':0}, 500);
	 	}

	});
});