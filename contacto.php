<?php 
// use PHPMailer\PHPMailer\PHPMailer;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// if(isset($_POST['submit'])){
//   $nombre = $_POST['cliente_nombre'];
//   $asunto = $_POST['cliente_asunto'];
//   $correo = $_POST['cliente_correo'];
//   $mensaje = $_POST['cliente_mensaje'];
// try {
//     //Server settings
//     $mail = new PHPMailer(true);
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
//     $mail->isSMTP();                                            // Send using SMTP
//     $mail->Host       = 'mail.koyaweb.com.ar';                    // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'servicio@koyaweb.com.ar';                     // SMTP username
//     $mail->Password   = '!j)&=Zcgp&nJ';                               // SMTP password
//     $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//     $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
//     //Recipients
//     $mail->setFrom('koya.web.servicio@gmail.com', 'Servicio Koya Web');
//     $mail->addAddress($correo);     // Add a recipient
//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = $asunto;
//     $mail->Body    = '<h3 style=color: #2AC0FA> Hemos recibido tu mensaje, te responderemos a la prevedad</h3>';
//     $mail->send();
//     echo '<h3 style=color: green>El mensaje se ha enviado correctamente. Gracias</h3>';
// } catch (Exception $e) {
//     echo "'<h3 style=color: red>El mensaje no se pudo enviar. Intente más tarde</h3>': {$mail->ErrorInfo}";
// }
// }
?>
    <?php 
    include "templates/header.php";
    ?>
    <main>
        <section class="contact">
            <div class="contact_title">
                <p>Contactantos</p>
                <p>Envíanos tu consulta y te responderemos a la brevedad</p>
            </div>
            <div class="contact_content">
            <div class="contact_socialNetworks">
                    <td><a href="https://www.instagram.com/koya.web/?hl=es-la" target="blank"><i class="fab fa-instagram"></i></a></td>
                    <td><a href="https://www.facebook.com/Koya-Web-107819357839864" target="blank"><i class="fab fa-facebook-f"></i></a></td>
                    <td><a href="https://wa.me/5491126434069?text=Me%20gustaría%20obtener%20más%20información%20sobre%20sus%20servicios" " target="blank"><i class="fab fa-whatsapp"></i></a></td>
                </div> 
                <div class="contact_formContainer">
                    <form method="POST" action="enviar_correo.php">
                        <label for="name" class="lbl" id="nameLabel">Nombre</label>
                        <input class="inputs-form"type="text" id="name" name="cliente_nombre" maxlength="20">
    
                        <label for="subject" class="lbl" id="subjectLabel">Asunto</label>
                        <input class="inputs-form" type="text" id="subject" name="cliente_asunto" maxlength="20">
    
                        <label for="email" class="lbl" id="emailLabel">Email</label>
                        <input class="inputs-form" type="email" id="email" name="cliente_correo">
    
                        <label for="message" class="lbl" id="textareaLabel" >Consulta</label>
                        <textarea  id="message" name="cliente_mensaje"></textarea>

                        <input type="submit" value="Enviar" class="btn-contac" name="submit">
                    </form>
                </div>                   
            </div>
        </section>
    </main>
    <?php 
      include "templates/wpp.php";
      include "templates/footer.php";
    ?>
    <script src="https://kit.fontawesome.com/2d78e61024.js" crossorigin="anonymous"></script>
    <script src="js/contactos1.js"></script>
</body>
</html>