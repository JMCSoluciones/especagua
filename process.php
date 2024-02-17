<?php
    use Exception as GlobalException;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
   
    require 'email/phpmailer/src/PHPMailer.php';
    require 'email/phpmailer/src/SMTP.php';
    require 'email/phpmailer/src/Exception.php';
    include 'model/conexion.php';
    include 'validaciones.php';

    if(!isset($_POST['oculto'])){
        exit();
    }
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// Verificar el reCAPTCHA
$recaptchaSecretKey = "6LeYiHYpAAAAAKefevnGHVLQj-1cWeHSi3U5Kpce";
$response = $_POST['g-recaptcha-response'];
$apiUrl = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$response";
$verifyResponse = file_get_contents($apiUrl);
$data = json_decode($verifyResponse);

if ($data->success) {

//Obtención de datos POST
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$fecha = date("Y/m/d");
//Validación de caracteres especiales

$nombreisvalid = sinCespeciales($nombre) ? 'valid' : 'invalid';
$telefonoisvalid = sinCespeciales($telefono) ? 'valid' : 'invalid';
$mensajeisvalid = sinCespecialesM($mensaje) ? 'valid' : 'invalid';
if($nombreisvalid == 'invalid'){
    echo "Error : el campo nombre no puede contener caracteres especiales";
    exit();
}
if($telefonoisvalid == 'invalid'){
    echo "Error : el campo teléfono no puede contener caracteres especiales";
    exit();
}
if($mensajeisvalid == 'invalid'){
    echo "Error : el campo mensaje no puede contener caracteres especiales";
    exit();
}

//Validación campo NOMBRE
sinNumeros($nombre,"Nombre");
sinEspacios($nombre,"Nombre");
noVacio($nombre,"Nombre");
dosEspacios($nombre,"Nombre");
digitosNombre($nombre,"Nombre");

// Validación campo TELÉFONO
sinEspacios($telefono,"Teléfono");
noVacio($telefono,"Teléfono");
dosEspacios($telefono,"Teléfono");
digitosTelefono($telefono,"Teléfono");
soloNumeros($telefono,"Teléfono");

// //Validación campo MENSAJE
digitosMensaje($mensaje,"Mensaje");

     
    $mail = new PHPMailer(true);
    try{
            //$mail ->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail ->isSMTP();
            $mail ->Host = 'mail.jmcsoluciones.com';
            $mail ->SMTPAuth = true;
            $mail ->Username = 'contacto@jmcsoluciones.com';
            $mail ->Password = 'Ma840916030985$';
            $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail ->Port = 587;
            $mail -> CharSet = 'UTF-8';
            $mail->addCustomHeader('Content-Type: text/html; charset=UTF-8');
            $mail->setFrom('contacto@jmcsoluciones.com','JMC Soluciones'); 
            $mail->addAddress($email, $nombre);
            $mail->addCC('josue@jmcsoluciones.com');
            $mail->isHTML(true);
            $mail->Subject = 'Hemos Recibido Tu Mensaje - JMC Soluciones';
            $mail->Body = '<div style="font-family: "Raleway", sans-serif; width: 800px; margin: 20px auto;">
            <div style="color: #0c2461e6; border-radius:10px; padding: 10px; max-width: 800px; margin: 0 auto;">
<h1 style="text-align: center; border-bottom: 2px solid #f7b102; padding: 5px 20px;">Contacto - JMC Soluciones</h1>
<p style="text-align: right;"><strong>Fecha: </strong>'. $fecha . '</p>

<p> <strong>Estimado  '. $nombre . '</strong></p>
              <p>¡Gracias por ponerte en contacto con JMC Soluciones! Hemos recibido tu mensaje y estamos emocionados de saber más sobre tus necesidades y proyectos.

Nuestro equipo revisará la información proporcionada y nos pondremos en contacto contigo lo antes posible para discutir cómo podemos ayudarte en tus metas digitales.

Agradecemos tu confianza en JMC Soluciones y estamos ansiosos por comenzar esta colaboración.

</p>
<p>Atentamente,
<br>
EQUIPO
JMC Soluciones
<br>
<img src="https://jmcsoluciones.com/assets/images/isoJMC.svg" width="60px"/>
</p>
<hr>
              <h2> Datos registrados </h2>
<p><strong> Teléfono registrado: </strong>'. $telefono . '</p>
            <p><strong> Email registrado: </strong>'. $email . '</p>
            <p> <strong>Mensaje: </strong>'. $mensaje . '</p>
              
</div>
</div>';
            $mail->send();
            echo "Operación exitosa: ¡Gracias por tu mensaje! Estamos emocionados por conectar contigo. Nuestro equipo revisará tu información y nos pondremos en contacto contigo lo antes posible. ¡Apreciamos tu interés en JMC Soluciones!";
            exit();

    }catch(GlobalException $e){
        echo 'Error: ' . $mail->ErrorInfo;
    }                        
} else {
    // Muestra un error si el reCAPTCHA no se validó
    echo "Error: reCAPTCHA no válido.";
}   
?>