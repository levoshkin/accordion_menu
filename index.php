<?php require __DIR__ . '/menu.php'; ?>
<html>
<head>
<title>Создание меню</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="functions.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>MENU</h1>
	<div class="accordion-menu">
		<?php getMenuHtml($tree)?>
	</div>
</body>
</html>
