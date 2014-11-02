//返回顶部
	var elem = $(".scrollUp"),
		height = $(window).height(),
		scrollTimer = null;
	
	$(window).on("scroll", function () {
		if(scrollTimer){
			clearTimeout(scrollTimer);
		}
		scrollTimer = setTimeout(function(){
			var top = $(document).scrollTop();
			
			if(top > 300){
				elem.show();
			}else{
				elem.hide();
			}
		},200);
	});
	//定义返回顶部点击向上滚动的动画
	$(".scrollUp").click(function(){
		$('html, body').animate({scrollTop:0},200);
	});