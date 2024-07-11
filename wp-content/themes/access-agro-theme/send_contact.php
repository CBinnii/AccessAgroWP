<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$me = "contato@accessagro.com.br";
$guido = "guido.visintin@accessagro.com.br";
$their_name = trim($_POST["nome"]);
$them = trim($_POST["email"]);
$subject = trim($_POST["assunto"]);
$message = trim($_POST["mensagem"]);

$assunto = "[web] ".$subject;
//$mensagem = "<p>Nome: <b>".$their_name."</b><br>E-Mail: <b>".$them."</b>";
//$mensagem .= "<hr><p><b>".$subject."</b><br>".$message."</p>";
//$mensagem .= "<hr>";

$ok_message = "success";
$err_message = "error";

$mail = new PHPMailer(true);

try {
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'email-ssl.com.br';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contato@accessagro.com.br';
    $mail->Password   = 'y)z\'"q}+:V?7D$v';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
		$mail->CharSet		=	'UTF-8';

    $mail->setFrom($me, $their_name);
    $mail->addReplyTo($them, $their_name);
    $mail->addAddress($guido, 'Guido V.');     //add a recipient

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo $ok_message;
} catch (Exception $e) {
    echo $err_message;
		echo $e;
}

if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}
