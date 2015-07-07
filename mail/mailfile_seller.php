
<?php
require 'PHPMailerAutoload.php';
require('class.phpmailer.php');

$mail = new PHPMailer;
$mail->SMTPDebug = 3;                              
$mail->isSMTP();                                      
$mail->Host =   'md-64.webhostbox.net';
$mail->SMTPAuth = true;                              
$mail->Username = 'nitesh@weboforce.com';                 
$mail->Password = 'NItesh$100';                           
$mail->SMTPSecure = 'TLS';                           
$mail->Port = 587; 
$mail->From = 'nitesh@weboforce.com';
$mail->FromName = 'Nitesh';
$mail->addAddress($seller_email, $seller_name);
$mail->isHTML(true);                                 
$mail->Subject = $subject;
$mail->Body    = $body;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    
    header("location:index.php");
}


echo $row['approved_seller_email'];

?>