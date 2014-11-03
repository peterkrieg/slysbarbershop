<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$phone = $_POST['cf_phone'];







$mail_to = 'pkrieg2@gmail.com';
$subject = 'Message from a site visitor: '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: ' .$phone."\n";
$body_message .= 'Message: '.$field_message."\n";


// $headers = 'From: '.$field_email."\r\n";
// $headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);






// Below stuff isn't completely necessary

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message! We will contact you shortly.');
		window.location = 'http://slysbarbershop.com'
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to pkrieg2@gmail.com');
		window.location = 'http://slysbarbershop.com';
	</script>
<?php
}


?>