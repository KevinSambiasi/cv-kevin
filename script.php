<?php
include './librairy-php/PHPMailer/src/PHPMailer.php';

use PHPMailer\PHPMailer\PHPMailer;

include './librairy-php/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->Port = 1025;
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->setFrom('contact@email.com', 'contact');
$mail->addAddress('kevin03071991@hotmail.com', 'Kevin');
if ($_POST['email'] != null && $_POST['nom'] != null) {
    $mail->addReplyTo($_POST['email'], $_POST['nom']);
}


if ($_POST['nom'] != null) {
    $mail->Subject = 'Coucou ' . $_POST['nom'];
} else {
    $mail->Subject = 'Coucou';
}

if ($_POST['message'] != null) {
    $mail->Body = $_POST['message'];
} else{ $mail->Body = 'bonne ap';

}

if (!$mail->send()) {
    var_dump($mail->ErrorInfo);
} else {
    session_start();
    $_SESSION['message'] = "Message envoyé";
    header('Location: http://localhost/cv-kevin/');
    exit;
}
