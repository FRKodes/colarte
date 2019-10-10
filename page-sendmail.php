<?php
if (isset($_POST['email']) && $_POST['email'] != "") {
    
    $from                   = trim($_POST['email']);
    $nombre                 = utf8_decode($_POST['nombre']);
    $ciudad                 = utf8_decode($_POST['ciudad']);
    $telefono               = utf8_decode($_POST['telefono']);
    $email                  = utf8_decode($_POST['email']);
    $newsletter             = utf8_decode($_POST['newsletter']);
    $mensaje                = utf8_decode($_POST['mensaje']);

    require_once('./PHPMailer/class.phpmailer.php');

    $mail = new PHPMailer(true);
    $mail->From = $email;
    $mail->FromName = $nombre;
    
    // $mail->addAddress('tony@blueterrier.mx', 'Mail Muebles Colarte');
    $mail->addAddress('moisesadrian30@outlook.com', 'Mail Muebles Colarte');
    $mail->addReplyTo("contacto@mueblescolarte.com.mx", "Reply");
    $mail->addBCC("tony@blueterrier.mx");
    $mail->isHTML(true);
    $mail->Subject = "Contacto Muebles Colarte";
    $mail->Body = "<p>". $nombre ." escribi&oacute;: </p>";
    $mail->Body.= "<p><b>Email: </b>". $email ."</p>";
    $mail->Body.= "<p><b>Telefono: </b>". $telefono ."</p>";
    $mail->Body.= "<p><b>Mensaje: </b>". $mensaje ."</p>";
    $mail->Body.= "<p><b>Newsletter: </b>". $newsletter ."</p>";
    
    
    $mail->AltBody = "Nombre: " . $nombre;
    $mail->AltBody .= " // " . $ciudad;
    $mail->AltBody .= " // " . $telefono;
    $mail->AltBody .= " // " . $email;
    $mail->AltBody .= " // " . $mensaje;
    $mail->AltBody .= " // " . $newsletter;

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    
    else {echo "Message has been sent successfully"; }

}