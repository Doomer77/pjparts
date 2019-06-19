<?php
$name = $_REQUEST['feed_name'];
$email = $_REQUEST['feed_email'];
$phone = $_REQUEST['feed_phone'];
$feed_text = $_REQUEST['feed_text'];
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=utf-8 \r\n";

$message = "<p>Новый заказ</p>
<p><strong>Название организации или ФИО частного лица:</strong>$name</p>
<p><strong>Email:</strong>$email</p>
<p><strong>Телефон:</strong>$phone</p>
<p><strong>Список запасных частей:</strong>$feed_text</p>";

mail( "pj.parts@yandex.ru", "Новое сообщение",
    $message, $headers );
  header( "Location: http://pjparts.php" );
?>