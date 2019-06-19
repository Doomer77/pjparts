<?php
	include("include/dbconnect.php");
	include("functions/functions.php");
	$id = clearstring($_GET["id"]);
	session_start();
	$seoquery = mysql_query("SELECT seo_words,seo_description FROM table_of_products WHERE id_product='$id' AND visible='1'",$link);
		If (mysql_num_rows($seoquery) > 0)
    {
        $resquery = mysql_fetch_array($seoquery);
    } 
		If ($id != $_SESSION['countid'])
	{
		$querycount = mysql_query("SELECT count FROM table_of_products WHERE products_id='$id'",$link);
		$resultcount = mysql_fetch_array($querycount); 

		$newcount = $resultcount["count"] + 1;

		$update = mysql_query ("UPDATE table_of_products SET count='$newcount' WHERE products_id='$id'",$link);  
	}

		$_SESSION['countid'] = $id; 
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
		<meta name="description" content="Запасные части и расходные материалы для двигателей Perkins"/>
		<link href="http://pjparts.ru/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="assets/css/style.css" rel="stylesheet">
		<meta name="yandex-verification" content="56b1fb2eac182864" />
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/jquery.textchange.js"></script>
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
		<div class="catalog">
			<div class="container">		
				<?php include("include/block-products.php");?>
				<div class="content-products">
					<?php
							$result = mysql_query("SELECT * FROM table_of_products WHERE id_product='$id' AND visible='1'",$link);
							if(mysql_num_rows($result) > 0)
						{
							$row = mysql_fetch_array($result);
							do
						{
							echo'
								<p class="title-one-products">'.$row["title"].'</p>
									<img class="img-one-products-max" src="catalog/'.$row["image"].'"/>
									<p class="products-description">'.$row["discription"].'</p>
									<div class="clear"></div>
									<p class="order-styl-p"><a class="order-styl-a" href="order-zip.php" target="_blank">Заказать</a></p>
									<ul class="price-and-count">
										<li>Цена: '.$row["price"].',00 рублей</li>
										<li>В наличие: '.$row["count"].' шт.</li>
									</ul>
									
							';
						}
							while($row = mysql_fetch_array($result));
						}
					?>
				</div>
			</div>
		</div>
		<?php include("include/block-footer.php");?>
	</body>
	<script src="assets/js/fetch.js?"></script>
	<script src="assets/js/scripts.js?"></script>
</html>