<?php

if(isset($_POST)){

    $name = $_POST['nombre'];
    $mail = $_POST['correo'];
    $message = $_POST['mensaje'];



    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Mail sended by: " . $name . " \r\n";
    $message .= "his email: " . $mail . " \r\n";
    $message .= "Menssage: " . $_POST['mensaje'] . " \r\n";
    $message .= "sended: " . date('d/m/Y', time());

    $para = 'atreider@protonmail.com';
    $asunto = 'Mensaje de la Pagina';

    mail($para, $asunto, ($message), $header);

    header("Location:exito.php");


}