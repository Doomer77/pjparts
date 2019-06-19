<?php
	$jsonst = json_decode( file_get_contents('php://input'));
	$name_field = 'name';
	$tel_field = 'tel';
	$email_field = 'email';
	$message_field = 'message';

	$name = $jsonst->$name_field;	
	$tel = $jsonst->$tel_field;
	$email = $jsonst->$email_field;
	$message_text = $jsonst->$message_field;
	$subject = 'Новая заявка с Pj Parts';

	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html;charset=utf-8 \r\n";

	$message = "<p>Новый вопрос</p>
	<p><strong>Название организации или ФИО частного лица:</strong> $name</p>
	<p><strong>Телефон:</strong> <a href='tel:$tel'>$tel</a></p>
	<p><strong>Email:</strong> $email</p>
	<p><strong>Сообщение:</strong> $message_text</p>
	";

	$to      = 'pj.parts@yandex.ru';
	$to2     = 'violetmonox@gmail.com';
	$to3     = 'Dm7rin@gmail.com';
	$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'Content-type: text/html;charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	mail($to2, $subject, $message, $headers);
	mail($to3, $subject, $message, $headers);	
	echo $message;
?>