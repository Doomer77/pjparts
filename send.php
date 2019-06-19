<?php
$name = $_REQUEST['feed_name'];
$email = $_REQUEST['feed_email'];
$feed_subject = $_REQUEST['feed_subject'];
$feed_text = $_REQUEST['feed_text'];
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=utf-8 \r\n";

$message = "<p>Новый вопрос</p>
<p><strong>Название организации или ФИО частного лица:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Тема:</strong> $feed_subject</p>
<p><strong>Текст сообщения</strong> $feed_text</p>";

mail( "pj.parts@yandex.ru", "Новое сообщение",
    $message, $headers );
  header( "Location: http://pjparts.ru/service.php" );
?>