<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'service@goboar.com';                     // SMTP username
    $mail->Password   = 'L3gGEhY#HUdZ';                               // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->setLanguage('zh', '/PHPMailer/language/');

    //Recipients
    //$mail->setFrom($_POST['email'], $_POST['name']);
    $mail->setFrom('service@goboar.com', 'service');
    $mail->addAddress('service@goboar.com', 'service');     // Add a recipient
 
    $body = "".$_POST['messageText'].'</br>';
    $body .= "From : ".$_POST['name'].'</br>';
    $body .= "Email : ".$_POST['email'].'</br>';
    $body .= "Tel : ".$_POST['messageTel'];
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['messageTitle'];
    $mail->Body    = $body;
    $mail->AltBody = $_POST['messageText'];

    $mail->send();
    echo 'Message has been sent';
    //echo 1;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>