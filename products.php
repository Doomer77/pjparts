<?php
	include("include/dbconnect.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>P.J.Parts</title>
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Russo+One&amp;subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Stalinist+One&amp;subset=cyrillic" rel="stylesheet"> 
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js"></script>
		<meta name="description" content="Запасные части и расходные материалы для FG Wilson,Perkins"/>
		<link href="http://pjparts.ru/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="assets/css/style.css" rel="stylesheet">
		<meta name="yandex-verification" content="56b1fb2eac182864" />
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/jquery.textchange.js"></script>
	</head>  
	<body class="body">
		<?php include("include/block-header.php");?>
			<div class="modal js-modal">
				<div class="modal__wrap">
			  		<div class="modal__header">
						<a href="/" class="modal__logo">
				  			<img src="assets/img/logo.svg" alt="">
						</a>
						<a href="" class="modal__close js-btn-close">
				 		 <span>Закрыть</span>
				  			<img src="assets/img/close.svg" alt="">
						</a>
			  </div>
			  <input class="modal__input js-input-search" placeholder="Начинайте вводить название детали" type="text">
			  <div class="modal__content-result">


			  </div>
			</div>
		</div>
		
		<div class="catalog-intro">
			<div class="container">
			<?php
				include("include/block-products.php");		
			?>
			<div class="section-right">
				<h1 class="section-right-h1">Запасные части и расходные материалы:</h1>
				<p class="section-right-p">Мы предлагаем Вам большой выбор недорогих расходных материалов и запасных частей.</p>
				<p class="section-right-p">Оставьте Вашу заявку на сайте, или отправьте информацию о интересующих Вас расходных материалах и запасных частях по почте <a href="mailto:info@pjparts.ru">info@pjparts.ru</a>, и мы обязательно Вам ответим.</p>
				<p class="section-right-p">При покупке запасных частей и расходных материалов Вы получаете:</p>
					<ul class="section-right-ul">
						<li>Только качественные расходные материалы и запасные части</li>
						<li>Индивидуальный подход к каждому клиенту</li>
						<li>Консультацию и подбор расходных материалов и запасных частей под конкретное оборудование</li>
						<li>Низкую цену на расходные материалы и запасные части</li>
						<li>Доставку в кратчайшие сроки</li>
						<li>Скидки и выгодные условия на проведение ТО и ремонта</li>			
					</ul>
				</div>	
			</div>
		</div>	
		<?php include("include/block-footer.php");?>
	</body>
	<script src="assets/js/fetch.js?"></script>
	<script src="assets/js/scripts.js?"></script>
</html>