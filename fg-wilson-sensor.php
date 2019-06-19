<?php
	include("include/dbconnect.php");
	include("functions/functions.php");
	$cat = clearstring($_GET["cat"]);
	$type = clearstring($_GET["type"])
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Датчики FG Wilson</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js"></script>
		<meta name="description" content="Запасные части и расходные материалы для генераторов FG Wilson"/>
		<meta name="keywords" content="Запасные части и расходные материалы для генераторов FG Wilson"/>
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
							if(!empty($cat) && !empty($type))
						{
							$querycat = "AND brand = '$cat' AND type = '$type'";
						}
							else
						{
							if(!empty($type))
						{
							$querycat = "AND brand = '$cat' AND type = '$type'";
						}	else
						{
							$querycat = "";
						}
						} 
							$num = 6;
							$page = (int)$_GET['page'];
							$count = mysql_query("SELECT COUNT(*) FROM table_of_products WHERE brand='wilson' AND type='sensor' $querycat $qury_start_num",$link);
							$temp = mysql_fetch_array($count);
							if ($temp[0] > 0)
						{
							$tempcount = $temp[0];
							//Находим общее число страниц
							$total = (($tempcount - 1) / $num) + 1;
							$total = intval($total);
							$page = intval($page);
							if (empty($page) or $page < 0) $page = 1;
							if($page > $total) $page = $total;
							/*Вычисляем, начиная с какого номера следует выводить товары*/	
							$start = $page * $num - $num;
							$qury_start_num = "LIMIT $start, $num";
						} 
							$result = mysql_query("SELECT * FROM table_of_products  WHERE brand='wilson' AND type='sensor' $querycat $qury_start_num",$link);
							if(mysql_num_rows($result) > 0)
						{
							$row = mysql_fetch_array($result);
							do
						{
							echo'
								<ul class="one-products">
									<li>
										<p class="title-one-products">'.$row["title"].'</p>
										<img class="img-one-products" src="catalog/'.$row["image"].'"/>
										<div class="clear"></div>
										<p class="order-styl-p"><a class="order-styl-a" href="view_content.php?id='.$row["id_product"].'">Подробнее >></a></p>
									</li>
										<div class="clear"></div>
								</ul>
									
							';
						}
							while($row = mysql_fetch_array($result));
						}
							if($page != 1){$pstr_prev = '<li><a class="pstr_prev" href="fg-wilson-sensor.php?page='.($page - 1).'">&lt;</a></li>';}
							if($page != $total){$pstr_next = '<li><a class="pstr_next" href="fg-wilson-sensor.php?page='.($page + 1).'">&gt;</a></li>';}				
							if($page - 5 > 0) $page5left = '<li><a href="fg-wilson-sensor.php?page='.($page - 5).'">'.($page - 5).'</a></li>';	
							if($page - 4 > 0) $page4left = '<li><a href="fg-wilson-sensor.php?page='.($page - 4).'">'.($page - 4).'</a></li>';
							if($page - 3 > 0) $page3left = '<li><a href="fg-wilson-sensor.php?page='.($page - 3).'">'.($page - 3).'</a></li>';
							if($page - 2 > 0) $page2left = '<li><a href="fg-wilson-sensor.php?page='.($page - 2).'">'.($page - 2).'</a></li>';
							if($page - 1 > 0) $page1left = '<li><a href="fg-wilson-sensor.php?page='.($page - 1).'">'.($page - 1).'</a></li>';
							
							if($page + 5 <= $total) $page5right = '<li><a href="fg-wilson-sensor.php?page='.($page + 5).'">'.($page + 5).'</a></li>';	
							if($page + 4 <= $total) $page4right = '<li><a href="fg-wilson-sensor.php?page='.($page + 4).'">'.($page + 4).'</a></li>';
							if($page + 3 <= $total) $page3right = '<li><a href="fg-wilson-sensor.php?page='.($page + 3).'">'.($page + 3).'</a></li>';
							if($page + 2 <= $total) $page2right = '<li><a href="fg-wilson-sensor.php?page='.($page + 2).'">'.($page + 2).'</a></li>';
							if($page + 1 <= $total) $page1right = '<li><a href="fg-wilson-sensor.php?page='.($page + 1).'">'.($page + 1).'</a></li>';
							if ($page+5 < $total)
						{
							$strtotal = '<li><p class="nav-point">...</p></li><li><a href="fg-wilson-sensor.php?page='.$total.'">'.$total.'</a></li>';
						}
							else
						{
							$strtotal = "";
						}
							if($total > 1)
						{
							echo'
								<div class="pstrnav">
									<ul>
							';
									echo $pstr_prev.$page5left.$page4left.$page3left.$page2left.$page1left."<li><a class='pstr-active' href='fg-wilson-sensor.php?q=".$search." &page=".$page."'>".$page."</a></li>".$page1right.$page2right.$page3right.$page4right.$page5right.$strtotal.$pstr_next;
							echo '
									</ul>
								</div>
							';
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