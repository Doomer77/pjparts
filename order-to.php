<!DOCTYPE html>
<html>
	<head>
		<title>P.J.Parts-заявка на ТО</title>
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Russo+One&amp;subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Stalinist+One&amp;subset=cyrillic" rel="stylesheet"> 
		<meta charset="utf-8"/>
		<meta name="robots" content="index, follow"/>
		<meta name="description" content="Заказать обслуживание ДГУ FG Wilson, двигателя Perkins"/>
		<meta name="keywords" content="Заказать обслуживание ДГУ FG Wilson, двигателя Perkins"/>
		<link href="http://pjparts.ru/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="css/style.css" rel="stylesheet"/>
		<link href="normalize.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/jquery.textchange.js"></script>
		<meta name="yandex-verification" content="56b1fb2eac182864" />
	</head>  
	<body>
	
		<?php
			include("include/analyticstracking.php")
		?>
			
		<?php
			include("include/yandex-metrika.php");
		?>
			
		<main class="wrapper">
		
			<?php
				include("include/block-header.php");
			?>
		
			<div class="order-to container">
				<h1 class="order-to-h1">Оформить заявку на ТО/ПНР/Ремонт:</h1>
				<div class="form">
					<form name="order" method="post" action="to_apply_send.php">
						<ul id="to_apply">
							<li><label>Ваше Имя</label><input type="text" name="feed_name"  /></li>
							<li><label>Ваш E-mail</label><input type="text" name="feed_email"  /></li>
							<li><label>Ваш телефон</label><input type="text" name="feed_phone"  /></li>
							<li><label>Марка оборудования</label><input type="text" name="brand"  /></li>
							<li><label>Модель оборудования</label><input type="text" name="model"  /></li>
							<li><label>Серийный номер (желательно)</label><input type="text" name="serial_number"  /></li>
							<li><label>Вид работ (ТО/ПНР/Ремонт)</label><input type="text" name="type_of_work"  /></li>
							<li><label>Текст сообщения</label><textarea name="feed_text" ></textarea></li>
						</ul>
						<p align="right"><input type="submit" name="send_message" value="Отправить" id="form_submit" /></p>
					</form>
				</div>
			</div>
			
			<div class="clear"></div>
			
		<?php 
			include("include/block-footer.php"); 
		?>
		
		</main>
	</body>
</html>