<?php 
    $destinatario = "koya.web.servicio@gmail.com";

    $nombre = $_POST['cliente_nombre'];
    $asunto = $_POST['cliente_asunto'];
    $correo = $_POST['cliente_correo'];
    $mensaje = $_POST['cliente_mensaje'];

    $header = "<h1 style=color: green;>¡Nueva consulta!</h1>";
    $mensajeCompleto ="<h1 style=color:pink;>". $mensaje ."</h1> <br>" .
    "Nombre: ".$nombre."<br>
    Email:". $correo.
    "<br> Buen día";

    $header = "From:" . $destinatario . "\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    if(!mail($destinatario, $asunto, $mensajeCompleto, $header)){
        echo `<script>alert('El mensaje no pudo enviarse, intente nuevamente')</script>`;
        header('location:https://koyaweb.com.ar/contacto.php');
    }else{
        header('location:https://koyaweb.com.ar/contacto_enviado.php');
    }
?>