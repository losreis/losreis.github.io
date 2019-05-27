
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/Exception.php';
require 'vendor/PHPMailer.php';
require 'vendor/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'marralucas1@gmail.com';
$mail->Password = 'Candanggoplay09';
$mail->Port = 587;

//Campos

$mail->setFrom('marralucas1@gmail.com');
$mail->addReplyTo('marralucas1@gmail.com');
$mail->addAddress('marralucas1@gmail.com', 'Nome');
$mail->addAddress('marralucas1@gmail.com', 'Contato'’);

//Msg

$mail->isHTML(true);
$mail->Subject = $nome;
$mail->Body    = nl2br($mensagem, $numero, $email);
$mail->AltBody = nl2br(strip_tags($mensagem, $numero, $email));

//msg
if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
         header('Location: index.php?enviado');
    }