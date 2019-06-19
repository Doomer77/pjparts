<?php
$name = $_REQUEST['feed_name'];
$email = $_REQUEST['feed_email'];
$phone = $_REQUEST['feed_phone'];
$brand = $_REQUEST['brand'];
$model = $_REQUEST['model'];
$serial_number = $_REQUEST['serial_number'];
$type_of_work = $_REQUEST['type_of_work'];
$feed_text = $_REQUEST['feed_text'];
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=utf-8 \r\n";

$message = "<p>Новый заказ</p>
<p><strong>Название организации или ФИО частного лица:</strong>$name</p>
<p><strong>Email:</strong>$email</p>
<p><strong>Телефон:</strong>$phone</p>
<p><strong>Марка оборудования:</strong>$brand</p>
<p><strong>Модель оборудования:</strong>$model</p>
<p><strong>Серийный номер:</strong>$serial_number</p>
<p><strong>Вид работ:</strong>$type_of_work</p>
<p><strong>Текст сообщения</strong>$feed_text</p>";

mail( "pj.parts@yandex.ru", "Новое сообщение",
    $message, $headers );
  header( "Location: http://pjparts.ru/order-to.php" );
?>