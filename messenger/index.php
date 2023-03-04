<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-wigth, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Мессенджер МГТУ</title>
</head>
<body class="bg-secondary">
	<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
	  <div class="container-fluid d-flex align-items-center">
	    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
	      МГТУ
	    </h1>
	    <a href="/docs/5.3/examples/cheatsheet-rtl/" class="ms-auto link-light" hreflang="ar">Вход</a>
	  </div>
	</header>
<?php
	for($i = 0; $i <3; $i++):
?>
<div id = "message" width = 100px>
	<div class="bd-example ms-4">
	        <p class="lead">
	          Текст сообщения 
	        </p>
	        </div>
</div>
<?php endfor; ?>



</body>
</html>
