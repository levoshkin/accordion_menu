$(document).ready(function(){
    $.fn.extend({

		accordion: function(options) {
			
			var defaults = {
				accordion: 'true',
				speed: 300,
				closedSign: '[+]',
				openedSign: '[-]'
			};
			
			var opts = $.extend(defaults, options);
			
			$('.accordion-menu li ul').css('display', 'none');
			if($('.accordion-menu li').children('ul'))
				$('.accordion-menu li a span').html(opts.closedSign);
			
			if($('li').children('ul')){
				
				$('li').click(function(){
					
					var $this = $(this);
					var $childUl = $this.children('ul');
					
					if(!$childUl.is(':visible')){
						if(opts.accordion){
							$this.siblings().find('ul').slideUp(opts.speed);
							$this.siblings().find('a').find('span').html(opts.closedSign);
						}
						
						$childUl.slideDown(opts.speed);
						$this.children('a').children('span').html(opts.openedSign);
						
					}else if($childUl.is(':visible')){
						$childUl.slideUp(opts.speed);
						$this.find('a span').html(opts.closedSign);
						
					}
					return false;
				});
			}
		}
	});
});