<?php

    if($_POST) {
        $visitor_email = "";
        $visitor_message = "";
        $recipient = "diegograssino@gmail.com"
         
        if(isset($_POST['visitor_email'])) {
            $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
            $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        }
         
        if(isset($_POST['visitor_message'])) {
            $visitor_message = htmlspecialchars($_POST['visitor_message']);
        }
         
        $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $visitor_email . "\r\n";
         
        if(mail($recipient, "Tiene un mensaje desde fidenoa.ar", $visitor_message, $headers)) {
            echo "<h4>Su mensaje ha sido enviado exitosamente!</h4>";
        } else {
            echo '<h4>Ha ocurrido un error!</h4>';
        }
         
    } else {
        echo '<h4>Ha ocurrido un error!</h4>';
    }
     
    ?>