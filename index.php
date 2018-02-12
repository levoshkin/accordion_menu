<?php require __DIR__ . '/menu.php'; ?>
<html>
<head>
<title>Создание меню</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/functions.js"></script>
<link rel="stylesheet" href="/style.css">
<script language="JavaScript">

$(document).ready(function() {
	$(".accordion-menu").accordion({
		accordion: true,
		speed: 700,
		closedSign: '&#9660; ',
		openedSign: '&#9650;'
	});
});

</script>
</head>
<body>
	<h1>MENU</h1>
	<ul class="accordion-menu">
		<?php getMenuHtml($tree)?>
	</ul>
</body>
</html>
