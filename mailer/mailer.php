<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
$mail1 = new PHPMailer(true);

try {
    //Server settings
    $mail1->SMTPDebug = 0;                      
    $mail1->isSMTP();                                            
    $mail1->Host       = 'smtp.gmail.com';                     
    $mail1->SMTPAuth   = true;                                  
    $mail1->Username   = 'usman67483@gmail.com';                     
    $mail1->Password   = 'eoxrrgffcbephrsb';                           
    $mail1->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          
    $mail1->Port       = 587;                                  

    $mail1->setFrom('usman67483@gmail.com', 'usman');
    $mail1->addAddress($email, $name);
    $mail1->addReplyTo('usman67483@gmail.com', 'usman');


    $mail1->isHTML(true);      
    $mail1->Subject = 'Email Registered Successfully';
    $mail1->Body    = 'your email is '. $email . ' and your password is '. $password;
    $mail1->AltBody = 'Admin: Daniyal Yameen';

    $mail1->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail1->ErrorInfo}";
}



?>