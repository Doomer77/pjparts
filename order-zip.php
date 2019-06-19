<!DOCTYPE html>
<html>
	<head>
		<title>P.J.Parts-заявка на ЗИП</title>
		  <meta charset="UTF-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js"></script>
		  <link href="assets/css/style.css" rel="stylesheet">
		  <meta name="robots" content="index, follow"/>
		  <meta name="description" content="Обслуживание дизельных генераторов FG Wilson, SDMO, Caterpillar, Cummins"/>
		  <meta name="keywords" content="Обслуживание дизельных генераторов FG Wilson, SDMO, Caterpillar, Cummins"/>
		  <link href="http://pjparts.ru/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
		  <meta name="yandex-verification" content="56b1fb2eac182864"/>
	</head>  
	<body>
	<?php include("include/analyticstracking.php");?>
	<?php include("include/yandex-metrika.php");?>
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
  <div class="intro-order">
    <div class="container">
				<h1>Оформить заявку на ЗИП:</h1>
				<div class="form">
					<form name="order" method="post" action="order-zip_send.php">
						<ul id="to_apply">
							<li><label>Ваше Имя</label><input type="text" name="feed_name"  /></li>
							<li><label>Ваш E-mail</label><input type="text" name="feed_email"  /></li>
							<li><label>Ваш телефон</label><input type="text" name="feed_phone"  /></li>
							<li><label>Список запасных частей</label><textarea name="feed_text" ></textarea></li>
						</ul>
						<p align="right"><input type="submit" name="send_message" value="Отправить" id="form_submit" /></p>
					</form>
				</div>
			</div>
		</div>	
			
		<?php 
			include("include/block-footer.php"); 
		?>
		</body>

<script src="assets/js/fetch.js?"></script>
<script src="assets/js/scripts.js?"></script>
</html>