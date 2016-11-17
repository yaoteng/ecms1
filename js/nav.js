		$(function(){
			var fir_nav=$('.hd_nav>ul>li');
			$('.hd_nav ul>li>ul').hide();
				fir_nav.mouseenter (function(){
					var sec_nav=$(this).children('ul');
					var opy=sec_nav.css('display');
						sec_nav.show();
				});
				fir_nav.mouseleave(function(){
					var opy=$(this).children('ul').css('display');
						$(this).children('ul').hide();
				});
		});