<?php require __DIR__ . '/menu.php'; ?>
<html>
<head>
<title>Создание меню</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script>
$(document).ready(function(){
	$('.accordion-menu li ul').css('display', 'none');
	$('li:has("ul")').on('click', function(){
		if($(this).children('ul').css('display') == 'none'){
			$(this).siblings().find('ul').slideUp();
			$(this).siblings().find('a').find('span').html('&#9660; ');
			$(this).children('ul').slideDown();
			$(this).children('a').children('span').html('&#9650; ');
		}
	});
});
</script>
</head>
<body>
	<h1>MENU</h1>
	<div class="accordion-menu">
		<?php getMenuHtml($tree)?>
	</div>
</body>
</html>
