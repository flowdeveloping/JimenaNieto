<?php 
    $destinatario = 'jime.nieto@gmail.com';

    //esto es al correo al que se enviara el mensaje

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $header = "Send";
    $messageComplete = $message . "\nSend: " . $name;


    mail($destinatario, $name, $messageComplete, $header);
    echo "<script>alert('correo enviado')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>