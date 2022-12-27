<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php"; //PHPMailer Object 


function sendMail($mailAddress,  $MailBody, $mailSubject, $isHTML = false,)
{
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.gtabd.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'helal@hostingta.com';                     //SMTP username
        $mail->Password   = 'Afeef@1234';                               //SMTP password
        $mail->SMTPSecure = 'STARTTLS';            //Enable implicit TLS encryption
        $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('helal@hostingta.com', 'Tawhid Enterprise');
        //Add a recipient
        $mail->addAddress($mailAddress, 'Tawhid Enterprise');
        $mail->isHTML($isHTML);
        $mail->Body = $MailBody;
        $mail->Subject = $mailSubject;

        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        echo "the problem is $e";
    }
}
