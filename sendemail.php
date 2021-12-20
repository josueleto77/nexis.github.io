<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contacting us. We will contact you as early as possible.'
	);
	
    $name = @trim(stripslashes($_POST['your name'])); 
    $email = @trim(stripslashes($_POST['your email'])); 
    $phone = $_POST['your phone']; 
    $company = @trim(stripslashes($_POST[''])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = 'no_reply@nxispwr.com';
    $email_to = 'jgalindo@nxispwr.com';//replace with your email

    $body = 'The following person: [ ' . $name . ' ] sent you a message via the nexispower.com website.' . "\n\n" . 'The following is their contact information:' . "\n" . 'Email:     ' . $email . "\n" . 'Telephone: ' . $phone . "\n" . 'Company:   ' . $company . "\n" . 'Subject:   ' . $subject . "\n\n" . 'Message:   <<< ' . $message . " >>>\n\n" . 'DO NOT REPLY TO THIS EMAIL.';

    $success = @mail($email_to, 'e-mail sent from nexispower.com', $body, 'From: <'.$email_from.'>');
	
    echo json_encode($status);
    die;
?>
