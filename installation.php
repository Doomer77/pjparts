<!DOCTYPE html>
<html>
	<head>
		<title>Производство ЭЩР</title>
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Russo+One&amp;subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Stalinist+One&amp;subset=cyrillic" rel="stylesheet"> 
		<meta charset="utf-8"/>
		<meta name="robots" content="index, follow"/>
		<meta name="description" content="Производство и монтаж электрощитового оборудования"/>
		<meta name="keywords" content="Производство и монтаж электрощитового оборудования, производство ЩР и АВР "/>
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
			
			<div class="installation container">
				<h1 class="installation-h1">Производство и монтаж электрощитового оборудования</h1>
				<p class="installation-p">Не секрет, что от качественного и надежного монтажа электрощитового оборудования, зависит дальнейшая работа всех электропотребителей в частном доме или квартире. От монтажа, выполненного без соответствия <strong>ГОСТам</strong> и стандартам электробезопасности, могут возникнуть аварийные ситуации.</p>
				<div class="installation-div-content">
					<div class="installation-div">
						<img src="img/to-us.png" />
						<p>Некачественная сборка</p>
					</div> 
					<div class="installation-div">
						<img src="img/after-us.png" />
						<p class="installation-div-p">Сборка нашими специалистами</p>
					</div> 
				</div>
				
				<div class="clear"></div>
				
				<h2 class="installation-h2">Наши приемущества:</h2>
				<ul class="installation-ul">
					<li>Высокое качество работы</li>
					<li>Выполнение в кратчайшие сроки</li>
					<li>Допуски к работам с напряжением до 1000V</li>
					<li>Качественные комплектующие</li>
					<li>Выполнение по индивидуальному заказу</li>
					<li>Низкая цена</li>
					<li>Обслуживание частного сектора</li>
					<li>Техническая поддержка 24/7</li>			
				</ul>
				<h2 class="installation-h2">Наши услуги:</h2>
				<div class="installation-div-content2">
					<div class="installation-div2">
						<img src="img/avr-installation.png" title="Производство и монтаж АВР" />
						<p>Производство и монтаж АВР</p>
					</div> 
				</div>
				<div class="installation-div-content2">
					<div class="installation-div2">
						<img src="img/schr-instllation.png" title="Производство и монтаж ЩР" />
						<p>Производство и монтаж ЩР</p>
					</div> 
				</div>
				
				<div class="clear"></div>
				
				<h1 class="service-h2">Заказать монтаж ЭЩО:</h1>
				<div class="form">
					<form name="order" method="post" action="send.php">
						<ul id="feedback">
							<li><label>Ваше Имя</label><input type="text" name="feed_name"  /></li>
							<li><label>Ваш E-mail</label><input type="text" name="feed_email"  /></li>
							<li><label>Тема</label><input type="text" name="feed_subject"  /></li>
							<li><label>Текст сообщения</label><textarea name="feed_text" ></textarea></li>
						</ul>
						<p align="right"><input type="submit" name="send_message" id="form_submit" value="Отправить" /></p>
					</form>
				</div>
			</div>
			
			<?php
				include("include/block-footer.php");
			?>
			
		</main>
	</body>
</html>