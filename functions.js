$(document).ready(function(){
	$('.accordion-menu li ul').css('display', 'none');
	if($('li').children('ul')){
		$('li').click(function(){
			var $this = $(this);
			var $parent = $this.parent();
			if(!$this.children('ul').is(':visible')){
				$this.siblings().find('ul').slideUp(500);
				$this.siblings().find('a').find('span').html('[+]');
				$this.children('ul').slideDown(500);
				$this.children('a').children('span').html('[ - ]');
			}else if($this.children('ul').is(':visible')){
				$this.children('ul').slideUp(500);
				$this.find('a span').html("[+]");
				
			}
			return false;
		});
	}
});