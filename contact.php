<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$field1= $_POST['field1'];
$field2= $_POST['field2'];
$field3= $_POST['field3'];
$field4= $_POST['field4'];
$field5= $_POST['field5'];
$field6= $_POST['field6'];
$field7= $_POST['field7'];
$field8= $_POST['field8'];
$field9= $_POST['field9'];
$field10= $_POST['field10'];



$mail_to = 'michael@mjstokes.com';
$subject = 'Message from '. $name;


$body_message = 'From: ' .$name. "\n";
$body_message .= 'E-mail: ' .$email. "\n";
$body_message .= 'Phone: ' .$phone. "\n";
$body_message .= 'Age: ' .$field1. "\n";
$body_message .= 'Height: ' .$field2. "\n";
$body_message .= 'Weight: ' .$field3. "\n";
$body_message .= 'Health Goals: ' .$field4. "\n";
$body_message .= 'What have you tried before?: ' .$field5. "\n";
$body_message .= 'How many meals?: ' .$field6. "\n";
$body_message .= 'Snacks: ' .$field7. "\n";
$body_message .= 'How many times you eat out?: ' .$field8. "\n";
$body_message .= 'How much water you drink?: ' .$field9. "\n";
$body_message .= 'What time of day are you mostly tired?: ' .$field10;
// $body_message .= 'Message: ' .$field_message;

$headers = 'From: '.$email."\r\n";
$headers .= 'Replay-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);
header("Location: profile-success.php");



if ($mail_status) { ?>

	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		history.back(1);
		
	</script>
	
	<?php 

}

else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to michael@mjstokes.com');

		history.back(1);
	</script>
	<?php 

}

	 ?>
		 










 ?>