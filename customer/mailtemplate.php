<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'teamzipstore@gmail.com'; // SMTP username 
$mail->Password = 'mppxcwhkynrbwfrq'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to
// Sender info
$mail->setFrom('teamzipstore@gmail.com', 'Zip Store');
$mail->addReplyTo('teamzipstore@gmail.com', 'Zip Store');
// Add a recipient
$mail->addAddress($mailtoaddress);
$mail->isHTML(true);
// Mail subject
$mail->Subject = 'Regards From Zip Store';
// Mail body content
$mail->Body = $bodyContent;
// Send email
if(!$mail->send()) {
echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
?>
